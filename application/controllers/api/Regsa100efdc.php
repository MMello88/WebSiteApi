<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Regsa100efdc extends MY_Controller {

  public function  __construct() {
    parent::__construct();
    $this->table = 'regsa100efdc';
    $this->nameId = 'a100_Id';
    $this->usersId = 'a100_UsersId';
    $this->joins = [
			['table' => 'regs0150efdc', 'condition' => 'regs0150efdc.0150_Id = regsa100efdc.Reg0150EFDCId', 'type' => 'left'],
			['table' => 'pessoasjuridica', 'condition' => 'pessoasjuridica.pj_Id = regsa100efdc.a100_PessoaJuridicaId', 'type' => 'left'],
    ];
  }

  public function get($Id = '', $date = ''){
    parent::get($Id, $date);
  }

  public function setDefaultValue(){
    
  }

  public function create(){
    $this->form_validation->set_rules('a100_Reg', 'a100_Reg', 'required|max_length[4]');
		$this->form_validation->set_rules('a100_IndicadorTipoOperacao', 'a100_IndicadorTipoOperacao', 'required|integer');
		$this->form_validation->set_rules('a100_IndicadorEmitenteDocumento', 'a100_IndicadorEmitenteDocumento', 'required|integer');
		$this->form_validation->set_rules('Reg0150EFDCId', 'Reg0150EFDCId', 'integer');
		$this->form_validation->set_rules('a100_SituacaoDocumentoFiscal', 'a100_SituacaoDocumentoFiscal', 'required|integer');
		$this->form_validation->set_rules('a100_Ser', 'a100_Ser', 'max_length[20]');
		$this->form_validation->set_rules('a100_Sub', 'a100_Sub', 'max_length[20]');
		$this->form_validation->set_rules('a100_NumDoc', 'a100_NumDoc', 'required|max_length[60]');
		$this->form_validation->set_rules('a100_ChaveEletronica', 'a100_ChaveEletronica', 'max_length[60]');
		$this->form_validation->set_rules('a100_DtEmissaoDoc', 'a100_DtEmissaoDoc', 'required|valid_date');
		$this->form_validation->set_rules('a100_DtConclusaoServico', 'a100_DtConclusaoServico', 'required|valid_date');
		$this->form_validation->set_rules('a100_VlDocumento', 'a100_VlDocumento', 'required|decimal');
		$this->form_validation->set_rules('a100_IndicadorTipoPagamento', 'a100_IndicadorTipoPagamento', 'required|in_list[0- À vista,1- A prazo,9- Sem pagamento]');
		$this->form_validation->set_rules('a100_VlDesconto', 'a100_VlDesconto', 'required|decimal');
		$this->form_validation->set_rules('a100_VlBcPis', 'a100_VlBcPis', 'required|decimal');
		$this->form_validation->set_rules('a100_VlPis', 'a100_VlPis', 'required|decimal');
		$this->form_validation->set_rules('a100_VlBcCofins', 'a100_VlBcCofins', 'required|decimal');
		$this->form_validation->set_rules('a100_VlCofins', 'a100_VlCofins', 'required|decimal');
		$this->form_validation->set_rules('a100_VlPisRetido', 'a100_VlPisRetido', 'required|decimal');
		$this->form_validation->set_rules('a100_VlConfinsRetido', 'a100_VlConfinsRetido', 'required|decimal');
		$this->form_validation->set_rules('a100_VlIss', 'a100_VlIss', 'required|decimal');
		$this->form_validation->set_rules('a100_DtIni', 'a100_DtIni', 'required|valid_date');
		$this->form_validation->set_rules('a100_DtFin', 'a100_DtFin', 'valid_date');
		$this->form_validation->set_rules('a100_PessoaJuridicaId', 'a100_PessoaJuridicaId', 'integer');
		$this->form_validation->set_rules('a100_UsersId', 'a100_UsersId', 'integer');
		
    parent::create();
  }

  public function update($Id){
    $this->form_validation->set_rules('a100_Reg', 'a100_Reg', 'required|max_length[4]');
		$this->form_validation->set_rules('a100_IndicadorTipoOperacao', 'a100_IndicadorTipoOperacao', 'required|integer');
		$this->form_validation->set_rules('a100_IndicadorEmitenteDocumento', 'a100_IndicadorEmitenteDocumento', 'required|integer');
		$this->form_validation->set_rules('Reg0150EFDCId', 'Reg0150EFDCId', 'integer');
		$this->form_validation->set_rules('a100_SituacaoDocumentoFiscal', 'a100_SituacaoDocumentoFiscal', 'required|integer');
		$this->form_validation->set_rules('a100_Ser', 'a100_Ser', 'max_length[20]');
		$this->form_validation->set_rules('a100_Sub', 'a100_Sub', 'max_length[20]');
		$this->form_validation->set_rules('a100_NumDoc', 'a100_NumDoc', 'required|max_length[60]');
		$this->form_validation->set_rules('a100_ChaveEletronica', 'a100_ChaveEletronica', 'max_length[60]');
		$this->form_validation->set_rules('a100_DtEmissaoDoc', 'a100_DtEmissaoDoc', 'required|valid_date');
		$this->form_validation->set_rules('a100_DtConclusaoServico', 'a100_DtConclusaoServico', 'required|valid_date');
		$this->form_validation->set_rules('a100_VlDocumento', 'a100_VlDocumento', 'required|decimal');
		$this->form_validation->set_rules('a100_IndicadorTipoPagamento', 'a100_IndicadorTipoPagamento', 'required|in_list[0- À vista,1- A prazo,9- Sem pagamento]');
		$this->form_validation->set_rules('a100_VlDesconto', 'a100_VlDesconto', 'required|decimal');
		$this->form_validation->set_rules('a100_VlBcPis', 'a100_VlBcPis', 'required|decimal');
		$this->form_validation->set_rules('a100_VlPis', 'a100_VlPis', 'required|decimal');
		$this->form_validation->set_rules('a100_VlBcCofins', 'a100_VlBcCofins', 'required|decimal');
		$this->form_validation->set_rules('a100_VlCofins', 'a100_VlCofins', 'required|decimal');
		$this->form_validation->set_rules('a100_VlPisRetido', 'a100_VlPisRetido', 'required|decimal');
		$this->form_validation->set_rules('a100_VlConfinsRetido', 'a100_VlConfinsRetido', 'required|decimal');
		$this->form_validation->set_rules('a100_VlIss', 'a100_VlIss', 'required|decimal');
		$this->form_validation->set_rules('a100_DtIni', 'a100_DtIni', 'required|valid_date');
		$this->form_validation->set_rules('a100_DtFin', 'a100_DtFin', 'valid_date');
		$this->form_validation->set_rules('a100_PessoaJuridicaId', 'a100_PessoaJuridicaId', 'integer');
		$this->form_validation->set_rules('a100_UsersId', 'a100_UsersId', 'integer');
		
    parent::update($Id);
  }

  public function delete($Id){
    parent::delete($Id);
  }
}
