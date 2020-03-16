<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Regs0200efdc extends MY_Controller {

  public function  __construct() {
    parent::__construct();
    $this->table = 'regs0200efdc';
    $this->nameId = 'Id';
  }

  public function get($Id = '', $date = ''){
    parent::get($Id, $date);
  }
  
  public function setDefaultValue(){
    
  }

  public function create(){
    $this->form_validation->set_rules('Reg', 'Reg', 'required|max_length[4]');
		$this->form_validation->set_rules('CodItem', 'CodItem', 'required|max_length[60]');
		$this->form_validation->set_rules('DescricaoItem', 'DescricaoItem', 'required|max_length[255]');
		$this->form_validation->set_rules('CodBarra', 'CodBarra', 'max_length[255]');
		$this->form_validation->set_rules('CodAntItem', 'CodAntItem', 'max_length[60]');
		$this->form_validation->set_rules('Reg0190EFDCId', 'Reg0190EFDCId', 'integer');
		$this->form_validation->set_rules('TipoItem', 'TipoItem', 'required|in_list[00 – Mercadoria para Revenda,01 – Matéria-Prima,02 – Embalagem,03 – Produto em Processo,04 – Produto Acabado,05 – Subproduto,06 – Produto Intermediário,07 – Material de Uso e Consumo,08 – Ativo Imobilizado,09 – Serviços,10 – Outros insumos,99 – Outras]');
		$this->form_validation->set_rules('CodNcm', 'CodNcm', 'max_length[8]');
		$this->form_validation->set_rules('ExIpi', 'ExIpi', 'max_length[3]');
		$this->form_validation->set_rules('CodGen', 'CodGen', 'required|integer');
		$this->form_validation->set_rules('CodLst', 'CodLst', 'required|integer');
		$this->form_validation->set_rules('AliqIcms', 'AliqIcms', 'required|decimal');
		$this->form_validation->set_rules('DtIni', 'DtIni', 'required|valid_date');
		$this->form_validation->set_rules('DtFin', 'DtFin', 'valid_date');
		$this->form_validation->set_rules('PessoaJuridicaId', 'PessoaJuridicaId', 'integer');
		$this->form_validation->set_rules('UserId', 'UserId', 'integer');
		$this->form_validation->set_rules('Reg0205EFDCId', 'Reg0205EFDCId', 'integer');
		$this->form_validation->set_rules('Reg0206EFDCId', 'Reg0206EFDCId', 'integer');
		$this->form_validation->set_rules('Reg020EFDCId', 'Reg020EFDCId', 'integer');
		
    parent::create();
  }
  
  public function update($Id){
    $this->form_validation->set_rules('Reg', 'Reg', 'required|max_length[4]');
		$this->form_validation->set_rules('CodItem', 'CodItem', 'required|max_length[60]');
		$this->form_validation->set_rules('DescricaoItem', 'DescricaoItem', 'required|max_length[255]');
		$this->form_validation->set_rules('CodBarra', 'CodBarra', 'max_length[255]');
		$this->form_validation->set_rules('CodAntItem', 'CodAntItem', 'max_length[60]');
		$this->form_validation->set_rules('Reg0190EFDCId', 'Reg0190EFDCId', 'integer');
		$this->form_validation->set_rules('TipoItem', 'TipoItem', 'required|in_list[00 – Mercadoria para Revenda,01 – Matéria-Prima,02 – Embalagem,03 – Produto em Processo,04 – Produto Acabado,05 – Subproduto,06 – Produto Intermediário,07 – Material de Uso e Consumo,08 – Ativo Imobilizado,09 – Serviços,10 – Outros insumos,99 – Outras]');
		$this->form_validation->set_rules('CodNcm', 'CodNcm', 'max_length[8]');
		$this->form_validation->set_rules('ExIpi', 'ExIpi', 'max_length[3]');
		$this->form_validation->set_rules('CodGen', 'CodGen', 'required|integer');
		$this->form_validation->set_rules('CodLst', 'CodLst', 'required|integer');
		$this->form_validation->set_rules('AliqIcms', 'AliqIcms', 'required|decimal');
		$this->form_validation->set_rules('DtIni', 'DtIni', 'required|valid_date');
		$this->form_validation->set_rules('DtFin', 'DtFin', 'valid_date');
		$this->form_validation->set_rules('PessoaJuridicaId', 'PessoaJuridicaId', 'integer');
		$this->form_validation->set_rules('UserId', 'UserId', 'integer');
		$this->form_validation->set_rules('Reg0205EFDCId', 'Reg0205EFDCId', 'integer');
		$this->form_validation->set_rules('Reg0206EFDCId', 'Reg0206EFDCId', 'integer');
		$this->form_validation->set_rules('Reg020EFDCId', 'Reg020EFDCId', 'integer');
		
    parent::update($Id);
  }

  public function delete($Id){
    parent::delete($Id);
  }
}

