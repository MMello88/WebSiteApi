<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Regs0150efdc extends MY_Controller {

  public function  __construct() {
    parent::__construct();
    $this->table = 'regs0150efdc';
    $this->nameId = '0150_Id';
    $this->usersId = '0150_UsersId';
    $this->joins = [
			['table' => 'paises', 'condition' => 'paises.pss_Id = regs0150efdc.0150_PaisId', 'type' => 'left'],
			['table' => 'municipios', 'condition' => 'municipios.mun_Id = regs0150efdc.0150_MunicipioId', 'type' => 'inner'],
			['table' => 'pessoasjuridica', 'condition' => 'pessoasjuridica.pj_Id = regs0150efdc.0150_PessoaJuridicaId', 'type' => 'left'],
    ];
  }

  public function get($Id = '', $date = ''){
    parent::get($Id, $date);
  }

  public function setDefaultValue(){
    
  }

  public function create(){
    $this->form_validation->set_rules('0150_Reg', '0150_Reg', 'required|max_length[4]');
		$this->form_validation->set_rules('0150_CodPart', '0150_CodPart', 'required|max_length[60]');
		$this->form_validation->set_rules('0150_Nome', '0150_Nome', 'required|max_length[100]');
		$this->form_validation->set_rules('0150_PaisId', '0150_PaisId', 'integer');
		$this->form_validation->set_rules('0150_CNPJ', '0150_CNPJ', 'required|integer');
		$this->form_validation->set_rules('0150_CPF', '0150_CPF', 'required|integer');
		$this->form_validation->set_rules('0150_IE', '0150_IE', 'max_length[14]');
		$this->form_validation->set_rules('0150_MunicipioId', '0150_MunicipioId', 'required|integer');
		$this->form_validation->set_rules('0150_Suframa', '0150_Suframa', 'max_length[9]');
		$this->form_validation->set_rules('0150_End', '0150_End', 'max_length[60]');
		$this->form_validation->set_rules('0150_Num', '0150_Num', 'max_length[20]');
		$this->form_validation->set_rules('0150_Compl', '0150_Compl', 'max_length[60]');
		$this->form_validation->set_rules('0150_Bairro', '0150_Bairro', 'max_length[60]');
		$this->form_validation->set_rules('0150_DtIni', '0150_DtIni', 'required|valid_date');
		$this->form_validation->set_rules('0150_DtFin', '0150_DtFin', 'valid_date');
		$this->form_validation->set_rules('0150_PessoaJuridicaId', '0150_PessoaJuridicaId', 'integer');
		$this->form_validation->set_rules('0150_UsersId', '0150_UsersId', 'integer');
		
    parent::create();
  }

  public function update($Id){
    $this->form_validation->set_rules('0150_Reg', '0150_Reg', 'required|max_length[4]');
		$this->form_validation->set_rules('0150_CodPart', '0150_CodPart', 'required|max_length[60]');
		$this->form_validation->set_rules('0150_Nome', '0150_Nome', 'required|max_length[100]');
		$this->form_validation->set_rules('0150_PaisId', '0150_PaisId', 'integer');
		$this->form_validation->set_rules('0150_CNPJ', '0150_CNPJ', 'required|integer');
		$this->form_validation->set_rules('0150_CPF', '0150_CPF', 'required|integer');
		$this->form_validation->set_rules('0150_IE', '0150_IE', 'max_length[14]');
		$this->form_validation->set_rules('0150_MunicipioId', '0150_MunicipioId', 'required|integer');
		$this->form_validation->set_rules('0150_Suframa', '0150_Suframa', 'max_length[9]');
		$this->form_validation->set_rules('0150_End', '0150_End', 'max_length[60]');
		$this->form_validation->set_rules('0150_Num', '0150_Num', 'max_length[20]');
		$this->form_validation->set_rules('0150_Compl', '0150_Compl', 'max_length[60]');
		$this->form_validation->set_rules('0150_Bairro', '0150_Bairro', 'max_length[60]');
		$this->form_validation->set_rules('0150_DtIni', '0150_DtIni', 'required|valid_date');
		$this->form_validation->set_rules('0150_DtFin', '0150_DtFin', 'valid_date');
		$this->form_validation->set_rules('0150_PessoaJuridicaId', '0150_PessoaJuridicaId', 'integer');
		$this->form_validation->set_rules('0150_UsersId', '0150_UsersId', 'integer');
		
    parent::update($Id);
  }

  public function delete($Id){
    parent::delete($Id);
  }
}
