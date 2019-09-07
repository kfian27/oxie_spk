<?php

	class Maspek_model extends CI_Model {

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
		    	$this->db_evin->select('ID_ASPEK');
		    	$this->db_evin->select('ASPEK');
	    	}
            	$this->db_evin->from('ASPEK');
		}

		/**
         * @author Fian Hidayah
         * method untuk mendapatkan data dari tabel survei
         * @param type $limit jumlah yang mau diambil
         * @param type $offset mulai dari mana
         * @return type hasil query dari database
         */
        function get($where = "", $order = "ID_ASPEK asc", $limit=null, $offset=null, $selectcolumn = true){
  			 $this->select($selectcolumn);
  			 if($limit != null) $this->db_evin->limit($limit, $offset);
  			 if($where != "") $this->db_evin->where($where);
  			 $this->db_evin->order_by($order);
  			 $query = $this->db_evin->get();
  			 return $query->result();
        }
        function get_by_id($ID_ASPEK)
		 {
			if($ID_ASPEK == null || trim($ID_ASPEK) == "") return null;
			$result = $this->get("ID_ASPEK = '".$ID_ASPEK."'");
			return count($result) == 0?null:$result[0];
		 }

		/**
		 * @author Fian Hidayah
		 * Fungsi untuk insert data ke tabel survei
		 */
		function insert($ASPEK=false)
		{
			$data = array();
			if($ASPEK !== false)$data['ASPEK'] = trim($ASPEK);
			$this->db_evin->insert('ASPEK', $data);
			return $this->db_evin->insert_id();
		}

		function update($ID_ASPEK=false,$ASPEK=false)
		{
			$data = array();
			if($ASPEK !== false)$data['ASPEK'] = trim($ASPEK);

			return $this->db_evin->update('ASPEK', $data, "ID_ASPEK = $ID_ASPEK");
		}

		 /* @author Fian Hidayah
		 * Fungsi untuk delete data dari tabel Survei
		 */
		function delete($ID_ASPEK)
		{
			$data = array();
			return $this->db_evin->delete('ASPEK', "ID_ASPEK = $ID_ASPEK");
		}

		/**
		 * @author Fian Hidayah
		 * Fungsi untuk menghitung jumlah row dari tabel survei
		 * @param type $where custome where
		 */
		function count_all($where = "")
		{
			if($where != null)$this->db_evin->where($where);
			return $this->db_evin->count_all_results('ASPEK');
		}
	}
?>