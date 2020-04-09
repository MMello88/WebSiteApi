<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ref714 extends MY_Controller {

  public function  __construct() {
    parent::__construct();
    $this->table = 'ref714';
    $this->nameId = '714_Id';
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
    $this->form_validation->set_rules('714_Codigo', '714_Codigo', 'required|max_length[30]');
		$this->form_validation->set_rules('714_Descricao', '714_Descricao', 'required|max_length[255]');
		$this->form_validation->set_rules('714_DtIni', '714_DtIni', 'required|valid_date');
		$this->form_validation->set_rules('714_DtFin', '714_DtFin', 'valid_date');
		
    parent::create();
  }

  public function update($Id){
    $this->form_validation->set_rules('714_Codigo', '714_Codigo', 'required|max_length[30]');
		$this->form_validation->set_rules('714_Descricao', '714_Descricao', 'required|max_length[255]');
		$this->form_validation->set_rules('714_DtIni', '714_DtIni', 'required|valid_date');
		$this->form_validation->set_rules('714_DtFin', '714_DtFin', 'valid_date');
		
    parent::update($Id);
  }

  public function delete($Id){
    parent::delete($Id);
  }
}
