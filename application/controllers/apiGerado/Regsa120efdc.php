<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Regsa120efdc extends MY_Controller {

  public function  __construct() {
    parent::__construct();
    $this->table = 'regsa120efdc';
    $this->nameId = 'Id';
  }

  public function get($Id = '', $date = ''){
    parent::get($Id, $date);
  }
  
  public function setDefaultValue(){
    
  }

  public function create(){
    $this->form_validation->set_rules('Reg', 'Reg', 'required|max_length[4]');
		$this->form_validation->set_rules('VlTotalServico', 'VlTotalServico', 'required|decimal');
		$this->form_validation->set_rules('VlBcPis', 'VlBcPis', 'required|decimal');
		$this->form_validation->set_rules('VlPisImportacao', 'VlPisImportacao', 'required|decimal');
		$this->form_validation->set_rules('DtPgtoPisImportacao', 'DtPgtoPisImportacao', 'required|valid_date');
		$this->form_validation->set_rules('VlBcCofins', 'VlBcCofins', 'required|decimal');
		$this->form_validation->set_rules('VlCofinsImportacao', 'VlCofinsImportacao', 'required|decimal');
		$this->form_validation->set_rules('DtPgtoCofinsImportacao', 'DtPgtoCofinsImportacao', 'required|valid_date');
		$this->form_validation->set_rules('IndicadorLocalExecucaoServico', 'IndicadorLocalExecucaoServico', 'required|in_list[0 – Executado no País,1 – Executado no Exterior, cujo resultado se verifique no País]');
		$this->form_validation->set_rules('RegA100EFDCId', 'RegA100EFDCId', 'integer');
		
    parent::create();
  }
  
  public function update($Id){
    $this->form_validation->set_rules('Reg', 'Reg', 'required|max_length[4]');
		$this->form_validation->set_rules('VlTotalServico', 'VlTotalServico', 'required|decimal');
		$this->form_validation->set_rules('VlBcPis', 'VlBcPis', 'required|decimal');
		$this->form_validation->set_rules('VlPisImportacao', 'VlPisImportacao', 'required|decimal');
		$this->form_validation->set_rules('DtPgtoPisImportacao', 'DtPgtoPisImportacao', 'required|valid_date');
		$this->form_validation->set_rules('VlBcCofins', 'VlBcCofins', 'required|decimal');
		$this->form_validation->set_rules('VlCofinsImportacao', 'VlCofinsImportacao', 'required|decimal');
		$this->form_validation->set_rules('DtPgtoCofinsImportacao', 'DtPgtoCofinsImportacao', 'required|valid_date');
		$this->form_validation->set_rules('IndicadorLocalExecucaoServico', 'IndicadorLocalExecucaoServico', 'required|in_list[0 – Executado no País,1 – Executado no Exterior, cujo resultado se verifique no País]');
		$this->form_validation->set_rules('RegA100EFDCId', 'RegA100EFDCId', 'integer');
		
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
				<legend>Informação Complementar - Operações de Importação</legend>
				<div class='form-group'>
					<label for='Id'>Identificador</label>
					<input type='' name='Id' id='Id' class='form-control' placeholder='Identificador' required>
				</div>
				<div class='form-group'>
					<label for='Reg'>Registro</label>
					<input type='hidden' name='Reg' id='Reg'>
				</div>
				<div class='form-group'>
					<label for='VlTotalServico'>Valor Total do Serviço</label>
					<input type='hidden' name='VlTotalServico' id='VlTotalServico'>
				</div>
				<div class='form-group'>
					<label for='VlBcPis'>Valor BC PIS</label>
					<input type='hidden' name='VlBcPis' id='VlBcPis'>
				</div>
				<div class='form-group'>
					<label for='VlPisImportacao'>Valor Pago PIS</label>
					<input type='hidden' name='VlPisImportacao' id='VlPisImportacao'>
				</div>
				<div class='form-group'>
					<label for='DtPgtoPisImportacao'>Data Pgto PIS</label>
					<input type='hidden' name='DtPgtoPisImportacao' id='DtPgtoPisImportacao'>
				</div>
				<div class='form-group'>
					<label for='VlBcCofins'>Valor BC COFINS</label>
					<input type='hidden' name='VlBcCofins' id='VlBcCofins'>
				</div>
				<div class='form-group'>
					<label for='VlCofinsImportacao'>Valor Pago COFINS</label>
					<input type='hidden' name='VlCofinsImportacao' id='VlCofinsImportacao'>
				</div>
				<div class='form-group'>
					<label for='DtPgtoCofinsImportacao'>Data do Pgto COFINS</label>
					<input type='hidden' name='DtPgtoCofinsImportacao' id='DtPgtoCofinsImportacao'>
				</div>
				<div class='form-group'>
					<label for='IndicadorLocalExecucaoServico'>Local da execução do serviço</label>
					<input type='hidden' name='IndicadorLocalExecucaoServico' id='IndicadorLocalExecucaoServico'>
				</div>
				<div class='form-group'>
					<label for='RegA100EFDCId'>Documento - Nota Fiscal de Serviço</label>
					<input type='hidden' name='RegA100EFDCId' id='RegA100EFDCId'>
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

