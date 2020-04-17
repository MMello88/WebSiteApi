<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Abc_table extends MY_Controller {

  public function  __construct() {
    parent::__construct();
    $this->table = 'abc_table';
    $this->nameId = 'abc_Id';
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
    $this->form_validation->set_rules('abc_Nome', 'abc_Nome', 'required|max_length[100]');
		$this->form_validation->set_rules('abc_Valor', 'abc_Valor', 'required|decimal');
		$this->form_validation->set_rules('abc_Ativo', 'abc_Ativo', 'required|in_list[True,False]');
		
    parent::create();
  }

  public function update($Id){
    $this->form_validation->set_rules('abc_Nome', 'abc_Nome', 'required|max_length[100]');
		$this->form_validation->set_rules('abc_Valor', 'abc_Valor', 'required|decimal');
		$this->form_validation->set_rules('abc_Ativo', 'abc_Ativo', 'required|in_list[True,False]');
		
    parent::update($Id);
  }

  public function delete($Id){
    parent::delete($Id);
  }
}
