<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Regs0206efdc extends MY_Controller {

  public function  __construct() {
    parent::__construct();
    $this->table = 'regs0206efdc';
    $this->nameId = 'Id';
  }

  public function get($Id = '', $date = ''){
    parent::get($Id, $date);
  }
  
  public function setDefaultValue(){
    $_POST['Reg'] = '0206';
  }

  public function create(){
    $this->form_validation->set_rules('Reg', 'Reg', 'required');
		$this->form_validation->set_rules('CodComb', 'CodComb', 'required');
		
    parent::create();
  }
  
  public function update($Id){
    $this->form_validation->set_rules('Reg', 'Reg', 'required');
		$this->form_validation->set_rules('CodComb', 'CodComb', 'required');
		
    parent::update($Id);
  }

  public function delete($Id){
    parent::delete($Id);
  }
}parent::update($Id);
  }

  public function delete($Id){
    parent::delete($Id);
  }
}