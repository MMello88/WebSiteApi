<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Regs0111efdc extends MY_Controller {

  public function  __construct() {
    parent::__construct();
    $this->table = 'regs0111efdc';
    $this->nameId = '0111_Id';
    $this->usersId = '';
    $this->joins = [
    ];
  }

  public function get($Id = '', $date = ''){
    parent::get($Id, $date);
  }

  public function setDefaultValue(){
    $_POST['0111_Reg'] = !isset($_POST['0111_Reg']) ? '0111' : $_POST['0111_Reg'];
		
  }

  public function create(){
    $this->form_validation->set_rules('0111_Reg', '0111_Reg', 'required|max_length[4]');
		$this->form_validation->set_rules('0111_RecBruNCumTribMI', '0111_RecBruNCumTribMI', 'required|integer');
		$this->form_validation->set_rules('0111_RecBruNCumNaoTribMI', '0111_RecBruNCumNaoTribMI', 'required|integer');
		$this->form_validation->set_rules('0111_RecBruNCumExp', '0111_RecBruNCumExp', 'required|integer');
		$this->form_validation->set_rules('0111_RecBruNCum', '0111_RecBruNCum', 'required|integer');
		$this->form_validation->set_rules('0111_RecBruNCumTotal', '0111_RecBruNCumTotal', 'required|integer');
		
    parent::create();
  }

  public function update($Id){
    $this->form_validation->set_rules('0111_Reg', '0111_Reg', 'required|max_length[4]');
		$this->form_validation->set_rules('0111_RecBruNCumTribMI', '0111_RecBruNCumTribMI', 'required|integer');
		$this->form_validation->set_rules('0111_RecBruNCumNaoTribMI', '0111_RecBruNCumNaoTribMI', 'required|integer');
		$this->form_validation->set_rules('0111_RecBruNCumExp', '0111_RecBruNCumExp', 'required|integer');
		$this->form_validation->set_rules('0111_RecBruNCum', '0111_RecBruNCum', 'required|integer');
		$this->form_validation->set_rules('0111_RecBruNCumTotal', '0111_RecBruNCumTotal', 'required|integer');
		
    parent::update($Id);
  }

  public function delete($Id){
    parent::delete($Id);
  }
}
