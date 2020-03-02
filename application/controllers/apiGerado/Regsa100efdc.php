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
    $_POST['Reg'] = 'A100';
  }

  public function create(){
    $this->form_validation->set_rules('Reg', 'Reg', 'required');
		$this->form_validation->set_rules('IndicadorTipoOperacao', 'IndicadorTipoOperacao', 'required');
		$this->form_validation->set_rules('IndicadorEmitenteDocumento', 'IndicadorEmitenteDocumento', 'required');
		$this->form_validation->set_rules('SituacaoDocumentoFiscal', 'SituacaoDocumentoFiscal', 'required');
		$this->form_validation->set_rules('NumDoc', 'NumDoc', 'required');
		$this->form_validation->set_rules('DtEmissaoDoc', 'DtEmissaoDoc', 'required');
		$this->form_validation->set_rules('DtConclusaoServico', 'DtConclusaoServico', 'required');
		$this->form_validation->set_rules('VlDocumento', 'VlDocumento', 'required');
		$this->form_validation->set_rules('IndicadorTipoPagamento', 'IndicadorTipoPagamento', 'required');
		$this->form_validation->set_rules('VlDesconto', 'VlDesconto', 'required');
		$this->form_validation->set_rules('VlBcPis', 'VlBcPis', 'required');
		$this->form_validation->set_rules('VlPis', 'VlPis', 'required');
		$this->form_validation->set_rules('VlBcCofins', 'VlBcCofins', 'required');
		$this->form_validation->set_rules('VlCofins', 'VlCofins', 'required');
		$this->form_validation->set_rules('VlPisRetido', 'VlPisRetido', 'required');
		$this->form_validation->set_rules('VlConfinsRetido', 'VlConfinsRetido', 'required');
		$this->form_validation->set_rules('VlIss', 'VlIss', 'required');
		$this->form_validation->set_rules('DtIni', 'DtIni', 'required');
		$this->form_validation->set_rules('DtFin', 'DtFin', 'required');
		
    parent::create();
  }
  
  public function update($Id){
    $this->form_validation->set_rules('Reg', 'Reg', 'required');
		$this->form_validation->set_rules('IndicadorTipoOperacao', 'IndicadorTipoOperacao', 'required');
		$this->form_validation->set_rules('IndicadorEmitenteDocumento', 'IndicadorEmitenteDocumento', 'required');
		$this->form_validation->set_rules('SituacaoDocumentoFiscal', 'SituacaoDocumentoFiscal', 'required');
		$this->form_validation->set_rules('NumDoc', 'NumDoc', 'required');
		$this->form_validation->set_rules('DtEmissaoDoc', 'DtEmissaoDoc', 'required');
		$this->form_validation->set_rules('DtConclusaoServico', 'DtConclusaoServico', 'required');
		$this->form_validation->set_rules('VlDocumento', 'VlDocumento', 'required');
		$this->form_validation->set_rules('IndicadorTipoPagamento', 'IndicadorTipoPagamento', 'required');
		$this->form_validation->set_rules('VlDesconto', 'VlDesconto', 'required');
		$this->form_validation->set_rules('VlBcPis', 'VlBcPis', 'required');
		$this->form_validation->set_rules('VlPis', 'VlPis', 'required');
		$this->form_validation->set_rules('VlBcCofins', 'VlBcCofins', 'required');
		$this->form_validation->set_rules('VlCofins', 'VlCofins', 'required');
		$this->form_validation->set_rules('VlPisRetido', 'VlPisRetido', 'required');
		$this->form_validation->set_rules('VlConfinsRetido', 'VlConfinsRetido', 'required');
		$this->form_validation->set_rules('VlIss', 'VlIss', 'required');
		$this->form_validation->set_rules('DtIni', 'DtIni', 'required');
		$this->form_validation->set_rules('DtFin', 'DtFin', 'required');
		
    parent::update($Id);
  }

  public function delete($Id){
    parent::delete($Id);
  }
}ocumento', 'VlDocumento', 'required');
		$this->form_validation->set_rules('IndicadorTipoPagamento', 'IndicadorTipoPagamento', 'required');
		$this->form_validation->set_rules('VlDesconto', 'VlDesconto', 'required');
		$this->form_validation->set_rules('VlBcPis', 'VlBcPis', 'required');
		$this->form_validation->set_rules('VlPis', 'VlPis', 'required');
		$this->form_validation->set_rules('VlBcCofins', 'VlBcCofins', 'required');
		$this->form_validation->set_rules('VlCofins', 'VlCofins', 'required');
		$this->form_validation->set_rules('VlPisRetido', 'VlPisRetido', 'required');
		$this->form_validation->set_rules('VlConfinsRetido', 'VlConfinsRetido', 'required');
		$this->form_validation->set_rules('VlIss', 'VlIss', 'required');
		$this->form_validation->set_rules('DtIni', 'DtIni', 'required');
		$this->form_validation->set_rules('DtFin', 'DtFin', 'required');
		$this->form_validation->set_rules('PessoaJuridicaId', 'PessoaJuridicaId', 'required');
		$this->form_validation->set_rules('UserId', 'UserId', 'required');
		
    parent::update($Id);
  }

  public function delete($Id){
    parent::delete($Id);
  }
}