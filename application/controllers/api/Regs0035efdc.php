<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Regs0035efdc extends MY_Controller {

  public function  __construct() {
    parent::__construct();
    $this->table = 'regs0035efdc';
    $this->nameId = 'Id';
  }

  public function get($Id = '', $date = ''){
    parent::get($Id, $date);
  }
  
  public function setDefaultValue(){
    
  }

  public function create(){
    $this->form_validation->set_rules('Reg', 'Reg', '');
		$this->form_validation->set_rules('CodSCP', 'CodSCP', 'required|integer');
		$this->form_validation->set_rules('DescSCP', 'DescSCP', '');
		$this->form_validation->set_rules('InfoCompl', 'InfoCompl', '');
		$this->form_validation->set_rules('DtIni', 'DtIni', 'required|valid_datetime');
		$this->form_validation->set_rules('DtFin', 'DtFin', 'required|valid_datetime');
		$this->form_validation->set_rules('PessoaJuridicaId', 'PessoaJuridicaId', 'integer');
		$this->form_validation->set_rules('UserId', 'UserId', 'integer');
		
    parent::create();
  }
  
  public function update($Id){
    $this->form_validation->set_rules('Reg', 'Reg', '');
		$this->form_validation->set_rules('CodSCP', 'CodSCP', 'required|integer');
		$this->form_validation->set_rules('DescSCP', 'DescSCP', '');
		$this->form_validation->set_rules('InfoCompl', 'InfoCompl', '');
		$this->form_validation->set_rules('DtIni', 'DtIni', 'required|valid_datetime');
		$this->form_validation->set_rules('DtFin', 'DtFin', 'required|valid_datetime');
		$this->form_validation->set_rules('PessoaJuridicaId', 'PessoaJuridicaId', 'integer');
		$this->form_validation->set_rules('UserId', 'UserId', 'integer');
		
    parent::update($Id);
  }

  public function delete($Id){
    parent::delete($Id);
  }
}arent::update($Id);
  }

  public function delete($Id){
    parent::delete($Id);
  }
}