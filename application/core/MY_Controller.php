<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

abstract class MY_Controller extends CI_Controller {
  
  protected $table;

  public function  __construct() {
    parent::__construct();
    header('Content-Type: application/json');
  }

  protected function get($Id = ''){
    if (empty($Id)){
      $rows = $this->api->get($this->table);
      echo json_encode($rows);
    } else {
      $row = $this->api->get($this->table, $Id);
      echo json_encode($row);
    }
  }

  protected function create(){
  	if ($this->form_validation->run() == TRUE){
      $this->setDefaultValue();
      $Id = $this->api->create($this->table, $_POST);
      $this->get($Id);
    } else {
      header($_SERVER['SERVER_PROTOCOL'] . ' 422 Unprocessable Entity');
      echo json_encode(
        [
          "Validation" => $this->form_validation->error_array()
        ]
      );
    }
  }

  protected function update($Id){
    if(!is_numeric($Id)){
      header($_SERVER['SERVER_PROTOCOL'] . ' 422 Unprocessable Entity');
      echo json_encode(
        [
          "Validation" => ["Id" => "The Id field must contain only numbers."]
        ]
      );
    }

    if ($this->form_validation->run() == TRUE){
      $this->api->update($this->table, $Id, $_POST);
      $this->get($Id);
    } else {
      header($_SERVER['SERVER_PROTOCOL'] . ' 422 Unprocessable Entity');
      echo json_encode(
        [
          "Validation" => $this->form_validation->error_array()
        ]
      );
    }
  }

  protected function delete($Id){
    if(!is_numeric($Id)){
      header($_SERVER['SERVER_PROTOCOL'] . ' 422 Unprocessable Entity');
      echo json_encode(
        [
          "Validation" => ["Id" => "The Id field must contain only numbers."]
        ]
      );
    }
  }

	abstract function setDefaultValue(); 
}