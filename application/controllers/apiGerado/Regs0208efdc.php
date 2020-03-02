<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Regs0208efdc extends MY_Controller {

  public function  __construct() {
    parent::__construct();
    $this->table = 'regs0208efdc';
    $this->nameId = 'Id';
  }

  public function get($Id = '', $date = ''){
    parent::get($Id, $date);
  }
  
  public function setDefaultValue(){
    $_POST['Reg'] = '0208';
  }

  public function create(){
    $this->form_validation->set_rules('Reg', 'Reg', 'required');
		$this->form_validation->set_rules('CodTabIncidencia', 'CodTabIncidencia', 'required');
		$this->form_validation->set_rules('CodGrupo', 'CodGrupo', 'required');
		$this->form_validation->set_rules('MarcaComercial', 'MarcaComercial', 'required');
		
    parent::create();
  }
  
  public function update($Id){
    $this->form_validation->set_rules('Reg', 'Reg', 'required');
		$this->form_validation->set_rules('CodTabIncidencia', 'CodTabIncidencia', 'required');
		$this->form_validation->set_rules('CodGrupo', 'CodGrupo', 'required');
		$this->form_validation->set_rules('MarcaComercial', 'MarcaComercial', 'required');
		
    parent::update($Id);
  }

  public function delete($Id){
    parent::delete($Id);
  }
}parent::update($Id);
  }

  public function delete($Id){
    parent::delete($Id);
  }
}