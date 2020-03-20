<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pessoasfisica extends MY_Controller {

  public function  __construct() {
    parent::__construct();
    $this->table = 'pessoasfisica';
    $this->nameId = 'Id';
  }

  public function get($Id = '', $date = ''){
    parent::get($Id, $date);
  }
  
  public function setDefaultValue(){
    $_POST['Ativo'] = !isset($_POST['Ativo']) ? 'True' : $_POST['Ativo'];
		
  }

  public function create(){
    $this->form_validation->set_rules('Nome', 'Nome', 'required|max_length[250]');
		$this->form_validation->set_rules('Sobrenome', 'Sobrenome', 'required|max_length[300]');
		$this->form_validation->set_rules('DataNascimento', 'DataNascimento', 'required|valid_datetime');
		$this->form_validation->set_rules('UrlFoto', 'UrlFoto', 'max_length[150]');
		$this->form_validation->set_rules('Ativo', 'Ativo', 'required|in_list[True,False]');
		$this->form_validation->set_rules('Criacao', 'Criacao', 'required|valid_datetime');
		
    parent::create();
  }
  
  public function update($Id){
    $this->form_validation->set_rules('Nome', 'Nome', 'required|max_length[250]');
		$this->form_validation->set_rules('Sobrenome', 'Sobrenome', 'required|max_length[300]');
		$this->form_validation->set_rules('DataNascimento', 'DataNascimento', 'required|valid_datetime');
		$this->form_validation->set_rules('UrlFoto', 'UrlFoto', 'max_length[150]');
		$this->form_validation->set_rules('Ativo', 'Ativo', 'required|in_list[True,False]');
		$this->form_validation->set_rules('Criacao', 'Criacao', 'required|valid_datetime');
		
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
				<legend></legend>
				<div class='form-group'>
					<label for='Id'></label>
					<input type='hidden' name='Id' id='Id'>
				</div>
				<div class='form-group'>
					<label for='Nome'></label>
					<input type='text' name='Nome' id='Nome' class='form-control' placeholder='' required>
				</div>
				<div class='form-group'>
					<label for='Sobrenome'></label>
					<input type='text' name='Sobrenome' id='Sobrenome' class='form-control' placeholder='' required>
				</div>
				<div class='form-group'>
					<label for='DataNascimento'></label>
					<input type='datetime-local' name='DataNascimento' id='DataNascimento' class='form-control' placeholder='' required>
				</div>
				<div class='form-group'>
					<label for='UrlFoto'></label>
					<input type='text' name='UrlFoto' id='UrlFoto' class='form-control' placeholder='' >
				</div>
				<div class='form-group'>
					<label for='Ativo'></label>
					<select name='Ativo' id='Ativo' class='custom-select' placeholder='' required>
						<option value=''> Selecione </option>
						<option value='True'> True </option>
						<option value='False'> False </option>
					</select>
				</div>
				<div class='form-group'>
					<label for='Criacao'></label>
					<input type='datetime-local' name='Criacao' id='Criacao' class='form-control' placeholder='' required>
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

