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
    $_POST['Criacao'] = !isset($_POST['Criacao']) ? date('Y-m-d H:i:s') : $_POST['Criacao'];
		
  }

  public function create(){
    $this->form_validation->set_rules('Nome', 'Nome', 'required|max_length[250]');
		$this->form_validation->set_rules('Sobrenome', 'Sobrenome', 'required|max_length[300]');
		$this->form_validation->set_rules('DataNascimento', 'DataNascimento', 'required|valid_date');
		$this->form_validation->set_rules('UrlFoto', 'UrlFoto', 'max_length[150]');
		$this->form_validation->set_rules('Ativo', 'Ativo', 'required|in_list[True,False]');
		$this->form_validation->set_rules('Criacao', 'Criacao', 'required|valid_datetime');
		
    parent::create();
  }
  
  public function update($Id){
    $this->form_validation->set_rules('Nome', 'Nome', 'required|max_length[250]');
		$this->form_validation->set_rules('Sobrenome', 'Sobrenome', 'required|max_length[300]');
		$this->form_validation->set_rules('DataNascimento', 'DataNascimento', 'required|valid_date');
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
				<legend>Pessoa Fisica</legend>
				<div class='form-group'>
					<label for='Id'>Identificador</label>
					<input type='' name='Id' id='Id' class='form-control' placeholder='Identificador' required>
				</div>
				<div class='form-group'>
					<label for='Nome'>Nome</label>
					<input type='hidden' name='Nome' id='Nome'>
				</div>
				<div class='form-group'>
					<label for='Sobrenome'>Sobrenome</label>
					<input type='hidden' name='Sobrenome' id='Sobrenome'>
				</div>
				<div class='form-group'>
					<label for='DataNascimento'>Data Nascimento</label>
					<input type='hidden' name='DataNascimento' id='DataNascimento'>
				</div>
				<div class='form-group'>
					<label for='UrlFoto'>Foto Perfil</label>
					<input type='hidden' name='UrlFoto' id='UrlFoto'>
				</div>
				<div class='form-group'>
					<label for='Ativo'>Ativo</label>
					<input type='hidden' name='Ativo' id='Ativo'>
				</div>
				<div class='form-group'>
					<label for='Criacao'></label>
					<input type='hidden' name='Criacao' id='Criacao'>
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

