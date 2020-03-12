<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ref511 extends MY_Controller {

  public function  __construct() {
    parent::__construct();
    $this->table = 'ref511';
    $this->nameId = 'Id';
  }

  public function get($Id = '', $date = ''){
    parent::get($Id, $date);
  }
  
  public function setDefaultValue(){
    
  }

  public function create(){
    $this->form_validation->set_rules('Codigo', 'Codigo', 'required|max_length[30]');
		$this->form_validation->set_rules('Descricao', 'Descricao', 'required|max_length[255]');
		$this->form_validation->set_rules('DtIni', 'DtIni', 'required|valid_date');
		$this->form_validation->set_rules('DtFin', 'DtFin', 'valid_date');
		$this->form_validation->set_rules('IndNcmAtividade', 'IndNcmAtividade', '');
		$this->form_validation->set_rules('AliqAtividade', 'AliqAtividade', 'numeric');
		
    parent::create();
  }
  
  public function update($Id){
    $this->form_validation->set_rules('Codigo', 'Codigo', 'required|max_length[30]');
		$this->form_validation->set_rules('Descricao', 'Descricao', 'required|max_length[255]');
		$this->form_validation->set_rules('DtIni', 'DtIni', 'required|valid_date');
		$this->form_validation->set_rules('DtFin', 'DtFin', 'valid_date');
		$this->form_validation->set_rules('IndNcmAtividade', 'IndNcmAtividade', '');
		$this->form_validation->set_rules('AliqAtividade', 'AliqAtividade', 'numeric');
		
    parent::update($Id);
  }

  public function delete($Id){
    parent::delete($Id);
  }
}