<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ref512 extends MY_Controller {

  public function  __construct() {
    parent::__construct();
    $this->table = 'ref512';
    $this->nameId = '512_Id';
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
    $this->form_validation->set_rules('512_Codigo', '512_Codigo', 'required|max_length[30]');
		$this->form_validation->set_rules('512_Descricao', '512_Descricao', 'required|max_length[255]');
		$this->form_validation->set_rules('512_DtIni', '512_DtIni', 'required|valid_date');
		$this->form_validation->set_rules('512_DtFin', '512_DtFin', 'valid_date');
		
    parent::create();
  }

  public function update($Id){
    $this->form_validation->set_rules('512_Codigo', '512_Codigo', 'required|max_length[30]');
		$this->form_validation->set_rules('512_Descricao', '512_Descricao', 'required|max_length[255]');
		$this->form_validation->set_rules('512_DtIni', '512_DtIni', 'required|valid_date');
		$this->form_validation->set_rules('512_DtFin', '512_DtFin', 'valid_date');
		
    parent::update($Id);
  }

  public function delete($Id){
    parent::delete($Id);
  }
}
