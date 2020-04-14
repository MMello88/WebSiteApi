<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Regs0600efdc extends MY_Controller {

  public function  __construct() {
    parent::__construct();
    $this->table = 'regs0600efdc';
    $this->nameId = '0600_Id';
    $this->usersId = '0600_UsersId';
    $this->joins = [
			['table' => 'pessoasjuridica', 'condition' => 'pessoasjuridica.pj_Id = regs0600efdc.0600_PessoaJuridicaId', 'type' => 'left'],
    ];
  }

  public function get($Id = '', $date = ''){
    parent::get($Id, $date);
  }

  public function setDefaultValue(){
    
  }

  public function create(){
    $this->form_validation->set_rules('0600_Reg', '0600_Reg', 'required|max_length[4]');
		$this->form_validation->set_rules('0600_DtAlteracao', '0600_DtAlteracao', 'required|valid_datetime');
		$this->form_validation->set_rules('0600_CodCCusto', '0600_CodCCusto', 'required|max_length[255]');
		$this->form_validation->set_rules('0600_NomeCCusto', '0600_NomeCCusto', 'required|max_length[60]');
		$this->form_validation->set_rules('0600_DtIni', '0600_DtIni', 'required|valid_date');
		$this->form_validation->set_rules('0600_DtFin', '0600_DtFin', 'valid_date');
		$this->form_validation->set_rules('0600_PessoaJuridicaId', '0600_PessoaJuridicaId', 'integer');
		$this->form_validation->set_rules('0600_UsersId', '0600_UsersId', 'integer');
		
    parent::create();
  }

  public function update($Id){
    $this->form_validation->set_rules('0600_Reg', '0600_Reg', 'required|max_length[4]');
		$this->form_validation->set_rules('0600_DtAlteracao', '0600_DtAlteracao', 'required|valid_datetime');
		$this->form_validation->set_rules('0600_CodCCusto', '0600_CodCCusto', 'required|max_length[255]');
		$this->form_validation->set_rules('0600_NomeCCusto', '0600_NomeCCusto', 'required|max_length[60]');
		$this->form_validation->set_rules('0600_DtIni', '0600_DtIni', 'required|valid_date');
		$this->form_validation->set_rules('0600_DtFin', '0600_DtFin', 'valid_date');
		$this->form_validation->set_rules('0600_PessoaJuridicaId', '0600_PessoaJuridicaId', 'integer');
		$this->form_validation->set_rules('0600_UsersId', '0600_UsersId', 'integer');
		
    parent::update($Id);
  }

  public function delete($Id){
    parent::delete($Id);
  }
}
