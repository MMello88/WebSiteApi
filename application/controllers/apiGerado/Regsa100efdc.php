<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Regsa100efdc extends MY_Controller {

  public function  __construct() {
    parent::__construct();
    $this->table = 'regsa100efdc';
    $this->nameId = 'Id';
    $this->usersId = 'UsersId';
    $this->joins = [
			['table' => 'regs0150efdc', 'condition' => 'regs0150efdc.Id = regsa100efdc.Reg0150EFDCId', 'type' => 'left'],
			['table' => 'pessoasjuridica', 'condition' => 'pessoasjuridica.Id = regsa100efdc.PessoaJuridicaId', 'type' => 'left'],
    ];
  }

  public function get($Id = '', $date = ''){
    parent::get($Id, $date);
  }
  
  public function setDefaultValue(){
    
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
		$this->form_validation->set_rules('DtEmissaoDoc', 'DtEmissaoDoc', 'required|valid_date');
		$this->form_validation->set_rules('DtConclusaoServico', 'DtConclusaoServico', 'required|valid_date');
		$this->form_validation->set_rules('VlDocumento', 'VlDocumento', 'required|decimal');
		$this->form_validation->set_rules('IndicadorTipoPagamento', 'IndicadorTipoPagamento', 'required|in_list[0- À vista,1- A prazo,9- Sem pagamento]');
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
		$this->form_validation->set_rules('UsersId', 'UsersId', 'integer');
		
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
		$this->form_validation->set_rules('DtEmissaoDoc', 'DtEmissaoDoc', 'required|valid_date');
		$this->form_validation->set_rules('DtConclusaoServico', 'DtConclusaoServico', 'required|valid_date');
		$this->form_validation->set_rules('VlDocumento', 'VlDocumento', 'required|decimal');
		$this->form_validation->set_rules('IndicadorTipoPagamento', 'IndicadorTipoPagamento', 'required|in_list[0- À vista,1- A prazo,9- Sem pagamento]');
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
		$this->form_validation->set_rules('UsersId', 'UsersId', 'integer');
		
    parent::update($Id);
  }

  public function delete($Id){
    parent::delete($Id);
  }
}

