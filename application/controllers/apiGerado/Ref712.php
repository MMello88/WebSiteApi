<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ref712 extends MY_Controller {

  public function  __construct() {
    parent::__construct();
    $this->table = 'ref712';
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
		$this->form_validation->set_rules('IndTipoAtividade', 'IndTipoAtividade', '');
		$this->form_validation->set_rules('IndAjuste', 'IndAjuste', '');
		$this->form_validation->set_rules('Grupo', 'Grupo', '');
		$this->form_validation->set_rules('IndOutros', 'IndOutros', '');
		$this->form_validation->set_rules('IndTipoDeducoes', 'IndTipoDeducoes', '');
		
    parent::create();
  }
  
  public function update($Id){
    $this->form_validation->set_rules('Codigo', 'Codigo', 'required|max_length[30]');
		$this->form_validation->set_rules('Descricao', 'Descricao', 'required|max_length[255]');
		$this->form_validation->set_rules('DtIni', 'DtIni', 'required|valid_date');
		$this->form_validation->set_rules('DtFin', 'DtFin', 'valid_date');
		$this->form_validation->set_rules('IndTipoAtividade', 'IndTipoAtividade', '');
		$this->form_validation->set_rules('IndAjuste', 'IndAjuste', '');
		$this->form_validation->set_rules('Grupo', 'Grupo', '');
		$this->form_validation->set_rules('IndOutros', 'IndOutros', '');
		$this->form_validation->set_rules('IndTipoDeducoes', 'IndTipoDeducoes', '');
		
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
				<legend>ref712</legend>
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
					<label for='IndTipoAtividade'>IndTipoAtividade</label>
					<input type='hidden' name='IndTipoAtividade' id='IndTipoAtividade'>
				</div>
				<div class='form-group'>
					<label for='IndAjuste'>IndAjuste</label>
					<input type='hidden' name='IndAjuste' id='IndAjuste'>
				</div>
				<div class='form-group'>
					<label for='Grupo'>Grupo</label>
					<input type='hidden' name='Grupo' id='Grupo'>
				</div>
				<div class='form-group'>
					<label for='IndOutros'>IndOutros</label>
					<input type='hidden' name='IndOutros' id='IndOutros'>
				</div>
				<div class='form-group'>
					<label for='IndTipoDeducoes'>IndTipoDeducoes</label>
					<input type='hidden' name='IndTipoDeducoes' id='IndTipoDeducoes'>
				</div>
			</fieldset>
		</form>
	</div>
*/

