<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Regs0111efdc extends MY_Controller {

  public function  __construct() {
    parent::__construct();
    $this->table = 'regs0111efdc';
    $this->nameId = 'Id';
  }

  public function get($Id = '', $date = ''){
    parent::get($Id, $date);
  }
  
  public function setDefaultValue(){
    
  }

  public function create(){
    $this->form_validation->set_rules('Reg', 'Reg', 'required|max_length[4]');
		$this->form_validation->set_rules('RecBruNCumTribMI', 'RecBruNCumTribMI', 'required|integer');
		$this->form_validation->set_rules('RecBruNCumNaoTribMI', 'RecBruNCumNaoTribMI', 'required|integer');
		$this->form_validation->set_rules('RecBruNCumExp', 'RecBruNCumExp', 'required|integer');
		$this->form_validation->set_rules('RecBruNCum', 'RecBruNCum', 'required|integer');
		$this->form_validation->set_rules('RecBruNCumTotal', 'RecBruNCumTotal', 'required|integer');
		
    parent::create();
  }
  
  public function update($Id){
    $this->form_validation->set_rules('Reg', 'Reg', 'required|max_length[4]');
		$this->form_validation->set_rules('RecBruNCumTribMI', 'RecBruNCumTribMI', 'required|integer');
		$this->form_validation->set_rules('RecBruNCumNaoTribMI', 'RecBruNCumNaoTribMI', 'required|integer');
		$this->form_validation->set_rules('RecBruNCumExp', 'RecBruNCumExp', 'required|integer');
		$this->form_validation->set_rules('RecBruNCum', 'RecBruNCum', 'required|integer');
		$this->form_validation->set_rules('RecBruNCumTotal', 'RecBruNCumTotal', 'required|integer');
		
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
				<legend>Tabela de Receita Bruta Mensal Para Fins de Rateio de Créditos Comuns</legend>
				<div class='form-group'>
					<label for='Id'>Identificador</label>
					<input type='' name='Id' id='Id' class='form-control' placeholder='Identificador' required>
				</div>
				<div class='form-group'>
					<label for='Reg'>Registro</label>
					<input type='hidden' name='Reg' id='Reg'>
				</div>
				<div class='form-group'>
					<label for='RecBruNCumTribMI'>Tributada</label>
					<input type='hidden' name='RecBruNCumTribMI' id='RecBruNCumTribMI'>
				</div>
				<div class='form-group'>
					<label for='RecBruNCumNaoTribMI'>Não Tributada</label>
					<input type='hidden' name='RecBruNCumNaoTribMI' id='RecBruNCumNaoTribMI'>
				</div>
				<div class='form-group'>
					<label for='RecBruNCumExp'>Exportação</label>
					<input type='hidden' name='RecBruNCumExp' id='RecBruNCumExp'>
				</div>
				<div class='form-group'>
					<label for='RecBruNCum'>Receita Bruta Cumulativa</label>
					<input type='hidden' name='RecBruNCum' id='RecBruNCum'>
				</div>
				<div class='form-group'>
					<label for='RecBruNCumTotal'>Receita Bruta Total</label>
					<input type='hidden' name='RecBruNCumTotal' id='RecBruNCumTotal'>
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

