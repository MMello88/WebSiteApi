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
    $_POST['Reg'] = $_POST['Reg'] == null ? '0208' : $_POST['Reg'];
		
  }

  public function create(){
    $this->form_validation->set_rules('Reg', 'Reg', 'required|max_length[4]');
		$this->form_validation->set_rules('CodTabIncidencia', 'CodTabIncidencia', 'required|integer');
		$this->form_validation->set_rules('CodGrupo', 'CodGrupo', 'required|max_length[2]');
		$this->form_validation->set_rules('MarcaComercial', 'MarcaComercial', 'required|max_length[255]');
		
    parent::create();
  }
  
  public function update($Id){
    $this->form_validation->set_rules('Reg', 'Reg', 'required|max_length[4]');
		$this->form_validation->set_rules('CodTabIncidencia', 'CodTabIncidencia', 'required|integer');
		$this->form_validation->set_rules('CodGrupo', 'CodGrupo', 'required|max_length[2]');
		$this->form_validation->set_rules('MarcaComercial', 'MarcaComercial', 'required|max_length[255]');
		
    parent::update($Id);
  }

  public function delete($Id){
    parent::delete($Id);
  }
}