<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ref4317 extends MY_Controller {

  public function  __construct() {
    parent::__construct();
    $this->table = 'ref4317';
    $this->nameId = '4317_Id';
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
    $this->form_validation->set_rules('4317_Codigo', '4317_Codigo', 'required|max_length[30]');
		$this->form_validation->set_rules('4317_Descricao', '4317_Descricao', 'required|max_length[255]');
		$this->form_validation->set_rules('4317_DtIni', '4317_DtIni', 'required|valid_date');
		$this->form_validation->set_rules('4317_DtFin', '4317_DtFin', 'valid_date');
		$this->form_validation->set_rules('4317_Ncm', '4317_Ncm', 'required');
		
    parent::create();
  }

  public function update($Id){
    $this->form_validation->set_rules('4317_Codigo', '4317_Codigo', 'required|max_length[30]');
		$this->form_validation->set_rules('4317_Descricao', '4317_Descricao', 'required|max_length[255]');
		$this->form_validation->set_rules('4317_DtIni', '4317_DtIni', 'required|valid_date');
		$this->form_validation->set_rules('4317_DtFin', '4317_DtFin', 'valid_date');
		$this->form_validation->set_rules('4317_Ncm', '4317_Ncm', 'required');
		
    parent::update($Id);
  }

  public function delete($Id){
    parent::delete($Id);
  }
}
