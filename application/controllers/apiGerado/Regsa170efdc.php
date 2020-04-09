<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Regsa170efdc extends MY_Controller {

  public function  __construct() {
    parent::__construct();
    $this->table = 'regsa170efdc';
    $this->nameId = 'a170_Id';
    $this->usersId = 'UsersId';
    $this->joins = [
			['table' => 'regs0200efdc', 'condition' => 'regs0200efdc.0200_Id = regsa170efdc.Reg0200EFDCId', 'type' => 'left'],
			['table' => 'ref431', 'condition' => 'ref431.431_Id = regsa170efdc.Ref431Id', 'type' => 'left'],
			['table' => 'ref433', 'condition' => 'ref433.433_Id = regsa170efdc.Ref433Id', 'type' => 'left'],
			['table' => 'ref434', 'condition' => 'ref434.434_Id = regsa170efdc.Ref434Id', 'type' => 'left'],
			['table' => 'regs0500efdc', 'condition' => 'regs0500efdc.0500_Id = regsa170efdc.Reg0500EFDCId', 'type' => 'left'],
			['table' => 'regs0600efdc', 'condition' => 'regs0600efdc.0600_Id = regsa170efdc.Reg0600EFDCId', 'type' => 'left'],
			['table' => 'regsa100efdc', 'condition' => 'regsa100efdc.a100_Id = regsa170efdc.RegA100EFDCId', 'type' => 'left'],
    ];
  }

  public function get($Id = '', $date = ''){
    parent::get($Id, $date);
  }

  public function setDefaultValue(){
    
  }

  public function create(){
    $this->form_validation->set_rules('a170_Reg', 'a170_Reg', 'required|max_length[4]');
		$this->form_validation->set_rules('a170_NumItem', 'a170_NumItem', 'required|integer');
		$this->form_validation->set_rules('Reg0200EFDCId', 'Reg0200EFDCId', 'integer');
		$this->form_validation->set_rules('a170_DescricaoComplementar', 'a170_DescricaoComplementar', 'max_length[255]');
		$this->form_validation->set_rules('a170_VlItem', 'a170_VlItem', 'required|decimal');
		$this->form_validation->set_rules('a170_VlDesconto', 'a170_VlDesconto', 'required|decimal');
		$this->form_validation->set_rules('Ref431Id', 'Ref431Id', 'integer');
		$this->form_validation->set_rules('a170_IndicadorOrigemCredito', 'a170_IndicadorOrigemCredito', 'required|in_list[0 – Operação no Mercado Interno,1 – Operação de Importação]');
		$this->form_validation->set_rules('Ref433Id', 'Ref433Id', 'integer');
		$this->form_validation->set_rules('a170_VlBcPis', 'a170_VlBcPis', 'required|decimal');
		$this->form_validation->set_rules('a170_VlAliqPis', 'a170_VlAliqPis', 'required|decimal');
		$this->form_validation->set_rules('a170_VlPis', 'a170_VlPis', 'required|decimal');
		$this->form_validation->set_rules('Ref434Id', 'Ref434Id', 'integer');
		$this->form_validation->set_rules('a170_VlBcCofins', 'a170_VlBcCofins', 'required|decimal');
		$this->form_validation->set_rules('a170_VlAliqCofins', 'a170_VlAliqCofins', 'required|decimal');
		$this->form_validation->set_rules('a170_VlCofins', 'a170_VlCofins', 'required|decimal');
		$this->form_validation->set_rules('Reg0500EFDCId', 'Reg0500EFDCId', 'integer');
		$this->form_validation->set_rules('Reg0600EFDCId', 'Reg0600EFDCId', 'integer');
		$this->form_validation->set_rules('RegA100EFDCId', 'RegA100EFDCId', 'integer');
		$this->form_validation->set_rules('UsersId', 'UsersId', 'required|integer');
		
    parent::create();
  }

  public function update($Id){
    $this->form_validation->set_rules('a170_Reg', 'a170_Reg', 'required|max_length[4]');
		$this->form_validation->set_rules('a170_NumItem', 'a170_NumItem', 'required|integer');
		$this->form_validation->set_rules('Reg0200EFDCId', 'Reg0200EFDCId', 'integer');
		$this->form_validation->set_rules('a170_DescricaoComplementar', 'a170_DescricaoComplementar', 'max_length[255]');
		$this->form_validation->set_rules('a170_VlItem', 'a170_VlItem', 'required|decimal');
		$this->form_validation->set_rules('a170_VlDesconto', 'a170_VlDesconto', 'required|decimal');
		$this->form_validation->set_rules('Ref431Id', 'Ref431Id', 'integer');
		$this->form_validation->set_rules('a170_IndicadorOrigemCredito', 'a170_IndicadorOrigemCredito', 'required|in_list[0 – Operação no Mercado Interno,1 – Operação de Importação]');
		$this->form_validation->set_rules('Ref433Id', 'Ref433Id', 'integer');
		$this->form_validation->set_rules('a170_VlBcPis', 'a170_VlBcPis', 'required|decimal');
		$this->form_validation->set_rules('a170_VlAliqPis', 'a170_VlAliqPis', 'required|decimal');
		$this->form_validation->set_rules('a170_VlPis', 'a170_VlPis', 'required|decimal');
		$this->form_validation->set_rules('Ref434Id', 'Ref434Id', 'integer');
		$this->form_validation->set_rules('a170_VlBcCofins', 'a170_VlBcCofins', 'required|decimal');
		$this->form_validation->set_rules('a170_VlAliqCofins', 'a170_VlAliqCofins', 'required|decimal');
		$this->form_validation->set_rules('a170_VlCofins', 'a170_VlCofins', 'required|decimal');
		$this->form_validation->set_rules('Reg0500EFDCId', 'Reg0500EFDCId', 'integer');
		$this->form_validation->set_rules('Reg0600EFDCId', 'Reg0600EFDCId', 'integer');
		$this->form_validation->set_rules('RegA100EFDCId', 'RegA100EFDCId', 'integer');
		$this->form_validation->set_rules('UsersId', 'UsersId', 'required|integer');
		
    parent::update($Id);
  }

  public function delete($Id){
    parent::delete($Id);
  }
}
