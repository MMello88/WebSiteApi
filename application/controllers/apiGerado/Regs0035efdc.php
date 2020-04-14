<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Regs0035efdc extends MY_Controller {

  public function  __construct() {
    parent::__construct();
    $this->table = 'regs0035efdc';
    $this->nameId = '0035_Id';
    $this->usersId = '0035_UsersId';
    $this->joins = [
			['table' => 'pessoasjuridica', 'condition' => 'pessoasjuridica.pj_Id = regs0035efdc.0035_PessoaJuridicaId', 'type' => 'left'],
    ];
  }

  public function get($Id = '', $date = ''){
    parent::get($Id, $date);
  }

  public function setDefaultValue(){
    $_POST['0035_Reg'] = !isset($_POST['0035_Reg']) ? '0035' : $_POST['0035_Reg'];
		
  }

  public function create(){
    $this->form_validation->set_rules('0035_Reg', '0035_Reg', 'required|max_length[4]');
		$this->form_validation->set_rules('0035_CodSCP', '0035_CodSCP', 'required|integer');
		$this->form_validation->set_rules('0035_DtIni', '0035_DtIni', 'required|valid_date');
		$this->form_validation->set_rules('0035_DtFin', '0035_DtFin', 'valid_date');
		$this->form_validation->set_rules('0035_PessoaJuridicaId', '0035_PessoaJuridicaId', 'integer');
		$this->form_validation->set_rules('0035_UsersId', '0035_UsersId', 'integer');
		
    parent::create();
  }

  public function update($Id){
    $this->form_validation->set_rules('0035_Reg', '0035_Reg', 'required|max_length[4]');
		$this->form_validation->set_rules('0035_CodSCP', '0035_CodSCP', 'required|integer');
		$this->form_validation->set_rules('0035_DtIni', '0035_DtIni', 'required|valid_date');
		$this->form_validation->set_rules('0035_DtFin', '0035_DtFin', 'valid_date');
		$this->form_validation->set_rules('0035_PessoaJuridicaId', '0035_PessoaJuridicaId', 'integer');
		$this->form_validation->set_rules('0035_UsersId', '0035_UsersId', 'integer');
		
    parent::update($Id);
  }

  public function delete($Id){
    parent::delete($Id);
  }
}
