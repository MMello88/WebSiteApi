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
		$this->form_validation->set_rules('CNPJ', 'CNPJ', '');
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