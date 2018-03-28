<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class pengguna extends CI_Controller {

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
		$no_pengguna = $this->session->userdata('no_pengguna');
		if ($no_pengguna=='') {
			redirect('home/index');
		}
		$this->load->model('m_aspirasi');
		$datajudul['judul'] = 'Beranda';
		$data['tampilpengaduan'] = $this->m_aspirasi->tampilpengaduan(8);
		$status_verifikasi = $this->m_aspirasi->cekstatuspengguna($no_pengguna);
		$this->session->set_userdata('status_verifikasi',$status_verifikasi);

		$this->load->view('v_headerpengguna',$datajudul);
		$this->load->view('v_index',$data);
		$this->load->view('v_footer');
	}

	public function aduan($no_pengaduan)
	{
		$no_pengguna = $this->session->userdata('no_pengguna');
		if ($no_pengguna=='') {
			redirect('home/index');
		}
		
		$this->load->model('m_aspirasi');
		$data['aduan'] = $this->m_aspirasi->tampiladuan($no_pengaduan);
		$data['tanggap'] = $this->m_aspirasi->tampiltanggapan($no_pengaduan);
		

		$datajudul['judul'] = 'Aduan';
		$this->load->view('v_headerpengguna',$datajudul);
		$this->load->view('v_aduan',$data);
		$this->load->view('v_footer');
	}

	public function ajukan()
	{
		$no_pengguna = $this->session->userdata('no_pengguna');
		if ($no_pengguna=='') {
			redirect('home/index');
		}
		$this->load->model('m_aspirasi');

		$data['tampilakun'] = $this->m_aspirasi->tampilakun($no_pengguna);
		$data['opd'] = $this->m_aspirasi->tampilopd();
		
		$datajudul['judul'] = 'Ajukan';
		$this->load->view('v_headerpengguna',$datajudul);
		$this->load->view('v_ajukan',$data);
		$this->load->view('v_footer');	
	}

	public function ajukanaduan()
	{		

			$no_pengguna = $this->session->userdata('no_pengguna');
				if ($no_pengguna=='') {
					redirect('home/index');
				}

			// Foto
					$config['upload_path']="./assets/images";
					$config['allowed_types']="jpg|png|gif|jpeg|bmp";
					$this->load->library('upload',$config);
						if(!$this->upload->do_upload("foto")){
							echo "gagal UPLOAD";
							exit();
							
						}
					$file = $this->upload->data();
					
				$gambar_pengaduan=$file['file_name'];


		    $this->load->model('m_aspirasi');
			
			$no_pengaduan= mt_rand(100000, 999999);
			$no_opd = $this->input->post('opd');
			$tipe_pengaduan =$this->input->post('tipe');
			$tanggal_pengaduan = date('Y-m-d');
			
			$pesan_pengaduan = $this->input->post('pesan');

			$data = array($no_pengaduan,$no_opd,$no_pengguna,$tipe_pengaduan,$tanggal_pengaduan,$gambar_pengaduan,$pesan_pengaduan);
			$this->m_aspirasi->simpanajukan($data);
		
			$this->session->set_flashdata('daftarberhasil1','yes');		
			redirect('pengguna');
		
		

		
	}

	public function panduan()
	{
		$no_pengguna = $this->session->userdata('no_pengguna');
		if ($no_pengguna=='') {
			redirect('home/index');
		}
		$this->load->model('m_aspirasi');
	
		$datajudul['judul'] = 'Panduan';
		$this->load->view('v_headerpengguna',$datajudul);
		$this->load->view('v_panduan');
		$this->load->view('v_footer');
	}
	public function pengaduan()
	{
		$no_pengguna = $this->session->userdata('no_pengguna');
		if ($no_pengguna=='') {
			redirect('home/index');
		}
		$this->load->model('m_aspirasi');
		$data['tampilpengaduan'] = $this->m_aspirasi->tampilpengaduan(9);

		$datajudul['judul'] = 'Pengaduan';
		$this->load->view('v_headerpengguna',$datajudul);
		$this->load->view('v_aduanlist',$data);
		$this->load->view('v_footer');
	}
	
	public function ubah()
	{
		$no_pengguna = $this->session->userdata('no_pengguna');
		if ($no_pengguna=='') {
			redirect('home/index');
		}
		$this->load->model('m_aspirasi');
		$datajudul['judul'] = 'Ubah Profile';
		$data['tampilakun'] = $this->m_aspirasi->tampilakun($no_pengguna);

		$this->load->view('v_headerpengguna',$datajudul);
		$this->load->view('v_ubah',$data);
		$this->load->view('v_footer');
	}

	public function ubahpengguna(){
					$config['upload_path']="./assets/images";
					$config['allowed_types']="jpg|png|gif|jpeg|bmp";
					$this->load->library('upload',$config);
						if(!$this->upload->do_upload("foto")){
							echo "gagal UPLOAD";
							exit();
							
						}
					$file = $this->upload->data();
					
				$fotoupload=$file['file_name'];
				
				$no_pengguna = $this->session->userdata('no_pengguna');

				//aktifkan model
				$this->load->model('m_aspirasi');
				$this->m_aspirasi->updatepengguna($no_pengguna,$fotoupload);
				redirect('pengguna');
			}

	public function lihat()
	{
		$no_pengguna = $this->session->userdata('no_pengguna');
		if ($no_pengguna=='') {
			redirect('home/index');
		}
		$this->load->model('m_aspirasi');
		$datajudul['judul'] = 'Pengaduan Terkirim';
		$data['tampiltindak'] = $this->m_aspirasi->tampiltindak1($no_pengguna);
		$data['tampilselesai'] = $this->m_aspirasi->tampilselesai1($no_pengguna);

		$this->load->view('v_headerpengguna',$datajudul);
		$this->load->view('v_lihat',$data);
		$this->load->view('v_footer');
	}

	public function verifikasiakun()
	{
		$no_pengguna = $this->session->userdata('no_pengguna');
		if ($no_pengguna=='') {
			redirect('home/index');
		}
		$this->load->model('m_aspirasi');
		$datajudul['judul'] = 'Verifikasi Akun';
		$data['tampilakun'] = $this->m_aspirasi->tampilakun($no_pengguna);

		$this->load->view('v_headerpengguna',$datajudul);
		$this->load->view('v_verifikasi_pengguna',$data);
		$this->load->view('v_footer_pengguna');
	}

	public function simpangambar()
	{
		
		// requires php5
		define('UPLOAD_DIR', 'assets/images/');
		$img = $_POST['imgBase64'];
		$img = str_replace('data:image/png;base64,', '', $img);
		$img = str_replace(' ', '+', $img);
		$data = base64_decode($img);
		$namafile = uniqid() . '.png';
		$file = UPLOAD_DIR . $namafile;
		$success = file_put_contents($file, $data);
		
		print $success ? $file : 'Unable to save the file.';
		$no_pengguna = $this->session->userdata('no_pengguna');
		$this->load->model('m_aspirasi');
		$this->m_aspirasi->verifikasiakun($no_pengguna,$namafile);
		$this->session->set_flashdata('suksesverif','yes');
	
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
	
	public function keluar()
	{
		$this->session->sess_destroy();
	    redirect('home');  
	}

}
