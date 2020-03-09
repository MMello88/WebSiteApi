<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ref311 extends MY_Controller {

  public function  __construct() {
    parent::__construct();
    $this->table = 'ref311';
    $this->nameId = 'Id';
  }

  public function get($Id = '', $date = ''){
    parent::get($Id, $date);
  }
  
  public function setDefaultValue(){
    
  }

  public function create(){
    $this->form_validation->set_rules('Codigo', 'Codigo', 'required|max_length[5]');
		$this->form_validation->set_rules('Versao', 'Versao', 'required|max_length[5]');
		$this->form_validation->set_rules('Leiaout', 'Leiaout', 'required|max_length[100]');
		$this->form_validation->set_rules('DtIni', 'DtIni', 'required|valid_datetime');
		$this->form_validation->set_rules('DtFin', 'DtFin', 'valid_datetime');
		
    parent::create();
  }
  
  public function update($Id){
    $this->form_validation->set_rules('Codigo', 'Codigo', 'required|max_length[5]');
		$this->form_validation->set_rules('Versao', 'Versao', 'required|max_length[5]');
		$this->form_validation->set_rules('Leiaout', 'Leiaout', 'required|max_length[100]');
		$this->form_validation->set_rules('DtIni', 'DtIni', 'required|valid_datetime');
		$this->form_validation->set_rules('DtFin', 'DtFin', 'valid_datetime');
		
    parent::update($Id);
  }

  public function delete($Id){
    parent::delete($Id);
  }
}