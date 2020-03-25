<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Regs0600efdc extends MY_Controller {

  public function  __construct() {
    parent::__construct();
    $this->table = 'regs0600efdc';
    $this->nameId = 'Id';
    $this->usersId = 'UsersId';
  }

  public function get($Id = '', $date = ''){
    parent::get($Id, $date);
  }
  
  public function setDefaultValue(){
    
  }

  public function create(){
    $this->form_validation->set_rules('Reg', 'Reg', 'required|max_length[4]');
		$this->form_validation->set_rules('DtAlteracao', 'DtAlteracao', 'required|valid_datetime');
		$this->form_validation->set_rules('CodCCusto', 'CodCCusto', 'required|max_length[255]');
		$this->form_validation->set_rules('NomeCCusto', 'NomeCCusto', 'required|max_length[60]');
		$this->form_validation->set_rules('DtIni', 'DtIni', 'required|valid_date');
		$this->form_validation->set_rules('DtFin', 'DtFin', 'valid_date');
		$this->form_validation->set_rules('PessoaJuridicaId', 'PessoaJuridicaId', 'integer');
		$this->form_validation->set_rules('UsersId', 'UsersId', 'integer');
		
    parent::create();
  }
  
  public function update($Id){
    $this->form_validation->set_rules('Reg', 'Reg', 'required|max_length[4]');
		$this->form_validation->set_rules('DtAlteracao', 'DtAlteracao', 'required|valid_datetime');
		$this->form_validation->set_rules('CodCCusto', 'CodCCusto', 'required|max_length[255]');
		$this->form_validation->set_rules('NomeCCusto', 'NomeCCusto', 'required|max_length[60]');
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
	<div class='card-body'>
		<form>
			<fieldset>
				<legend>Centro de Custos</legend>
				<div class='form-group'>
					<label for='Id'>Identificador</label>
					<input type='hidden' name='Id' id='Id'>
				</div>
				<div class='form-group'>
					<label for='Reg'>Registro</label>
					<input type='text' name='Reg' id='Reg' class='form-control' placeholder='Registro' required>
				</div>
				<div class='form-group'>
					<label for='DtAlteracao'>Data Alteração</label>
					<input type='datetime-local' name='DtAlteracao' id='DtAlteracao' class='form-control' placeholder='Data Alteração' required>
				</div>
				<div class='form-group'>
					<label for='CodCCusto'>Código</label>
					<input type='text' name='CodCCusto' id='CodCCusto' class='form-control' placeholder='Código' required>
				</div>
				<div class='form-group'>
					<label for='NomeCCusto'>Nome</label>
					<input type='text' name='NomeCCusto' id='NomeCCusto' class='form-control' placeholder='Nome' required>
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
					<button class='btn btn-primary' type='submit'>Salvar</button>
				</div>
				<div class='form-actions'>
					<button class='btn btn-secondary' type='submit'>Cancelar</button>
				</div>
			</fieldset>
		</form>
	</div>
*/

