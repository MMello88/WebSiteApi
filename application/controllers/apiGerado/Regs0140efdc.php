<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Regs0140efdc extends MY_Controller {

  public function  __construct() {
    parent::__construct();
    $this->table = 'regs0140efdc';
    $this->nameId = 'Id';
  }

  public function get($Id = '', $date = ''){
    parent::get($Id, $date);
  }
  
  public function setDefaultValue(){
    $_POST['Reg'] = !isset($_POST['Reg']) ? '0140' : $_POST['Reg'];
		
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
		$this->form_validation->set_rules('DtIni', 'DtIni', 'required|valid_datetime');
		$this->form_validation->set_rules('DtFin', 'DtFin', 'required|valid_datetime');
		$this->form_validation->set_rules('PessoaJuridicaId', 'PessoaJuridicaId', 'integer');
		$this->form_validation->set_rules('UserId', 'UserId', 'integer');
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
		$this->form_validation->set_rules('DtIni', 'DtIni', 'required|valid_datetime');
		$this->form_validation->set_rules('DtFin', 'DtFin', 'required|valid_datetime');
		$this->form_validation->set_rules('PessoaJuridicaId', 'PessoaJuridicaId', 'integer');
		$this->form_validation->set_rules('UserId', 'UserId', 'integer');
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
				<legend></legend>
				<div class='form-group'>
					<label for='Id'></label>
					<input type='hidden' name='Id' id='Id'>
				</div>
				<div class='form-group'>
					<label for='Reg'></label>
					<input type='text' name='Reg' id='Reg' class='form-control' placeholder='' required>
				</div>
				<div class='form-group'>
					<label for='CodEstab'></label>
					<input type='text' name='CodEstab' id='CodEstab' class='form-control' placeholder='' >
				</div>
				<div class='form-group'>
					<label for='Nome'></label>
					<input type='text' name='Nome' id='Nome' class='form-control' placeholder='' required>
				</div>
				<div class='form-group'>
					<label for='CNPJ'></label>
					<input type='number' name='CNPJ' id='CNPJ' class='form-control' placeholder='' required>
				</div>
				<div class='form-group'>
					<label for='UF'></label>
					<input type='text' name='UF' id='UF' class='form-control' placeholder='' required>
				</div>
				<div class='form-group'>
					<label for='IE'></label>
					<input type='text' name='IE' id='IE' class='form-control' placeholder='' >
				</div>
				<div class='form-group'>
					<label for='MunicipioId'></label>
					<input type='number' name='MunicipioId' id='MunicipioId' class='form-control' placeholder='' required>
				</div>
				<div class='form-group'>
					<label for='IM'></label>
					<input type='text' name='IM' id='IM' class='form-control' placeholder='' >
				</div>
				<div class='form-group'>
					<label for='Suframa'></label>
					<input type='text' name='Suframa' id='Suframa' class='form-control' placeholder='' >
				</div>
				<div class='form-group'>
					<label for='DtIni'></label>
					<input type='datetime-local' name='DtIni' id='DtIni' class='form-control' placeholder='' required>
				</div>
				<div class='form-group'>
					<label for='DtFin'></label>
					<input type='datetime-local' name='DtFin' id='DtFin' class='form-control' placeholder='' required>
				</div>
				<div class='form-group'>
					<label for='PessoaJuridicaId'></label>
					<input type='number' name='PessoaJuridicaId' id='PessoaJuridicaId' class='form-control' placeholder='' >
				</div>
				<div class='form-group'>
					<label for='UserId'></label>
					<input type='number' name='UserId' id='UserId' class='form-control' placeholder='' >
				</div>
				<div class='form-group'>
					<label for='Reg0145EFDCId'></label>
					<input type='number' name='Reg0145EFDCId' id='Reg0145EFDCId' class='form-control' placeholder='' >
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

