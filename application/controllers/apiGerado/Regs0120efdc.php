<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Regs0120efdc extends MY_Controller {

  public function  __construct() {
    parent::__construct();
    $this->table = 'regs0120efdc';
    $this->nameId = '0120_Id';
    $this->usersId = '0120_UsersId';
    $this->joins = [
			['table' => 'pessoasjuridica', 'condition' => 'pessoasjuridica.pj_Id = regs0120efdc.0120_PessoaJuridicaId', 'type' => 'left'],
    ];
  }

  public function get($Id = '', $date = ''){
    parent::get($Id, $date);
  }

  public function setDefaultValue(){
    $_POST['0120_Reg'] = !isset($_POST['0120_Reg']) ? '0120' : $_POST['0120_Reg'];
		
  }

  public function create(){
    $this->form_validation->set_rules('0120_Reg', '0120_Reg', 'required|max_length[4]');
		$this->form_validation->set_rules('0120_MesRefer', '0120_MesRefer', 'required|valid_date');
		$this->form_validation->set_rules('0120_InfoCompl', '0120_InfoCompl', 'required|integer');
		$this->form_validation->set_rules('0120_DtIni', '0120_DtIni', 'required|valid_date');
		$this->form_validation->set_rules('0120_DtFin', '0120_DtFin', 'valid_date');
		$this->form_validation->set_rules('0120_PessoaJuridicaId', '0120_PessoaJuridicaId', 'integer');
		$this->form_validation->set_rules('0120_UsersId', '0120_UsersId', 'integer');
		
    parent::create();
  }

  public function update($Id){
    $this->form_validation->set_rules('0120_Reg', '0120_Reg', 'required|max_length[4]');
		$this->form_validation->set_rules('0120_MesRefer', '0120_MesRefer', 'required|valid_date');
		$this->form_validation->set_rules('0120_InfoCompl', '0120_InfoCompl', 'required|integer');
		$this->form_validation->set_rules('0120_DtIni', '0120_DtIni', 'required|valid_date');
		$this->form_validation->set_rules('0120_DtFin', '0120_DtFin', 'valid_date');
		$this->form_validation->set_rules('0120_PessoaJuridicaId', '0120_PessoaJuridicaId', 'integer');
		$this->form_validation->set_rules('0120_UsersId', '0120_UsersId', 'integer');
		
    parent::update($Id);
  }

  public function delete($Id){
    parent::delete($Id);
  }
}
