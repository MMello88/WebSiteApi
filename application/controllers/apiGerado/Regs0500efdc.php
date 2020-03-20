<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Regs0500efdc extends MY_Controller {

  public function  __construct() {
    parent::__construct();
    $this->table = 'regs0500efdc';
    $this->nameId = 'Id';
  }

  public function get($Id = '', $date = ''){
    parent::get($Id, $date);
  }
  
  public function setDefaultValue(){
    $_POST['Reg'] = !isset($_POST['Reg']) ? '0500' : $_POST['Reg'];
		
  }

  public function create(){
    $this->form_validation->set_rules('Reg', 'Reg', 'required|max_length[4]');
		$this->form_validation->set_rules('DtAlteracao', 'DtAlteracao', 'required|valid_datetime');
		$this->form_validation->set_rules('CodNatCC', 'CodNatCC', 'required|integer');
		$this->form_validation->set_rules('IndCTA', 'IndCTA', 'required|max_length[1]');
		$this->form_validation->set_rules('Nivel', 'Nivel', 'required|integer');
		$this->form_validation->set_rules('CodCTA', 'CodCTA', 'required|max_length[255]');
		$this->form_validation->set_rules('NomeCTA', 'NomeCTA', 'required|max_length[60]');
		$this->form_validation->set_rules('CodCTARef', 'CodCTARef', 'max_length[60]');
		$this->form_validation->set_rules('CNPJEstab', 'CNPJEstab', 'required|integer');
		$this->form_validation->set_rules('DtIni', 'DtIni', 'required|valid_datetime');
		$this->form_validation->set_rules('DtFin', 'DtFin', 'required|valid_datetime');
		$this->form_validation->set_rules('PessoaJuridicaId', 'PessoaJuridicaId', 'integer');
		$this->form_validation->set_rules('UserId', 'UserId', 'integer');
		
    parent::create();
  }
  
  public function update($Id){
    $this->form_validation->set_rules('Reg', 'Reg', 'required|max_length[4]');
		$this->form_validation->set_rules('DtAlteracao', 'DtAlteracao', 'required|valid_datetime');
		$this->form_validation->set_rules('CodNatCC', 'CodNatCC', 'required|integer');
		$this->form_validation->set_rules('IndCTA', 'IndCTA', 'required|max_length[1]');
		$this->form_validation->set_rules('Nivel', 'Nivel', 'required|integer');
		$this->form_validation->set_rules('CodCTA', 'CodCTA', 'required|max_length[255]');
		$this->form_validation->set_rules('NomeCTA', 'NomeCTA', 'required|max_length[60]');
		$this->form_validation->set_rules('CodCTARef', 'CodCTARef', 'max_length[60]');
		$this->form_validation->set_rules('CNPJEstab', 'CNPJEstab', 'required|integer');
		$this->form_validation->set_rules('DtIni', 'DtIni', 'required|valid_datetime');
		$this->form_validation->set_rules('DtFin', 'DtFin', 'required|valid_datetime');
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
					<label for='DtAlteracao'></label>
					<input type='datetime-local' name='DtAlteracao' id='DtAlteracao' class='form-control' placeholder='' required>
				</div>
				<div class='form-group'>
					<label for='CodNatCC'></label>
					<input type='number' name='CodNatCC' id='CodNatCC' class='form-control' placeholder='' required>
				</div>
				<div class='form-group'>
					<label for='IndCTA'></label>
					<input type='text' name='IndCTA' id='IndCTA' class='form-control' placeholder='' required>
				</div>
				<div class='form-group'>
					<label for='Nivel'></label>
					<input type='number' name='Nivel' id='Nivel' class='form-control' placeholder='' required>
				</div>
				<div class='form-group'>
					<label for='CodCTA'></label>
					<input type='text' name='CodCTA' id='CodCTA' class='form-control' placeholder='' required>
				</div>
				<div class='form-group'>
					<label for='NomeCTA'></label>
					<input type='text' name='NomeCTA' id='NomeCTA' class='form-control' placeholder='' required>
				</div>
				<div class='form-group'>
					<label for='CodCTARef'></label>
					<input type='text' name='CodCTARef' id='CodCTARef' class='form-control' placeholder='' >
				</div>
				<div class='form-group'>
					<label for='CNPJEstab'></label>
					<input type='number' name='CNPJEstab' id='CNPJEstab' class='form-control' placeholder='' required>
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

