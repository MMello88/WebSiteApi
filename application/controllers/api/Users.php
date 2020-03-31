<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends MY_Controller {

  public function  __construct() {
    parent::__construct();
    $this->table = 'users';
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
		$_POST['Criacao'] = !isset($_POST['Criacao']) ? date('Y-m-d H:i:s') : $_POST['Criacao'];
    $_POST['Senha'] = !isset($_POST['Senha']) ? "" : md5($_POST['Senha']);
    $_POST['SenhaConf'] = !isset($_POST['SenhaConf']) ? "" : md5($_POST['SenhaConf']);
  }

  public function create(){
    $this->_apiConfig([
      "methods" => ["POST"],
    ]);

    $this->api_return(
      ["status" => "FALSE", "error" => "", "message" => "Utilize o método add para cadastrar o usuário.", "method" => "POST"],
      422
    );
		
  }

  public function updatePassword($Id){
    $this->form_validation->set_rules('Senha', 'Senha', 'required|min_length[6]|max_length[64]');
    $this->form_validation->set_rules('SenhaConf', 'Senha Confirmation', 'required|matches[Senha]|max_length[64]');
    
    if ($this->form_validation->run() == TRUE){
      $_POST['Senha'] = !isset($_POST['Senha']) ? "" : md5($_POST['Senha']);
      unset($_POST["SenhaConf"]);

      $this->api->update($this->table, $_POST, [$this->nameId => $Id]);
      $data = $this->api->get($this->table, [$this->nameId => $Id]);
      $this->api_return(
        ["status" => "TRUE", "data" => $data, "message" => "Senha alteração com sucesso!", "method" => "POST"],
        200
      );
    } else {
      $this->api_return(
        [
          "status" => "FALSE", 
          "error" => $this->form_validation->error_array(),
          "message" => "Erro ao validar o Formulário.", 
          "method" => "POST"
        ],
        422
      );
    }
  }
  
  public function update($Id){
    $this->form_validation->set_rules('Nome', 'Nome', 'required|max_length[350]');
		$this->form_validation->set_rules('Sobrenome', 'Sobrenome', 'required|max_length[250]');
		$this->form_validation->set_rules('DataNascimento', 'DataNascimento', 'required|valid_date');
		$this->form_validation->set_rules('Ativo', 'Ativo', 'required|in_list[True,False]');
		$this->form_validation->set_rules('Email', 'Email', 'required|valid_email|max_length[250]');
		
    parent::update($Id);
  }

  public function delete($Id){
    parent::delete($Id);
  }

  public function add(){
    $user_data = $this->_apiConfig([
      "methods" => ["POST"],
    ]);

    $this->form_validation->set_rules('Nome', 'Nome', 'required|max_length[350]');
    $this->form_validation->set_rules('Email', 'Email', 'required|max_length[250]|valid_email|is_unique[users.Email]');
    $this->form_validation->set_rules('Senha', 'Senha', 'required|min_length[6]|max_length[64]');
    $this->form_validation->set_rules('SenhaConf', 'Senha Confirmation', 'required|matches[Senha]|max_length[64]');

    $this->setDefaultValue();
    
    if ($this->form_validation->run() == TRUE){
      
      unset($_POST["SenhaConf"]);
      $Id = $this->api->create($this->table, $_POST);
      if (is_numeric($Id)) {
        $data = $this->api->get($this->table, [$this->nameId => $Id]);
        unset($data->Senha);
        $token = $this->authorization_token->generateToken($data);
        $data->token = $token;
        $this->api_return(
          ["status" => "TRUE", "data" => $data, "message" => "Cadastro realizado com sucesso!", "method" => "POST"],
          200
        );
      }
        
    
    } else {

      $this->api_return(
        [
          "status" => "FALSE", 
          "error" => $this->form_validation->error_array(),
          "message" => "Erro ao validar o Formulário.", 
          "method" => "POST"
        ],
        422
      );
    }
  }

  public function forgot($paraHash = ""){
    $user_data = $this->_apiConfig([
      "methods" => ["POST"],
    ]);

    if(empty($paraHash)){

      $this->form_validation->set_rules('Email', 'Email', 'required|max_length[250]|valid_email');

      if ($this->form_validation->run() == TRUE){
        $data = $this->api->forgot($_POST["Email"]);
        $this->sendemail->enviarEmailRecuperarSenha($data["data"]["Nome"], $data["data"]["Email"], $data["data"]["IdReset"]);
        $this->api_return($data,200);
      } else {
        $this->api_return(
          [
            "status" => "FALSE", 
            "error" => $this->form_validation->error_array(),
            "message" => "Erro ao validar o Formulário.",
            "method" => "POST"
          ],
          422
        );
      }
    } else {

      $this->form_validation->set_rules('Senha', 'Senha', 'required|min_length[6]|max_length[64]');
      $this->form_validation->set_rules('SenhaConf', 'Senha Confirmation', 'required|matches[Senha]|max_length[64]');

      if ($this->form_validation->run() == TRUE){
        $data = $this->api->recover($paraHash, md5($_POST["Senha"]));
        $this->api_return($data,200);
      } else {
        $this->api_return(
          [
            "status" => "FALSE", 
            "error" => $this->form_validation->error_array(),
            "message" => "Erro ao validar o formulário.",
            "method" => "POST"
          ],
          422
        );
      }
    }
  }
}

/*
	<header class='page-title-bar'>
		<legend>Usuários</legend>
	</header>
	<div class='page-section'>
		<div class='section-block'>
			<div class='card' id='floating-label'>
				<div class='card-body'>
					<?= form_open(base_url('users/')) ?>
						<fieldset>
							<input type='hidden' name='Id' id='Id'>
							<div class='form-group'>
								<label for='Nome'>Nome</label>
								<input type='text' name='Nome' id='Nome' class='form-control' placeholder='Nome' required>
							</div>
							<div class='form-group'>
								<label for='Sobrenome'>Sobrenome</label>
								<input type='text' name='Sobrenome' id='Sobrenome' class='form-control' placeholder='Sobrenome' required>
							</div>
							<div class='form-group'>
								<label for='DataNascimento'>Data Nascimento</label>
								<input type='date' name='DataNascimento' id='DataNascimento' class='form-control' placeholder='Data Nascimento' required>
							</div>
							<div class='form-group'>
								<label for='UrlFoto'>Foto</label>
								<input type='text' name='UrlFoto' id='UrlFoto' class='form-control' placeholder='Foto' >
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
								<label for='Criacao'></label>
								<input type='datetime-local' name='Criacao' id='Criacao' class='form-control' placeholder='' required>
							</div>
							<div class='form-group'>
								<label for='Email'>E-mail</label>
								<input type='text' name='Email' id='Email' class='form-control' placeholder='E-mail' required>
							</div>
							<div class='form-group'>
								<label for='Senha'>Senha</label>
								<input type='text' name='Senha' id='Senha' class='form-control' placeholder='Senha' required>
							</div>
							<div class='form-group'>
								<label for='DataReset'></label>
								<input type='datetime-local' name='DataReset' id='DataReset' class='form-control' placeholder='' >
							</div>
							<div class='form-group'>
								<label for='IdReset'></label>
								<input type='text' name='IdReset' id='IdReset' class='form-control' placeholder='' >
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

