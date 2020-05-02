<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usersgrupo extends MY_Controller {

  public function  __construct() {
    parent::__construct();
    $this->table = 'usersgrupo';
    $this->nameId = 'ug_GrupoUserId';
    $this->usersId = '';
    $this->joins = [
    ];
    $this->tableParent = 'grupousers';
    $this->nameIdParent = 'gpu_Id';
  }

  public function get($Id = '', $date = ''){
    parent::get($Id, $date);
  }

  public function getByParent($IdParent, $Id = ''){
    parent::getByParent($IdParent, $Id);
  }

  public function setDefaultValue(){
    
  }

  public function create(){
    $this->form_validation->set_rules('ug_Ativo', 'ug_Ativo', 'required|in_list[True,False]');
		
    parent::create();
  }

  public function update($Id){
    $this->form_validation->set_rules('ug_Ativo', 'ug_Ativo', 'required|in_list[True,False]');
		
    parent::update($Id);
  }

  public function delete($Id){
    parent::delete($Id);
  }
}
