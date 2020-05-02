<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Regsa110efdc extends MY_Controller {

  public function  __construct() {
    parent::__construct();
    $this->table = 'regsa110efdc';
    $this->nameId = 'a110_Id';
    $this->usersId = 'a110_UsersId';
    $this->joins = [
			['table' => 'regs0450efdc', 'condition' => 'regs0450efdc.0450_Id = regsa110efdc.a110_Reg0450EFDCId', 'type' => 'left'],
			['table' => 'regsa100efdc', 'condition' => 'regsa100efdc.a100_Id = regsa110efdc.a110_RegA100EFDCId', 'type' => 'inner'],
    ];
    $this->tableParent = 'regsa100efdc';
    $this->nameIdParent = 'a100_Id';
  }

  public function get($Id = '', $date = ''){
    parent::get($Id, $date);
  }

  public function getByParent($IdParent, $Id = ''){
    parent::getByParent($IdParent, $Id);
  }

  public function setDefaultValue(){
    
  }

  public function create(){
    $this->form_validation->set_rules('a110_Reg', 'a110_Reg', 'required|max_length[4]');
		$this->form_validation->set_rules('a110_Reg0450EFDCId', 'a110_Reg0450EFDCId', 'integer');
		$this->form_validation->set_rules('a110_TxtComplementar', 'a110_TxtComplementar', 'max_length[255]');
		$this->form_validation->set_rules('a110_RegA100EFDCId', 'a110_RegA100EFDCId', 'required|integer');
		$this->form_validation->set_rules('a110_UsersId', 'a110_UsersId', 'required|integer');
		
    parent::create();
  }

  public function update($Id){
    $this->form_validation->set_rules('a110_Reg', 'a110_Reg', 'required|max_length[4]');
		$this->form_validation->set_rules('a110_Reg0450EFDCId', 'a110_Reg0450EFDCId', 'integer');
		$this->form_validation->set_rules('a110_TxtComplementar', 'a110_TxtComplementar', 'max_length[255]');
		$this->form_validation->set_rules('a110_RegA100EFDCId', 'a110_RegA100EFDCId', 'required|integer');
		$this->form_validation->set_rules('a110_UsersId', 'a110_UsersId', 'required|integer');
		
    parent::update($Id);
  }

  public function delete($Id){
    parent::delete($Id);
  }
}
