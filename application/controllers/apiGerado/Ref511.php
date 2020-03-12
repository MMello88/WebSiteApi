<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ref511 extends MY_Controller {

  public function  __construct() {
    parent::__construct();
    $this->table = 'ref511';
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
		$this->form_validation->set_rules('IndNcmAtividade', 'IndNcmAtividade', '');
		$this->form_validation->set_rules('AliqAtividade', 'AliqAtividade', 'numeric');
		
    parent::create();
  }
  
  public function update($Id){
    $this->form_validation->set_rules('Codigo', 'Codigo', 'required|max_length[30]');
		$this->form_validation->set_rules('Descricao', 'Descricao', 'required|max_length[255]');
		$this->form_validation->set_rules('DtIni', 'DtIni', 'required|valid_date');
		$this->form_validation->set_rules('DtFin', 'DtFin', 'valid_date');
		$this->form_validation->set_rules('IndNcmAtividade', 'IndNcmAtividade', '');
		$this->form_validation->set_rules('AliqAtividade', 'AliqAtividade', 'numeric');
		
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
				<legend>ref511</legend>
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
					<label for='IndNcmAtividade'>IndNcmAtividade</label>
					<input type='hidden' name='IndNcmAtividade' id='IndNcmAtividade'>
				</div>
				<div class='form-group'>
					<label for='AliqAtividade'>AliqAtividade</label>
					<input type='hidden' name='AliqAtividade' id='AliqAtividade'>
				</div>
			</fieldset>
		</form>
	</div>
*/

