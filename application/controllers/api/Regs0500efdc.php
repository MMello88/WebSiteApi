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
    $_POST['Reg'] = !isset($_POST['Reg']) ? '0500' : $_POST['Reg'];
		
  }

  public function create(){
    $this->form_validation->set_rules('Reg', 'Reg', 'required|max_length[4]');
		$this->form_validation->set_rules('DtAlteracao', 'DtAlteracao', 'required|valid_datetime');
		$this->form_validation->set_rules('CodNatCC', 'CodNatCC', 'required|integer');
		$this->form_validation->set_rules('IndCTA', 'IndCTA', 'required|max_length[1]');
		$this->form_validation->set_rules('Nivel', 'Nivel', 'required|integer');
		$this->form_validation->set_rules('CodCTA', 'CodCTA', 'required|max_length[255]');
		$this->form_validation->set_rules('NomeCTA', 'NomeCTA', 'required|max_length[60]');
		$this->form_validation->set_rules('CodCTARef', 'CodCTARef', 'max_length[60]');
		$this->form_validation->set_rules('CNPJEstab', 'CNPJEstab', 'required|integer');
		$this->form_validation->set_rules('DtIni', 'DtIni', 'required|valid_datetime');
		$this->form_validation->set_rules('DtFin', 'DtFin', 'required|valid_datetime');
		$this->form_validation->set_rules('PessoaJuridicaId', 'PessoaJuridicaId', 'integer');
		$this->form_validation->set_rules('UserId', 'UserId', 'integer');
		
    parent::create();
  }
  
  public function update($Id){
    $this->form_validation->set_rules('Reg', 'Reg', 'required|max_length[4]');
		$this->form_validation->set_rules('DtAlteracao', 'DtAlteracao', 'required|valid_datetime');
		$this->form_validation->set_rules('CodNatCC', 'CodNatCC', 'required|integer');
		$this->form_validation->set_rules('IndCTA', 'IndCTA', 'required|max_length[1]');
		$this->form_validation->set_rules('Nivel', 'Nivel', 'required|integer');
		$this->form_validation->set_rules('CodCTA', 'CodCTA', 'required|max_length[255]');
		$this->form_validation->set_rules('NomeCTA', 'NomeCTA', 'required|max_length[60]');
		$this->form_validation->set_rules('CodCTARef', 'CodCTARef', 'max_length[60]');
		$this->form_validation->set_rules('CNPJEstab', 'CNPJEstab', 'required|integer');
		$this->form_validation->set_rules('DtIni', 'DtIni', 'required|valid_datetime');
		$this->form_validation->set_rules('DtFin', 'DtFin', 'required|valid_datetime');
		$this->form_validation->set_rules('PessoaJuridicaId', 'PessoaJuridicaId', 'integer');
		$this->form_validation->set_rules('UserId', 'UserId', 'integer');
		
    parent::update($Id);
  }

  public function delete($Id){
    parent::delete($Id);
  }
}