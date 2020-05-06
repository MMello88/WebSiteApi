<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Regs0000efdc extends MY_Controller {

  public function  __construct() {
    parent::__construct();
    $this->table = 'regs0000efdc';
    $this->nameId = '0000_Id';
    $this->usersId = '0000_UsersId';
    $this->joins = [
			['table' => 'ref311', 'condition' => 'ref311.311_Id = regs0000efdc.0000_Ref311Id', 'type' => 'inner'],
			['table' => 'pessoasjuridica', 'condition' => 'pessoasjuridica.pj_Id = regs0000efdc.0000_PessoaJuridicaId', 'type' => 'left'],
			['table' => 'regs0001efdc', 'condition' => 'regs0001efdc.0001_Id = regs0000efdc.0000_Reg0001EFDCId', 'type' => 'left'],
			['table' => 'regs0110efdc', 'condition' => 'regs0110efdc.0110_Id = regs0000efdc.0000_Regs0110EFDCId', 'type' => 'left'],
    ];
    $this->tableParent = 'ref311';
    $this->nameIdParent = '311_Id';
  }

  public function get($Id = '', $date = ''){
    parent::get($Id, $date);
  }

  public function getByParent($IdParent, $Id = ''){
    parent::getByParent($IdParent, $Id);
  }

  public function setDefaultValue(){
    $_POST['0000_Reg'] = !isset($_POST['0000_Reg']) ? '0000' : $_POST['0000_Reg'];
		
  }

  public function create(){
    $this->form_validation->set_rules('0000_Reg', '0000_Reg', 'required|max_length[4]');
		$this->form_validation->set_rules('0000_Ref311Id', '0000_Ref311Id', 'required|integer');
		$this->form_validation->set_rules('0000_TipoEscrit', '0000_TipoEscrit', 'required|in_list[Original,Retificadora]');
		$this->form_validation->set_rules('0000_IndSitEsp', '0000_IndSitEsp', 'required|in_list[Abertura,Cisão,Fusão,Incorporação,Encerramento]');
		$this->form_validation->set_rules('0000_NumRecAnterior', '0000_NumRecAnterior', 'max_length[41]');
		$this->form_validation->set_rules('0000_DtIni', '0000_DtIni', 'required|valid_date');
		$this->form_validation->set_rules('0000_DtFin', '0000_DtFin', 'valid_date');
		$this->form_validation->set_rules('0000_IndNatPj', '0000_IndNatPj', 'required|in_list[00 – Pessoa jurídica em geral,01 – Sociedade cooperativa,02 – Entidade sujeita ao PIS/Pasep exclusivamente com base na Folha de Salários,03 - Pessoa jurídica em geral participante de SCP como sócia ostensiva,04 – Sociedade cooperativa participante de SCP como sócia ostensiva,05 – Sociedade em Conta de Participação - SCP]');
		$this->form_validation->set_rules('0000_IndAtiv', '0000_IndAtiv', 'required|in_list[0 – Industrial ou equiparado a industrial,1 – Prestador de serviços,2 - Atividade de comércio,3 – Pessoas jurídicas referidas nos §§ 6º; 8º e 9º do art. 3º da Lei nº 9.718; de 1998,4 – Atividade imobiliária,9 – Outros]');
		$this->form_validation->set_rules('0000_PessoaJuridicaId', '0000_PessoaJuridicaId', 'integer');
		$this->form_validation->set_rules('0000_UsersId', '0000_UsersId', 'integer');
		$this->form_validation->set_rules('0000_Reg0001EFDCId', '0000_Reg0001EFDCId', 'integer');
		$this->form_validation->set_rules('0000_Regs0110EFDCId', '0000_Regs0110EFDCId', 'integer');
		
    parent::create();
  }

  public function update($Id){
    $this->form_validation->set_rules('0000_Reg', '0000_Reg', 'required|max_length[4]');
		$this->form_validation->set_rules('0000_Ref311Id', '0000_Ref311Id', 'required|integer');
		$this->form_validation->set_rules('0000_TipoEscrit', '0000_TipoEscrit', 'required|in_list[Original,Retificadora]');
		$this->form_validation->set_rules('0000_IndSitEsp', '0000_IndSitEsp', 'required|in_list[Abertura,Cisão,Fusão,Incorporação,Encerramento]');
		$this->form_validation->set_rules('0000_NumRecAnterior', '0000_NumRecAnterior', 'max_length[41]');
		$this->form_validation->set_rules('0000_DtIni', '0000_DtIni', 'required|valid_date');
		$this->form_validation->set_rules('0000_DtFin', '0000_DtFin', 'valid_date');
		$this->form_validation->set_rules('0000_IndNatPj', '0000_IndNatPj', 'required|in_list[00 – Pessoa jurídica em geral,01 – Sociedade cooperativa,02 – Entidade sujeita ao PIS/Pasep exclusivamente com base na Folha de Salários,03 - Pessoa jurídica em geral participante de SCP como sócia ostensiva,04 – Sociedade cooperativa participante de SCP como sócia ostensiva,05 – Sociedade em Conta de Participação - SCP]');
		$this->form_validation->set_rules('0000_IndAtiv', '0000_IndAtiv', 'required|in_list[0 – Industrial ou equiparado a industrial,1 – Prestador de serviços,2 - Atividade de comércio,3 – Pessoas jurídicas referidas nos §§ 6º; 8º e 9º do art. 3º da Lei nº 9.718; de 1998,4 – Atividade imobiliária,9 – Outros]');
		$this->form_validation->set_rules('0000_PessoaJuridicaId', '0000_PessoaJuridicaId', 'integer');
		$this->form_validation->set_rules('0000_UsersId', '0000_UsersId', 'integer');
		$this->form_validation->set_rules('0000_Reg0001EFDCId', '0000_Reg0001EFDCId', 'integer');
		$this->form_validation->set_rules('0000_Regs0110EFDCId', '0000_Regs0110EFDCId', 'integer');
		
    parent::update($Id);
  }

  public function delete($Id){
    parent::delete($Id);
  }
}
