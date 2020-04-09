<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ref422 extends MY_Controller {

  public function  __construct() {
    parent::__construct();
    $this->table = 'ref422';
    $this->nameId = '422_Id';
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
    $this->form_validation->set_rules('422_Codigo', '422_Codigo', 'required|max_length[30]');
		$this->form_validation->set_rules('422_Descricao', '422_Descricao', 'required|max_length[255]');
		$this->form_validation->set_rules('422_DtIni', '422_DtIni', 'required|valid_date');
		$this->form_validation->set_rules('422_DtFin', '422_DtFin', 'valid_date');
		
    parent::create();
  }

  public function update($Id){
    $this->form_validation->set_rules('422_Codigo', '422_Codigo', 'required|max_length[30]');
		$this->form_validation->set_rules('422_Descricao', '422_Descricao', 'required|max_length[255]');
		$this->form_validation->set_rules('422_DtIni', '422_DtIni', 'required|valid_date');
		$this->form_validation->set_rules('422_DtFin', '422_DtFin', 'valid_date');
		
    parent::update($Id);
  }

  public function delete($Id){
    parent::delete($Id);
  }
}
