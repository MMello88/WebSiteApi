<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ref711 extends MY_Controller {

  public function  __construct() {
    parent::__construct();
    $this->table = 'ref711';
    $this->nameId = 'Id';
  }

  public function get($Id = '', $date = ''){
    parent::get($Id, $date);
  }
  
  public function setDefaultValue(){
    
  }

  public function create(){
    $this->form_validation->set_rules('Codigo', 'Codigo', 'required|max_length[30]');
		$this->form_validation->set_rules('Descricao', 'Descricao', 'required|max_length[255]');
		$this->form_validation->set_rules('DtIni', 'DtIni', 'required|valid_datetime');
		$this->form_validation->set_rules('DtFin', 'DtFin', 'valid_datetime');
		
    parent::create();
  }
  
  public function update($Id){
    $this->form_validation->set_rules('Codigo', 'Codigo', 'required|max_length[30]');
		$this->form_validation->set_rules('Descricao', 'Descricao', 'required|max_length[255]');
		$this->form_validation->set_rules('DtIni', 'DtIni', 'required|valid_datetime');
		$this->form_validation->set_rules('DtFin', 'DtFin', 'valid_datetime');
		
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
					<label for='Codigo'></label>
					<input type='text' name='Codigo' id='Codigo' class='form-control' placeholder='' required>
				</div>
				<div class='form-group'>
					<label for='Descricao'></label>
					<input type='text' name='Descricao' id='Descricao' class='form-control' placeholder='' required>
				</div>
				<div class='form-group'>
					<label for='DtIni'></label>
					<input type='datetime-local' name='DtIni' id='DtIni' class='form-control' placeholder='' required>
				</div>
				<div class='form-group'>
					<label for='DtFin'></label>
					<input type='datetime-local' name='DtFin' id='DtFin' class='form-control' placeholder='' >
				</div>
				<div class='form-group'>
					<label for='IndTipoAtividade'></label>
					<input type='text' name='IndTipoAtividade' id='IndTipoAtividade' class='form-control' placeholder='' >
				</div>
				<div class='form-group'>
					<label for='IndAjuste'></label>
					<input type='text' name='IndAjuste' id='IndAjuste' class='form-control' placeholder='' >
				</div>
				<div class='form-group'>
					<label for='Grupo'></label>
					<input type='text' name='Grupo' id='Grupo' class='form-control' placeholder='' >
				</div>
				<div class='form-group'>
					<label for='IndOutros'></label>
					<input type='text' name='IndOutros' id='IndOutros' class='form-control' placeholder='' >
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

