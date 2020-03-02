<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Regsa120efdc extends MY_Controller {

  public function  __construct() {
    parent::__construct();
    $this->table = 'regsa120efdc';
    $this->nameId = 'Id';
  }

  public function get($Id = '', $date = ''){
    parent::get($Id, $date);
  }
  
  public function setDefaultValue(){
    $_POST['Reg'] = 'A120';
  }

  public function create(){
    $this->form_validation->set_rules('Reg', 'Reg', 'required');
		$this->form_validation->set_rules('VlTotalServico', 'VlTotalServico', 'required');
		$this->form_validation->set_rules('VlBcPis', 'VlBcPis', 'required');
		$this->form_validation->set_rules('VlPisImportacao', 'VlPisImportacao', 'required');
		$this->form_validation->set_rules('DtPgtoPisImportacao', 'DtPgtoPisImportacao', 'required');
		$this->form_validation->set_rules('VlBcCofins', 'VlBcCofins', 'required');
		$this->form_validation->set_rules('VlCofinsImportacao', 'VlCofinsImportacao', 'required');
		$this->form_validation->set_rules('DtPgtoCofinsImportacao', 'DtPgtoCofinsImportacao', 'required');
		$this->form_validation->set_rules('IndicadorLocalExecucaoServico', 'IndicadorLocalExecucaoServico', 'required');
		
    parent::create();
  }
  
  public function update($Id){
    $this->form_validation->set_rules('Reg', 'Reg', 'required');
		$this->form_validation->set_rules('VlTotalServico', 'VlTotalServico', 'required');
		$this->form_validation->set_rules('VlBcPis', 'VlBcPis', 'required');
		$this->form_validation->set_rules('VlPisImportacao', 'VlPisImportacao', 'required');
		$this->form_validation->set_rules('DtPgtoPisImportacao', 'DtPgtoPisImportacao', 'required');
		$this->form_validation->set_rules('VlBcCofins', 'VlBcCofins', 'required');
		$this->form_validation->set_rules('VlCofinsImportacao', 'VlCofinsImportacao', 'required');
		$this->form_validation->set_rules('DtPgtoCofinsImportacao', 'DtPgtoCofinsImportacao', 'required');
		$this->form_validation->set_rules('IndicadorLocalExecucaoServico', 'IndicadorLocalExecucaoServico', 'required');
		
    parent::update($Id);
  }

  public function delete($Id){
    parent::delete($Id);
  }
}icadorLocalExecucaoServico', 'IndicadorLocalExecucaoServico', 'required');
		$this->form_validation->set_rules('RegA100EFDCId', 'RegA100EFDCId', 'required');
		
    parent::update($Id);
  }

  public function delete($Id){
    parent::delete($Id);
  }
}