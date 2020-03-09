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
    $_POST['Reg'] = $_POST['Reg'] == null ? '0200' : $_POST['Reg'];
		
  }

  public function create(){
    $this->form_validation->set_rules('Reg', 'Reg', 'required|max_length[4]');
		$this->form_validation->set_rules('CodItem', 'CodItem', 'required|max_length[60]');
		$this->form_validation->set_rules('DescricaoItem', 'DescricaoItem', 'required|max_length[255]');
		$this->form_validation->set_rules('CodBarra', 'CodBarra', 'max_length[255]');
		$this->form_validation->set_rules('CodAntItem', 'CodAntItem', 'max_length[60]');
		$this->form_validation->set_rules('Reg0190EFDCId', 'Reg0190EFDCId', 'integer');
		$this->form_validation->set_rules('TipoItem', 'TipoItem', 'required|integer');
		$this->form_validation->set_rules('CodNcm', 'CodNcm', 'max_length[8]');
		$this->form_validation->set_rules('ExIpi', 'ExIpi', 'max_length[3]');
		$this->form_validation->set_rules('CodGen', 'CodGen', 'required|integer');
		$this->form_validation->set_rules('CodLst', 'CodLst', 'required|integer');
		$this->form_validation->set_rules('AliqIcms', 'AliqIcms', 'required|decimal');
		$this->form_validation->set_rules('DtIni', 'DtIni', 'required|valid_datetime');
		$this->form_validation->set_rules('DtFin', 'DtFin', 'required|valid_datetime');
		$this->form_validation->set_rules('PessoaJuridicaId', 'PessoaJuridicaId', 'integer');
		$this->form_validation->set_rules('UserId', 'UserId', 'integer');
		$this->form_validation->set_rules('Reg0205EFDCId', 'Reg0205EFDCId', 'integer');
		$this->form_validation->set_rules('Reg0206EFDCId', 'Reg0206EFDCId', 'integer');
		$this->form_validation->set_rules('Reg020EFDCId', 'Reg020EFDCId', 'integer');
		
    parent::create();
  }
  
  public function update($Id){
    $this->form_validation->set_rules('Reg', 'Reg', 'required|max_length[4]');
		$this->form_validation->set_rules('CodItem', 'CodItem', 'required|max_length[60]');
		$this->form_validation->set_rules('DescricaoItem', 'DescricaoItem', 'required|max_length[255]');
		$this->form_validation->set_rules('CodBarra', 'CodBarra', 'max_length[255]');
		$this->form_validation->set_rules('CodAntItem', 'CodAntItem', 'max_length[60]');
		$this->form_validation->set_rules('Reg0190EFDCId', 'Reg0190EFDCId', 'integer');
		$this->form_validation->set_rules('TipoItem', 'TipoItem', 'required|integer');
		$this->form_validation->set_rules('CodNcm', 'CodNcm', 'max_length[8]');
		$this->form_validation->set_rules('ExIpi', 'ExIpi', 'max_length[3]');
		$this->form_validation->set_rules('CodGen', 'CodGen', 'required|integer');
		$this->form_validation->set_rules('CodLst', 'CodLst', 'required|integer');
		$this->form_validation->set_rules('AliqIcms', 'AliqIcms', 'required|decimal');
		$this->form_validation->set_rules('DtIni', 'DtIni', 'required|valid_datetime');
		$this->form_validation->set_rules('DtFin', 'DtFin', 'required|valid_datetime');
		$this->form_validation->set_rules('PessoaJuridicaId', 'PessoaJuridicaId', 'integer');
		$this->form_validation->set_rules('UserId', 'UserId', 'integer');
		$this->form_validation->set_rules('Reg0205EFDCId', 'Reg0205EFDCId', 'integer');
		$this->form_validation->set_rules('Reg0206EFDCId', 'Reg0206EFDCId', 'integer');
		$this->form_validation->set_rules('Reg020EFDCId', 'Reg020EFDCId', 'integer');
		
    parent::update($Id);
  }

  public function delete($Id){
    parent::delete($Id);
  }
}