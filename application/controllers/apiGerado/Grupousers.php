<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Grupousers extends MY_Controller {

  public function  __construct() {
    parent::__construct();
    $this->table = 'grupousers';
    $this->nameId = 'Id';
  }

  public function get($Id = '', $date = ''){
    parent::get($Id, $date);
  }
  
  public function setDefaultValue(){
    $_POST['Ativo'] = !isset($_POST['Ativo']) ? 'True' : $_POST['Ativo'];
		
  }

  public function create(){
    $this->form_validation->set_rules('Nome', 'Nome', 'required|max_length[350]');
		$this->form_validation->set_rules('Ativo', 'Ativo', 'required|in_list[True,False]');
		
    parent::create();
  }
  
  public function update($Id){
    $this->form_validation->set_rules('Nome', 'Nome', 'required|max_length[350]');
		$this->form_validation->set_rules('Ativo', 'Ativo', 'required|in_list[True,False]');
		
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
				<legend>grupousers</legend>
				<div class='form-group'>
					<label for='Id'>Id</label>
					<input type='' name='Id' id='Id' class='form-control' placeholder='Id' required>
				</div>
				<div class='form-group'>
					<label for='Nome'>Nome</label>
					<input type='hidden' name='Nome' id='Nome'>
				</div>
				<div class='form-group'>
					<label for='Ativo'>Ativo</label>
					<input type='hidden' name='Ativo' id='Ativo'>
				</div>
			</fieldset>
		</form>
	</div>
*/

