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
    $_POST['Ativo'] = '1';
  }

  public function create(){
    $this->form_validation->set_rules('Nome', 'Nome', 'required');
		$this->form_validation->set_rules('Sobrenome', 'Sobrenome', 'required');
		$this->form_validation->set_rules('DataNascimento', 'DataNascimento', 'required');
		$this->form_validation->set_rules('Ativo', 'Ativo', 'required');
		$this->form_validation->set_rules('Criacao', 'Criacao', 'required');
		$this->form_validation->set_rules('Usuario', 'Usuario', 'required');
		$this->form_validation->set_rules('Email', 'Email', 'required');
		$this->form_validation->set_rules('Senha', 'Senha', 'required');
		
    parent::create();
  }
  
  public function update($Id){
    $this->form_validation->set_rules('Nome', 'Nome', 'required');
		$this->form_validation->set_rules('Sobrenome', 'Sobrenome', 'required');
		$this->form_validation->set_rules('DataNascimento', 'DataNascimento', 'required');
		$this->form_validation->set_rules('Ativo', 'Ativo', 'required');
		$this->form_validation->set_rules('Criacao', 'Criacao', 'required');
		$this->form_validation->set_rules('Usuario', 'Usuario', 'required');
		$this->form_validation->set_rules('Email', 'Email', 'required');
		$this->form_validation->set_rules('Senha', 'Senha', 'required');
		
    parent::update($Id);
  }

  public function delete($Id){
    parent::delete($Id);
  }
}