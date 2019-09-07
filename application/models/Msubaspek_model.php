<?php

	class Msubaspek_model extends CI_Model {

		/**
		 * @author Fian Hidayah
		 * Constructor class
		 */
		function __construct() {
			// Call the Model constructor
			parent::__construct();
			$this->db_evin = $this->load->database('SS', TRUE);
		}

		/**
		 * @author Fian Hidayah
		 * method untuk generate select query dari database
		 */
		public function select($selectcolumn=true){
	    	if($selectcolumn){
		    	$this->db_evin->select('ID_SUB');
		    	$this->db_evin->select('ID_ASPEK');
		    	$this->db_evin->select('SOAL');
	    	}
            	$this->db_evin->from('SUB_ASPEK');
		}

		/**
         * @author Fian Hidayah
         * method untuk mendapatkan data dari tabel survei
         * @param type $limit jumlah yang mau diambil
         * @param type $offset mulai dari mana
         * @return type hasil query dari database
         */
        function get($where = "", $order = "ID_SUB asc", $limit=null, $offset=null, $selectcolumn = true){
  			 $this->select($selectcolumn);
  			 if($limit != null) $this->db_evin->limit($limit, $offset);
  			 if($where != "") $this->db_evin->where($where);
  			 $this->db_evin->order_by($order);
  			 $query = $this->db_evin->get();
  			 return $query->result();
        }
        function get_by_id($ID_SUB)
		 {
			if($ID_SUB == null || trim($ID_SUB) == "") return null;
			$result = $this->get("ID_SUB = '".$ID_SUB."'");
			return count($result) == 0?null:$result[0];
		 }

		/**
		 * @author Fian Hidayah
		 * Fungsi untuk insert data ke tabel survei
		 */
		function insert($ID_ASPEK=false,$SOAL=false)
		{
			$data = array();
			if($ID_ASPEK !== false)$data['ID_ASPEK'] = trim($ID_ASPEK);
			if($SOAL !== false)$data['SOAL'] = trim($SOAL);
			$this->db_evin->insert('SUB_ASPEK', $data);
			return $this->db_evin->insert_id();
		}

		function update($ID_SUB=false,$ID_ASPEK=false,$SOAL=false)
		{
			$data = array();
			if($ID_ASPEK !== false)$data['ID_ASPEK'] = trim($ID_ASPEK);
			if($SOAL !== false)$data['SOAL'] = trim($SOAL);

			return $this->db_evin->update('SUB_ASPEK', $data, "ID_SUB = $ID_SUB");
		}

		 /* @author Fian Hidayah
		 * Fungsi untuk delete data dari tabel Survei
		 */
		function delete($ID_SUB)
		{
			$data = array();
			return $this->db_evin->update('SUB_ASPEK', $data, "ID_SUB = $ID_SUB");
		}

		/**
		 * @author Fian Hidayah
		 * Fungsi untuk menghitung jumlah row dari tabel survei
		 * @param type $where custome where
		 */
		function count_all($where = "")
		{
			if($where != null)$this->db_evin->where($where);
			return $this->db_evin->count_all_results('SUB_ASPEK');
		}
	}
?>