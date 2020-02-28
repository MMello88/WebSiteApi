<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends MY_Controller {

  public function  __construct() {
    parent::__construct();
    $this->table = "users";
    $this->nameId = "Id";
  }

  public function get($Id = '', $date = ''){
    parent::get($Id, $date);
  }
  
  public function setDefaultValue(){
    unset($_POST["SenhaConf"]);
    $_POST["Criacao"] = date("Y-m-d H:i:s");
    $_POST["Ativo"] = 1;
  }

  public function create(){
    $this->form_validation->set_rules('Nome', 'Nome', 'required');
    $this->form_validation->set_rules('Sobrenome', 'Sobrenome', 'required');
    $this->form_validation->set_rules('DataNascimento', 'Data Nascimento', 'required');
    $this->form_validation->set_rules('Usuario', 'Usuário', 'required');
    $this->form_validation->set_rules('Email', 'Email', 'trim|required|valid_email|is_unique[users.Email]');
    $this->form_validation->set_rules('Senha', 'Senha', 'trim|required|min_length[8]');
    $this->form_validation->set_rules('SenhaConf', 'Senha Confirmation', 'trim|required|matches[Senha]');
    parent::create();
  }
  
  public function update($Id){
    $this->form_validation->set_rules('Nome', 'Nome', 'required');
    $this->form_validation->set_rules('Sobrenome', 'Sobrenome', 'required');
    $this->form_validation->set_rules('Senha', 'Senha', 'trim|required|min_length[8]');
    parent::update($Id);
  }

  public function delete($Id){
    parent::delete($Id);
  }
}
