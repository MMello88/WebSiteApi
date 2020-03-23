<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Regsa110efdc extends MY_Controller {

  public function  __construct() {
    parent::__construct();
    $this->table = 'regsa110efdc';
    $this->nameId = 'Id';
  }

  public function get($Id = '', $date = ''){
    parent::get($Id, $date);
  }
  
  public function setDefaultValue(){
    
  }

  public function create(){
    $this->form_validation->set_rules('Reg', 'Reg', 'required|max_length[4]');
		$this->form_validation->set_rules('Reg0450EFDCId', 'Reg0450EFDCId', 'integer');
		$this->form_validation->set_rules('TxtComplementar', 'TxtComplementar', 'max_length[255]');
		$this->form_validation->set_rules('RegA100EFDCId', 'RegA100EFDCId', 'required|integer');
		
    parent::create();
  }
  
  public function update($Id){
    $this->form_validation->set_rules('Reg', 'Reg', 'required|max_length[4]');
		$this->form_validation->set_rules('Reg0450EFDCId', 'Reg0450EFDCId', 'integer');
		$this->form_validation->set_rules('TxtComplementar', 'TxtComplementar', 'max_length[255]');
		$this->form_validation->set_rules('RegA100EFDCId', 'RegA100EFDCId', 'required|integer');
		
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
				<legend>Complemento do Documento - Informação Complementar da NF</legend>
				<div class='form-group'>
					<label for='Id'>Identificador</label>
					<input type='hidden' name='Id' id='Id'>
				</div>
				<div class='form-group'>
					<label for='Reg'>Registro</label>
					<input type='text' name='Reg' id='Reg' class='form-control' placeholder='Registro' required>
				</div>
				<div class='form-group'>
					<label for='Reg0450EFDCId'>Informação Complementar</label>
					<input type='number' name='Reg0450EFDCId' id='Reg0450EFDCId' class='form-control' placeholder='Informação Complementar' >
				</div>
				<div class='form-group'>
					<label for='TxtComplementar'>Informação Complementar do Documento Fiscal</label>
					<input type='text' name='TxtComplementar' id='TxtComplementar' class='form-control' placeholder='Informação Complementar do Documento Fiscal' >
				</div>
				<div class='form-group'>
					<label for='RegA100EFDCId'>Documento - Nota Fiscal de Serviço</label>
					<input type='number' name='RegA100EFDCId' id='RegA100EFDCId' class='form-control' placeholder='Documento - Nota Fiscal de Serviço' required>
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

