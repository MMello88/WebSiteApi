<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Api_keys extends MY_Controller {

  public function  __construct() {
    parent::__construct();
    $this->table = 'api_keys';
    $this->nameId = 'id';
    $this->usersId = '';
  }

  public function get($Id = '', $date = ''){
    parent::get($Id, $date);
  }
  
  public function setDefaultValue(){
    
  }

  public function create(){
    $this->form_validation->set_rules('api_key', 'api_key', 'required|max_length[50]');
		$this->form_validation->set_rules('controller', 'controller', 'required|max_length[50]');
		$this->form_validation->set_rules('date_created', 'date_created', 'valid_date');
		$this->form_validation->set_rules('date_modified', 'date_modified', 'valid_date');
		
    parent::create();
  }
  
  public function update($Id){
    $this->form_validation->set_rules('api_key', 'api_key', 'required|max_length[50]');
		$this->form_validation->set_rules('controller', 'controller', 'required|max_length[50]');
		$this->form_validation->set_rules('date_created', 'date_created', 'valid_date');
		$this->form_validation->set_rules('date_modified', 'date_modified', 'valid_date');
		
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
				<legend>Key</legend>
				<div class='form-group'>
					<label for='id'>Identificador</label>
					<input type='hidden' name='id' id='id'>
				</div>
				<div class='form-group'>
					<label for='api_key'></label>
					<input type='text' name='api_key' id='api_key' class='form-control' placeholder='' required>
				</div>
				<div class='form-group'>
					<label for='controller'></label>
					<input type='text' name='controller' id='controller' class='form-control' placeholder='' required>
				</div>
				<div class='form-group'>
					<label for='date_created'></label>
					<input type='date' name='date_created' id='date_created' class='form-control' placeholder='' >
				</div>
				<div class='form-group'>
					<label for='date_modified'></label>
					<input type='date' name='date_modified' id='date_modified' class='form-control' placeholder='' >
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

