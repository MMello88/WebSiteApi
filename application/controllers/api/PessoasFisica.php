<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pessoasfisica extends MY_Controller {

  public function  __construct() {
    parent::__construct();
    $this->table = 'pessoasfisica';
    $this->nameId = 'pf_Id';
    $this->usersId = '';
    $this->joins = [
    ];
  }

  public function get($Id = '', $date = ''){
    parent::get($Id, $date);
  }

  public function setDefaultValue(){
    $_POST['pf_Criacao'] = !isset($_POST['pf_Criacao']) ? date('Y-m-d H:i:s') : $_POST['pf_Criacao'];
		
  }

  public function create(){
    $this->form_validation->set_rules('pf_Nome', 'pf_Nome', 'required|max_length[250]');
		$this->form_validation->set_rules('pf_Sobrenome', 'pf_Sobrenome', 'required|max_length[300]');
		$this->form_validation->set_rules('pf_DataNascimento', 'pf_DataNascimento', 'required|valid_date');
		$this->form_validation->set_rules('pf_UrlFoto', 'pf_UrlFoto', 'max_length[150]');
		$this->form_validation->set_rules('pf_Ativo', 'pf_Ativo', 'required|in_list[True,False]');
		$this->form_validation->set_rules('pf_Criacao', 'pf_Criacao', 'required|valid_datetime');
		
    parent::create();
  }

  public function update($Id){
    $this->form_validation->set_rules('pf_Nome', 'pf_Nome', 'required|max_length[250]');
		$this->form_validation->set_rules('pf_Sobrenome', 'pf_Sobrenome', 'required|max_length[300]');
		$this->form_validation->set_rules('pf_DataNascimento', 'pf_DataNascimento', 'required|valid_date');
		$this->form_validation->set_rules('pf_UrlFoto', 'pf_UrlFoto', 'max_length[150]');
		$this->form_validation->set_rules('pf_Ativo', 'pf_Ativo', 'required|in_list[True,False]');
		$this->form_validation->set_rules('pf_Criacao', 'pf_Criacao', 'required|valid_datetime');
		
    parent::update($Id);
  }

  public function delete($Id){
    parent::delete($Id);
  }
}
