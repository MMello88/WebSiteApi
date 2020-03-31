<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Regsa111efdc extends MY_Controller {

  public function  __construct() {
    parent::__construct();
    $this->table = 'regsa111efdc';
    $this->nameId = 'Id';
    $this->usersId = 'UsersId';
    $this->joins = [
			['table' => 'regsa100efdc', 'condition' => 'regsa100efdc.Id = regsa111efdc.RegA100EFDCId', 'type' => 'left'],
    ];
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
		$this->form_validation->set_rules('UsersId', 'UsersId', 'required|integer');
		
    parent::create();
  }
  
  public function update($Id){
    $this->form_validation->set_rules('Reg', 'Reg', 'required|max_length[4]');
		$this->form_validation->set_rules('NumProcesso', 'NumProcesso', 'required|max_length[15]');
		$this->form_validation->set_rules('IndicadorOrigemProcesso', 'IndicadorOrigemProcesso', 'required|in_list[1 - Justiça Federal,3 – Secretaria da Receita Federal do Brasil,9 - Outros]');
		$this->form_validation->set_rules('RegA100EFDCId', 'RegA100EFDCId', 'integer');
		$this->form_validation->set_rules('UsersId', 'UsersId', 'required|integer');
		
    parent::update($Id);
  }

  public function delete($Id){
    parent::delete($Id);
  }
}

/*
	<header class='page-title-bar'>
		<legend>Processo Referenciado</legend>
	</header>
	<div class='page-section'>
		<div class='section-block'>
			<div class='card' id='floating-label'>
				<div class='card-body'>
					<?= form_open(base_url('regsa111efdc/')) ?>
						<fieldset>
							<input type='hidden' name='Id' id='Id'>
							<div class='form-group'>
								<label for='Reg'>Registro</label>
								<input type='text' name='Reg' id='Reg' class='form-control' placeholder='Registro' required>
							</div>
							<div class='form-group'>
								<label for='NumProcesso'>Número do Processo</label>
								<input type='text' name='NumProcesso' id='NumProcesso' class='form-control' placeholder='Número do Processo' required>
							</div>
							<div class='form-group'>
								<label for='IndicadorOrigemProcesso'>Origem do Processo</label>
								<select name='IndicadorOrigemProcesso' id='IndicadorOrigemProcesso' class='custom-select' placeholder='Origem do Processo' required>
									<option value=''> Selecione </option>
									<option value='1 - Justiça Federal'> 1 - Justiça Federal </option>
									<option value='3 – Secretaria da Receita Federal do Brasil'> 3 – Secretaria da Receita Federal do Brasil </option>
									<option value='9 - Outros'> 9 - Outros </option>
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

