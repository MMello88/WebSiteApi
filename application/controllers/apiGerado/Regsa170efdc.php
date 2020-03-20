<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Regsa170efdc extends MY_Controller {

  public function  __construct() {
    parent::__construct();
    $this->table = 'regsa170efdc';
    $this->nameId = 'Id';
  }

  public function get($Id = '', $date = ''){
    parent::get($Id, $date);
  }
  
  public function setDefaultValue(){
    $_POST['Reg'] = !isset($_POST['Reg']) ? 'A170' : $_POST['Reg'];
		
  }

  public function create(){
    $this->form_validation->set_rules('Reg', 'Reg', 'required|max_length[4]');
		$this->form_validation->set_rules('NumItem', 'NumItem', 'required|integer');
		$this->form_validation->set_rules('Reg0200EFDCId', 'Reg0200EFDCId', 'integer');
		$this->form_validation->set_rules('DescricaoComplementar', 'DescricaoComplementar', 'max_length[255]');
		$this->form_validation->set_rules('VlItem', 'VlItem', 'required|decimal');
		$this->form_validation->set_rules('VlDesconto', 'VlDesconto', 'required|decimal');
		$this->form_validation->set_rules('Ref431Id', 'Ref431Id', 'integer');
		$this->form_validation->set_rules('IndicadorOrigemCredito', 'IndicadorOrigemCredito', 'required|integer');
		$this->form_validation->set_rules('Ref433Id', 'Ref433Id', 'integer');
		$this->form_validation->set_rules('VlBcPis', 'VlBcPis', 'required|decimal');
		$this->form_validation->set_rules('VlAliqPis', 'VlAliqPis', 'required|decimal');
		$this->form_validation->set_rules('VlPis', 'VlPis', 'required|decimal');
		$this->form_validation->set_rules('Ref434Id', 'Ref434Id', 'integer');
		$this->form_validation->set_rules('VlBcCofins', 'VlBcCofins', 'required|decimal');
		$this->form_validation->set_rules('VlAliqCofins', 'VlAliqCofins', 'required|decimal');
		$this->form_validation->set_rules('VlCofins', 'VlCofins', 'required|decimal');
		$this->form_validation->set_rules('Reg0500EFDCId', 'Reg0500EFDCId', 'integer');
		$this->form_validation->set_rules('Reg0600EFDCId', 'Reg0600EFDCId', 'integer');
		$this->form_validation->set_rules('RegA100EFDCId', 'RegA100EFDCId', 'integer');
		
    parent::create();
  }
  
  public function update($Id){
    $this->form_validation->set_rules('Reg', 'Reg', 'required|max_length[4]');
		$this->form_validation->set_rules('NumItem', 'NumItem', 'required|integer');
		$this->form_validation->set_rules('Reg0200EFDCId', 'Reg0200EFDCId', 'integer');
		$this->form_validation->set_rules('DescricaoComplementar', 'DescricaoComplementar', 'max_length[255]');
		$this->form_validation->set_rules('VlItem', 'VlItem', 'required|decimal');
		$this->form_validation->set_rules('VlDesconto', 'VlDesconto', 'required|decimal');
		$this->form_validation->set_rules('Ref431Id', 'Ref431Id', 'integer');
		$this->form_validation->set_rules('IndicadorOrigemCredito', 'IndicadorOrigemCredito', 'required|integer');
		$this->form_validation->set_rules('Ref433Id', 'Ref433Id', 'integer');
		$this->form_validation->set_rules('VlBcPis', 'VlBcPis', 'required|decimal');
		$this->form_validation->set_rules('VlAliqPis', 'VlAliqPis', 'required|decimal');
		$this->form_validation->set_rules('VlPis', 'VlPis', 'required|decimal');
		$this->form_validation->set_rules('Ref434Id', 'Ref434Id', 'integer');
		$this->form_validation->set_rules('VlBcCofins', 'VlBcCofins', 'required|decimal');
		$this->form_validation->set_rules('VlAliqCofins', 'VlAliqCofins', 'required|decimal');
		$this->form_validation->set_rules('VlCofins', 'VlCofins', 'required|decimal');
		$this->form_validation->set_rules('Reg0500EFDCId', 'Reg0500EFDCId', 'integer');
		$this->form_validation->set_rules('Reg0600EFDCId', 'Reg0600EFDCId', 'integer');
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
					<label for='NumItem'></label>
					<input type='number' name='NumItem' id='NumItem' class='form-control' placeholder='' required>
				</div>
				<div class='form-group'>
					<label for='Reg0200EFDCId'></label>
					<input type='number' name='Reg0200EFDCId' id='Reg0200EFDCId' class='form-control' placeholder='' >
				</div>
				<div class='form-group'>
					<label for='DescricaoComplementar'></label>
					<input type='text' name='DescricaoComplementar' id='DescricaoComplementar' class='form-control' placeholder='' >
				</div>
				<div class='form-group'>
					<label for='VlItem'></label>
					<input type='' name='VlItem' id='VlItem' class='form-control' placeholder='' required>
				</div>
				<div class='form-group'>
					<label for='VlDesconto'></label>
					<input type='' name='VlDesconto' id='VlDesconto' class='form-control' placeholder='' required>
				</div>
				<div class='form-group'>
					<label for='Ref431Id'></label>
					<input type='number' name='Ref431Id' id='Ref431Id' class='form-control' placeholder='' >
				</div>
				<div class='form-group'>
					<label for='IndicadorOrigemCredito'></label>
					<input type='number' name='IndicadorOrigemCredito' id='IndicadorOrigemCredito' class='form-control' placeholder='' required>
				</div>
				<div class='form-group'>
					<label for='Ref433Id'></label>
					<input type='number' name='Ref433Id' id='Ref433Id' class='form-control' placeholder='' >
				</div>
				<div class='form-group'>
					<label for='VlBcPis'></label>
					<input type='' name='VlBcPis' id='VlBcPis' class='form-control' placeholder='' required>
				</div>
				<div class='form-group'>
					<label for='VlAliqPis'></label>
					<input type='' name='VlAliqPis' id='VlAliqPis' class='form-control' placeholder='' required>
				</div>
				<div class='form-group'>
					<label for='VlPis'></label>
					<input type='' name='VlPis' id='VlPis' class='form-control' placeholder='' required>
				</div>
				<div class='form-group'>
					<label for='Ref434Id'></label>
					<input type='number' name='Ref434Id' id='Ref434Id' class='form-control' placeholder='' >
				</div>
				<div class='form-group'>
					<label for='VlBcCofins'></label>
					<input type='' name='VlBcCofins' id='VlBcCofins' class='form-control' placeholder='' required>
				</div>
				<div class='form-group'>
					<label for='VlAliqCofins'></label>
					<input type='' name='VlAliqCofins' id='VlAliqCofins' class='form-control' placeholder='' required>
				</div>
				<div class='form-group'>
					<label for='VlCofins'></label>
					<input type='' name='VlCofins' id='VlCofins' class='form-control' placeholder='' required>
				</div>
				<div class='form-group'>
					<label for='Reg0500EFDCId'></label>
					<input type='number' name='Reg0500EFDCId' id='Reg0500EFDCId' class='form-control' placeholder='' >
				</div>
				<div class='form-group'>
					<label for='Reg0600EFDCId'></label>
					<input type='number' name='Reg0600EFDCId' id='Reg0600EFDCId' class='form-control' placeholder='' >
				</div>
				<div class='form-group'>
					<label for='RegA100EFDCId'></label>
					<input type='number' name='RegA100EFDCId' id='RegA100EFDCId' class='form-control' placeholder='' >
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

