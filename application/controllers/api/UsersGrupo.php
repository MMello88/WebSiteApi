<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usersgrupo extends MY_Controller {

  public function  __construct() {
    parent::__construct();
    $this->table = 'usersgrupo';
    $this->nameId = 'GrupoUserId';
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
				<legend>Grupo de Usuário</legend>
				<div class='form-group'>
					<label for='GrupoUserId'></label>
					<input type='hidden' name='GrupoUserId' id='GrupoUserId'>
				</div>
				<div class='form-group'>
					<label for='UsersId'>Usuário</label>
					<input type='hidden' name='UsersId' id='UsersId'>
				</div>
				<div class='form-group'>
					<label for='Ativo'>Ativo</label>
					<select name='Ativo' id='Ativo' class='custom-select' placeholder='Ativo' required>
						<option value=''> Selecione </option>
						<option value='True'> True </option>
						<option value='False'> False </option>
					</select>
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

