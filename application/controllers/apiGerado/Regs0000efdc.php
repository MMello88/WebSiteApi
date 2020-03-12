<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Regs0000efdc extends MY_Controller {

  public function  __construct() {
    parent::__construct();
    $this->table = 'regs0000efdc';
    $this->nameId = 'Id';
  }

  public function get($Id = '', $date = ''){
    parent::get($Id, $date);
  }
  
  public function setDefaultValue(){
    $_POST['Reg'] = !isset($_POST['Reg']) ? '0000' : $_POST['Reg'];
		
  }

  public function create(){
    $this->form_validation->set_rules('Reg', 'Reg', 'required|max_length[4]');
		$this->form_validation->set_rules('Ref311Id', 'Ref311Id', 'required|integer');
		$this->form_validation->set_rules('TipoEscrit', 'TipoEscrit', 'required|integer');
		$this->form_validation->set_rules('IndSitEsp', 'IndSitEsp', 'required|integer');
		$this->form_validation->set_rules('NumRecAnterior', 'NumRecAnterior', 'max_length[41]');
		$this->form_validation->set_rules('DtIni', 'DtIni', 'required|valid_date');
		$this->form_validation->set_rules('DtFin', 'DtFin', 'valid_date');
		$this->form_validation->set_rules('IndNatPj', 'IndNatPj', 'required|integer');
		$this->form_validation->set_rules('IndAtiv', 'IndAtiv', 'required|integer');
		$this->form_validation->set_rules('PessoaJuridicaId', 'PessoaJuridicaId', 'integer');
		$this->form_validation->set_rules('UserId', 'UserId', 'integer');
		$this->form_validation->set_rules('Reg0001EFDCId', 'Reg0001EFDCId', 'integer');
		$this->form_validation->set_rules('Regs0110EFDCId', 'Regs0110EFDCId', 'integer');
		
    parent::create();
  }
  
  public function update($Id){
    $this->form_validation->set_rules('Reg', 'Reg', 'required|max_length[4]');
		$this->form_validation->set_rules('Ref311Id', 'Ref311Id', 'required|integer');
		$this->form_validation->set_rules('TipoEscrit', 'TipoEscrit', 'required|integer');
		$this->form_validation->set_rules('IndSitEsp', 'IndSitEsp', 'required|integer');
		$this->form_validation->set_rules('NumRecAnterior', 'NumRecAnterior', 'max_length[41]');
		$this->form_validation->set_rules('DtIni', 'DtIni', 'required|valid_date');
		$this->form_validation->set_rules('DtFin', 'DtFin', 'valid_date');
		$this->form_validation->set_rules('IndNatPj', 'IndNatPj', 'required|integer');
		$this->form_validation->set_rules('IndAtiv', 'IndAtiv', 'required|integer');
		$this->form_validation->set_rules('PessoaJuridicaId', 'PessoaJuridicaId', 'integer');
		$this->form_validation->set_rules('UserId', 'UserId', 'integer');
		$this->form_validation->set_rules('Reg0001EFDCId', 'Reg0001EFDCId', 'integer');
		$this->form_validation->set_rules('Regs0110EFDCId', 'Regs0110EFDCId', 'integer');
		
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
				<legend>regs0000efdc</legend>
				<div class='form-group'>
					<label for='Id'>Id</label>
					<input type='' name='Id' id='Id' class='form-control' placeholder='Id' required>
				</div>
				<div class='form-group'>
					<label for='Reg'>Reg</label>
					<input type='hidden' name='Reg' id='Reg'>
				</div>
				<div class='form-group'>
					<label for='Ref311Id'>Ref311Id</label>
					<input type='hidden' name='Ref311Id' id='Ref311Id'>
				</div>
				<div class='form-group'>
					<label for='TipoEscrit'>TipoEscrit</label>
					<input type='hidden' name='TipoEscrit' id='TipoEscrit'>
				</div>
				<div class='form-group'>
					<label for='IndSitEsp'>IndSitEsp</label>
					<input type='hidden' name='IndSitEsp' id='IndSitEsp'>
				</div>
				<div class='form-group'>
					<label for='NumRecAnterior'>NumRecAnterior</label>
					<input type='hidden' name='NumRecAnterior' id='NumRecAnterior'>
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
					<label for='IndNatPj'>IndNatPj</label>
					<input type='hidden' name='IndNatPj' id='IndNatPj'>
				</div>
				<div class='form-group'>
					<label for='IndAtiv'>IndAtiv</label>
					<input type='hidden' name='IndAtiv' id='IndAtiv'>
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
					<label for='Reg0001EFDCId'>Reg0001EFDCId</label>
					<input type='hidden' name='Reg0001EFDCId' id='Reg0001EFDCId'>
				</div>
				<div class='form-group'>
					<label for='Regs0110EFDCId'>Regs0110EFDCId</label>
					<input type='hidden' name='Regs0110EFDCId' id='Regs0110EFDCId'>
				</div>
			</fieldset>
		</form>
	</div>
*/

