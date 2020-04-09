<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Regs0206efdc extends MY_Controller {

  public function  __construct() {
    parent::__construct();
    $this->table = 'regs0206efdc';
    $this->nameId = '0206_Id';
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
    $this->form_validation->set_rules('0206_Reg', '0206_Reg', 'required|max_length[4]');
		$this->form_validation->set_rules('0206_CodComb', '0206_CodComb', 'required|max_length[255]');
		
    parent::create();
  }

  public function update($Id){
    $this->form_validation->set_rules('0206_Reg', '0206_Reg', 'required|max_length[4]');
		$this->form_validation->set_rules('0206_CodComb', '0206_CodComb', 'required|max_length[255]');
		
    parent::update($Id);
  }

  public function delete($Id){
    parent::delete($Id);
  }
}
