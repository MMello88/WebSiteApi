<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Regs0200efdc extends MY_Controller {

  public function  __construct() {
    parent::__construct();
    $this->table = 'regs0200efdc';
    $this->nameId = 'Id';
  }

  public function get($Id = '', $date = ''){
    parent::get($Id, $date);
  }
  
  public function setDefaultValue(){
    $_POST['Reg'] = '0200';
  }

  public function create(){
    $this->form_validation->set_rules('Reg', 'Reg', 'required');
		$this->form_validation->set_rules('CodItem', 'CodItem', 'required');
		$this->form_validation->set_rules('DescricaoItem', 'DescricaoItem', 'required');
		$this->form_validation->set_rules('TipoItem', 'TipoItem', 'required');
		$this->form_validation->set_rules('CodGen', 'CodGen', 'required');
		$this->form_validation->set_rules('CodLst', 'CodLst', 'required');
		$this->form_validation->set_rules('AliqIcms', 'AliqIcms', 'required');
		$this->form_validation->set_rules('DtIni', 'DtIni', 'required');
		$this->form_validation->set_rules('DtFin', 'DtFin', 'required');
		
    parent::create();
  }
  
  public function update($Id){
    $this->form_validation->set_rules('Reg', 'Reg', 'required');
		$this->form_validation->set_rules('CodItem', 'CodItem', 'required');
		$this->form_validation->set_rules('DescricaoItem', 'DescricaoItem', 'required');
		$this->form_validation->set_rules('TipoItem', 'TipoItem', 'required');
		$this->form_validation->set_rules('CodGen', 'CodGen', 'required');
		$this->form_validation->set_rules('CodLst', 'CodLst', 'required');
		$this->form_validation->set_rules('AliqIcms', 'AliqIcms', 'required');
		$this->form_validation->set_rules('DtIni', 'DtIni', 'required');
		$this->form_validation->set_rules('DtFin', 'DtFin', 'required');
		
    parent::update($Id);
  }

  public function delete($Id){
    parent::delete($Id);
  }
}		
    parent::create();
  }
  
  public function update($Id){
    $this->form_validation->set_rules('Id', 'Id', 'required');
		$this->form_validation->set_rules('Reg', 'Reg', 'required');
		$this->form_validation->set_rules('CodItem', 'CodItem', 'required');
		$this->form_validation->set_rules('DescricaoItem', 'DescricaoItem', 'required');
		$this->form_validation->set_rules('CodBarra', 'CodBarra', 'required');
		$this->form_validation->set_rules('CodAntItem', 'CodAntItem', 'required');
		$this->form_validation->set_rules('Reg0190EFDCId', 'Reg0190EFDCId', 'required');
		$this->form_validation->set_rules('TipoItem', 'TipoItem', 'required');
		$this->form_validation->set_rules('CodNcm', 'CodNcm', 'required');
		$this->form_validation->set_rules('ExIpi', 'ExIpi', 'required');
		$this->form_validation->set_rules('CodGen', 'CodGen', 'required');
		$this->form_validation->set_rules('CodLst', 'CodLst', 'required');
		$this->form_validation->set_rules('AliqIcms', 'AliqIcms', 'required');
		$this->form_validation->set_rules('DtIni', 'DtIni', 'required');
		$this->form_validation->set_rules('DtFin', 'DtFin', 'required');
		$this->form_validation->set_rules('PessoaJuridicaId', 'PessoaJuridicaId', 'required');
		$this->form_validation->set_rules('UserId', 'UserId', 'required');
		$this->form_validation->set_rules('Reg0205EFDCId', 'Reg0205EFDCId', 'required');
		$this->form_validation->set_rules('Reg0206EFDCId', 'Reg0206EFDCId', 'required');
		$this->form_validation->set_rules('Reg020EFDCId', 'Reg020EFDCId', 'required');
		
    parent::update($Id);
  }

  public function delete($Id){
    parent::delete($Id);
  }
}