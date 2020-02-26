<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Api_model extends CI_Model {

  public function  __construct() {
      parent::__construct();
  }

  public function Get($tabela, $Id = ''){
    if (empty($Id)){
      return $this->db->order_by('Id')->get_where($tabela, ["Id" => $Id])->result();
    } else {
      return $this->db->order_by('Id')->get($tabela)->result();
    }
  }
}