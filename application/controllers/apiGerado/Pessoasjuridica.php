<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pessoasjuridica extends MY_Controller {

  public function  __construct() {
    parent::__construct();
    $this->table = 'pessoasjuridica';
    $this->nameId = 'pj_Id';
    $this->usersId = '';
    $this->joins = [
			['table' => 'municipios', 'condition' => 'municipios.mun_Id = pessoasjuridica.MunicipioId', 'type' => 'inner'],
			['table' => 'pessoasfisica', 'condition' => 'pessoasfisica.pf_Id = pessoasjuridica.PessoaFisicaId', 'type' => 'inner'],
    ];
  }

  public function get($Id = '', $date = ''){
    parent::get($Id, $date);
  }

  public function setDefaultValue(){
    
  }

  public function create(){
    $this->form_validation->set_rules('pj_Nome', 'pj_Nome', 'required|max_length[450]');
		$this->form_validation->set_rules('pj_NomeFantasia', 'pj_NomeFantasia', 'required|max_length[450]');
		$this->form_validation->set_rules('pj_Matriz', 'pj_Matriz', 'required|integer');
		$this->form_validation->set_rules('pj_Endereco', 'pj_Endereco', 'required|max_length[250]');
		$this->form_validation->set_rules('pj_Numero', 'pj_Numero', 'required|max_length[10]');
		$this->form_validation->set_rules('pj_Complemento', 'pj_Complemento', 'max_length[100]');
		$this->form_validation->set_rules('pj_Bairro', 'pj_Bairro', 'required|max_length[150]');
		$this->form_validation->set_rules('pj_CEP', 'pj_CEP', 'required|max_length[10]');
		$this->form_validation->set_rules('pj_Telefone', 'pj_Telefone', 'max_length[15]');
		$this->form_validation->set_rules('pj_Celular', 'pj_Celular', 'required|max_length[15]');
		$this->form_validation->set_rules('pj_Email', 'pj_Email', 'required|max_length[250]');
		$this->form_validation->set_rules('pj_InscricaoEstadual', 'pj_InscricaoEstadual', 'max_length[20]');
		$this->form_validation->set_rules('pj_Cnpj', 'pj_Cnpj', 'required|max_length[20]');
		$this->form_validation->set_rules('pj_CNAE', 'pj_CNAE', 'max_length[9]');
		$this->form_validation->set_rules('pj_InscricaoMunicipal', 'pj_InscricaoMunicipal', 'max_length[20]');
		$this->form_validation->set_rules('pj_NrSuframa', 'pj_NrSuframa', 'max_length[9]');
		$this->form_validation->set_rules('pj_NaturezaJuridica', 'pj_NaturezaJuridica', 'required|integer');
		$this->form_validation->set_rules('pj_NomeContato', 'pj_NomeContato', 'max_length[150]');
		$this->form_validation->set_rules('pj_WebSite', 'pj_WebSite', 'max_length[200]');
		$this->form_validation->set_rules('pj_DmContribuicao', 'pj_DmContribuicao', 'required|integer');
		$this->form_validation->set_rules('MunicipioId', 'MunicipioId', 'required|integer');
		$this->form_validation->set_rules('PessoaFisicaId', 'PessoaFisicaId', 'required|integer');
		$this->form_validation->set_rules('pj_Ativo', 'pj_Ativo', 'required|in_list[True,False]');
		
    parent::create();
  }

  public function update($Id){
    $this->form_validation->set_rules('pj_Nome', 'pj_Nome', 'required|max_length[450]');
		$this->form_validation->set_rules('pj_NomeFantasia', 'pj_NomeFantasia', 'required|max_length[450]');
		$this->form_validation->set_rules('pj_Matriz', 'pj_Matriz', 'required|integer');
		$this->form_validation->set_rules('pj_Endereco', 'pj_Endereco', 'required|max_length[250]');
		$this->form_validation->set_rules('pj_Numero', 'pj_Numero', 'required|max_length[10]');
		$this->form_validation->set_rules('pj_Complemento', 'pj_Complemento', 'max_length[100]');
		$this->form_validation->set_rules('pj_Bairro', 'pj_Bairro', 'required|max_length[150]');
		$this->form_validation->set_rules('pj_CEP', 'pj_CEP', 'required|max_length[10]');
		$this->form_validation->set_rules('pj_Telefone', 'pj_Telefone', 'max_length[15]');
		$this->form_validation->set_rules('pj_Celular', 'pj_Celular', 'required|max_length[15]');
		$this->form_validation->set_rules('pj_Email', 'pj_Email', 'required|max_length[250]');
		$this->form_validation->set_rules('pj_InscricaoEstadual', 'pj_InscricaoEstadual', 'max_length[20]');
		$this->form_validation->set_rules('pj_Cnpj', 'pj_Cnpj', 'required|max_length[20]');
		$this->form_validation->set_rules('pj_CNAE', 'pj_CNAE', 'max_length[9]');
		$this->form_validation->set_rules('pj_InscricaoMunicipal', 'pj_InscricaoMunicipal', 'max_length[20]');
		$this->form_validation->set_rules('pj_NrSuframa', 'pj_NrSuframa', 'max_length[9]');
		$this->form_validation->set_rules('pj_NaturezaJuridica', 'pj_NaturezaJuridica', 'required|integer');
		$this->form_validation->set_rules('pj_NomeContato', 'pj_NomeContato', 'max_length[150]');
		$this->form_validation->set_rules('pj_WebSite', 'pj_WebSite', 'max_length[200]');
		$this->form_validation->set_rules('pj_DmContribuicao', 'pj_DmContribuicao', 'required|integer');
		$this->form_validation->set_rules('MunicipioId', 'MunicipioId', 'required|integer');
		$this->form_validation->set_rules('PessoaFisicaId', 'PessoaFisicaId', 'required|integer');
		$this->form_validation->set_rules('pj_Ativo', 'pj_Ativo', 'required|in_list[True,False]');
		
    parent::update($Id);
  }

  public function delete($Id){
    parent::delete($Id);
  }
}
