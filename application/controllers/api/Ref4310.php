<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ref4310 extends MY_Controller {

  public function  __construct() {
    parent::__construct();
    $this->table = 'ref4310';
    $this->nameId = '4310_Id';
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
    $this->form_validation->set_rules('4310_Codigo', '4310_Codigo', 'required|max_length[30]');
		$this->form_validation->set_rules('4310_Descricao', '4310_Descricao', 'required|max_length[255]');
		$this->form_validation->set_rules('4310_DtIni', '4310_DtIni', 'required|valid_date');
		$this->form_validation->set_rules('4310_DtFin', '4310_DtFin', 'valid_date');
		$this->form_validation->set_rules('4310_Ncm', '4310_Ncm', 'required');
		$this->form_validation->set_rules('4310_AliqPis', '4310_AliqPis', 'required|numeric');
		$this->form_validation->set_rules('4310_AliqCofins', '4310_AliqCofins', 'required|numeric');
		
    parent::create();
  }

  public function update($Id){
    $this->form_validation->set_rules('4310_Codigo', '4310_Codigo', 'required|max_length[30]');
		$this->form_validation->set_rules('4310_Descricao', '4310_Descricao', 'required|max_length[255]');
		$this->form_validation->set_rules('4310_DtIni', '4310_DtIni', 'required|valid_date');
		$this->form_validation->set_rules('4310_DtFin', '4310_DtFin', 'valid_date');
		$this->form_validation->set_rules('4310_Ncm', '4310_Ncm', 'required');
		$this->form_validation->set_rules('4310_AliqPis', '4310_AliqPis', 'required|numeric');
		$this->form_validation->set_rules('4310_AliqCofins', '4310_AliqCofins', 'required|numeric');
		
    parent::update($Id);
  }

  public function delete($Id){
    parent::delete($Id);
  }
}
