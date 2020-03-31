<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Regs0000efdc extends MY_Controller {

  public function  __construct() {
    parent::__construct();
    $this->table = 'regs0000efdc';
    $this->nameId = 'Id';
    $this->usersId = 'UsersId';
    $this->joins = [
			['table' => 'ref311', 'condition' => 'ref311.Id = regs0000efdc.Ref311Id', 'type' => 'inner'],
			['table' => 'pessoasjuridica', 'condition' => 'pessoasjuridica.Id = regs0000efdc.PessoaJuridicaId', 'type' => 'left'],
			['table' => 'regs0001efdc', 'condition' => 'regs0001efdc.Id = regs0000efdc.Reg0001EFDCId', 'type' => 'left'],
			['table' => 'regs0110efdc', 'condition' => 'regs0110efdc.Id = regs0000efdc.Regs0110EFDCId', 'type' => 'left'],
    ];
  }

  public function get($Id = '', $date = ''){
    parent::get($Id, $date);
  }
  
  public function setDefaultValue(){
    
  }

  public function create(){
    $this->form_validation->set_rules('Reg', 'Reg', 'required|max_length[4]');
		$this->form_validation->set_rules('Ref311Id', 'Ref311Id', 'required|integer');
		$this->form_validation->set_rules('TipoEscrit', 'TipoEscrit', 'required|in_list[Original,Retificadora]');
		$this->form_validation->set_rules('IndSitEsp', 'IndSitEsp', 'required|in_list[Abertura,Cisão,Fusão,Incorporação,Encerramento]');
		$this->form_validation->set_rules('NumRecAnterior', 'NumRecAnterior', 'max_length[41]');
		$this->form_validation->set_rules('DtIni', 'DtIni', 'required|valid_date');
		$this->form_validation->set_rules('DtFin', 'DtFin', 'valid_date');
		$this->form_validation->set_rules('IndNatPj', 'IndNatPj', 'required|in_list[00 – Pessoa jurídica em geral,01 – Sociedade cooperativa,02 – Entidade sujeita ao PIS/Pasep exclusivamente com base na Folha de Salários,03 - Pessoa jurídica em geral participante de SCP como sócia ostensiva,04 – Sociedade cooperativa participante de SCP como sócia ostensiva,05 – Sociedade em Conta de Participação - SCP]');
		$this->form_validation->set_rules('IndAtiv', 'IndAtiv', 'required|in_list[0 – Industrial ou equiparado a industrial,1 – Prestador de serviços,2 - Atividade de comércio,3 – Pessoas jurídicas referidas nos §§ 6º, 8º e 9º do art. 3º da Lei nº 9.718, de 1998,4 – Atividade imobiliária,9 – Outros]');
		$this->form_validation->set_rules('PessoaJuridicaId', 'PessoaJuridicaId', 'integer');
		$this->form_validation->set_rules('UsersId', 'UsersId', 'integer');
		$this->form_validation->set_rules('Reg0001EFDCId', 'Reg0001EFDCId', 'integer');
		$this->form_validation->set_rules('Regs0110EFDCId', 'Regs0110EFDCId', 'integer');
		
    parent::create();
  }
  
  public function update($Id){
    $this->form_validation->set_rules('Reg', 'Reg', 'required|max_length[4]');
		$this->form_validation->set_rules('Ref311Id', 'Ref311Id', 'required|integer');
		$this->form_validation->set_rules('TipoEscrit', 'TipoEscrit', 'required|in_list[Original,Retificadora]');
		$this->form_validation->set_rules('IndSitEsp', 'IndSitEsp', 'required|in_list[Abertura,Cisão,Fusão,Incorporação,Encerramento]');
		$this->form_validation->set_rules('NumRecAnterior', 'NumRecAnterior', 'max_length[41]');
		$this->form_validation->set_rules('DtIni', 'DtIni', 'required|valid_date');
		$this->form_validation->set_rules('DtFin', 'DtFin', 'valid_date');
		$this->form_validation->set_rules('IndNatPj', 'IndNatPj', 'required|in_list[00 – Pessoa jurídica em geral,01 – Sociedade cooperativa,02 – Entidade sujeita ao PIS/Pasep exclusivamente com base na Folha de Salários,03 - Pessoa jurídica em geral participante de SCP como sócia ostensiva,04 – Sociedade cooperativa participante de SCP como sócia ostensiva,05 – Sociedade em Conta de Participação - SCP]');
		$this->form_validation->set_rules('IndAtiv', 'IndAtiv', 'required|in_list[0 – Industrial ou equiparado a industrial,1 – Prestador de serviços,2 - Atividade de comércio,3 – Pessoas jurídicas referidas nos §§ 6º, 8º e 9º do art. 3º da Lei nº 9.718, de 1998,4 – Atividade imobiliária,9 – Outros]');
		$this->form_validation->set_rules('PessoaJuridicaId', 'PessoaJuridicaId', 'integer');
		$this->form_validation->set_rules('UsersId', 'UsersId', 'integer');
		$this->form_validation->set_rules('Reg0001EFDCId', 'Reg0001EFDCId', 'integer');
		$this->form_validation->set_rules('Regs0110EFDCId', 'Regs0110EFDCId', 'integer');
		
    parent::update($Id);
  }

  public function delete($Id){
    parent::delete($Id);
  }
}

