<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Regs0450efdc extends MY_Controller {

  public function  __construct() {
    parent::__construct();
    $this->table = 'regs0450efdc';
    $this->nameId = '0450_Id';
    $this->usersId = '0450_UsersId';
    $this->joins = [
			['table' => 'pessoasjuridica', 'condition' => 'pessoasjuridica.pj_Id = regs0450efdc.0450_PessoaJuridicaId', 'type' => 'left'],
    ];
  }

  public function get($Id = '', $date = ''){
    parent::get($Id, $date);
  }

  public function setDefaultValue(){
    
  }

  public function create(){
    $this->form_validation->set_rules('0450_Reg', '0450_Reg', 'required|max_length[4]');
		$this->form_validation->set_rules('0450_CodInf', '0450_CodInf', 'required|max_length[6]');
		$this->form_validation->set_rules('0450_Txt', '0450_Txt', 'required|max_length[255]');
		$this->form_validation->set_rules('0450_DtIni', '0450_DtIni', 'required|valid_date');
		$this->form_validation->set_rules('0450_DtFin', '0450_DtFin', 'valid_date');
		$this->form_validation->set_rules('0450_PessoaJuridicaId', '0450_PessoaJuridicaId', 'integer');
		$this->form_validation->set_rules('0450_UsersId', '0450_UsersId', 'integer');
		
    parent::create();
  }

  public function update($Id){
    $this->form_validation->set_rules('0450_Reg', '0450_Reg', 'required|max_length[4]');
		$this->form_validation->set_rules('0450_CodInf', '0450_CodInf', 'required|max_length[6]');
		$this->form_validation->set_rules('0450_Txt', '0450_Txt', 'required|max_length[255]');
		$this->form_validation->set_rules('0450_DtIni', '0450_DtIni', 'required|valid_date');
		$this->form_validation->set_rules('0450_DtFin', '0450_DtFin', 'valid_date');
		$this->form_validation->set_rules('0450_PessoaJuridicaId', '0450_PessoaJuridicaId', 'integer');
		$this->form_validation->set_rules('0450_UsersId', '0450_UsersId', 'integer');
		
    parent::update($Id);
  }

  public function delete($Id){
    parent::delete($Id);
  }
}
