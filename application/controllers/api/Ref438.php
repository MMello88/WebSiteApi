<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ref438 extends MY_Controller {

  public function  __construct() {
    parent::__construct();
    $this->table = 'ref438';
    $this->nameId = '438_Id';
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
    $this->form_validation->set_rules('438_Codigo', '438_Codigo', 'required|max_length[30]');
		$this->form_validation->set_rules('438_Descricao', '438_Descricao', 'required|max_length[255]');
		$this->form_validation->set_rules('438_DtIni', '438_DtIni', 'required|valid_date');
		$this->form_validation->set_rules('438_DtFin', '438_DtFin', 'valid_date');
		
    parent::create();
  }

  public function update($Id){
    $this->form_validation->set_rules('438_Codigo', '438_Codigo', 'required|max_length[30]');
		$this->form_validation->set_rules('438_Descricao', '438_Descricao', 'required|max_length[255]');
		$this->form_validation->set_rules('438_DtIni', '438_DtIni', 'required|valid_date');
		$this->form_validation->set_rules('438_DtFin', '438_DtFin', 'valid_date');
		
    parent::update($Id);
  }

  public function delete($Id){
    parent::delete($Id);
  }
}
