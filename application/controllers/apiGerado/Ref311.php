<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ref311 extends MY_Controller {

  public function  __construct() {
    parent::__construct();
    $this->table = 'ref311';
    $this->nameId = '311_Id';
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
    $this->form_validation->set_rules('311_Codigo', '311_Codigo', 'required|max_length[5]');
		$this->form_validation->set_rules('311_Versao', '311_Versao', 'required|max_length[5]');
		$this->form_validation->set_rules('311_Leiaout', '311_Leiaout', 'required|max_length[100]');
		$this->form_validation->set_rules('311_DtIni', '311_DtIni', 'required|valid_date');
		$this->form_validation->set_rules('311_DtFin', '311_DtFin', 'valid_date');
		
    parent::create();
  }

  public function update($Id){
    $this->form_validation->set_rules('311_Codigo', '311_Codigo', 'required|max_length[5]');
		$this->form_validation->set_rules('311_Versao', '311_Versao', 'required|max_length[5]');
		$this->form_validation->set_rules('311_Leiaout', '311_Leiaout', 'required|max_length[100]');
		$this->form_validation->set_rules('311_DtIni', '311_DtIni', 'required|valid_date');
		$this->form_validation->set_rules('311_DtFin', '311_DtFin', 'valid_date');
		
    parent::update($Id);
  }

  public function delete($Id){
    parent::delete($Id);
  }
}
