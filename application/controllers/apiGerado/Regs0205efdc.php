<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Regs0205efdc extends MY_Controller {

  public function  __construct() {
    parent::__construct();
    $this->table = 'regs0205efdc';
    $this->nameId = 'Id';
  }

  public function get($Id = '', $date = ''){
    parent::get($Id, $date);
  }
  
  public function setDefaultValue(){
    
  }

  public function create(){
    $this->form_validation->set_rules('Reg', 'Reg', 'required|max_length[4]');
		$this->form_validation->set_rules('DescricaoAntItem', 'DescricaoAntItem', 'required|max_length[255]');
		$this->form_validation->set_rules('CodAntItem', 'CodAntItem', 'max_length[60]');
		$this->form_validation->set_rules('DtIni', 'DtIni', 'required|valid_date');
		$this->form_validation->set_rules('DtFin', 'DtFin', 'valid_date');
		
    parent::create();
  }
  
  public function update($Id){
    $this->form_validation->set_rules('Reg', 'Reg', 'required|max_length[4]');
		$this->form_validation->set_rules('DescricaoAntItem', 'DescricaoAntItem', 'required|max_length[255]');
		$this->form_validation->set_rules('CodAntItem', 'CodAntItem', 'max_length[60]');
		$this->form_validation->set_rules('DtIni', 'DtIni', 'required|valid_date');
		$this->form_validation->set_rules('DtFin', 'DtFin', 'valid_date');
		
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
				<legend>Alteração do Item</legend>
				<div class='form-group'>
					<label for='Id'>Identificador</label>
					<input type='' name='Id' id='Id' class='form-control' placeholder='Identificador' required>
				</div>
				<div class='form-group'>
					<label for='Reg'>Registro</label>
					<input type='hidden' name='Reg' id='Reg'>
				</div>
				<div class='form-group'>
					<label for='DescricaoAntItem'>Descrição Anterior do Item</label>
					<input type='hidden' name='DescricaoAntItem' id='DescricaoAntItem'>
				</div>
				<div class='form-group'>
					<label for='CodAntItem'>Código Anterior Item</label>
					<input type='hidden' name='CodAntItem' id='CodAntItem'>
				</div>
				<div class='form-group'>
					<label for='DtIni'>Data Inicial</label>
					<input type='hidden' name='DtIni' id='DtIni'>
				</div>
				<div class='form-group'>
					<label for='DtFin'>Data Final</label>
					<input type='hidden' name='DtFin' id='DtFin'>
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

