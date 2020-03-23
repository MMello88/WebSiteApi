<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends MY_Controller {

  public function  __construct() {
    parent::__construct();
    $this->table = 'users';
    $this->nameId = 'Id';
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
      ["status" => "FALSE", "error" => "Utilize o método add para cadastrar o usuário."],
      422
    );
		
  }
  
  public function update($Id){
    $this->form_validation->set_rules('Nome', 'Nome', 'required|max_length[350]');
		$this->form_validation->set_rules('Sobrenome', 'Sobrenome', 'required|max_length[250]');
		$this->form_validation->set_rules('DataNascimento', 'DataNascimento', 'required|valid_date');
		$this->form_validation->set_rules('Ativo', 'Ativo', 'required|in_list[True,False]');
		$this->form_validation->set_rules('Criacao', 'Criacao', 'required|valid_datetime');
		$this->form_validation->set_rules('Usuario', 'Usuario', 'required|max_length[250]');
		$this->form_validation->set_rules('Email', 'Email', 'required|valid_email|max_length[250]');
		$this->form_validation->set_rules('Senha', 'Senha', 'required|max_length[64]');
		
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
    //$this->form_validation->set_rules('Sobrenome', 'Sobrenome', 'required|max_length[250]');
    //$this->form_validation->set_rules('DataNascimento', 'DataNascimento', 'required|valid_date');
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
          ["status" => "TRUE", "data" => $data, "message" => "Cadastro realizado com sucesso!"],
          200
        );
      }
        
    
    } else {

      $this->api_return(
        [
          "status" => "FALSE", 
          "error" => $this->form_validation->error_array()
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
            "error" => $this->form_validation->error_array()
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
            "error" => $this->form_validation->error_array()
          ],
          422
        );
      }
    }
  }
}