<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ref4314 extends MY_Controller {

  public function  __construct() {
    parent::__construct();
    $this->table = 'ref4314';
    $this->nameId = '4314_Id';
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
    $this->form_validation->set_rules('4314_Codigo', '4314_Codigo', 'required|max_length[30]');
		$this->form_validation->set_rules('4314_Descricao', '4314_Descricao', 'required|max_length[255]');
		$this->form_validation->set_rules('4314_DtIni', '4314_DtIni', 'required|valid_date');
		$this->form_validation->set_rules('4314_DtFin', '4314_DtFin', 'valid_date');
		$this->form_validation->set_rules('4314_Ncm', '4314_Ncm', 'required');
		
    parent::create();
  }

  public function update($Id){
    $this->form_validation->set_rules('4314_Codigo', '4314_Codigo', 'required|max_length[30]');
		$this->form_validation->set_rules('4314_Descricao', '4314_Descricao', 'required|max_length[255]');
		$this->form_validation->set_rules('4314_DtIni', '4314_DtIni', 'required|valid_date');
		$this->form_validation->set_rules('4314_DtFin', '4314_DtFin', 'valid_date');
		$this->form_validation->set_rules('4314_Ncm', '4314_Ncm', 'required');
		
    parent::update($Id);
  }

  public function delete($Id){
    parent::delete($Id);
  }
}
