<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Regs0110efdc extends MY_Controller {

  public function  __construct() {
    parent::__construct();
    $this->table = 'regs0110efdc';
    $this->nameId = '0110_Id';
    $this->usersId = 'UsersId';
    $this->joins = [
			['table' => 'pessoasjuridica', 'condition' => 'pessoasjuridica.pj_Id = regs0110efdc.PessoaJuridicaId', 'type' => 'left'],
			['table' => 'regs0111efdc', 'condition' => 'regs0111efdc.0111_Id = regs0110efdc.Reg0111EFDCId', 'type' => 'left'],
    ];
  }

  public function get($Id = '', $date = ''){
    parent::get($Id, $date);
  }

  public function setDefaultValue(){
    
  }

  public function create(){
    $this->form_validation->set_rules('0110_Reg', '0110_Reg', 'required|max_length[4]');
		$this->form_validation->set_rules('0110_CodIncTrib', '0110_CodIncTrib', 'required|in_list[1 – Escrituração de operações com incidência exclusivamente no regime não-cumulativo,2 – Escrituração de operações com incidência exclusivamente no regime cumulativo,3 – Escrituração de operações com incidência nos regimes não-cumulativo e cumulativo]');
		$this->form_validation->set_rules('0110_IndAproCred', '0110_IndAproCred', 'required|in_list[1 – Método de Apropriação Direta,2 – Método de Rateio Proporcional (Receita Bruta]');
		$this->form_validation->set_rules('0110_CodTipoCont', '0110_CodTipoCont', 'required|in_list[1 – Apuração da Contribuição Exclusivamente a Alíquota Básica,2 – Apuração da Contribuição a Alíquotas Específicas]');
		$this->form_validation->set_rules('0110_IndRegCum', '0110_IndRegCum', 'required|in_list[1 – Regime de Caixa – Escrituração consolidada,2 – Regime de Competência - Escrituração consolidada]');
		$this->form_validation->set_rules('0110_DtIni', '0110_DtIni', 'required|valid_date');
		$this->form_validation->set_rules('0110_DtFin', '0110_DtFin', 'valid_date');
		$this->form_validation->set_rules('PessoaJuridicaId', 'PessoaJuridicaId', 'integer');
		$this->form_validation->set_rules('UsersId', 'UsersId', 'integer');
		$this->form_validation->set_rules('Reg0111EFDCId', 'Reg0111EFDCId', 'integer');
		
    parent::create();
  }

  public function update($Id){
    $this->form_validation->set_rules('0110_Reg', '0110_Reg', 'required|max_length[4]');
		$this->form_validation->set_rules('0110_CodIncTrib', '0110_CodIncTrib', 'required|in_list[1 – Escrituração de operações com incidência exclusivamente no regime não-cumulativo,2 – Escrituração de operações com incidência exclusivamente no regime cumulativo,3 – Escrituração de operações com incidência nos regimes não-cumulativo e cumulativo]');
		$this->form_validation->set_rules('0110_IndAproCred', '0110_IndAproCred', 'required|in_list[1 – Método de Apropriação Direta,2 – Método de Rateio Proporcional (Receita Bruta]');
		$this->form_validation->set_rules('0110_CodTipoCont', '0110_CodTipoCont', 'required|in_list[1 – Apuração da Contribuição Exclusivamente a Alíquota Básica,2 – Apuração da Contribuição a Alíquotas Específicas]');
		$this->form_validation->set_rules('0110_IndRegCum', '0110_IndRegCum', 'required|in_list[1 – Regime de Caixa – Escrituração consolidada,2 – Regime de Competência - Escrituração consolidada]');
		$this->form_validation->set_rules('0110_DtIni', '0110_DtIni', 'required|valid_date');
		$this->form_validation->set_rules('0110_DtFin', '0110_DtFin', 'valid_date');
		$this->form_validation->set_rules('PessoaJuridicaId', 'PessoaJuridicaId', 'integer');
		$this->form_validation->set_rules('UsersId', 'UsersId', 'integer');
		$this->form_validation->set_rules('Reg0111EFDCId', 'Reg0111EFDCId', 'integer');
		
    parent::update($Id);
  }

  public function delete($Id){
    parent::delete($Id);
  }
}
