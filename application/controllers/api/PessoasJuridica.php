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
    $_POST['Ativo'] = $_POST['Ativo'] == null ? 'True' : $_POST['Ativo'];
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