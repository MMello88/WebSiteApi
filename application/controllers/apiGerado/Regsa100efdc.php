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
		$this->form_validation->set_rules('CNPJ', 'CNPJ', '');
		$this->form_validation->set_rules('IndicadorTipoOperacao', 'IndicadorTipoOperacao', 'required|integer');
		$this->form_validation->set_rules('IndicadorEmitenteDocumento', 'IndicadorEmitenteDocumento', 'required|integer');
		$this->form_validation->set_rules('Reg0150EFDCId', 'Reg0150EFDCId', 'integer');
		$this->form_validation->set_rules('SituacaoDocumentoFiscal', 'SituacaoDocumentoFiscal', 'required|integer');
		$this->form_validation->set_rules('Ser', 'Ser', 'max_length[20]');
		$this->form_validation->set_rules('Sub', 'Sub', 'max_length[20]');
		$this->form_validation->set_rules('NumDoc', 'NumDoc', 'required|max_length[60]');
		$this->form_validation->set_rules('ChaveEletronica', 'ChaveEletronica', 'max_length[60]');
		$this->form_validation->set_rules('DtEmissaoDoc', 'DtEmissaoDoc', 'required|valid_date');
		$this->form_validation->set_rules('DtConclusaoServico', 'DtConclusaoServico', 'required|valid_date');
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
		$this->form_validation->set_rules('DtIni', 'DtIni', 'required|valid_date');
		$this->form_validation->set_rules('DtFin', 'DtFin', 'valid_date');
		$this->form_validation->set_rules('PessoaJuridicaId', 'PessoaJuridicaId', 'integer');
		$this->form_validation->set_rules('UserId', 'UserId', 'integer');
		
    parent::create();
  }
  
  public function update($Id){
    $this->form_validation->set_rules('Reg', 'Reg', 'required|max_length[4]');
		$this->form_validation->set_rules('CNPJ', 'CNPJ', '');
		$this->form_validation->set_rules('IndicadorTipoOperacao', 'IndicadorTipoOperacao', 'required|integer');
		$this->form_validation->set_rules('IndicadorEmitenteDocumento', 'IndicadorEmitenteDocumento', 'required|integer');
		$this->form_validation->set_rules('Reg0150EFDCId', 'Reg0150EFDCId', 'integer');
		$this->form_validation->set_rules('SituacaoDocumentoFiscal', 'SituacaoDocumentoFiscal', 'required|integer');
		$this->form_validation->set_rules('Ser', 'Ser', 'max_length[20]');
		$this->form_validation->set_rules('Sub', 'Sub', 'max_length[20]');
		$this->form_validation->set_rules('NumDoc', 'NumDoc', 'required|max_length[60]');
		$this->form_validation->set_rules('ChaveEletronica', 'ChaveEletronica', 'max_length[60]');
		$this->form_validation->set_rules('DtEmissaoDoc', 'DtEmissaoDoc', 'required|valid_date');
		$this->form_validation->set_rules('DtConclusaoServico', 'DtConclusaoServico', 'required|valid_date');
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
				<legend>regsa100efdc</legend>
				<div class='form-group'>
					<label for='Id'>Id</label>
					<input type='' name='Id' id='Id' class='form-control' placeholder='Id' required>
				</div>
				<div class='form-group'>
					<label for='Reg'>Reg</label>
					<input type='hidden' name='Reg' id='Reg'>
				</div>
				<div class='form-group'>
					<label for='CNPJ'>CNPJ</label>
					<input type='hidden' name='CNPJ' id='CNPJ'>
				</div>
				<div class='form-group'>
					<label for='IndicadorTipoOperacao'>IndicadorTipoOperacao</label>
					<input type='hidden' name='IndicadorTipoOperacao' id='IndicadorTipoOperacao'>
				</div>
				<div class='form-group'>
					<label for='IndicadorEmitenteDocumento'>IndicadorEmitenteDocumento</label>
					<input type='hidden' name='IndicadorEmitenteDocumento' id='IndicadorEmitenteDocumento'>
				</div>
				<div class='form-group'>
					<label for='Reg0150EFDCId'>Reg0150EFDCId</label>
					<input type='hidden' name='Reg0150EFDCId' id='Reg0150EFDCId'>
				</div>
				<div class='form-group'>
					<label for='SituacaoDocumentoFiscal'>SituacaoDocumentoFiscal</label>
					<input type='hidden' name='SituacaoDocumentoFiscal' id='SituacaoDocumentoFiscal'>
				</div>
				<div class='form-group'>
					<label for='Ser'>Ser</label>
					<input type='hidden' name='Ser' id='Ser'>
				</div>
				<div class='form-group'>
					<label for='Sub'>Sub</label>
					<input type='hidden' name='Sub' id='Sub'>
				</div>
				<div class='form-group'>
					<label for='NumDoc'>NumDoc</label>
					<input type='hidden' name='NumDoc' id='NumDoc'>
				</div>
				<div class='form-group'>
					<label for='ChaveEletronica'>ChaveEletronica</label>
					<input type='hidden' name='ChaveEletronica' id='ChaveEletronica'>
				</div>
				<div class='form-group'>
					<label for='DtEmissaoDoc'>DtEmissaoDoc</label>
					<input type='hidden' name='DtEmissaoDoc' id='DtEmissaoDoc'>
				</div>
				<div class='form-group'>
					<label for='DtConclusaoServico'>DtConclusaoServico</label>
					<input type='hidden' name='DtConclusaoServico' id='DtConclusaoServico'>
				</div>
				<div class='form-group'>
					<label for='VlDocumento'>VlDocumento</label>
					<input type='hidden' name='VlDocumento' id='VlDocumento'>
				</div>
				<div class='form-group'>
					<label for='IndicadorTipoPagamento'>IndicadorTipoPagamento</label>
					<input type='hidden' name='IndicadorTipoPagamento' id='IndicadorTipoPagamento'>
				</div>
				<div class='form-group'>
					<label for='VlDesconto'>VlDesconto</label>
					<input type='hidden' name='VlDesconto' id='VlDesconto'>
				</div>
				<div class='form-group'>
					<label for='VlBcPis'>VlBcPis</label>
					<input type='hidden' name='VlBcPis' id='VlBcPis'>
				</div>
				<div class='form-group'>
					<label for='VlPis'>VlPis</label>
					<input type='hidden' name='VlPis' id='VlPis'>
				</div>
				<div class='form-group'>
					<label for='VlBcCofins'>VlBcCofins</label>
					<input type='hidden' name='VlBcCofins' id='VlBcCofins'>
				</div>
				<div class='form-group'>
					<label for='VlCofins'>VlCofins</label>
					<input type='hidden' name='VlCofins' id='VlCofins'>
				</div>
				<div class='form-group'>
					<label for='VlPisRetido'>VlPisRetido</label>
					<input type='hidden' name='VlPisRetido' id='VlPisRetido'>
				</div>
				<div class='form-group'>
					<label for='VlConfinsRetido'>VlConfinsRetido</label>
					<input type='hidden' name='VlConfinsRetido' id='VlConfinsRetido'>
				</div>
				<div class='form-group'>
					<label for='VlIss'>VlIss</label>
					<input type='hidden' name='VlIss' id='VlIss'>
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

