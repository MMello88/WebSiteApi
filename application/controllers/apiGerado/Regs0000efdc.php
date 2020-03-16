<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Regs0000efdc extends MY_Controller {

  public function  __construct() {
    parent::__construct();
    $this->table = 'regs0000efdc';
    $this->nameId = 'Id';
  }

  public function get($Id = '', $date = ''){
    parent::get($Id, $date);
  }
  
  public function setDefaultValue(){
    
  }

  public function create(){
    $this->form_validation->set_rules('Reg', 'Reg', 'required|max_length[4]');
		$this->form_validation->set_rules('Ref311Id', 'Ref311Id', 'required|integer');
		$this->form_validation->set_rules('TipoEscrit', 'TipoEscrit', 'required|in_list[Original,Retificadora]');
		$this->form_validation->set_rules('IndSitEsp', 'IndSitEsp', 'required|in_list[Abertura,Cisão,Fusão,Incorporação,Encerramento]');
		$this->form_validation->set_rules('NumRecAnterior', 'NumRecAnterior', 'max_length[41]');
		$this->form_validation->set_rules('DtIni', 'DtIni', 'required|valid_date');
		$this->form_validation->set_rules('DtFin', 'DtFin', 'valid_date');
		$this->form_validation->set_rules('IndNatPj', 'IndNatPj', 'required|in_list[00 – Pessoa jurídica em geral,01 – Sociedade cooperativa,02 – Entidade sujeita ao PIS/Pasep exclusivamente com base na Folha de Salários,03 - Pessoa jurídica em geral participante de SCP como sócia ostensiva,04 – Sociedade cooperativa participante de SCP como sócia ostensiva,05 – Sociedade em Conta de Participação - SCP]');
		$this->form_validation->set_rules('IndAtiv', 'IndAtiv', 'required|in_list[0 – Industrial ou equiparado a industrial,1 – Prestador de serviços,2 - Atividade de comércio,3 – Pessoas jurídicas referidas nos §§ 6º, 8º e 9º do art. 3º da Lei nº 9.718, de 1998,4 – Atividade imobiliária,9 – Outros]');
		$this->form_validation->set_rules('PessoaJuridicaId', 'PessoaJuridicaId', 'integer');
		$this->form_validation->set_rules('UserId', 'UserId', 'integer');
		$this->form_validation->set_rules('Reg0001EFDCId', 'Reg0001EFDCId', 'integer');
		$this->form_validation->set_rules('Regs0110EFDCId', 'Regs0110EFDCId', 'integer');
		
    parent::create();
  }
  
  public function update($Id){
    $this->form_validation->set_rules('Reg', 'Reg', 'required|max_length[4]');
		$this->form_validation->set_rules('Ref311Id', 'Ref311Id', 'required|integer');
		$this->form_validation->set_rules('TipoEscrit', 'TipoEscrit', 'required|in_list[Original,Retificadora]');
		$this->form_validation->set_rules('IndSitEsp', 'IndSitEsp', 'required|in_list[Abertura,Cisão,Fusão,Incorporação,Encerramento]');
		$this->form_validation->set_rules('NumRecAnterior', 'NumRecAnterior', 'max_length[41]');
		$this->form_validation->set_rules('DtIni', 'DtIni', 'required|valid_date');
		$this->form_validation->set_rules('DtFin', 'DtFin', 'valid_date');
		$this->form_validation->set_rules('IndNatPj', 'IndNatPj', 'required|in_list[00 – Pessoa jurídica em geral,01 – Sociedade cooperativa,02 – Entidade sujeita ao PIS/Pasep exclusivamente com base na Folha de Salários,03 - Pessoa jurídica em geral participante de SCP como sócia ostensiva,04 – Sociedade cooperativa participante de SCP como sócia ostensiva,05 – Sociedade em Conta de Participação - SCP]');
		$this->form_validation->set_rules('IndAtiv', 'IndAtiv', 'required|in_list[0 – Industrial ou equiparado a industrial,1 – Prestador de serviços,2 - Atividade de comércio,3 – Pessoas jurídicas referidas nos §§ 6º, 8º e 9º do art. 3º da Lei nº 9.718, de 1998,4 – Atividade imobiliária,9 – Outros]');
		$this->form_validation->set_rules('PessoaJuridicaId', 'PessoaJuridicaId', 'integer');
		$this->form_validation->set_rules('UserId', 'UserId', 'integer');
		$this->form_validation->set_rules('Reg0001EFDCId', 'Reg0001EFDCId', 'integer');
		$this->form_validation->set_rules('Regs0110EFDCId', 'Regs0110EFDCId', 'integer');
		
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
				<legend>Abertura do Arquivo Digital e Identificação da Pessoa Jurídica</legend>
				<div class='form-group'>
					<label for='Id'>Identificador</label>
					<input type='' name='Id' id='Id' class='form-control' placeholder='Identificador' required>
				</div>
				<div class='form-group'>
					<label for='Reg'>Registro</label>
					<input type='hidden' name='Reg' id='Reg'>
				</div>
				<div class='form-group'>
					<label for='Ref311Id'>Código Versão Leiaute</label>
					<input type='hidden' name='Ref311Id' id='Ref311Id'>
				</div>
				<div class='form-group'>
					<label for='TipoEscrit'>Tipo Escrituração</label>
					<input type='hidden' name='TipoEscrit' id='TipoEscrit'>
				</div>
				<div class='form-group'>
					<label for='IndSitEsp'>Indicador Situação Especial</label>
					<input type='hidden' name='IndSitEsp' id='IndSitEsp'>
				</div>
				<div class='form-group'>
					<label for='NumRecAnterior'>Número Recibo Escrituração Anterior</label>
					<input type='hidden' name='NumRecAnterior' id='NumRecAnterior'>
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
					<label for='IndNatPj'>Indicador da Natureza</label>
					<input type='hidden' name='IndNatPj' id='IndNatPj'>
				</div>
				<div class='form-group'>
					<label for='IndAtiv'>Indicador Tipo Atividade Preponderante</label>
					<input type='hidden' name='IndAtiv' id='IndAtiv'>
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
					<label for='Reg0001EFDCId'>Abertura Bloco 0</label>
					<input type='hidden' name='Reg0001EFDCId' id='Reg0001EFDCId'>
				</div>
				<div class='form-group'>
					<label for='Regs0110EFDCId'>Regimes de Apuração da Contribuição Social e de Apropriação de Crédito</label>
					<input type='hidden' name='Regs0110EFDCId' id='Regs0110EFDCId'>
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

