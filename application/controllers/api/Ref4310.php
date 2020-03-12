<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ref4310 extends MY_Controller {

  public function  __construct() {
    parent::__construct();
    $this->table = 'ref4310';
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
		$this->form_validation->set_rules('Ncm', 'Ncm', 'required');
		$this->form_validation->set_rules('NcmEx', 'NcmEx', '');
		$this->form_validation->set_rules('ExIpi', 'ExIpi', '');
		$this->form_validation->set_rules('AliqPis', 'AliqPis', 'required|numeric');
		$this->form_validation->set_rules('AliqCofins', 'AliqCofins', 'required|numeric');
		
    parent::create();
  }
  
  public function update($Id){
    $this->form_validation->set_rules('Codigo', 'Codigo', 'required|max_length[30]');
		$this->form_validation->set_rules('Descricao', 'Descricao', 'required|max_length[255]');
		$this->form_validation->set_rules('DtIni', 'DtIni', 'required|valid_date');
		$this->form_validation->set_rules('DtFin', 'DtFin', 'valid_date');
		$this->form_validation->set_rules('Ncm', 'Ncm', 'required');
		$this->form_validation->set_rules('NcmEx', 'NcmEx', '');
		$this->form_validation->set_rules('ExIpi', 'ExIpi', '');
		$this->form_validation->set_rules('AliqPis', 'AliqPis', 'required|numeric');
		$this->form_validation->set_rules('AliqCofins', 'AliqCofins', 'required|numeric');
		
    parent::update($Id);
  }

  public function delete($Id){
    parent::delete($Id);
  }
}