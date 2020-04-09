<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Municipios extends MY_Controller {

  public function  __construct() {
    parent::__construct();
    $this->table = 'municipios';
    $this->nameId = 'mun_Id';
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
    $this->form_validation->set_rules('mun_CdMunicipio', 'mun_CdMunicipio', 'required|max_length[7]');
		$this->form_validation->set_rules('mun_Nome', 'mun_Nome', 'required|max_length[150]');
		$this->form_validation->set_rules('mun_Uf', 'mun_Uf', 'required|max_length[2]');
		
    parent::create();
  }

  public function update($Id){
    $this->form_validation->set_rules('mun_CdMunicipio', 'mun_CdMunicipio', 'required|max_length[7]');
		$this->form_validation->set_rules('mun_Nome', 'mun_Nome', 'required|max_length[150]');
		$this->form_validation->set_rules('mun_Uf', 'mun_Uf', 'required|max_length[2]');
		
    parent::update($Id);
  }

  public function delete($Id){
    parent::delete($Id);
  }
}
