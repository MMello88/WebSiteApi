<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ref4312 extends MY_Controller {

  public function  __construct() {
    parent::__construct();
    $this->table = 'ref4312';
    $this->nameId = '4312_Id';
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
    $this->form_validation->set_rules('4312_Codigo', '4312_Codigo', 'required|max_length[30]');
		$this->form_validation->set_rules('4312_Descricao', '4312_Descricao', 'required|max_length[255]');
		$this->form_validation->set_rules('4312_DtIni', '4312_DtIni', 'required|valid_date');
		$this->form_validation->set_rules('4312_DtFin', '4312_DtFin', 'valid_date');
		$this->form_validation->set_rules('4312_Ncm', '4312_Ncm', 'required');
		$this->form_validation->set_rules('4312_AliqPis', '4312_AliqPis', 'numeric');
		$this->form_validation->set_rules('4312_AliqCofins', '4312_AliqCofins', 'numeric');
		
    parent::create();
  }

  public function update($Id){
    $this->form_validation->set_rules('4312_Codigo', '4312_Codigo', 'required|max_length[30]');
		$this->form_validation->set_rules('4312_Descricao', '4312_Descricao', 'required|max_length[255]');
		$this->form_validation->set_rules('4312_DtIni', '4312_DtIni', 'required|valid_date');
		$this->form_validation->set_rules('4312_DtFin', '4312_DtFin', 'valid_date');
		$this->form_validation->set_rules('4312_Ncm', '4312_Ncm', 'required');
		$this->form_validation->set_rules('4312_AliqPis', '4312_AliqPis', 'numeric');
		$this->form_validation->set_rules('4312_AliqCofins', '4312_AliqCofins', 'numeric');
		
    parent::update($Id);
  }

  public function delete($Id){
    parent::delete($Id);
  }
}
