<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ref712 extends MY_Controller {

  public function  __construct() {
    parent::__construct();
    $this->table = 'ref712';
    $this->nameId = 'Id';
  }

  public function get($Id = '', $date = ''){
    parent::get($Id, $date);
  }
  
  public function setDefaultValue(){
    
  }

  public function create(){
    $this->form_validation->set_rules('Codigo', 'Codigo', 'required|max_length[30]');
		$this->form_validation->set_rules('Descricao', 'Descricao', 'required|max_length[255]');
		$this->form_validation->set_rules('DtIni', 'DtIni', 'required|valid_date');
		$this->form_validation->set_rules('DtFin', 'DtFin', 'valid_date');
		$this->form_validation->set_rules('IndTipoAtividade', 'IndTipoAtividade', '');
		$this->form_validation->set_rules('IndAjuste', 'IndAjuste', '');
		$this->form_validation->set_rules('Grupo', 'Grupo', '');
		$this->form_validation->set_rules('IndOutros', 'IndOutros', '');
		$this->form_validation->set_rules('IndTipoDeducoes', 'IndTipoDeducoes', '');
		
    parent::create();
  }
  
  public function update($Id){
    $this->form_validation->set_rules('Codigo', 'Codigo', 'required|max_length[30]');
		$this->form_validation->set_rules('Descricao', 'Descricao', 'required|max_length[255]');
		$this->form_validation->set_rules('DtIni', 'DtIni', 'required|valid_date');
		$this->form_validation->set_rules('DtFin', 'DtFin', 'valid_date');
		$this->form_validation->set_rules('IndTipoAtividade', 'IndTipoAtividade', '');
		$this->form_validation->set_rules('IndAjuste', 'IndAjuste', '');
		$this->form_validation->set_rules('Grupo', 'Grupo', '');
		$this->form_validation->set_rules('IndOutros', 'IndOutros', '');
		$this->form_validation->set_rules('IndTipoDeducoes', 'IndTipoDeducoes', '');
		
    parent::update($Id);
  }

  public function delete($Id){
    parent::delete($Id);
  }
}