<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ref435 extends MY_Controller {

  public function  __construct() {
    parent::__construct();
    $this->table = 'ref435';
    $this->nameId = '435_Id';
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
    $this->form_validation->set_rules('435_Codigo', '435_Codigo', 'required|max_length[30]');
		$this->form_validation->set_rules('435_Descricao', '435_Descricao', 'required|max_length[255]');
		$this->form_validation->set_rules('435_DtIni', '435_DtIni', 'required|valid_date');
		$this->form_validation->set_rules('435_DtFin', '435_DtFin', 'valid_date');
		
    parent::create();
  }

  public function update($Id){
    $this->form_validation->set_rules('435_Codigo', '435_Codigo', 'required|max_length[30]');
		$this->form_validation->set_rules('435_Descricao', '435_Descricao', 'required|max_length[255]');
		$this->form_validation->set_rules('435_DtIni', '435_DtIni', 'required|valid_date');
		$this->form_validation->set_rules('435_DtFin', '435_DtFin', 'valid_date');
		
    parent::update($Id);
  }

  public function delete($Id){
    parent::delete($Id);
  }
}
