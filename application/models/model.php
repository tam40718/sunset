<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model extends CI_Model {

	public function menu_header(){
		return $this->db->get('tb_kategori_produk');
	}

	public function tampil($id=null, $status=null){
		if($id==null){
			$this->db->limit(6);
		}else{
			if($status==null){
				$this->db->where('tb_kategori_produk.id_produk', $id);
			}else{
				$this->db->where('tb_produk.id_detail', $status);
			}
		}
		
		$this->db->order_by('tb_kategori_produk.id_produk', 'DESC');
		$this->db->group_by('tb_produk.id_detail');
		$this->db->select('tb_produk.*,tb_kategori_produk.*');
		$this->db->from('tb_produk');
		$this->db->join('tb_kategori_produk','tb_kategori_produk.id_produk=tb_produk.id_produk','left outer');
		return $this->db->get();
	}	

	public function tampil_slider($limit){
		return $this->db->get('tb_slider');
	}
	
	public function tentang(){
		return $this->db->get('tb_about');
	}
	
	public function album_galeri($status=null, $id=null){
		$this->db->from('tb_album');
		if($status==1){
			$this->db->join('tb_foto', 'tb_foto.id_album=tb_album.id_album');
			$this->db->where('tb_foto.id_album', $id);
		}else if($status==2){
			$this->db->where('id_album',$id);
		}else if($status==5){
			$this->db->join('tb_foto', 'tb_foto.id_album=tb_album.id_album');
			$this->db->order_by('tb_foto.id_gallery','DESC');
			$this->db->limit(9);
		}	
		return $this->db->get();
	}
	
	public function kategori_produk(){
		$this->db->from('tb_kategori_produk');
		return $this->db->get();
	}	
	
	public function hubungi(){
		return $this->db->get('tb_kontak');
	}

	public function simpan_kontak($data){
		$this->db->insert('form_kontak', $data);
	}
	
	public function terbaru($limit){
		$this->db->limit($limit);
		$this->db->order_by('id_detail', 'DESC');
		return $this->db->get('tb_produk');
	}
	
	public function album($status){
		return $this->db->where('status_album',$status)
						->get('tb_album');
	}
	
	public function foto($status){
		return $this->db->join('tb_album a','a.id_album=f.id_album')
						->where('a.status_album',$status)
						->get('tb_foto f');
	}
	
	public function foto_index($limit){
		return $this->db->join('tb_album a','a.id_album=f.id_album')
						->where('a.status_album',0)
						->limit($limit)
						->get('tb_foto f');
	}

	public function kamar($limit)
	{
		$this->db->join('tm_gambar_kamar gk','k.id_kamar=gk.id_kamar')
						->where('gk.status_gambar_kamar','1');
		if ($limit!=0) {
			$this->db->limit($limit);
		}
		 return $this->db->order_by('k.id_kamar','DESC')
		 				 ->get('tm_kamar k');
	}

	public function kamar_rand($id)
	{
		return $this->db->join('tm_gambar_kamar gk','k.id_kamar=gk.id_kamar')
						->where('gk.status_gambar_kamar','1')
						->where('k.id_kamar !=',$id)
						->limit(3)
						->order_by('k.id_kamar','RAND')
						->from('tm_kamar k')
						->get();
	}

	public function kamar_id($id)
	{
		return $this->db->join('tm_gambar_kamar gk','k.id_kamar=gk.id_kamar')
						->where('gk.status_gambar_kamar','1')
						->where('k.id_kamar',$id)
						->from('tm_kamar k')
						->get();
	}
	
	public function gambar_kamar_id($id){
		return $this->db->where('id_kamar',$id)
						->where('status_gambar_kamar','1')
						->get('tm_gambar_kamar');
	}
	
	public function fasilitas($limit){
		$this->db->where('status_fasilitas',1)
						->order_by('id_fasilitas','DESC');

		if ($limit!=0) {
			$this->db->limit($limit);
		}
		return $this->db->get('tm_fasilitas');
	}
	public function getid_fasilitas($id,$order)
	{
		return $this->db->join('td_detail_fasilitas df','df.id_fasilitas=f.id_fasilitas')
		 				->where('df.id_kamar',$id)
		 				->where('f.status_fasilitas',1)
		 				->limit(3)
		 				->order_by('f.id_fasilitas',$order)
		 				->get('tm_fasilitas f');			
	}
	/////------------------------reservasi
	public function get_id_kp()
	{
		$this->db->select('id_kpesan')
				 ->order_by('id_kpesan','DESC')
				 ->limit(1);
		return $this->db->get('tk_pesan');
	}
	public function add($tabel,$data)
	{
		return $this->db->insert($tabel,$data);
	}
	public function hapus($tabel,$id)
	{
		return $this->db->delete($tabel,$id);
	}
	public function list_keranjang($idk)
	{
		return $this->db->join('tk_det_pesan dp','dp.id_kpesan=p.id_kpesan')
						->join('tm_kamar tk','tk.id_kamar=dp.id_kamar')
						->get('tk_pesan p');
	}
}

/* End of file modeltoyota.php */
/* Location: ./application/models/modeltoyota.php */