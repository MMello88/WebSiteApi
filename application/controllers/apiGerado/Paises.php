<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Paises extends MY_Controller {

  public function  __construct() {
    parent::__construct();
    $this->table = 'paises';
    $this->nameId = 'Id';
    $this->usersId = '';
    $this->joins = [
    ];
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
				<legend>Paises</legend>
				<div class='form-group'>
					<label for='Id'>Identificador</label>
					<input type='hidden' name='Id' id='Id'>
				</div>
				<div class='form-group'>
					<label for='CdPais'>Cód. País</label>
					<input type='text' name='CdPais' id='CdPais' class='form-control' placeholder='Cód. País' required>
				</div>
				<div class='form-group'>
					<label for='Nome'>Nome</label>
					<input type='text' name='Nome' id='Nome' class='form-control' placeholder='Nome' required>
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