/*
	<header class='page-title-bar'>
		<legend>Abertura do Arquivo Digital e Identificação da Pessoa Jurídica</legend>
	</header>
	<div class='page-section'>
		<div class='section-block'>
			<div class='card' id='floating-label'>
				<div class='card-body'>
					<?= form_open(base_url('regs0000efdc/')) ?>
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
								<label for='Ref311Id'>Código Versão Leiaute</label>
								<input type='number' name='Ref311Id' id='Ref311Id' class='form-control' placeholder='Código Versão Leiaute' required>
								<?php if(isset($response)): ?>
									<div class='invalid-feedback' style='display:block'><?= isset($response->error->Ref311Id) ? $response->error->Ref311Id : ''; ?></div>
								<?php endif; ?>
							</div>
							<div class='form-group'>
								<label for='TipoEscrit'>Tipo Escrituração</label>
								<select name='TipoEscrit' id='TipoEscrit' class='custom-select' placeholder='Tipo Escrituração' required>
									<option value=''> Selecione </option>
									<option value='Original'> Original </option>
									<option value='Retificadora'> Retificadora </option>
								</select>
							</div>
							<div class='form-group'>
								<label for='IndSitEsp'>Indicador Situação Especial</label>
								<select name='IndSitEsp' id='IndSitEsp' class='custom-select' placeholder='Indicador Situação Especial' required>
									<option value=''> Selecione </option>
									<option value='Abertura'> Abertura </option>
									<option value='Cisão'> Cisão </option>
									<option value='Fusão'> Fusão </option>
									<option value='Incorporação'> Incorporação </option>
									<option value='Encerramento'> Encerramento </option>
								</select>
							</div>
							<div class='form-group'>
								<label for='NumRecAnterior'>Número Recibo Escrituração Anterior</label>
								<input type='text' name='NumRecAnterior' id='NumRecAnterior' class='form-control' placeholder='Número Recibo Escrituração Anterior' >
								<?php if(isset($response)): ?>
									<div class='invalid-feedback' style='display:block'><?= isset($response->error->NumRecAnterior) ? $response->error->NumRecAnterior : ''; ?></div>
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
								<label for='IndNatPj'>Indicador da Natureza</label>
								<select name='IndNatPj' id='IndNatPj' class='custom-select' placeholder='Indicador da Natureza' required>
									<option value=''> Selecione </option>
									<option value='00 – Pessoa jurídica em geral'> 00 – Pessoa jurídica em geral </option>
									<option value='01 – Sociedade cooperativa'> 01 – Sociedade cooperativa </option>
									<option value='02 – Entidade sujeita ao PIS/Pasep exclusivamente com base na Folha de Salários'> 02 – Entidade sujeita ao PIS/Pasep exclusivamente com base na Folha de Salários </option>
									<option value='03 - Pessoa jurídica em geral participante de SCP como sócia ostensiva'> 03 - Pessoa jurídica em geral participante de SCP como sócia ostensiva </option>
									<option value='04 – Sociedade cooperativa participante de SCP como sócia ostensiva'> 04 – Sociedade cooperativa participante de SCP como sócia ostensiva </option>
									<option value='05 – Sociedade em Conta de Participação - SCP'> 05 – Sociedade em Conta de Participação - SCP </option>
								</select>
							</div>
							<div class='form-group'>
								<label for='IndAtiv'>Indicador Tipo Atividade Preponderante</label>
								<select name='IndAtiv' id='IndAtiv' class='custom-select' placeholder='Indicador Tipo Atividade Preponderante' required>
									<option value=''> Selecione </option>
									<option value='0 – Industrial ou equiparado a industrial'> 0 – Industrial ou equiparado a industrial </option>
									<option value='1 – Prestador de serviços'> 1 – Prestador de serviços </option>
									<option value='2 - Atividade de comércio'> 2 - Atividade de comércio </option>
									<option value='3 – Pessoas jurídicas referidas nos §§ 6º'> 3 – Pessoas jurídicas referidas nos §§ 6º </option>
									<option value=' 8º e 9º do art. 3º da Lei nº 9.718'>  8º e 9º do art. 3º da Lei nº 9.718 </option>
									<option value=' de 1998'>  de 1998 </option>
									<option value='4 – Atividade imobiliária'> 4 – Atividade imobiliária </option>
									<option value='9 – Outros'> 9 – Outros </option>
								</select>
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
							<div class='form-group'>
								<label for='Reg0001EFDCId'>Abertura Bloco 0</label>
								<input type='number' name='Reg0001EFDCId' id='Reg0001EFDCId' class='form-control' placeholder='Abertura Bloco 0' >
								<?php if(isset($response)): ?>
									<div class='invalid-feedback' style='display:block'><?= isset($response->error->Reg0001EFDCId) ? $response->error->Reg0001EFDCId : ''; ?></div>
								<?php endif; ?>
							</div>
							<div class='form-group'>
								<label for='Regs0110EFDCId'>Regimes de Apuração da Contribuição Social e de Apropriação de Crédito</label>
								<input type='number' name='Regs0110EFDCId' id='Regs0110EFDCId' class='form-control' placeholder='Regimes de Apuração da Contribuição Social e de Apropriação de Crédito' >
								<?php if(isset($response)): ?>
									<div class='invalid-feedback' style='display:block'><?= isset($response->error->Regs0110EFDCId) ? $response->error->Regs0110EFDCId : ''; ?></div>
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

