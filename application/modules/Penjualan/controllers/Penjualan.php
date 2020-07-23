<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Penjualan extends MY_Controller {
	function __construct()
	{
		parent::__construct();
		$this->load->model('M_penjualan','pen');
		$this->load->helper('form');
		$this->load->helper('url');
	}
	public function index()
	{
		$data['penjualan'] = $this->pen->semua_penjualan()->result_array();
		$data['sub_title'] = 'Data Penjualan';
		$data['title'] = 'Manajemen Penjualan';
		$data['modal_title'] = 'Tambah Data Penjualan';
		$data['content_view'] = 'penjualan/data_penjualan';
		$this->template->template_admin($data);
	}
	function tambah()
		{ 	
			$id_lapkeu = 'LAPKEU' . rand(0, 1000);
			$produk = $this->input->post('produk');
			$tahun = $this->input->post('tahun');
			$unit = $this->input->post('unit');
			$harga = $this->input->post('harga');
			$biaya_variabel = $this->input->post('biaya_variabel');
			$biaya_tetap = $this->input->post('biaya_tetap');
			$mc = $this->input->post('mc');

			$params = array(
				'id_lapkeu'			=> $id_lapkeu,
				'produk'			=> $produk,
				'tahun'				=> $tahun,
				'unit'				=> $unit,
				'harga'				=> $harga,
				'total_penjualan'	=> $unit*$harga,
				'biaya_variabel'	=> $biaya_variabel,
				'biaya_tetap'		=> $biaya_tetap,
				'mc'				=> $mc,
				
			);
			$this->pen->tambah_data($params,'lapkeu');
			redirect('penjualan');
		}
	public function hitungbep($id_lapkeu){
		$where = array('id_lapkeu' => $id_lapkeu);
		$data['penjualan'] = $this->pen->edit_data($where,'lapkeu');
		$data['sub_title'] = 'Hitung Rasio Margin Kontribusi, BEP (/unit), dan BEP (Rp)';
		$data['title'] = 'Manajemen buku';
		$data['content_view'] = 'penjualan/hitungbep';
		$this->template->template_admin($data);
	}
	public function hitung($id_lapkeu){
		$params = array(
			'id_lapkeu'			=> $this->input->post('id_lapkeu'),
			'rmc'				=> $this->input->post('rmc'),
			'bep_u'				=> $this->input->post('bep_u'),
			'bep_rp'			=> $this->input->post('bep_rp'),
		);
		$where = array('id_lapkeu'=>$id_lapkeu);
		$this->pen->update_data($where,$params,'lapkeu');
		
		redirect('penjualan','refresh');
	}
	public function ubah($id_lapkeu){
		$where = array('id_lapkeu' => $id_lapkeu);
		$data['penjualan'] = $this->pen->edit_data($where,'lapkeu');
		$data['sub_title'] = 'Ubah Data Penjualan';
		$data['title'] = 'Manajemen buku';
		$data['content_view'] = 'penjualan/ubah';
		$this->template->template_admin($data);
	}
	function update($id_lapkeu = NULL)
	{
			$id_lapkeu = $this->input->post('id_lapkeu');
			$produk = $this->input->post('produk');
			$tahun = $this->input->post('tahun');
			$unit = $this->input->post('unit');
			$harga = $this->input->post('harga');
			$biaya_variabel = $this->input->post('biaya_variabel');
			$biaya_tetap = $this->input->post('biaya_tetap');
			$mc = $this->input->post('mc');

			$params = array(
				'id_lapkeu'			=> $id_lapkeu,
				'produk'			=> $produk,
				'tahun'				=> $tahun,
				'unit'				=> $unit,
				'harga'				=> $harga,
				'total_penjualan'	=> $unit*$harga,
				'biaya_variabel'	=> $biaya_variabel,
				'biaya_tetap'		=> $biaya_tetap,
				'mc'				=> $mc,
				'rmc'				=> ($mc/($unit*$harga)*100),
				'bep_u'				=> ($biaya_tetap / ($harga * ($mc/($unit*$harga)))),
				'bep_rp'			=> ($biaya_tetap / ($mc/($unit*$harga))),
			);
		$where = array('id_lapkeu'=>$id_lapkeu);
		$this->pen->update_data($where,$params,'lapkeu');
		
		redirect('penjualan','refresh');
		
	}
	function hapus($id_lapkeu)
	{
		$penjualan = $this->pen->ambil($id_lapkeu);
	
			// cek buku ada atau tidak
			if(isset($penjualan['id_lapkeu']))	
			{
				$this->pen->hapus($id_lapkeu);
				redirect('penjualan');
			}
			else
				show_error('Data penjualan yang ingin dihapus tidak ada.');
	}
}
