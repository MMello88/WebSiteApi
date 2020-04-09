<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ref431 extends MY_Controller {

  public function  __construct() {
    parent::__construct();
    $this->table = 'ref431';
    $this->nameId = '431_Id';
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
    $this->form_validation->set_rules('431_Codigo', '431_Codigo', 'required|max_length[30]');
		$this->form_validation->set_rules('431_Descricao', '431_Descricao', 'required|max_length[255]');
		$this->form_validation->set_rules('431_DtIni', '431_DtIni', 'required|valid_date');
		$this->form_validation->set_rules('431_DtFin', '431_DtFin', 'valid_date');
		
    parent::create();
  }

  public function update($Id){
    $this->form_validation->set_rules('431_Codigo', '431_Codigo', 'required|max_length[30]');
		$this->form_validation->set_rules('431_Descricao', '431_Descricao', 'required|max_length[255]');
		$this->form_validation->set_rules('431_DtIni', '431_DtIni', 'required|valid_date');
		$this->form_validation->set_rules('431_DtFin', '431_DtFin', 'valid_date');
		
    parent::update($Id);
  }

  public function delete($Id){
    parent::delete($Id);
  }
}
