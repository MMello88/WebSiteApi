<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Perfisuser extends MY_Controller {

  public function  __construct() {
    parent::__construct();
    $this->table = 'perfisuser';
    $this->nameId = 'Id';
    $this->usersId = 'UsersId';
    $this->joins = [
			['table' => 'perfis', 'condition' => 'perfis.Id = perfisuser.PerfisId', 'type' => 'inner'],
    ];
  }

  public function get($Id = '', $date = ''){
    parent::get($Id, $date);
  }
  
  public function setDefaultValue(){
    
  }

  public function create(){
    $this->form_validation->set_rules('UsersId', 'UsersId', 'required|integer');
		$this->form_validation->set_rules('PerfisId', 'PerfisId', 'required|integer');
		
    parent::create();
  }
  
  public function update($Id){
    $this->form_validation->set_rules('UsersId', 'UsersId', 'required|integer');
		$this->form_validation->set_rules('PerfisId', 'PerfisId', 'required|integer');
		
    parent::update($Id);
  }

  public function delete($Id){
    parent::delete($Id);
  }
}

/*
	<header class='page-title-bar'>
		<legend>Perfis do Usuário</legend>
	</header>
	<div class='page-section'>
		<div class='section-block'>
			<div class='card' id='floating-label'>
				<div class='card-body'>
					<?= form_open(base_url('perfisuser/')) ?>
						<fieldset>
							<input type='hidden' name='Id' id='Id'>
							<div class='form-group'>
								<label for='UsersId'>Users</label>
								<input type='number' name='UsersId' id='UsersId' class='form-control' placeholder='Users' required>
							</div>
							<div class='form-group'>
								<label for='PerfisId'>Perfil</label>
								<input type='number' name='PerfisId' id='PerfisId' class='form-control' placeholder='Perfil' required>
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