/*
	<div class='card-body'>
		<form>
			<fieldset>
				<legend>Identificação do Item (Produtos e Serviços)</legend>
				<div class='form-group'>
					<label for='Id'>Identificador</label>
					<input type='' name='Id' id='Id' class='form-control' placeholder='Identificador' required>
				</div>
				<div class='form-group'>
					<label for='Reg'>Registro</label>
					<input type='hidden' name='Reg' id='Reg'>
				</div>
				<div class='form-group'>
					<label for='CodItem'>Código do Item</label>
					<input type='hidden' name='CodItem' id='CodItem'>
				</div>
				<div class='form-group'>
					<label for='DescricaoItem'>Descrição</label>
					<input type='hidden' name='DescricaoItem' id='DescricaoItem'>
				</div>
				<div class='form-group'>
					<label for='CodBarra'>Código de Barra</label>
					<input type='hidden' name='CodBarra' id='CodBarra'>
				</div>
				<div class='form-group'>
					<label for='CodAntItem'>Código Anterior do Item</label>
					<input type='hidden' name='CodAntItem' id='CodAntItem'>
				</div>
				<div class='form-group'>
					<label for='Reg0190EFDCId'>Unidades de Medida</label>
					<input type='hidden' name='Reg0190EFDCId' id='Reg0190EFDCId'>
				</div>
				<div class='form-group'>
					<label for='TipoItem'>Tipo do item</label>
					<input type='hidden' name='TipoItem' id='TipoItem'>
				</div>
				<div class='form-group'>
					<label for='CodNcm'>NCM</label>
					<input type='hidden' name='CodNcm' id='CodNcm'>
				</div>
				<div class='form-group'>
					<label for='ExIpi'>Código EX TIPI</label>
					<input type='hidden' name='ExIpi' id='ExIpi'>
				</div>
				<div class='form-group'>
					<label for='CodGen'>Código Gênero Item</label>
					<input type='hidden' name='CodGen' id='CodGen'>
				</div>
				<div class='form-group'>
					<label for='CodLst'>Código do Serviço</label>
					<input type='hidden' name='CodLst' id='CodLst'>
				</div>
				<div class='form-group'>
					<label for='AliqIcms'>Alíquota de ICMS</label>
					<input type='hidden' name='AliqIcms' id='AliqIcms'>
				</div>
				<div class='form-group'>
					<label for='DtIni'>Data Inicial</label>
					<input type='hidden' name='DtIni' id='DtIni'>
				</div>
				<div class='form-group'>
					<label for='DtFin'>Data Final</label>
					<input type='hidden' name='DtFin' id='DtFin'>
				</div>
				<div class='form-group'>
					<label for='PessoaJuridicaId'>Pessoa Juridica</label>
					<input type='hidden' name='PessoaJuridicaId' id='PessoaJuridicaId'>
				</div>
				<div class='form-group'>
					<label for='UserId'>Usuário</label>
					<input type='hidden' name='UserId' id='UserId'>
				</div>
				<div class='form-group'>
					<label for='Reg0205EFDCId'>Alteração do Item</label>
					<input type='hidden' name='Reg0205EFDCId' id='Reg0205EFDCId'>
				</div>
				<div class='form-group'>
					<label for='Reg0206EFDCId'>Código de Produto Conforme Tabela ANP</label>
					<input type='hidden' name='Reg0206EFDCId' id='Reg0206EFDCId'>
				</div>
				<div class='form-group'>
					<label for='Reg020EFDCId'>Código de Grupos por Marca Comercial</label>
					<input type='hidden' name='Reg020EFDCId' id='Reg020EFDCId'>
				</div>
				<div class='form-actions'>
					<button class='btn btn-primary' type='submit'>Salvar</button>
				</div>
				<div class='form-actions'>
					<button class='btn btn-secondary' type='submit'>Cancelar</button>
				</div>
			</fieldset>
		</form>
	</div>
*/

