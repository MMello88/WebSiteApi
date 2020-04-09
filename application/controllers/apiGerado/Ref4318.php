<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ref4318 extends MY_Controller {

  public function  __construct() {
    parent::__construct();
    $this->table = 'ref4318';
    $this->nameId = '4318_Id';
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
    $this->form_validation->set_rules('4318_Codigo', '4318_Codigo', 'required|max_length[30]');
		$this->form_validation->set_rules('4318_Descricao', '4318_Descricao', 'required|max_length[255]');
		$this->form_validation->set_rules('4318_DtIni', '4318_DtIni', 'required|valid_date');
		$this->form_validation->set_rules('4318_DtFin', '4318_DtFin', 'valid_date');
		
    parent::create();
  }

  public function update($Id){
    $this->form_validation->set_rules('4318_Codigo', '4318_Codigo', 'required|max_length[30]');
		$this->form_validation->set_rules('4318_Descricao', '4318_Descricao', 'required|max_length[255]');
		$this->form_validation->set_rules('4318_DtIni', '4318_DtIni', 'required|valid_date');
		$this->form_validation->set_rules('4318_DtFin', '4318_DtFin', 'valid_date');
		
    parent::update($Id);
  }

  public function delete($Id){
    parent::delete($Id);
  }
}
