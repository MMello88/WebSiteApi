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
    $_POST['Reg'] = $_POST['Reg'] == null ? '0111' : $_POST['Reg'];
		
  }

  public function create(){
    $this->form_validation->set_rules('Reg', 'Reg', 'required|max_length[4]');
		$this->form_validation->set_rules('RecBruNCumTribMI', 'RecBruNCumTribMI', 'required|integer');
		$this->form_validation->set_rules('RecBruNCumNaoTribMI', 'RecBruNCumNaoTribMI', 'required|integer');
		$this->form_validation->set_rules('RecBruNCumExp', 'RecBruNCumExp', 'required|integer');
		$this->form_validation->set_rules('RecBruNCum', 'RecBruNCum', 'required|integer');
		$this->form_validation->set_rules('RecBruNCumTotal', 'RecBruNCumTotal', 'required|integer');
		
    parent::create();
  }
  
  public function update($Id){
    $this->form_validation->set_rules('Reg', 'Reg', 'required|max_length[4]');
		$this->form_validation->set_rules('RecBruNCumTribMI', 'RecBruNCumTribMI', 'required|integer');
		$this->form_validation->set_rules('RecBruNCumNaoTribMI', 'RecBruNCumNaoTribMI', 'required|integer');
		$this->form_validation->set_rules('RecBruNCumExp', 'RecBruNCumExp', 'required|integer');
		$this->form_validation->set_rules('RecBruNCum', 'RecBruNCum', 'required|integer');
		$this->form_validation->set_rules('RecBruNCumTotal', 'RecBruNCumTotal', 'required|integer');
		
    parent::update($Id);
  }

  public function delete($Id){
    parent::delete($Id);
  }
}