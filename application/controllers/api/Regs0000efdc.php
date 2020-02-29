<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Regs0000efdc extends MY_Controller {

  public function  __construct() {
    parent::__construct();
    $this->table = "regs0000efdc";
    $this->nameId = "Id";
  }

  public function get($Id = '', $date = ''){
    parent::get($Id, $date);
  }
  
  public function setDefaultValue(){
  }

  public function create(){
    $this->form_validation->set_rules('Id', 'Id', 'required');                  
    $this->form_validation->set_rules('Reg', 'Reg', 'required');                
    $this->form_validation->set_rules('Ref311Id', 'Ref311Id', 'required');      
    $this->form_validation->set_rules('TipoEscrit', 'TipoEscrit', 'required');  
    $this->form_validation->set_rules('IndSitEsp', 'IndSitEsp', 'required');    
    $this->form_validation->set_rules('DtIni', 'DtIni', 'required');            
    $this->form_validation->set_rules('DtFin', 'DtFin', 'required');            
    $this->form_validation->set_rules('IndNatPj', 'IndNatPj', 'required');      
    $this->form_validation->set_rules('IndAtiv', 'IndAtiv', 'required');  
    parent::create();
  }
  
  public function update($Id){
    $this->form_validation->set_rules('Id', 'Id', 'required');                  
    $this->form_validation->set_rules('Reg', 'Reg', 'required');                
    $this->form_validation->set_rules('Ref311Id', 'Ref311Id', 'required');      
    $this->form_validation->set_rules('TipoEscrit', 'TipoEscrit', 'required');  
    $this->form_validation->set_rules('IndSitEsp', 'IndSitEsp', 'required');    
    $this->form_validation->set_rules('DtIni', 'DtIni', 'required');            
    $this->form_validation->set_rules('DtFin', 'DtFin', 'required');            
    $this->form_validation->set_rules('IndNatPj', 'IndNatPj', 'required');      
    $this->form_validation->set_rules('IndAtiv', 'IndAtiv', 'required');  
    parent::update($Id);
  }

  public function delete($Id){
    parent::delete($Id);
  }
}
