<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ref4315 extends MY_Controller {

  public function  __construct() {
    parent::__construct();
    $this->table = 'ref4315';
    $this->nameId = '4315_Id';
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
    $this->form_validation->set_rules('4315_Codigo', '4315_Codigo', 'required|max_length[30]');
		$this->form_validation->set_rules('4315_Descricao', '4315_Descricao', 'required|max_length[255]');
		$this->form_validation->set_rules('4315_DtIni', '4315_DtIni', 'required|valid_date');
		$this->form_validation->set_rules('4315_DtFin', '4315_DtFin', 'valid_date');
		$this->form_validation->set_rules('4315_Ncm', '4315_Ncm', 'required');
		
    parent::create();
  }

  public function update($Id){
    $this->form_validation->set_rules('4315_Codigo', '4315_Codigo', 'required|max_length[30]');
		$this->form_validation->set_rules('4315_Descricao', '4315_Descricao', 'required|max_length[255]');
		$this->form_validation->set_rules('4315_DtIni', '4315_DtIni', 'required|valid_date');
		$this->form_validation->set_rules('4315_DtFin', '4315_DtFin', 'valid_date');
		$this->form_validation->set_rules('4315_Ncm', '4315_Ncm', 'required');
		
    parent::update($Id);
  }

  public function delete($Id){
    parent::delete($Id);
  }
}
