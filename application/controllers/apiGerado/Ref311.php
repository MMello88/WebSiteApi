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
				<legend>ref311</legend>
				<div class='form-group'>
					<label for='Id'>Id</label>
					<input type='' name='Id' id='Id' class='form-control' placeholder='Id' required>
				</div>
				<div class='form-group'>
					<label for='Codigo'>Codigo</label>
					<input type='hidden' name='Codigo' id='Codigo'>
				</div>
				<div class='form-group'>
					<label for='Versao'>Versao</label>
					<input type='hidden' name='Versao' id='Versao'>
				</div>
				<div class='form-group'>
					<label for='Leiaout'>Leiaout</label>
					<input type='hidden' name='Leiaout' id='Leiaout'>
				</div>
				<div class='form-group'>
					<label for='DtIni'>DtIni</label>
					<input type='hidden' name='DtIni' id='DtIni'>
				</div>
				<div class='form-group'>
					<label for='DtFin'>DtFin</label>
					<input type='hidden' name='DtFin' id='DtFin'>
				</div>
			</fieldset>
		</form>
	</div>
*/

