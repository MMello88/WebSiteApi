<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ref713 extends MY_Controller {

  public function  __construct() {
    parent::__construct();
    $this->table = 'ref713';
    $this->nameId = '713_Id';
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
    $this->form_validation->set_rules('713_Codigo', '713_Codigo', 'required|max_length[30]');
		$this->form_validation->set_rules('713_Descricao', '713_Descricao', 'required|max_length[255]');
		$this->form_validation->set_rules('713_DtIni', '713_DtIni', 'required|valid_date');
		$this->form_validation->set_rules('713_DtFin', '713_DtFin', 'valid_date');
		
    parent::create();
  }

  public function update($Id){
    $this->form_validation->set_rules('713_Codigo', '713_Codigo', 'required|max_length[30]');
		$this->form_validation->set_rules('713_Descricao', '713_Descricao', 'required|max_length[255]');
		$this->form_validation->set_rules('713_DtIni', '713_DtIni', 'required|valid_date');
		$this->form_validation->set_rules('713_DtFin', '713_DtFin', 'valid_date');
		
    parent::update($Id);
  }

  public function delete($Id){
    parent::delete($Id);
  }
}
