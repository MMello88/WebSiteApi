<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Regs0110efdc extends MY_Controller {

  public function  __construct() {
    parent::__construct();
    $this->table = 'regs0110efdc';
    $this->nameId = 'Id';
  }

  public function get($Id = '', $date = ''){
    parent::get($Id, $date);
  }
  
  public function setDefaultValue(){
    $_POST['Reg'] = !isset($_POST['Reg']) ? '0110' : $_POST['Reg'];
		
  }

  public function create(){
    $this->form_validation->set_rules('Reg', 'Reg', 'required|max_length[4]');
		$this->form_validation->set_rules('CodIncTrib', 'CodIncTrib', 'required|integer');
		$this->form_validation->set_rules('IndAproCred', 'IndAproCred', 'required|integer');
		$this->form_validation->set_rules('CodTipoCont', 'CodTipoCont', 'required|integer');
		$this->form_validation->set_rules('IndRegCum', 'IndRegCum', 'required|integer');
		$this->form_validation->set_rules('DtIni', 'DtIni', 'required|valid_datetime');
		$this->form_validation->set_rules('DtFin', 'DtFin', 'required|valid_datetime');
		$this->form_validation->set_rules('PessoaJuridicaId', 'PessoaJuridicaId', 'integer');
		$this->form_validation->set_rules('UserId', 'UserId', 'integer');
		$this->form_validation->set_rules('Reg0111EFDCId', 'Reg0111EFDCId', 'integer');
		
    parent::create();
  }
  
  public function update($Id){
    $this->form_validation->set_rules('Reg', 'Reg', 'required|max_length[4]');
		$this->form_validation->set_rules('CodIncTrib', 'CodIncTrib', 'required|integer');
		$this->form_validation->set_rules('IndAproCred', 'IndAproCred', 'required|integer');
		$this->form_validation->set_rules('CodTipoCont', 'CodTipoCont', 'required|integer');
		$this->form_validation->set_rules('IndRegCum', 'IndRegCum', 'required|integer');
		$this->form_validation->set_rules('DtIni', 'DtIni', 'required|valid_datetime');
		$this->form_validation->set_rules('DtFin', 'DtFin', 'required|valid_datetime');
		$this->form_validation->set_rules('PessoaJuridicaId', 'PessoaJuridicaId', 'integer');
		$this->form_validation->set_rules('UserId', 'UserId', 'integer');
		$this->form_validation->set_rules('Reg0111EFDCId', 'Reg0111EFDCId', 'integer');
		
    parent::update($Id);
  }

  public function delete($Id){
    parent::delete($Id);
  }
}