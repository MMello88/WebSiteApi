<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Regs0400efdc extends MY_Controller {

  public function  __construct() {
    parent::__construct();
    $this->table = 'regs0400efdc';
    $this->nameId = '0400_Id';
    $this->usersId = 'UsersId';
    $this->joins = [
			['table' => 'pessoasjuridica', 'condition' => 'pessoasjuridica.pj_Id = regs0400efdc.PessoaJuridicaId', 'type' => 'left'],
    ];
  }

  public function get($Id = '', $date = ''){
    parent::get($Id, $date);
  }

  public function setDefaultValue(){
    
  }

  public function create(){
    $this->form_validation->set_rules('0400_Reg', '0400_Reg', 'required|max_length[4]');
		$this->form_validation->set_rules('0400_CodNat', '0400_CodNat', 'required|max_length[10]');
		$this->form_validation->set_rules('0400_DescricaoNat', '0400_DescricaoNat', 'required|max_length[255]');
		$this->form_validation->set_rules('0400_DtIni', '0400_DtIni', 'required|valid_date');
		$this->form_validation->set_rules('0400_DtFin', '0400_DtFin', 'valid_date');
		$this->form_validation->set_rules('PessoaJuridicaId', 'PessoaJuridicaId', 'integer');
		$this->form_validation->set_rules('UsersId', 'UsersId', 'integer');
		
    parent::create();
  }

  public function update($Id){
    $this->form_validation->set_rules('0400_Reg', '0400_Reg', 'required|max_length[4]');
		$this->form_validation->set_rules('0400_CodNat', '0400_CodNat', 'required|max_length[10]');
		$this->form_validation->set_rules('0400_DescricaoNat', '0400_DescricaoNat', 'required|max_length[255]');
		$this->form_validation->set_rules('0400_DtIni', '0400_DtIni', 'required|valid_date');
		$this->form_validation->set_rules('0400_DtFin', '0400_DtFin', 'valid_date');
		$this->form_validation->set_rules('PessoaJuridicaId', 'PessoaJuridicaId', 'integer');
		$this->form_validation->set_rules('UsersId', 'UsersId', 'integer');
		
    parent::update($Id);
  }

  public function delete($Id){
    parent::delete($Id);
  }
}
