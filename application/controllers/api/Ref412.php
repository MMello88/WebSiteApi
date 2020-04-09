<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ref412 extends MY_Controller {

  public function  __construct() {
    parent::__construct();
    $this->table = 'ref412';
    $this->nameId = '412_Id';
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
    $this->form_validation->set_rules('412_Codigo', '412_Codigo', 'required|max_length[30]');
		$this->form_validation->set_rules('412_Descricao', '412_Descricao', 'required|max_length[255]');
		$this->form_validation->set_rules('412_DtIni', '412_DtIni', 'required|valid_date');
		$this->form_validation->set_rules('412_DtFin', '412_DtFin', 'valid_date');
		
    parent::create();
  }

  public function update($Id){
    $this->form_validation->set_rules('412_Codigo', '412_Codigo', 'required|max_length[30]');
		$this->form_validation->set_rules('412_Descricao', '412_Descricao', 'required|max_length[255]');
		$this->form_validation->set_rules('412_DtIni', '412_DtIni', 'required|valid_date');
		$this->form_validation->set_rules('412_DtFin', '412_DtFin', 'valid_date');
		
    parent::update($Id);
  }

  public function delete($Id){
    parent::delete($Id);
  }
}
