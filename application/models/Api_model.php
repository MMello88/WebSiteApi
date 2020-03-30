<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Api_model extends CI_Model {

  public function  __construct() {
      parent::__construct();
  }

  public function get($table, $where = [], $joins = []){
    $this->db->select('*');
    $this->db->from($table);

    if(!empty($joins)){
      foreach ($joins as $join) {
        $this->db->join($join["table"], $join["condition"], $join["type"]);
      }
    }

    if (!empty($where)){
      $this->db->where($where)->order_by('1');
    } 

    return $this->db->get()->result();
  }

  public function create($table, $data){
    if($this->db->insert($table, $data)){
        return $this->db->insert_id();
      } else {
        header($_SERVER['SERVER_PROTOCOL'] . ' 500 Internal Server Error');
        echo json_encode(["Validation" => ['code' => $this->db->error()['code'], 'message' => $this->db->error()['message']]]);
        return null;
      }
  }

  public function update($table, $data, $where){
    return $this->db->update($table, $data, $where);
  }

  public function delete($table, $where){
    return $this->db->delete($table, $where);
  }

  public function check_login($userData){
    $query = $this->db->get_where('users', array('Email' => $userData['Email']));
    if ($this->db->affected_rows() > 0) {

      if($query->row('Ativo') === "True"){
        $password = $query->row('Senha');
        if (md5($userData['Senha']) === $password) {
            $row = $query->row_array();
            unset($row["Senha"]);
            return [
                'status' => "TRUE",
                'data' => $row,
                'message' => "Login realizado com sucesso!!"
            ];

        } else {
            return ['status' => "FALSE", 'error' => ["Senha" => "Invalid Password "]];
        }
      } else {
        return ['status' => "FALSE", 'error' => ["Email" => "Usuário Desativado"]];
      }

    } else {
        return ['status' => "FALSE", 'error' => ["Email" => "Invalid Email"]];
    }
  }

  public function forgot($email){
    $query = $this->db->get_where('users', array('Email' => $email));
    if ($this->db->affected_rows() > 0) {

      $hash = md5(date('Y-m-d H:i:s'));
      $dataLimite = date_format(date_add(new DateTime("now"), date_interval_create_from_date_string('3 days')), 'Y-m-d');

      $row = $query->row_array();

      $this->db->update(
        'users', 
        ["IdReset" => $hash, "DataReset" => $dataLimite], 
        ["Id" => $row["Id"]]
      );

      return [
        'status' => "TRUE",
        'data' => ["Email" => $email, "Nome" => $row["Nome"], "IdReset" => $hash],
        'message' => "Enviamos o link de acesso para restaurar sua senha."
      ];
    } else {
      return ['status' => "FALSE", 'error' => ["Email" => "Invalid Email"]];
    }
  }

  public function recover($hash, $senha){
    $row = $this->db->query("SELECT * FROM users WHERE IdReset = '$hash' AND DataReset >= CURDATE()")->row_array();
    if ($this->db->affected_rows() > 0) {
      $this->db->update(
        'users', 
        ["Senha" => $senha, "IdReset" => null, "DataReset" => null], 
        ["Id" => $row["Id"]]
      );
      return [
        'status' => "TRUE",
        'data' => [],
        'message' => "Senha recuperada com sucesso!"
      ];
    } else {
      return ['status' => "FALSE", 'error' => ["Email" => "Tempo limite expirado para recuperar a senha."]];
    }
  }

  public function getPerfilMenu($UsersId, $PerfisId){
    $sql = "SELECT m.Id, m.Nome, m.Icone, m.url, m.Ativo
              FROM perfismenu pm
              LEFT JOIN menus m ON m.Id = pm.MenusId
              LEFT JOIN perfisuser pu ON pu.PerfisId = pm.PerfisId
              LEFT JOIN perfis p ON p.Id = pu.PerfisId
             WHERE pu.UsersId = {$UsersId}
               AND pu.PerfisId = {$PerfisId}
               AND p.Ativo = 'True'
               AND m.Ativo = 'True'
             GROUP BY m.Id, m.Nome, m.Icone, m.url, m.Ativo";
    $menus = $this->db->query($sql)->result();

    foreach ($menus as $key => $menu) {
      $sql = "SELECT * FROM submenus WHERE MenusId = {$menu->Id} AND Ativo = 'True'";
      $submenus = $this->db->query($sql)->result();
      $menus[$key]->submenus = $submenus;
    }

    return ["status" => "TRUE", "data" => $menus, "message" => "Montagem do Menu Realizada com Sucesso!"];
  }
}