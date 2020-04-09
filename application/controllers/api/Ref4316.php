<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ref4316 extends MY_Controller {

  public function  __construct() {
    parent::__construct();
    $this->table = 'ref4316';
    $this->nameId = '4316_Id';
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
    $this->form_validation->set_rules('4316_Codigo', '4316_Codigo', 'required|max_length[30]');
		$this->form_validation->set_rules('4316_Descricao', '4316_Descricao', 'required|max_length[255]');
		$this->form_validation->set_rules('4316_DtIni', '4316_DtIni', 'required|valid_date');
		$this->form_validation->set_rules('4316_DtFin', '4316_DtFin', 'valid_date');
		$this->form_validation->set_rules('4316_Ncm', '4316_Ncm', 'required');
		
    parent::create();
  }

  public function update($Id){
    $this->form_validation->set_rules('4316_Codigo', '4316_Codigo', 'required|max_length[30]');
		$this->form_validation->set_rules('4316_Descricao', '4316_Descricao', 'required|max_length[255]');
		$this->form_validation->set_rules('4316_DtIni', '4316_DtIni', 'required|valid_date');
		$this->form_validation->set_rules('4316_DtFin', '4316_DtFin', 'valid_date');
		$this->form_validation->set_rules('4316_Ncm', '4316_Ncm', 'required');
		
    parent::update($Id);
  }

  public function delete($Id){
    parent::delete($Id);
  }
}
