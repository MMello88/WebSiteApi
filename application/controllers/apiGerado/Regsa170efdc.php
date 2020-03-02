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
    $_POST['Reg'] = 'A170';
  }

  public function create(){
    $this->form_validation->set_rules('Reg', 'Reg', 'required');
		$this->form_validation->set_rules('NumItem', 'NumItem', 'required');
		$this->form_validation->set_rules('VlItem', 'VlItem', 'required');
		$this->form_validation->set_rules('VlDesconto', 'VlDesconto', 'required');
		$this->form_validation->set_rules('IndicadorOrigemCredito', 'IndicadorOrigemCredito', 'required');
		$this->form_validation->set_rules('VlBcPis', 'VlBcPis', 'required');
		$this->form_validation->set_rules('VlAliqPis', 'VlAliqPis', 'required');
		$this->form_validation->set_rules('VlPis', 'VlPis', 'required');
		$this->form_validation->set_rules('VlBcCofins', 'VlBcCofins', 'required');
		$this->form_validation->set_rules('VlAliqCofins', 'VlAliqCofins', 'required');
		$this->form_validation->set_rules('VlCofins', 'VlCofins', 'required');
		
    parent::create();
  }
  
  public function update($Id){
    $this->form_validation->set_rules('Reg', 'Reg', 'required');
		$this->form_validation->set_rules('NumItem', 'NumItem', 'required');
		$this->form_validation->set_rules('VlItem', 'VlItem', 'required');
		$this->form_validation->set_rules('VlDesconto', 'VlDesconto', 'required');
		$this->form_validation->set_rules('IndicadorOrigemCredito', 'IndicadorOrigemCredito', 'required');
		$this->form_validation->set_rules('VlBcPis', 'VlBcPis', 'required');
		$this->form_validation->set_rules('VlAliqPis', 'VlAliqPis', 'required');
		$this->form_validation->set_rules('VlPis', 'VlPis', 'required');
		$this->form_validation->set_rules('VlBcCofins', 'VlBcCofins', 'required');
		$this->form_validation->set_rules('VlAliqCofins', 'VlAliqCofins', 'required');
		$this->form_validation->set_rules('VlCofins', 'VlCofins', 'required');
		
    parent::update($Id);
  }

  public function delete($Id){
    parent::delete($Id);
  }
}d', 'Reg0200EFDCId', 'required');
		$this->form_validation->set_rules('DescricaoComplementar', 'DescricaoComplementar', 'required');
		$this->form_validation->set_rules('VlItem', 'VlItem', 'required');
		$this->form_validation->set_rules('VlDesconto', 'VlDesconto', 'required');
		$this->form_validation->set_rules('Ref431Id', 'Ref431Id', 'required');
		$this->form_validation->set_rules('IndicadorOrigemCredito', 'IndicadorOrigemCredito', 'required');
		$this->form_validation->set_rules('Ref433Id', 'Ref433Id', 'required');
		$this->form_validation->set_rules('VlBcPis', 'VlBcPis', 'required');
		$this->form_validation->set_rules('VlAliqPis', 'VlAliqPis', 'required');
		$this->form_validation->set_rules('VlPis', 'VlPis', 'required');
		$this->form_validation->set_rules('Ref434Id', 'Ref434Id', 'required');
		$this->form_validation->set_rules('VlBcCofins', 'VlBcCofins', 'required');
		$this->form_validation->set_rules('VlAliqCofins', 'VlAliqCofins', 'required');
		$this->form_validation->set_rules('VlCofins', 'VlCofins', 'required');
		$this->form_validation->set_rules('Reg0500EFDCId', 'Reg0500EFDCId', 'required');
		$this->form_validation->set_rules('Reg0600EFDCId', 'Reg0600EFDCId', 'required');
		$this->form_validation->set_rules('RegA100EFDCId', 'RegA100EFDCId', 'required');
		
    parent::update($Id);
  }

  public function delete($Id){
    parent::delete($Id);
  }
}