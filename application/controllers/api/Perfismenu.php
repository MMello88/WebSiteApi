<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Perfismenu extends MY_Controller {

  public function  __construct() {
    parent::__construct();
    $this->table = 'perfismenu';
    $this->nameId = 'Id';
    $this->usersId = '';
    $this->joins = [
			['table' => 'menus', 'condition' => 'menus.Id = perfismenu.MenusId', 'type' => 'inner'],
			['table' => 'perfis', 'condition' => 'perfis.Id = perfismenu.PerfisId', 'type' => 'inner'],
    ];
  }

  public function get($Id = '', $date = ''){
    parent::get($Id, $date);
  }
  
  public function setDefaultValue(){
    
  }

  public function create(){
    $this->form_validation->set_rules('MenusId', 'MenusId', 'required|integer');
		$this->form_validation->set_rules('PerfisId', 'PerfisId', 'required|integer');
		
    parent::create();
  }
  
  public function update($Id){
    $this->form_validation->set_rules('MenusId', 'MenusId', 'required|integer');
		$this->form_validation->set_rules('PerfisId', 'PerfisId', 'required|integer');
		
    parent::update($Id);
  }

  public function delete($Id){
    parent::delete($Id);
  }
}

/*
	<header class='page-title-bar'>
		<legend>Menus do Perfil</legend>
	</header>
	<div class='page-section'>
		<div class='section-block'>
			<div class='card' id='floating-label'>
				<div class='card-body'>
					<?= form_open(base_url('perfismenu/')) ?>
						<fieldset>
							<input type='hidden' name='Id' id='Id'>
							<div class='form-group'>
								<label for='MenusId'>Menu</label>
								<input type='number' name='MenusId' id='MenusId' class='form-control' placeholder='Menu' required>
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

