<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ref4315 extends MY_Controller {

  public function  __construct() {
    parent::__construct();
    $this->table = 'ref4315';
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
		$this->form_validation->set_rules('DtIni', 'DtIni', 'required|valid_date');
		$this->form_validation->set_rules('DtFin', 'DtFin', 'valid_date');
		$this->form_validation->set_rules('Ncm', 'Ncm', 'required');
		$this->form_validation->set_rules('NcmEx', 'NcmEx', '');
		$this->form_validation->set_rules('ExIpi', 'ExIpi', '');
		
    parent::create();
  }
  
  public function update($Id){
    $this->form_validation->set_rules('Codigo', 'Codigo', 'required|max_length[30]');
		$this->form_validation->set_rules('Descricao', 'Descricao', 'required|max_length[255]');
		$this->form_validation->set_rules('DtIni', 'DtIni', 'required|valid_date');
		$this->form_validation->set_rules('DtFin', 'DtFin', 'valid_date');
		$this->form_validation->set_rules('Ncm', 'Ncm', 'required');
		$this->form_validation->set_rules('NcmEx', 'NcmEx', '');
		$this->form_validation->set_rules('ExIpi', 'ExIpi', '');
		
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
				<legend>ref4315</legend>
				<div class='form-group'>
					<label for='Id'>Id</label>
					<input type='' name='Id' id='Id' class='form-control' placeholder='Id' required>
				</div>
				<div class='form-group'>
					<label for='Codigo'>Codigo</label>
					<input type='hidden' name='Codigo' id='Codigo'>
				</div>
				<div class='form-group'>
					<label for='Descricao'>Descricao</label>
					<input type='hidden' name='Descricao' id='Descricao'>
				</div>
				<div class='form-group'>
					<label for='DtIni'>DtIni</label>
					<input type='hidden' name='DtIni' id='DtIni'>
				</div>
				<div class='form-group'>
					<label for='DtFin'>DtFin</label>
					<input type='hidden' name='DtFin' id='DtFin'>
				</div>
				<div class='form-group'>
					<label for='Ncm'>Ncm</label>
					<input type='hidden' name='Ncm' id='Ncm'>
				</div>
				<div class='form-group'>
					<label for='NcmEx'>NcmEx</label>
					<input type='hidden' name='NcmEx' id='NcmEx'>
				</div>
				<div class='form-group'>
					<label for='ExIpi'>ExIpi</label>
					<input type='hidden' name='ExIpi' id='ExIpi'>
				</div>
			</fieldset>
		</form>
	</div>
*/

