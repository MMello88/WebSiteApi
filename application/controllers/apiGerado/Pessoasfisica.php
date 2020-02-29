<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pessoasfisica extends MY_Controller {

  public function  __construct() {
    parent::__construct();
    $this->table = 'pessoasfisica';
    $this->nameId = 'Id';
  }

  public function get($Id = '', $date = ''){
    parent::get($Id, $date);
  }
  
  public function setDefaultValue(){
  }

  public function create(){
    $this->form_validation->set_rules('Id', 'Id', 'required');
		$this->form_validation->set_rules('Nome', 'Nome', 'required');
		$this->form_validation->set_rules('Sobrenome', 'Sobrenome', 'required');
		$this->form_validation->set_rules('DataNascimento', 'DataNascimento', 'required');
		$this->form_validation->set_rules('UrlFoto', 'UrlFoto', 'required');
		$this->form_validation->set_rules('Ativo', 'Ativo', 'required');
		$this->form_validation->set_rules('Criacao', 'Criacao', 'required');
		
    parent::create();
  }
  
  public function update($Id){
    $this->form_validation->set_rules('Id', 'Id', 'required');
		$this->form_validation->set_rules('Nome', 'Nome', 'required');
		$this->form_validation->set_rules('Sobrenome', 'Sobrenome', 'required');
		$this->form_validation->set_rules('DataNascimento', 'DataNascimento', 'required');
		$this->form_validation->set_rules('UrlFoto', 'UrlFoto', 'required');
		$this->form_validation->set_rules('Ativo', 'Ativo', 'required');
		$this->form_validation->set_rules('Criacao', 'Criacao', 'required');
		
    parent::update($Id);
  }

  public function delete($Id){
    parent::delete($Id);
  }
}