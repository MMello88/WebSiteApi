<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends MY_Controller {

  public function  __construct() {
    parent::__construct();
    $this->table = 'users';
    $this->nameId = 'uu_Id';
    $this->usersId = '';
    $this->joins = [
    ];
  }

  public function get($Id = '', $date = ''){
    parent::get($Id, $date);
  }

  public function setDefaultValue(){
    $_POST['uu_Criacao'] = !isset($_POST['uu_Criacao']) ? date('Y-m-d H:i:s') : $_POST['uu_Criacao'];
		
  }

  public function create(){
    $this->form_validation->set_rules('uu_Nome', 'uu_Nome', 'required|max_length[350]');
		$this->form_validation->set_rules('uu_Sobrenome', 'uu_Sobrenome', 'required|max_length[250]');
		$this->form_validation->set_rules('uu_DataNascimento', 'uu_DataNascimento', 'required|valid_date');
		$this->form_validation->set_rules('uu_Ativo', 'uu_Ativo', 'required|in_list[True,False]');
		$this->form_validation->set_rules('uu_Criacao', 'uu_Criacao', 'required|valid_datetime');
		$this->form_validation->set_rules('uu_Email', 'uu_Email', 'required|max_length[250]');
		$this->form_validation->set_rules('uu_Senha', 'uu_Senha', 'required|max_length[64]');
		$this->form_validation->set_rules('uu_DataReset', 'uu_DataReset', 'valid_datetime');
		$this->form_validation->set_rules('uu_IdReset', 'uu_IdReset', 'max_length[150]');
		
    parent::create();
  }

  public function update($Id){
    $this->form_validation->set_rules('uu_Nome', 'uu_Nome', 'required|max_length[350]');
		$this->form_validation->set_rules('uu_Sobrenome', 'uu_Sobrenome', 'required|max_length[250]');
		$this->form_validation->set_rules('uu_DataNascimento', 'uu_DataNascimento', 'required|valid_date');
		$this->form_validation->set_rules('uu_Ativo', 'uu_Ativo', 'required|in_list[True,False]');
		$this->form_validation->set_rules('uu_Criacao', 'uu_Criacao', 'required|valid_datetime');
		$this->form_validation->set_rules('uu_Email', 'uu_Email', 'required|max_length[250]');
		$this->form_validation->set_rules('uu_Senha', 'uu_Senha', 'required|max_length[64]');
		$this->form_validation->set_rules('uu_DataReset', 'uu_DataReset', 'valid_datetime');
		$this->form_validation->set_rules('uu_IdReset', 'uu_IdReset', 'max_length[150]');
		
    parent::update($Id);
  }

  public function delete($Id){
    parent::delete($Id);
  }
}
