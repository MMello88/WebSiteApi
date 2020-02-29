<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ref4312 extends MY_Controller {

  public function  __construct() {
    parent::__construct();
    $this->table = 'ref4312';
    $this->nameId = 'Id';
  }

  public function get($Id = '', $date = ''){
    parent::get($Id, $date);
  }
  
  public function setDefaultValue(){
  }

  public function create(){
    $this->form_validation->set_rules('Id', 'Id', 'required');
		$this->form_validation->set_rules('Codigo', 'Codigo', 'required');
		$this->form_validation->set_rules('Descricao', 'Descricao', 'required');
		$this->form_validation->set_rules('DtIni', 'DtIni', 'required');
		$this->form_validation->set_rules('DtFin', 'DtFin', 'required');
		$this->form_validation->set_rules('Ncm', 'Ncm', 'required');
		$this->form_validation->set_rules('NcmEx', 'NcmEx', 'required');
		$this->form_validation->set_rules('ExIpi', 'ExIpi', 'required');
		$this->form_validation->set_rules('AliqPis', 'AliqPis', 'required');
		$this->form_validation->set_rules('AliqCofins', 'AliqCofins', 'required');
		
    parent::create();
  }
  
  public function update($Id){
    $this->form_validation->set_rules('Id', 'Id', 'required');
		$this->form_validation->set_rules('Codigo', 'Codigo', 'required');
		$this->form_validation->set_rules('Descricao', 'Descricao', 'required');
		$this->form_validation->set_rules('DtIni', 'DtIni', 'required');
		$this->form_validation->set_rules('DtFin', 'DtFin', 'required');
		$this->form_validation->set_rules('Ncm', 'Ncm', 'required');
		$this->form_validation->set_rules('NcmEx', 'NcmEx', 'required');
		$this->form_validation->set_rules('ExIpi', 'ExIpi', 'required');
		$this->form_validation->set_rules('AliqPis', 'AliqPis', 'required');
		$this->form_validation->set_rules('AliqCofins', 'AliqCofins', 'required');
		
    parent::update($Id);
  }

  public function delete($Id){
    parent::delete($Id);
  }
}