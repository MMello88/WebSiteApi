<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class __efmigrationshistory extends MY_Controller {

  public function  __construct() {
    parent::__construct();
    $this->table = '__efmigrationshistory';
    $this->nameId = 'MigrationId';
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
    $this->form_validation->set_rules('ProductVersion', 'ProductVersion', 'required|max_length[32]');
		
    parent::create();
  }

  public function update($Id){
    $this->form_validation->set_rules('ProductVersion', 'ProductVersion', 'required|max_length[32]');
		
    parent::update($Id);
  }

  public function delete($Id){
    parent::delete($Id);
  }
}
