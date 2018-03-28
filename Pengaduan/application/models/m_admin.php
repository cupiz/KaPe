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

	}