<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Regs0208efdc extends MY_Controller {

  public function  __construct() {
    parent::__construct();
    $this->table = 'regs0208efdc';
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
	<header class='page-title-bar'>
		<legend>Grupos por Marca Comercial – Refri</legend>
	</header>
	<div class='page-section'>
		<div class='section-block'>
			<div class='card' id='floating-label'>
				<div class='card-body'>
					<?= form_open(base_url('regs0208efdc/')) ?>
						<fieldset>
							<input type='hidden' name='Id' id='Id'>
							<div class='form-group'>
								<label for='Reg'>Registro</label>
								<input type='text' name='Reg' id='Reg' class='form-control' placeholder='Registro' required>
							</div>
							<div class='form-group'>
								<label for='CodTabIncidencia'>Código Tabela de Incidência</label>
								<select name='CodTabIncidencia' id='CodTabIncidencia' class='custom-select' placeholder='Código Tabela de Incidência' required>
									<option value=''> Selecione </option>
									<option value='01 – Tabela I'> 01 – Tabela I </option>
									<option value='02 – Tabela II'> 02 – Tabela II </option>
									<option value='03 – Tabela III'> 03 – Tabela III </option>
									<option value='04 – Tabela IV'> 04 – Tabela IV </option>
									<option value='05 – Tabela V'> 05 – Tabela V </option>
									<option value='06 – Tabela VI'> 06 – Tabela VI </option>
									<option value='07 – Tabela VII'> 07 – Tabela VII </option>
									<option value='08– Tabela VIII'> 08– Tabela VIII </option>
									<option value='09 – Tabela IX'> 09 – Tabela IX </option>
									<option value='10 – Tabela X'> 10 – Tabela X </option>
									<option value='11 – Tabela XI'> 11 – Tabela XI </option>
									<option value='12 – Tabela XII'> 12 – Tabela XII </option>
									<option value='13 – Tabela XIII'> 13 – Tabela XIII </option>
								</select>
							</div>
							<div class='form-group'>
								<label for='CodGrupo'>Código Grupo</label>
								<input type='text' name='CodGrupo' id='CodGrupo' class='form-control' placeholder='Código Grupo' required>
							</div>
							<div class='form-group'>
								<label for='MarcaComercial'>Marca Comercial</label>
								<input type='text' name='MarcaComercial' id='MarcaComercial' class='form-control' placeholder='Marca Comercial' required>
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

