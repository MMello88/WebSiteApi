<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Regsa120efdc extends MY_Controller {

  public function  __construct() {
    parent::__construct();
    $this->table = 'regsa120efdc';
    $this->nameId = 'Id';
    $this->usersId = 'UsersId';
    $this->joins = [
			['table' => 'regsa100efdc', 'condition' => 'regsa100efdc.Id = regsa120efdc.RegA100EFDCId', 'type' => 'left'],
    ];
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
		$this->form_validation->set_rules('UsersId', 'UsersId', 'required|integer');
		
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
		$this->form_validation->set_rules('UsersId', 'UsersId', 'required|integer');
		
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
					<input type='hidden' name='Id' id='Id'>
				</div>
				<div class='form-group'>
					<label for='Reg'>Registro</label>
					<input type='text' name='Reg' id='Reg' class='form-control' placeholder='Registro' required>
				</div>
				<div class='form-group'>
					<label for='VlTotalServico'>Valor Total do Serviço</label>
					<input type='' name='VlTotalServico' id='VlTotalServico' class='form-control' placeholder='Valor Total do Serviço' required>
				</div>
				<div class='form-group'>
					<label for='VlBcPis'>Valor BC PIS</label>
					<input type='' name='VlBcPis' id='VlBcPis' class='form-control' placeholder='Valor BC PIS' required>
				</div>
				<div class='form-group'>
					<label for='VlPisImportacao'>Valor Pago PIS</label>
					<input type='' name='VlPisImportacao' id='VlPisImportacao' class='form-control' placeholder='Valor Pago PIS' required>
				</div>
				<div class='form-group'>
					<label for='DtPgtoPisImportacao'>Data Pgto PIS</label>
					<input type='date' name='DtPgtoPisImportacao' id='DtPgtoPisImportacao' class='form-control' placeholder='Data Pgto PIS' required>
				</div>
				<div class='form-group'>
					<label for='VlBcCofins'>Valor BC COFINS</label>
					<input type='' name='VlBcCofins' id='VlBcCofins' class='form-control' placeholder='Valor BC COFINS' required>
				</div>
				<div class='form-group'>
					<label for='VlCofinsImportacao'>Valor Pago COFINS</label>
					<input type='' name='VlCofinsImportacao' id='VlCofinsImportacao' class='form-control' placeholder='Valor Pago COFINS' required>
				</div>
				<div class='form-group'>
					<label for='DtPgtoCofinsImportacao'>Data do Pgto COFINS</label>
					<input type='date' name='DtPgtoCofinsImportacao' id='DtPgtoCofinsImportacao' class='form-control' placeholder='Data do Pgto COFINS' required>
				</div>
				<div class='form-group'>
					<label for='IndicadorLocalExecucaoServico'>Local da execução do serviço</label>
					<select name='IndicadorLocalExecucaoServico' id='IndicadorLocalExecucaoServico' class='custom-select' placeholder='Local da execução do serviço' required>
						<option value=''> Selecione </option>
						<option value='0 – Executado no País'> 0 – Executado no País </option>
						<option value='1 – Executado no Exterior'> 1 – Executado no Exterior </option>
						<option value=' cujo resultado se verifique no País'>  cujo resultado se verifique no País </option>
					</select>
				</div>
				<div class='form-group'>
					<label for='RegA100EFDCId'>Documento - Nota Fiscal de Serviço</label>
					<input type='number' name='RegA100EFDCId' id='RegA100EFDCId' class='form-control' placeholder='Documento - Nota Fiscal de Serviço' >
				</div>
				<div class='form-group'>
					<label for='UsersId'>Usuário</label>
					<input type='number' name='UsersId' id='UsersId' class='form-control' placeholder='Usuário' required>
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

