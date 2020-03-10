<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Regs0120efdc extends MY_Controller {

  public function  __construct() {
    parent::__construct();
    $this->table = 'regs0120efdc';
    $this->nameId = 'Id';
  }

  public function get($Id = '', $date = ''){
    parent::get($Id, $date);
  }
  
  public function setDefaultValue(){
    $_POST['Reg'] = !isset($_POST['Reg']) ? '0120' : $_POST['Reg'];
		
  }

  public function create(){
    $this->form_validation->set_rules('Reg', 'Reg', 'required|max_length[4]');
		$this->form_validation->set_rules('MesRefer', 'MesRefer', 'required|valid_datetime');
		$this->form_validation->set_rules('InfoCompl', 'InfoCompl', 'required|integer');
		$this->form_validation->set_rules('DtIni', 'DtIni', 'required|valid_datetime');
		$this->form_validation->set_rules('DtFin', 'DtFin', 'required|valid_datetime');
		$this->form_validation->set_rules('PessoaJuridicaId', 'PessoaJuridicaId', 'integer');
		$this->form_validation->set_rules('UserId', 'UserId', 'integer');
		
    parent::create();
  }
  
  public function update($Id){
    $this->form_validation->set_rules('Reg', 'Reg', 'required|max_length[4]');
		$this->form_validation->set_rules('MesRefer', 'MesRefer', 'required|valid_datetime');
		$this->form_validation->set_rules('InfoCompl', 'InfoCompl', 'required|integer');
		$this->form_validation->set_rules('DtIni', 'DtIni', 'required|valid_datetime');
		$this->form_validation->set_rules('DtFin', 'DtFin', 'required|valid_datetime');
		$this->form_validation->set_rules('PessoaJuridicaId', 'PessoaJuridicaId', 'integer');
		$this->form_validation->set_rules('UserId', 'UserId', 'integer');
		
    parent::update($Id);
  }

  public function delete($Id){
    parent::delete($Id);
  }
}