<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Api_model extends CI_Model {

  public function  __construct() {
      parent::__construct();
  }

  public function get($table, $where = []){
    if (!empty($where)){
      return $this->db->select('*')->from($table)->where($where)->order_by('1')->get()->row();
    } else {
      return $this->db->get($table)->result();
    }
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
}