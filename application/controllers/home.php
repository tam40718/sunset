<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->helper('form');
		$this->load->library('form_validation');
		$this->load->model('Model');
		$this->load->model('Mdl_pesan');
		date_default_timezone_set("Asia/Jakarta");
	}

	public function index()
	{	
	 //    $data_header['title'] = 'Cakra Tour Pro';
		// $data_header['description'] = 'Cakra Tour Pro';
		// $data_header['keyword'] = 'Cakra Tour Pro';
		// $data_header['aktif'] = 'beranda';
		//$data_header['menu']   = $this->Model->menu_header()->result_array();
		
		$data_header = $this->getHeader('beranda');
		
		$this->load->view('header',$data_header);
		
		$data['tampil_slider'] = $this->Model->tampil_slider(3)->result_array();
		$data['home'] 	   = $this->Model->tampil()->result_array();
		
		$data['galeri_album'] = $this->Model->album_galeri(5)->result_array();
		$this->load->view('index', $data);
		
		//$data_footer['terbaru'] = $this->Model->terbaru(5)->result_array();
		$this->load->view('footer');
	}
	
	public function tentang(){
		$tentang_meta = $this->Model->tentang()->row();
	    // $data_header['title'] = $tentang_meta->about_title_meta;
		$data_header['title'] = "Tentang Cakra Tour Pro";
		$data_header['description'] = $tentang_meta->about_deskripsi_meta;
		$data_header['keyword'] = $tentang_meta->about_keyword_meta;
		$data_header['aktif'] = 'tentang';
		$this->load->view('header',$data_header);
		//$data['tampil_slider'] = $this->Model->tampil_slider(4)->result_array();
		$data['tentang'] = $this->Model->tentang()->row();
		//$data_header['menu'] = $this->Model->menu_header()->result_array();
		$this->load->view('about', $data);
		//$data_footer['terbaru'] = $this->Model->terbaru(5)->result_array();
		$this->load->view('footer');	
	}
	
	function galeri_room($id){
		$galeri_meta = $this->Model->tampil($id)->row();
		$data_header['title'] = $galeri_meta->detail_title_meta;
		$data_header['description'] = $galeri_meta->detail_deskripsi_meta;
		$data_header['keyword'] = $galeri_meta->detail_keyword_meta;
		$data_header['aktif'] = 'produk';
		$this->load->view('header',$data_header);
		//$data_header['menu'] = $this->Model->menu_header()->result_array();
		$data['room_nama']= $this->Model->tampil($id)->row();
		$data['room_jenis']= $this->Model->tampil($id)->result_array();
		$this->load->view('room', $data);
		//$data_footer['terbaru'] = $this->Model->terbaru(5)->result_array();
		$this->load->view('footer');	
	}
	
	function produk($id){
		$produk_meta = $this->Model->tampil(4, $id)->row();
		$data_header['title'] = $produk_meta->detail_title_meta;
		$data_header['description'] = $produk_meta->detail_deskripsi_meta;
		$data_header['keyword'] = $produk_meta->detail_keyword_meta;
		$data_header['aktif'] = 'produk';
		$this->load->view('header',$data_header);
		//$data_header['menu'] = $this->Model->menu_header()->result_array();
		$data['room'] = $this->Model->tampil(4, $id)->row();
		//$data['terbaru'] = $this->Model->terbaru(5)->result_array();
		$this->load->view('single', $data);
		$this->load->view('footer');	
	}
	
	function galleri(){

	 //    $data_header['title'] = 'Foto Cakra Tour Pro';
		// $data_header['description'] = 'Foto Cakra Tour Pro';
		// $data_header['keyword'] = 'Foto Cakra Tour Pro';
		// $data_header['aktif'] = 'galeri';
		//$data_header['menu'] = $this->Model->menu_header()->result_array();
		
		$data_header = $this->getHeader('galleri');
		
		$data['galeri_album'] = $this->Model->album_galeri()->result_array();
		$this->load->view('header', $data_header);
		$this->load->view('gallery',$data);
		//$data_footer['terbaru'] = $this->Model->terbaru(5)->result_array();
		$this->load->view('footer');	
	}
	
	function room(){

	 //    $data_header['title'] = 'Produk Cakra Tour Pro';
		// $data_header['description'] = 'Produk Cakra Tour Pro';
		// $data_header['keyword'] = 'Produk Cakra Tour Pro';
		// $data_header['aktif'] = 'produk';
		//$data_header['menu'] = $this->Model->menu_header()->result_array();

		$data_header = $this->getHeader('rooms');

		$data['produk'] 	 = $this->Model->kategori_produk()->result_array();
		$this->load->view('header',$data_header);
		$this->load->view('kategori_room', $data);
		//$data_footer['terbaru'] = $this->Model->terbaru(5)->result_array();
		$this->load->view('footer');
	}	
	
	function galeri_album($id){
		$galeri_meta = $this->Model->album_galeri(2,$id)->row();
		$data_header['title'] = "Foto Cakra Tour Pro";
		$data_header['description'] = $galeri_meta->album_deskripsi_meta;
		$data_header['keyword'] = $galeri_meta->album_keyword_meta;
		$data_header['aktif'] = 'galeri';
		//$data_header['menu'] = $this->Model->menu_header()->result_array();
		$data['galeri_album'] = $this->Model->album_galeri(1,$id)->result_array();
		$data['galeri_album_room'] = $this->Model->album_galeri(2,$id)->row();
		$this->load->view('header',$data_header);
		$this->load->view('gallery_album', $data);
		//$data_footer['terbaru'] = $this->Model->terbaru(5)->result_array();
		$this->load->view('footer');	
	}
	
	function hubungi(){
		$hubungi_meta = $this->Model->hubungi()->row();
		$data_header['title'] = $hubungi_meta->kontak_title_meta;
		$data_header['description'] = $hubungi_meta->kontak_deskripsi_meta;
		$data_header['keyword'] = $hubungi_meta->kontak_keyword_meta;
		$data_header['aktif'] = 'hubungi';
		$data['kontak'] = $this->Model->hubungi()->row();
		//$data_header['menu'] = $this->Model->menu_header()->result_array();
		$this->load->view('header',$data_header);
		$this->load->view('mail', $data);
		//$data_footer['terbaru'] = $this->Model->terbaru(5)->result_array();
		$this->load->view('footer');	
	}
	
	function simpan_kontak(){
		$data['nama_form'] = $this->input->post('Name');
		$data['email_form'] = $this->input->post('Email');
		$data['phone_form'] = $this->input->post('Telephone');
		$data['pesan_form'] = $this->input->post('Message');
		$this->Model->simpan_kontak($data);
		$this->session->set_flashdata("pesan", "<div class='alert alert-success alert-dismissible' role='alert'>
			<button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button>
			<strong>Pesan Berhasil Dikirim!</strong>
			</div>");
		redirect(base_url('Home/hubungi'));
	}

	public function pesan() {
		$data = array(
				'nama_form'        => $this->input->post('name'),
				'pesan_form'        => $this->input->post('message'),
				'email_form'        => $this->input->post('email'),
				'tgl_form'        => date('Y-m-d H:i:s')
			);
		$this->Mdl_pesan->add($data);
		$this->session->set_flashdata('berhasil','Pesan berhasil terkirim, Terima kasih atas pesan yang anda kirimkan.');
		redirect('home/hubungi');
		// print_r($this->db->last_query());
		// echo json_encode(array("status" => TRUE));
    }
	function tampil_blog(){
		// $data_header['title'] = 'Cakra Tour Pro';
		// $data_header['description'] = 'Cakra Tour Pro';
		// $data_header['keyword'] = 'Cakra Tour Pro';
		// $data_header['aktif'] = 'beranda';
		//$data_header['menu']   = $this->Model->menu_header()->result_array();
		$data_header = $this->getHeader('blog');
		$this->load->view('header',$data_header);

		// var_dump($data_header);
		
		$this->load->view('blog');

		$this->load->view('footer');
	}
	function tampil_event(){
		$data_header = $this->getHeader('event');
		$this->load->view('header',$data_header);
		$this->load->view('event');
		$this->load->view('footer');
	}
	function tampil_reservation(){
		$data_header = $this->getHeader('reservation');
		$this->load->view('header',$data_header);
		$this->load->view('reservation');
		$this->load->view('footer');
	}
	function tampil_room_detail($id){
		$data_header = $this->getHeader('room-1');
		$data['list_kamar'] = $this->Model->kamar_id($id)->row();
		$data['list_gambar_kamar'] = $this->Model->gambar_kamar_id($id)->result();
		$data['kontak'] = $this->Model->hubungi()->row();
		$data['sidebar'] = $this->Model->kamar_rand($id)->result();
		$this->load->view('header',$data_header);
		$this->load->view('room-detail',$data);
		$this->load->view('footer');
	}
	function tampil_room(){
		$data_header = $this->getHeader('Kamar');
		$data['list_kamar']=$this->Model->kamar()->result();
		$data['list_fasilitas']=$this->Model->fasilitas()->result();
		$this->load->view('header',$data_header);
		$this->load->view('room-1',$data);
		$this->load->view('footer');
	}

	function tampil_facilities(){
		$data_header = $this->getHeader('facilities');
		$data['list_fasilitas']=$this->Model->fasilitas()->result();
		$this->load->view('header',$data_header);
		$this->load->view('facilities',$data);
		$this->load->view('footer');
	}
	function tampil_blog_item(){
		$data_header = $this->getHeader('blog');
		$this->load->view('header',$data_header);
		$this->load->view('blog-item');
		$this->load->view('footer');
	}
	function tampil_gallery(){
		$data_header = $this->getHeader('galleri');
		$data['list_album'] = $this->Model->album(0)->result();
		$data['list_foto'] = $this->Model->foto(0)->result();
		$this->load->view('header',$data_header);
		$this->load->view('gallery_full',$data);
		$this->load->view('footer');
	}
	function tampil_video(){
		$data_header = $this->getHeader('galleri');
		$data['list_album'] = $this->Model->album(1)->result();
		$data['list_video'] = $this->Model->foto(1)->result();
		// echo "<pre>";
		// print_r($data);
		// echo "</pre>";
		$this->load->view('header',$data_header);
		$this->load->view('video',$data);
		$this->load->view('footer');
	}

	function getHeader($aktif){
		$data_header['title'] = $aktif.' Resort';
		$data_header['description'] = $aktif.' Resort';
		$data_header['keyword'] = $aktif.' Resort';
		$data_header['aktif'] = $aktif;

		return $data_header;
	}
	public function list_fasilitas($id,$order)
	{
		echo json_encode($this->Model->getid_fasilitas($id,$order)->result());
	}

}

/* End of file welcome.php */
