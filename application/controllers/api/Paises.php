<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Paises extends MY_Controller {

  public function  __construct() {
    parent::__construct();
    $this->table = 'paises';
    $this->nameId = 'pss_Id';
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
    $this->form_validation->set_rules('pss_CdPais', 'pss_CdPais', 'required|max_length[5]');
		$this->form_validation->set_rules('pss_Nome', 'pss_Nome', 'required|max_length[150]');
		
    parent::create();
  }

  public function update($Id){
    $this->form_validation->set_rules('pss_CdPais', 'pss_CdPais', 'required|max_length[5]');
		$this->form_validation->set_rules('pss_Nome', 'pss_Nome', 'required|max_length[150]');
		
    parent::update($Id);
  }

  public function delete($Id){
    parent::delete($Id);
  }
}
