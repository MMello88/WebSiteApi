<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ref511 extends MY_Controller {

  public function  __construct() {
    parent::__construct();
    $this->table = 'ref511';
    $this->nameId = '511_Id';
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
    $this->form_validation->set_rules('511_Codigo', '511_Codigo', 'required|max_length[30]');
		$this->form_validation->set_rules('511_Descricao', '511_Descricao', 'required|max_length[255]');
		$this->form_validation->set_rules('511_DtIni', '511_DtIni', 'required|valid_date');
		$this->form_validation->set_rules('511_DtFin', '511_DtFin', 'valid_date');
		$this->form_validation->set_rules('511_AliqAtividade', '511_AliqAtividade', 'numeric');
		
    parent::create();
  }

  public function update($Id){
    $this->form_validation->set_rules('511_Codigo', '511_Codigo', 'required|max_length[30]');
		$this->form_validation->set_rules('511_Descricao', '511_Descricao', 'required|max_length[255]');
		$this->form_validation->set_rules('511_DtIni', '511_DtIni', 'required|valid_date');
		$this->form_validation->set_rules('511_DtFin', '511_DtFin', 'valid_date');
		$this->form_validation->set_rules('511_AliqAtividade', '511_AliqAtividade', 'numeric');
		
    parent::update($Id);
  }

  public function delete($Id){
    parent::delete($Id);
  }
}
