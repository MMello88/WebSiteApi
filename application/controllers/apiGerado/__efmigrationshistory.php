<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class __efmigrationshistory extends MY_Controller {

  public function  __construct() {
    parent::__construct();
    $this->table = '__efmigrationshistory';
    $this->nameId = 'MigrationId';
  }

  public function get($Id = '', $date = ''){
    parent::get($Id, $date);
  }
  
  public function setDefaultValue(){
    
  }

  public function create(){
    $this->form_validation->set_rules('ProductVersion', 'ProductVersion', 'required|max_length[32]');
		
    parent::create();
  }
  
  public function update($Id){
    $this->form_validation->set_rules('ProductVersion', 'ProductVersion', 'required|max_length[32]');
		
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
					<label for='MigrationId'></label>
					<input type='hidden' name='MigrationId' id='MigrationId'>
				</div>
				<div class='form-group'>
					<label for='ProductVersion'></label>
					<input type='text' name='ProductVersion' id='ProductVersion' class='form-control' placeholder='' required>
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

