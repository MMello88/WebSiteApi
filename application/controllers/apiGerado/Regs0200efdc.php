<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Regs0200efdc extends MY_Controller {

  public function  __construct() {
    parent::__construct();
    $this->table = 'regs0200efdc';
    $this->nameId = 'Id';
  }

  public function get($Id = '', $date = ''){
    parent::get($Id, $date);
  }
  
  public function setDefaultValue(){
    $_POST['Reg'] = !isset($_POST['Reg']) ? '0200' : $_POST['Reg'];
		
  }

  public function create(){
    $this->form_validation->set_rules('Reg', 'Reg', 'required|max_length[4]');
		$this->form_validation->set_rules('CodItem', 'CodItem', 'required|max_length[60]');
		$this->form_validation->set_rules('DescricaoItem', 'DescricaoItem', 'required|max_length[255]');
		$this->form_validation->set_rules('CodBarra', 'CodBarra', 'max_length[255]');
		$this->form_validation->set_rules('CodAntItem', 'CodAntItem', 'max_length[60]');
		$this->form_validation->set_rules('Reg0190EFDCId', 'Reg0190EFDCId', 'integer');
		$this->form_validation->set_rules('TipoItem', 'TipoItem', 'required|integer');
		$this->form_validation->set_rules('CodNcm', 'CodNcm', 'max_length[8]');
		$this->form_validation->set_rules('ExIpi', 'ExIpi', 'max_length[3]');
		$this->form_validation->set_rules('CodGen', 'CodGen', 'required|integer');
		$this->form_validation->set_rules('CodLst', 'CodLst', 'required|integer');
		$this->form_validation->set_rules('AliqIcms', 'AliqIcms', 'required|decimal');
		$this->form_validation->set_rules('DtIni', 'DtIni', 'required|valid_datetime');
		$this->form_validation->set_rules('DtFin', 'DtFin', 'required|valid_datetime');
		$this->form_validation->set_rules('PessoaJuridicaId', 'PessoaJuridicaId', 'integer');
		$this->form_validation->set_rules('UserId', 'UserId', 'integer');
		$this->form_validation->set_rules('Reg0205EFDCId', 'Reg0205EFDCId', 'integer');
		$this->form_validation->set_rules('Reg0206EFDCId', 'Reg0206EFDCId', 'integer');
		$this->form_validation->set_rules('Reg020EFDCId', 'Reg020EFDCId', 'integer');
		
    parent::create();
  }
  
  public function update($Id){
    $this->form_validation->set_rules('Reg', 'Reg', 'required|max_length[4]');
		$this->form_validation->set_rules('CodItem', 'CodItem', 'required|max_length[60]');
		$this->form_validation->set_rules('DescricaoItem', 'DescricaoItem', 'required|max_length[255]');
		$this->form_validation->set_rules('CodBarra', 'CodBarra', 'max_length[255]');
		$this->form_validation->set_rules('CodAntItem', 'CodAntItem', 'max_length[60]');
		$this->form_validation->set_rules('Reg0190EFDCId', 'Reg0190EFDCId', 'integer');
		$this->form_validation->set_rules('TipoItem', 'TipoItem', 'required|integer');
		$this->form_validation->set_rules('CodNcm', 'CodNcm', 'max_length[8]');
		$this->form_validation->set_rules('ExIpi', 'ExIpi', 'max_length[3]');
		$this->form_validation->set_rules('CodGen', 'CodGen', 'required|integer');
		$this->form_validation->set_rules('CodLst', 'CodLst', 'required|integer');
		$this->form_validation->set_rules('AliqIcms', 'AliqIcms', 'required|decimal');
		$this->form_validation->set_rules('DtIni', 'DtIni', 'required|valid_datetime');
		$this->form_validation->set_rules('DtFin', 'DtFin', 'required|valid_datetime');
		$this->form_validation->set_rules('PessoaJuridicaId', 'PessoaJuridicaId', 'integer');
		$this->form_validation->set_rules('UserId', 'UserId', 'integer');
		$this->form_validation->set_rules('Reg0205EFDCId', 'Reg0205EFDCId', 'integer');
		$this->form_validation->set_rules('Reg0206EFDCId', 'Reg0206EFDCId', 'integer');
		$this->form_validation->set_rules('Reg020EFDCId', 'Reg020EFDCId', 'integer');
		
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
					<label for='CodItem'></label>
					<input type='text' name='CodItem' id='CodItem' class='form-control' placeholder='' required>
				</div>
				<div class='form-group'>
					<label for='DescricaoItem'></label>
					<input type='text' name='DescricaoItem' id='DescricaoItem' class='form-control' placeholder='' required>
				</div>
				<div class='form-group'>
					<label for='CodBarra'></label>
					<input type='text' name='CodBarra' id='CodBarra' class='form-control' placeholder='' >
				</div>
				<div class='form-group'>
					<label for='CodAntItem'></label>
					<input type='text' name='CodAntItem' id='CodAntItem' class='form-control' placeholder='' >
				</div>
				<div class='form-group'>
					<label for='Reg0190EFDCId'></label>
					<input type='number' name='Reg0190EFDCId' id='Reg0190EFDCId' class='form-control' placeholder='' >
				</div>
				<div class='form-group'>
					<label for='TipoItem'></label>
					<input type='number' name='TipoItem' id='TipoItem' class='form-control' placeholder='' required>
				</div>
				<div class='form-group'>
					<label for='CodNcm'></label>
					<input type='text' name='CodNcm' id='CodNcm' class='form-control' placeholder='' >
				</div>
				<div class='form-group'>
					<label for='ExIpi'></label>
					<input type='text' name='ExIpi' id='ExIpi' class='form-control' placeholder='' >
				</div>
				<div class='form-group'>
					<label for='CodGen'></label>
					<input type='number' name='CodGen' id='CodGen' class='form-control' placeholder='' required>
				</div>
				<div class='form-group'>
					<label for='CodLst'></label>
					<input type='number' name='CodLst' id='CodLst' class='form-control' placeholder='' required>
				</div>
				<div class='form-group'>
					<label for='AliqIcms'></label>
					<input type='' name='AliqIcms' id='AliqIcms' class='form-control' placeholder='' required>
				</div>
				<div class='form-group'>
					<label for='DtIni'></label>
					<input type='datetime-local' name='DtIni' id='DtIni' class='form-control' placeholder='' required>
				</div>
				<div class='form-group'>
					<label for='DtFin'></label>
					<input type='datetime-local' name='DtFin' id='DtFin' class='form-control' placeholder='' required>
				</div>
				<div class='form-group'>
					<label for='PessoaJuridicaId'></label>
					<input type='number' name='PessoaJuridicaId' id='PessoaJuridicaId' class='form-control' placeholder='' >
				</div>
				<div class='form-group'>
					<label for='UserId'></label>
					<input type='number' name='UserId' id='UserId' class='form-control' placeholder='' >
				</div>
				<div class='form-group'>
					<label for='Reg0205EFDCId'></label>
					<input type='number' name='Reg0205EFDCId' id='Reg0205EFDCId' class='form-control' placeholder='' >
				</div>
				<div class='form-group'>
					<label for='Reg0206EFDCId'></label>
					<input type='number' name='Reg0206EFDCId' id='Reg0206EFDCId' class='form-control' placeholder='' >
				</div>
				<div class='form-group'>
					<label for='Reg020EFDCId'></label>
					<input type='number' name='Reg020EFDCId' id='Reg020EFDCId' class='form-control' placeholder='' >
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

