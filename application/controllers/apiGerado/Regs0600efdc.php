<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Regs0600efdc extends MY_Controller {

  public function  __construct() {
    parent::__construct();
    $this->table = 'regs0600efdc';
    $this->nameId = 'Id';
  }

  public function get($Id = '', $date = ''){
    parent::get($Id, $date);
  }
  
  public function setDefaultValue(){
    $_POST['Reg'] = !isset($_POST['Reg']) ? '0600' : $_POST['Reg'];
		
  }

  public function create(){
    $this->form_validation->set_rules('Reg', 'Reg', 'required|max_length[4]');
		$this->form_validation->set_rules('DtAlteracao', 'DtAlteracao', 'required|valid_datetime');
		$this->form_validation->set_rules('CodCCusto', 'CodCCusto', 'required|max_length[255]');
		$this->form_validation->set_rules('NomeCCusto', 'NomeCCusto', 'required|max_length[60]');
		$this->form_validation->set_rules('DtIni', 'DtIni', 'required|valid_datetime');
		$this->form_validation->set_rules('DtFin', 'DtFin', 'required|valid_datetime');
		$this->form_validation->set_rules('PessoaJuridicaId', 'PessoaJuridicaId', 'integer');
		$this->form_validation->set_rules('UserId', 'UserId', 'integer');
		
    parent::create();
  }
  
  public function update($Id){
    $this->form_validation->set_rules('Reg', 'Reg', 'required|max_length[4]');
		$this->form_validation->set_rules('DtAlteracao', 'DtAlteracao', 'required|valid_datetime');
		$this->form_validation->set_rules('CodCCusto', 'CodCCusto', 'required|max_length[255]');
		$this->form_validation->set_rules('NomeCCusto', 'NomeCCusto', 'required|max_length[60]');
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
					<label for='CodCCusto'></label>
					<input type='text' name='CodCCusto' id='CodCCusto' class='form-control' placeholder='' required>
				</div>
				<div class='form-group'>
					<label for='NomeCCusto'></label>
					<input type='text' name='NomeCCusto' id='NomeCCusto' class='form-control' placeholder='' required>
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

