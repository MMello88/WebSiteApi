<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

  private $table = "users";

  public function  __construct() {
    parent::__construct();
    header('Content-Type: application/json');
  }
  public function get(){
    $rows = $this->api->get($this->table);
    print_r(json_encode($rows));
  }

	public function getOne($Id){
    $row = $this->api->get($this->table, $Id);
    print_r(json_encode($row));
  }
  
  public function create(){
    $this->form_validation->set_rules('Nome', 'Nome', 'required');
    $this->form_validation->set_rules('Sobrenome', 'Sobrenome', 'required');
    $this->form_validation->set_rules('DataNascimento', 'Data Nascimento', 'required');
    $this->form_validation->set_rules('Usuario', 'Usuário', 'required');
    $this->form_validation->set_rules('Email', 'Email', 'trim|required|valid_email');
    $this->form_validation->set_rules('Senha', 'Senha', 'trim|required|min_length[8]');
    $this->form_validation->set_rules('SenhaConf', 'Senha Confirmation', 'trim|required|matches[Senha]');

    if ($this->form_validation->run() == TRUE){
      unset($_POST["SenhaConf"]);
      $_POST["Criacao"] = date("Y-m-d H:i:s");
      $_POST["Ativo"] = 1;
      $Id = $this->api->create($this->table, $_POST);
      $this->getOne($Id);
    } else {
      header($_SERVER['SERVER_PROTOCOL'] . ' 401 Unauthorized');
      echo json_encode(
        [
          "Nome" => form_error('Nome'),
          "Sobrenome" => form_error('Sobrenome'),
          "DataNascimento" => form_error('DataNascimento'),
          "Usuario" => form_error('Usuario'),
          "Email" => form_error('Email'),
          "Senha" => form_error('Senha'),
          "SenhaConf" => form_error('SenhaConf'),
        ]
      );
    }
  }
  
  public function update($Id){
    $this->form_validation->set_rules('Nome', 'Nome', 'required');
    $this->form_validation->set_rules('Sobrenome', 'Sobrenome', 'required');
    $this->form_validation->set_rules('Senha', 'Senha', 'trim|required|min_length[8]');
    if ($this->form_validation->run() == TRUE){
      $this->api->update($this->table, $Id, $_POST);
      $this->getOne($Id);
    } else {
      header($_SERVER['SERVER_PROTOCOL'] . ' 401 Unauthorized');
      echo json_encode(
        [
          "Nome" => form_error('Nome'),
          "Sobrenome" => form_error('Sobrenome'),
          "Senha" => form_error('Senha'),
        ]
      );
    }
  }

  public function delete($Id){
    $this->api->delete($this->table, $Id);
  }
}
