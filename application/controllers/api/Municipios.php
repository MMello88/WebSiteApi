<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Municipios extends MY_Controller {

  public function  __construct() {
    parent::__construct();
    $this->table = "municipios";
    $this->nameId = "Id";
  }

  public function get($Id = '', $date = ''){
    parent::get($Id);
  }
  
  public function setDefaultValue(){
  }

  public function create(){
    $this->form_validation->set_rules('CdMunicipio', 'Cod. Município', 'required');
    $this->form_validation->set_rules('Nome', 'Nome', 'required');
    $this->form_validation->set_rules('Uf', 'Uf', 'required|max_length[2]');
    parent::create();
  }
  
  public function update($Id){
    $this->form_validation->set_rules('CdMunicipio', 'Cod. Município', 'required');
    $this->form_validation->set_rules('Nome', 'Nome', 'required');
    $this->form_validation->set_rules('Uf', 'Uf', 'required|max_length[2]');
    parent::update($Id);
  }

  public function delete($Id){
    parent::delete($Id);
  }
}
