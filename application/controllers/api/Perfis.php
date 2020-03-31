<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Perfis extends MY_Controller {

  public function  __construct() {
    parent::__construct();
    $this->table = 'perfis';
    $this->nameId = 'Id';
    $this->usersId = '';
    $this->joins = [
    ];
  }

  public function get($Id = '', $date = ''){
    parent::get($Id, $date);
  }
  
  public function setDefaultValue(){
    $_POST['Ativo'] = !isset($_POST['Ativo']) ? 'True' : $_POST['Ativo'];
		
  }

  public function create(){
    $this->form_validation->set_rules('Nome', 'Nome', 'required|max_length[250]');
		$this->form_validation->set_rules('Ativo', 'Ativo', 'required|in_list[True,False]');
		$this->form_validation->set_rules('Descricao', 'Descricao', 'required|max_length[255]');
		$this->form_validation->set_rules('tag', 'tag', 'max_length[255]');
		$this->form_validation->set_rules('Imagem', 'Imagem', 'required');
		
    parent::create();
  }
  
  public function update($Id){
    $this->form_validation->set_rules('Nome', 'Nome', 'required|max_length[250]');
		$this->form_validation->set_rules('Ativo', 'Ativo', 'required|in_list[True,False]');
		$this->form_validation->set_rules('Descricao', 'Descricao', 'required|max_length[255]');
		$this->form_validation->set_rules('tag', 'tag', 'max_length[255]');
		$this->form_validation->set_rules('Imagem', 'Imagem', 'required');
		
    parent::update($Id);
  }

  public function delete($Id){
    parent::delete($Id);
  }
}

/*
	<header class='page-title-bar'>
		<legend>Perfil</legend>
	</header>
	<div class='page-section'>
		<div class='section-block'>
			<div class='card' id='floating-label'>
				<div class='card-body'>
					<?= form_open(base_url('perfis/')) ?>
						<fieldset>
							<input type='hidden' name='Id' id='Id'>
							<div class='form-group'>
								<label for='Nome'>Nome do Perfil</label>
								<input type='text' name='Nome' id='Nome' class='form-control' placeholder='Nome do Perfil' required>
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
								<label for='Descricao'>Descrição</label>
								<input type='text' name='Descricao' id='Descricao' class='form-control' placeholder='Descrição' required>
							</div>
							<div class='form-group'>
								<label for='tag'>Tags do Perfil</label>
								<input type='text' name='tag' id='tag' class='form-control' placeholder='Tags do Perfil' >
							</div>
							<div class='form-group'>
								<label for='Imagem'>Imagem</label>
								<input type='' name='Imagem' id='Imagem' class='form-control' placeholder='Imagem' required>
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

