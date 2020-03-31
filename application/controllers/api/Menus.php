<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Menus extends MY_Controller {

  public function  __construct() {
    parent::__construct();
    $this->table = 'menus';
    $this->nameId = 'Id';
    $this->usersId = '';
    $this->joins = [
    ];
  }

  public function get($Id = '', $date = ''){
    parent::get($Id, $date);
  }
  
  public function setDefaultValue(){
    $_POST['Ativo'] = !isset($_POST['Ativo']) ? 'True' : $_POST['Ativo'];
		
  }

  public function create(){
    $this->form_validation->set_rules('Nome', 'Nome', 'required|max_length[250]');
		$this->form_validation->set_rules('Ativo', 'Ativo', 'required|in_list[True,False]');
		$this->form_validation->set_rules('url', 'url', 'required');
		
    parent::create();
  }
  
  public function update($Id){
    $this->form_validation->set_rules('Nome', 'Nome', 'required|max_length[250]');
		$this->form_validation->set_rules('Ativo', 'Ativo', 'required|in_list[True,False]');
		$this->form_validation->set_rules('url', 'url', 'required');
		
    parent::update($Id);
  }

  public function delete($Id){
    parent::delete($Id);
	}
	
  public function getPerfilMenu($PerfisId){
    $user_data = $this->_apiConfig([
      "methods" => ["GET"],
      "requireAuthorization" => true,
    ]);

    $data = $this->api->getPerfilMenu($user_data["token_data"]["Id"], $PerfisId);
    $this->api_return(
      $data,
      200
    );
  }
}

/*
	<header class='page-title-bar'>
		<legend>Menu</legend>
	</header>
	<div class='page-section'>
		<div class='section-block'>
			<div class='card' id='floating-label'>
				<div class='card-body'>
					<?= form_open(base_url('menus/')) ?>
						<fieldset>
							<input type='hidden' name='Id' id='Id'>
							<div class='form-group'>
								<label for='Nome'>Nome do Menu</label>
								<input type='text' name='Nome' id='Nome' class='form-control' placeholder='Nome do Menu' required>
							</div>
							<div class='form-group'>
								<label for='Ativo'>Ativo</label>
								<select name='Ativo' id='Ativo' class='custom-select' placeholder='Ativo' required>
									<option value=''> Selecione </option>
									<option value='True'> True </option>
									<option value='False'> False </option>
								</select>
							</div>
							<div class='form-group'>
								<label for='Icone'>Icone</label>
								<input type='' name='Icone' id='Icone' class='form-control' placeholder='Icone' >
							</div>
							<div class='form-group'>
								<label for='url'>Url</label>
								<input type='' name='url' id='url' class='form-control' placeholder='Url' required>
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

