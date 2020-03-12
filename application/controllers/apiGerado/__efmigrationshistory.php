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
				<legend>__efmigrationshistory</legend>
				<div class='form-group'>
					<label for='MigrationId'>MigrationId</label>
					<input type='' name='MigrationId' id='MigrationId' class='form-control' placeholder='MigrationId' required>
				</div>
				<div class='form-group'>
					<label for='ProductVersion'>ProductVersion</label>
					<input type='hidden' name='ProductVersion' id='ProductVersion'>
				</div>
			</fieldset>
		</form>
	</div>
*/

