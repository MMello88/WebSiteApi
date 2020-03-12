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
				<legend>pessoasjuridica</legend>
				<div class='form-group'>
					<label for='Id'>Id</label>
					<input type='' name='Id' id='Id' class='form-control' placeholder='Id' required>
				</div>
				<div class='form-group'>
					<label for='Nome'>Nome</label>
					<input type='hidden' name='Nome' id='Nome'>
				</div>
				<div class='form-group'>
					<label for='NomeFantasia'>NomeFantasia</label>
					<input type='hidden' name='NomeFantasia' id='NomeFantasia'>
				</div>
				<div class='form-group'>
					<label for='Matriz'>Matriz</label>
					<input type='hidden' name='Matriz' id='Matriz'>
				</div>
				<div class='form-group'>
					<label for='Endereco'>Endereco</label>
					<input type='hidden' name='Endereco' id='Endereco'>
				</div>
				<div class='form-group'>
					<label for='Numero'>Numero</label>
					<input type='hidden' name='Numero' id='Numero'>
				</div>
				<div class='form-group'>
					<label for='Complemento'>Complemento</label>
					<input type='hidden' name='Complemento' id='Complemento'>
				</div>
				<div class='form-group'>
					<label for='Bairro'>Bairro</label>
					<input type='hidden' name='Bairro' id='Bairro'>
				</div>
				<div class='form-group'>
					<label for='CEP'>CEP</label>
					<input type='hidden' name='CEP' id='CEP'>
				</div>
				<div class='form-group'>
					<label for='Telefone'>Telefone</label>
					<input type='hidden' name='Telefone' id='Telefone'>
				</div>
				<div class='form-group'>
					<label for='Celular'>Celular</label>
					<input type='hidden' name='Celular' id='Celular'>
				</div>
				<div class='form-group'>
					<label for='Email'>Email</label>
					<input type='hidden' name='Email' id='Email'>
				</div>
				<div class='form-group'>
					<label for='InscricaoEstadual'>InscricaoEstadual</label>
					<input type='hidden' name='InscricaoEstadual' id='InscricaoEstadual'>
				</div>
				<div class='form-group'>
					<label for='Cnpj'>Cnpj</label>
					<input type='hidden' name='Cnpj' id='Cnpj'>
				</div>
				<div class='form-group'>
					<label for='CNAE'>CNAE</label>
					<input type='hidden' name='CNAE' id='CNAE'>
				</div>
				<div class='form-group'>
					<label for='InscricaoMunicipal'>InscricaoMunicipal</label>
					<input type='hidden' name='InscricaoMunicipal' id='InscricaoMunicipal'>
				</div>
				<div class='form-group'>
					<label for='NrSuframa'>NrSuframa</label>
					<input type='hidden' name='NrSuframa' id='NrSuframa'>
				</div>
				<div class='form-group'>
					<label for='NaturezaJuridica'>NaturezaJuridica</label>
					<input type='hidden' name='NaturezaJuridica' id='NaturezaJuridica'>
				</div>
				<div class='form-group'>
					<label for='NomeContato'>NomeContato</label>
					<input type='hidden' name='NomeContato' id='NomeContato'>
				</div>
				<div class='form-group'>
					<label for='WebSite'>WebSite</label>
					<input type='hidden' name='WebSite' id='WebSite'>
				</div>
				<div class='form-group'>
					<label for='DmContribuicao'>DmContribuicao</label>
					<input type='hidden' name='DmContribuicao' id='DmContribuicao'>
				</div>
				<div class='form-group'>
					<label for='MunicipioId'>MunicipioId</label>
					<input type='hidden' name='MunicipioId' id='MunicipioId'>
				</div>
				<div class='form-group'>
					<label for='PessoaFisicaId'>PessoaFisicaId</label>
					<input type='hidden' name='PessoaFisicaId' id='PessoaFisicaId'>
				</div>
				<div class='form-group'>
					<label for='Ativo'>Ativo</label>
					<input type='hidden' name='Ativo' id='Ativo'>
				</div>
			</fieldset>
		</form>
	</div>
*/

