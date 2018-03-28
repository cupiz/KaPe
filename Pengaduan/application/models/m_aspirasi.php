<?php
	class m_aspirasi extends CI_Model{

		//------- HOME ---------------//
		public function tampilanggota(){
		 	return $this->db->query("Select * from pengguna")->result();
		}
		 public function tampilakun($no_pengguna){
		 	return $this->db->query("Select * from pengguna
		 							where no_pengguna='$no_pengguna'")->result();
		 }
		public function tampilopd(){
		 	return $this->db->query("Select * from opd")->result();
		}
		public function tampilproses(){
		 	return $this->db->query("Select * from pengaduan 
		 		join opd on opd.no_opd=pengaduan.no_opd
		 		join pengguna on pengguna.no_pengguna=pengaduan.no_pengguna
		 		where pengaduan.status_pengaduan='1'")->result();
		}
		public function tampiltindak(){
		 	return $this->db->query("Select * from pengaduan 
		 		join opd on opd.no_opd=pengaduan.no_opd
		 		join pengguna on pengguna.no_pengguna=pengaduan.no_pengguna
		 		where pengaduan.status_pengaduan='2'")->result();
		}
		public function tampilselesai(){
		 	return $this->db->query("Select * from pengaduan 
		 		join opd on opd.no_opd=pengaduan.no_opd
		 		join pengguna on pengguna.no_pengguna=pengaduan.no_pengguna
		 		where pengaduan.status_pengaduan='3'")->result();
		}

		public function tampiltanggap(){
		 	return $this->db->query("Select * from tanggapan
		 							JOIN pengaduan on pengaduan.no_pengaduan=tanggapan.no_pengaduan
		 							JOIN opd on opd.no_opd=pengaduan.no_opd
		 							where pengaduan.status_pengaduan='3'")->result();		

		 }
		 public function tampilpendingtanggap(){
		 	return $this->db->query("Select * from pengaduan 
		 		join opd on opd.no_opd=pengaduan.no_opd
		 		join pengguna on pengguna.no_pengguna=pengaduan.no_pengguna
		 		where pengaduan.status_pengaduan='2'")->result();		

		 }


		public function tampiltindak1($no_pengguna){
		 	return $this->db->query("Select * from pengaduan 
		 		join opd on opd.no_opd=pengaduan.no_opd
		 		join pengguna on pengguna.no_pengguna=pengaduan.no_pengguna
		 		where pengaduan.status_pengaduan='2' and pengaduan.no_pengguna='$no_pengguna'")->result();
		}
		public function tampilselesai1($no_pengguna){
		 	return $this->db->query("Select * from pengaduan 
		 		join opd on opd.no_opd=pengaduan.no_opd
		 		join pengguna on pengguna.no_pengguna=pengaduan.no_pengguna
		 		where pengaduan.status_pengaduan='3' and pengaduan.no_pengguna='$no_pengguna'")->result();
		}

		public function tampilpengaduan($jumlah){
		 	return $this->db->query("Select * from pengaduan 
		 							join opd on opd.no_opd=pengaduan.no_opd
		 							join pengguna on pengguna.no_pengguna=pengaduan.no_pengguna
		 							where pengaduan.status_pengaduan='3' or pengaduan.status_pengaduan='2' LIMIT $jumlah")->result();
		}

		public function tampiladuan($no_pengaduan){
		 	return $this->db->query("Select * from pengaduan 
		 							join opd on opd.no_opd=pengaduan.no_opd
		 							join pengguna on pengguna.no_pengguna=pengaduan.no_pengguna
		 							where no_pengaduan='$no_pengaduan'")->result();
		}

		public function tampiltanggapan($no_pengaduan){
		 	return $this->db->query("Select * from tanggapan
		 							JOIN pengaduan on pengaduan.no_pengaduan=tanggapan.no_pengaduan
		 							JOIN opd on opd.no_opd=pengaduan.no_opd
		 							where pengaduan.no_pengaduan='$no_pengaduan'")->result();		

		 }

		 public function cekstatuspengguna($no_pengguna){
		   $data = $this->db->query("Select status_pengguna from pengguna where no_pengguna='$no_pengguna'");
		   foreach($data->result() as $row)
		   {
		    return $row->status_pengguna;
		   }
		 }

		 public function cekemailada($email_pengguna){  
			$data = $this->db->query("Select email_pengguna from pengguna where email_pengguna='$email_pengguna'");
		    foreach($data->result() as $row)
		    {
		     return $row->email_pengguna;
		    }
		 }
		 public function ceknikada($nik_pengguna){  
			$data = $this->db->query("Select no_pengguna from pengguna where no_pengguna='$nik_pengguna'");
		    foreach($data->result() as $row)
		    {
		     return $row->no_pengguna;
		    }
		 }
		 public function simpanpendaftar($data){
			$this->db->query("insert into pengguna values('$data[0]','$data[1]','$data[2]','$data[3]','$data[4]','$data[5]','$data[6]','$data[7]','$data[8]')");
		}
		public function cekemail($verify){  
			$data = $this->db->query("Select email_pengguna from pengguna where status_pengguna='$verify'");
		    foreach($data->result() as $row)
		    {
		     return $row->email_pengguna;
		    }
		 }
		 public function verify($verify){  

		  $sql = "update pengguna set status_pengguna='EMAIL SUKSES' WHERE status_pengguna=?";
		  $this->db->query($sql, array($verify));
		  return $this->db->affected_rows(); 
		 }
		 public function verifikasiakun($no_pengguna,$file){  
		 	$this->db->query("update pengguna set status_pengguna='TERVERIFIKASI', foto_verif_pengguna='$file' WHERE no_pengguna='$no_pengguna'");
		 }


		 //---AKUN--//

		 public function ceklogin($email, $password){
		    $data = $this->db->query("Select email_pengguna from pengguna where email_pengguna='$email' and
		   							password_pengguna='$password' and (status_pengguna='TERVERIFIKASI' OR status_pengguna='EMAIL SUKSES')");
		   
		   foreach($data->result() as $row)
		   {
		    return $row->email_pengguna;
		   }
		 }

		 public function ceknomorpengguna($email){
		   $data = $this->db->query("Select no_pengguna from pengguna where email_pengguna='$email'");
		   foreach($data->result() as $row)
		   {
		    return $row->no_pengguna;
		   }
		 }
		 public function ceknamapengguna($no_pengguna){
		   $data = $this->db->query("Select nama_pengguna from pengguna where no_pengguna='$no_pengguna'");
		   foreach($data->result() as $row)
		   {
		    return $row->nama_pengguna;
		   }
		 }

		 public function updatepengguna($no_pengguna,$fotoupload){
					
						
			$nama=$this->input->post('nama');
			$alamat=$this->input->post('alamat');
			$notelp=$this->input->post('notelp');
			$foto=$fotoupload;

			$data = array (
				'nama_pengguna' => $nama,
				'notelp_pengguna'  => $notelp,
				'alamat_pengguna'=> $alamat,
				'foto_pengguna' => $foto,
			);
			$this->db->where('no_pengguna', $no_pengguna);
			$this->db->update('pengguna', $data);
		}

		public function simpanajukan($data){
			$this->db->query("insert into pengaduan values('$data[0]','$data[1]','$data[2]','$data[3]','$data[4]','$data[5]','$data[6]','1')");

		}
		public function simpantanggap($data){
					
			$this->db->query("insert into tanggapan values('','1','$data[0]','$data[1]')");
			$this->db->query("update pengaduan SET status_pengaduan = '3' WHERE pengaduan.no_pengaduan = '$data[0]'");

		}
		public function konfirmasipengaduan($no_pengaduan){
		 	$this->db->query("update pengaduan set status_pengaduan='2' where no_pengaduan='$no_pengaduan'");
		}





}