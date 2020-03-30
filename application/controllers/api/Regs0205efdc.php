<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Regs0205efdc extends MY_Controller {

  public function  __construct() {
    parent::__construct();
    $this->table = 'regs0205efdc';
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
					<input type='hidden' name='Id' id='Id'>
				</div>
				<div class='form-group'>
					<label for='Reg'>Registro</label>
					<input type='text' name='Reg' id='Reg' class='form-control' placeholder='Registro' required>
				</div>
				<div class='form-group'>
					<label for='DescricaoAntItem'>Descrição Anterior do Item</label>
					<input type='text' name='DescricaoAntItem' id='DescricaoAntItem' class='form-control' placeholder='Descrição Anterior do Item' required>
				</div>
				<div class='form-group'>
					<label for='CodAntItem'>Código Anterior Item</label>
					<input type='text' name='CodAntItem' id='CodAntItem' class='form-control' placeholder='Código Anterior Item' >
				</div>
				<div class='form-group'>
					<label for='DtIni'>Data Inicial</label>
					<input type='date' name='DtIni' id='DtIni' class='form-control' placeholder='Data Inicial' required>
				</div>
				<div class='form-group'>
					<label for='DtFin'>Data Final</label>
					<input type='date' name='DtFin' id='DtFin' class='form-control' placeholder='Data Final' >
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

