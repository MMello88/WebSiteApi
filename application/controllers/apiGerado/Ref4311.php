<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ref4311 extends MY_Controller {

  public function  __construct() {
    parent::__construct();
    $this->table = 'ref4311';
    $this->nameId = '4311_Id';
    $this->usersId = '';
    $this->joins = [
    ];
  }

  public function get($Id = '', $date = ''){
    parent::get($Id, $date);
  }

  public function setDefaultValue(){
    
  }

  public function create(){
    $this->form_validation->set_rules('4311_Codigo', '4311_Codigo', 'required|max_length[30]');
		$this->form_validation->set_rules('4311_Descricao', '4311_Descricao', 'required|max_length[255]');
		$this->form_validation->set_rules('4311_DtIni', '4311_DtIni', 'required|valid_date');
		$this->form_validation->set_rules('4311_DtFin', '4311_DtFin', 'valid_date');
		$this->form_validation->set_rules('4311_Ncm', '4311_Ncm', 'required');
		$this->form_validation->set_rules('4311_AliqPis', '4311_AliqPis', 'numeric');
		$this->form_validation->set_rules('4311_AliqCofins', '4311_AliqCofins', 'numeric');
		
    parent::create();
  }

  public function update($Id){
    $this->form_validation->set_rules('4311_Codigo', '4311_Codigo', 'required|max_length[30]');
		$this->form_validation->set_rules('4311_Descricao', '4311_Descricao', 'required|max_length[255]');
		$this->form_validation->set_rules('4311_DtIni', '4311_DtIni', 'required|valid_date');
		$this->form_validation->set_rules('4311_DtFin', '4311_DtFin', 'valid_date');
		$this->form_validation->set_rules('4311_Ncm', '4311_Ncm', 'required');
		$this->form_validation->set_rules('4311_AliqPis', '4311_AliqPis', 'numeric');
		$this->form_validation->set_rules('4311_AliqCofins', '4311_AliqCofins', 'numeric');
		
    parent::update($Id);
  }

  public function delete($Id){
    parent::delete($Id);
  }
}
