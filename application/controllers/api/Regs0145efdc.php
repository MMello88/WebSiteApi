<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Regs0145efdc extends MY_Controller {

  public function  __construct() {
    parent::__construct();
    $this->table = 'regs0145efdc';
    $this->nameId = 'Id';
    $this->usersId = '';
    $this->joins = [
    ];
  }

  public function get($Id = '', $date = ''){
    parent::get($Id, $date);
  }
  
  public function setDefaultValue(){
    
  }

  public function create(){
    $this->form_validation->set_rules('Reg', 'Reg', 'required|max_length[4]');
		$this->form_validation->set_rules('CodIncTrib', 'CodIncTrib', 'required|integer');
		$this->form_validation->set_rules('VlRecTot', 'VlRecTot', 'required|decimal');
		$this->form_validation->set_rules('VlRecAtiv', 'VlRecAtiv', 'required|decimal');
		$this->form_validation->set_rules('VlRecDemaisAtiv', 'VlRecDemaisAtiv', 'required|decimal');
		$this->form_validation->set_rules('InfoCompl', 'InfoCompl', 'max_length[255]');
		
    parent::create();
  }
  
  public function update($Id){
    $this->form_validation->set_rules('Reg', 'Reg', 'required|max_length[4]');
		$this->form_validation->set_rules('CodIncTrib', 'CodIncTrib', 'required|integer');
		$this->form_validation->set_rules('VlRecTot', 'VlRecTot', 'required|decimal');
		$this->form_validation->set_rules('VlRecAtiv', 'VlRecAtiv', 'required|decimal');
		$this->form_validation->set_rules('VlRecDemaisAtiv', 'VlRecDemaisAtiv', 'required|decimal');
		$this->form_validation->set_rules('InfoCompl', 'InfoCompl', 'max_length[255]');
		
    parent::update($Id);
  }

  public function delete($Id){
    parent::delete($Id);
  }
}

/*
	<header class='page-title-bar'>
		<legend>Regime de Apuração da Contribuição Previdenciária Sobre a Receita Bruta</legend>
	</header>
	<div class='page-section'>
		<div class='section-block'>
			<div class='card' id='floating-label'>
				<div class='card-body'>
					<?= form_open(base_url('regs0145efdc/')) ?>
						<fieldset>
							<input type='hidden' name='Id' id='Id'>
							<div class='form-group'>
								<label for='Reg'>Registro</label>
								<input type='text' name='Reg' id='Reg' class='form-control' placeholder='Registro' required>
							</div>
							<div class='form-group'>
								<label for='CodIncTrib'>Código Incidência Tributária</label>
								<input type='number' name='CodIncTrib' id='CodIncTrib' class='form-control' placeholder='Código Incidência Tributária' required>
							</div>
							<div class='form-group'>
								<label for='VlRecTot'>Valor da Receita Bruta Total</label>
								<input type='' name='VlRecTot' id='VlRecTot' class='form-control' placeholder='Valor da Receita Bruta Total' required>
							</div>
							<div class='form-group'>
								<label for='VlRecAtiv'>Valor da Receita Bruta da Atividade</label>
								<input type='' name='VlRecAtiv' id='VlRecAtiv' class='form-control' placeholder='Valor da Receita Bruta da Atividade' required>
							</div>
							<div class='form-group'>
								<label for='VlRecDemaisAtiv'>Valor da Receita Bruta das demais Atividade</label>
								<input type='' name='VlRecDemaisAtiv' id='VlRecDemaisAtiv' class='form-control' placeholder='Valor da Receita Bruta das demais Atividade' required>
							</div>
							<div class='form-group'>
								<label for='InfoCompl'>Informação complementar</label>
								<input type='text' name='InfoCompl' id='InfoCompl' class='form-control' placeholder='Informação complementar' >
							</div>
							<div class='form-actions'>
								<button class='btn btn-primary mr-auto' type='submit'>Salvar</button>
								<button class='btn btn-secondary ml-auto' type='submit'>Cancelar</button>
							</div>
					</fieldset>
					<?= form_close() ?>
				</div>
			</div>
		</div>
	</div>
*/

