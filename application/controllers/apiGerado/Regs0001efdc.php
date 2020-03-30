<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Regs0001efdc extends MY_Controller {

  public function  __construct() {
    parent::__construct();
    $this->table = 'regs0001efdc';
    $this->nameId = 'Id';
    $this->usersId = '';
    $this->joins = [
    ];
  }

  public function get($Id = '', $date = ''){
    parent::get($Id, $date);
  }
  
  public function setDefaultValue(){
    
  }

  public function create(){
    $this->form_validation->set_rules('Reg', 'Reg', 'required|max_length[4]');
		$this->form_validation->set_rules('IndicadorMovimento', 'IndicadorMovimento', 'required|in_list[0 - Bloco com dados informados,1 – Bloco sem dados informados]');
		
    parent::create();
  }
  
  public function update($Id){
    $this->form_validation->set_rules('Reg', 'Reg', 'required|max_length[4]');
		$this->form_validation->set_rules('IndicadorMovimento', 'IndicadorMovimento', 'required|in_list[0 - Bloco com dados informados,1 – Bloco sem dados informados]');
		
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
				<legend>Abertura do Bloco 0</legend>
				<div class='form-group'>
					<label for='Id'>Identificador</label>
					<input type='hidden' name='Id' id='Id'>
				</div>
				<div class='form-group'>
					<label for='Reg'>Registro</label>
					<input type='text' name='Reg' id='Reg' class='form-control' placeholder='Registro' required>
				</div>
				<div class='form-group'>
					<label for='IndicadorMovimento'>Indicador Movimento</label>
					<select name='IndicadorMovimento' id='IndicadorMovimento' class='custom-select' placeholder='Indicador Movimento' required>
						<option value=''> Selecione </option>
						<option value='0 - Bloco com dados informados'> 0 - Bloco com dados informados </option>
						<option value='1 – Bloco sem dados informados'> 1 – Bloco sem dados informados </option>
					</select>
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

