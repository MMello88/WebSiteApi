<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends MY_Controller {

  public function  __construct() {
    parent::__construct();
    $this->table = 'users';
    $this->nameId = 'Id';
  }

  public function get($Id = '', $date = ''){
    parent::get($Id, $date);
  }
  
  public function setDefaultValue(){
    unset($_POST["SenhaConf"]);
    $_POST['Ativo'] = $_POST['Ativo'] == null ? 'True' : $_POST['Ativo'];
		$_POST['Criacao'] = $_POST['Criacao'] == null ? date('Y-m-d H:i:s') : $_POST['Criacao'];
		
  }

  public function create(){
    $this->form_validation->set_rules('Nome', 'Nome', 'required|max_length[350]');
		$this->form_validation->set_rules('Sobrenome', 'Sobrenome', 'required|max_length[250]');
		$this->form_validation->set_rules('DataNascimento', 'DataNascimento', 'required|valid_datetime');
		$this->form_validation->set_rules('UrlFoto', 'UrlFoto', '');
		$this->form_validation->set_rules('Ativo', 'Ativo', 'required|in_list[True,False]');
		$this->form_validation->set_rules('Criacao', 'Criacao', 'required|valid_datetime');
		$this->form_validation->set_rules('Usuario', 'Usuario', 'required|max_length[250]');
		$this->form_validation->set_rules('Email', 'Email', 'required|max_length[250]');
		$this->form_validation->set_rules('Senha', 'Senha', 'required|max_length[64]');
		
    parent::create();
  }
  
  public function update($Id){
    $this->form_validation->set_rules('Nome', 'Nome', 'required|max_length[350]');
		$this->form_validation->set_rules('Sobrenome', 'Sobrenome', 'required|max_length[250]');
		$this->form_validation->set_rules('DataNascimento', 'DataNascimento', 'required|valid_datetime');
		$this->form_validation->set_rules('UrlFoto', 'UrlFoto', '');
		$this->form_validation->set_rules('Ativo', 'Ativo', 'required|in_list[True,False]');
		$this->form_validation->set_rules('Criacao', 'Criacao', 'required|valid_datetime');
		$this->form_validation->set_rules('Usuario', 'Usuario', 'required|max_length[250]');
		$this->form_validation->set_rules('Email', 'Email', 'required|valid_email|max_length[250]');
		$this->form_validation->set_rules('Senha', 'Senha', 'required|max_length[64]');
		
    parent::update($Id);
  }

  public function delete($Id){
    parent::delete($Id);
  }
}