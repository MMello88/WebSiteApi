<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Api_limit extends MY_Controller {

  public function  __construct() {
    parent::__construct();
    $this->table = 'api_limit';
    $this->nameId = 'id';
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
    $this->form_validation->set_rules('uri', 'uri', 'required|max_length[200]');
		$this->form_validation->set_rules('class', 'class', 'required|max_length[200]');
		$this->form_validation->set_rules('method', 'method', 'required|max_length[200]');
		$this->form_validation->set_rules('ip_address', 'ip_address', 'required|max_length[50]');
		$this->form_validation->set_rules('time', 'time', 'required');
		
    parent::create();
  }
  
  public function update($Id){
    $this->form_validation->set_rules('uri', 'uri', 'required|max_length[200]');
		$this->form_validation->set_rules('class', 'class', 'required|max_length[200]');
		$this->form_validation->set_rules('method', 'method', 'required|max_length[200]');
		$this->form_validation->set_rules('ip_address', 'ip_address', 'required|max_length[50]');
		$this->form_validation->set_rules('time', 'time', 'required');
		
    parent::update($Id);
  }

  public function delete($Id){
    parent::delete($Id);
  }
}

/*
	<header class='page-title-bar'>
		<legend>Limit</legend>
	</header>
	<div class='page-section'>
		<div class='section-block'>
			<div class='card' id='floating-label'>
				<div class='card-body'>
					<?= form_open(base_url('api_limit/')) ?>
						<fieldset>
							<input type='hidden' name='id' id='id'>
							<div class='form-group'>
								<label for='uri'></label>
								<input type='text' name='uri' id='uri' class='form-control' placeholder='' required>
								<?php if(isset($response)): ?>
									<div class='invalid-feedback' style='display:block'><?= isset($response->error->uri) ? $response->error->uri : ''; ?></div>
								<?php endif; ?>
							</div>
							<div class='form-group'>
								<label for='class'></label>
								<input type='text' name='class' id='class' class='form-control' placeholder='' required>
								<?php if(isset($response)): ?>
									<div class='invalid-feedback' style='display:block'><?= isset($response->error->class) ? $response->error->class : ''; ?></div>
								<?php endif; ?>
							</div>
							<div class='form-group'>
								<label for='method'></label>
								<input type='text' name='method' id='method' class='form-control' placeholder='' required>
								<?php if(isset($response)): ?>
									<div class='invalid-feedback' style='display:block'><?= isset($response->error->method) ? $response->error->method : ''; ?></div>
								<?php endif; ?>
							</div>
							<div class='form-group'>
								<label for='ip_address'></label>
								<input type='text' name='ip_address' id='ip_address' class='form-control' placeholder='' required>
								<?php if(isset($response)): ?>
									<div class='invalid-feedback' style='display:block'><?= isset($response->error->ip_address) ? $response->error->ip_address : ''; ?></div>
								<?php endif; ?>
							</div>
							<div class='form-group'>
								<label for='time'></label>
								<input type='' name='time' id='time' class='form-control' placeholder='' required>
								<?php if(isset($response)): ?>
									<div class='invalid-feedback' style='display:block'><?= isset($response->error->time) ? $response->error->time : ''; ?></div>
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

