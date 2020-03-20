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
    $_POST['Reg'] = !isset($_POST['Reg']) ? 'A120' : $_POST['Reg'];
		
  }

  public function create(){
    $this->form_validation->set_rules('Reg', 'Reg', 'required|max_length[4]');
		$this->form_validation->set_rules('VlTotalServico', 'VlTotalServico', 'required|decimal');
		$this->form_validation->set_rules('VlBcPis', 'VlBcPis', 'required|decimal');
		$this->form_validation->set_rules('VlPisImportacao', 'VlPisImportacao', 'required|decimal');
		$this->form_validation->set_rules('DtPgtoPisImportacao', 'DtPgtoPisImportacao', 'required|valid_datetime');
		$this->form_validation->set_rules('VlBcCofins', 'VlBcCofins', 'required|decimal');
		$this->form_validation->set_rules('VlCofinsImportacao', 'VlCofinsImportacao', 'required|decimal');
		$this->form_validation->set_rules('DtPgtoCofinsImportacao', 'DtPgtoCofinsImportacao', 'required|valid_datetime');
		$this->form_validation->set_rules('IndicadorLocalExecucaoServico', 'IndicadorLocalExecucaoServico', 'required|integer');
		$this->form_validation->set_rules('RegA100EFDCId', 'RegA100EFDCId', 'integer');
		
    parent::create();
  }
  
  public function update($Id){
    $this->form_validation->set_rules('Reg', 'Reg', 'required|max_length[4]');
		$this->form_validation->set_rules('VlTotalServico', 'VlTotalServico', 'required|decimal');
		$this->form_validation->set_rules('VlBcPis', 'VlBcPis', 'required|decimal');
		$this->form_validation->set_rules('VlPisImportacao', 'VlPisImportacao', 'required|decimal');
		$this->form_validation->set_rules('DtPgtoPisImportacao', 'DtPgtoPisImportacao', 'required|valid_datetime');
		$this->form_validation->set_rules('VlBcCofins', 'VlBcCofins', 'required|decimal');
		$this->form_validation->set_rules('VlCofinsImportacao', 'VlCofinsImportacao', 'required|decimal');
		$this->form_validation->set_rules('DtPgtoCofinsImportacao', 'DtPgtoCofinsImportacao', 'required|valid_datetime');
		$this->form_validation->set_rules('IndicadorLocalExecucaoServico', 'IndicadorLocalExecucaoServico', 'required|integer');
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
				<legend></legend>
				<div class='form-group'>
					<label for='Id'></label>
					<input type='hidden' name='Id' id='Id'>
				</div>
				<div class='form-group'>
					<label for='Reg'></label>
					<input type='text' name='Reg' id='Reg' class='form-control' placeholder='' required>
				</div>
				<div class='form-group'>
					<label for='VlTotalServico'></label>
					<input type='' name='VlTotalServico' id='VlTotalServico' class='form-control' placeholder='' required>
				</div>
				<div class='form-group'>
					<label for='VlBcPis'></label>
					<input type='' name='VlBcPis' id='VlBcPis' class='form-control' placeholder='' required>
				</div>
				<div class='form-group'>
					<label for='VlPisImportacao'></label>
					<input type='' name='VlPisImportacao' id='VlPisImportacao' class='form-control' placeholder='' required>
				</div>
				<div class='form-group'>
					<label for='DtPgtoPisImportacao'></label>
					<input type='datetime-local' name='DtPgtoPisImportacao' id='DtPgtoPisImportacao' class='form-control' placeholder='' required>
				</div>
				<div class='form-group'>
					<label for='VlBcCofins'></label>
					<input type='' name='VlBcCofins' id='VlBcCofins' class='form-control' placeholder='' required>
				</div>
				<div class='form-group'>
					<label for='VlCofinsImportacao'></label>
					<input type='' name='VlCofinsImportacao' id='VlCofinsImportacao' class='form-control' placeholder='' required>
				</div>
				<div class='form-group'>
					<label for='DtPgtoCofinsImportacao'></label>
					<input type='datetime-local' name='DtPgtoCofinsImportacao' id='DtPgtoCofinsImportacao' class='form-control' placeholder='' required>
				</div>
				<div class='form-group'>
					<label for='IndicadorLocalExecucaoServico'></label>
					<input type='number' name='IndicadorLocalExecucaoServico' id='IndicadorLocalExecucaoServico' class='form-control' placeholder='' required>
				</div>
				<div class='form-group'>
					<label for='RegA100EFDCId'></label>
					<input type='number' name='RegA100EFDCId' id='RegA100EFDCId' class='form-control' placeholder='' >
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

