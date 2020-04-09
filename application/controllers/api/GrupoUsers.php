<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Grupousers extends MY_Controller {

  public function  __construct() {
    parent::__construct();
    $this->table = 'grupousers';
    $this->nameId = 'gpu_Id';
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
    $this->form_validation->set_rules('gpu_Nome', 'gpu_Nome', 'required|max_length[350]');
		$this->form_validation->set_rules('gpu_Ativo', 'gpu_Ativo', 'required|in_list[True,False]');
		
    parent::create();
  }

  public function update($Id){
    $this->form_validation->set_rules('gpu_Nome', 'gpu_Nome', 'required|max_length[350]');
		$this->form_validation->set_rules('gpu_Ativo', 'gpu_Ativo', 'required|in_list[True,False]');
		
    parent::update($Id);
  }

  public function delete($Id){
    parent::delete($Id);
  }
}
