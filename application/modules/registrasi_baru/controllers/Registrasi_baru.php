<?php
class Registrasi_baru extends CI_Controller{
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
<<<<<<< HEAD
	$data["test"]="";
	$this->template->load('rorompok','v_tambah',$data);		
    }
	
	
	
	public function view_kabkot()
	{
		$id=$this->uri->segment(3);
		$data['id']=$id;
		$this->load->view('v_kabkot',$data);
		
	}
	
	public function view_kec()
	{
		
		$kode_kabkot=$this->uri->segment(3);
		$data['kode_kabkot']=$kode_kabkot;		
		$this->load->view('v_kec',$data);
		
	}
   
   public function view_desa()
	{
		$kode_kec=$this->uri->segment(3);
		$data['kode_kec']=$kode_kec;
		$this->load->view('v_desa',$data);
		
	}
	
	public function view_kabkot1()
	{
		$id=$this->uri->segment(3);
		$data['id']=$id;
		$this->load->view('v_kabkot1',$data);
		
	}
	
	public function view_kec1()
	{
		
		$kode_kabkot=$this->uri->segment(3);
		$data['kode_kabkot']=$kode_kabkot;		
		$this->load->view('v_kec1',$data);
		
	}
   
   public function view_desa1()
	{
		$kode_kec=$this->uri->segment(3);
		$data['kode_kec']=$kode_kec;
		$this->load->view('v_desa1',$data);
		
	}
	
	   public function view_kompetensi()
	{
		$kode_profesi=$this->uri->segment(3);
		$data['kode_profesi']=$kode_profesi;
		$this->load->view('v_kompetensi',$data);
		
	}
	
		   public function view_kompetensi_sub()
	{
		$kode_kompetensi=$this->uri->segment(3);
		$data['kode_kompetensi']=$kode_kompetensi;
		$this->load->view('v_kompetensi_sub',$data);
		
	}
	
	public function view_universitas()
	{
		$kode_negara=$this->uri->segment(3);
		$data['kode_negara']=$kode_negara;
		$this->load->view('v_universitas',$data);
		//
		
	}
	
	
}
=======



	$data["test"]="";
	$this->template->load('rorompok','v_tambah',$data);


    }









}
>>>>>>> b3a3bfd46d8bb1e787e4282599f6c1ded122bdb0
