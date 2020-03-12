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
    $_POST['Reg'] = !isset($_POST['Reg']) ? 'A111' : $_POST['Reg'];
		
  }

  public function create(){
    $this->form_validation->set_rules('Reg', 'Reg', 'required|max_length[4]');
		$this->form_validation->set_rules('NumProcesso', 'NumProcesso', 'required|max_length[15]');
		$this->form_validation->set_rules('IndicadorOrigemProcesso', 'IndicadorOrigemProcesso', 'required|integer');
		$this->form_validation->set_rules('RegA100EFDCId', 'RegA100EFDCId', 'integer');
		
    parent::create();
  }
  
  public function update($Id){
    $this->form_validation->set_rules('Reg', 'Reg', 'required|max_length[4]');
		$this->form_validation->set_rules('NumProcesso', 'NumProcesso', 'required|max_length[15]');
		$this->form_validation->set_rules('IndicadorOrigemProcesso', 'IndicadorOrigemProcesso', 'required|integer');
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
				<legend>regsa111efdc</legend>
				<div class='form-group'>
					<label for='Id'>Id</label>
					<input type='' name='Id' id='Id' class='form-control' placeholder='Id' required>
				</div>
				<div class='form-group'>
					<label for='Reg'>Reg</label>
					<input type='hidden' name='Reg' id='Reg'>
				</div>
				<div class='form-group'>
					<label for='NumProcesso'>NumProcesso</label>
					<input type='hidden' name='NumProcesso' id='NumProcesso'>
				</div>
				<div class='form-group'>
					<label for='IndicadorOrigemProcesso'>IndicadorOrigemProcesso</label>
					<input type='hidden' name='IndicadorOrigemProcesso' id='IndicadorOrigemProcesso'>
				</div>
				<div class='form-group'>
					<label for='RegA100EFDCId'>RegA100EFDCId</label>
					<input type='hidden' name='RegA100EFDCId' id='RegA100EFDCId'>
				</div>
			</fieldset>
		</form>
	</div>
*/

