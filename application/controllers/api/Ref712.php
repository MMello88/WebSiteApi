<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ref712 extends MY_Controller {

  public function  __construct() {
    parent::__construct();
    $this->table = 'ref712';
    $this->nameId = '712_Id';
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
    $this->form_validation->set_rules('712_Codigo', '712_Codigo', 'required|max_length[30]');
		$this->form_validation->set_rules('712_Descricao', '712_Descricao', 'required|max_length[255]');
		$this->form_validation->set_rules('712_DtIni', '712_DtIni', 'required|valid_date');
		$this->form_validation->set_rules('712_DtFin', '712_DtFin', 'valid_date');
		
    parent::create();
  }

  public function update($Id){
    $this->form_validation->set_rules('712_Codigo', '712_Codigo', 'required|max_length[30]');
		$this->form_validation->set_rules('712_Descricao', '712_Descricao', 'required|max_length[255]');
		$this->form_validation->set_rules('712_DtIni', '712_DtIni', 'required|valid_date');
		$this->form_validation->set_rules('712_DtFin', '712_DtFin', 'valid_date');
		
    parent::update($Id);
  }

  public function delete($Id){
    parent::delete($Id);
  }
}
