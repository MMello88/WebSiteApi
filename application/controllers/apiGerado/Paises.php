<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Paises extends MY_Controller {

  public function  __construct() {
    parent::__construct();
    $this->table = 'paises';
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
    $this->form_validation->set_rules('CdPais', 'CdPais', 'required|max_length[5]');
		$this->form_validation->set_rules('Nome', 'Nome', 'required|max_length[150]');
		
    parent::create();
  }
  
  public function update($Id){
    $this->form_validation->set_rules('CdPais', 'CdPais', 'required|max_length[5]');
		$this->form_validation->set_rules('Nome', 'Nome', 'required|max_length[150]');
		
    parent::update($Id);
  }

  public function delete($Id){
    parent::delete($Id);
  }
}

/*
	<header class='page-title-bar'>
		<legend>Paises</legend>
	</header>
	<div class='page-section'>
		<div class='section-block'>
			<div class='card' id='floating-label'>
				<div class='card-body'>
					<?= form_open(base_url('paises/')) ?>
						<fieldset>
							<input type='hidden' name='Id' id='Id'>
							<div class='form-group'>
								<label for='CdPais'>Cód. País</label>
								<input type='text' name='CdPais' id='CdPais' class='form-control' placeholder='Cód. País' required>
								<?php if(isset($response)): ?>
									<div class='invalid-feedback' style='display:block'><?= isset($response->error->CdPais) ? $response->error->CdPais : ''; ?></div>
								<?php endif; ?>
							</div>
							<div class='form-group'>
								<label for='Nome'>Nome</label>
								<input type='text' name='Nome' id='Nome' class='form-control' placeholder='Nome' required>
								<?php if(isset($response)): ?>
									<div class='invalid-feedback' style='display:block'><?= isset($response->error->Nome) ? $response->error->Nome : ''; ?></div>
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

