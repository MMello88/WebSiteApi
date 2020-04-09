<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Regsa001efdc extends MY_Controller {

  public function  __construct() {
    parent::__construct();
    $this->table = 'regsa001efdc';
    $this->nameId = 'a001_Id';
    $this->usersId = 'UsersId';
    $this->joins = [
			['table' => 'pessoasjuridica', 'condition' => 'pessoasjuridica.pj_Id = regsa001efdc.PessoaJuridicaId', 'type' => 'left'],
    ];
  }

  public function get($Id = '', $date = ''){
    parent::get($Id, $date);
  }

  public function setDefaultValue(){
    
  }

  public function create(){
    $this->form_validation->set_rules('a001_Reg', 'a001_Reg', 'required|max_length[4]');
		$this->form_validation->set_rules('a001_IndicadorMovimento', 'a001_IndicadorMovimento', 'required|in_list[0 - Bloco com dados informados,1 - Bloco sem dados informados]');
		$this->form_validation->set_rules('a001_DtIni', 'a001_DtIni', 'required|valid_date');
		$this->form_validation->set_rules('a001_DtFin', 'a001_DtFin', 'valid_date');
		$this->form_validation->set_rules('PessoaJuridicaId', 'PessoaJuridicaId', 'integer');
		$this->form_validation->set_rules('UsersId', 'UsersId', 'integer');
		
    parent::create();
  }

  public function update($Id){
    $this->form_validation->set_rules('a001_Reg', 'a001_Reg', 'required|max_length[4]');
		$this->form_validation->set_rules('a001_IndicadorMovimento', 'a001_IndicadorMovimento', 'required|in_list[0 - Bloco com dados informados,1 - Bloco sem dados informados]');
		$this->form_validation->set_rules('a001_DtIni', 'a001_DtIni', 'required|valid_date');
		$this->form_validation->set_rules('a001_DtFin', 'a001_DtFin', 'valid_date');
		$this->form_validation->set_rules('PessoaJuridicaId', 'PessoaJuridicaId', 'integer');
		$this->form_validation->set_rules('UsersId', 'UsersId', 'integer');
		
    parent::update($Id);
  }

  public function delete($Id){
    parent::delete($Id);
  }
}
