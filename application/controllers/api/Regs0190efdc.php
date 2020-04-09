<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Regs0190efdc extends MY_Controller {

  public function  __construct() {
    parent::__construct();
    $this->table = 'regs0190efdc';
    $this->nameId = '0190_Id';
    $this->usersId = 'UsersId';
    $this->joins = [
			['table' => 'pessoasjuridica', 'condition' => 'pessoasjuridica.pj_Id = regs0190efdc.PessoaJuridicaId', 'type' => 'left'],
    ];
  }

  public function get($Id = '', $date = ''){
    parent::get($Id, $date);
  }

  public function setDefaultValue(){
    
  }

  public function create(){
    $this->form_validation->set_rules('0190_Reg', '0190_Reg', 'required|max_length[4]');
		$this->form_validation->set_rules('0190_Unidade', '0190_Unidade', 'required|max_length[6]');
		$this->form_validation->set_rules('0190_Descrição', '0190_Descrição', 'required|max_length[255]');
		$this->form_validation->set_rules('0190_DtIni', '0190_DtIni', 'required|valid_date');
		$this->form_validation->set_rules('0190_DtFin', '0190_DtFin', 'valid_date');
		$this->form_validation->set_rules('PessoaJuridicaId', 'PessoaJuridicaId', 'integer');
		$this->form_validation->set_rules('UsersId', 'UsersId', 'integer');
		
    parent::create();
  }

  public function update($Id){
    $this->form_validation->set_rules('0190_Reg', '0190_Reg', 'required|max_length[4]');
		$this->form_validation->set_rules('0190_Unidade', '0190_Unidade', 'required|max_length[6]');
		$this->form_validation->set_rules('0190_Descrição', '0190_Descrição', 'required|max_length[255]');
		$this->form_validation->set_rules('0190_DtIni', '0190_DtIni', 'required|valid_date');
		$this->form_validation->set_rules('0190_DtFin', '0190_DtFin', 'valid_date');
		$this->form_validation->set_rules('PessoaJuridicaId', 'PessoaJuridicaId', 'integer');
		$this->form_validation->set_rules('UsersId', 'UsersId', 'integer');
		
    parent::update($Id);
  }

  public function delete($Id){
    parent::delete($Id);
  }
}
