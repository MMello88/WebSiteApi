<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Api_keys extends MY_Controller {

  public function  __construct() {
    parent::__construct();
    $this->table = 'api_keys';
    $this->nameId = 'id';
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
				<legend>api_keys</legend>
				<div class='form-group'>
					<label for='id'>id</label>
					<input type='' name='id' id='id' class='form-control' placeholder='id' required>
				</div>
				<div class='form-group'>
					<label for='api_key'>api_key</label>
					<input type='hidden' name='api_key' id='api_key'>
				</div>
				<div class='form-group'>
					<label for='controller'>controller</label>
					<input type='hidden' name='controller' id='controller'>
				</div>
				<div class='form-group'>
					<label for='date_created'>date_created</label>
					<input type='hidden' name='date_created' id='date_created'>
				</div>
				<div class='form-group'>
					<label for='date_modified'>date_modified</label>
					<input type='hidden' name='date_modified' id='date_modified'>
				</div>
			</fieldset>
		</form>
	</div>
*/

