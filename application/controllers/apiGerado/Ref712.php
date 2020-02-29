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
    $this->form_validation->set_rules('Id', 'Id', 'required');
		$this->form_validation->set_rules('Codigo', 'Codigo', 'required');
		$this->form_validation->set_rules('Descricao', 'Descricao', 'required');
		$this->form_validation->set_rules('DtIni', 'DtIni', 'required');
		$this->form_validation->set_rules('DtFin', 'DtFin', 'required');
		$this->form_validation->set_rules('IndTipoAtividade', 'IndTipoAtividade', 'required');
		$this->form_validation->set_rules('IndAjuste', 'IndAjuste', 'required');
		$this->form_validation->set_rules('Grupo', 'Grupo', 'required');
		$this->form_validation->set_rules('IndOutros', 'IndOutros', 'required');
		$this->form_validation->set_rules('IndTipoDeducoes', 'IndTipoDeducoes', 'required');
		
    parent::create();
  }
  
  public function update($Id){
    $this->form_validation->set_rules('Id', 'Id', 'required');
		$this->form_validation->set_rules('Codigo', 'Codigo', 'required');
		$this->form_validation->set_rules('Descricao', 'Descricao', 'required');
		$this->form_validation->set_rules('DtIni', 'DtIni', 'required');
		$this->form_validation->set_rules('DtFin', 'DtFin', 'required');
		$this->form_validation->set_rules('IndTipoAtividade', 'IndTipoAtividade', 'required');
		$this->form_validation->set_rules('IndAjuste', 'IndAjuste', 'required');
		$this->form_validation->set_rules('Grupo', 'Grupo', 'required');
		$this->form_validation->set_rules('IndOutros', 'IndOutros', 'required');
		$this->form_validation->set_rules('IndTipoDeducoes', 'IndTipoDeducoes', 'required');
		
    parent::update($Id);
  }

  public function delete($Id){
    parent::delete($Id);
  }
}