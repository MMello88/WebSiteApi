<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Regs0145efdc extends MY_Controller {

  public function  __construct() {
    parent::__construct();
    $this->table = 'regs0145efdc';
    $this->nameId = 'Id';
  }

  public function get($Id = '', $date = ''){
    parent::get($Id, $date);
  }
  
  public function setDefaultValue(){
    $_POST['Reg'] = !isset($_POST['Reg']) ? '0145' : $_POST['Reg'];
		
  }

  public function create(){
    $this->form_validation->set_rules('Reg', 'Reg', 'required|max_length[4]');
		$this->form_validation->set_rules('CodIncTrib', 'CodIncTrib', 'required|integer');
		$this->form_validation->set_rules('VlRecTot', 'VlRecTot', 'required|decimal');
		$this->form_validation->set_rules('VlRecAtiv', 'VlRecAtiv', 'required|decimal');
		$this->form_validation->set_rules('VlRecDemaisAtiv', 'VlRecDemaisAtiv', 'required|decimal');
		$this->form_validation->set_rules('InfoCompl', 'InfoCompl', 'max_length[255]');
		
    parent::create();
  }
  
  public function update($Id){
    $this->form_validation->set_rules('Reg', 'Reg', 'required|max_length[4]');
		$this->form_validation->set_rules('CodIncTrib', 'CodIncTrib', 'required|integer');
		$this->form_validation->set_rules('VlRecTot', 'VlRecTot', 'required|decimal');
		$this->form_validation->set_rules('VlRecAtiv', 'VlRecAtiv', 'required|decimal');
		$this->form_validation->set_rules('VlRecDemaisAtiv', 'VlRecDemaisAtiv', 'required|decimal');
		$this->form_validation->set_rules('InfoCompl', 'InfoCompl', 'max_length[255]');
		
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
					<label for='CodIncTrib'></label>
					<input type='number' name='CodIncTrib' id='CodIncTrib' class='form-control' placeholder='' required>
				</div>
				<div class='form-group'>
					<label for='VlRecTot'></label>
					<input type='' name='VlRecTot' id='VlRecTot' class='form-control' placeholder='' required>
				</div>
				<div class='form-group'>
					<label for='VlRecAtiv'></label>
					<input type='' name='VlRecAtiv' id='VlRecAtiv' class='form-control' placeholder='' required>
				</div>
				<div class='form-group'>
					<label for='VlRecDemaisAtiv'></label>
					<input type='' name='VlRecDemaisAtiv' id='VlRecDemaisAtiv' class='form-control' placeholder='' required>
				</div>
				<div class='form-group'>
					<label for='InfoCompl'></label>
					<input type='text' name='InfoCompl' id='InfoCompl' class='form-control' placeholder='' >
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

