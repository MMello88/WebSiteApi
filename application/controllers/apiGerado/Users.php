<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends MY_Controller {

  public function  __construct() {
    parent::__construct();
    $this->table = 'users';
    $this->nameId = 'Id';
  }

  public function get($Id = '', $date = ''){
    parent::get($Id, $date);
  }
  
  public function setDefaultValue(){
    $_POST['Ativo'] = !isset($_POST['Ativo']) ? 'True' : $_POST['Ativo'];
		$_POST['Criacao'] = !isset($_POST['Criacao']) ? date('Y-m-d H:i:s') : $_POST['Criacao'];
		
  }

  public function create(){
    $this->form_validation->set_rules('Nome', 'Nome', 'required|max_length[350]');
		$this->form_validation->set_rules('Sobrenome', 'Sobrenome', 'required|max_length[250]');
		$this->form_validation->set_rules('DataNascimento', 'DataNascimento', 'required|valid_date');
		$this->form_validation->set_rules('UrlFoto', 'UrlFoto', '');
		$this->form_validation->set_rules('Ativo', 'Ativo', 'required|in_list[True,False]');
		$this->form_validation->set_rules('Criacao', 'Criacao', 'required|valid_datetime');
		$this->form_validation->set_rules('Usuario', 'Usuario', 'required|max_length[250]');
		$this->form_validation->set_rules('Email', 'Email', 'required|max_length[250]');
		$this->form_validation->set_rules('Senha', 'Senha', 'required|max_length[64]');
		
    parent::create();
  }
  
  public function update($Id){
    $this->form_validation->set_rules('Nome', 'Nome', 'required|max_length[350]');
		$this->form_validation->set_rules('Sobrenome', 'Sobrenome', 'required|max_length[250]');
		$this->form_validation->set_rules('DataNascimento', 'DataNascimento', 'required|valid_date');
		$this->form_validation->set_rules('UrlFoto', 'UrlFoto', '');
		$this->form_validation->set_rules('Ativo', 'Ativo', 'required|in_list[True,False]');
		$this->form_validation->set_rules('Criacao', 'Criacao', 'required|valid_datetime');
		$this->form_validation->set_rules('Usuario', 'Usuario', 'required|max_length[250]');
		$this->form_validation->set_rules('Email', 'Email', 'required|max_length[250]');
		$this->form_validation->set_rules('Senha', 'Senha', 'required|max_length[64]');
		
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
				<legend>users</legend>
				<div class='form-group'>
					<label for='Id'>Id</label>
					<input type='' name='Id' id='Id' class='form-control' placeholder='Id' required>
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
					<label for='DataNascimento'>DataNascimento</label>
					<input type='hidden' name='DataNascimento' id='DataNascimento'>
				</div>
				<div class='form-group'>
					<label for='UrlFoto'>UrlFoto</label>
					<input type='hidden' name='UrlFoto' id='UrlFoto'>
				</div>
				<div class='form-group'>
					<label for='Ativo'>Ativo</label>
					<input type='hidden' name='Ativo' id='Ativo'>
				</div>
				<div class='form-group'>
					<label for='Criacao'>Criacao</label>
					<input type='hidden' name='Criacao' id='Criacao'>
				</div>
				<div class='form-group'>
					<label for='Usuario'>Usuario</label>
					<input type='hidden' name='Usuario' id='Usuario'>
				</div>
				<div class='form-group'>
					<label for='Email'>Email</label>
					<input type='hidden' name='Email' id='Email'>
				</div>
				<div class='form-group'>
					<label for='Senha'>Senha</label>
					<input type='hidden' name='Senha' id='Senha'>
				</div>
			</fieldset>
		</form>
	</div>
*/

