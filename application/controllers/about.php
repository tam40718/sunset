<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class About extends CI_Controller {
	
	public function __construct() {
		parent::__construct();
		$this->load->model('Mdl_about');
		$this->auth->restrict();
		date_default_timezone_set("Asia/Jakarta");
		$this->load->library("session");
	}
	
	 function index(){
       // $this->mdl_home->getsqurity();
        $data['view_file']    = "admin/moduls/about";
        $this->load->view('admin/admin_view',$data);
    }
	
	public function ajax_list() {
		$list = $this->Mdl_about->get_datatables();
		$data = array();
		$no = $_REQUEST['start'];
		foreach ($list as $about) {
			if($about->about_logo==''){ $cover = 'no_image.jpg'; }else{ $cover = $about->about_logo; }
			$row1 = '<img src="'.base_url().'assets/images/'.$cover.'" style="height: 100px; width: 100px;">';
			$no++;
			$row = array();
			$row[] = $no;
			$row[] = $row1;
			$row[] = $about->about_deskripsi;
			$row[] = '
			<div class="btn-group">
                        <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">Aksi <span class="caret"></span></button>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="javascript:void(0)" onclick="update('."'".$about->id_about."'".')">Edit</a></li>
                            <li><a href="javascript:void(0)" onclick="hapus('."'".$about->id_about."'".')">Delete</a></li>
                        </ul>
            </div>';
			$data[] = $row;
		}

		$output = array(
						"draw" => $_REQUEST['draw'],
						"recordsTotal" => $this->Mdl_about->count_all(),
						"recordsFiltered" => $this->Mdl_about->count_filtered(),
						"data" => $data,
				);
		echo json_encode($output);
	}
	
	function ajax_add(){
		$gambar = $_FILES['userfile']['name'];
		//$nama_file = $this->input->post('slider_judul').'.'.$olah[1];

		$nama = $this->input->post('slider_judul');
		$deskripsi = $this->input->post('slider_deskripsi');
		//$gambar = str_replace(' ', '_', $nama_file);

		$config['upload_path'] = realpath('assets/images');
		$config['allowed_types']        = 'gif|jpg|png';
		$config['max_size'] = '2000000';
        $config['max_width'] = '2024';
        $config['max_height']= '1468';
		$config['file_name'] = $gambar;	
		
		$this->load->library('upload', $config);
 		$this->upload->initialize($config);
		$this->upload->do_upload('userfile');

		if(empty($gambar)){
 			$data = array(
			'about_deskripsi' => $this->input->post('about_deskripsi'),
			'about_title_meta' => $this->input->post('about_title_meta'),
			'about_deskripsi_meta' => $this->input->post('about_deskripsi_meta'),
			'about_keyword_meta' => $this->input->post('about_keyword_meta'),
			'id_admin' => $this->session->userdata('id_admin')
			);
 		}else{
 			//unlink('../assets/galeri/'.$this->input->post('terserah'));
 			
			$data = array(
			'about_deskripsi' => $this->input->post('about_deskripsi'),
			'about_title_meta' => $this->input->post('about_title_meta'),
			'about_deskripsi_meta' => $this->input->post('about_deskripsi_meta'),
			'about_keyword_meta' => $this->input->post('about_keyword_meta'),
			'about_logo' => $gambar,
			'id_admin' => $this->session->userdata('id_admin')
			); 			
 		}	
 		

		$this->Mdl_about->add($data);
		echo json_encode(array('status' => TRUE));

	}
	
	public function ajax_edit() {
		$data = $this->Mdl_about->get_by_id();
		echo json_encode($data);
	}
	
	public function update() {
		$data = array(
				'about_judul'        => $this->input->post('about_judul'),
				'about_deskripsi'        => $this->input->post('about_deskripsi'),
				'about_deskripsi2'        => $this->input->post('about_deskripsi2'),
				'about_title_meta'       => $this->input->post('about_title_meta'),
				'about_deskripsi_meta'       => $this->input->post('about_deskripsi_meta'),
				'about_keyword_meta'       => $this->input->post('about_keyword_meta'),
				'id_admin' => $this->session->userdata('id_admin')
			);
		$this->Mdl_about->update(array('id_about' => 1), $data);
		//print_r($this->db->last_query());
		echo json_encode(array("status" => TRUE));
    }
	
	public function upload() {
        //if(!$modul){$this->session->set_userdata('err_msg', 'Anda Harus pilih salah satu Modul.'); redirect('admin');}
		// $gambar = $_FILES['file-upload']['name'];
		//$nama_file = $this->input->post('slider_judul').'.'.$olah[1];

		// $nama = $this->input->post('slider_judul');
		// $deskripsi = $this->input->post('slider_deskripsi');
		//$gambar = str_replace(' ', '_', $nama_file);

		$new_name = 'lab_'.time();
		$config['file_name'] = $new_name;
		$config['upload_path'] = realpath('assets/images/about');
		$config['allowed_types']        = 'gif|jpg|png';
		$config['max_size'] = '2000000';
        $config['max_width'] = '2024';
        $config['max_height']= '1468';
		
		$this->load->library('upload', $config);
 		$this->upload->initialize($config);
		$this->upload->do_upload('file-upload');
 			
			$gbr = $this->Mdl_about->get_id();
			foreach ($gbr as $g) {
				if ($g->about_logo) {
				unlink($_SERVER['DOCUMENT_ROOT'].'/resort/assets/images/about/'.$g->about_logo);
				}
			}
			$get_name = $this->upload->data();
	   		$nama_foto = $get_name['file_name'];
			$data = array(
			'about_logo' => $nama_foto,
			'id_admin' => $this->session->userdata('id_admin')
			); 			
 		
 		

		$where = array('id_about' => 1);			 
		$this->Mdl_about->update_data($where,$data,'tb_about');	
		
		echo json_encode(array('status' => TRUE));
    }
	public function upload_video() {
        //if(!$modul){$this->session->set_userdata('err_msg', 'Anda Harus pilih salah satu Modul.'); redirect('admin');}
		// $gambar = $_FILES['file-upload']['name'];
		//$nama_file = $this->input->post('slider_judul').'.'.$olah[1];

		$link = $this->input->post('about_video');
		// $deskripsi = $this->input->post('slider_deskripsi');
		//$gambar = str_replace(' ', '_', $nama_file);

		$new_name = 'cab_'.time();
		$config['file_name'] = $new_name;
		$config['upload_path'] = realpath('assets/images/about');
		$config['allowed_types']        = 'gif|jpg|png';
		$config['max_size'] = '2000000';
        $config['max_width'] = '2024';
        $config['max_height']= '1468';
		
		$this->load->library('upload', $config);
 		$this->upload->initialize($config);
		$this->upload->do_upload('file-upload');
 			
			$gbr = $this->Mdl_about->get_id();
			foreach ($gbr as $g) {
				if ($g->about_cover) {
				unlink($_SERVER['DOCUMENT_ROOT'].'/resort/assets/images/about/'.$g->about_cover);
				}
			}
			$get_name = $this->upload->data();
	   		$nama_foto = $get_name['file_name'];
			$data = array(
			'about_cover' => $nama_foto,
			'about_video' => $link,
			'id_admin' => $this->session->userdata('id_admin')
			); 			
 		
 		

		$where = array('id_about' => 1);			 
		$this->Mdl_about->update_data($where,$data,'tb_about');	
		
		echo json_encode(array('status' => TRUE));
    }
	
	public function ajax_delete($id) {
      $this->Mdl_about->delete_by_id($id);
      echo json_encode(array("status" => TRUE));
    }
}	