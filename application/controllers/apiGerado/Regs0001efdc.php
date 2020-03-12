<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Regs0001efdc extends MY_Controller {

  public function  __construct() {
    parent::__construct();
    $this->table = 'regs0001efdc';
    $this->nameId = 'Id';
  }

  public function get($Id = '', $date = ''){
    parent::get($Id, $date);
  }
  
  public function setDefaultValue(){
    $_POST['Reg'] = !isset($_POST['Reg']) ? '0001' : $_POST['Reg'];
		
  }

  public function create(){
    $this->form_validation->set_rules('Reg', 'Reg', 'required|max_length[4]');
		$this->form_validation->set_rules('IndicadorMovimento', 'IndicadorMovimento', 'required|integer');
		
    parent::create();
  }
  
  public function update($Id){
    $this->form_validation->set_rules('Reg', 'Reg', 'required|max_length[4]');
		$this->form_validation->set_rules('IndicadorMovimento', 'IndicadorMovimento', 'required|integer');
		
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
				<legend>regs0001efdc</legend>
				<div class='form-group'>
					<label for='Id'>Id</label>
					<input type='' name='Id' id='Id' class='form-control' placeholder='Id' required>
				</div>
				<div class='form-group'>
					<label for='Reg'>Reg</label>
					<input type='hidden' name='Reg' id='Reg'>
				</div>
				<div class='form-group'>
					<label for='IndicadorMovimento'>IndicadorMovimento</label>
					<input type='hidden' name='IndicadorMovimento' id='IndicadorMovimento'>
				</div>
			</fieldset>
		</form>
	</div>
*/

