<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ref711 extends MY_Controller {

  public function  __construct() {
    parent::__construct();
    $this->table = 'ref711';
    $this->nameId = '711_Id';
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
    $this->form_validation->set_rules('711_Codigo', '711_Codigo', 'required|max_length[30]');
		$this->form_validation->set_rules('711_Descricao', '711_Descricao', 'required|max_length[255]');
		$this->form_validation->set_rules('711_DtIni', '711_DtIni', 'required|valid_date');
		$this->form_validation->set_rules('711_DtFin', '711_DtFin', 'valid_date');
		
    parent::create();
  }

  public function update($Id){
    $this->form_validation->set_rules('711_Codigo', '711_Codigo', 'required|max_length[30]');
		$this->form_validation->set_rules('711_Descricao', '711_Descricao', 'required|max_length[255]');
		$this->form_validation->set_rules('711_DtIni', '711_DtIni', 'required|valid_date');
		$this->form_validation->set_rules('711_DtFin', '711_DtFin', 'valid_date');
		
    parent::update($Id);
  }

  public function delete($Id){
    parent::delete($Id);
  }
}
