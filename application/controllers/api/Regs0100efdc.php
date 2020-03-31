<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Regs0100efdc extends MY_Controller {

  public function  __construct() {
    parent::__construct();
    $this->table = 'regs0100efdc';
    $this->nameId = 'Id';
    $this->usersId = 'UsersId';
    $this->joins = [
			['table' => 'municipios', 'condition' => 'municipios.Id = regs0100efdc.MunicipioId', 'type' => 'inner'],
			['table' => 'pessoasjuridica', 'condition' => 'pessoasjuridica.Id = regs0100efdc.PessoaJuridicaId', 'type' => 'left'],
    ];
  }

  public function get($Id = '', $date = ''){
    parent::get($Id, $date);
  }
  
  public function setDefaultValue(){
    
  }

  public function create(){
    $this->form_validation->set_rules('Reg', 'Reg', 'required|max_length[4]');
		$this->form_validation->set_rules('Nome', 'Nome', 'required|max_length[100]');
		$this->form_validation->set_rules('CPF', 'CPF', 'required|integer');
		$this->form_validation->set_rules('CRC', 'CRC', 'required|max_length[15]');
		$this->form_validation->set_rules('CNPJ', 'CNPJ', 'required|integer');
		$this->form_validation->set_rules('CEP', 'CEP', 'required|integer');
		$this->form_validation->set_rules('End', 'End', 'max_length[60]');
		$this->form_validation->set_rules('Num', 'Num', 'max_length[5]');
		$this->form_validation->set_rules('Compl', 'Compl', 'max_length[60]');
		$this->form_validation->set_rules('Bairro', 'Bairro', 'max_length[60]');
		$this->form_validation->set_rules('Fone', 'Fone', 'max_length[11]');
		$this->form_validation->set_rules('Fax', 'Fax', 'max_length[11]');
		$this->form_validation->set_rules('Email', 'Email', 'max_length[255]');
		$this->form_validation->set_rules('MunicipioId', 'MunicipioId', 'required|integer');
		$this->form_validation->set_rules('DtIni', 'DtIni', 'required|valid_date');
		$this->form_validation->set_rules('DtFin', 'DtFin', 'valid_date');
		$this->form_validation->set_rules('PessoaJuridicaId', 'PessoaJuridicaId', 'integer');
		$this->form_validation->set_rules('UsersId', 'UsersId', 'integer');
		
    parent::create();
  }
  
  public function update($Id){
    $this->form_validation->set_rules('Reg', 'Reg', 'required|max_length[4]');
		$this->form_validation->set_rules('Nome', 'Nome', 'required|max_length[100]');
		$this->form_validation->set_rules('CPF', 'CPF', 'required|integer');
		$this->form_validation->set_rules('CRC', 'CRC', 'required|max_length[15]');
		$this->form_validation->set_rules('CNPJ', 'CNPJ', 'required|integer');
		$this->form_validation->set_rules('CEP', 'CEP', 'required|integer');
		$this->form_validation->set_rules('End', 'End', 'max_length[60]');
		$this->form_validation->set_rules('Num', 'Num', 'max_length[5]');
		$this->form_validation->set_rules('Compl', 'Compl', 'max_length[60]');
		$this->form_validation->set_rules('Bairro', 'Bairro', 'max_length[60]');
		$this->form_validation->set_rules('Fone', 'Fone', 'max_length[11]');
		$this->form_validation->set_rules('Fax', 'Fax', 'max_length[11]');
		$this->form_validation->set_rules('Email', 'Email', 'max_length[255]');
		$this->form_validation->set_rules('MunicipioId', 'MunicipioId', 'required|integer');
		$this->form_validation->set_rules('DtIni', 'DtIni', 'required|valid_date');
		$this->form_validation->set_rules('DtFin', 'DtFin', 'valid_date');
		$this->form_validation->set_rules('PessoaJuridicaId', 'PessoaJuridicaId', 'integer');
		$this->form_validation->set_rules('UsersId', 'UsersId', 'integer');
		
    parent::update($Id);
  }

  public function delete($Id){
    parent::delete($Id);
  }
}

/*
	<header class='page-title-bar'>
		<legend>Dados do Contabilista</legend>
	</header>
	<div class='page-section'>
		<div class='section-block'>
			<div class='card' id='floating-label'>
				<div class='card-body'>
					<?= form_open(base_url('regs0100efdc/')) ?>
						<fieldset>
							<input type='hidden' name='Id' id='Id'>
							<div class='form-group'>
								<label for='Reg'>Registro</label>
								<input type='text' name='Reg' id='Reg' class='form-control' placeholder='Registro' required>
							</div>
							<div class='form-group'>
								<label for='Nome'>Nome</label>
								<input type='text' name='Nome' id='Nome' class='form-control' placeholder='Nome' required>
							</div>
							<div class='form-group'>
								<label for='CPF'>CPF</label>
								<input type='number' name='CPF' id='CPF' class='form-control' placeholder='CPF' required>
							</div>
							<div class='form-group'>
								<label for='CRC'>CRC</label>
								<input type='text' name='CRC' id='CRC' class='form-control' placeholder='CRC' required>
							</div>
							<div class='form-group'>
								<label for='CNPJ'>CNPJ</label>
								<input type='number' name='CNPJ' id='CNPJ' class='form-control' placeholder='CNPJ' required>
							</div>
							<div class='form-group'>
								<label for='CEP'>CEP</label>
								<input type='number' name='CEP' id='CEP' class='form-control' placeholder='CEP' required>
							</div>
							<div class='form-group'>
								<label for='End'>Endereço</label>
								<input type='text' name='End' id='End' class='form-control' placeholder='Endereço' >
							</div>
							<div class='form-group'>
								<label for='Num'>Número</label>
								<input type='text' name='Num' id='Num' class='form-control' placeholder='Número' >
							</div>
							<div class='form-group'>
								<label for='Compl'>Complemento</label>
								<input type='text' name='Compl' id='Compl' class='form-control' placeholder='Complemento' >
							</div>
							<div class='form-group'>
								<label for='Bairro'>Bairro</label>
								<input type='text' name='Bairro' id='Bairro' class='form-control' placeholder='Bairro' >
							</div>
							<div class='form-group'>
								<label for='Fone'>Fone</label>
								<input type='text' name='Fone' id='Fone' class='form-control' placeholder='Fone' >
							</div>
							<div class='form-group'>
								<label for='Fax'>Fax</label>
								<input type='text' name='Fax' id='Fax' class='form-control' placeholder='Fax' >
							</div>
							<div class='form-group'>
								<label for='Email'>E-mail</label>
								<input type='text' name='Email' id='Email' class='form-control' placeholder='E-mail' >
							</div>
							<div class='form-group'>
								<label for='MunicipioId'>Municipio</label>
								<input type='number' name='MunicipioId' id='MunicipioId' class='form-control' placeholder='Municipio' required>
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

