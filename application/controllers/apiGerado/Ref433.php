<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ref433 extends MY_Controller {

  public function  __construct() {
    parent::__construct();
    $this->table = 'ref433';
    $this->nameId = '433_Id';
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
    $this->form_validation->set_rules('433_Codigo', '433_Codigo', 'required|max_length[30]');
		$this->form_validation->set_rules('433_Descricao', '433_Descricao', 'required|max_length[255]');
		$this->form_validation->set_rules('433_DtIni', '433_DtIni', 'required|valid_date');
		$this->form_validation->set_rules('433_DtFin', '433_DtFin', 'valid_date');
		
    parent::create();
  }

  public function update($Id){
    $this->form_validation->set_rules('433_Codigo', '433_Codigo', 'required|max_length[30]');
		$this->form_validation->set_rules('433_Descricao', '433_Descricao', 'required|max_length[255]');
		$this->form_validation->set_rules('433_DtIni', '433_DtIni', 'required|valid_date');
		$this->form_validation->set_rules('433_DtFin', '433_DtFin', 'valid_date');
		
    parent::update($Id);
  }

  public function delete($Id){
    parent::delete($Id);
  }
}
