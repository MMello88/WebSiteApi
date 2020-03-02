<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Regs0140efdc extends MY_Controller {

  public function  __construct() {
    parent::__construct();
    $this->table = 'regs0140efdc';
    $this->nameId = 'Id';
  }

  public function get($Id = '', $date = ''){
    parent::get($Id, $date);
  }
  
  public function setDefaultValue(){
    $_POST['Reg'] = '0140';
  }

  public function create(){
    $this->form_validation->set_rules('Reg', 'Reg', 'required');
		$this->form_validation->set_rules('Nome', 'Nome', 'required');
		$this->form_validation->set_rules('CNPJ', 'CNPJ', 'required');
		$this->form_validation->set_rules('UF', 'UF', 'required');
		$this->form_validation->set_rules('MunicipioId', 'MunicipioId', 'required');
		$this->form_validation->set_rules('DtIni', 'DtIni', 'required');
		$this->form_validation->set_rules('DtFin', 'DtFin', 'required');
		
    parent::create();
  }
  
  public function update($Id){
    $this->form_validation->set_rules('Reg', 'Reg', 'required');
		$this->form_validation->set_rules('Nome', 'Nome', 'required');
		$this->form_validation->set_rules('CNPJ', 'CNPJ', 'required');
		$this->form_validation->set_rules('UF', 'UF', 'required');
		$this->form_validation->set_rules('MunicipioId', 'MunicipioId', 'required');
		$this->form_validation->set_rules('DtIni', 'DtIni', 'required');
		$this->form_validation->set_rules('DtFin', 'DtFin', 'required');
		
    parent::update($Id);
  }

  public function delete($Id){
    parent::delete($Id);
  }
}_rules('Id', 'Id', 'required');
		$this->form_validation->set_rules('Reg', 'Reg', 'required');
		$this->form_validation->set_rules('CodEstab', 'CodEstab', 'required');
		$this->form_validation->set_rules('Nome', 'Nome', 'required');
		$this->form_validation->set_rules('CNPJ', 'CNPJ', 'required');
		$this->form_validation->set_rules('UF', 'UF', 'required');
		$this->form_validation->set_rules('IE', 'IE', 'required');
		$this->form_validation->set_rules('MunicipioId', 'MunicipioId', 'required');
		$this->form_validation->set_rules('IM', 'IM', 'required');
		$this->form_validation->set_rules('Suframa', 'Suframa', 'required');
		$this->form_validation->set_rules('DtIni', 'DtIni', 'required');
		$this->form_validation->set_rules('DtFin', 'DtFin', 'required');
		$this->form_validation->set_rules('PessoaJuridicaId', 'PessoaJuridicaId', 'required');
		$this->form_validation->set_rules('UserId', 'UserId', 'required');
		$this->form_validation->set_rules('Reg0145EFDCId', 'Reg0145EFDCId', 'required');
		
    parent::update($Id);
  }

  public function delete($Id){
    parent::delete($Id);
  }
}