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
    $_POST['Reg'] = '0145';
  }

  public function create(){
    $this->form_validation->set_rules('Reg', 'Reg', 'required');
		$this->form_validation->set_rules('CodIncTrib', 'CodIncTrib', 'required');
		$this->form_validation->set_rules('VlRecTot', 'VlRecTot', 'required');
		$this->form_validation->set_rules('VlRecAtiv', 'VlRecAtiv', 'required');
		$this->form_validation->set_rules('VlRecDemaisAtiv', 'VlRecDemaisAtiv', 'required');
		
    parent::create();
  }
  
  public function update($Id){
    $this->form_validation->set_rules('Reg', 'Reg', 'required');
		$this->form_validation->set_rules('CodIncTrib', 'CodIncTrib', 'required');
		$this->form_validation->set_rules('VlRecTot', 'VlRecTot', 'required');
		$this->form_validation->set_rules('VlRecAtiv', 'VlRecAtiv', 'required');
		$this->form_validation->set_rules('VlRecDemaisAtiv', 'VlRecDemaisAtiv', 'required');
		
    parent::update($Id);
  }

  public function delete($Id){
    parent::delete($Id);
  }
}tion->set_rules('VlRecDemaisAtiv', 'VlRecDemaisAtiv', 'required');
		$this->form_validation->set_rules('InfoCompl', 'InfoCompl', 'required');
		
    parent::update($Id);
  }

  public function delete($Id){
    parent::delete($Id);
  }
}