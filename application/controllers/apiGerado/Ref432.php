<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ref432 extends MY_Controller {

  public function  __construct() {
    parent::__construct();
    $this->table = 'ref432';
    $this->nameId = '432_Id';
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
    $this->form_validation->set_rules('432_Codigo', '432_Codigo', 'required|max_length[30]');
		$this->form_validation->set_rules('432_Descricao', '432_Descricao', 'required|max_length[255]');
		$this->form_validation->set_rules('432_DtIni', '432_DtIni', 'required|valid_date');
		$this->form_validation->set_rules('432_DtFin', '432_DtFin', 'valid_date');
		
    parent::create();
  }

  public function update($Id){
    $this->form_validation->set_rules('432_Codigo', '432_Codigo', 'required|max_length[30]');
		$this->form_validation->set_rules('432_Descricao', '432_Descricao', 'required|max_length[255]');
		$this->form_validation->set_rules('432_DtIni', '432_DtIni', 'required|valid_date');
		$this->form_validation->set_rules('432_DtFin', '432_DtFin', 'valid_date');
		
    parent::update($Id);
  }

  public function delete($Id){
    parent::delete($Id);
  }
}
