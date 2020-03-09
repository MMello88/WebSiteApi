<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

abstract class MY_Controller extends CI_Controller {
  
  protected $table;
  protected $nameId;

  public function  __construct() {
    parent::__construct();
    header('Content-Type: application/json');
  }

  protected function get($Id = '', $date = ''){
    $where = "";
    $where.= !empty($Id) || $Id > 0 ? " {$this->table}.{$this->nameId} = {$Id} and" : "";
    $where.= !empty($date) ? " '{$date}' between DtIni and IF(ISNULL(DtFin),SYSDATE(),DtFin) and" : "";
    $where = !empty($where) ? substr($where, 0, -3) : "";

    echo json_encode(['status' => TRUE, 'data' => $this->api->get($this->table, $where)]);
  }

  protected function create(){
    $this->setDefaultValue();
  	if ($this->form_error->run() == TRUE){
      $Id = $this->api->create($this->table, $_POST);
      if (is_numeric($Id)) 
      	$this->get($Id);
    } else {
      header($_SERVER['SERVER_PROTOCOL'] . ' 422 Unprocessable Entity');
      echo json_encode(
        [
          'status' => FALSE,
          "error" => $this->form_error->error_array()
        ]
      );
    }
  }

  protected function update($Id){
    if(!is_numeric($Id)){
      header($_SERVER['SERVER_PROTOCOL'] . ' 422 Unprocessable Entity');
      echo json_encode(
        [
          'status' => FALSE,
          "error" => ["Id" => "The Id field must contain only numbers."]
        ]
      );
    }

    if ($this->form_error->run() == TRUE){
      $this->api->update($this->table, $_POST, [$this->nameId => $Id]);
      $this->get($Id);
    } else {
      header($_SERVER['SERVER_PROTOCOL'] . ' 422 Unprocessable Entity');
      echo json_encode(
        [
          'status' => FALSE,
          "error" => $this->form_error->error_array()
        ]
      );
    }
  }

  protected function delete($Id){
    if(!is_numeric($Id)){
      header($_SERVER['SERVER_PROTOCOL'] . ' 422 Unprocessable Entity');
      echo json_encode(
        [
          'status' => FALSE,
          "error" => ["Id" => "The Id field must contain only numbers."]
        ]
      );
    }
    $this->api->delete($this->table, [$this->nameId => $Id]);
    echo json_encode(['status' => TRUE, 'data' => FALSE]);
  }

  public function login(){
    if($this->uri->segment(2) == 'Users'){
      $this->check_login();
    }
  }

  private function check_login(){
    $this->form_error->set_rules('Email', 'Email', 'required|valid_email|max_length[250]');
    $this->form_error->set_rules('Senha', 'Senha', 'required|max_length[64]');
    if ($this->form_error->run() == TRUE){

        $result = $this->api->check_login($_POST);

        if (!empty($result['status']) && $result['status'] === TRUE) {
          echo json_encode(['status' => TRUE, 'data' => $result]);
        } else {
          echo json_encode($result);
        }
    } else {
      echo json_encode(['status' => FALSE, "error" => $this->form_error->error_array()]);
    }

  }

	abstract function setDefaultValue(); 
}
