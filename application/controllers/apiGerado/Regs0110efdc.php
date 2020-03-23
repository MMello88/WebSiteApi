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
					<input type='hidden' name='Id' id='Id'>
				</div>
				<div class='form-group'>
					<label for='Reg'>Registro</label>
					<input type='text' name='Reg' id='Reg' class='form-control' placeholder='Registro' required>
				</div>
				<div class='form-group'>
					<label for='CodIncTrib'>Código Incidência Tributária</label>
					<select name='CodIncTrib' id='CodIncTrib' class='custom-select' placeholder='Código Incidência Tributária' required>
						<option value=''> Selecione </option>
						<option value='1 – Escrituração de operações com incidência exclusivamente no regime não-cumulativo'> 1 – Escrituração de operações com incidência exclusivamente no regime não-cumulativo </option>
						<option value='2 – Escrituração de operações com incidência exclusivamente no regime cumulativo'> 2 – Escrituração de operações com incidência exclusivamente no regime cumulativo </option>
						<option value='3 – Escrituração de operações com incidência nos regimes não-cumulativo e cumulativo'> 3 – Escrituração de operações com incidência nos regimes não-cumulativo e cumulativo </option>
					</select>
				</div>
				<div class='form-group'>
					<label for='IndAproCred'>Código Método Apropriação Créditos comuns</label>
					<select name='IndAproCred' id='IndAproCred' class='custom-select' placeholder='Código Método Apropriação Créditos comuns' required>
						<option value=''> Selecione </option>
						<option value='1 – Método de Apropriação Direta'> 1 – Método de Apropriação Direta </option>
						<option value='2 – Método de Rateio Proporcional (Receita Bruta'> 2 – Método de Rateio Proporcional (Receita Bruta </option>
					</select>
				</div>
				<div class='form-group'>
					<label for='CodTipoCont'>Código Tipo de Contribuição Apurada</label>
					<select name='CodTipoCont' id='CodTipoCont' class='custom-select' placeholder='Código Tipo de Contribuição Apurada' required>
						<option value=''> Selecione </option>
						<option value='1 – Apuração da Contribuição Exclusivamente a Alíquota Básica'> 1 – Apuração da Contribuição Exclusivamente a Alíquota Básica </option>
						<option value='2 – Apuração da Contribuição a Alíquotas Específicas'> 2 – Apuração da Contribuição a Alíquotas Específicas </option>
					</select>
				</div>
				<div class='form-group'>
					<label for='IndRegCum'>Código Critério de Escrituração</label>
					<select name='IndRegCum' id='IndRegCum' class='custom-select' placeholder='Código Critério de Escrituração' required>
						<option value=''> Selecione </option>
						<option value='1 – Regime de Caixa – Escrituração consolidada'> 1 – Regime de Caixa – Escrituração consolidada </option>
						<option value='2 – Regime de Competência - Escrituração consolidada'> 2 – Regime de Competência - Escrituração consolidada </option>
					</select>
				</div>
				<div class='form-group'>
					<label for='DtIni'>Data Inicial</label>
					<input type='date' name='DtIni' id='DtIni' class='form-control' placeholder='Data Inicial' required>
				</div>
				<div class='form-group'>
					<label for='DtFin'>Data Final</label>
					<input type='date' name='DtFin' id='DtFin' class='form-control' placeholder='Data Final' >
				</div>
				<div class='form-group'>
					<label for='PessoaJuridicaId'>Pessoa Juridica</label>
					<input type='number' name='PessoaJuridicaId' id='PessoaJuridicaId' class='form-control' placeholder='Pessoa Juridica' >
				</div>
				<div class='form-group'>
					<label for='UserId'>Usuário</label>
					<input type='number' name='UserId' id='UserId' class='form-control' placeholder='Usuário' >
				</div>
				<div class='form-group'>
					<label for='Reg0111EFDCId'></label>
					<input type='number' name='Reg0111EFDCId' id='Reg0111EFDCId' class='form-control' placeholder='' >
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

