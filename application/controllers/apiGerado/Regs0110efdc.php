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
    $_POST['Reg'] = '0110';
  }

  public function create(){
    $this->form_validation->set_rules('Reg', 'Reg', 'required');
		$this->form_validation->set_rules('CodIncTrib', 'CodIncTrib', 'required');
		$this->form_validation->set_rules('IndAproCred', 'IndAproCred', 'required');
		$this->form_validation->set_rules('CodTipoCont', 'CodTipoCont', 'required');
		$this->form_validation->set_rules('IndRegCum', 'IndRegCum', 'required');
		$this->form_validation->set_rules('DtIni', 'DtIni', 'required');
		$this->form_validation->set_rules('DtFin', 'DtFin', 'required');
		
    parent::create();
  }
  
  public function update($Id){
    $this->form_validation->set_rules('Reg', 'Reg', 'required');
		$this->form_validation->set_rules('CodIncTrib', 'CodIncTrib', 'required');
		$this->form_validation->set_rules('IndAproCred', 'IndAproCred', 'required');
		$this->form_validation->set_rules('CodTipoCont', 'CodTipoCont', 'required');
		$this->form_validation->set_rules('IndRegCum', 'IndRegCum', 'required');
		$this->form_validation->set_rules('DtIni', 'DtIni', 'required');
		$this->form_validation->set_rules('DtFin', 'DtFin', 'required');
		
    parent::update($Id);
  }

  public function delete($Id){
    parent::delete($Id);
  }
}TipoCont', 'required');
		$this->form_validation->set_rules('IndRegCum', 'IndRegCum', 'required');
		$this->form_validation->set_rules('DtIni', 'DtIni', 'required');
		$this->form_validation->set_rules('DtFin', 'DtFin', 'required');
		$this->form_validation->set_rules('PessoaJuridicaId', 'PessoaJuridicaId', 'required');
		$this->form_validation->set_rules('UserId', 'UserId', 'required');
		$this->form_validation->set_rules('Reg0111EFDCId', 'Reg0111EFDCId', 'required');
		
    parent::update($Id);
  }

  public function delete($Id){
    parent::delete($Id);
  }
}