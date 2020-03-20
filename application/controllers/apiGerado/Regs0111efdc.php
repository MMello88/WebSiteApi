<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Regs0111efdc extends MY_Controller {

  public function  __construct() {
    parent::__construct();
    $this->table = 'regs0111efdc';
    $this->nameId = 'Id';
  }

  public function get($Id = '', $date = ''){
    parent::get($Id, $date);
  }
  
  public function setDefaultValue(){
    $_POST['Reg'] = !isset($_POST['Reg']) ? '0111' : $_POST['Reg'];
		
  }

  public function create(){
    $this->form_validation->set_rules('Reg', 'Reg', 'required|max_length[4]');
		$this->form_validation->set_rules('RecBruNCumTribMI', 'RecBruNCumTribMI', 'required|integer');
		$this->form_validation->set_rules('RecBruNCumNaoTribMI', 'RecBruNCumNaoTribMI', 'required|integer');
		$this->form_validation->set_rules('RecBruNCumExp', 'RecBruNCumExp', 'required|integer');
		$this->form_validation->set_rules('RecBruNCum', 'RecBruNCum', 'required|integer');
		$this->form_validation->set_rules('RecBruNCumTotal', 'RecBruNCumTotal', 'required|integer');
		
    parent::create();
  }
  
  public function update($Id){
    $this->form_validation->set_rules('Reg', 'Reg', 'required|max_length[4]');
		$this->form_validation->set_rules('RecBruNCumTribMI', 'RecBruNCumTribMI', 'required|integer');
		$this->form_validation->set_rules('RecBruNCumNaoTribMI', 'RecBruNCumNaoTribMI', 'required|integer');
		$this->form_validation->set_rules('RecBruNCumExp', 'RecBruNCumExp', 'required|integer');
		$this->form_validation->set_rules('RecBruNCum', 'RecBruNCum', 'required|integer');
		$this->form_validation->set_rules('RecBruNCumTotal', 'RecBruNCumTotal', 'required|integer');
		
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
					<label for='RecBruNCumTribMI'></label>
					<input type='number' name='RecBruNCumTribMI' id='RecBruNCumTribMI' class='form-control' placeholder='' required>
				</div>
				<div class='form-group'>
					<label for='RecBruNCumNaoTribMI'></label>
					<input type='number' name='RecBruNCumNaoTribMI' id='RecBruNCumNaoTribMI' class='form-control' placeholder='' required>
				</div>
				<div class='form-group'>
					<label for='RecBruNCumExp'></label>
					<input type='number' name='RecBruNCumExp' id='RecBruNCumExp' class='form-control' placeholder='' required>
				</div>
				<div class='form-group'>
					<label for='RecBruNCum'></label>
					<input type='number' name='RecBruNCum' id='RecBruNCum' class='form-control' placeholder='' required>
				</div>
				<div class='form-group'>
					<label for='RecBruNCumTotal'></label>
					<input type='number' name='RecBruNCumTotal' id='RecBruNCumTotal' class='form-control' placeholder='' required>
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

