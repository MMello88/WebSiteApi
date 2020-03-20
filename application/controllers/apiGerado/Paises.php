<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Paises extends MY_Controller {

  public function  __construct() {
    parent::__construct();
    $this->table = 'paises';
    $this->nameId = 'Id';
  }

  public function get($Id = '', $date = ''){
    parent::get($Id, $date);
  }
  
  public function setDefaultValue(){
    
  }

  public function create(){
    $this->form_validation->set_rules('CdPais', 'CdPais', 'required|max_length[5]');
		$this->form_validation->set_rules('Nome', 'Nome', 'required|max_length[150]');
		
    parent::create();
  }
  
  public function update($Id){
    $this->form_validation->set_rules('CdPais', 'CdPais', 'required|max_length[5]');
		$this->form_validation->set_rules('Nome', 'Nome', 'required|max_length[150]');
		
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
					<label for='CdPais'></label>
					<input type='text' name='CdPais' id='CdPais' class='form-control' placeholder='' required>
				</div>
				<div class='form-group'>
					<label for='Nome'></label>
					<input type='text' name='Nome' id='Nome' class='form-control' placeholder='' required>
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

