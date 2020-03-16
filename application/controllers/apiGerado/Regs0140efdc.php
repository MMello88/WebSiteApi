<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Regs0140efdc extends MY_Controller {

  public function  __construct() {
    parent::__construct();
    $this->table = 'regs0140efdc';
    $this->nameId = 'Id';
  }

  public function get($Id = '', $date = ''){
    parent::get($Id, $date);
  }
  
  public function setDefaultValue(){
    
  }

  public function create(){
    $this->form_validation->set_rules('Reg', 'Reg', 'required|max_length[4]');
		$this->form_validation->set_rules('CodEstab', 'CodEstab', 'max_length[60]');
		$this->form_validation->set_rules('Nome', 'Nome', 'required|max_length[100]');
		$this->form_validation->set_rules('CNPJ', 'CNPJ', 'required|integer');
		$this->form_validation->set_rules('UF', 'UF', 'required|max_length[2]');
		$this->form_validation->set_rules('IE', 'IE', 'max_length[14]');
		$this->form_validation->set_rules('MunicipioId', 'MunicipioId', 'required|integer');
		$this->form_validation->set_rules('IM', 'IM', 'max_length[255]');
		$this->form_validation->set_rules('Suframa', 'Suframa', 'max_length[9]');
		$this->form_validation->set_rules('DtIni', 'DtIni', 'required|valid_date');
		$this->form_validation->set_rules('DtFin', 'DtFin', 'valid_date');
		$this->form_validation->set_rules('PessoaJuridicaId', 'PessoaJuridicaId', 'integer');
		$this->form_validation->set_rules('UserId', 'UserId', 'integer');
		$this->form_validation->set_rules('Reg0145EFDCId', 'Reg0145EFDCId', 'integer');
		
    parent::create();
  }
  
  public function update($Id){
    $this->form_validation->set_rules('Reg', 'Reg', 'required|max_length[4]');
		$this->form_validation->set_rules('CodEstab', 'CodEstab', 'max_length[60]');
		$this->form_validation->set_rules('Nome', 'Nome', 'required|max_length[100]');
		$this->form_validation->set_rules('CNPJ', 'CNPJ', 'required|integer');
		$this->form_validation->set_rules('UF', 'UF', 'required|max_length[2]');
		$this->form_validation->set_rules('IE', 'IE', 'max_length[14]');
		$this->form_validation->set_rules('MunicipioId', 'MunicipioId', 'required|integer');
		$this->form_validation->set_rules('IM', 'IM', 'max_length[255]');
		$this->form_validation->set_rules('Suframa', 'Suframa', 'max_length[9]');
		$this->form_validation->set_rules('DtIni', 'DtIni', 'required|valid_date');
		$this->form_validation->set_rules('DtFin', 'DtFin', 'valid_date');
		$this->form_validation->set_rules('PessoaJuridicaId', 'PessoaJuridicaId', 'integer');
		$this->form_validation->set_rules('UserId', 'UserId', 'integer');
		$this->form_validation->set_rules('Reg0145EFDCId', 'Reg0145EFDCId', 'integer');
		
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
				<legend>Tabela de Cadastro de Estabelecimentos</legend>
				<div class='form-group'>
					<label for='Id'>Identificador</label>
					<input type='' name='Id' id='Id' class='form-control' placeholder='Identificador' required>
				</div>
				<div class='form-group'>
					<label for='Reg'>Registro</label>
					<input type='hidden' name='Reg' id='Reg'>
				</div>
				<div class='form-group'>
					<label for='CodEstab'>Código</label>
					<input type='hidden' name='CodEstab' id='CodEstab'>
				</div>
				<div class='form-group'>
					<label for='Nome'>Nome</label>
					<input type='hidden' name='Nome' id='Nome'>
				</div>
				<div class='form-group'>
					<label for='CNPJ'>CNPJ</label>
					<input type='hidden' name='CNPJ' id='CNPJ'>
				</div>
				<div class='form-group'>
					<label for='UF'>UF</label>
					<input type='hidden' name='UF' id='UF'>
				</div>
				<div class='form-group'>
					<label for='IE'>Inscrição Estadual</label>
					<input type='hidden' name='IE' id='IE'>
				</div>
				<div class='form-group'>
					<label for='MunicipioId'>Municipio</label>
					<input type='hidden' name='MunicipioId' id='MunicipioId'>
				</div>
				<div class='form-group'>
					<label for='IM'>Inscrição Municipal</label>
					<input type='hidden' name='IM' id='IM'>
				</div>
				<div class='form-group'>
					<label for='Suframa'>Suframa</label>
					<input type='hidden' name='Suframa' id='Suframa'>
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
					<label for='Reg0145EFDCId'>Regime de Apuração da Contribuição Previdenciária Sobre a Receita Bruta</label>
					<input type='hidden' name='Reg0145EFDCId' id='Reg0145EFDCId'>
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

