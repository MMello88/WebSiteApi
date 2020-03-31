<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ref4310 extends MY_Controller {

  public function  __construct() {
    parent::__construct();
    $this->table = 'ref4310';
    $this->nameId = 'Id';
    $this->usersId = '';
    $this->joins = [
    ];
  }

  public function get($Id = '', $date = ''){
    parent::get($Id, $date);
  }
  
  public function setDefaultValue(){
    
  }

  public function create(){
    $this->form_validation->set_rules('Codigo', 'Codigo', 'required|max_length[30]');
		$this->form_validation->set_rules('Descricao', 'Descricao', 'required|max_length[255]');
		$this->form_validation->set_rules('DtIni', 'DtIni', 'required|valid_date');
		$this->form_validation->set_rules('DtFin', 'DtFin', 'valid_date');
		$this->form_validation->set_rules('Ncm', 'Ncm', 'required');
		$this->form_validation->set_rules('AliqPis', 'AliqPis', 'required|numeric');
		$this->form_validation->set_rules('AliqCofins', 'AliqCofins', 'required|numeric');
		
    parent::create();
  }
  
  public function update($Id){
    $this->form_validation->set_rules('Codigo', 'Codigo', 'required|max_length[30]');
		$this->form_validation->set_rules('Descricao', 'Descricao', 'required|max_length[255]');
		$this->form_validation->set_rules('DtIni', 'DtIni', 'required|valid_date');
		$this->form_validation->set_rules('DtFin', 'DtFin', 'valid_date');
		$this->form_validation->set_rules('Ncm', 'Ncm', 'required');
		$this->form_validation->set_rules('AliqPis', 'AliqPis', 'required|numeric');
		$this->form_validation->set_rules('AliqCofins', 'AliqCofins', 'required|numeric');
		
    parent::update($Id);
  }

  public function delete($Id){
    parent::delete($Id);
  }
}

/*
	<header class='page-title-bar'>
		<legend>Produtos Sujeitos a Alíquotas Diferenciadas</legend>
	</header>
	<div class='page-section'>
		<div class='section-block'>
			<div class='card' id='floating-label'>
				<div class='card-body'>
					<?= form_open(base_url('ref4310/')) ?>
						<fieldset>
							<input type='hidden' name='Id' id='Id'>
							<div class='form-group'>
								<label for='Codigo'>Código</label>
								<input type='text' name='Codigo' id='Codigo' class='form-control' placeholder='Código' required>
								<?php if(isset($response)): ?>
									<div class='invalid-feedback' style='display:block'><?= isset($response->error->Codigo) ? $response->error->Codigo : ''; ?></div>
								<?php endif; ?>
							</div>
							<div class='form-group'>
								<label for='Descricao'>Descrição</label>
								<input type='text' name='Descricao' id='Descricao' class='form-control' placeholder='Descrição' required>
								<?php if(isset($response)): ?>
									<div class='invalid-feedback' style='display:block'><?= isset($response->error->Descricao) ? $response->error->Descricao : ''; ?></div>
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
								<label for='Ncm'>NCM</label>
								<input type='text' name='Ncm' id='Ncm' class='form-control' placeholder='NCM' required>
								<?php if(isset($response)): ?>
									<div class='invalid-feedback' style='display:block'><?= isset($response->error->Ncm) ? $response->error->Ncm : ''; ?></div>
								<?php endif; ?>
							</div>
							<div class='form-group'>
								<label for='NcmEx'>Exceto NCM</label>
								<input type='text' name='NcmEx' id='NcmEx' class='form-control' placeholder='Exceto NCM' >
								<?php if(isset($response)): ?>
									<div class='invalid-feedback' style='display:block'><?= isset($response->error->NcmEx) ? $response->error->NcmEx : ''; ?></div>
								<?php endif; ?>
							</div>
							<div class='form-group'>
								<label for='ExIpi'>Código EX TIPI</label>
								<input type='text' name='ExIpi' id='ExIpi' class='form-control' placeholder='Código EX TIPI' >
								<?php if(isset($response)): ?>
									<div class='invalid-feedback' style='display:block'><?= isset($response->error->ExIpi) ? $response->error->ExIpi : ''; ?></div>
								<?php endif; ?>
							</div>
							<div class='form-group'>
								<label for='AliqPis'>Alíquota do PIS %</label>
								<input type='number' name='AliqPis' id='AliqPis' class='form-control' placeholder='Alíquota do PIS %' required>
								<?php if(isset($response)): ?>
									<div class='invalid-feedback' style='display:block'><?= isset($response->error->AliqPis) ? $response->error->AliqPis : ''; ?></div>
								<?php endif; ?>
							</div>
							<div class='form-group'>
								<label for='AliqCofins'>Alíquota da COFINS %</label>
								<input type='number' name='AliqCofins' id='AliqCofins' class='form-control' placeholder='Alíquota da COFINS %' required>
								<?php if(isset($response)): ?>
									<div class='invalid-feedback' style='display:block'><?= isset($response->error->AliqCofins) ? $response->error->AliqCofins : ''; ?></div>
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

