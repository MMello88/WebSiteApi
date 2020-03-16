<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ref4312 extends MY_Controller {

  public function  __construct() {
    parent::__construct();
    $this->table = 'ref4312';
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
		$this->form_validation->set_rules('AliqPis', 'AliqPis', 'numeric');
		$this->form_validation->set_rules('AliqCofins', 'AliqCofins', 'numeric');
		
    parent::create();
  }
  
  public function update($Id){
    $this->form_validation->set_rules('Codigo', 'Codigo', 'required|max_length[30]');
		$this->form_validation->set_rules('Descricao', 'Descricao', 'required|max_length[255]');
		$this->form_validation->set_rules('DtIni', 'DtIni', 'required|valid_date');
		$this->form_validation->set_rules('DtFin', 'DtFin', 'valid_date');
		$this->form_validation->set_rules('Ncm', 'Ncm', 'required');
		$this->form_validation->set_rules('AliqPis', 'AliqPis', 'numeric');
		$this->form_validation->set_rules('AliqCofins', 'AliqCofins', 'numeric');
		
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
				<legend>Produtos Sujeitos à Substituição Tributária da Contribuição Social</legend>
				<div class='form-group'>
					<label for='Id'>Identificador</label>
					<input type='' name='Id' id='Id' class='form-control' placeholder='Identificador' required>
				</div>
				<div class='form-group'>
					<label for='Codigo'>Código</label>
					<input type='hidden' name='Codigo' id='Codigo'>
				</div>
				<div class='form-group'>
					<label for='Descricao'>Descrição</label>
					<input type='hidden' name='Descricao' id='Descricao'>
				</div>
				<div class='form-group'>
					<label for='DtIni'>Data Inicial</label>
					<input type='hidden' name='DtIni' id='DtIni'>
				</div>
				<div class='form-group'>
					<label for='DtFin'>Data Final</label>
					<input type='hidden' name='DtFin' id='DtFin'>
				</div>
				<div class='form-group'>
					<label for='Ncm'>NCM</label>
					<input type='hidden' name='Ncm' id='Ncm'>
				</div>
				<div class='form-group'>
					<label for='NcmEx'>Exceto NCM</label>
					<input type='hidden' name='NcmEx' id='NcmEx'>
				</div>
				<div class='form-group'>
					<label for='ExIpi'>Código EX TIPI</label>
					<input type='hidden' name='ExIpi' id='ExIpi'>
				</div>
				<div class='form-group'>
					<label for='AliqPis'>Alíquota do PIS %</label>
					<input type='hidden' name='AliqPis' id='AliqPis'>
				</div>
				<div class='form-group'>
					<label for='AliqCofins'>Alíquota da COFINS %</label>
					<input type='hidden' name='AliqCofins' id='AliqCofins'>
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

