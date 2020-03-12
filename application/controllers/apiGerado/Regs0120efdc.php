<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Regs0120efdc extends MY_Controller {

  public function  __construct() {
    parent::__construct();
    $this->table = 'regs0120efdc';
    $this->nameId = 'Id';
  }

  public function get($Id = '', $date = ''){
    parent::get($Id, $date);
  }
  
  public function setDefaultValue(){
    $_POST['Reg'] = !isset($_POST['Reg']) ? '0120' : $_POST['Reg'];
		
  }

  public function create(){
    $this->form_validation->set_rules('Reg', 'Reg', 'required|max_length[4]');
		$this->form_validation->set_rules('MesRefer', 'MesRefer', 'required|valid_date');
		$this->form_validation->set_rules('InfoCompl', 'InfoCompl', 'required|integer');
		$this->form_validation->set_rules('DtIni', 'DtIni', 'required|valid_date');
		$this->form_validation->set_rules('DtFin', 'DtFin', 'valid_date');
		$this->form_validation->set_rules('PessoaJuridicaId', 'PessoaJuridicaId', 'integer');
		$this->form_validation->set_rules('UserId', 'UserId', 'integer');
		
    parent::create();
  }
  
  public function update($Id){
    $this->form_validation->set_rules('Reg', 'Reg', 'required|max_length[4]');
		$this->form_validation->set_rules('MesRefer', 'MesRefer', 'required|valid_date');
		$this->form_validation->set_rules('InfoCompl', 'InfoCompl', 'required|integer');
		$this->form_validation->set_rules('DtIni', 'DtIni', 'required|valid_date');
		$this->form_validation->set_rules('DtFin', 'DtFin', 'valid_date');
		$this->form_validation->set_rules('PessoaJuridicaId', 'PessoaJuridicaId', 'integer');
		$this->form_validation->set_rules('UserId', 'UserId', 'integer');
		
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
				<legend>regs0120efdc</legend>
				<div class='form-group'>
					<label for='Id'>Id</label>
					<input type='' name='Id' id='Id' class='form-control' placeholder='Id' required>
				</div>
				<div class='form-group'>
					<label for='Reg'>Reg</label>
					<input type='hidden' name='Reg' id='Reg'>
				</div>
				<div class='form-group'>
					<label for='MesRefer'>MesRefer</label>
					<input type='hidden' name='MesRefer' id='MesRefer'>
				</div>
				<div class='form-group'>
					<label for='InfoCompl'>InfoCompl</label>
					<input type='hidden' name='InfoCompl' id='InfoCompl'>
				</div>
				<div class='form-group'>
					<label for='DtIni'>DtIni</label>
					<input type='hidden' name='DtIni' id='DtIni'>
				</div>
				<div class='form-group'>
					<label for='DtFin'>DtFin</label>
					<input type='hidden' name='DtFin' id='DtFin'>
				</div>
				<div class='form-group'>
					<label for='PessoaJuridicaId'>PessoaJuridicaId</label>
					<input type='hidden' name='PessoaJuridicaId' id='PessoaJuridicaId'>
				</div>
				<div class='form-group'>
					<label for='UserId'>UserId</label>
					<input type='hidden' name='UserId' id='UserId'>
				</div>
			</fieldset>
		</form>
	</div>
*/

