<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Api_limit extends MY_Controller {

  public function  __construct() {
    parent::__construct();
    $this->table = 'api_limit';
    $this->nameId = 'id';
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
    $this->form_validation->set_rules('uri', 'uri', 'required|max_length[200]');
		$this->form_validation->set_rules('class', 'class', 'required|max_length[200]');
		$this->form_validation->set_rules('method', 'method', 'required|max_length[200]');
		$this->form_validation->set_rules('ip_address', 'ip_address', 'required|max_length[50]');
		$this->form_validation->set_rules('time', 'time', 'required');
		
    parent::create();
  }
  
  public function update($Id){
    $this->form_validation->set_rules('uri', 'uri', 'required|max_length[200]');
		$this->form_validation->set_rules('class', 'class', 'required|max_length[200]');
		$this->form_validation->set_rules('method', 'method', 'required|max_length[200]');
		$this->form_validation->set_rules('ip_address', 'ip_address', 'required|max_length[50]');
		$this->form_validation->set_rules('time', 'time', 'required');
		
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
				<legend>Limit</legend>
				<div class='form-group'>
					<label for='id'>Identificador</label>
					<input type='hidden' name='id' id='id'>
				</div>
				<div class='form-group'>
					<label for='uri'></label>
					<input type='text' name='uri' id='uri' class='form-control' placeholder='' required>
				</div>
				<div class='form-group'>
					<label for='class'></label>
					<input type='text' name='class' id='class' class='form-control' placeholder='' required>
				</div>
				<div class='form-group'>
					<label for='method'></label>
					<input type='text' name='method' id='method' class='form-control' placeholder='' required>
				</div>
				<div class='form-group'>
					<label for='ip_address'></label>
					<input type='text' name='ip_address' id='ip_address' class='form-control' placeholder='' required>
				</div>
				<div class='form-group'>
					<label for='time'></label>
					<input type='' name='time' id='time' class='form-control' placeholder='' required>
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

