<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Regsa111efdc extends MY_Controller {

  public function  __construct() {
    parent::__construct();
    $this->table = 'regsa111efdc';
    $this->nameId = 'Id';
  }

  public function get($Id = '', $date = ''){
    parent::get($Id, $date);
  }
  
  public function setDefaultValue(){
    
  }

  public function create(){
    $this->form_validation->set_rules('Reg', 'Reg', 'required|max_length[4]');
		$this->form_validation->set_rules('NumProcesso', 'NumProcesso', 'required|max_length[15]');
		$this->form_validation->set_rules('IndicadorOrigemProcesso', 'IndicadorOrigemProcesso', 'required|in_list[1 - Justiça Federal,3 – Secretaria da Receita Federal do Brasil,9 - Outros]');
		$this->form_validation->set_rules('RegA100EFDCId', 'RegA100EFDCId', 'integer');
		
    parent::create();
  }
  
  public function update($Id){
    $this->form_validation->set_rules('Reg', 'Reg', 'required|max_length[4]');
		$this->form_validation->set_rules('NumProcesso', 'NumProcesso', 'required|max_length[15]');
		$this->form_validation->set_rules('IndicadorOrigemProcesso', 'IndicadorOrigemProcesso', 'required|in_list[1 - Justiça Federal,3 – Secretaria da Receita Federal do Brasil,9 - Outros]');
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
				<legend>Processo Referenciado</legend>
				<div class='form-group'>
					<label for='Id'>Identificador</label>
					<input type='' name='Id' id='Id' class='form-control' placeholder='Identificador' required>
				</div>
				<div class='form-group'>
					<label for='Reg'>Registro</label>
					<input type='hidden' name='Reg' id='Reg'>
				</div>
				<div class='form-group'>
					<label for='NumProcesso'>Número do Processo</label>
					<input type='hidden' name='NumProcesso' id='NumProcesso'>
				</div>
				<div class='form-group'>
					<label for='IndicadorOrigemProcesso'>Origem do Processo</label>
					<input type='hidden' name='IndicadorOrigemProcesso' id='IndicadorOrigemProcesso'>
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

