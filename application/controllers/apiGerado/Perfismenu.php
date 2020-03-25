<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Perfismenu extends MY_Controller {

  public function  __construct() {
    parent::__construct();
    $this->table = 'perfismenu';
    $this->nameId = 'Id';
    $this->usersId = '';
  }

  public function get($Id = '', $date = ''){
    parent::get($Id, $date);
  }
  
  public function setDefaultValue(){
    
  }

  public function create(){
    $this->form_validation->set_rules('MenusId', 'MenusId', 'required|integer');
		$this->form_validation->set_rules('PerfisId', 'PerfisId', 'required|integer');
		
    parent::create();
  }
  
  public function update($Id){
    $this->form_validation->set_rules('MenusId', 'MenusId', 'required|integer');
		$this->form_validation->set_rules('PerfisId', 'PerfisId', 'required|integer');
		
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
				<legend>Menus do Perfil</legend>
				<div class='form-group'>
					<label for='Id'>Identificador</label>
					<input type='hidden' name='Id' id='Id'>
				</div>
				<div class='form-group'>
					<label for='MenusId'>Menu</label>
					<input type='number' name='MenusId' id='MenusId' class='form-control' placeholder='Menu' required>
				</div>
				<div class='form-group'>
					<label for='PerfisId'>Perfil</label>
					<input type='number' name='PerfisId' id='PerfisId' class='form-control' placeholder='Perfil' required>
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

