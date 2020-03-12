<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Regs0100efdc extends MY_Controller {

  public function  __construct() {
    parent::__construct();
    $this->table = 'regs0100efdc';
    $this->nameId = 'Id';
  }

  public function get($Id = '', $date = ''){
    parent::get($Id, $date);
  }
  
  public function setDefaultValue(){
    $_POST['Reg'] = !isset($_POST['Reg']) ? '0100' : $_POST['Reg'];
		
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
		$this->form_validation->set_rules('UserId', 'UserId', 'integer');
		
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
		$this->form_validation->set_rules('UserId', 'UserId', 'integer');
		
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
				<legend>regs0100efdc</legend>
				<div class='form-group'>
					<label for='Id'>Id</label>
					<input type='' name='Id' id='Id' class='form-control' placeholder='Id' required>
				</div>
				<div class='form-group'>
					<label for='Reg'>Reg</label>
					<input type='hidden' name='Reg' id='Reg'>
				</div>
				<div class='form-group'>
					<label for='Nome'>Nome</label>
					<input type='hidden' name='Nome' id='Nome'>
				</div>
				<div class='form-group'>
					<label for='CPF'>CPF</label>
					<input type='hidden' name='CPF' id='CPF'>
				</div>
				<div class='form-group'>
					<label for='CRC'>CRC</label>
					<input type='hidden' name='CRC' id='CRC'>
				</div>
				<div class='form-group'>
					<label for='CNPJ'>CNPJ</label>
					<input type='hidden' name='CNPJ' id='CNPJ'>
				</div>
				<div class='form-group'>
					<label for='CEP'>CEP</label>
					<input type='hidden' name='CEP' id='CEP'>
				</div>
				<div class='form-group'>
					<label for='End'>End</label>
					<input type='hidden' name='End' id='End'>
				</div>
				<div class='form-group'>
					<label for='Num'>Num</label>
					<input type='hidden' name='Num' id='Num'>
				</div>
				<div class='form-group'>
					<label for='Compl'>Compl</label>
					<input type='hidden' name='Compl' id='Compl'>
				</div>
				<div class='form-group'>
					<label for='Bairro'>Bairro</label>
					<input type='hidden' name='Bairro' id='Bairro'>
				</div>
				<div class='form-group'>
					<label for='Fone'>Fone</label>
					<input type='hidden' name='Fone' id='Fone'>
				</div>
				<div class='form-group'>
					<label for='Fax'>Fax</label>
					<input type='hidden' name='Fax' id='Fax'>
				</div>
				<div class='form-group'>
					<label for='Email'>Email</label>
					<input type='hidden' name='Email' id='Email'>
				</div>
				<div class='form-group'>
					<label for='MunicipioId'>MunicipioId</label>
					<input type='hidden' name='MunicipioId' id='MunicipioId'>
				</div>
				<div class='form-group'>
					<label for='DtIni'>DtIni</label>
					<input type='hidden' name='DtIni' id='DtIni'>
				</div>
				<div class='form-group'>
					<label for='DtFin'>DtFin</label>
					<input type='hidden' name='DtFin' id='DtFin'>
				</div>
				<div class='form-group'>
					<label for='PessoaJuridicaId'>PessoaJuridicaId</label>
					<input type='hidden' name='PessoaJuridicaId' id='PessoaJuridicaId'>
				</div>
				<div class='form-group'>
					<label for='UserId'>UserId</label>
					<input type='hidden' name='UserId' id='UserId'>
				</div>
			</fieldset>
		</form>
	</div>
*/

