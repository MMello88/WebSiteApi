<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Regs0500efdc extends MY_Controller {

  public function  __construct() {
    parent::__construct();
    $this->table = 'regs0500efdc';
    $this->nameId = 'Id';
    $this->usersId = 'UsersId';
    $this->joins = [
			['table' => 'pessoasjuridica', 'condition' => 'pessoasjuridica.Id = regs0500efdc.PessoaJuridicaId', 'type' => 'left'],
    ];
  }

  public function get($Id = '', $date = ''){
    parent::get($Id, $date);
  }
  
  public function setDefaultValue(){
    
  }

  public function create(){
    $this->form_validation->set_rules('Reg', 'Reg', 'required|max_length[4]');
		$this->form_validation->set_rules('DtAlteracao', 'DtAlteracao', 'required|valid_datetime');
		$this->form_validation->set_rules('CodNatCC', 'CodNatCC', 'required|in_list[01 - Contas de ativo,02 - Contas de passivo,03 - Patrimônio líquido,04 - Contas de resultado,05 - Contas de compensação,09 - Outras]');
		$this->form_validation->set_rules('IndCTA', 'IndCTA', 'required|max_length[1]');
		$this->form_validation->set_rules('Nivel', 'Nivel', 'required|integer');
		$this->form_validation->set_rules('CodCTA', 'CodCTA', 'required|max_length[255]');
		$this->form_validation->set_rules('NomeCTA', 'NomeCTA', 'required|max_length[60]');
		$this->form_validation->set_rules('CodCTARef', 'CodCTARef', 'max_length[60]');
		$this->form_validation->set_rules('CNPJEstab', 'CNPJEstab', 'required|integer');
		$this->form_validation->set_rules('DtIni', 'DtIni', 'required|valid_date');
		$this->form_validation->set_rules('DtFin', 'DtFin', 'valid_date');
		$this->form_validation->set_rules('PessoaJuridicaId', 'PessoaJuridicaId', 'integer');
		$this->form_validation->set_rules('UsersId', 'UsersId', 'integer');
		
    parent::create();
  }
  
  public function update($Id){
    $this->form_validation->set_rules('Reg', 'Reg', 'required|max_length[4]');
		$this->form_validation->set_rules('DtAlteracao', 'DtAlteracao', 'required|valid_datetime');
		$this->form_validation->set_rules('CodNatCC', 'CodNatCC', 'required|in_list[01 - Contas de ativo,02 - Contas de passivo,03 - Patrimônio líquido,04 - Contas de resultado,05 - Contas de compensação,09 - Outras]');
		$this->form_validation->set_rules('IndCTA', 'IndCTA', 'required|max_length[1]');
		$this->form_validation->set_rules('Nivel', 'Nivel', 'required|integer');
		$this->form_validation->set_rules('CodCTA', 'CodCTA', 'required|max_length[255]');
		$this->form_validation->set_rules('NomeCTA', 'NomeCTA', 'required|max_length[60]');
		$this->form_validation->set_rules('CodCTARef', 'CodCTARef', 'max_length[60]');
		$this->form_validation->set_rules('CNPJEstab', 'CNPJEstab', 'required|integer');
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
		<legend>Plano de Contas Contábeis</legend>
	</header>
	<div class='page-section'>
		<div class='section-block'>
			<div class='card' id='floating-label'>
				<div class='card-body'>
					<?= form_open(base_url('regs0500efdc/')) ?>
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
								<label for='DtAlteracao'>Data Alteração</label>
								<input type='datetime-local' name='DtAlteracao' id='DtAlteracao' class='form-control' placeholder='Data Alteração' required>
								<?php if(isset($response)): ?>
									<div class='invalid-feedback' style='display:block'><?= isset($response->error->DtAlteracao) ? $response->error->DtAlteracao : ''; ?></div>
								<?php endif; ?>
							</div>
							<div class='form-group'>
								<label for='CodNatCC'>Código Natureza Conta</label>
								<select name='CodNatCC' id='CodNatCC' class='custom-select' placeholder='Código Natureza Conta' required>
									<option value=''> Selecione </option>
									<option value='01 - Contas de ativo'> 01 - Contas de ativo </option>
									<option value='02 - Contas de passivo'> 02 - Contas de passivo </option>
									<option value='03 - Patrimônio líquido'> 03 - Patrimônio líquido </option>
									<option value='04 - Contas de resultado'> 04 - Contas de resultado </option>
									<option value='05 - Contas de compensação'> 05 - Contas de compensação </option>
									<option value='09 - Outras'> 09 - Outras </option>
								</select>
							</div>
							<div class='form-group'>
								<label for='IndCTA'>Indicador Tipo Conta</label>
								<input type='text' name='IndCTA' id='IndCTA' class='form-control' placeholder='Indicador Tipo Conta' required>
								<?php if(isset($response)): ?>
									<div class='invalid-feedback' style='display:block'><?= isset($response->error->IndCTA) ? $response->error->IndCTA : ''; ?></div>
								<?php endif; ?>
							</div>
							<div class='form-group'>
								<label for='Nivel'>Nível</label>
								<input type='number' name='Nivel' id='Nivel' class='form-control' placeholder='Nível' required>
								<?php if(isset($response)): ?>
									<div class='invalid-feedback' style='display:block'><?= isset($response->error->Nivel) ? $response->error->Nivel : ''; ?></div>
								<?php endif; ?>
							</div>
							<div class='form-group'>
								<label for='CodCTA'>Código</label>
								<input type='text' name='CodCTA' id='CodCTA' class='form-control' placeholder='Código' required>
								<?php if(isset($response)): ?>
									<div class='invalid-feedback' style='display:block'><?= isset($response->error->CodCTA) ? $response->error->CodCTA : ''; ?></div>
								<?php endif; ?>
							</div>
							<div class='form-group'>
								<label for='NomeCTA'>Nome</label>
								<input type='text' name='NomeCTA' id='NomeCTA' class='form-control' placeholder='Nome' required>
								<?php if(isset($response)): ?>
									<div class='invalid-feedback' style='display:block'><?= isset($response->error->NomeCTA) ? $response->error->NomeCTA : ''; ?></div>
								<?php endif; ?>
							</div>
							<div class='form-group'>
								<label for='CodCTARef'>Plano de Conta Referenciado</label>
								<input type='text' name='CodCTARef' id='CodCTARef' class='form-control' placeholder='Plano de Conta Referenciado' >
								<?php if(isset($response)): ?>
									<div class='invalid-feedback' style='display:block'><?= isset($response->error->CodCTARef) ? $response->error->CodCTARef : ''; ?></div>
								<?php endif; ?>
							</div>
							<div class='form-group'>
								<label for='CNPJEstab'>CNPJ do estabelecimento</label>
								<input type='number' name='CNPJEstab' id='CNPJEstab' class='form-control' placeholder='CNPJ do estabelecimento' required>
								<?php if(isset($response)): ?>
									<div class='invalid-feedback' style='display:block'><?= isset($response->error->CNPJEstab) ? $response->error->CNPJEstab : ''; ?></div>
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

