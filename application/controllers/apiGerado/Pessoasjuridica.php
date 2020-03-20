<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pessoasjuridica extends MY_Controller {

  public function  __construct() {
    parent::__construct();
    $this->table = 'pessoasjuridica';
    $this->nameId = 'Id';
  }

  public function get($Id = '', $date = ''){
    parent::get($Id, $date);
  }
  
  public function setDefaultValue(){
    $_POST['Ativo'] = !isset($_POST['Ativo']) ? 'True' : $_POST['Ativo'];
		
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
				<legend></legend>
				<div class='form-group'>
					<label for='Id'></label>
					<input type='hidden' name='Id' id='Id'>
				</div>
				<div class='form-group'>
					<label for='Nome'></label>
					<input type='text' name='Nome' id='Nome' class='form-control' placeholder='' required>
				</div>
				<div class='form-group'>
					<label for='NomeFantasia'></label>
					<input type='text' name='NomeFantasia' id='NomeFantasia' class='form-control' placeholder='' required>
				</div>
				<div class='form-group'>
					<label for='Matriz'></label>
					<input type='number' name='Matriz' id='Matriz' class='form-control' placeholder='' required>
				</div>
				<div class='form-group'>
					<label for='Endereco'></label>
					<input type='text' name='Endereco' id='Endereco' class='form-control' placeholder='' required>
				</div>
				<div class='form-group'>
					<label for='Numero'></label>
					<input type='text' name='Numero' id='Numero' class='form-control' placeholder='' required>
				</div>
				<div class='form-group'>
					<label for='Complemento'></label>
					<input type='text' name='Complemento' id='Complemento' class='form-control' placeholder='' >
				</div>
				<div class='form-group'>
					<label for='Bairro'></label>
					<input type='text' name='Bairro' id='Bairro' class='form-control' placeholder='' required>
				</div>
				<div class='form-group'>
					<label for='CEP'></label>
					<input type='text' name='CEP' id='CEP' class='form-control' placeholder='' required>
				</div>
				<div class='form-group'>
					<label for='Telefone'></label>
					<input type='text' name='Telefone' id='Telefone' class='form-control' placeholder='' >
				</div>
				<div class='form-group'>
					<label for='Celular'></label>
					<input type='text' name='Celular' id='Celular' class='form-control' placeholder='' required>
				</div>
				<div class='form-group'>
					<label for='Email'></label>
					<input type='text' name='Email' id='Email' class='form-control' placeholder='' required>
				</div>
				<div class='form-group'>
					<label for='InscricaoEstadual'></label>
					<input type='text' name='InscricaoEstadual' id='InscricaoEstadual' class='form-control' placeholder='' >
				</div>
				<div class='form-group'>
					<label for='Cnpj'></label>
					<input type='text' name='Cnpj' id='Cnpj' class='form-control' placeholder='' required>
				</div>
				<div class='form-group'>
					<label for='CNAE'></label>
					<input type='text' name='CNAE' id='CNAE' class='form-control' placeholder='' >
				</div>
				<div class='form-group'>
					<label for='InscricaoMunicipal'></label>
					<input type='text' name='InscricaoMunicipal' id='InscricaoMunicipal' class='form-control' placeholder='' >
				</div>
				<div class='form-group'>
					<label for='NrSuframa'></label>
					<input type='text' name='NrSuframa' id='NrSuframa' class='form-control' placeholder='' >
				</div>
				<div class='form-group'>
					<label for='NaturezaJuridica'></label>
					<input type='number' name='NaturezaJuridica' id='NaturezaJuridica' class='form-control' placeholder='' required>
				</div>
				<div class='form-group'>
					<label for='NomeContato'></label>
					<input type='text' name='NomeContato' id='NomeContato' class='form-control' placeholder='' >
				</div>
				<div class='form-group'>
					<label for='WebSite'></label>
					<input type='text' name='WebSite' id='WebSite' class='form-control' placeholder='' >
				</div>
				<div class='form-group'>
					<label for='DmContribuicao'></label>
					<input type='number' name='DmContribuicao' id='DmContribuicao' class='form-control' placeholder='' required>
				</div>
				<div class='form-group'>
					<label for='MunicipioId'></label>
					<input type='number' name='MunicipioId' id='MunicipioId' class='form-control' placeholder='' required>
				</div>
				<div class='form-group'>
					<label for='PessoaFisicaId'></label>
					<input type='number' name='PessoaFisicaId' id='PessoaFisicaId' class='form-control' placeholder='' required>
				</div>
				<div class='form-group'>
					<label for='Ativo'></label>
					<select name='Ativo' id='Ativo' class='custom-select' placeholder='' required>
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

