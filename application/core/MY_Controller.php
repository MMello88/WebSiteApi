<?php if ( ! defined("BASEPATH")) exit("No direct script access allowed");

require_once APPPATH . "libraries/API_Controller.php";

abstract class MY_Controller extends API_Controller {
  
  protected $table;
  protected $nameId;
  protected $usersId = "";

  public function  __construct() {
    parent::__construct();
    header("Content-Type: application/json");
		header("Access-Control-Allow-Origin: *");
  }

  protected function get($Id = "", $date = ""){
		$user_data = $this->_apiConfig([
			"methods" => ["GET"],
			"requireAuthorization" => true,
		]);

    $where = "";
    $where.= !empty($Id) || $Id > 0 ? " {$this->table}.{$this->nameId} = {$Id} and " : "";
    $where.= !empty($date) ? "{$date} between DtIni and IF(ISNULL(DtFin),SYSDATE(),DtFin) and " : "";
    $where.= !empty($this->usersId) ? "{$this->usersId} = " . $user_data["token_data"]["Id"] . " and ": "";
    $where = !empty($where) ? substr($where, 0, -4) : "";

    $data = $this->api->get($this->table, $where);
		$this->api_return(
			["status" => "TRUE", "data" => $data],
			200
		);
  }

  protected function create(){
    $user_data = $this->_apiConfig([
      "methods" => ["POST"],
      "requireAuthorization" => true,
    ]);



    if (!empty($this->usersId)){
      $_POST[$this->usersId] = $user_data["token_data"]["Id"];
    }

    $this->setDefaultValue();
  	
    if ($this->form_validation->run() == TRUE){
    
      $Id = $this->api->create($this->table, $_POST);
      if (is_numeric($Id)){
        $data = $this->api->get($this->table, [$this->nameId => $Id]);
      	$this->api_return(
          ["status" => "TRUE", "data" => $data],
          200
        );
      }
    
    } else {

			$this->api_return(
				["status" => "FALSE", "error" => $this->form_validation->error_array()],
				422
			);
    }
  }

  protected function update($Id){
    $user_data = $this->_apiConfig([
      "methods" => ["POST"],
      "requireAuthorization" => true,
    ]);
    
    if(!is_numeric($Id)){

			$this->api_return(
				["status" => "FALSE", "error" => ["Id" => "The Id field must contain only numbers."]],
				422
			);

    } else {

      if (!empty($this->usersId)){
        $_POST[$this->usersId] = $user_data["token_data"]["Id"];
      }

      if ($this->form_validation->run() == TRUE){

        $this->api->update($this->table, $_POST, [$this->nameId => $Id]);
        $data = $this->api->get($this->table, [$this->nameId => $Id]);
        $this->api_return(
          ["status" => "TRUE", "data" => $data],
          200
        );

      } else {

  			$this->api_return(
  				["status" => "FALSE", "error" => $this->form_validation->error_array()],
  				422
  			);
      }
    }
  }

  protected function delete($Id){
    $user_data = $this->_apiConfig([
      "methods" => ["GET"],
      "requireAuthorization" => true,
    ]);

    if(!is_numeric($Id)){

      $this->api_return(
        ["status" => "FALSE", "error" => ["Id" => "The Id field must contain only numbers."]],
        422
      );

    } else {
    
      $where[$this->nameId] = $Id;
      if (!empty($this->usersId)){
        $where[$this->usersId] = $user_data["token_data"]["Id"];
      }

      $this->api->delete($this->table, $where);

      $this->api_return(
        ["status" => "FALSE", "data" => FALSE],
        200
      );
    }
  }

  public function login(){
    if($this->uri->segment(2) == "Users"){

      $this->_apiConfig([
        "methods" => ["POST"],
      ]);
      
      $data = $this->verify_login();

      if ($data["status"] === "TRUE"){
        $token = $this->authorization_token->generateToken($data["data"]);
        $data["data"]["token"] = $token;

        $this->api_return(
        	$data,
          200
        );
      
      } else {

      	$this->_apiConfig([
					"methods" => ["POST"],
					"limit" => [5, "ip", 5],
				]);

				$this->api_return(
					$data,
					401
				);
      }
    }
  }

  private function verify_login(){
    $this->form_validation->set_rules("Email", "Email", "required|valid_email|max_length[250]");
    $this->form_validation->set_rules("Senha", "Senha", "required|max_length[64]");
    
    if ($this->form_validation->run() == TRUE){
    
      return $this->api->check_login($_POST);
    
    } else {
    
      return ["status" => "FALSE", "error" => $this->form_validation->error_array()];
    
    }
  }

	abstract function setDefaultValue(); 
}
