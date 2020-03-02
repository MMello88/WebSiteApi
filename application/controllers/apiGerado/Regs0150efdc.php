<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Regs0150efdc extends MY_Controller {

  public function  __construct() {
    parent::__construct();
    $this->table = 'regs0150efdc';
    $this->nameId = 'Id';
  }

  public function get($Id = '', $date = ''){
    parent::get($Id, $date);
  }
  
  public function setDefaultValue(){
    $_POST['Reg'] = '0150';
  }

  public function create(){
    $this->form_validation->set_rules('Reg', 'Reg', 'required');
		$this->form_validation->set_rules('CodPart', 'CodPart', 'required');
		$this->form_validation->set_rules('Nome', 'Nome', 'required');
		$this->form_validation->set_rules('CNPJ', 'CNPJ', 'required');
		$this->form_validation->set_rules('CPF', 'CPF', 'required');
		$this->form_validation->set_rules('MunicipioId', 'MunicipioId', 'required');
		$this->form_validation->set_rules('DtIni', 'DtIni', 'required');
		$this->form_validation->set_rules('DtFin', 'DtFin', 'required');
		
    parent::create();
  }
  
  public function update($Id){
    $this->form_validation->set_rules('Reg', 'Reg', 'required');
		$this->form_validation->set_rules('CodPart', 'CodPart', 'required');
		$this->form_validation->set_rules('Nome', 'Nome', 'required');
		$this->form_validation->set_rules('CNPJ', 'CNPJ', 'required');
		$this->form_validation->set_rules('CPF', 'CPF', 'required');
		$this->form_validation->set_rules('MunicipioId', 'MunicipioId', 'required');
		$this->form_validation->set_rules('DtIni', 'DtIni', 'required');
		$this->form_validation->set_rules('DtFin', 'DtFin', 'required');
		
    parent::update($Id);
  }

  public function delete($Id){
    parent::delete($Id);
  }
}te($Id){
    $this->form_validation->set_rules('Id', 'Id', 'required');
		$this->form_validation->set_rules('Reg', 'Reg', 'required');
		$this->form_validation->set_rules('CodPart', 'CodPart', 'required');
		$this->form_validation->set_rules('Nome', 'Nome', 'required');
		$this->form_validation->set_rules('PaisId', 'PaisId', 'required');
		$this->form_validation->set_rules('CNPJ', 'CNPJ', 'required');
		$this->form_validation->set_rules('CPF', 'CPF', 'required');
		$this->form_validation->set_rules('IE', 'IE', 'required');
		$this->form_validation->set_rules('MunicipioId', 'MunicipioId', 'required');
		$this->form_validation->set_rules('Suframa', 'Suframa', 'required');
		$this->form_validation->set_rules('End', 'End', 'required');
		$this->form_validation->set_rules('Num', 'Num', 'required');
		$this->form_validation->set_rules('Compl', 'Compl', 'required');
		$this->form_validation->set_rules('Bairro', 'Bairro', 'required');
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