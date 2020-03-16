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
    
  }

  public function create(){
    $this->form_validation->set_rules('Reg', 'Reg', 'required|max_length[4]');
		$this->form_validation->set_rules('CodTabIncidencia', 'CodTabIncidencia', 'required|in_list[01 – Tabela I,02 – Tabela II,03 – Tabela III,04 – Tabela IV,05 – Tabela V,06 – Tabela VI,07 – Tabela VII,08– Tabela VIII,09 – Tabela IX,10 – Tabela X,11 – Tabela XI,12 – Tabela XII,13 – Tabela XIII]');
		$this->form_validation->set_rules('CodGrupo', 'CodGrupo', 'required|max_length[2]');
		$this->form_validation->set_rules('MarcaComercial', 'MarcaComercial', 'required|max_length[255]');
		
    parent::create();
  }
  
  public function update($Id){
    $this->form_validation->set_rules('Reg', 'Reg', 'required|max_length[4]');
		$this->form_validation->set_rules('CodTabIncidencia', 'CodTabIncidencia', 'required|in_list[01 – Tabela I,02 – Tabela II,03 – Tabela III,04 – Tabela IV,05 – Tabela V,06 – Tabela VI,07 – Tabela VII,08– Tabela VIII,09 – Tabela IX,10 – Tabela X,11 – Tabela XI,12 – Tabela XII,13 – Tabela XIII]');
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
				<legend>Grupos por Marca Comercial – Refri</legend>
				<div class='form-group'>
					<label for='Id'>Identificador</label>
					<input type='' name='Id' id='Id' class='form-control' placeholder='Identificador' required>
				</div>
				<div class='form-group'>
					<label for='Reg'>Registro</label>
					<input type='hidden' name='Reg' id='Reg'>
				</div>
				<div class='form-group'>
					<label for='CodTabIncidencia'>Código Tabela de Incidência</label>
					<input type='hidden' name='CodTabIncidencia' id='CodTabIncidencia'>
				</div>
				<div class='form-group'>
					<label for='CodGrupo'>Código Grupo</label>
					<input type='hidden' name='CodGrupo' id='CodGrupo'>
				</div>
				<div class='form-group'>
					<label for='MarcaComercial'>Marca Comercial</label>
					<input type='hidden' name='MarcaComercial' id='MarcaComercial'>
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

