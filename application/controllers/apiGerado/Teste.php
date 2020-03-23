<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Teste extends MY_Controller {

  public function  __construct() {
    parent::__construct();
    $this->table = 'teste';
    $this->nameId = 'Id';
  }

  public function get($Id = '', $date = ''){
    parent::get($Id, $date);
  }
  
  public function setDefaultValue(){
    $_POST['Desconto'] = !isset($_POST['Desconto']) ? '0.00' : $_POST['Desconto'];
		
  }

  public function create(){
    $this->form_validation->set_rules('Nome', 'Nome', 'required|max_length[150]');
		$this->form_validation->set_rules('Valor', 'Valor', 'required|numeric');
		$this->form_validation->set_rules('Desconto', 'Desconto', 'decimal');
		$this->form_validation->set_rules('Total', 'Total', 'numeric');
		$this->form_validation->set_rules('VlIcms', 'VlIcms', 'decimal');
		$this->form_validation->set_rules('Periodo', 'Periodo', 'valid_datetime');
		$this->form_validation->set_rules('Tipo', 'Tipo', 'in_list[masculino,feminino,trans,gay]');
		$this->form_validation->set_rules('Ativo', 'Ativo', 'max_length[1]');
		
    parent::create();
  }
  
  public function update($Id){
    $this->form_validation->set_rules('Nome', 'Nome', 'required|max_length[150]');
		$this->form_validation->set_rules('Valor', 'Valor', 'required|numeric');
		$this->form_validation->set_rules('Desconto', 'Desconto', 'decimal');
		$this->form_validation->set_rules('Total', 'Total', 'numeric');
		$this->form_validation->set_rules('VlIcms', 'VlIcms', 'decimal');
		$this->form_validation->set_rules('Periodo', 'Periodo', 'valid_datetime');
		$this->form_validation->set_rules('Tipo', 'Tipo', 'in_list[masculino,feminino,trans,gay]');
		$this->form_validation->set_rules('Ativo', 'Ativo', 'max_length[1]');
		
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
				<legend>Tabela de Teste</legend>
				<div class='form-group'>
					<label for='Id'>Identificador</label>
					<input type='hidden' name='Id' id='Id'>
				</div>
				<div class='form-group'>
					<label for='Nome'>Nome</label>
					<input type='text' name='Nome' id='Nome' class='form-control' placeholder='Nome' required>
				</div>
				<div class='form-group'>
					<label for='Valor'></label>
					<input type='number' name='Valor' id='Valor' class='form-control' placeholder='' required>
				</div>
				<div class='form-group'>
					<label for='Desconto'></label>
					<input type='' name='Desconto' id='Desconto' class='form-control' placeholder='' >
				</div>
				<div class='form-group'>
					<label for='Total'></label>
					<input type='' name='Total' id='Total' class='form-control' placeholder='' >
				</div>
				<div class='form-group'>
					<label for='VlIcms'></label>
					<input type='' name='VlIcms' id='VlIcms' class='form-control' placeholder='' >
				</div>
				<div class='form-group'>
					<label for='Periodo'></label>
					<input type='datetime-local' name='Periodo' id='Periodo' class='form-control' placeholder='' >
				</div>
				<div class='form-group'>
					<label for='Tipo'></label>
					<select name='Tipo' id='Tipo' class='custom-select' placeholder='' >
						<option value=''> Selecione </option>
						<option value='masculino'> masculino </option>
						<option value='feminino'> feminino </option>
						<option value='trans'> trans </option>
						<option value='gay'> gay </option>
					</select>
				</div>
				<div class='form-group'>
					<label for='Ativo'>Ativo</label>
					<input type='' name='Ativo' id='Ativo' class='form-control' placeholder='Ativo' >
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

