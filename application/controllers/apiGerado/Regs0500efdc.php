<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Regs0500efdc extends MY_Controller {

  public function  __construct() {
    parent::__construct();
    $this->table = 'regs0500efdc';
    $this->nameId = 'Id';
  }

  public function get($Id = '', $date = ''){
    parent::get($Id, $date);
  }
  
  public function setDefaultValue(){
    $_POST['Reg'] = '0500';
  }

  public function create(){
    $this->form_validation->set_rules('Reg', 'Reg', 'required');
		$this->form_validation->set_rules('DtAlteracao', 'DtAlteracao', 'required');
		$this->form_validation->set_rules('CodNatCC', 'CodNatCC', 'required');
		$this->form_validation->set_rules('IndCTA', 'IndCTA', 'required');
		$this->form_validation->set_rules('Nivel', 'Nivel', 'required');
		$this->form_validation->set_rules('CodCTA', 'CodCTA', 'required');
		$this->form_validation->set_rules('NomeCTA', 'NomeCTA', 'required');
		$this->form_validation->set_rules('CNPJEstab', 'CNPJEstab', 'required');
		$this->form_validation->set_rules('DtIni', 'DtIni', 'required');
		$this->form_validation->set_rules('DtFin', 'DtFin', 'required');
		
    parent::create();
  }
  
  public function update($Id){
    $this->form_validation->set_rules('Reg', 'Reg', 'required');
		$this->form_validation->set_rules('DtAlteracao', 'DtAlteracao', 'required');
		$this->form_validation->set_rules('CodNatCC', 'CodNatCC', 'required');
		$this->form_validation->set_rules('IndCTA', 'IndCTA', 'required');
		$this->form_validation->set_rules('Nivel', 'Nivel', 'required');
		$this->form_validation->set_rules('CodCTA', 'CodCTA', 'required');
		$this->form_validation->set_rules('NomeCTA', 'NomeCTA', 'required');
		$this->form_validation->set_rules('CNPJEstab', 'CNPJEstab', 'required');
		$this->form_validation->set_rules('DtIni', 'DtIni', 'required');
		$this->form_validation->set_rules('DtFin', 'DtFin', 'required');
		
    parent::update($Id);
  }

  public function delete($Id){
    parent::delete($Id);
  }
}', 'required');
		$this->form_validation->set_rules('CodCTARef', 'CodCTARef', 'required');
		$this->form_validation->set_rules('CNPJEstab', 'CNPJEstab', 'required');
		$this->form_validation->set_rules('DtIni', 'DtIni', 'required');
		$this->form_validation->set_rules('DtFin', 'DtFin', 'required');
		$this->form_validation->set_rules('PessoaJuridicaId', 'PessoaJuridicaId', 'required');
		$this->form_validation->set_rules('UserId', 'UserId', 'required');
		
    parent::update($Id);
  }

  public function delete($Id){
    parent::delete($Id);
  }
}