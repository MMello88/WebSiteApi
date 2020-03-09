<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Api_limit extends MY_Controller {

  public function  __construct() {
    parent::__construct();
    $this->table = 'api_limit';
    $this->nameId = 'id';
  }

  public function get($Id = '', $date = ''){
    parent::get($Id, $date);
  }
  
  public function setDefaultValue(){
    
  }

  public function create(){
    $this->form_validation->set_rules('uri', 'uri', 'required|max_length[200]');
		$this->form_validation->set_rules('class', 'class', 'required|max_length[200]');
		$this->form_validation->set_rules('method', 'method', 'required|max_length[200]');
		$this->form_validation->set_rules('ip_address', 'ip_address', 'required|max_length[50]');
		$this->form_validation->set_rules('time', 'time', 'required');
		
    parent::create();
  }
  
  public function update($Id){
    $this->form_validation->set_rules('uri', 'uri', 'required|max_length[200]');
		$this->form_validation->set_rules('class', 'class', 'required|max_length[200]');
		$this->form_validation->set_rules('method', 'method', 'required|max_length[200]');
		$this->form_validation->set_rules('ip_address', 'ip_address', 'required|max_length[50]');
		$this->form_validation->set_rules('time', 'time', 'required');
		
    parent::update($Id);
  }

  public function delete($Id){
    parent::delete($Id);
  }
}