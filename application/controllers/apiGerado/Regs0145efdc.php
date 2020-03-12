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
				<legend>regs0145efdc</legend>
				<div class='form-group'>
					<label for='Id'>Id</label>
					<input type='' name='Id' id='Id' class='form-control' placeholder='Id' required>
				</div>
				<div class='form-group'>
					<label for='Reg'>Reg</label>
					<input type='hidden' name='Reg' id='Reg'>
				</div>
				<div class='form-group'>
					<label for='CodIncTrib'>CodIncTrib</label>
					<input type='hidden' name='CodIncTrib' id='CodIncTrib'>
				</div>
				<div class='form-group'>
					<label for='VlRecTot'>VlRecTot</label>
					<input type='hidden' name='VlRecTot' id='VlRecTot'>
				</div>
				<div class='form-group'>
					<label for='VlRecAtiv'>VlRecAtiv</label>
					<input type='hidden' name='VlRecAtiv' id='VlRecAtiv'>
				</div>
				<div class='form-group'>
					<label for='VlRecDemaisAtiv'>VlRecDemaisAtiv</label>
					<input type='hidden' name='VlRecDemaisAtiv' id='VlRecDemaisAtiv'>
				</div>
				<div class='form-group'>
					<label for='InfoCompl'>InfoCompl</label>
					<input type='hidden' name='InfoCompl' id='InfoCompl'>
				</div>
			</fieldset>
		</form>
	</div>
*/

