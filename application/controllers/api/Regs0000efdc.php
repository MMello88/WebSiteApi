<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Regs0000efdc extends MY_Controller {

  public function  __construct() {
    parent::__construct();
    $this->table = 'regs0000efdc';
    $this->nameId = 'Id';
  }

  public function get($Id = '', $date = ''){
    parent::get($Id, $date);
  }
  
  public function setDefaultValue(){
    $_POST['Reg'] = !isset($_POST['Reg']) ? '0000' : $_POST['Reg'];
		
  }

  public function create(){
    $this->form_validation->set_rules('Reg', 'Reg', 'required|max_length[4]');
		$this->form_validation->set_rules('Ref311Id', 'Ref311Id', 'required|integer');
		$this->form_validation->set_rules('TipoEscrit', 'TipoEscrit', 'required|integer');
		$this->form_validation->set_rules('IndSitEsp', 'IndSitEsp', 'required|integer');
		$this->form_validation->set_rules('NumRecAnterior', 'NumRecAnterior', 'max_length[41]');
		$this->form_validation->set_rules('DtIni', 'DtIni', 'required|valid_datetime');
		$this->form_validation->set_rules('DtFin', 'DtFin', 'required|valid_datetime');
		$this->form_validation->set_rules('IndNatPj', 'IndNatPj', 'required|integer');
		$this->form_validation->set_rules('IndAtiv', 'IndAtiv', 'required|integer');
		$this->form_validation->set_rules('PessoaJuridicaId', 'PessoaJuridicaId', 'integer');
		$this->form_validation->set_rules('UserId', 'UserId', 'integer');
		$this->form_validation->set_rules('Reg0001EFDCId', 'Reg0001EFDCId', 'integer');
		$this->form_validation->set_rules('Regs0110EFDCId', 'Regs0110EFDCId', 'integer');
		
    parent::create();
  }
  
  public function update($Id){
    $this->form_validation->set_rules('Reg', 'Reg', 'required|max_length[4]');
		$this->form_validation->set_rules('Ref311Id', 'Ref311Id', 'required|integer');
		$this->form_validation->set_rules('TipoEscrit', 'TipoEscrit', 'required|integer');
		$this->form_validation->set_rules('IndSitEsp', 'IndSitEsp', 'required|integer');
		$this->form_validation->set_rules('NumRecAnterior', 'NumRecAnterior', 'max_length[41]');
		$this->form_validation->set_rules('DtIni', 'DtIni', 'required|valid_datetime');
		$this->form_validation->set_rules('DtFin', 'DtFin', 'required|valid_datetime');
		$this->form_validation->set_rules('IndNatPj', 'IndNatPj', 'required|integer');
		$this->form_validation->set_rules('IndAtiv', 'IndAtiv', 'required|integer');
		$this->form_validation->set_rules('PessoaJuridicaId', 'PessoaJuridicaId', 'integer');
		$this->form_validation->set_rules('UserId', 'UserId', 'integer');
		$this->form_validation->set_rules('Reg0001EFDCId', 'Reg0001EFDCId', 'integer');
		$this->form_validation->set_rules('Regs0110EFDCId', 'Regs0110EFDCId', 'integer');
		
    parent::update($Id);
  }

  public function delete($Id){
    parent::delete($Id);
  }
}