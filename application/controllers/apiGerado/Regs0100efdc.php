<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Regs0100efdc extends MY_Controller {

  public function  __construct() {
    parent::__construct();
    $this->table = 'regs0100efdc';
    $this->nameId = '0100_Id';
    $this->usersId = 'UsersId';
    $this->joins = [
			['table' => 'municipios', 'condition' => 'municipios.mun_Id = regs0100efdc.MunicipioId', 'type' => 'inner'],
			['table' => 'pessoasjuridica', 'condition' => 'pessoasjuridica.pj_Id = regs0100efdc.PessoaJuridicaId', 'type' => 'left'],
    ];
  }

  public function get($Id = '', $date = ''){
    parent::get($Id, $date);
  }

  public function setDefaultValue(){
    
  }

  public function create(){
    $this->form_validation->set_rules('0100_Reg', '0100_Reg', 'required|max_length[4]');
		$this->form_validation->set_rules('0100_Nome', '0100_Nome', 'required|max_length[100]');
		$this->form_validation->set_rules('0100_CPF', '0100_CPF', 'required|integer');
		$this->form_validation->set_rules('0100_CRC', '0100_CRC', 'required|max_length[15]');
		$this->form_validation->set_rules('0100_CNPJ', '0100_CNPJ', 'required|integer');
		$this->form_validation->set_rules('0100_CEP', '0100_CEP', 'required|integer');
		$this->form_validation->set_rules('0100_End', '0100_End', 'max_length[60]');
		$this->form_validation->set_rules('0100_Num', '0100_Num', 'max_length[5]');
		$this->form_validation->set_rules('0100_Compl', '0100_Compl', 'max_length[60]');
		$this->form_validation->set_rules('0100_Bairro', '0100_Bairro', 'max_length[60]');
		$this->form_validation->set_rules('0100_Fone', '0100_Fone', 'max_length[11]');
		$this->form_validation->set_rules('0100_Fax', '0100_Fax', 'max_length[11]');
		$this->form_validation->set_rules('0100_Email', '0100_Email', 'max_length[255]');
		$this->form_validation->set_rules('MunicipioId', 'MunicipioId', 'required|integer');
		$this->form_validation->set_rules('0100_DtIni', '0100_DtIni', 'required|valid_date');
		$this->form_validation->set_rules('0100_DtFin', '0100_DtFin', 'valid_date');
		$this->form_validation->set_rules('PessoaJuridicaId', 'PessoaJuridicaId', 'integer');
		$this->form_validation->set_rules('UsersId', 'UsersId', 'integer');
		
    parent::create();
  }

  public function update($Id){
    $this->form_validation->set_rules('0100_Reg', '0100_Reg', 'required|max_length[4]');
		$this->form_validation->set_rules('0100_Nome', '0100_Nome', 'required|max_length[100]');
		$this->form_validation->set_rules('0100_CPF', '0100_CPF', 'required|integer');
		$this->form_validation->set_rules('0100_CRC', '0100_CRC', 'required|max_length[15]');
		$this->form_validation->set_rules('0100_CNPJ', '0100_CNPJ', 'required|integer');
		$this->form_validation->set_rules('0100_CEP', '0100_CEP', 'required|integer');
		$this->form_validation->set_rules('0100_End', '0100_End', 'max_length[60]');
		$this->form_validation->set_rules('0100_Num', '0100_Num', 'max_length[5]');
		$this->form_validation->set_rules('0100_Compl', '0100_Compl', 'max_length[60]');
		$this->form_validation->set_rules('0100_Bairro', '0100_Bairro', 'max_length[60]');
		$this->form_validation->set_rules('0100_Fone', '0100_Fone', 'max_length[11]');
		$this->form_validation->set_rules('0100_Fax', '0100_Fax', 'max_length[11]');
		$this->form_validation->set_rules('0100_Email', '0100_Email', 'max_length[255]');
		$this->form_validation->set_rules('MunicipioId', 'MunicipioId', 'required|integer');
		$this->form_validation->set_rules('0100_DtIni', '0100_DtIni', 'required|valid_date');
		$this->form_validation->set_rules('0100_DtFin', '0100_DtFin', 'valid_date');
		$this->form_validation->set_rules('PessoaJuridicaId', 'PessoaJuridicaId', 'integer');
		$this->form_validation->set_rules('UsersId', 'UsersId', 'integer');
		
    parent::update($Id);
  }

  public function delete($Id){
    parent::delete($Id);
  }
}
