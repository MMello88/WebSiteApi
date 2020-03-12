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
    $_POST['Reg'] = !isset($_POST['Reg']) ? 'A110' : $_POST['Reg'];
		
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
				<legend>regsa110efdc</legend>
				<div class='form-group'>
					<label for='Id'>Id</label>
					<input type='' name='Id' id='Id' class='form-control' placeholder='Id' required>
				</div>
				<div class='form-group'>
					<label for='Reg'>Reg</label>
					<input type='hidden' name='Reg' id='Reg'>
				</div>
				<div class='form-group'>
					<label for='Reg0450EFDCId'>Reg0450EFDCId</label>
					<input type='hidden' name='Reg0450EFDCId' id='Reg0450EFDCId'>
				</div>
				<div class='form-group'>
					<label for='TxtComplementar'>TxtComplementar</label>
					<input type='hidden' name='TxtComplementar' id='TxtComplementar'>
				</div>
				<div class='form-group'>
					<label for='RegA100EFDCId'>RegA100EFDCId</label>
					<input type='hidden' name='RegA100EFDCId' id='RegA100EFDCId'>
				</div>
			</fieldset>
		</form>
	</div>
*/

