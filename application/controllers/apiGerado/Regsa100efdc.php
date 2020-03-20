<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Regsa100efdc extends MY_Controller {

  public function  __construct() {
    parent::__construct();
    $this->table = 'regsa100efdc';
    $this->nameId = 'Id';
  }

  public function get($Id = '', $date = ''){
    parent::get($Id, $date);
  }
  
  public function setDefaultValue(){
    $_POST['Reg'] = !isset($_POST['Reg']) ? 'A100' : $_POST['Reg'];
		
  }

  public function create(){
    $this->form_validation->set_rules('Reg', 'Reg', 'required|max_length[4]');
		$this->form_validation->set_rules('IndicadorTipoOperacao', 'IndicadorTipoOperacao', 'required|integer');
		$this->form_validation->set_rules('IndicadorEmitenteDocumento', 'IndicadorEmitenteDocumento', 'required|integer');
		$this->form_validation->set_rules('Reg0150EFDCId', 'Reg0150EFDCId', 'integer');
		$this->form_validation->set_rules('SituacaoDocumentoFiscal', 'SituacaoDocumentoFiscal', 'required|integer');
		$this->form_validation->set_rules('Ser', 'Ser', 'max_length[20]');
		$this->form_validation->set_rules('Sub', 'Sub', 'max_length[20]');
		$this->form_validation->set_rules('NumDoc', 'NumDoc', 'required|max_length[60]');
		$this->form_validation->set_rules('ChaveEletronica', 'ChaveEletronica', 'max_length[60]');
		$this->form_validation->set_rules('DtEmissaoDoc', 'DtEmissaoDoc', 'required|valid_datetime');
		$this->form_validation->set_rules('DtConclusaoServico', 'DtConclusaoServico', 'required|valid_datetime');
		$this->form_validation->set_rules('VlDocumento', 'VlDocumento', 'required|decimal');
		$this->form_validation->set_rules('IndicadorTipoPagamento', 'IndicadorTipoPagamento', 'required|integer');
		$this->form_validation->set_rules('VlDesconto', 'VlDesconto', 'required|decimal');
		$this->form_validation->set_rules('VlBcPis', 'VlBcPis', 'required|decimal');
		$this->form_validation->set_rules('VlPis', 'VlPis', 'required|decimal');
		$this->form_validation->set_rules('VlBcCofins', 'VlBcCofins', 'required|decimal');
		$this->form_validation->set_rules('VlCofins', 'VlCofins', 'required|decimal');
		$this->form_validation->set_rules('VlPisRetido', 'VlPisRetido', 'required|decimal');
		$this->form_validation->set_rules('VlConfinsRetido', 'VlConfinsRetido', 'required|decimal');
		$this->form_validation->set_rules('VlIss', 'VlIss', 'required|decimal');
		$this->form_validation->set_rules('DtIni', 'DtIni', 'required|valid_datetime');
		$this->form_validation->set_rules('DtFin', 'DtFin', 'required|valid_datetime');
		$this->form_validation->set_rules('PessoaJuridicaId', 'PessoaJuridicaId', 'integer');
		$this->form_validation->set_rules('UserId', 'UserId', 'integer');
		
    parent::create();
  }
  
  public function update($Id){
    $this->form_validation->set_rules('Reg', 'Reg', 'required|max_length[4]');
		$this->form_validation->set_rules('IndicadorTipoOperacao', 'IndicadorTipoOperacao', 'required|integer');
		$this->form_validation->set_rules('IndicadorEmitenteDocumento', 'IndicadorEmitenteDocumento', 'required|integer');
		$this->form_validation->set_rules('Reg0150EFDCId', 'Reg0150EFDCId', 'integer');
		$this->form_validation->set_rules('SituacaoDocumentoFiscal', 'SituacaoDocumentoFiscal', 'required|integer');
		$this->form_validation->set_rules('Ser', 'Ser', 'max_length[20]');
		$this->form_validation->set_rules('Sub', 'Sub', 'max_length[20]');
		$this->form_validation->set_rules('NumDoc', 'NumDoc', 'required|max_length[60]');
		$this->form_validation->set_rules('ChaveEletronica', 'ChaveEletronica', 'max_length[60]');
		$this->form_validation->set_rules('DtEmissaoDoc', 'DtEmissaoDoc', 'required|valid_datetime');
		$this->form_validation->set_rules('DtConclusaoServico', 'DtConclusaoServico', 'required|valid_datetime');
		$this->form_validation->set_rules('VlDocumento', 'VlDocumento', 'required|decimal');
		$this->form_validation->set_rules('IndicadorTipoPagamento', 'IndicadorTipoPagamento', 'required|integer');
		$this->form_validation->set_rules('VlDesconto', 'VlDesconto', 'required|decimal');
		$this->form_validation->set_rules('VlBcPis', 'VlBcPis', 'required|decimal');
		$this->form_validation->set_rules('VlPis', 'VlPis', 'required|decimal');
		$this->form_validation->set_rules('VlBcCofins', 'VlBcCofins', 'required|decimal');
		$this->form_validation->set_rules('VlCofins', 'VlCofins', 'required|decimal');
		$this->form_validation->set_rules('VlPisRetido', 'VlPisRetido', 'required|decimal');
		$this->form_validation->set_rules('VlConfinsRetido', 'VlConfinsRetido', 'required|decimal');
		$this->form_validation->set_rules('VlIss', 'VlIss', 'required|decimal');
		$this->form_validation->set_rules('DtIni', 'DtIni', 'required|valid_datetime');
		$this->form_validation->set_rules('DtFin', 'DtFin', 'required|valid_datetime');
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
					<label for='CNPJ'></label>
					<input type='text' name='CNPJ' id='CNPJ' class='form-control' placeholder='' >
				</div>
				<div class='form-group'>
					<label for='IndicadorTipoOperacao'></label>
					<input type='number' name='IndicadorTipoOperacao' id='IndicadorTipoOperacao' class='form-control' placeholder='' required>
				</div>
				<div class='form-group'>
					<label for='IndicadorEmitenteDocumento'></label>
					<input type='number' name='IndicadorEmitenteDocumento' id='IndicadorEmitenteDocumento' class='form-control' placeholder='' required>
				</div>
				<div class='form-group'>
					<label for='Reg0150EFDCId'></label>
					<input type='number' name='Reg0150EFDCId' id='Reg0150EFDCId' class='form-control' placeholder='' >
				</div>
				<div class='form-group'>
					<label for='SituacaoDocumentoFiscal'></label>
					<input type='number' name='SituacaoDocumentoFiscal' id='SituacaoDocumentoFiscal' class='form-control' placeholder='' required>
				</div>
				<div class='form-group'>
					<label for='Ser'></label>
					<input type='text' name='Ser' id='Ser' class='form-control' placeholder='' >
				</div>
				<div class='form-group'>
					<label for='Sub'></label>
					<input type='text' name='Sub' id='Sub' class='form-control' placeholder='' >
				</div>
				<div class='form-group'>
					<label for='NumDoc'></label>
					<input type='text' name='NumDoc' id='NumDoc' class='form-control' placeholder='' required>
				</div>
				<div class='form-group'>
					<label for='ChaveEletronica'></label>
					<input type='text' name='ChaveEletronica' id='ChaveEletronica' class='form-control' placeholder='' >
				</div>
				<div class='form-group'>
					<label for='DtEmissaoDoc'></label>
					<input type='datetime-local' name='DtEmissaoDoc' id='DtEmissaoDoc' class='form-control' placeholder='' required>
				</div>
				<div class='form-group'>
					<label for='DtConclusaoServico'></label>
					<input type='datetime-local' name='DtConclusaoServico' id='DtConclusaoServico' class='form-control' placeholder='' required>
				</div>
				<div class='form-group'>
					<label for='VlDocumento'></label>
					<input type='' name='VlDocumento' id='VlDocumento' class='form-control' placeholder='' required>
				</div>
				<div class='form-group'>
					<label for='IndicadorTipoPagamento'></label>
					<input type='number' name='IndicadorTipoPagamento' id='IndicadorTipoPagamento' class='form-control' placeholder='' required>
				</div>
				<div class='form-group'>
					<label for='VlDesconto'></label>
					<input type='' name='VlDesconto' id='VlDesconto' class='form-control' placeholder='' required>
				</div>
				<div class='form-group'>
					<label for='VlBcPis'></label>
					<input type='' name='VlBcPis' id='VlBcPis' class='form-control' placeholder='' required>
				</div>
				<div class='form-group'>
					<label for='VlPis'></label>
					<input type='' name='VlPis' id='VlPis' class='form-control' placeholder='' required>
				</div>
				<div class='form-group'>
					<label for='VlBcCofins'></label>
					<input type='' name='VlBcCofins' id='VlBcCofins' class='form-control' placeholder='' required>
				</div>
				<div class='form-group'>
					<label for='VlCofins'></label>
					<input type='' name='VlCofins' id='VlCofins' class='form-control' placeholder='' required>
				</div>
				<div class='form-group'>
					<label for='VlPisRetido'></label>
					<input type='' name='VlPisRetido' id='VlPisRetido' class='form-control' placeholder='' required>
				</div>
				<div class='form-group'>
					<label for='VlConfinsRetido'></label>
					<input type='' name='VlConfinsRetido' id='VlConfinsRetido' class='form-control' placeholder='' required>
				</div>
				<div class='form-group'>
					<label for='VlIss'></label>
					<input type='' name='VlIss' id='VlIss' class='form-control' placeholder='' required>
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

