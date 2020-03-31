<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Regs0140efdc extends MY_Controller {

  public function  __construct() {
    parent::__construct();
    $this->table = 'regs0140efdc';
    $this->nameId = 'Id';
    $this->usersId = 'UsersId';
    $this->joins = [
			['table' => 'municipios', 'condition' => 'municipios.Id = regs0140efdc.MunicipioId', 'type' => 'inner'],
			['table' => 'pessoasjuridica', 'condition' => 'pessoasjuridica.Id = regs0140efdc.PessoaJuridicaId', 'type' => 'left'],
			['table' => 'regs0145efdc', 'condition' => 'regs0145efdc.Id = regs0140efdc.Reg0145EFDCId', 'type' => 'left'],
    ];
  }

  public function get($Id = '', $date = ''){
    parent::get($Id, $date);
  }
  
  public function setDefaultValue(){
    
  }

  public function create(){
    $this->form_validation->set_rules('Reg', 'Reg', 'required|max_length[4]');
		$this->form_validation->set_rules('CodEstab', 'CodEstab', 'max_length[60]');
		$this->form_validation->set_rules('Nome', 'Nome', 'required|max_length[100]');
		$this->form_validation->set_rules('CNPJ', 'CNPJ', 'required|integer');
		$this->form_validation->set_rules('UF', 'UF', 'required|max_length[2]');
		$this->form_validation->set_rules('IE', 'IE', 'max_length[14]');
		$this->form_validation->set_rules('MunicipioId', 'MunicipioId', 'required|integer');
		$this->form_validation->set_rules('IM', 'IM', 'max_length[255]');
		$this->form_validation->set_rules('Suframa', 'Suframa', 'max_length[9]');
		$this->form_validation->set_rules('DtIni', 'DtIni', 'required|valid_date');
		$this->form_validation->set_rules('DtFin', 'DtFin', 'valid_date');
		$this->form_validation->set_rules('PessoaJuridicaId', 'PessoaJuridicaId', 'integer');
		$this->form_validation->set_rules('UsersId', 'UsersId', 'integer');
		$this->form_validation->set_rules('Reg0145EFDCId', 'Reg0145EFDCId', 'integer');
		
    parent::create();
  }
  
  public function update($Id){
    $this->form_validation->set_rules('Reg', 'Reg', 'required|max_length[4]');
		$this->form_validation->set_rules('CodEstab', 'CodEstab', 'max_length[60]');
		$this->form_validation->set_rules('Nome', 'Nome', 'required|max_length[100]');
		$this->form_validation->set_rules('CNPJ', 'CNPJ', 'required|integer');
		$this->form_validation->set_rules('UF', 'UF', 'required|max_length[2]');
		$this->form_validation->set_rules('IE', 'IE', 'max_length[14]');
		$this->form_validation->set_rules('MunicipioId', 'MunicipioId', 'required|integer');
		$this->form_validation->set_rules('IM', 'IM', 'max_length[255]');
		$this->form_validation->set_rules('Suframa', 'Suframa', 'max_length[9]');
		$this->form_validation->set_rules('DtIni', 'DtIni', 'required|valid_date');
		$this->form_validation->set_rules('DtFin', 'DtFin', 'valid_date');
		$this->form_validation->set_rules('PessoaJuridicaId', 'PessoaJuridicaId', 'integer');
		$this->form_validation->set_rules('UsersId', 'UsersId', 'integer');
		$this->form_validation->set_rules('Reg0145EFDCId', 'Reg0145EFDCId', 'integer');
		
    parent::update($Id);
  }

  public function delete($Id){
    parent::delete($Id);
  }
}

/*
	<header class='page-title-bar'>
		<legend>Tabela de Cadastro de Estabelecimentos</legend>
	</header>
	<div class='page-section'>
		<div class='section-block'>
			<div class='card' id='floating-label'>
				<div class='card-body'>
					<?= form_open(base_url('regs0140efdc/')) ?>
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
								<label for='CodEstab'>Código</label>
								<input type='text' name='CodEstab' id='CodEstab' class='form-control' placeholder='Código' >
								<?php if(isset($response)): ?>
									<div class='invalid-feedback' style='display:block'><?= isset($response->error->CodEstab) ? $response->error->CodEstab : ''; ?></div>
								<?php endif; ?>
							</div>
							<div class='form-group'>
								<label for='Nome'>Nome</label>
								<input type='text' name='Nome' id='Nome' class='form-control' placeholder='Nome' required>
								<?php if(isset($response)): ?>
									<div class='invalid-feedback' style='display:block'><?= isset($response->error->Nome) ? $response->error->Nome : ''; ?></div>
								<?php endif; ?>
							</div>
							<div class='form-group'>
								<label for='CNPJ'>CNPJ</label>
								<input type='number' name='CNPJ' id='CNPJ' class='form-control' placeholder='CNPJ' required>
								<?php if(isset($response)): ?>
									<div class='invalid-feedback' style='display:block'><?= isset($response->error->CNPJ) ? $response->error->CNPJ : ''; ?></div>
								<?php endif; ?>
							</div>
							<div class='form-group'>
								<label for='UF'>UF</label>
								<input type='text' name='UF' id='UF' class='form-control' placeholder='UF' required>
								<?php if(isset($response)): ?>
									<div class='invalid-feedback' style='display:block'><?= isset($response->error->UF) ? $response->error->UF : ''; ?></div>
								<?php endif; ?>
							</div>
							<div class='form-group'>
								<label for='IE'>Inscrição Estadual</label>
								<input type='text' name='IE' id='IE' class='form-control' placeholder='Inscrição Estadual' >
								<?php if(isset($response)): ?>
									<div class='invalid-feedback' style='display:block'><?= isset($response->error->IE) ? $response->error->IE : ''; ?></div>
								<?php endif; ?>
							</div>
							<div class='form-group'>
								<label for='MunicipioId'>Municipio</label>
								<input type='number' name='MunicipioId' id='MunicipioId' class='form-control' placeholder='Municipio' required>
								<?php if(isset($response)): ?>
									<div class='invalid-feedback' style='display:block'><?= isset($response->error->MunicipioId) ? $response->error->MunicipioId : ''; ?></div>
								<?php endif; ?>
							</div>
							<div class='form-group'>
								<label for='IM'>Inscrição Municipal</label>
								<input type='text' name='IM' id='IM' class='form-control' placeholder='Inscrição Municipal' >
								<?php if(isset($response)): ?>
									<div class='invalid-feedback' style='display:block'><?= isset($response->error->IM) ? $response->error->IM : ''; ?></div>
								<?php endif; ?>
							</div>
							<div class='form-group'>
								<label for='Suframa'>Suframa</label>
								<input type='text' name='Suframa' id='Suframa' class='form-control' placeholder='Suframa' >
								<?php if(isset($response)): ?>
									<div class='invalid-feedback' style='display:block'><?= isset($response->error->Suframa) ? $response->error->Suframa : ''; ?></div>
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
							<div class='form-group'>
								<label for='Reg0145EFDCId'>Regime de Apuração da Contribuição Previdenciária Sobre a Receita Bruta</label>
								<input type='number' name='Reg0145EFDCId' id='Reg0145EFDCId' class='form-control' placeholder='Regime de Apuração da Contribuição Previdenciária Sobre a Receita Bruta' >
								<?php if(isset($response)): ?>
									<div class='invalid-feedback' style='display:block'><?= isset($response->error->Reg0145EFDCId) ? $response->error->Reg0145EFDCId : ''; ?></div>
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

