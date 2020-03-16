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
					<input type='' name='Id' id='Id' class='form-control' placeholder='Identificador' required>
				</div>
				<div class='form-group'>
					<label for='Nome'>Nome</label>
					<input type='hidden' name='Nome' id='Nome'>
				</div>
				<div class='form-group'>
					<label for='Valor'></label>
					<input type='hidden' name='Valor' id='Valor'>
				</div>
				<div class='form-group'>
					<label for='Desconto'></label>
					<input type='hidden' name='Desconto' id='Desconto'>
				</div>
				<div class='form-group'>
					<label for='Total'></label>
					<input type='hidden' name='Total' id='Total'>
				</div>
				<div class='form-group'>
					<label for='VlIcms'></label>
					<input type='hidden' name='VlIcms' id='VlIcms'>
				</div>
				<div class='form-group'>
					<label for='Periodo'></label>
					<input type='hidden' name='Periodo' id='Periodo'>
				</div>
				<div class='form-group'>
					<label for='Tipo'></label>
					<input type='hidden' name='Tipo' id='Tipo'>
				</div>
				<div class='form-group'>
					<label for='Ativo'>Ativo</label>
					<input type='hidden' name='Ativo' id='Ativo'>
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

