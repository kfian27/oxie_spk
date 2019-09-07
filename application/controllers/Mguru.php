<?php
/**
 * class untuk handle survei
 * @author Fian Hidayah
 */
class mguru extends CI_Controller {
	 //constructor class
    public function __construct() {
      parent::__construct();
      //if(!$this->auth->validate(true)) exit(0);
      $this->load->model('Mguru_model');
      $this->load->helper(array('form', 'url'));
    }

	public function index(){
  		// $this->load->model('Mguru_model');
		// $data['kategori'] = $this->Mguru_model->get('status_kategori = '.STATUS_ACTIVE);
		// $this->load->view('admin/index.php');
		// $this->load->view('admin/menu.php');
		// $this->load->view('admin/kategori.php',$data);
		// $this->load->view('admin/footer.php');
    redirect(base_url("master/guru"));
	}

	/*
	 * Get Detail
     * @author Fian Hidayah
	 *
	 * get data detail Survei
	 *
	 * @author	Fian Hidayah
	 * @access	public
	 * @return	void
	 */

  public function coba_insert(){   
      if($_POST['ID_GURU'] == null || $_POST['ID_GURU'] == ""){
        $insert_id = $this->Mguru_model->insert(
            $_POST['NAMA_GURU'],md5($_POST['PASS_GURU']));
      }
      else {
        $this->Mguru_model->update($_POST['ID_GURU'],
            $_POST['NAMA_GURU'],md5($_POST['PASS_GURU']));
      }
  }
	public function get_detail($ID_GURU)
	{
		if(!$this->input->is_ajax_request()) show_404();

		$detail = $this->Mguru_model->get_by_id($ID_GURU);
		if($detail != null) ajax_response('ok', NULL, $detail);
		else ajax_response('failed', 'Gagal');
	}

	/*
	 * Save method
     * @author Fian Hidayah
	 *
	 * insert/update survei data
	 *
	 * @author	Fian Hidayah
	 * @access	private
	 * @return	void
	 */



	/**
	 * Delete Survei
     * @author Fian Hidayah
	 *
	 * delete Survei data
	 *
	 * @author	Fian Hidayah
	 * @access	public
	 * @return	void
	 **/
	public function delete($ID_GURU){
		if(!$this->input->is_ajax_request()) show_404();

		if($ID_GURU)
		{
			/* remove this if want use validate contraint
			if($this->violated_constraint($this->input->post('jns_id'))){
				ajax_response('failed', lang_value('jnsab_constraint_failed'));
			}*/
			//add_individual_data_log('Mjnssrt_model', $this->input->post('jns_id'), array('fld_uri'));
			$this->Mguru_model->delete($ID_GURU);
		}
		else
		{
			ajax_response('failed', 'Gagal');
		}
		ajax_response();
	}
}
?>