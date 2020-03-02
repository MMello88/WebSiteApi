<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Regs0111efdc extends MY_Controller {

  public function  __construct() {
    parent::__construct();
    $this->table = 'regs0111efdc';
    $this->nameId = 'Id';
  }

  public function get($Id = '', $date = ''){
    parent::get($Id, $date);
  }
  
  public function setDefaultValue(){
    $_POST['Reg'] = '0111';
  }

  public function create(){
    $this->form_validation->set_rules('Reg', 'Reg', 'required');
		$this->form_validation->set_rules('RecBruNCumTribMI', 'RecBruNCumTribMI', 'required');
		$this->form_validation->set_rules('RecBruNCumNaoTribMI', 'RecBruNCumNaoTribMI', 'required');
		$this->form_validation->set_rules('RecBruNCumExp', 'RecBruNCumExp', 'required');
		$this->form_validation->set_rules('RecBruNCum', 'RecBruNCum', 'required');
		$this->form_validation->set_rules('RecBruNCumTotal', 'RecBruNCumTotal', 'required');
		
    parent::create();
  }
  
  public function update($Id){
    $this->form_validation->set_rules('Reg', 'Reg', 'required');
		$this->form_validation->set_rules('RecBruNCumTribMI', 'RecBruNCumTribMI', 'required');
		$this->form_validation->set_rules('RecBruNCumNaoTribMI', 'RecBruNCumNaoTribMI', 'required');
		$this->form_validation->set_rules('RecBruNCumExp', 'RecBruNCumExp', 'required');
		$this->form_validation->set_rules('RecBruNCum', 'RecBruNCum', 'required');
		$this->form_validation->set_rules('RecBruNCumTotal', 'RecBruNCumTotal', 'required');
		
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