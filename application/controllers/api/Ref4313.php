<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ref4313 extends MY_Controller {

  public function  __construct() {
    parent::__construct();
    $this->table = 'ref4313';
    $this->nameId = '4313_Id';
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
    $this->form_validation->set_rules('4313_Codigo', '4313_Codigo', 'required|max_length[30]');
		$this->form_validation->set_rules('4313_Descricao', '4313_Descricao', 'required|max_length[255]');
		$this->form_validation->set_rules('4313_DtIni', '4313_DtIni', 'required|valid_date');
		$this->form_validation->set_rules('4313_DtFin', '4313_DtFin', 'valid_date');
		$this->form_validation->set_rules('4313_Ncm', '4313_Ncm', 'required');
		
    parent::create();
  }

  public function update($Id){
    $this->form_validation->set_rules('4313_Codigo', '4313_Codigo', 'required|max_length[30]');
		$this->form_validation->set_rules('4313_Descricao', '4313_Descricao', 'required|max_length[255]');
		$this->form_validation->set_rules('4313_DtIni', '4313_DtIni', 'required|valid_date');
		$this->form_validation->set_rules('4313_DtFin', '4313_DtFin', 'valid_date');
		$this->form_validation->set_rules('4313_Ncm', '4313_Ncm', 'required');
		
    parent::update($Id);
  }

  public function delete($Id){
    parent::delete($Id);
  }
}
