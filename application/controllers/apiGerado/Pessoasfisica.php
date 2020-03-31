<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pessoasfisica extends MY_Controller {

  public function  __construct() {
    parent::__construct();
    $this->table = 'pessoasfisica';
    $this->nameId = 'Id';
    $this->usersId = '';
    $this->joins = [
    ];
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
	<header class='page-title-bar'>
		<legend>Pessoa Fisica</legend>
	</header>
	<div class='page-section'>
		<div class='section-block'>
			<div class='card' id='floating-label'>
				<div class='card-body'>
					<?= form_open(base_url('pessoasfisica/')) ?>
						<fieldset>
							<input type='hidden' name='Id' id='Id'>
							<div class='form-group'>
								<label for='Nome'>Nome</label>
								<input type='text' name='Nome' id='Nome' class='form-control' placeholder='Nome' required>
								<?php if(isset($response)): ?>
									<div class='invalid-feedback' style='display:block'><?= isset($response->error->Nome) ? $response->error->Nome : ''; ?></div>
								<?php endif; ?>
							</div>
							<div class='form-group'>
								<label for='Sobrenome'>Sobrenome</label>
								<input type='text' name='Sobrenome' id='Sobrenome' class='form-control' placeholder='Sobrenome' required>
								<?php if(isset($response)): ?>
									<div class='invalid-feedback' style='display:block'><?= isset($response->error->Sobrenome) ? $response->error->Sobrenome : ''; ?></div>
								<?php endif; ?>
							</div>
							<div class='form-group'>
								<label for='DataNascimento'>Data Nascimento</label>
								<input type='date' name='DataNascimento' id='DataNascimento' class='form-control' placeholder='Data Nascimento' required>
								<?php if(isset($response)): ?>
									<div class='invalid-feedback' style='display:block'><?= isset($response->error->DataNascimento) ? $response->error->DataNascimento : ''; ?></div>
								<?php endif; ?>
							</div>
							<div class='form-group'>
								<label for='UrlFoto'>Foto Perfil</label>
								<input type='text' name='UrlFoto' id='UrlFoto' class='form-control' placeholder='Foto Perfil' >
								<?php if(isset($response)): ?>
									<div class='invalid-feedback' style='display:block'><?= isset($response->error->UrlFoto) ? $response->error->UrlFoto : ''; ?></div>
								<?php endif; ?>
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
								<label for='Criacao'></label>
								<input type='datetime-local' name='Criacao' id='Criacao' class='form-control' placeholder='' required>
								<?php if(isset($response)): ?>
									<div class='invalid-feedback' style='display:block'><?= isset($response->error->Criacao) ? $response->error->Criacao : ''; ?></div>
								<?php endif; ?>
							</div>
							<div class='form-actions'>
								<button class='btn btn-primary mr-auto' type='submit'>Salvar</button>
								<button class='btn btn-secondary ml-auto' type='submit'>Cancelar</button>
							</div>
					</fieldset>
					<?= form_close() ?>
				</div>
			</div>
		</div>
	</div>
*/

