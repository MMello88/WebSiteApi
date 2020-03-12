<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Regs0205efdc extends MY_Controller {

  public function  __construct() {
    parent::__construct();
    $this->table = 'regs0205efdc';
    $this->nameId = 'Id';
  }

  public function get($Id = '', $date = ''){
    parent::get($Id, $date);
  }
  
  public function setDefaultValue(){
    $_POST['Reg'] = !isset($_POST['Reg']) ? '0205' : $_POST['Reg'];
		
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
				<legend>regs0205efdc</legend>
				<div class='form-group'>
					<label for='Id'>Id</label>
					<input type='' name='Id' id='Id' class='form-control' placeholder='Id' required>
				</div>
				<div class='form-group'>
					<label for='Reg'>Reg</label>
					<input type='hidden' name='Reg' id='Reg'>
				</div>
				<div class='form-group'>
					<label for='DescricaoAntItem'>DescricaoAntItem</label>
					<input type='hidden' name='DescricaoAntItem' id='DescricaoAntItem'>
				</div>
				<div class='form-group'>
					<label for='CodAntItem'>CodAntItem</label>
					<input type='hidden' name='CodAntItem' id='CodAntItem'>
				</div>
				<div class='form-group'>
					<label for='DtIni'>DtIni</label>
					<input type='hidden' name='DtIni' id='DtIni'>
				</div>
				<div class='form-group'>
					<label for='DtFin'>DtFin</label>
					<input type='hidden' name='DtFin' id='DtFin'>
				</div>
			</fieldset>
		</form>
	</div>
*/

