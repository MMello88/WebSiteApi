<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Regs0200efdc extends MY_Controller {

  public function  __construct() {
    parent::__construct();
    $this->table = 'regs0200efdc';
    $this->nameId = '0200_Id';
    $this->usersId = '0200_UsersId';
    $this->joins = [
			['table' => 'regs0190efdc', 'condition' => 'regs0190efdc.0190_Id = regs0200efdc.0200_Reg0190EFDCId', 'type' => 'left'],
			['table' => 'pessoasjuridica', 'condition' => 'pessoasjuridica.pj_Id = regs0200efdc.0200_PessoaJuridicaId', 'type' => 'left'],
			['table' => 'regs0205efdc', 'condition' => 'regs0205efdc.0205_Id = regs0200efdc.0200_Reg0205EFDCId', 'type' => 'left'],
			['table' => 'regs0206efdc', 'condition' => 'regs0206efdc.0206_Id = regs0200efdc.0200_Reg0206EFDCId', 'type' => 'left'],
			['table' => 'regs0208efdc', 'condition' => 'regs0208efdc.0208_Id = regs0200efdc.0200_Reg020EFDCId', 'type' => 'left'],
    ];
  }

  public function get($Id = '', $date = ''){
    parent::get($Id, $date);
  }

  public function setDefaultValue(){
    
  }

  public function create(){
    $this->form_validation->set_rules('0200_Reg', '0200_Reg', 'required|max_length[4]');
		$this->form_validation->set_rules('0200_CodItem', '0200_CodItem', 'required|max_length[60]');
		$this->form_validation->set_rules('0200_DescricaoItem', '0200_DescricaoItem', 'required|max_length[255]');
		$this->form_validation->set_rules('0200_CodBarra', '0200_CodBarra', 'max_length[255]');
		$this->form_validation->set_rules('0200_CodAntItem', '0200_CodAntItem', 'max_length[60]');
		$this->form_validation->set_rules('0200_Reg0190EFDCId', '0200_Reg0190EFDCId', 'integer');
		$this->form_validation->set_rules('0200_TipoItem', '0200_TipoItem', 'required|in_list[00 – Mercadoria para Revenda,01 – Matéria-Prima,02 – Embalagem,03 – Produto em Processo,04 – Produto Acabado,05 – Subproduto,06 – Produto Intermediário,07 – Material de Uso e Consumo,08 – Ativo Imobilizado,09 – Serviços,10 – Outros insumos,99 – Outras]');
		$this->form_validation->set_rules('0200_CodNcm', '0200_CodNcm', 'max_length[8]');
		$this->form_validation->set_rules('0200_ExIpi', '0200_ExIpi', 'max_length[3]');
		$this->form_validation->set_rules('0200_CodGen', '0200_CodGen', 'required|integer');
		$this->form_validation->set_rules('0200_CodLst', '0200_CodLst', 'required|integer');
		$this->form_validation->set_rules('0200_AliqIcms', '0200_AliqIcms', 'required|decimal');
		$this->form_validation->set_rules('0200_DtIni', '0200_DtIni', 'required|valid_date');
		$this->form_validation->set_rules('0200_DtFin', '0200_DtFin', 'valid_date');
		$this->form_validation->set_rules('0200_PessoaJuridicaId', '0200_PessoaJuridicaId', 'integer');
		$this->form_validation->set_rules('0200_UsersId', '0200_UsersId', 'integer');
		$this->form_validation->set_rules('0200_Reg0205EFDCId', '0200_Reg0205EFDCId', 'integer');
		$this->form_validation->set_rules('0200_Reg0206EFDCId', '0200_Reg0206EFDCId', 'integer');
		$this->form_validation->set_rules('0200_Reg020EFDCId', '0200_Reg020EFDCId', 'integer');
		
    parent::create();
  }

  public function update($Id){
    $this->form_validation->set_rules('0200_Reg', '0200_Reg', 'required|max_length[4]');
		$this->form_validation->set_rules('0200_CodItem', '0200_CodItem', 'required|max_length[60]');
		$this->form_validation->set_rules('0200_DescricaoItem', '0200_DescricaoItem', 'required|max_length[255]');
		$this->form_validation->set_rules('0200_CodBarra', '0200_CodBarra', 'max_length[255]');
		$this->form_validation->set_rules('0200_CodAntItem', '0200_CodAntItem', 'max_length[60]');
		$this->form_validation->set_rules('0200_Reg0190EFDCId', '0200_Reg0190EFDCId', 'integer');
		$this->form_validation->set_rules('0200_TipoItem', '0200_TipoItem', 'required|in_list[00 – Mercadoria para Revenda,01 – Matéria-Prima,02 – Embalagem,03 – Produto em Processo,04 – Produto Acabado,05 – Subproduto,06 – Produto Intermediário,07 – Material de Uso e Consumo,08 – Ativo Imobilizado,09 – Serviços,10 – Outros insumos,99 – Outras]');
		$this->form_validation->set_rules('0200_CodNcm', '0200_CodNcm', 'max_length[8]');
		$this->form_validation->set_rules('0200_ExIpi', '0200_ExIpi', 'max_length[3]');
		$this->form_validation->set_rules('0200_CodGen', '0200_CodGen', 'required|integer');
		$this->form_validation->set_rules('0200_CodLst', '0200_CodLst', 'required|integer');
		$this->form_validation->set_rules('0200_AliqIcms', '0200_AliqIcms', 'required|decimal');
		$this->form_validation->set_rules('0200_DtIni', '0200_DtIni', 'required|valid_date');
		$this->form_validation->set_rules('0200_DtFin', '0200_DtFin', 'valid_date');
		$this->form_validation->set_rules('0200_PessoaJuridicaId', '0200_PessoaJuridicaId', 'integer');
		$this->form_validation->set_rules('0200_UsersId', '0200_UsersId', 'integer');
		$this->form_validation->set_rules('0200_Reg0205EFDCId', '0200_Reg0205EFDCId', 'integer');
		$this->form_validation->set_rules('0200_Reg0206EFDCId', '0200_Reg0206EFDCId', 'integer');
		$this->form_validation->set_rules('0200_Reg020EFDCId', '0200_Reg020EFDCId', 'integer');
		
    parent::update($Id);
  }

  public function delete($Id){
    parent::delete($Id);
  }
}
