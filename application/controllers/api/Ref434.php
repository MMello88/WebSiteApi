<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ref434 extends MY_Controller {

  public function  __construct() {
    parent::__construct();
    $this->table = 'ref434';
    $this->nameId = '434_Id';
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
    $this->form_validation->set_rules('434_Codigo', '434_Codigo', 'required|max_length[30]');
		$this->form_validation->set_rules('434_Descricao', '434_Descricao', 'required|max_length[255]');
		$this->form_validation->set_rules('434_DtIni', '434_DtIni', 'required|valid_date');
		$this->form_validation->set_rules('434_DtFin', '434_DtFin', 'valid_date');
		
    parent::create();
  }

  public function update($Id){
    $this->form_validation->set_rules('434_Codigo', '434_Codigo', 'required|max_length[30]');
		$this->form_validation->set_rules('434_Descricao', '434_Descricao', 'required|max_length[255]');
		$this->form_validation->set_rules('434_DtIni', '434_DtIni', 'required|valid_date');
		$this->form_validation->set_rules('434_DtFin', '434_DtFin', 'valid_date');
		
    parent::update($Id);
  }

  public function delete($Id){
    parent::delete($Id);
  }
}
