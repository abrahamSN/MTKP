<?php
class Wilujeung_sumping extends CI_Controller{
    //put your code here
    public function __construct() {
        parent::__construct();
		$this->atos_tiasa_leubeut();
    }
    
    
	public function atos_tiasa_leubeut(){
		if(!$this->session->userdata('atos_tiasa_leubeut')){
			redirect('loginapp');
		}
    }
	
	
	public function index() {
	
	
	
	$data["test"]="";
	$this->template->load('rorompok','tenjo',$data);
		
		
    }
	
	
	
	
	
	
	
	
	
}