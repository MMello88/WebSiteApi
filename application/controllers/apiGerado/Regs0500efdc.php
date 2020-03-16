<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Regs0500efdc extends MY_Controller {

  public function  __construct() {
    parent::__construct();
    $this->table = 'regs0500efdc';
    $this->nameId = 'Id';
  }

  public function get($Id = '', $date = ''){
    parent::get($Id, $date);
  }
  
  public function setDefaultValue(){
    
  }

  public function create(){
    $this->form_validation->set_rules('Reg', 'Reg', 'required|max_length[4]');
		$this->form_validation->set_rules('DtAlteracao', 'DtAlteracao', 'required|valid_datetime');
		$this->form_validation->set_rules('CodNatCC', 'CodNatCC', 'required|in_list[01 - Contas de ativo,02 - Contas de passivo,03 - Patrimônio líquido,04 - Contas de resultado,05 - Contas de compensação,09 - Outras]');
		$this->form_validation->set_rules('IndCTA', 'IndCTA', 'required|max_length[1]');
		$this->form_validation->set_rules('Nivel', 'Nivel', 'required|integer');
		$this->form_validation->set_rules('CodCTA', 'CodCTA', 'required|max_length[255]');
		$this->form_validation->set_rules('NomeCTA', 'NomeCTA', 'required|max_length[60]');
		$this->form_validation->set_rules('CodCTARef', 'CodCTARef', 'max_length[60]');
		$this->form_validation->set_rules('CNPJEstab', 'CNPJEstab', 'required|integer');
		$this->form_validation->set_rules('DtIni', 'DtIni', 'required|valid_date');
		$this->form_validation->set_rules('DtFin', 'DtFin', 'valid_date');
		$this->form_validation->set_rules('PessoaJuridicaId', 'PessoaJuridicaId', 'integer');
		$this->form_validation->set_rules('UserId', 'UserId', 'integer');
		
    parent::create();
  }
  
  public function update($Id){
    $this->form_validation->set_rules('Reg', 'Reg', 'required|max_length[4]');
		$this->form_validation->set_rules('DtAlteracao', 'DtAlteracao', 'required|valid_datetime');
		$this->form_validation->set_rules('CodNatCC', 'CodNatCC', 'required|in_list[01 - Contas de ativo,02 - Contas de passivo,03 - Patrimônio líquido,04 - Contas de resultado,05 - Contas de compensação,09 - Outras]');
		$this->form_validation->set_rules('IndCTA', 'IndCTA', 'required|max_length[1]');
		$this->form_validation->set_rules('Nivel', 'Nivel', 'required|integer');
		$this->form_validation->set_rules('CodCTA', 'CodCTA', 'required|max_length[255]');
		$this->form_validation->set_rules('NomeCTA', 'NomeCTA', 'required|max_length[60]');
		$this->form_validation->set_rules('CodCTARef', 'CodCTARef', 'max_length[60]');
		$this->form_validation->set_rules('CNPJEstab', 'CNPJEstab', 'required|integer');
		$this->form_validation->set_rules('DtIni', 'DtIni', 'required|valid_date');
		$this->form_validation->set_rules('DtFin', 'DtFin', 'valid_date');
		$this->form_validation->set_rules('PessoaJuridicaId', 'PessoaJuridicaId', 'integer');
		$this->form_validation->set_rules('UserId', 'UserId', 'integer');
		
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
				<legend>Plano de Contas Contábeis</legend>
				<div class='form-group'>
					<label for='Id'>Identificador</label>
					<input type='' name='Id' id='Id' class='form-control' placeholder='Identificador' required>
				</div>
				<div class='form-group'>
					<label for='Reg'>Registro</label>
					<input type='hidden' name='Reg' id='Reg'>
				</div>
				<div class='form-group'>
					<label for='DtAlteracao'>Data Alteração</label>
					<input type='hidden' name='DtAlteracao' id='DtAlteracao'>
				</div>
				<div class='form-group'>
					<label for='CodNatCC'>Código Natureza Conta</label>
					<input type='hidden' name='CodNatCC' id='CodNatCC'>
				</div>
				<div class='form-group'>
					<label for='IndCTA'>Indicador Tipo Conta</label>
					<input type='hidden' name='IndCTA' id='IndCTA'>
				</div>
				<div class='form-group'>
					<label for='Nivel'>Nível</label>
					<input type='hidden' name='Nivel' id='Nivel'>
				</div>
				<div class='form-group'>
					<label for='CodCTA'>Código</label>
					<input type='hidden' name='CodCTA' id='CodCTA'>
				</div>
				<div class='form-group'>
					<label for='NomeCTA'>Nome</label>
					<input type='hidden' name='NomeCTA' id='NomeCTA'>
				</div>
				<div class='form-group'>
					<label for='CodCTARef'>Plano de Conta Referenciado</label>
					<input type='hidden' name='CodCTARef' id='CodCTARef'>
				</div>
				<div class='form-group'>
					<label for='CNPJEstab'>CNPJ do estabelecimento</label>
					<input type='hidden' name='CNPJEstab' id='CNPJEstab'>
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

