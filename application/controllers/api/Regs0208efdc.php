<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Regs0208efdc extends MY_Controller {

  public function  __construct() {
    parent::__construct();
    $this->table = 'regs0208efdc';
    $this->nameId = '0208_Id';
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
    $this->form_validation->set_rules('0208_Reg', '0208_Reg', 'required|max_length[4]');
		$this->form_validation->set_rules('0208_CodTabIncidencia', '0208_CodTabIncidencia', 'required|in_list[01 – Tabela I,02 – Tabela II,03 – Tabela III,04 – Tabela IV,05 – Tabela V,06 – Tabela VI,07 – Tabela VII,08– Tabela VIII,09 – Tabela IX,10 – Tabela X,11 – Tabela XI,12 – Tabela XII,13 – Tabela XIII]');
		$this->form_validation->set_rules('0208_CodGrupo', '0208_CodGrupo', 'required|max_length[2]');
		$this->form_validation->set_rules('0208_MarcaComercial', '0208_MarcaComercial', 'required|max_length[255]');
		
    parent::create();
  }

  public function update($Id){
    $this->form_validation->set_rules('0208_Reg', '0208_Reg', 'required|max_length[4]');
		$this->form_validation->set_rules('0208_CodTabIncidencia', '0208_CodTabIncidencia', 'required|in_list[01 – Tabela I,02 – Tabela II,03 – Tabela III,04 – Tabela IV,05 – Tabela V,06 – Tabela VI,07 – Tabela VII,08– Tabela VIII,09 – Tabela IX,10 – Tabela X,11 – Tabela XI,12 – Tabela XII,13 – Tabela XIII]');
		$this->form_validation->set_rules('0208_CodGrupo', '0208_CodGrupo', 'required|max_length[2]');
		$this->form_validation->set_rules('0208_MarcaComercial', '0208_MarcaComercial', 'required|max_length[255]');
		
    parent::update($Id);
  }

  public function delete($Id){
    parent::delete($Id);
  }
}
