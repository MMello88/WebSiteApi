<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class __efmigrationshistory extends MY_Controller {

  public function  __construct() {
    parent::__construct();
    $this->table = '__efmigrationshistory';
    $this->nameId = 'MigrationId';
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
    $this->form_validation->set_rules('ProductVersion', 'ProductVersion', 'required|max_length[32]');
		
    parent::create();
  }
  
  public function update($Id){
    $this->form_validation->set_rules('ProductVersion', 'ProductVersion', 'required|max_length[32]');
		
    parent::update($Id);
  }

  public function delete($Id){
    parent::delete($Id);
  }
}

/*
	<header class='page-title-bar'>
		<legend>histórico</legend>
	</header>
	<div class='page-section'>
		<div class='section-block'>
			<div class='card' id='floating-label'>
				<div class='card-body'>
					<?= form_open(base_url('__efmigrationshistory/')) ?>
						<fieldset>
							<input type='hidden' name='MigrationId' id='MigrationId'>
							<div class='form-group'>
								<label for='ProductVersion'></label>
								<input type='text' name='ProductVersion' id='ProductVersion' class='form-control' placeholder='' required>
								<?php if(isset($response)): ?>
									<div class='invalid-feedback' style='display:block'><?= isset($response->error->ProductVersion) ? $response->error->ProductVersion : ''; ?></div>
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

