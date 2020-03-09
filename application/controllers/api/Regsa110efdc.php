<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Regsa110efdc extends MY_Controller {

  public function  __construct() {
    parent::__construct();
    $this->table = 'regsa110efdc';
    $this->nameId = 'Id';
  }

  public function get($Id = '', $date = ''){
    parent::get($Id, $date);
  }
  
  public function setDefaultValue(){
    $_POST['Reg'] = $_POST['Reg'] == null ? 'A110' : $_POST['Reg'];
		
  }

  public function create(){
    $this->form_validation->set_rules('Reg', 'Reg', 'required|max_length[4]');
		$this->form_validation->set_rules('Reg0450EFDCId', 'Reg0450EFDCId', 'integer');
		$this->form_validation->set_rules('TxtComplementar', 'TxtComplementar', 'max_length[255]');
		$this->form_validation->set_rules('RegA100EFDCId', 'RegA100EFDCId', 'required|integer');
		
    parent::create();
  }
  
  public function update($Id){
    $this->form_validation->set_rules('Reg', 'Reg', 'required|max_length[4]');
		$this->form_validation->set_rules('Reg0450EFDCId', 'Reg0450EFDCId', 'integer');
		$this->form_validation->set_rules('TxtComplementar', 'TxtComplementar', 'max_length[255]');
		$this->form_validation->set_rules('RegA100EFDCId', 'RegA100EFDCId', 'required|integer');
		
    parent::update($Id);
  }

  public function delete($Id){
    parent::delete($Id);
  }
}