<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ref411 extends MY_Controller {

  public function  __construct() {
    parent::__construct();
    $this->table = 'ref411';
    $this->nameId = '411_Id';
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
    $this->form_validation->set_rules('411_Codigo', '411_Codigo', 'required|max_length[30]');
		$this->form_validation->set_rules('411_Descricao', '411_Descricao', 'required|max_length[255]');
		$this->form_validation->set_rules('411_Modelo', '411_Modelo', 'max_length[20]');
		$this->form_validation->set_rules('411_DtIni', '411_DtIni', 'required|valid_date');
		$this->form_validation->set_rules('411_DtFin', '411_DtFin', 'valid_date');
		
    parent::create();
  }

  public function update($Id){
    $this->form_validation->set_rules('411_Codigo', '411_Codigo', 'required|max_length[30]');
		$this->form_validation->set_rules('411_Descricao', '411_Descricao', 'required|max_length[255]');
		$this->form_validation->set_rules('411_Modelo', '411_Modelo', 'max_length[20]');
		$this->form_validation->set_rules('411_DtIni', '411_DtIni', 'required|valid_date');
		$this->form_validation->set_rules('411_DtFin', '411_DtFin', 'valid_date');
		
    parent::update($Id);
  }

  public function delete($Id){
    parent::delete($Id);
  }
}
