<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Regs0600efdc extends MY_Controller {

  public function  __construct() {
    parent::__construct();
    $this->table = 'regs0600efdc';
    $this->nameId = 'Id';
  }

  public function get($Id = '', $date = ''){
    parent::get($Id, $date);
  }
  
  public function setDefaultValue(){
    $_POST['Reg'] = '0600';
  }

  public function create(){
    $this->form_validation->set_rules('Reg', 'Reg', 'required');
		$this->form_validation->set_rules('DtAlteracao', 'DtAlteracao', 'required');
		$this->form_validation->set_rules('CodCCusto', 'CodCCusto', 'required');
		$this->form_validation->set_rules('NomeCCusto', 'NomeCCusto', 'required');
		$this->form_validation->set_rules('DtIni', 'DtIni', 'required');
		$this->form_validation->set_rules('DtFin', 'DtFin', 'required');
		
    parent::create();
  }
  
  public function update($Id){
    $this->form_validation->set_rules('Reg', 'Reg', 'required');
		$this->form_validation->set_rules('DtAlteracao', 'DtAlteracao', 'required');
		$this->form_validation->set_rules('CodCCusto', 'CodCCusto', 'required');
		$this->form_validation->set_rules('NomeCCusto', 'NomeCCusto', 'required');
		$this->form_validation->set_rules('DtIni', 'DtIni', 'required');
		$this->form_validation->set_rules('DtFin', 'DtFin', 'required');
		
    parent::update($Id);
  }

  public function delete($Id){
    parent::delete($Id);
  }
}', 'required');
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