<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class UsersGrupo extends MY_Controller {

  public function  __construct() {
    parent::__construct();
    $this->table = "usersgrupo";
    $this->nameId = "GrupoUserId";
  }

  public function get($Id = ''){
    parent::get($Id);
  }
  
  public function setDefaultValue(){
    $_POST["Ativo"] = 1;
  }

  public function create(){
    $this->form_validation->set_rules('UserId', 'Usuário', 'trim|required|valid_email|is_unique[users.Email]');
    $this->form_validation->set_rules('GrupoUserId', 'Usuário', 'trim|required|valid_email|is_unique[users.Email]');
    parent::create();
  }
  
  public function update($Id){
    $this->form_validation->set_rules('GrupoUserId', 'Grupo de Usuário', 'trim|required|valid_email|is_unique[users.Email]');
    parent::update($Id);
  }

  public function delete($Id){
    parent::delete($Id);
  }
}
