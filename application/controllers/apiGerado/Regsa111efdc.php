<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Regsa111efdc extends MY_Controller {

  public function  __construct() {
    parent::__construct();
    $this->table = 'regsa111efdc';
    $this->nameId = 'a111_Id';
    $this->usersId = 'UsersId';
    $this->joins = [
			['table' => 'regsa100efdc', 'condition' => 'regsa100efdc.a100_Id = regsa111efdc.RegA100EFDCId', 'type' => 'left'],
    ];
  }

  public function get($Id = '', $date = ''){
    parent::get($Id, $date);
  }

  public function setDefaultValue(){
    
  }

  public function create(){
    $this->form_validation->set_rules('a111_Reg', 'a111_Reg', 'required|max_length[4]');
		$this->form_validation->set_rules('a111_NumProcesso', 'a111_NumProcesso', 'required|max_length[15]');
		$this->form_validation->set_rules('a111_IndicadorOrigemProcesso', 'a111_IndicadorOrigemProcesso', 'required|in_list[1 - Justiça Federal,3 – Secretaria da Receita Federal do Brasil,9 - Outros]');
		$this->form_validation->set_rules('RegA100EFDCId', 'RegA100EFDCId', 'integer');
		$this->form_validation->set_rules('UsersId', 'UsersId', 'required|integer');
		
    parent::create();
  }

  public function update($Id){
    $this->form_validation->set_rules('a111_Reg', 'a111_Reg', 'required|max_length[4]');
		$this->form_validation->set_rules('a111_NumProcesso', 'a111_NumProcesso', 'required|max_length[15]');
		$this->form_validation->set_rules('a111_IndicadorOrigemProcesso', 'a111_IndicadorOrigemProcesso', 'required|in_list[1 - Justiça Federal,3 – Secretaria da Receita Federal do Brasil,9 - Outros]');
		$this->form_validation->set_rules('RegA100EFDCId', 'RegA100EFDCId', 'integer');
		$this->form_validation->set_rules('UsersId', 'UsersId', 'required|integer');
		
    parent::update($Id);
  }

  public function delete($Id){
    parent::delete($Id);
  }
}
