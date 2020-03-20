<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Regs0208efdc extends MY_Controller {

  public function  __construct() {
    parent::__construct();
    $this->table = 'regs0208efdc';
    $this->nameId = 'Id';
  }

  public function get($Id = '', $date = ''){
    parent::get($Id, $date);
  }
  
  public function setDefaultValue(){
    $_POST['Reg'] = !isset($_POST['Reg']) ? '0208' : $_POST['Reg'];
		
  }

  public function create(){
    $this->form_validation->set_rules('Reg', 'Reg', 'required|max_length[4]');
		$this->form_validation->set_rules('CodTabIncidencia', 'CodTabIncidencia', 'required|integer');
		$this->form_validation->set_rules('CodGrupo', 'CodGrupo', 'required|max_length[2]');
		$this->form_validation->set_rules('MarcaComercial', 'MarcaComercial', 'required|max_length[255]');
		
    parent::create();
  }
  
  public function update($Id){
    $this->form_validation->set_rules('Reg', 'Reg', 'required|max_length[4]');
		$this->form_validation->set_rules('CodTabIncidencia', 'CodTabIncidencia', 'required|integer');
		$this->form_validation->set_rules('CodGrupo', 'CodGrupo', 'required|max_length[2]');
		$this->form_validation->set_rules('MarcaComercial', 'MarcaComercial', 'required|max_length[255]');
		
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
					<label for='CodTabIncidencia'></label>
					<input type='number' name='CodTabIncidencia' id='CodTabIncidencia' class='form-control' placeholder='' required>
				</div>
				<div class='form-group'>
					<label for='CodGrupo'></label>
					<input type='text' name='CodGrupo' id='CodGrupo' class='form-control' placeholder='' required>
				</div>
				<div class='form-group'>
					<label for='MarcaComercial'></label>
					<input type='text' name='MarcaComercial' id='MarcaComercial' class='form-control' placeholder='' required>
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

