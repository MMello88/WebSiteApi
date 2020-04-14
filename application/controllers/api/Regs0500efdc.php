<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Regs0500efdc extends MY_Controller {

  public function  __construct() {
    parent::__construct();
    $this->table = 'regs0500efdc';
    $this->nameId = '0500_Id';
    $this->usersId = '0500_UsersId';
    $this->joins = [
			['table' => 'pessoasjuridica', 'condition' => 'pessoasjuridica.pj_Id = regs0500efdc.0500_PessoaJuridicaId', 'type' => 'left'],
    ];
  }

  public function get($Id = '', $date = ''){
    parent::get($Id, $date);
  }

  public function setDefaultValue(){
    
  }

  public function create(){
    $this->form_validation->set_rules('0500_Reg', '0500_Reg', 'required|max_length[4]');
		$this->form_validation->set_rules('0500_DtAlteracao', '0500_DtAlteracao', 'required|valid_datetime');
		$this->form_validation->set_rules('0500_CodNatCC', '0500_CodNatCC', 'required|in_list[01 - Contas de ativo,02 - Contas de passivo,03 - Patrimônio líquido,04 - Contas de resultado,05 - Contas de compensação,09 - Outras]');
		$this->form_validation->set_rules('0500_IndCTA', '0500_IndCTA', 'required|max_length[1]');
		$this->form_validation->set_rules('0500_Nivel', '0500_Nivel', 'required|integer');
		$this->form_validation->set_rules('0500_CodCTA', '0500_CodCTA', 'required|max_length[255]');
		$this->form_validation->set_rules('0500_NomeCTA', '0500_NomeCTA', 'required|max_length[60]');
		$this->form_validation->set_rules('0500_CodCTARef', '0500_CodCTARef', 'max_length[60]');
		$this->form_validation->set_rules('0500_CNPJEstab', '0500_CNPJEstab', 'required|integer');
		$this->form_validation->set_rules('0500_DtIni', '0500_DtIni', 'required|valid_date');
		$this->form_validation->set_rules('0500_DtFin', '0500_DtFin', 'valid_date');
		$this->form_validation->set_rules('0500_PessoaJuridicaId', '0500_PessoaJuridicaId', 'integer');
		$this->form_validation->set_rules('0500_UsersId', '0500_UsersId', 'integer');
		
    parent::create();
  }

  public function update($Id){
    $this->form_validation->set_rules('0500_Reg', '0500_Reg', 'required|max_length[4]');
		$this->form_validation->set_rules('0500_DtAlteracao', '0500_DtAlteracao', 'required|valid_datetime');
		$this->form_validation->set_rules('0500_CodNatCC', '0500_CodNatCC', 'required|in_list[01 - Contas de ativo,02 - Contas de passivo,03 - Patrimônio líquido,04 - Contas de resultado,05 - Contas de compensação,09 - Outras]');
		$this->form_validation->set_rules('0500_IndCTA', '0500_IndCTA', 'required|max_length[1]');
		$this->form_validation->set_rules('0500_Nivel', '0500_Nivel', 'required|integer');
		$this->form_validation->set_rules('0500_CodCTA', '0500_CodCTA', 'required|max_length[255]');
		$this->form_validation->set_rules('0500_NomeCTA', '0500_NomeCTA', 'required|max_length[60]');
		$this->form_validation->set_rules('0500_CodCTARef', '0500_CodCTARef', 'max_length[60]');
		$this->form_validation->set_rules('0500_CNPJEstab', '0500_CNPJEstab', 'required|integer');
		$this->form_validation->set_rules('0500_DtIni', '0500_DtIni', 'required|valid_date');
		$this->form_validation->set_rules('0500_DtFin', '0500_DtFin', 'valid_date');
		$this->form_validation->set_rules('0500_PessoaJuridicaId', '0500_PessoaJuridicaId', 'integer');
		$this->form_validation->set_rules('0500_UsersId', '0500_UsersId', 'integer');
		
    parent::update($Id);
  }

  public function delete($Id){
    parent::delete($Id);
  }
}
