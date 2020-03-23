<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ref4310 extends MY_Controller {

  public function  __construct() {
    parent::__construct();
    $this->table = 'ref4310';
    $this->nameId = 'Id';
  }

  public function get($Id = '', $date = ''){
    parent::get($Id, $date);
  }
  
  public function setDefaultValue(){
    
  }

  public function create(){
    $this->form_validation->set_rules('Codigo', 'Codigo', 'required|max_length[30]');
		$this->form_validation->set_rules('Descricao', 'Descricao', 'required|max_length[255]');
		$this->form_validation->set_rules('DtIni', 'DtIni', 'required|valid_date');
		$this->form_validation->set_rules('DtFin', 'DtFin', 'valid_date');
		$this->form_validation->set_rules('Ncm', 'Ncm', 'required');
		$this->form_validation->set_rules('AliqPis', 'AliqPis', 'required|numeric');
		$this->form_validation->set_rules('AliqCofins', 'AliqCofins', 'required|numeric');
		
    parent::create();
  }
  
  public function update($Id){
    $this->form_validation->set_rules('Codigo', 'Codigo', 'required|max_length[30]');
		$this->form_validation->set_rules('Descricao', 'Descricao', 'required|max_length[255]');
		$this->form_validation->set_rules('DtIni', 'DtIni', 'required|valid_date');
		$this->form_validation->set_rules('DtFin', 'DtFin', 'valid_date');
		$this->form_validation->set_rules('Ncm', 'Ncm', 'required');
		$this->form_validation->set_rules('AliqPis', 'AliqPis', 'required|numeric');
		$this->form_validation->set_rules('AliqCofins', 'AliqCofins', 'required|numeric');
		
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
				<legend>Produtos Sujeitos a Alíquotas Diferenciadas</legend>
				<div class='form-group'>
					<label for='Id'>Identificador</label>
					<input type='hidden' name='Id' id='Id'>
				</div>
				<div class='form-group'>
					<label for='Codigo'>Código</label>
					<input type='text' name='Codigo' id='Codigo' class='form-control' placeholder='Código' required>
				</div>
				<div class='form-group'>
					<label for='Descricao'>Descrição</label>
					<input type='text' name='Descricao' id='Descricao' class='form-control' placeholder='Descrição' required>
				</div>
				<div class='form-group'>
					<label for='DtIni'>Data Inicial</label>
					<input type='date' name='DtIni' id='DtIni' class='form-control' placeholder='Data Inicial' required>
				</div>
				<div class='form-group'>
					<label for='DtFin'>Data Final</label>
					<input type='date' name='DtFin' id='DtFin' class='form-control' placeholder='Data Final' >
				</div>
				<div class='form-group'>
					<label for='Ncm'>NCM</label>
					<input type='text' name='Ncm' id='Ncm' class='form-control' placeholder='NCM' required>
				</div>
				<div class='form-group'>
					<label for='NcmEx'>Exceto NCM</label>
					<input type='text' name='NcmEx' id='NcmEx' class='form-control' placeholder='Exceto NCM' >
				</div>
				<div class='form-group'>
					<label for='ExIpi'>Código EX TIPI</label>
					<input type='text' name='ExIpi' id='ExIpi' class='form-control' placeholder='Código EX TIPI' >
				</div>
				<div class='form-group'>
					<label for='AliqPis'>Alíquota do PIS %</label>
					<input type='number' name='AliqPis' id='AliqPis' class='form-control' placeholder='Alíquota do PIS %' required>
				</div>
				<div class='form-group'>
					<label for='AliqCofins'>Alíquota da COFINS %</label>
					<input type='number' name='AliqCofins' id='AliqCofins' class='form-control' placeholder='Alíquota da COFINS %' required>
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

