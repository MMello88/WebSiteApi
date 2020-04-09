<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Regs0140efdc extends MY_Controller {

  public function  __construct() {
    parent::__construct();
    $this->table = 'regs0140efdc';
    $this->nameId = '0140_Id';
    $this->usersId = 'UsersId';
    $this->joins = [
			['table' => 'municipios', 'condition' => 'municipios.mun_Id = regs0140efdc.MunicipioId', 'type' => 'inner'],
			['table' => 'pessoasjuridica', 'condition' => 'pessoasjuridica.pj_Id = regs0140efdc.PessoaJuridicaId', 'type' => 'left'],
			['table' => 'regs0145efdc', 'condition' => 'regs0145efdc.0145_Id = regs0140efdc.Reg0145EFDCId', 'type' => 'left'],
    ];
  }

  public function get($Id = '', $date = ''){
    parent::get($Id, $date);
  }

  public function setDefaultValue(){
    
  }

  public function create(){
    $this->form_validation->set_rules('0140_Reg', '0140_Reg', 'required|max_length[4]');
		$this->form_validation->set_rules('0140_CodEstab', '0140_CodEstab', 'max_length[60]');
		$this->form_validation->set_rules('0140_Nome', '0140_Nome', 'required|max_length[100]');
		$this->form_validation->set_rules('0140_CNPJ', '0140_CNPJ', 'required|integer');
		$this->form_validation->set_rules('0140_UF', '0140_UF', 'required|max_length[2]');
		$this->form_validation->set_rules('0140_IE', '0140_IE', 'max_length[14]');
		$this->form_validation->set_rules('MunicipioId', 'MunicipioId', 'required|integer');
		$this->form_validation->set_rules('0140_IM', '0140_IM', 'max_length[255]');
		$this->form_validation->set_rules('0140_Suframa', '0140_Suframa', 'max_length[9]');
		$this->form_validation->set_rules('0140_DtIni', '0140_DtIni', 'required|valid_date');
		$this->form_validation->set_rules('0140_DtFin', '0140_DtFin', 'valid_date');
		$this->form_validation->set_rules('PessoaJuridicaId', 'PessoaJuridicaId', 'integer');
		$this->form_validation->set_rules('UsersId', 'UsersId', 'integer');
		$this->form_validation->set_rules('Reg0145EFDCId', 'Reg0145EFDCId', 'integer');
		
    parent::create();
  }

  public function update($Id){
    $this->form_validation->set_rules('0140_Reg', '0140_Reg', 'required|max_length[4]');
		$this->form_validation->set_rules('0140_CodEstab', '0140_CodEstab', 'max_length[60]');
		$this->form_validation->set_rules('0140_Nome', '0140_Nome', 'required|max_length[100]');
		$this->form_validation->set_rules('0140_CNPJ', '0140_CNPJ', 'required|integer');
		$this->form_validation->set_rules('0140_UF', '0140_UF', 'required|max_length[2]');
		$this->form_validation->set_rules('0140_IE', '0140_IE', 'max_length[14]');
		$this->form_validation->set_rules('MunicipioId', 'MunicipioId', 'required|integer');
		$this->form_validation->set_rules('0140_IM', '0140_IM', 'max_length[255]');
		$this->form_validation->set_rules('0140_Suframa', '0140_Suframa', 'max_length[9]');
		$this->form_validation->set_rules('0140_DtIni', '0140_DtIni', 'required|valid_date');
		$this->form_validation->set_rules('0140_DtFin', '0140_DtFin', 'valid_date');
		$this->form_validation->set_rules('PessoaJuridicaId', 'PessoaJuridicaId', 'integer');
		$this->form_validation->set_rules('UsersId', 'UsersId', 'integer');
		$this->form_validation->set_rules('Reg0145EFDCId', 'Reg0145EFDCId', 'integer');
		
    parent::update($Id);
  }

  public function delete($Id){
    parent::delete($Id);
  }
}
