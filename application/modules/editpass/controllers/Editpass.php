<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Editpass extends CI_Controller{
//put your code here
    public function __construct() {
        parent::__construct();
		$this->atos_tiasa_leubeut();
    }
    
    
	public function atos_tiasa_leubeut(){
		if(!$this->session->userdata('atos_tiasa_leubeut')){
			redirect('loginsarpras');
		}
    }
	
	

	
	public function index() {
		
	
		
		$this->template->load('rorompok','v_editpass');
		
		
		
		
	}
	
	
	public function submit ()
	{
	
	 try 
	 {
		
				$kunci_masuk_lama = $this->input->post('kunci_masuk_lama');
				$kunci_masuk_baru = sha1(md5($this->input->post('kunci_masuk_baru')));
				$kunci_masuk_lama_enkripsi = sha1(md5($kunci_masuk_lama));
				
				
					$sql = "select  kunci_masuk from sis_pengguna  where nama_pengguna= '".$this->session->userdata('sesi_nama_pengguna')."'";
					//echo $sql ; exit;
					$row = $this->db->query($sql)->row_array();
					
					
					
					if ($row['kunci_masuk']==$kunci_masuk_lama_enkripsi) {
					
						$data=array(
						'kunci_masuk' => $kunci_masuk_baru
						);
									
						$this->db->where('nama_pengguna', $this->session->userdata('sesi_nama_pengguna'));
						$this->db->update('sis_pengguna', $data);
						
						echo "<script>alert('Password Anda Berhasil Diubah, Silahkan Login Menggunakan Password Baru Anda');window.location='".site_url('editpass/keluar')."';</script>"; 
					
					} else {
					
					
					// password lama salah
					echo "<script>alert('Password Lama Anda Salah');window.location='".site_url('editpass')."';</script>"; 
					//redirect('editpass');
					
					}
				
				
				 
				
						
						
						
						
			
		
	
	 } catch (Exception $e) {
            echo $e->getMessage() . "\r\n" . $e->getTraceAsString();
            $this->showError($e);
			$this->template->load('template_backend','v_editpass',$data);
     }
	
	}
	

	function keluar(){
		
		$this->session->sess_destroy();
        redirect('loginsarpras');
	}
	


	
	
	 
	
	
	
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
