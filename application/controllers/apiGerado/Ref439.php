<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ref439 extends MY_Controller {

  public function  __construct() {
    parent::__construct();
    $this->table = 'ref439';
    $this->nameId = '439_Id';
    $this->usersId = '';
    $this->joins = [
    ];
  }

  public function get($Id = '', $date = ''){
    parent::get($Id, $date);
  }

  public function setDefaultValue(){
    
  }

  public function create(){
    $this->form_validation->set_rules('439_Codigo', '439_Codigo', 'required|max_length[30]');
		$this->form_validation->set_rules('439_Descricao', '439_Descricao', 'required|max_length[255]');
		$this->form_validation->set_rules('439_DtIni', '439_DtIni', 'required|valid_date');
		$this->form_validation->set_rules('439_DtFin', '439_DtFin', 'valid_date');
		$this->form_validation->set_rules('439_Ncm', '439_Ncm', 'required');
		$this->form_validation->set_rules('439_AliqPis', '439_AliqPis', 'numeric');
		$this->form_validation->set_rules('439_AliqCofins', '439_AliqCofins', 'numeric');
		
    parent::create();
  }

  public function update($Id){
    $this->form_validation->set_rules('439_Codigo', '439_Codigo', 'required|max_length[30]');
		$this->form_validation->set_rules('439_Descricao', '439_Descricao', 'required|max_length[255]');
		$this->form_validation->set_rules('439_DtIni', '439_DtIni', 'required|valid_date');
		$this->form_validation->set_rules('439_DtFin', '439_DtFin', 'valid_date');
		$this->form_validation->set_rules('439_Ncm', '439_Ncm', 'required');
		$this->form_validation->set_rules('439_AliqPis', '439_AliqPis', 'numeric');
		$this->form_validation->set_rules('439_AliqCofins', '439_AliqCofins', 'numeric');
		
    parent::update($Id);
  }

  public function delete($Id){
    parent::delete($Id);
  }
}
