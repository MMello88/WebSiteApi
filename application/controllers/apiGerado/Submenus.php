<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Submenus extends MY_Controller {

  public function  __construct() {
    parent::__construct();
    $this->table = 'submenus';
    $this->nameId = 'Id';
    $this->usersId = '';
  }

  public function get($Id = '', $date = ''){
    parent::get($Id, $date);
  }
  
  public function setDefaultValue(){
    $_POST['Ativo'] = !isset($_POST['Ativo']) ? 'True' : $_POST['Ativo'];
		
  }

  public function create(){
    $this->form_validation->set_rules('MenusId', 'MenusId', 'required|integer');
		$this->form_validation->set_rules('Nome', 'Nome', 'required|max_length[250]');
		$this->form_validation->set_rules('Ativo', 'Ativo', 'required|in_list[True,False]');
		$this->form_validation->set_rules('Url', 'Url', 'required');
		
    parent::create();
  }
  
  public function update($Id){
    $this->form_validation->set_rules('MenusId', 'MenusId', 'required|integer');
		$this->form_validation->set_rules('Nome', 'Nome', 'required|max_length[250]');
		$this->form_validation->set_rules('Ativo', 'Ativo', 'required|in_list[True,False]');
		$this->form_validation->set_rules('Url', 'Url', 'required');
		
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
				<legend>Submenus</legend>
				<div class='form-group'>
					<label for='Id'>Identificador</label>
					<input type='hidden' name='Id' id='Id'>
				</div>
				<div class='form-group'>
					<label for='MenusId'>Menu</label>
					<input type='number' name='MenusId' id='MenusId' class='form-control' placeholder='Menu' required>
				</div>
				<div class='form-group'>
					<label for='Nome'>Nome do Submenu</label>
					<input type='text' name='Nome' id='Nome' class='form-control' placeholder='Nome do Submenu' required>
				</div>
				<div class='form-group'>
					<label for='Ativo'>Ativo</label>
					<select name='Ativo' id='Ativo' class='custom-select' placeholder='Ativo' required>
						<option value=''> Selecione </option>
						<option value='True'> True </option>
						<option value='False'> False </option>
					</select>
				</div>
				<div class='form-group'>
					<label for='Icone'>Icone</label>
					<input type='' name='Icone' id='Icone' class='form-control' placeholder='Icone' >
				</div>
				<div class='form-group'>
					<label for='Url'>Url</label>
					<input type='' name='Url' id='Url' class='form-control' placeholder='Url' required>
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

