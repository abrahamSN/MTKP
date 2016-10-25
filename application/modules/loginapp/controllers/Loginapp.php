<?php
class Loginapp extends CI_Controller{

    public function __construct() {
        parent::__construct();
    }
    
    public function index() {
	
	$original_string = array_merge(range(0,9), range('a','z'), range('A', 'Z'));
    $original_string = implode("", $original_string);
    $captcha = substr(str_shuffle($original_string), 0, 4);
	
	$vals = array(
				'word' => strtoupper($captcha),
				'img_path'	 => './captcha/',
                'img_url'	 => base_url().'captcha/',
				'font_path' => base_url() . 'system/fonts/arial.ttf',
                'img_width'	 => '120',
                'img_height' => 30,
                'border' => 1, 
                'expiration' => 7200
    );
 
    $cap = create_captcha($vals);
	$data['image'] = $cap['image'];
    $data['word'] = $cap['word'];
 
    $this->session->set_userdata('mycaptcha', $cap['word']);
	
	$this->load->view('login',$data);
        
    }
	
	public function leubeut() {
	
	
		if ( strtoupper($this->input->post('secutity_code')) ==  strtoupper($this->session->userdata('mycaptcha'))) {
		
		
			$nama_pengguna = $this->input->post('nama_pengguna');
			$kunci_masuk = $this->input->post('kunci_masuk');
		
			$this->form_validation->set_rules('nama_pengguna', 'Username', 'required');
            $this->form_validation->set_rules('kunci_masuk', 'Password', 'required',
                        array('required' => 'You must provide a %s.')
            );
			
			if ($this->form_validation->run() == FALSE)
                {
						$original_string = array_merge(range(0,9), range('a','z'), range('A', 'Z'));
						$original_string = implode("", $original_string);
						$captcha = substr(str_shuffle($original_string), 0, 4);
						
						$vals = array(
									'word' => strtoupper($captcha),
									'img_path'	 => './captcha/',
									'img_url'	 => base_url().'captcha/',
									'font_path' => base_url() . 'system/fonts/arial.ttf',
									'img_width'	 => '120',
									'img_height' => 30,
									'border' => 1, 
									'expiration' => 7200
						);
					 
						$cap = create_captcha($vals);
						$data['image'] = $cap['image'];
						$data['word'] = $cap['word'];
					 
						$this->session->set_userdata('mycaptcha', $cap['word']);
						
						$this->load->view('login',$data);
                
				} else {
                        
						
						// ceking
						
						
						$sqlcek="SELECT * FROM ref_user WHERE username='".$nama_pengguna."' AND password='".sha1(md5($kunci_masuk)) ."'";
						$querycek = $this->db->query($sqlcek);
						$ceking=$querycek->num_rows();
						
							if ($ceking==0) {
							
								$data['pesan'] = "Username / Password Salah !!!";
								$original_string = array_merge(range(0,9), range('a','z'), range('A', 'Z'));
								$original_string = implode("", $original_string);
								$captcha = substr(str_shuffle($original_string), 0, 4);
								
								$vals = array(
											'word' => strtoupper($captcha),
											'img_path'	 => './captcha/',
											'img_url'	 => base_url().'captcha/',
											'font_path' => base_url() . 'system/fonts/arial.ttf',
											'img_width'	 => '120',
											'img_height' => 30,
											'border' => 1, 
											'expiration' => 7200
								);
							 
								$cap = create_captcha($vals);
								$data['image'] = $cap['image'];
								$data['word'] = $cap['word'];
							 
								$this->session->set_userdata('mycaptcha', $cap['word']);
								
								$this->load->view('login',$data);
							
							} else {
							
								
								$row = $querycek->row();
								
								
								/*$querythn = $this->db->query("select TAHUN from ref_tahun_aktif")->row();
								$thnaktif=$querythn->TAHUN;
								
								$querynamadesa = $this->db->query("select nama from ref_desa WHERE kode_prov='".$row->kode_prov."' 
								and kode_kabkot='".$row->kode_kabkot."'  and kode_kec='".$row->kode_kec."' and kode_desa='".$row->kode_desa."'  ")->row();
								
								echo 
								$namadesa=$querynamadesa->nama;
								*/
								
								$data = array(
								'sesi_id_pengguna' => $row->id,
								'sesi_nama_pengguna' => $row->username,
								'sesi_nama_lengkap' =>$row->nama,
								'sesi_tipe_pengguna'=>$row->id_role,
								
								'atos_tiasa_leubeut' => TRUE
								);
								$this->session->set_userdata($data);
								
								redirect('wilujeung_sumping');
								
							
							}
						
						
						
                }
            
			
			
		
		
		
		
		} else {
		
			$data['pesan'] = "Kode Keamanan Yang Anda Masukan Salah !!!";
			$original_string = array_merge(range(0,9), range('a','z'), range('A', 'Z'));
			$original_string = implode("", $original_string);
			$captcha = substr(str_shuffle($original_string), 0, 4);
			
			$vals = array(
						'word' => strtoupper($captcha),
						'img_path'	 => './captcha/',
						'img_url'	 => base_url().'captcha/',
						'font_path' => base_url() . 'system/fonts/arial.ttf',
						'img_width'	 => '120',
						'img_height' => 30,
						'border' => 1, 
						'expiration' => 7200
			);
		 
			$cap = create_captcha($vals);
			$data['image'] = $cap['image'];
			$data['word'] = $cap['word'];
		 
			$this->session->set_userdata('mycaptcha', $cap['word']);
			
			$this->load->view('login',$data);
		
		}
	
	
	
        
    }
	
	
	public function permios(){
		$this->session->sess_destroy();
		//$this->db->query("UPDATE tb_menu SET active='' ");
		
        redirect('loginapp');
	}
	
	
	
}