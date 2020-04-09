<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Regs0145efdc extends MY_Controller {

  public function  __construct() {
    parent::__construct();
    $this->table = 'regs0145efdc';
    $this->nameId = '0145_Id';
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
    $this->form_validation->set_rules('0145_Reg', '0145_Reg', 'required|max_length[4]');
		$this->form_validation->set_rules('0145_CodIncTrib', '0145_CodIncTrib', 'required|integer');
		$this->form_validation->set_rules('0145_VlRecTot', '0145_VlRecTot', 'required|decimal');
		$this->form_validation->set_rules('0145_VlRecAtiv', '0145_VlRecAtiv', 'required|decimal');
		$this->form_validation->set_rules('0145_VlRecDemaisAtiv', '0145_VlRecDemaisAtiv', 'required|decimal');
		$this->form_validation->set_rules('0145_InfoCompl', '0145_InfoCompl', 'max_length[255]');
		
    parent::create();
  }

  public function update($Id){
    $this->form_validation->set_rules('0145_Reg', '0145_Reg', 'required|max_length[4]');
		$this->form_validation->set_rules('0145_CodIncTrib', '0145_CodIncTrib', 'required|integer');
		$this->form_validation->set_rules('0145_VlRecTot', '0145_VlRecTot', 'required|decimal');
		$this->form_validation->set_rules('0145_VlRecAtiv', '0145_VlRecAtiv', 'required|decimal');
		$this->form_validation->set_rules('0145_VlRecDemaisAtiv', '0145_VlRecDemaisAtiv', 'required|decimal');
		$this->form_validation->set_rules('0145_InfoCompl', '0145_InfoCompl', 'max_length[255]');
		
    parent::update($Id);
  }

  public function delete($Id){
    parent::delete($Id);
  }
}
