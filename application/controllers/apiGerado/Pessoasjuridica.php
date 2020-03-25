<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pessoasjuridica extends MY_Controller {

  public function  __construct() {
    parent::__construct();
    $this->table = 'pessoasjuridica';
    $this->nameId = 'Id';
    $this->usersId = '';
  }

  public function get($Id = '', $date = ''){
    parent::get($Id, $date);
  }
  
  public function setDefaultValue(){
    
  }

  public function create(){
    $this->form_validation->set_rules('Nome', 'Nome', 'required|max_length[450]');
		$this->form_validation->set_rules('NomeFantasia', 'NomeFantasia', 'required|max_length[450]');
		$this->form_validation->set_rules('Matriz', 'Matriz', 'required|integer');
		$this->form_validation->set_rules('Endereco', 'Endereco', 'required|max_length[250]');
		$this->form_validation->set_rules('Numero', 'Numero', 'required|max_length[10]');
		$this->form_validation->set_rules('Complemento', 'Complemento', 'max_length[100]');
		$this->form_validation->set_rules('Bairro', 'Bairro', 'required|max_length[150]');
		$this->form_validation->set_rules('CEP', 'CEP', 'required|max_length[10]');
		$this->form_validation->set_rules('Telefone', 'Telefone', 'max_length[15]');
		$this->form_validation->set_rules('Celular', 'Celular', 'required|max_length[15]');
		$this->form_validation->set_rules('Email', 'Email', 'required|max_length[250]');
		$this->form_validation->set_rules('InscricaoEstadual', 'InscricaoEstadual', 'max_length[20]');
		$this->form_validation->set_rules('Cnpj', 'Cnpj', 'required|max_length[20]');
		$this->form_validation->set_rules('CNAE', 'CNAE', 'max_length[9]');
		$this->form_validation->set_rules('InscricaoMunicipal', 'InscricaoMunicipal', 'max_length[20]');
		$this->form_validation->set_rules('NrSuframa', 'NrSuframa', 'max_length[9]');
		$this->form_validation->set_rules('NaturezaJuridica', 'NaturezaJuridica', 'required|integer');
		$this->form_validation->set_rules('NomeContato', 'NomeContato', 'max_length[150]');
		$this->form_validation->set_rules('WebSite', 'WebSite', 'max_length[200]');
		$this->form_validation->set_rules('DmContribuicao', 'DmContribuicao', 'required|integer');
		$this->form_validation->set_rules('MunicipioId', 'MunicipioId', 'required|integer');
		$this->form_validation->set_rules('PessoaFisicaId', 'PessoaFisicaId', 'required|integer');
		$this->form_validation->set_rules('Ativo', 'Ativo', 'required|in_list[True,False]');
		
    parent::create();
  }
  
  public function update($Id){
    $this->form_validation->set_rules('Nome', 'Nome', 'required|max_length[450]');
		$this->form_validation->set_rules('NomeFantasia', 'NomeFantasia', 'required|max_length[450]');
		$this->form_validation->set_rules('Matriz', 'Matriz', 'required|integer');
		$this->form_validation->set_rules('Endereco', 'Endereco', 'required|max_length[250]');
		$this->form_validation->set_rules('Numero', 'Numero', 'required|max_length[10]');
		$this->form_validation->set_rules('Complemento', 'Complemento', 'max_length[100]');
		$this->form_validation->set_rules('Bairro', 'Bairro', 'required|max_length[150]');
		$this->form_validation->set_rules('CEP', 'CEP', 'required|max_length[10]');
		$this->form_validation->set_rules('Telefone', 'Telefone', 'max_length[15]');
		$this->form_validation->set_rules('Celular', 'Celular', 'required|max_length[15]');
		$this->form_validation->set_rules('Email', 'Email', 'required|max_length[250]');
		$this->form_validation->set_rules('InscricaoEstadual', 'InscricaoEstadual', 'max_length[20]');
		$this->form_validation->set_rules('Cnpj', 'Cnpj', 'required|max_length[20]');
		$this->form_validation->set_rules('CNAE', 'CNAE', 'max_length[9]');
		$this->form_validation->set_rules('InscricaoMunicipal', 'InscricaoMunicipal', 'max_length[20]');
		$this->form_validation->set_rules('NrSuframa', 'NrSuframa', 'max_length[9]');
		$this->form_validation->set_rules('NaturezaJuridica', 'NaturezaJuridica', 'required|integer');
		$this->form_validation->set_rules('NomeContato', 'NomeContato', 'max_length[150]');
		$this->form_validation->set_rules('WebSite', 'WebSite', 'max_length[200]');
		$this->form_validation->set_rules('DmContribuicao', 'DmContribuicao', 'required|integer');
		$this->form_validation->set_rules('MunicipioId', 'MunicipioId', 'required|integer');
		$this->form_validation->set_rules('PessoaFisicaId', 'PessoaFisicaId', 'required|integer');
		$this->form_validation->set_rules('Ativo', 'Ativo', 'required|in_list[True,False]');
		
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
				<legend>Pessoa Juridica</legend>
				<div class='form-group'>
					<label for='Id'>Identificador</label>
					<input type='hidden' name='Id' id='Id'>
				</div>
				<div class='form-group'>
					<label for='Nome'>Nome</label>
					<input type='text' name='Nome' id='Nome' class='form-control' placeholder='Nome' required>
				</div>
				<div class='form-group'>
					<label for='NomeFantasia'>Nome Fantasia</label>
					<input type='text' name='NomeFantasia' id='NomeFantasia' class='form-control' placeholder='Nome Fantasia' required>
				</div>
				<div class='form-group'>
					<label for='Matriz'>Matriz</label>
					<input type='number' name='Matriz' id='Matriz' class='form-control' placeholder='Matriz' required>
				</div>
				<div class='form-group'>
					<label for='Endereco'>Endereço</label>
					<input type='text' name='Endereco' id='Endereco' class='form-control' placeholder='Endereço' required>
				</div>
				<div class='form-group'>
					<label for='Numero'>Numero</label>
					<input type='text' name='Numero' id='Numero' class='form-control' placeholder='Numero' required>
				</div>
				<div class='form-group'>
					<label for='Complemento'>Complemento</label>
					<input type='text' name='Complemento' id='Complemento' class='form-control' placeholder='Complemento' >
				</div>
				<div class='form-group'>
					<label for='Bairro'>Bairro</label>
					<input type='text' name='Bairro' id='Bairro' class='form-control' placeholder='Bairro' required>
				</div>
				<div class='form-group'>
					<label for='CEP'>Cep</label>
					<input type='text' name='CEP' id='CEP' class='form-control' placeholder='Cep' required>
				</div>
				<div class='form-group'>
					<label for='Telefone'>Telefone</label>
					<input type='text' name='Telefone' id='Telefone' class='form-control' placeholder='Telefone' >
				</div>
				<div class='form-group'>
					<label for='Celular'>Celular</label>
					<input type='text' name='Celular' id='Celular' class='form-control' placeholder='Celular' required>
				</div>
				<div class='form-group'>
					<label for='Email'>E-mail</label>
					<input type='text' name='Email' id='Email' class='form-control' placeholder='E-mail' required>
				</div>
				<div class='form-group'>
					<label for='InscricaoEstadual'>Inscrição Estadual</label>
					<input type='text' name='InscricaoEstadual' id='InscricaoEstadual' class='form-control' placeholder='Inscrição Estadual' >
				</div>
				<div class='form-group'>
					<label for='Cnpj'>CNPJ</label>
					<input type='text' name='Cnpj' id='Cnpj' class='form-control' placeholder='CNPJ' required>
				</div>
				<div class='form-group'>
					<label for='CNAE'>CNAE</label>
					<input type='text' name='CNAE' id='CNAE' class='form-control' placeholder='CNAE' >
				</div>
				<div class='form-group'>
					<label for='InscricaoMunicipal'>Inscrição Municipal</label>
					<input type='text' name='InscricaoMunicipal' id='InscricaoMunicipal' class='form-control' placeholder='Inscrição Municipal' >
				</div>
				<div class='form-group'>
					<label for='NrSuframa'>Numero Suframa</label>
					<input type='text' name='NrSuframa' id='NrSuframa' class='form-control' placeholder='Numero Suframa' >
				</div>
				<div class='form-group'>
					<label for='NaturezaJuridica'>Natureza Juridica</label>
					<input type='number' name='NaturezaJuridica' id='NaturezaJuridica' class='form-control' placeholder='Natureza Juridica' required>
				</div>
				<div class='form-group'>
					<label for='NomeContato'>Nome do Contato</label>
					<input type='text' name='NomeContato' id='NomeContato' class='form-control' placeholder='Nome do Contato' >
				</div>
				<div class='form-group'>
					<label for='WebSite'>Web Site</label>
					<input type='text' name='WebSite' id='WebSite' class='form-control' placeholder='Web Site' >
				</div>
				<div class='form-group'>
					<label for='DmContribuicao'>Contribuinte</label>
					<input type='number' name='DmContribuicao' id='DmContribuicao' class='form-control' placeholder='Contribuinte' required>
				</div>
				<div class='form-group'>
					<label for='MunicipioId'>Municipio</label>
					<input type='number' name='MunicipioId' id='MunicipioId' class='form-control' placeholder='Municipio' required>
				</div>
				<div class='form-group'>
					<label for='PessoaFisicaId'>Pessoa Fisica</label>
					<input type='number' name='PessoaFisicaId' id='PessoaFisicaId' class='form-control' placeholder='Pessoa Fisica' required>
				</div>
				<div class='form-group'>
					<label for='Ativo'>Ativo</label>
					<select name='Ativo' id='Ativo' class='custom-select' placeholder='Ativo' required>
						<option value=''> Selecione </option>
						<option value='True'> True </option>
						<option value='False'> False </option>
					</select>
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

