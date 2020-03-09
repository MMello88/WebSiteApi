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
    $_POST['Criacao'] = $_POST['Criacao'] == null ? date('Y-m-d H:i:s') : $_POST['Criacao'];
  }

  public function create(){
    $this->form_validation->set_rules('Nome', 'Nome', 'required|max_length[250]');
		$this->form_validation->set_rules('Sobrenome', 'Sobrenome', 'required|max_length[300]');
		$this->form_validation->set_rules('DataNascimento', 'DataNascimento', 'required|valid_datetime');
		$this->form_validation->set_rules('UrlFoto', 'UrlFoto', 'max_length[150]');
		$this->form_validation->set_rules('Ativo', 'Ativo', 'required|in_list[True,False]');
		$this->form_validation->set_rules('Criacao', 'Criacao', 'required|valid_datetime');
		
    parent::create();
  }
  
  public function update($Id){
    $this->form_validation->set_rules('Nome', 'Nome', 'required|max_length[250]');
		$this->form_validation->set_rules('Sobrenome', 'Sobrenome', 'required|max_length[300]');
		$this->form_validation->set_rules('DataNascimento', 'DataNascimento', 'required|valid_datetime');
		$this->form_validation->set_rules('UrlFoto', 'UrlFoto', 'max_length[150]');
		$this->form_validation->set_rules('Ativo', 'Ativo', 'required|in_list[True,False]');
		$this->form_validation->set_rules('Criacao', 'Criacao', 'required|valid_datetime');
		
    parent::update($Id);
  }

  public function delete($Id){
    parent::delete($Id);
  }
}
}