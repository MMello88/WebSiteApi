<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Regsa111efdc extends MY_Controller {

  public function  __construct() {
    parent::__construct();
    $this->table = 'regsa111efdc';
    $this->nameId = 'Id';
  }

  public function get($Id = '', $date = ''){
    parent::get($Id, $date);
  }
  
  public function setDefaultValue(){
    $_POST['Reg'] = $_POST['Reg'] == null ? 'A111' : $_POST['Reg'];
		
  }

  public function create(){
    $this->form_validation->set_rules('Reg', 'Reg', 'required|max_length[4]');
		$this->form_validation->set_rules('NumProcesso', 'NumProcesso', 'required|max_length[15]');
		$this->form_validation->set_rules('IndicadorOrigemProcesso', 'IndicadorOrigemProcesso', 'required|integer');
		$this->form_validation->set_rules('RegA100EFDCId', 'RegA100EFDCId', 'integer');
		
    parent::create();
  }
  
  public function update($Id){
    $this->form_validation->set_rules('Reg', 'Reg', 'required|max_length[4]');
		$this->form_validation->set_rules('NumProcesso', 'NumProcesso', 'required|max_length[15]');
		$this->form_validation->set_rules('IndicadorOrigemProcesso', 'IndicadorOrigemProcesso', 'required|integer');
		$this->form_validation->set_rules('RegA100EFDCId', 'RegA100EFDCId', 'integer');
		
    parent::update($Id);
  }

  public function delete($Id){
    parent::delete($Id);
  }
}