<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Regs0110efdc extends MY_Controller {

  public function  __construct() {
    parent::__construct();
    $this->table = 'regs0110efdc';
    $this->nameId = 'Id';
  }

  public function get($Id = '', $date = ''){
    parent::get($Id, $date);
  }
  
  public function setDefaultValue(){
    
  }

  public function create(){
    $this->form_validation->set_rules('Reg', 'Reg', 'required|max_length[4]');
		$this->form_validation->set_rules('CodIncTrib', 'CodIncTrib', 'required|in_list[1 – Escrituração de operações com incidência exclusivamente no regime não-cumulativo,2 – Escrituração de operações com incidência exclusivamente no regime cumulativo,3 – Escrituração de operações com incidência nos regimes não-cumulativo e cumulativo]');
		$this->form_validation->set_rules('IndAproCred', 'IndAproCred', 'required|in_list[1 – Método de Apropriação Direta,2 – Método de Rateio Proporcional (Receita Bruta]');
		$this->form_validation->set_rules('CodTipoCont', 'CodTipoCont', 'required|in_list[1 – Apuração da Contribuição Exclusivamente a Alíquota Básica,2 – Apuração da Contribuição a Alíquotas Específicas]');
		$this->form_validation->set_rules('IndRegCum', 'IndRegCum', 'required|in_list[1 – Regime de Caixa – Escrituração consolidada,2 – Regime de Competência - Escrituração consolidada]');
		$this->form_validation->set_rules('DtIni', 'DtIni', 'required|valid_date');
		$this->form_validation->set_rules('DtFin', 'DtFin', 'valid_date');
		$this->form_validation->set_rules('PessoaJuridicaId', 'PessoaJuridicaId', 'integer');
		$this->form_validation->set_rules('UserId', 'UserId', 'integer');
		$this->form_validation->set_rules('Reg0111EFDCId', 'Reg0111EFDCId', 'integer');
		
    parent::create();
  }
  
  public function update($Id){
    $this->form_validation->set_rules('Reg', 'Reg', 'required|max_length[4]');
		$this->form_validation->set_rules('CodIncTrib', 'CodIncTrib', 'required|in_list[1 – Escrituração de operações com incidência exclusivamente no regime não-cumulativo,2 – Escrituração de operações com incidência exclusivamente no regime cumulativo,3 – Escrituração de operações com incidência nos regimes não-cumulativo e cumulativo]');
		$this->form_validation->set_rules('IndAproCred', 'IndAproCred', 'required|in_list[1 – Método de Apropriação Direta,2 – Método de Rateio Proporcional (Receita Bruta]');
		$this->form_validation->set_rules('CodTipoCont', 'CodTipoCont', 'required|in_list[1 – Apuração da Contribuição Exclusivamente a Alíquota Básica,2 – Apuração da Contribuição a Alíquotas Específicas]');
		$this->form_validation->set_rules('IndRegCum', 'IndRegCum', 'required|in_list[1 – Regime de Caixa – Escrituração consolidada,2 – Regime de Competência - Escrituração consolidada]');
		$this->form_validation->set_rules('DtIni', 'DtIni', 'required|valid_date');
		$this->form_validation->set_rules('DtFin', 'DtFin', 'valid_date');
		$this->form_validation->set_rules('PessoaJuridicaId', 'PessoaJuridicaId', 'integer');
		$this->form_validation->set_rules('UserId', 'UserId', 'integer');
		$this->form_validation->set_rules('Reg0111EFDCId', 'Reg0111EFDCId', 'integer');
		
    parent::update($Id);
  }

  public function delete($Id){
    parent::delete($Id);
  }
}

/*
	<div class='card-body'>
		<form>
			<fieldset>
				<legend>Regimes de Apuração da Contribuição Social e de Apropriação de Crédito</legend>
				<div class='form-group'>
					<label for='Id'>Identificador</label>
					<input type='' name='Id' id='Id' class='form-control' placeholder='Identificador' required>
				</div>
				<div class='form-group'>
					<label for='Reg'>Registro</label>
					<input type='hidden' name='Reg' id='Reg'>
				</div>
				<div class='form-group'>
					<label for='CodIncTrib'>Código Incidência Tributária</label>
					<input type='hidden' name='CodIncTrib' id='CodIncTrib'>
				</div>
				<div class='form-group'>
					<label for='IndAproCred'>Código Método Apropriação Créditos comuns</label>
					<input type='hidden' name='IndAproCred' id='IndAproCred'>
				</div>
				<div class='form-group'>
					<label for='CodTipoCont'>Código Tipo de Contribuição Apurada</label>
					<input type='hidden' name='CodTipoCont' id='CodTipoCont'>
				</div>
				<div class='form-group'>
					<label for='IndRegCum'>Código Critério de Escrituração</label>
					<input type='hidden' name='IndRegCum' id='IndRegCum'>
				</div>
				<div class='form-group'>
					<label for='DtIni'>Data Inicial</label>
					<input type='hidden' name='DtIni' id='DtIni'>
				</div>
				<div class='form-group'>
					<label for='DtFin'>Data Final</label>
					<input type='hidden' name='DtFin' id='DtFin'>
				</div>
				<div class='form-group'>
					<label for='PessoaJuridicaId'>Pessoa Juridica</label>
					<input type='hidden' name='PessoaJuridicaId' id='PessoaJuridicaId'>
				</div>
				<div class='form-group'>
					<label for='UserId'>Usuário</label>
					<input type='hidden' name='UserId' id='UserId'>
				</div>
				<div class='form-group'>
					<label for='Reg0111EFDCId'></label>
					<input type='hidden' name='Reg0111EFDCId' id='Reg0111EFDCId'>
				</div>
				<div class='form-actions'>
					<button class='btn btn-primary' type='submit'>Salvar</button>
				</div>
				<div class='form-actions'>
					<button class='btn btn-secondary' type='submit'>Cancelar</button>
				</div>
			</fieldset>
		</form>
	</div>
*/

