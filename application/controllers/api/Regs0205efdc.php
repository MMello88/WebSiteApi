<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Regs0205efdc extends MY_Controller {

  public function  __construct() {
    parent::__construct();
    $this->table = 'regs0205efdc';
    $this->nameId = '0205_Id';
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
    $this->form_validation->set_rules('0205_Reg', '0205_Reg', 'required|max_length[4]');
		$this->form_validation->set_rules('0205_DescricaoAntItem', '0205_DescricaoAntItem', 'required|max_length[255]');
		$this->form_validation->set_rules('0205_CodAntItem', '0205_CodAntItem', 'max_length[60]');
		$this->form_validation->set_rules('0205_DtIni', '0205_DtIni', 'required|valid_date');
		$this->form_validation->set_rules('0205_DtFin', '0205_DtFin', 'valid_date');
		
    parent::create();
  }

  public function update($Id){
    $this->form_validation->set_rules('0205_Reg', '0205_Reg', 'required|max_length[4]');
		$this->form_validation->set_rules('0205_DescricaoAntItem', '0205_DescricaoAntItem', 'required|max_length[255]');
		$this->form_validation->set_rules('0205_CodAntItem', '0205_CodAntItem', 'max_length[60]');
		$this->form_validation->set_rules('0205_DtIni', '0205_DtIni', 'required|valid_date');
		$this->form_validation->set_rules('0205_DtFin', '0205_DtFin', 'valid_date');
		
    parent::update($Id);
  }

  public function delete($Id){
    parent::delete($Id);
  }
}
