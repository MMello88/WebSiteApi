<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Regs0200efdc extends MY_Controller {

  public function  __construct() {
    parent::__construct();
    $this->table = 'regs0200efdc';
    $this->nameId = 'Id';
    $this->usersId = 'UsersId';
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
		$this->form_validation->set_rules('UsersId', 'UsersId', 'integer');
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
		$this->form_validation->set_rules('UsersId', 'UsersId', 'integer');
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
					<input type='hidden' name='Id' id='Id'>
				</div>
				<div class='form-group'>
					<label for='Reg'>Registro</label>
					<input type='text' name='Reg' id='Reg' class='form-control' placeholder='Registro' required>
				</div>
				<div class='form-group'>
					<label for='CodItem'>Código do Item</label>
					<input type='text' name='CodItem' id='CodItem' class='form-control' placeholder='Código do Item' required>
				</div>
				<div class='form-group'>
					<label for='DescricaoItem'>Descrição</label>
					<input type='text' name='DescricaoItem' id='DescricaoItem' class='form-control' placeholder='Descrição' required>
				</div>
				<div class='form-group'>
					<label for='CodBarra'>Código de Barra</label>
					<input type='text' name='CodBarra' id='CodBarra' class='form-control' placeholder='Código de Barra' >
				</div>
				<div class='form-group'>
					<label for='CodAntItem'>Código Anterior do Item</label>
					<input type='text' name='CodAntItem' id='CodAntItem' class='form-control' placeholder='Código Anterior do Item' >
				</div>
				<div class='form-group'>
					<label for='Reg0190EFDCId'>Unidades de Medida</label>
					<input type='number' name='Reg0190EFDCId' id='Reg0190EFDCId' class='form-control' placeholder='Unidades de Medida' >
				</div>
				<div class='form-group'>
					<label for='TipoItem'>Tipo do item</label>
					<select name='TipoItem' id='TipoItem' class='custom-select' placeholder='Tipo do item' required>
						<option value=''> Selecione </option>
						<option value='00 – Mercadoria para Revenda'> 00 – Mercadoria para Revenda </option>
						<option value='01 – Matéria-Prima'> 01 – Matéria-Prima </option>
						<option value='02 – Embalagem'> 02 – Embalagem </option>
						<option value='03 – Produto em Processo'> 03 – Produto em Processo </option>
						<option value='04 – Produto Acabado'> 04 – Produto Acabado </option>
						<option value='05 – Subproduto'> 05 – Subproduto </option>
						<option value='06 – Produto Intermediário'> 06 – Produto Intermediário </option>
						<option value='07 – Material de Uso e Consumo'> 07 – Material de Uso e Consumo </option>
						<option value='08 – Ativo Imobilizado'> 08 – Ativo Imobilizado </option>
						<option value='09 – Serviços'> 09 – Serviços </option>
						<option value='10 – Outros insumos'> 10 – Outros insumos </option>
						<option value='99 – Outras'> 99 – Outras </option>
					</select>
				</div>
				<div class='form-group'>
					<label for='CodNcm'>NCM</label>
					<input type='text' name='CodNcm' id='CodNcm' class='form-control' placeholder='NCM' >
				</div>
				<div class='form-group'>
					<label for='ExIpi'>Código EX TIPI</label>
					<input type='text' name='ExIpi' id='ExIpi' class='form-control' placeholder='Código EX TIPI' >
				</div>
				<div class='form-group'>
					<label for='CodGen'>Código Gênero Item</label>
					<input type='number' name='CodGen' id='CodGen' class='form-control' placeholder='Código Gênero Item' required>
				</div>
				<div class='form-group'>
					<label for='CodLst'>Código do Serviço</label>
					<input type='number' name='CodLst' id='CodLst' class='form-control' placeholder='Código do Serviço' required>
				</div>
				<div class='form-group'>
					<label for='AliqIcms'>Alíquota de ICMS</label>
					<input type='' name='AliqIcms' id='AliqIcms' class='form-control' placeholder='Alíquota de ICMS' required>
				</div>
				<div class='form-group'>
					<label for='DtIni'>Data Inicial</label>
					<input type='date' name='DtIni' id='DtIni' class='form-control' placeholder='Data Inicial' required>
				</div>
				<div class='form-group'>
					<label for='DtFin'>Data Final</label>
					<input type='date' name='DtFin' id='DtFin' class='form-control' placeholder='Data Final' >
				</div>
				<div class='form-group'>
					<label for='PessoaJuridicaId'>Pessoa Juridica</label>
					<input type='number' name='PessoaJuridicaId' id='PessoaJuridicaId' class='form-control' placeholder='Pessoa Juridica' >
				</div>
				<div class='form-group'>
					<label for='UsersId'>Usuário</label>
					<input type='number' name='UsersId' id='UsersId' class='form-control' placeholder='Usuário' >
				</div>
				<div class='form-group'>
					<label for='Reg0205EFDCId'>Alteração do Item</label>
					<input type='number' name='Reg0205EFDCId' id='Reg0205EFDCId' class='form-control' placeholder='Alteração do Item' >
				</div>
				<div class='form-group'>
					<label for='Reg0206EFDCId'>Código de Produto Conforme Tabela ANP</label>
					<input type='number' name='Reg0206EFDCId' id='Reg0206EFDCId' class='form-control' placeholder='Código de Produto Conforme Tabela ANP' >
				</div>
				<div class='form-group'>
					<label for='Reg020EFDCId'>Código de Grupos por Marca Comercial</label>
					<input type='number' name='Reg020EFDCId' id='Reg020EFDCId' class='form-control' placeholder='Código de Grupos por Marca Comercial' >
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

