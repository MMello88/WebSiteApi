<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Regs0110efdc extends MY_Controller {

  public function  __construct() {
    parent::__construct();
    $this->table = 'regs0110efdc';
    $this->nameId = 'Id';
  }

  public function get($Id = '', $date = ''){
    parent::get($Id, $date);
  }
  
  public function setDefaultValue(){
    $_POST['Reg'] = !isset($_POST['Reg']) ? '0110' : $_POST['Reg'];
		
  }

  public function create(){
    $this->form_validation->set_rules('Reg', 'Reg', 'required|max_length[4]');
		$this->form_validation->set_rules('CodIncTrib', 'CodIncTrib', 'required|integer');
		$this->form_validation->set_rules('IndAproCred', 'IndAproCred', 'required|integer');
		$this->form_validation->set_rules('CodTipoCont', 'CodTipoCont', 'required|integer');
		$this->form_validation->set_rules('IndRegCum', 'IndRegCum', 'required|integer');
		$this->form_validation->set_rules('DtIni', 'DtIni', 'required|valid_date');
		$this->form_validation->set_rules('DtFin', 'DtFin', 'valid_date');
		$this->form_validation->set_rules('PessoaJuridicaId', 'PessoaJuridicaId', 'integer');
		$this->form_validation->set_rules('UserId', 'UserId', 'integer');
		$this->form_validation->set_rules('Reg0111EFDCId', 'Reg0111EFDCId', 'integer');
		
    parent::create();
  }
  
  public function update($Id){
    $this->form_validation->set_rules('Reg', 'Reg', 'required|max_length[4]');
		$this->form_validation->set_rules('CodIncTrib', 'CodIncTrib', 'required|integer');
		$this->form_validation->set_rules('IndAproCred', 'IndAproCred', 'required|integer');
		$this->form_validation->set_rules('CodTipoCont', 'CodTipoCont', 'required|integer');
		$this->form_validation->set_rules('IndRegCum', 'IndRegCum', 'required|integer');
		$this->form_validation->set_rules('DtIni', 'DtIni', 'required|valid_date');
		$this->form_validation->set_rules('DtFin', 'DtFin', 'valid_date');
		$this->form_validation->set_rules('PessoaJuridicaId', 'PessoaJuridicaId', 'integer');
		$this->form_validation->set_rules('UserId', 'UserId', 'integer');
		$this->form_validation->set_rules('Reg0111EFDCId', 'Reg0111EFDCId', 'integer');
		
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
				<legend>regs0110efdc</legend>
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
					<label for='IndAproCred'>IndAproCred</label>
					<input type='hidden' name='IndAproCred' id='IndAproCred'>
				</div>
				<div class='form-group'>
					<label for='CodTipoCont'>CodTipoCont</label>
					<input type='hidden' name='CodTipoCont' id='CodTipoCont'>
				</div>
				<div class='form-group'>
					<label for='IndRegCum'>IndRegCum</label>
					<input type='hidden' name='IndRegCum' id='IndRegCum'>
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
				<div class='form-group'>
					<label for='Reg0111EFDCId'>Reg0111EFDCId</label>
					<input type='hidden' name='Reg0111EFDCId' id='Reg0111EFDCId'>
				</div>
			</fieldset>
		</form>
	</div>
*/

