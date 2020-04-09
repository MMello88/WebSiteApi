<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Perfisuser extends MY_Controller {

  public function  __construct() {
    parent::__construct();
    $this->table = 'perfisuser';
    $this->nameId = 'pu_Id';
    $this->usersId = 'UsersId';
    $this->joins = [
			['table' => 'perfis', 'condition' => 'perfis.ps_Id = perfisuser.PerfisId', 'type' => 'inner'],
    ];
  }

  public function get($Id = '', $date = ''){
    parent::get($Id, $date);
  }

  public function setDefaultValue(){
    
  }

  public function create(){
    $this->form_validation->set_rules('UsersId', 'UsersId', 'required|integer');
		$this->form_validation->set_rules('PerfisId', 'PerfisId', 'required|integer');
		
    parent::create();
  }

  public function update($Id){
    $this->form_validation->set_rules('UsersId', 'UsersId', 'required|integer');
		$this->form_validation->set_rules('PerfisId', 'PerfisId', 'required|integer');
		
    parent::update($Id);
  }

  public function delete($Id){
    parent::delete($Id);
  }
}
