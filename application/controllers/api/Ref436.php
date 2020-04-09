<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ref436 extends MY_Controller {

  public function  __construct() {
    parent::__construct();
    $this->table = 'ref436';
    $this->nameId = '436_Id';
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
    $this->form_validation->set_rules('436_Codigo', '436_Codigo', 'required|max_length[30]');
		$this->form_validation->set_rules('436_Descricao', '436_Descricao', 'required|max_length[255]');
		$this->form_validation->set_rules('436_DtIni', '436_DtIni', 'required|valid_date');
		$this->form_validation->set_rules('436_DtFin', '436_DtFin', 'valid_date');
		
    parent::create();
  }

  public function update($Id){
    $this->form_validation->set_rules('436_Codigo', '436_Codigo', 'required|max_length[30]');
		$this->form_validation->set_rules('436_Descricao', '436_Descricao', 'required|max_length[255]');
		$this->form_validation->set_rules('436_DtIni', '436_DtIni', 'required|valid_date');
		$this->form_validation->set_rules('436_DtFin', '436_DtFin', 'valid_date');
		
    parent::update($Id);
  }

  public function delete($Id){
    parent::delete($Id);
  }
}
