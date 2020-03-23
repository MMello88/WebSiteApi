<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ref311 extends MY_Controller {

  public function  __construct() {
    parent::__construct();
    $this->table = 'ref311';
    $this->nameId = 'Id';
  }

  public function get($Id = '', $date = ''){
    parent::get($Id, $date);
  }
  
  public function setDefaultValue(){
    
  }

  public function create(){
    $this->form_validation->set_rules('Codigo', 'Codigo', 'required|max_length[5]');
		$this->form_validation->set_rules('Versao', 'Versao', 'required|max_length[5]');
		$this->form_validation->set_rules('Leiaout', 'Leiaout', 'required|max_length[100]');
		$this->form_validation->set_rules('DtIni', 'DtIni', 'required|valid_date');
		$this->form_validation->set_rules('DtFin', 'DtFin', 'valid_date');
		
    parent::create();
  }
  
  public function update($Id){
    $this->form_validation->set_rules('Codigo', 'Codigo', 'required|max_length[5]');
		$this->form_validation->set_rules('Versao', 'Versao', 'required|max_length[5]');
		$this->form_validation->set_rules('Leiaout', 'Leiaout', 'required|max_length[100]');
		$this->form_validation->set_rules('DtIni', 'DtIni', 'required|valid_date');
		$this->form_validation->set_rules('DtFin', 'DtFin', 'valid_date');
		
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
				<legend>Versão do Leiaute</legend>
				<div class='form-group'>
					<label for='Id'>Identificador</label>
					<input type='hidden' name='Id' id='Id'>
				</div>
				<div class='form-group'>
					<label for='Codigo'>Código</label>
					<input type='text' name='Codigo' id='Codigo' class='form-control' placeholder='Código' required>
				</div>
				<div class='form-group'>
					<label for='Versao'>Versão</label>
					<input type='text' name='Versao' id='Versao' class='form-control' placeholder='Versão' required>
				</div>
				<div class='form-group'>
					<label for='Leiaout'>Leiaout Instituído</label>
					<input type='text' name='Leiaout' id='Leiaout' class='form-control' placeholder='Leiaout Instituído' required>
				</div>
				<div class='form-group'>
					<label for='DtIni'>Data Inicial</label>
					<input type='date' name='DtIni' id='DtIni' class='form-control' placeholder='Data Inicial' required>
				</div>
				<div class='form-group'>
					<label for='DtFin'>Data Final</label>
					<input type='date' name='DtFin' id='DtFin' class='form-control' placeholder='Data Final' >
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

