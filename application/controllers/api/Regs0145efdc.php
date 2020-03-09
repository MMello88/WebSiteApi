<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Regs0145efdc extends MY_Controller {

  public function  __construct() {
    parent::__construct();
    $this->table = 'regs0145efdc';
    $this->nameId = 'Id';
  }

  public function get($Id = '', $date = ''){
    parent::get($Id, $date);
  }
  
  public function setDefaultValue(){
    $_POST['Reg'] = $_POST['Reg'] == null ? '0145' : $_POST['Reg'];
		
  }

  public function create(){
    $this->form_validation->set_rules('Reg', 'Reg', 'required|max_length[4]');
		$this->form_validation->set_rules('CodIncTrib', 'CodIncTrib', 'required|integer');
		$this->form_validation->set_rules('VlRecTot', 'VlRecTot', 'required|decimal');
		$this->form_validation->set_rules('VlRecAtiv', 'VlRecAtiv', 'required|decimal');
		$this->form_validation->set_rules('VlRecDemaisAtiv', 'VlRecDemaisAtiv', 'required|decimal');
		$this->form_validation->set_rules('InfoCompl', 'InfoCompl', 'max_length[255]');
		
    parent::create();
  }
  
  public function update($Id){
    $this->form_validation->set_rules('Reg', 'Reg', 'required|max_length[4]');
		$this->form_validation->set_rules('CodIncTrib', 'CodIncTrib', 'required|integer');
		$this->form_validation->set_rules('VlRecTot', 'VlRecTot', 'required|decimal');
		$this->form_validation->set_rules('VlRecAtiv', 'VlRecAtiv', 'required|decimal');
		$this->form_validation->set_rules('VlRecDemaisAtiv', 'VlRecDemaisAtiv', 'required|decimal');
		$this->form_validation->set_rules('InfoCompl', 'InfoCompl', 'max_length[255]');
		
    parent::update($Id);
  }

  public function delete($Id){
    parent::delete($Id);
  }
}