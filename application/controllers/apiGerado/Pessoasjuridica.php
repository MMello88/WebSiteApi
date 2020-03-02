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
    
  }

  public function create(){
    $this->form_validation->set_rules('Nome', 'Nome', 'required');
		$this->form_validation->set_rules('NomeFantasia', 'NomeFantasia', 'required');
		$this->form_validation->set_rules('Matriz', 'Matriz', 'required');
		$this->form_validation->set_rules('Endereco', 'Endereco', 'required');
		$this->form_validation->set_rules('Numero', 'Numero', 'required');
		$this->form_validation->set_rules('Bairro', 'Bairro', 'required');
		$this->form_validation->set_rules('CEP', 'CEP', 'required');
		$this->form_validation->set_rules('Celular', 'Celular', 'required');
		$this->form_validation->set_rules('Email', 'Email', 'required');
		$this->form_validation->set_rules('Cnpj', 'Cnpj', 'required');
		$this->form_validation->set_rules('NaturezaJuridica', 'NaturezaJuridica', 'required');
		$this->form_validation->set_rules('DmContribuicao', 'DmContribuicao', 'required');
		$this->form_validation->set_rules('MunicipioId', 'MunicipioId', 'required');
		$this->form_validation->set_rules('PessoaFisicaId', 'PessoaFisicaId', 'required');
		
    parent::create();
  }
  
  public function update($Id){
    $this->form_validation->set_rules('Nome', 'Nome', 'required');
		$this->form_validation->set_rules('NomeFantasia', 'NomeFantasia', 'required');
		$this->form_validation->set_rules('Matriz', 'Matriz', 'required');
		$this->form_validation->set_rules('Endereco', 'Endereco', 'required');
		$this->form_validation->set_rules('Numero', 'Numero', 'required');
		$this->form_validation->set_rules('Bairro', 'Bairro', 'required');
		$this->form_validation->set_rules('CEP', 'CEP', 'required');
		$this->form_validation->set_rules('Celular', 'Celular', 'required');
		$this->form_validation->set_rules('Email', 'Email', 'required');
		$this->form_validation->set_rules('Cnpj', 'Cnpj', 'required');
		$this->form_validation->set_rules('NaturezaJuridica', 'NaturezaJuridica', 'required');
		$this->form_validation->set_rules('DmContribuicao', 'DmContribuicao', 'required');
		$this->form_validation->set_rules('MunicipioId', 'MunicipioId', 'required');
		$this->form_validation->set_rules('PessoaFisicaId', 'PessoaFisicaId', 'required');
		
    parent::update($Id);
  }

  public function delete($Id){
    parent::delete($Id);
  }
}