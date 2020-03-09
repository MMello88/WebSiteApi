<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Regsa170efdc extends MY_Controller {

  public function  __construct() {
    parent::__construct();
    $this->table = 'regsa170efdc';
    $this->nameId = 'Id';
  }

  public function get($Id = '', $date = ''){
    parent::get($Id, $date);
  }
  
  public function setDefaultValue(){
    $_POST['Reg'] = $_POST['Reg'] == null ? 'A170' : $_POST['Reg'];
		
  }

  public function create(){
    $this->form_validation->set_rules('Reg', 'Reg', 'required|max_length[4]');
		$this->form_validation->set_rules('NumItem', 'NumItem', 'required|integer');
		$this->form_validation->set_rules('Reg0200EFDCId', 'Reg0200EFDCId', 'integer');
		$this->form_validation->set_rules('DescricaoComplementar', 'DescricaoComplementar', 'max_length[255]');
		$this->form_validation->set_rules('VlItem', 'VlItem', 'required|decimal');
		$this->form_validation->set_rules('VlDesconto', 'VlDesconto', 'required|decimal');
		$this->form_validation->set_rules('Ref431Id', 'Ref431Id', 'integer');
		$this->form_validation->set_rules('IndicadorOrigemCredito', 'IndicadorOrigemCredito', 'required|integer');
		$this->form_validation->set_rules('Ref433Id', 'Ref433Id', 'integer');
		$this->form_validation->set_rules('VlBcPis', 'VlBcPis', 'required|decimal');
		$this->form_validation->set_rules('VlAliqPis', 'VlAliqPis', 'required|decimal');
		$this->form_validation->set_rules('VlPis', 'VlPis', 'required|decimal');
		$this->form_validation->set_rules('Ref434Id', 'Ref434Id', 'integer');
		$this->form_validation->set_rules('VlBcCofins', 'VlBcCofins', 'required|decimal');
		$this->form_validation->set_rules('VlAliqCofins', 'VlAliqCofins', 'required|decimal');
		$this->form_validation->set_rules('VlCofins', 'VlCofins', 'required|decimal');
		$this->form_validation->set_rules('Reg0500EFDCId', 'Reg0500EFDCId', 'integer');
		$this->form_validation->set_rules('Reg0600EFDCId', 'Reg0600EFDCId', 'integer');
		$this->form_validation->set_rules('RegA100EFDCId', 'RegA100EFDCId', 'integer');
		
    parent::create();
  }
  
  public function update($Id){
    $this->form_validation->set_rules('Reg', 'Reg', 'required|max_length[4]');
		$this->form_validation->set_rules('NumItem', 'NumItem', 'required|integer');
		$this->form_validation->set_rules('Reg0200EFDCId', 'Reg0200EFDCId', 'integer');
		$this->form_validation->set_rules('DescricaoComplementar', 'DescricaoComplementar', 'max_length[255]');
		$this->form_validation->set_rules('VlItem', 'VlItem', 'required|decimal');
		$this->form_validation->set_rules('VlDesconto', 'VlDesconto', 'required|decimal');
		$this->form_validation->set_rules('Ref431Id', 'Ref431Id', 'integer');
		$this->form_validation->set_rules('IndicadorOrigemCredito', 'IndicadorOrigemCredito', 'required|integer');
		$this->form_validation->set_rules('Ref433Id', 'Ref433Id', 'integer');
		$this->form_validation->set_rules('VlBcPis', 'VlBcPis', 'required|decimal');
		$this->form_validation->set_rules('VlAliqPis', 'VlAliqPis', 'required|decimal');
		$this->form_validation->set_rules('VlPis', 'VlPis', 'required|decimal');
		$this->form_validation->set_rules('Ref434Id', 'Ref434Id', 'integer');
		$this->form_validation->set_rules('VlBcCofins', 'VlBcCofins', 'required|decimal');
		$this->form_validation->set_rules('VlAliqCofins', 'VlAliqCofins', 'required|decimal');
		$this->form_validation->set_rules('VlCofins', 'VlCofins', 'required|decimal');
		$this->form_validation->set_rules('Reg0500EFDCId', 'Reg0500EFDCId', 'integer');
		$this->form_validation->set_rules('Reg0600EFDCId', 'Reg0600EFDCId', 'integer');
		$this->form_validation->set_rules('RegA100EFDCId', 'RegA100EFDCId', 'integer');
		
    parent::update($Id);
  }

  public function delete($Id){
    parent::delete($Id);
  }
}