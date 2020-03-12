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
		$this->form_validation->set_rules('DtIni', 'DtIni', 'required|valid_date');
		$this->form_validation->set_rules('DtFin', 'DtFin', 'valid_date');
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
		$this->form_validation->set_rules('DtIni', 'DtIni', 'required|valid_date');
		$this->form_validation->set_rules('DtFin', 'DtFin', 'valid_date');
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
				<legend>regs0200efdc</legend>
				<div class='form-group'>
					<label for='Id'>Id</label>
					<input type='' name='Id' id='Id' class='form-control' placeholder='Id' required>
				</div>
				<div class='form-group'>
					<label for='Reg'>Reg</label>
					<input type='hidden' name='Reg' id='Reg'>
				</div>
				<div class='form-group'>
					<label for='CodItem'>CodItem</label>
					<input type='hidden' name='CodItem' id='CodItem'>
				</div>
				<div class='form-group'>
					<label for='DescricaoItem'>DescricaoItem</label>
					<input type='hidden' name='DescricaoItem' id='DescricaoItem'>
				</div>
				<div class='form-group'>
					<label for='CodBarra'>CodBarra</label>
					<input type='hidden' name='CodBarra' id='CodBarra'>
				</div>
				<div class='form-group'>
					<label for='CodAntItem'>CodAntItem</label>
					<input type='hidden' name='CodAntItem' id='CodAntItem'>
				</div>
				<div class='form-group'>
					<label for='Reg0190EFDCId'>Reg0190EFDCId</label>
					<input type='hidden' name='Reg0190EFDCId' id='Reg0190EFDCId'>
				</div>
				<div class='form-group'>
					<label for='TipoItem'>TipoItem</label>
					<input type='hidden' name='TipoItem' id='TipoItem'>
				</div>
				<div class='form-group'>
					<label for='CodNcm'>CodNcm</label>
					<input type='hidden' name='CodNcm' id='CodNcm'>
				</div>
				<div class='form-group'>
					<label for='ExIpi'>ExIpi</label>
					<input type='hidden' name='ExIpi' id='ExIpi'>
				</div>
				<div class='form-group'>
					<label for='CodGen'>CodGen</label>
					<input type='hidden' name='CodGen' id='CodGen'>
				</div>
				<div class='form-group'>
					<label for='CodLst'>CodLst</label>
					<input type='hidden' name='CodLst' id='CodLst'>
				</div>
				<div class='form-group'>
					<label for='AliqIcms'>AliqIcms</label>
					<input type='hidden' name='AliqIcms' id='AliqIcms'>
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
					<label for='Reg0205EFDCId'>Reg0205EFDCId</label>
					<input type='hidden' name='Reg0205EFDCId' id='Reg0205EFDCId'>
				</div>
				<div class='form-group'>
					<label for='Reg0206EFDCId'>Reg0206EFDCId</label>
					<input type='hidden' name='Reg0206EFDCId' id='Reg0206EFDCId'>
				</div>
				<div class='form-group'>
					<label for='Reg020EFDCId'>Reg020EFDCId</label>
					<input type='hidden' name='Reg020EFDCId' id='Reg020EFDCId'>
				</div>
			</fieldset>
		</form>
	</div>
*/

