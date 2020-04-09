<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Submenus extends MY_Controller {

  public function  __construct() {
    parent::__construct();
    $this->table = 'submenus';
    $this->nameId = 'sbm_Id';
    $this->usersId = '';
    $this->joins = [
			['table' => 'menus', 'condition' => 'menus.mns_Id = submenus.sbm_MenusId', 'type' => 'inner'],
    ];
  }

  public function get($Id = '', $date = ''){
    parent::get($Id, $date);
  }

  public function setDefaultValue(){
    $_POST['sbm_Ativo'] = !isset($_POST['sbm_Ativo']) ? 'True' : $_POST['sbm_Ativo'];
		
  }

  public function create(){
    $this->form_validation->set_rules('sbm_MenusId', 'sbm_MenusId', 'required|integer');
		$this->form_validation->set_rules('sbm_Nome', 'sbm_Nome', 'required|max_length[250]');
		$this->form_validation->set_rules('sbm_Ativo', 'sbm_Ativo', 'required|in_list[True,False]');
		$this->form_validation->set_rules('sbm_Url', 'sbm_Url', 'required');
		$this->form_validation->set_rules('sbm_Nivel', 'sbm_Nivel', 'integer');
		
    parent::create();
  }

  public function update($Id){
    $this->form_validation->set_rules('sbm_MenusId', 'sbm_MenusId', 'required|integer');
		$this->form_validation->set_rules('sbm_Nome', 'sbm_Nome', 'required|max_length[250]');
		$this->form_validation->set_rules('sbm_Ativo', 'sbm_Ativo', 'required|in_list[True,False]');
		$this->form_validation->set_rules('sbm_Url', 'sbm_Url', 'required');
		$this->form_validation->set_rules('sbm_Nivel', 'sbm_Nivel', 'integer');
		
    parent::update($Id);
  }

  public function delete($Id){
    parent::delete($Id);
  }
}
