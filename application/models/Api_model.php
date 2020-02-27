<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Api_model extends CI_Model {

  public function  __construct() {
      parent::__construct();
  }

  public function get($table, $Id = ''){
    if (!empty($Id)){
      return $this->db->order_by('Id')->get_where($table, ["Id" => $Id])->row();
    } else {
      return $this->db->get($table)->result();
    }
  }

  public function create($table, $data){
    if($this->db->insert($table, $data)){
        return $this->db->insert_id();
      } else {
        header($_SERVER['SERVER_PROTOCOL'] . ' 500 Internal Server Error');
        echo json_encode(["Validation" => ['code' => $this->db->error()['code'], 'message' => $this->db->error()['message']]]);
      }
  }

  public function update($table, $Id, $data){
    return $this->db->update($table, $data, ["Id" => $Id]);
  }

  public function delete($table, $Id){
    return $this->db->delete($table, ["Id" => $Id]);
  }
}