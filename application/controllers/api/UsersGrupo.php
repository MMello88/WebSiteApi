<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class UsersGrupo extends MY_Controller {

  public function  __construct() {
    parent::__construct();
    $this->table = "usersgrupo";
    $this->nameId = "GrupoUserId";
  }

  public function get($Id = '', $date = ''){
    parent::get($Id);
  }
  
  public function setDefaultValue(){
    $_POST["Ativo"] = 1;
  }

  public function create(){
    $this->form_validation->set_rules('UserId', 'Usuário', 'required');
    $this->form_validation->set_rules('GrupoUserId', 'Usuário', 'required');
    parent::create();
  }
  
  public function update($Id){
    $this->form_validation->set_rules('Ativo', 'Ativo', 'required');
    parent::update($Id);
  }

  public function delete($Id){
    $this->api->update($this->table, ["Ativo" => 0], [$this->nameId => $Id]);
  }
}
