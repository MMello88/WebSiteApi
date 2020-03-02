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
    $_POST['Reg'] = 'A111';
  }

  public function create(){
    $this->form_validation->set_rules('Reg', 'Reg', 'required');
		$this->form_validation->set_rules('NumProcesso', 'NumProcesso', 'required');
		$this->form_validation->set_rules('IndicadorOrigemProcesso', 'IndicadorOrigemProcesso', 'required');
		
    parent::create();
  }
  
  public function update($Id){
    $this->form_validation->set_rules('Reg', 'Reg', 'required');
		$this->form_validation->set_rules('NumProcesso', 'NumProcesso', 'required');
		$this->form_validation->set_rules('IndicadorOrigemProcesso', 'IndicadorOrigemProcesso', 'required');
		
    parent::update($Id);
  }

  public function delete($Id){
    parent::delete($Id);
  }
}t_rules('IndicadorOrigemProcesso', 'IndicadorOrigemProcesso', 'required');
		$this->form_validation->set_rules('RegA100EFDCId', 'RegA100EFDCId', 'required');
		
    parent::update($Id);
  }

  public function delete($Id){
    parent::delete($Id);
  }
}