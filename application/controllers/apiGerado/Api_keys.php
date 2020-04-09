<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Api_keys extends MY_Controller {

  public function  __construct() {
    parent::__construct();
    $this->table = 'api_keys';
    $this->nameId = 'id';
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
    $this->form_validation->set_rules('api_key', 'api_key', 'required|max_length[50]');
		$this->form_validation->set_rules('controller', 'controller', 'required|max_length[50]');
		$this->form_validation->set_rules('date_created', 'date_created', 'valid_date');
		$this->form_validation->set_rules('date_modified', 'date_modified', 'valid_date');
		
    parent::create();
  }

  public function update($Id){
    $this->form_validation->set_rules('api_key', 'api_key', 'required|max_length[50]');
		$this->form_validation->set_rules('controller', 'controller', 'required|max_length[50]');
		$this->form_validation->set_rules('date_created', 'date_created', 'valid_date');
		$this->form_validation->set_rules('date_modified', 'date_modified', 'valid_date');
		
    parent::update($Id);
  }

  public function delete($Id){
    parent::delete($Id);
  }
}
