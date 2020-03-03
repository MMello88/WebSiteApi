<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Teste extends MY_Controller {

  public function  __construct() {
    parent::__construct();
    $this->table = 'teste';
    $this->nameId = 'Id';
  }

  public function get($Id = '', $date = ''){
    parent::get($Id, $date);
  }
  
  public function setDefaultValue(){
    $_POST['Desconto'] = $_POST['Desconto'] == null ? '0.00' : $_POST['Desconto'];
  }

  public function create(){
    $this->form_validation->set_rules('Nome', 'Nome', 'required|max_length[150]');
		$this->form_validation->set_rules('Valor', 'Valor', 'required|numeric');
		$this->form_validation->set_rules('Desconto', 'Desconto', 'decimal');
		$this->form_validation->set_rules('Total', 'Total', 'numeric');
		$this->form_validation->set_rules('VlIcms', 'VlIcms', 'decimal');
		$this->form_validation->set_rules('Periodo', 'Periodo', 'valid_datetime');
		$this->form_validation->set_rules('Tipo', 'Tipo', 'in_list[masculino,feminino,trans,gay]');
		$this->form_validation->set_rules('Ativo', 'Ativo', 'max_length[1]');
		
    parent::create();
  }
  
  public function update($Id){
    $this->form_validation->set_rules('Nome', 'Nome', 'required|max_length[150]');
		$this->form_validation->set_rules('Valor', 'Valor', 'required|numeric');
		$this->form_validation->set_rules('Desconto', 'Desconto', 'decimal');
		$this->form_validation->set_rules('Total', 'Total', 'numeric');
		$this->form_validation->set_rules('VlIcms', 'VlIcms', 'decimal');
		$this->form_validation->set_rules('Periodo', 'Periodo', 'valid_date');
		$this->form_validation->set_rules('Tipo', 'Tipo', 'in_list[masculino,feminino,trans,gay]');
		$this->form_validation->set_rules('Ativo', 'Ativo', 'max_length[1]');
		
    parent::update($Id);
  }

  public function delete($Id){
    parent::delete($Id);
  }
}