/*
	<header class='page-title-bar'>
		<legend>Documento - Nota Fiscal de Serviço</legend>
	</header>
	<div class='page-section'>
		<div class='section-block'>
			<div class='card' id='floating-label'>
				<div class='card-body'>
					<?= form_open(base_url('regsa100efdc/')) ?>
						<fieldset>
							<input type='hidden' name='Id' id='Id'>
							<div class='form-group'>
								<label for='Reg'>Registro</label>
								<input type='text' name='Reg' id='Reg' class='form-control' placeholder='Registro' required>
								<?php if(isset($response)): ?>
									<div class='invalid-feedback' style='display:block'><?= isset($response->error->Reg) ? $response->error->Reg : ''; ?></div>
								<?php endif; ?>
							</div>
							<div class='form-group'>
								<label for='CNPJ'>CNPJ</label>
								<input type='text' name='CNPJ' id='CNPJ' class='form-control' placeholder='CNPJ' >
								<?php if(isset($response)): ?>
									<div class='invalid-feedback' style='display:block'><?= isset($response->error->CNPJ) ? $response->error->CNPJ : ''; ?></div>
								<?php endif; ?>
							</div>
							<div class='form-group'>
								<label for='IndicadorTipoOperacao'>Indicador Tipo Operação</label>
								<input type='number' name='IndicadorTipoOperacao' id='IndicadorTipoOperacao' class='form-control' placeholder='Indicador Tipo Operação' required>
								<?php if(isset($response)): ?>
									<div class='invalid-feedback' style='display:block'><?= isset($response->error->IndicadorTipoOperacao) ? $response->error->IndicadorTipoOperacao : ''; ?></div>
								<?php endif; ?>
							</div>
							<div class='form-group'>
								<label for='IndicadorEmitenteDocumento'>Indicador Emitente</label>
								<input type='number' name='IndicadorEmitenteDocumento' id='IndicadorEmitenteDocumento' class='form-control' placeholder='Indicador Emitente' required>
								<?php if(isset($response)): ?>
									<div class='invalid-feedback' style='display:block'><?= isset($response->error->IndicadorEmitenteDocumento) ? $response->error->IndicadorEmitenteDocumento : ''; ?></div>
								<?php endif; ?>
							</div>
							<div class='form-group'>
								<label for='Reg0150EFDCId'>Participante</label>
								<input type='number' name='Reg0150EFDCId' id='Reg0150EFDCId' class='form-control' placeholder='Participante' >
								<?php if(isset($response)): ?>
									<div class='invalid-feedback' style='display:block'><?= isset($response->error->Reg0150EFDCId) ? $response->error->Reg0150EFDCId : ''; ?></div>
								<?php endif; ?>
							</div>
							<div class='form-group'>
								<label for='SituacaoDocumentoFiscal'>Código Situação</label>
								<input type='number' name='SituacaoDocumentoFiscal' id='SituacaoDocumentoFiscal' class='form-control' placeholder='Código Situação' required>
								<?php if(isset($response)): ?>
									<div class='invalid-feedback' style='display:block'><?= isset($response->error->SituacaoDocumentoFiscal) ? $response->error->SituacaoDocumentoFiscal : ''; ?></div>
								<?php endif; ?>
							</div>
							<div class='form-group'>
								<label for='Ser'>Série</label>
								<input type='text' name='Ser' id='Ser' class='form-control' placeholder='Série' >
								<?php if(isset($response)): ?>
									<div class='invalid-feedback' style='display:block'><?= isset($response->error->Ser) ? $response->error->Ser : ''; ?></div>
								<?php endif; ?>
							</div>
							<div class='form-group'>
								<label for='Sub'>Subserie</label>
								<input type='text' name='Sub' id='Sub' class='form-control' placeholder='Subserie' >
								<?php if(isset($response)): ?>
									<div class='invalid-feedback' style='display:block'><?= isset($response->error->Sub) ? $response->error->Sub : ''; ?></div>
								<?php endif; ?>
							</div>
							<div class='form-group'>
								<label for='NumDoc'>Número Documento</label>
								<input type='text' name='NumDoc' id='NumDoc' class='form-control' placeholder='Número Documento' required>
								<?php if(isset($response)): ?>
									<div class='invalid-feedback' style='display:block'><?= isset($response->error->NumDoc) ? $response->error->NumDoc : ''; ?></div>
								<?php endif; ?>
							</div>
							<div class='form-group'>
								<label for='ChaveEletronica'>Chave Eletrônica</label>
								<input type='text' name='ChaveEletronica' id='ChaveEletronica' class='form-control' placeholder='Chave Eletrônica' >
								<?php if(isset($response)): ?>
									<div class='invalid-feedback' style='display:block'><?= isset($response->error->ChaveEletronica) ? $response->error->ChaveEletronica : ''; ?></div>
								<?php endif; ?>
							</div>
							<div class='form-group'>
								<label for='DtEmissaoDoc'>Data Emissão Documento</label>
								<input type='date' name='DtEmissaoDoc' id='DtEmissaoDoc' class='form-control' placeholder='Data Emissão Documento' required>
								<?php if(isset($response)): ?>
									<div class='invalid-feedback' style='display:block'><?= isset($response->error->DtEmissaoDoc) ? $response->error->DtEmissaoDoc : ''; ?></div>
								<?php endif; ?>
							</div>
							<div class='form-group'>
								<label for='DtConclusaoServico'>Data Conclusão do Serviço</label>
								<input type='date' name='DtConclusaoServico' id='DtConclusaoServico' class='form-control' placeholder='Data Conclusão do Serviço' required>
								<?php if(isset($response)): ?>
									<div class='invalid-feedback' style='display:block'><?= isset($response->error->DtConclusaoServico) ? $response->error->DtConclusaoServico : ''; ?></div>
								<?php endif; ?>
							</div>
							<div class='form-group'>
								<label for='VlDocumento'>Valor Total</label>
								<input type='' name='VlDocumento' id='VlDocumento' class='form-control' placeholder='Valor Total' required>
								<?php if(isset($response)): ?>
									<div class='invalid-feedback' style='display:block'><?= isset($response->error->VlDocumento) ? $response->error->VlDocumento : ''; ?></div>
								<?php endif; ?>
							</div>
							<div class='form-group'>
								<label for='IndicadorTipoPagamento'>Tipo de Pagamento</label>
								<select name='IndicadorTipoPagamento' id='IndicadorTipoPagamento' class='custom-select' placeholder='Tipo de Pagamento' required>
									<option value=''> Selecione </option>
									<option value='0- À vista'> 0- À vista </option>
									<option value='1- A prazo'> 1- A prazo </option>
									<option value='9- Sem pagamento'> 9- Sem pagamento </option>
								</select>
							</div>
							<div class='form-group'>
								<label for='VlDesconto'>Valor Total do Desconto</label>
								<input type='' name='VlDesconto' id='VlDesconto' class='form-control' placeholder='Valor Total do Desconto' required>
								<?php if(isset($response)): ?>
									<div class='invalid-feedback' style='display:block'><?= isset($response->error->VlDesconto) ? $response->error->VlDesconto : ''; ?></div>
								<?php endif; ?>
							</div>
							<div class='form-group'>
								<label for='VlBcPis'>Valor Base Cálculo PIS/PASEP</label>
								<input type='' name='VlBcPis' id='VlBcPis' class='form-control' placeholder='Valor Base Cálculo PIS/PASEP' required>
								<?php if(isset($response)): ?>
									<div class='invalid-feedback' style='display:block'><?= isset($response->error->VlBcPis) ? $response->error->VlBcPis : ''; ?></div>
								<?php endif; ?>
							</div>
							<div class='form-group'>
								<label for='VlPis'>Valor Total do PIS</label>
								<input type='' name='VlPis' id='VlPis' class='form-control' placeholder='Valor Total do PIS' required>
								<?php if(isset($response)): ?>
									<div class='invalid-feedback' style='display:block'><?= isset($response->error->VlPis) ? $response->error->VlPis : ''; ?></div>
								<?php endif; ?>
							</div>
							<div class='form-group'>
								<label for='VlBcCofins'>Valor Base Cálculo COFINS</label>
								<input type='' name='VlBcCofins' id='VlBcCofins' class='form-control' placeholder='Valor Base Cálculo COFINS' required>
								<?php if(isset($response)): ?>
									<div class='invalid-feedback' style='display:block'><?= isset($response->error->VlBcCofins) ? $response->error->VlBcCofins : ''; ?></div>
								<?php endif; ?>
							</div>
							<div class='form-group'>
								<label for='VlCofins'>Valor Total COFINS</label>
								<input type='' name='VlCofins' id='VlCofins' class='form-control' placeholder='Valor Total COFINS' required>
								<?php if(isset($response)): ?>
									<div class='invalid-feedback' style='display:block'><?= isset($response->error->VlCofins) ? $response->error->VlCofins : ''; ?></div>
								<?php endif; ?>
							</div>
							<div class='form-group'>
								<label for='VlPisRetido'>Valor Total do PIS Retido na Fonte</label>
								<input type='' name='VlPisRetido' id='VlPisRetido' class='form-control' placeholder='Valor Total do PIS Retido na Fonte' required>
								<?php if(isset($response)): ?>
									<div class='invalid-feedback' style='display:block'><?= isset($response->error->VlPisRetido) ? $response->error->VlPisRetido : ''; ?></div>
								<?php endif; ?>
							</div>
							<div class='form-group'>
								<label for='VlConfinsRetido'>Valor Total da COFINS Retido na Fonte</label>
								<input type='' name='VlConfinsRetido' id='VlConfinsRetido' class='form-control' placeholder='Valor Total da COFINS Retido na Fonte' required>
								<?php if(isset($response)): ?>
									<div class='invalid-feedback' style='display:block'><?= isset($response->error->VlConfinsRetido) ? $response->error->VlConfinsRetido : ''; ?></div>
								<?php endif; ?>
							</div>
							<div class='form-group'>
								<label for='VlIss'>Valor do ISS</label>
								<input type='' name='VlIss' id='VlIss' class='form-control' placeholder='Valor do ISS' required>
								<?php if(isset($response)): ?>
									<div class='invalid-feedback' style='display:block'><?= isset($response->error->VlIss) ? $response->error->VlIss : ''; ?></div>
								<?php endif; ?>
							</div>
							<div class='form-group'>
								<label for='DtIni'>Data Inicial</label>
								<input type='date' name='DtIni' id='DtIni' class='form-control' placeholder='Data Inicial' required>
								<?php if(isset($response)): ?>
									<div class='invalid-feedback' style='display:block'><?= isset($response->error->DtIni) ? $response->error->DtIni : ''; ?></div>
								<?php endif; ?>
							</div>
							<div class='form-group'>
								<label for='DtFin'>Data Final</label>
								<input type='date' name='DtFin' id='DtFin' class='form-control' placeholder='Data Final' >
								<?php if(isset($response)): ?>
									<div class='invalid-feedback' style='display:block'><?= isset($response->error->DtFin) ? $response->error->DtFin : ''; ?></div>
								<?php endif; ?>
							</div>
							<div class='form-group'>
								<label for='PessoaJuridicaId'>Pessoa Juridica</label>
								<input type='number' name='PessoaJuridicaId' id='PessoaJuridicaId' class='form-control' placeholder='Pessoa Juridica' >
								<?php if(isset($response)): ?>
									<div class='invalid-feedback' style='display:block'><?= isset($response->error->PessoaJuridicaId) ? $response->error->PessoaJuridicaId : ''; ?></div>
								<?php endif; ?>
							</div>
							<div class='form-group'>
								<label for='UsersId'>Usuário</label>
								<input type='number' name='UsersId' id='UsersId' class='form-control' placeholder='Usuário' >
								<?php if(isset($response)): ?>
									<div class='invalid-feedback' style='display:block'><?= isset($response->error->UsersId) ? $response->error->UsersId : ''; ?></div>
								<?php endif; ?>
							</div>
							<div class='form-actions'>
								<button class='btn btn-primary mr-auto' type='submit'>Salvar</button>
								<button class='btn btn-secondary ml-auto' type='submit'>Cancelar</button>
							</div>
					</fieldset>
					<?= form_close() ?>
				</div>
			</div>
		</div>
	</div>
*/

