<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pessoasjuridica extends MY_Controller {

  public function  __construct() {
    parent::__construct();
    $this->table = 'pessoasjuridica';
    $this->nameId = 'Id';
    $this->usersId = '';
    $this->joins = [
			['table' => 'municipios', 'condition' => 'municipios.Id = pessoasjuridica.MunicipioId', 'type' => 'inner'],
			['table' => 'pessoasfisica', 'condition' => 'pessoasfisica.Id = pessoasjuridica.PessoaFisicaId', 'type' => 'inner'],
    ];
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
	<header class='page-title-bar'>
		<legend>Pessoa Juridica</legend>
	</header>
	<div class='page-section'>
		<div class='section-block'>
			<div class='card' id='floating-label'>
				<div class='card-body'>
					<?= form_open(base_url('pessoasjuridica/')) ?>
						<fieldset>
							<input type='hidden' name='Id' id='Id'>
							<div class='form-group'>
								<label for='Nome'>Nome</label>
								<input type='text' name='Nome' id='Nome' class='form-control' placeholder='Nome' required>
								<?php if(isset($response)): ?>
									<div class='invalid-feedback' style='display:block'><?= isset($response->error->Nome) ? $response->error->Nome : ''; ?></div>
								<?php endif; ?>
							</div>
							<div class='form-group'>
								<label for='NomeFantasia'>Nome Fantasia</label>
								<input type='text' name='NomeFantasia' id='NomeFantasia' class='form-control' placeholder='Nome Fantasia' required>
								<?php if(isset($response)): ?>
									<div class='invalid-feedback' style='display:block'><?= isset($response->error->NomeFantasia) ? $response->error->NomeFantasia : ''; ?></div>
								<?php endif; ?>
							</div>
							<div class='form-group'>
								<label for='Matriz'>Matriz</label>
								<input type='number' name='Matriz' id='Matriz' class='form-control' placeholder='Matriz' required>
								<?php if(isset($response)): ?>
									<div class='invalid-feedback' style='display:block'><?= isset($response->error->Matriz) ? $response->error->Matriz : ''; ?></div>
								<?php endif; ?>
							</div>
							<div class='form-group'>
								<label for='Endereco'>Endereço</label>
								<input type='text' name='Endereco' id='Endereco' class='form-control' placeholder='Endereço' required>
								<?php if(isset($response)): ?>
									<div class='invalid-feedback' style='display:block'><?= isset($response->error->Endereco) ? $response->error->Endereco : ''; ?></div>
								<?php endif; ?>
							</div>
							<div class='form-group'>
								<label for='Numero'>Numero</label>
								<input type='text' name='Numero' id='Numero' class='form-control' placeholder='Numero' required>
								<?php if(isset($response)): ?>
									<div class='invalid-feedback' style='display:block'><?= isset($response->error->Numero) ? $response->error->Numero : ''; ?></div>
								<?php endif; ?>
							</div>
							<div class='form-group'>
								<label for='Complemento'>Complemento</label>
								<input type='text' name='Complemento' id='Complemento' class='form-control' placeholder='Complemento' >
								<?php if(isset($response)): ?>
									<div class='invalid-feedback' style='display:block'><?= isset($response->error->Complemento) ? $response->error->Complemento : ''; ?></div>
								<?php endif; ?>
							</div>
							<div class='form-group'>
								<label for='Bairro'>Bairro</label>
								<input type='text' name='Bairro' id='Bairro' class='form-control' placeholder='Bairro' required>
								<?php if(isset($response)): ?>
									<div class='invalid-feedback' style='display:block'><?= isset($response->error->Bairro) ? $response->error->Bairro : ''; ?></div>
								<?php endif; ?>
							</div>
							<div class='form-group'>
								<label for='CEP'>Cep</label>
								<input type='text' name='CEP' id='CEP' class='form-control' placeholder='Cep' required>
								<?php if(isset($response)): ?>
									<div class='invalid-feedback' style='display:block'><?= isset($response->error->CEP) ? $response->error->CEP : ''; ?></div>
								<?php endif; ?>
							</div>
							<div class='form-group'>
								<label for='Telefone'>Telefone</label>
								<input type='text' name='Telefone' id='Telefone' class='form-control' placeholder='Telefone' >
								<?php if(isset($response)): ?>
									<div class='invalid-feedback' style='display:block'><?= isset($response->error->Telefone) ? $response->error->Telefone : ''; ?></div>
								<?php endif; ?>
							</div>
							<div class='form-group'>
								<label for='Celular'>Celular</label>
								<input type='text' name='Celular' id='Celular' class='form-control' placeholder='Celular' required>
								<?php if(isset($response)): ?>
									<div class='invalid-feedback' style='display:block'><?= isset($response->error->Celular) ? $response->error->Celular : ''; ?></div>
								<?php endif; ?>
							</div>
							<div class='form-group'>
								<label for='Email'>E-mail</label>
								<input type='text' name='Email' id='Email' class='form-control' placeholder='E-mail' required>
								<?php if(isset($response)): ?>
									<div class='invalid-feedback' style='display:block'><?= isset($response->error->Email) ? $response->error->Email : ''; ?></div>
								<?php endif; ?>
							</div>
							<div class='form-group'>
								<label for='InscricaoEstadual'>Inscrição Estadual</label>
								<input type='text' name='InscricaoEstadual' id='InscricaoEstadual' class='form-control' placeholder='Inscrição Estadual' >
								<?php if(isset($response)): ?>
									<div class='invalid-feedback' style='display:block'><?= isset($response->error->InscricaoEstadual) ? $response->error->InscricaoEstadual : ''; ?></div>
								<?php endif; ?>
							</div>
							<div class='form-group'>
								<label for='Cnpj'>CNPJ</label>
								<input type='text' name='Cnpj' id='Cnpj' class='form-control' placeholder='CNPJ' required>
								<?php if(isset($response)): ?>
									<div class='invalid-feedback' style='display:block'><?= isset($response->error->Cnpj) ? $response->error->Cnpj : ''; ?></div>
								<?php endif; ?>
							</div>
							<div class='form-group'>
								<label for='CNAE'>CNAE</label>
								<input type='text' name='CNAE' id='CNAE' class='form-control' placeholder='CNAE' >
								<?php if(isset($response)): ?>
									<div class='invalid-feedback' style='display:block'><?= isset($response->error->CNAE) ? $response->error->CNAE : ''; ?></div>
								<?php endif; ?>
							</div>
							<div class='form-group'>
								<label for='InscricaoMunicipal'>Inscrição Municipal</label>
								<input type='text' name='InscricaoMunicipal' id='InscricaoMunicipal' class='form-control' placeholder='Inscrição Municipal' >
								<?php if(isset($response)): ?>
									<div class='invalid-feedback' style='display:block'><?= isset($response->error->InscricaoMunicipal) ? $response->error->InscricaoMunicipal : ''; ?></div>
								<?php endif; ?>
							</div>
							<div class='form-group'>
								<label for='NrSuframa'>Numero Suframa</label>
								<input type='text' name='NrSuframa' id='NrSuframa' class='form-control' placeholder='Numero Suframa' >
								<?php if(isset($response)): ?>
									<div class='invalid-feedback' style='display:block'><?= isset($response->error->NrSuframa) ? $response->error->NrSuframa : ''; ?></div>
								<?php endif; ?>
							</div>
							<div class='form-group'>
								<label for='NaturezaJuridica'>Natureza Juridica</label>
								<input type='number' name='NaturezaJuridica' id='NaturezaJuridica' class='form-control' placeholder='Natureza Juridica' required>
								<?php if(isset($response)): ?>
									<div class='invalid-feedback' style='display:block'><?= isset($response->error->NaturezaJuridica) ? $response->error->NaturezaJuridica : ''; ?></div>
								<?php endif; ?>
							</div>
							<div class='form-group'>
								<label for='NomeContato'>Nome do Contato</label>
								<input type='text' name='NomeContato' id='NomeContato' class='form-control' placeholder='Nome do Contato' >
								<?php if(isset($response)): ?>
									<div class='invalid-feedback' style='display:block'><?= isset($response->error->NomeContato) ? $response->error->NomeContato : ''; ?></div>
								<?php endif; ?>
							</div>
							<div class='form-group'>
								<label for='WebSite'>Web Site</label>
								<input type='text' name='WebSite' id='WebSite' class='form-control' placeholder='Web Site' >
								<?php if(isset($response)): ?>
									<div class='invalid-feedback' style='display:block'><?= isset($response->error->WebSite) ? $response->error->WebSite : ''; ?></div>
								<?php endif; ?>
							</div>
							<div class='form-group'>
								<label for='DmContribuicao'>Contribuinte</label>
								<input type='number' name='DmContribuicao' id='DmContribuicao' class='form-control' placeholder='Contribuinte' required>
								<?php if(isset($response)): ?>
									<div class='invalid-feedback' style='display:block'><?= isset($response->error->DmContribuicao) ? $response->error->DmContribuicao : ''; ?></div>
								<?php endif; ?>
							</div>
							<div class='form-group'>
								<label for='MunicipioId'>Municipio</label>
								<input type='number' name='MunicipioId' id='MunicipioId' class='form-control' placeholder='Municipio' required>
								<?php if(isset($response)): ?>
									<div class='invalid-feedback' style='display:block'><?= isset($response->error->MunicipioId) ? $response->error->MunicipioId : ''; ?></div>
								<?php endif; ?>
							</div>
							<div class='form-group'>
								<label for='PessoaFisicaId'>Pessoa Fisica</label>
								<input type='number' name='PessoaFisicaId' id='PessoaFisicaId' class='form-control' placeholder='Pessoa Fisica' required>
								<?php if(isset($response)): ?>
									<div class='invalid-feedback' style='display:block'><?= isset($response->error->PessoaFisicaId) ? $response->error->PessoaFisicaId : ''; ?></div>
								<?php endif; ?>
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
								<button class='btn btn-primary mr-auto' type='submit'>Salvar</button>
								<button class='btn btn-secondary ml-auto' type='submit'>Cancelar</button>
							</div>
					</fieldset>
					<?= form_close() ?>
				</div>
			</div>
		</div>
	</div>
*/

