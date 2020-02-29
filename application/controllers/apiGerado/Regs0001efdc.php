<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Regs0001efdc extends MY_Controller {

  public function  __construct() {
    parent::__construct();
    $this->table = 'regs0001efdc';
    $this->nameId = 'Id';
  }

  public function get($Id = '', $date = ''){
    parent::get($Id, $date);
  }
  
  public function setDefaultValue(){
  }

  public function create(){
    $this->form_validation->set_rules('Id', 'Id', 'required');
		$this->form_validation->set_rules('Reg', 'Reg', 'required');
		$this->form_validation->set_rules('IndicadorMovimento', 'IndicadorMovimento', 'required');
		
    parent::create();
  }
  
  public function update($Id){
    $this->form_validation->set_rules('Id', 'Id', 'required');
		$this->form_validation->set_rules('Reg', 'Reg', 'required');
		$this->form_validation->set_rules('IndicadorMovimento', 'IndicadorMovimento', 'required');
		
    parent::update($Id);
  }

  public function delete($Id){
    parent::delete($Id);
  }
}