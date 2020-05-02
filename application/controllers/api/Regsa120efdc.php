<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Regsa120efdc extends MY_Controller {

  public function  __construct() {
    parent::__construct();
    $this->table = 'regsa120efdc';
    $this->nameId = 'a120_Id';
    $this->usersId = 'a120_UsersId';
    $this->joins = [
			['table' => 'regsa100efdc', 'condition' => 'regsa100efdc.a100_Id = regsa120efdc.a120_RegA100EFDCId', 'type' => 'left'],
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
    $this->form_validation->set_rules('a120_Reg', 'a120_Reg', 'required|max_length[4]');
		$this->form_validation->set_rules('a120_VlTotalServico', 'a120_VlTotalServico', 'required|decimal');
		$this->form_validation->set_rules('a120_VlBcPis', 'a120_VlBcPis', 'required|decimal');
		$this->form_validation->set_rules('a120_VlPisImportacao', 'a120_VlPisImportacao', 'required|decimal');
		$this->form_validation->set_rules('a120_DtPgtoPisImportacao', 'a120_DtPgtoPisImportacao', 'required|valid_date');
		$this->form_validation->set_rules('a120_VlBcCofins', 'a120_VlBcCofins', 'required|decimal');
		$this->form_validation->set_rules('a120_VlCofinsImportacao', 'a120_VlCofinsImportacao', 'required|decimal');
		$this->form_validation->set_rules('a120_DtPgtoCofinsImportacao', 'a120_DtPgtoCofinsImportacao', 'required|valid_date');
		$this->form_validation->set_rules('a120_IndicadorLocalExecucaoServico', 'a120_IndicadorLocalExecucaoServico', 'required|in_list[0 – Executado no País,1 – Executado no Exterior, cujo resultado se verifique no País]');
		$this->form_validation->set_rules('a120_RegA100EFDCId', 'a120_RegA100EFDCId', 'integer');
		$this->form_validation->set_rules('a120_UsersId', 'a120_UsersId', 'required|integer');
		
    parent::create();
  }

  public function update($Id){
    $this->form_validation->set_rules('a120_Reg', 'a120_Reg', 'required|max_length[4]');
		$this->form_validation->set_rules('a120_VlTotalServico', 'a120_VlTotalServico', 'required|decimal');
		$this->form_validation->set_rules('a120_VlBcPis', 'a120_VlBcPis', 'required|decimal');
		$this->form_validation->set_rules('a120_VlPisImportacao', 'a120_VlPisImportacao', 'required|decimal');
		$this->form_validation->set_rules('a120_DtPgtoPisImportacao', 'a120_DtPgtoPisImportacao', 'required|valid_date');
		$this->form_validation->set_rules('a120_VlBcCofins', 'a120_VlBcCofins', 'required|decimal');
		$this->form_validation->set_rules('a120_VlCofinsImportacao', 'a120_VlCofinsImportacao', 'required|decimal');
		$this->form_validation->set_rules('a120_DtPgtoCofinsImportacao', 'a120_DtPgtoCofinsImportacao', 'required|valid_date');
		$this->form_validation->set_rules('a120_IndicadorLocalExecucaoServico', 'a120_IndicadorLocalExecucaoServico', 'required|in_list[0 – Executado no País,1 – Executado no Exterior, cujo resultado se verifique no País]');
		$this->form_validation->set_rules('a120_RegA100EFDCId', 'a120_RegA100EFDCId', 'integer');
		$this->form_validation->set_rules('a120_UsersId', 'a120_UsersId', 'required|integer');
		
    parent::update($Id);
  }

  public function delete($Id){
    parent::delete($Id);
  }
}
