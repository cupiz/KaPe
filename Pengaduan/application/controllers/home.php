<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

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
	public function __construct()
	{
		parent::__construct();
		//load model
				$this->load->helper('url');
                $this->load->helper('form');
	}
	public function index()
	{
		$this->load->library('botdetect/BotDetectCaptcha', array( 'captchaConfig' => 'ExampleCaptcha' ));
		$datajudul['captchaHtml'] = $this->botdetectcaptcha->Html();
		
		$this->load->model('m_aspirasi');
		$data['tampilpengaduan'] = $this->m_aspirasi->tampilpengaduan(8);
		
		$datajudul['judul'] = 'Beranda';

		$this->load->view('v_header',$datajudul);
		$this->load->view('v_index',$data);
		$this->load->view('v_footer');
	}
	
	public function ajukan()
	{
		$this->load->library('botdetect/BotDetectCaptcha', array( 'captchaConfig' => 'ExampleCaptcha' ));
		$datajudul['captchaHtml'] = $this->botdetectcaptcha->Html();

		$datajudul['judul'] = 'Ajukan';
		$this->load->view('v_header',$datajudul);
		$this->load->view('v_noajukan');
		$this->load->view('v_footer');	
	}
	public function panduan()
	{
		$this->load->library('botdetect/BotDetectCaptcha', array( 'captchaConfig' => 'ExampleCaptcha' ));
		$datajudul['captchaHtml'] = $this->botdetectcaptcha->Html();
		
		$datajudul['judul'] = 'Panduan';
		$this->load->view('v_header',$datajudul);
		$this->load->view('v_panduan');
		$this->load->view('v_footer');
	}
	public function pengaduan()
	{
		$this->load->library('botdetect/BotDetectCaptcha', array( 'captchaConfig' => 'ExampleCaptcha' ));
		$datajudul['captchaHtml'] = $this->botdetectcaptcha->Html();
		
		$datajudul['judul'] = 'Pengaduan';

		$this->load->model('m_aspirasi');
		$data['tampilpengaduan'] = $this->m_aspirasi->tampilpengaduan(9);


		$this->load->view('v_header',$datajudul);
		$this->load->view('v_aduanlist',$data);
		$this->load->view('v_footer');
	}
	public function aduan($no_pengaduan)
	{
		$this->load->library('botdetect/BotDetectCaptcha', array( 'captchaConfig' => 'ExampleCaptcha' ));
		$datajudul['captchaHtml'] = $this->botdetectcaptcha->Html();
		
		$this->load->model('m_aspirasi');
		$data['aduan'] = $this->m_aspirasi->tampiladuan($no_pengaduan);
		$data['tanggap'] = $this->m_aspirasi->tampiltanggapan($no_pengaduan);
		

		$datajudul['judul'] = 'Aduan';
		$this->load->view('v_header',$datajudul);
		$this->load->view('v_aduan',$data);
		$this->load->view('v_footer');
	}
	public function lihat()
	{
		$this->load->library('botdetect/BotDetectCaptcha', array( 'captchaConfig' => 'ExampleCaptcha' ));
		$datajudul['captchaHtml'] = $this->botdetectcaptcha->Html();
		
		$datajudul['judul'] = 'Lihat Pengaduan';
		$this->load->view('v_header',$datajudul);
		$this->load->view('v_lihat');
		$this->load->view('v_footer');
	}

	public function notfound()
	{
		$this->load->library('botdetect/BotDetectCaptcha', array( 'captchaConfig' => 'ExampleCaptcha' ));
		$datajudul['captchaHtml'] = $this->botdetectcaptcha->Html();
		
		$datajudul['judul'] = '404 Not Found';
		$this->load->view('v_header',$datajudul);
		$this->load->view('v_404');
		$this->load->view('v_footer');
	}







	public function tgl_indo($tanggal){
		$bulan = array (
				1 =>   'Januari',
			'Februari',
			'Maret',
			'April',
			'Mei',
			'Juni',
			'Juli',
			'Agustus',
			'September',
			'Oktober',
			'November',
			'Desember'
		);
		$pecahkan = explode('-', $tanggal);
		
		// variabel pecahkan 0 = tanggal
		// variabel pecahkan 1 = bulan
		// variabel pecahkan 2 = tahun
	 
		return $pecahkan[2] . ' ' . $bulan[ (int)$pecahkan[1] ] . ' ' . $pecahkan[0];
	}


	
	public function ceklogin()
	{
		
		$email = $this->input->post('email');
		$password = md5($this->input->post('password'));
		$password1 = $this->input->post('password');

		if ($email=='admin' && $password1=='admin') {
			redirect('admin');
		}else{

			$this->load->model('m_aspirasi');

			$data = $this->m_aspirasi->ceklogin($email, $password);
				
			if($data==NULL){
				$this->session->set_flashdata('gagallogin','yes');
				redirect('home/index');
			}else{
				$no_pengguna = $this->m_aspirasi->ceknomorpengguna($email);
				$nama_pengguna = $this->m_aspirasi->ceknamapengguna($no_pengguna);
				$status_verifikasi = $this->m_aspirasi->cekstatuspengguna($no_pengguna);
				$this->session->set_userdata('no_pengguna',$no_pengguna);
				$this->session->set_userdata('nama_pengguna',$nama_pengguna);
				$this->session->set_userdata('email_pengguna',$email);
				$this->session->set_userdata('status_verifikasi',$status_verifikasi);
				$this->session->set_flashdata('login','yes');
				redirect('pengguna');
			}
			}
	}

	public function keluar()
	{
		$this->session->sess_destroy();
	    redirect('home');  
	}

	public function cari()
	{
		
		
		$notiket = $this->input->post('notiket');
		
		$this->load->model('m_aspirasi');
		$this->load->library('botdetect/BotDetectCaptcha', array( 'captchaConfig' => 'ExampleCaptcha' ));
		$data['captchaHtml'] = $this->botdetectcaptcha->Html();
		$data['aduan'] = $this->m_aspirasi->tampiladuan($notiket);
		$data['tanggap'] = $this->m_aspirasi->tampiltanggapan($notiket);
		

		$datajudul['judul'] = 'Aduan';

		$this->load->view('v_header',$datajudul);
		$this->load->view('v_aduan',$data);
		$this->load->view('v_footer');
			
			
	}


	public function prosesdaftar()
	{
		    $this->load->model('m_aspirasi');
		
			$aktivasi = md5($this->input->post('email_pengguna'));
			$nik_pengguna = $this->input->post('nik_pengguna');
			$nama_pengguna = $this->input->post('nama_pengguna');
			$alamat_pengguna ="";
			$notelp_pengguna = $this->input->post('notelp_pengguna');
			$foto_pengguna = "";
			$email_pengguna = $this->input->post('email_pengguna');
			$password_pengguna=md5($this->input->post('password_pengguna'));
			$foto_verif_pengguna="";
			
			$cekemailada = $this->m_aspirasi->cekemailada($email_pengguna);
			if ($cekemailada != "") {
				$this->session->set_flashdata('emailsudahada','yes');
		    	redirect('home');
		    	exit();
			}
			$ceknikada = $this->m_aspirasi->ceknikada($nik_pengguna);
			if ($ceknikada != "") {
				$this->session->set_flashdata('emailsudahada','yes');
		    	redirect('home');
		    	exit();
			}

			$data = array($nik_pengguna,$nama_pengguna,$alamat_pengguna,$notelp_pengguna,$foto_pengguna,$email_pengguna,$password_pengguna,$foto_verif_pengguna,$aktivasi);
			$this->m_aspirasi->simpanpendaftar($data);
			
			$this->kirimemail($email_pengguna,$nik_pengguna,$nama_pengguna,$aktivasi);
			$this->session->set_flashdata('daftarberhasil','yes');		
			redirect('home');
		
		

		
	}
	public function kirimemail($email_pengguna,$nik_pengguna,$nama_pengguna,$aktivasi)
    {
        // Konfigurasi email.
        
        $config = [
               'useragent' => 'CodeIgniter',
               'protocol'  => 'smtp',
               'mailpath'  => '/usr/sbin/sendmail',
               'smtp_host' => 'smtp.gmail.com',
               'smtp_user' => 'purbalinggadevinspek@gmail.com',   // Ganti dengan email gmail Anda.
               'smtp_pass' => 'kosong31',             // Password gmail Anda.
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
		        "Terimakasih sudah mendaftar, " . $nama_pengguna . "! <br/>
		        <br/>
		        Akun anda berhasil dibuat.  <br/>
		        Berikut adalah detail akun anda. <br/>
		        ------------------------------------------------- <br/>
		        NIK (KTP): " . $nik_pengguna . " <br/>
		        Nama: " . $nama_pengguna . " <br/>
		        Email: " . $email_pengguna . " <br/>
		        ------------------------------------------------- <br/>
		                        <br/>
		        Silahkan klik link berikut untuk mengaktifkan akun anda: <br/>
		            
		        " . base_url() . "home/verify/". $aktivasi ."";
				/*-----------email body ends-----------*/		    
 
        // Load library email dan konfigurasinya.
        $this->load->library('email', $config);
 
        // Pengirim dan penerima email.
        $this->email->from('purbalinggadevinspek@gmail.com', 'Aspirasi Purbalingga');    // Email dan nama pegirim.
        $this->email->to($email_pengguna);                       // Penerima email.
 
 
        // Subject email.
        $this->email->subject('Verifikasi Email Aspirasi Purbalingga');
 
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

    public function verify($verify){  
	  $this->load->model('m_aspirasi');

	  $email = $this->m_aspirasi->cekemail($verify);
	  $noRecords = $this->m_aspirasi->verify($verify);  
	  if ($noRecords > 0){
	  	  $this->session->set_flashdata('emailverifikasi','yes');
	      redirect('home');
	  }else{
	   	  $this->session->set_flashdata('emailsudahada','yes');
	      redirect('home');
	  }
	  
	}
	








}
