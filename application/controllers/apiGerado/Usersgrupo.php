<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usersgrupo extends MY_Controller {

  public function  __construct() {
    parent::__construct();
    $this->table = 'usersgrupo';
    $this->nameId = 'GrupoUserId';
  }

  public function get($Id = '', $date = ''){
    parent::get($Id, $date);
  }
  
  public function setDefaultValue(){
    $_POST['Ativo'] = !isset($_POST['Ativo']) ? 'True' : $_POST['Ativo'];
		
  }

  public function create(){
    $this->form_validation->set_rules('Ativo', 'Ativo', 'required|in_list[True,False]');
		
    parent::create();
  }
  
  public function update($Id){
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
				<legend>usersgrupo</legend>
				<div class='form-group'>
					<label for='GrupoUserId'>GrupoUserId</label>
					<input type='' name='GrupoUserId' id='GrupoUserId' class='form-control' placeholder='GrupoUserId' required>
				</div>
				<div class='form-group'>
					<label for='UserId'>UserId</label>
					<input type='' name='UserId' id='UserId' class='form-control' placeholder='UserId' required>
				</div>
				<div class='form-group'>
					<label for='Ativo'>Ativo</label>
					<input type='hidden' name='Ativo' id='Ativo'>
				</div>
			</fieldset>
		</form>
	</div>
*/

