<?php
	class m_admin extends CI_Model{



		public function jmlpengguna(){
		 	$query = $this->db->query("Select * from pengguna");
		   return $query->num_rows();
		}
		public function jmlproses(){
		 	$query = $this->db->query("Select * from pengaduan where status_pengaduan='1'");
		   return $query->num_rows();
		}
		public function jmltindaklanjut(){
		 	$query = $this->db->query("Select * from pengaduan where status_pengaduan='2'");
		   return $query->num_rows();
		}
		public function jmlselesai(){
		 	$query = $this->db->query("Select * from pengaduan where status_pengaduan='3'");
		   return $query->num_rows();
		}


		public function cekloginpetugas($email_petugas, $password){
		   $this->db->select('email_petugas, password_petugas');
		   $this->db->from('petugas');
		   $this->db->where('email_petugas', $email_petugas);
		   $this->db->where('password_petugas', $password);
		 
		   $query = $this->db->get();
		 
		   return $query->num_rows();
		 }
		public function ceknomorpetugas($email_petugas){
		   $data = $this->db->query("Select no_petugas from petugas where email_petugas='$email_petugas'");
		   foreach($data->result() as $row)
		   {
		    return $row->no_petugas;
		   }
		 }
		 public function ceknamapetugas($no_petugas){
		   $data = $this->db->query("Select nama_petugas from petugas where no_petugas='$no_petugas'");
		   foreach($data->result() as $row)
		   {
		    return $row->nama_petugas;
		   }
		 }

	}