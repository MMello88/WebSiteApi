<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class PessoasFisica extends MY_Controller {

  public function  __construct() {
    parent::__construct();
    $this->table = "pessoasfisica";
    $this->nameId = "Id";
  }

  public function get($Id = ''){
    parent::get($Id);
  }
  
  public function setDefaultValue(){
    $_POST["Criacao"] = date("Y-m-d H:i:s");
    $_POST["Ativo"] = 1;
  }

  public function create(){
    $this->form_validation->set_rules('Nome', 'Nome', 'required');
    $this->form_validation->set_rules('Sobrenome', 'Sobrenome', 'required');
    $this->form_validation->set_rules('DataNascimento', 'Data Nascimento', 'required');
    parent::create();
  }
  
  public function update($Id){
    $this->form_validation->set_rules('Nome', 'Nome', 'required');
    $this->form_validation->set_rules('Sobrenome', 'Sobrenome', 'required');
    parent::update($Id);
  }

  public function delete($Id){
    parent::delete($Id);
  }
}
