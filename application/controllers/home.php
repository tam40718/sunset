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
		$data['tentang'] = $this->Model->tentang()->row();
		$data['list_kamar']=$this->Model->kamar(4)->result();
		$data['kontak'] = $this->Model->hubungi()->row();
		$data['list_fasilitas']=$this->Model->fasilitas(4)->result();
		$data['list_foto'] = $this->Model->foto_index(12)->result();
		
		$data['galeri_album'] = $this->Model->album_galeri(5)->result_array();
		$this->load->view('index', $data);
		
		//$data_footer['terbaru'] = $this->Model->terbaru(5)->result_array();
		$this->load->view('footer');
	}
	
	public function tentang(){
		$tentang_meta = $this->Model->tentang()->row();
	    // $data_header['title'] = $tentang_meta->about_title_meta;
		$data_header['kontak'] = $this->Model->hubungi()->row();
		$data_header['title'] = "Tentang Cakra Tour Pro";
		$data_header['description'] = $tentang_meta->about_deskripsi_meta;
		$data_header['keyword'] = $tentang_meta->about_keyword_meta;
		$data_header['aktif'] = 'tentang';
		$this->load->view('header',$data_header);
		//$data['tampil_slider'] = $this->Model->tampil_slider(4)->result_array();
		$data['tentang'] = $this->Model->tentang()->row();
		$data['list_fasilitas']=$this->Model->fasilitas(2)->result();
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
		$data_header['kontak'] = $this->Model->hubungi()->row();
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

	public function pesank() {
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
		$data['list_kamar']=$this->Model->kamar(0)->result();
		$this->load->view('header',$data_header);
		$this->load->view('room-1',$data);
		$this->load->view('footer');
	}

	function tampil_facilities(){
		$data_header = $this->getHeader('facilities');
		$data['list_fasilitas']=$this->Model->fasilitas(0)->result();
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
		$data_header['kontak'] = $this->Model->hubungi()->row();

		return $data_header;
	}
	public function list_fasilitas($id,$order)
	{
		echo json_encode($this->Model->getid_fasilitas($id,$order)->result());
	}
	//----------------------Reservasi
	public function cek_sedia()
	{
		if (!empty($this->session->userdata('id_kpesan'))) {
			$id_kpesan = $this->session->userdata('id_kpesan');
		}else{
			$id_kpesan = $this->id_otok();
			$data_kpesan['id_kpesan'] = $id_kpesan;
			$data_kpesan['tgl_kpesan'] = date('Y-m-d');
			$this->Model->add('tk_pesan',$data_kpesan);
			$this->session->set_userdata('id_kpesan',$id_kpesan);
			$this->session->set_userdata('tgl_kpesan',date('Y-m-d'));
		}

		$data_sess['checkin'] = $this->input->post('checkin');
		$data_sess['checkout'] = $this->input->post('checkout');
		$data_sess['dewasa'] = $this->input->post('dewasa');
		$data_sess['anak'] = $this->input->post('anak');
		$data_sess['id_promo'] = $this->input->post('kode');
		$this->session->set_userdata($data_sess);
		$this->tampil_room();
	}

	public function pesan($id_kamar)
	{
		$data_det_pesan['id_kamar'] = $id_kamar;
		$data_det_pesan['id_kpesan'] = $this->session->userdata('id_kpesan');
		$data_det_pesan['checkin_kdet_pesan'] = $this->session->userdata('checkin');
		$data_det_pesan['checkout_kdet_pesan'] = $this->session->userdata('checkout');
		$data_det_pesan['dewasa_kdet_pesan'] = $this->session->userdata('dewasa');
		$data_det_pesan['anak_kdet_pesan'] = $this->session->userdata('anak');
		echo date('Y-m-d',strtotime($this->session->userdata('checkin')));
		echo "<br>";
		if($this->isWeekend(date('Y-m-d',strtotime($this->session->userdata('checkin'))))){
			echo "ya";
		}else{
			echo "tidak";
		}
	}
	function isWeekend($date) {
    	$weekDay = date('N', strtotime($date));
    	if ($weekDay == 0 || $weekDay == 6){
    		return TRUE;
    	}else{
    		return False;
    	}
    	// echo $weekDay;
	}
	public function list_keranjang($idk)
	{
		$data = $this->Model->list_keranjang($idk);
		if ($data->num_rows()>0) {
			echo json_encode($this->Model->list_keranjang($idk)->result());
		}else{
			echo "0";
		}
		
	}
	public function keranjang_hapus($id)
	{
		// $iddk = $this->input->post('id');
		$idd['id_kdet_pesan']=$id;
		$this->Model->hapus('tk_det_pesan',$idd);
		redirect(base_url('home/tampil_reservation'));
	}
	public function id_otok()
	{
		$fix=0;
		$kode = 'IKP';
		$data = $this->Model->get_id_kp()->result();
		foreach ($data as $d) {
			$fix = $d->id_kpesan;
		}
		if (substr($fix, 4, 6)==date('ymd')) {
			$angka = substr($fix, 11)+1;
			$angka_p = str_pad($angka,3,"0",STR_PAD_LEFT);
			$tgl_angk = substr($fix, 4, 7).$angka_p;
		}else{
			$tgl_angk = date('ymd').'_001';
		}
		return $kode_jadi= $kode.'_'.$tgl_angk;
	}


}

/* End of file welcome.php */
