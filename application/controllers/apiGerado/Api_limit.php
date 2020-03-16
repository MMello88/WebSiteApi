<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Api_limit extends MY_Controller {

  public function  __construct() {
    parent::__construct();
    $this->table = 'api_limit';
    $this->nameId = 'id';
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
					<input type='' name='id' id='id' class='form-control' placeholder='Identificador' required>
				</div>
				<div class='form-group'>
					<label for='uri'></label>
					<input type='hidden' name='uri' id='uri'>
				</div>
				<div class='form-group'>
					<label for='class'></label>
					<input type='hidden' name='class' id='class'>
				</div>
				<div class='form-group'>
					<label for='method'></label>
					<input type='hidden' name='method' id='method'>
				</div>
				<div class='form-group'>
					<label for='ip_address'></label>
					<input type='hidden' name='ip_address' id='ip_address'>
				</div>
				<div class='form-group'>
					<label for='time'></label>
					<input type='hidden' name='time' id='time'>
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

