<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Regs0140efdc extends MY_Controller {

  public function  __construct() {
    parent::__construct();
    $this->table = 'regs0140efdc';
    $this->nameId = 'Id';
    $this->usersId = 'UsersId';
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
		$this->form_validation->set_rules('UsersId', 'UsersId', 'integer');
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
		$this->form_validation->set_rules('UsersId', 'UsersId', 'integer');
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
					<input type='hidden' name='Id' id='Id'>
				</div>
				<div class='form-group'>
					<label for='Reg'>Registro</label>
					<input type='text' name='Reg' id='Reg' class='form-control' placeholder='Registro' required>
				</div>
				<div class='form-group'>
					<label for='CodEstab'>Código</label>
					<input type='text' name='CodEstab' id='CodEstab' class='form-control' placeholder='Código' >
				</div>
				<div class='form-group'>
					<label for='Nome'>Nome</label>
					<input type='text' name='Nome' id='Nome' class='form-control' placeholder='Nome' required>
				</div>
				<div class='form-group'>
					<label for='CNPJ'>CNPJ</label>
					<input type='number' name='CNPJ' id='CNPJ' class='form-control' placeholder='CNPJ' required>
				</div>
				<div class='form-group'>
					<label for='UF'>UF</label>
					<input type='text' name='UF' id='UF' class='form-control' placeholder='UF' required>
				</div>
				<div class='form-group'>
					<label for='IE'>Inscrição Estadual</label>
					<input type='text' name='IE' id='IE' class='form-control' placeholder='Inscrição Estadual' >
				</div>
				<div class='form-group'>
					<label for='MunicipioId'>Municipio</label>
					<input type='number' name='MunicipioId' id='MunicipioId' class='form-control' placeholder='Municipio' required>
				</div>
				<div class='form-group'>
					<label for='IM'>Inscrição Municipal</label>
					<input type='text' name='IM' id='IM' class='form-control' placeholder='Inscrição Municipal' >
				</div>
				<div class='form-group'>
					<label for='Suframa'>Suframa</label>
					<input type='text' name='Suframa' id='Suframa' class='form-control' placeholder='Suframa' >
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
					<label for='UsersId'>Usuário</label>
					<input type='number' name='UsersId' id='UsersId' class='form-control' placeholder='Usuário' >
				</div>
				<div class='form-group'>
					<label for='Reg0145EFDCId'>Regime de Apuração da Contribuição Previdenciária Sobre a Receita Bruta</label>
					<input type='number' name='Reg0145EFDCId' id='Reg0145EFDCId' class='form-control' placeholder='Regime de Apuração da Contribuição Previdenciária Sobre a Receita Bruta' >
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

