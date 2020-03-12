<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Municipios extends MY_Controller {

  public function  __construct() {
    parent::__construct();
    $this->table = 'municipios';
    $this->nameId = 'Id';
  }

  public function get($Id = '', $date = ''){
    parent::get($Id, $date);
  }
  
  public function setDefaultValue(){
    
  }

  public function create(){
    $this->form_validation->set_rules('CdMunicipio', 'CdMunicipio', 'required|max_length[7]');
		$this->form_validation->set_rules('Nome', 'Nome', 'required|max_length[150]');
		$this->form_validation->set_rules('Uf', 'Uf', 'required|max_length[2]');
		
    parent::create();
  }
  
  public function update($Id){
    $this->form_validation->set_rules('CdMunicipio', 'CdMunicipio', 'required|max_length[7]');
		$this->form_validation->set_rules('Nome', 'Nome', 'required|max_length[150]');
		$this->form_validation->set_rules('Uf', 'Uf', 'required|max_length[2]');
		
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
				<legend>municipios</legend>
				<div class='form-group'>
					<label for='Id'>Id</label>
					<input type='' name='Id' id='Id' class='form-control' placeholder='Id' required>
				</div>
				<div class='form-group'>
					<label for='CdMunicipio'>CdMunicipio</label>
					<input type='hidden' name='CdMunicipio' id='CdMunicipio'>
				</div>
				<div class='form-group'>
					<label for='Nome'>Nome</label>
					<input type='hidden' name='Nome' id='Nome'>
				</div>
				<div class='form-group'>
					<label for='Uf'>Uf</label>
					<input type='hidden' name='Uf' id='Uf'>
				</div>
			</fieldset>
		</form>
	</div>
*/

