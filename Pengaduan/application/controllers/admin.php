<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class admin extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	function __construct(){
		parent::__construct();
		  $this->load->helper(array('form', 'url'));
	}
	public function index()
	{

		
		$this->load->model('m_admin');
			

		$datajudul['judul'] = 'Petugas Login';
		$this->load->view('v_header',$datajudul);
		$this->load->view('v_adminlogin');
		$this->load->view('v_footer');
	}
	public function beranda()
	{

		//LOAD MEMBER
		$no_petugas = $this->session->userdata('no_petugas');
		if ($no_petugas=='') {
			redirect('admin');
		}

		//LOAD MEMBER
		$this->load->model('m_admin');

		

		$data['jmlpengguna'] = $this->m_admin->jmlpengguna();
		$data['jmlproses'] = $this->m_admin->jmlproses();	
		$data['jmltindaklanjut'] = $this->m_admin->jmltindaklanjut();
		$data['jmlselesai'] = $this->m_admin->jmlselesai();
			

		$datajudul['judul'] = 'Dashboard';
		$this->load->view('v_headeradmin',$datajudul);
		$this->load->view('v_admin',$data);
		$this->load->view('v_footeradmin');

	}
	public function ceklogin()
	{
		
		$email_petugas = $this->input->post('email_petugas');
		$password = $this->input->post('password');

			$this->load->model('m_admin');

			$data = $this->m_admin->cekloginpetugas($email_petugas, $password);

			
			if($data==0){
				$this->session->set_flashdata('gagallogin','yes');
				redirect('admin/index');
			}else{
				$no_petugas= $this->m_admin->ceknomorpetugas($email_petugas);
				$nama_petugas = $this->m_admin->ceknamapetugas($no_petugas);
				$this->session->set_userdata('no_petugas',$no_petugas);
				$this->session->set_userdata('nama_petugas',$nama_petugas);
				$this->session->set_flashdata('login','yes');
				redirect('admin/beranda');
			}
	}


	public function anggota()
	{
		$no_petugas = $this->session->userdata('no_petugas');
		if ($no_petugas=='') {
			redirect('admin');
		}

		//LOAD MEMBER

		$this->load->model('m_aspirasi');
		$data['anggota'] = $this->m_aspirasi->tampilanggota();

		$datajudul['judul'] = 'Anggota';
		$this->load->view('v_headeradmin',$datajudul);
		$this->load->view('v_adminanggota',$data);
		$this->load->view('v_footeradmin');
	}
	public function opd()
	{
		$no_petugas = $this->session->userdata('no_petugas');
		if ($no_petugas=='') {
			redirect('admin');
		}
		//LOAD MEMBER
		$this->load->model('m_aspirasi');
		$data['opd'] = $this->m_aspirasi->tampilopd();

		$datajudul['judul'] = 'OPD';
		$this->load->view('v_headeradmin',$datajudul);
		$this->load->view('v_adminopd',$data);
		$this->load->view('v_footeradmin');
	}
	public function petugas()
	{
		$no_petugas = $this->session->userdata('no_petugas');
		if ($no_petugas=='') {
			redirect('admin');
		}
		//LOAD MEMBER
		$this->load->model('m_aspirasi');
		$data['petugas'] = $this->m_aspirasi->tampilpetugas();

		$datajudul['judul'] = 'Petugas';
		$this->load->view('v_headeradmin',$datajudul);
		$this->load->view('v_adminpetugas',$data);
		$this->load->view('v_footeradmin');
	}
	public function tambahopd()
	{
		$no_petugas = $this->session->userdata('no_petugas');
		if ($no_petugas=='') {
			redirect('admin');
		}
		//LOAD MEMBER
		$this->load->model('m_aspirasi');
		$data['opd'] = $this->m_aspirasi->tampilopd();

		$datajudul['judul'] = 'OPD';
		$this->load->view('v_headeradmin',$datajudul);
		$this->load->view('v_adminopdform',$data);
		$this->load->view('v_footeradmin');
	}
	public function tambahpetugas()
	{
		$no_petugas = $this->session->userdata('no_petugas');
		if ($no_petugas=='') {
			redirect('admin');
		}
		//LOAD MEMBER
		$this->load->model('m_aspirasi');
		$data['petugas'] = $this->m_aspirasi->tampilopd();

		$datajudul['judul'] = 'Petugas';
		$this->load->view('v_headeradmin',$datajudul);
		$this->load->view('v_adminanggotaform',$data);
		$this->load->view('v_footeradmin');
	}
	public function ubahopd($no_opd)
	{
		$no_petugas = $this->session->userdata('no_petugas');
		if ($no_petugas=='') {
			redirect('admin');
		}
		//LOAD MEMBER
		$this->load->model('m_aspirasi');
		$data['opd'] = $this->m_aspirasi->tampilopd1($no_opd);

		$datajudul['judul'] = 'OPD';
		$this->load->view('v_headeradmin',$datajudul);
		$this->load->view('v_adminopdformubah',$data);
		$this->load->view('v_footeradmin');
	}
	public function tambahopdquery()
			{		
				
				$data = array(
					$this->input->post('nama_opd'),
					$this->input->post('alamat_opd'),
					$this->input->post('email_opd'),
					$this->input->post('nohp_opd')					
				);
				
				$this->load->model('m_aspirasi');

				$this->m_aspirasi->simpanopd($data);
				redirect('admin/opd');
			}
	public function tambahpetugasquery()
			{		
				
				$data = array(
					$this->input->post('nama_petugas'),
					$this->input->post('email_petugas'),
					$this->input->post('password_petugas')

					
				);
				
				$this->load->model('m_aspirasi');

				$this->m_aspirasi->simpanpetugas($data);
				redirect('admin/petugas');
			}
	public function ubahopdquery()
			{		
				
				$no_opd= $this->input->post('no_opd');
					
				$this->load->model('m_aspirasi');

				$this->m_aspirasi->updateopd($no_opd);
				redirect('admin/opd');
			}
	public function hapusopd($no_opd)
	{
			$this->load->model('m_aspirasi');
			$this->m_aspirasi->delopd($no_opd);
			redirect('admin/opd');
	}
	public function hapuspengguna($no_pengguna)
	{
			$this->load->model('m_aspirasi');
			$this->m_aspirasi->delpengguna($no_pengguna);
			redirect('admin/anggota');
	}
	public function hapuspengaduan($no_pengaduan)
	{
			$this->load->model('m_aspirasi');
			$this->m_aspirasi->delpengaduan($no_pengaduan);
			redirect('admin/');
	}
	public function proses()
	{
		$no_petugas = $this->session->userdata('no_petugas');
		if ($no_petugas=='') {
			redirect('admin');
		}
		//LOAD MEMBER
		$this->load->model('m_aspirasi');
		$data['pengaduan'] = $this->m_aspirasi->tampilproses();


		$datajudul['judul'] = 'Proses';
		$this->load->view('v_headeradmin',$datajudul);
		$this->load->view('v_adminproses',$data);
		$this->load->view('v_footeradmin');
	}
	public function tindaklanjuti()
	{
		$no_petugas = $this->session->userdata('no_petugas');
		if ($no_petugas=='') {
			redirect('admin');
		}
		//LOAD MEMBER
		$this->load->model('m_aspirasi');
		$data['pengaduan'] = $this->m_aspirasi->tampiltindak();

		$datajudul['judul'] = 'Tindak Lanjuti';
		$this->load->view('v_headeradmin',$datajudul);
		$this->load->view('v_admintindak',$data);
		$this->load->view('v_footeradmin');
	}
	public function selesai()
	{
		$no_petugas = $this->session->userdata('no_petugas');
		if ($no_petugas=='') {
			redirect('admin');
		}
		$no_pengaduan = $this->session->userdata('no_pengaduan');
		//LOAD MEMBER
		$this->load->model('m_aspirasi');
		$data['pendingtanggap'] = $this->m_aspirasi->tampilpendingtanggap();
		$data['pengaduan'] = $this->m_aspirasi->tampilselesai();
		$data['tanggap'] = $this->m_aspirasi->tampiltanggap();



		$datajudul['judul'] = 'Selesai';
		$this->load->view('v_headeradmin',$datajudul);
		$this->load->view('v_adminselesai',$data);
		$this->load->view('v_footeradmin');
	}
	public function tanggapan($no_pengaduan)
	{
		$no_petugas = $this->session->userdata('no_petugas');
		if ($no_petugas=='') {
			redirect('admin');
		}
		$this->load->model('m_aspirasi');
		$data['aduan'] = $this->m_aspirasi->tampiladuan($no_pengaduan);
		$data['tanggap'] = $this->m_aspirasi->tampiltanggapan($no_pengaduan);
		

		$datajudul['judul'] = 'Tanggapan';
		$this->load->view('v_headeradmin',$datajudul);
		$this->load->view('v_admintanggap',$data);
		$this->load->view('v_footeradmin');
	}
	public function pesantanggap()
	{		
			$no_petugas = $this->session->userdata('no_petugas');
		if ($no_petugas=='') {
			redirect('admin');
		}
		    $this->load->model('m_aspirasi');
			$no_pengaduan = $this->input->post('nopengaduan');
			
			$isi_tanggap =$this->input->post('pesantanggapan');


			$data = array($no_pengaduan,$isi_tanggap);
			$this->m_aspirasi->simpantanggap($data);
				
			redirect('admin/selesai');

		
	}
	public function kirim()
    {		
    		$this->load->model('m_aspirasi');
			$email_opd=$this->input->post('email_opd');
			$nama_opd=$this->input->post('nama_opd');
			$pesan_pengaduan=$this->input->post('pesan_pengaduan');
			$no_pengaduan=$this->input->post('no_pengaduan');    		

    		$this->kirimemail($email_opd,$nama_opd,$pesan_pengaduan,$no_pengaduan);
			$this->session->set_flashdata('daftarberhasil','yes');		
			redirect('admin/tindaklanjuti');
    }
	public function kirimemail($email_opd,$nama_opd,$pesan_pengaduan,$no_pengaduan)
    {
        // Konfigurasi email.
        
        $config = [
               'useragent' => 'CodeIgniter',
               'protocol'  => 'smtp',
               'mailpath'  => '/usr/sbin/sendmail',
               'smtp_host' => 'smtp.gmail.com',
               'smtp_user' => 'purbalinggadevinspek@gmail.com',   // Ganti dengan email gmail Anda.
               'smtp_pass' => 'pbgkosong31',             // Password gmail Anda.
               'smtp_port' => 587,
               'smtp_keepalive' => TRUE,
               'smtp_crypto' => 'tls',
               'wordwrap'  => TRUE,
               'wrapchars' => 80,
               'mailtype'  => 'html',
               'charset'   => 'utf-8',
               'validate'  => TRUE,
               'crlf'      => "\r\n",
               'newline'   => "\r\n",
           ];

        $message= /*-----------email body starts-----------*/
		        "

		        Terdapat pesan pengaduan mengenai opd, " . $nama_opd . "! <br/>
		        <br/>
		        Mohon segera di tanggapi.  <br/>
		        Berikut adalah isi pengaduan. <br/>
		        ------------------------------------------------- <br/>
		        Isi Pesan : " . $pesan_pengaduan . " <br/>
		        ------------------------------------------------- <br/>
		                        <br/>
		        Atau silahkan klik link berikut untuk melihat lebih lengkapnya: <br/>
		            
		        " . base_url() . "home/aduan/". $no_pengaduan ."";
				/*-----------email body ends-----------*/		    
 
        // Load library email dan konfigurasinya.
        $this->load->library('email', $config);
 
        // Pengirim dan penerima email.
        $this->email->from('purbalinggadevinspek@gmail.com', 'Aspirasi Purbalingga');    // Email dan nama pegirim.
        $this->email->to($email_opd);                       // Penerima email.
 
 
        // Subject email.
        $this->email->subject('Pengaduan Aspirasi Purbalingga');
 
        // Isi email. Bisa dengan format html.
        $this->email->message($message);
 
        if ($this->email->send())
        {
            echo 'Sukses! email berhasil dikirim.';
        }
        else
        {
            echo 'Error! email tidak dapat dikirim.';
        }
    }


	public function konfirmasipengaduan($no_pengaduan)
	{
			$this->load->model('m_aspirasi');
			$this->m_aspirasi->konfirmasipengaduan($no_pengaduan);
			redirect('admin/proses/');
	}


	public function profil()
	{
		$no_petugas = $this->session->userdata('no_petugas');
		if ($no_petugas=='') {
			redirect('admin');
		}

		$datajudul['judul'] = 'Profil';
		$this->load->view('v_headeradmin',$datajudul);
		$this->load->view('v_adminprofil');
		$this->load->view('v_footeradmin');
	}

	public function keluar()
	{
		$this->session->sess_destroy();
	    redirect('home');  
	}
}