<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Regs0001efdc extends MY_Controller {

  public function  __construct() {
    parent::__construct();
    $this->table = 'regs0001efdc';
    $this->nameId = '0001_Id';
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
    $this->form_validation->set_rules('0001_Reg', '0001_Reg', 'required|max_length[4]');
		$this->form_validation->set_rules('0001_IndicadorMovimento', '0001_IndicadorMovimento', 'required|in_list[0 - Bloco com dados informados,1 – Bloco sem dados informados]');
		
    parent::create();
  }

  public function update($Id){
    $this->form_validation->set_rules('0001_Reg', '0001_Reg', 'required|max_length[4]');
		$this->form_validation->set_rules('0001_IndicadorMovimento', '0001_IndicadorMovimento', 'required|in_list[0 - Bloco com dados informados,1 – Bloco sem dados informados]');
		
    parent::update($Id);
  }

  public function delete($Id){
    parent::delete($Id);
  }
}
