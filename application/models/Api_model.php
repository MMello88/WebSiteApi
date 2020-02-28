<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Api_model extends CI_Model {

  public function  __construct() {
      parent::__construct();
  }

  public function get($table, $where = []){
    if (!empty($where)){
      return $this->db->select('*')->from($table)->where($where)->order_by('1')->get()->row();
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
        return null;
      }
  }

  public function update($table, $data, $where){
    return $this->db->update($table, $data, $where);
  }

  public function delete($table, $where){
    return $this->db->delete($table, $where);
  }
}