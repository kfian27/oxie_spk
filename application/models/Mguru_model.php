<?php

	class Mguru_model extends CI_Model {

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
		    	$this->db_evin->select('ID_GURU');
		    	$this->db_evin->select('NAMA_GURU');
		    	$this->db_evin->select('PASS_GURU');
	    	}
            	$this->db_evin->from('GURU');
		}

		/**
         * @author Fian Hidayah
         * method untuk mendapatkan data dari tabel survei
         * @param type $limit jumlah yang mau diambil
         * @param type $offset mulai dari mana
         * @return type hasil query dari database
         */
        function get($where = "", $order = "ID_GURU asc", $limit=null, $offset=null, $selectcolumn = true){
  			 $this->select($selectcolumn);
  			 if($limit != null) $this->db_evin->limit($limit, $offset);
  			 if($where != "") $this->db_evin->where($where);
  			 $this->db_evin->order_by($order);
  			 $query = $this->db_evin->get();
  			 return $query->result();
        }
        function get_by_id($ID_GURU)
		 {
			if($ID_GURU == null || trim($ID_GURU) == "") return null;
			$result = $this->get("ID_GURU = '".$ID_GURU."'");
			return count($result) == 0?null:$result[0];
		 }

		/**
		 * @author Fian Hidayah
		 * Fungsi untuk insert data ke tabel survei
		 */
		function insert($NAMA_GURU=false,$PASS_GURU=false)
		{
			$data = array();
			if($NAMA_GURU !== false)$data['NAMA_GURU'] = trim($NAMA_GURU);
			if($PASS_GURU !== false)$data['PASS_GURU'] = trim($PASS_GURU);
			$this->db_evin->insert('GURU', $data);
			return $this->db_evin->insert_id();
		}

		function update($ID_GURU=false,$NAMA_GURU=false,$PASS_GURU=false)
		{
			$data = array();
			if($NAMA_GURU !== false)$data['NAMA_GURU'] = trim($NAMA_GURU);
			if($PASS_GURU !== false)$data['PASS_GURU'] = trim($PASS_GURU);

			return $this->db_evin->update('GURU', $data, "ID_GURU = $ID_GURU");
		}

		 /* @author Fian Hidayah
		 * Fungsi untuk delete data dari tabel Survei
		 */
		function delete($ID_GURU)
		{
			$data = array();
			return $this->db_evin->update('GURU', $data, "ID_GURU = $ID_GURU");
		}

		function last_sign($GURU_id)
		{
			$data = array();
			$data['last_used'] = now();
			return $this->db_evin->update('GURU', $data, "NAMA_GURU = $GURU_id");
		}

		/**
		 * @author Fian Hidayah
		 * Fungsi untuk menghitung jumlah row dari tabel survei
		 * @param type $where custome where
		 */
		function count_all($where = "")
		{
			if($where != null)$this->db_evin->where($where);
			return $this->db_evin->count_all_results('GURU');
		}
	}
?>