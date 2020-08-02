<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Penjualan extends MY_Controller {
	function __construct()
	{
		parent::__construct();
		$this->load->model('M_penjualan','pen');
		$this->load->helper('form');
		$this->load->helper('url');
		$this->load->library('form_validation');
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
			if($this->input->is_ajax_request()){
				$this->form_validation->set_rules('produk', 'Produk', 'required');
				$this->form_validation->set_rules('tahun', 'Tahun', 'required');
				$this->form_validation->set_rules('harga', 'Harga', 'required');
				$this->form_validation->set_rules('unit', 'Unit', 'required');
				$this->form_validation->set_rules('biaya_variabel', 'Biaya Variabel', 'required');
				$this->form_validation->set_rules('biaya_tetap', 'Biaya Tetap', 'required');
				$this->form_validation->set_rules('mc', 'Margin Kontribusi', 'required');
				
				if ($this->form_validation->run() == FALSE)
                {
                        $data = array('response' => 'error', 'message'=>validation_errors());
                }
                else
                {
					$ajax_data = $this->input->post();
					if($this->pen->tambah_data($ajax_data)){
						$data = array(
							'response' => 'success', 'message'=>'Data penjualan telah ditambahkan');
					}else{
						$data = array('response' => 'success', 'message'=>'Data penjualan gagal ditambahkan');
					}
					
                }
			
			}else{
				echo "No direct script access allowed";
			}
			echo json_encode($data);
			/*$id_lapkeu = 'LAPKEU' . rand(0, 1000);
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
			echo json_encode(array("status" => true));
			//redirect('penjualan');*/
		}
	public function hitungbep($id_lapkeu){
		$where = array('id_lapkeu' => $id_lapkeu);
		$data['penjualan'] = $this->pen->edit_data($where,'lapkeu');
		$data['sub_title'] = 'Hitung Rasio Margin Kontribusi, BEP (/unit), dan BEP (Rp)';
		$data['title'] = 'Manajemen buku';
		$data['content_view'] = 'penjualan/hitungbep';
		$this->template->template_admin($data);
	}
	public function ajax_buat($id_lapkeu)
	{
		$data = $this->pen->get_data($id_lapkeu);
		echo json_encode($data);
	}
	public function detail($id_lapkeu){

// check if the dokter exists before trying to edit it
		//$where = array('id_lapkeu' => $id_lapkeu);
		$data['penjualan'] = $this->pen->get_data($id_lapkeu);

		if(isset($data['penjualan']['id_lapkeu']))
		{
			$this->load->library('form_validation');
			$this->form_validation->set_rules('laba_bersih','Laba Bersih');

			if($this->form_validation->run())     
			{   
				$params = array(
					'laba_bersih'				=> $this->input->post('laba_bersih'),
				);
				
				$this->pen->update_laporan($id_lapkeu,$params);           
				redirect('penjualan/detail');
			}
			else
			{
				$where = array('id_lapkeu' => $id_lapkeu);
				$data['penjualan'] = $this->pen->edit_data($where,'lapkeu');
				$data['sub_title'] = 'Detail Penjualan';
				$data['title'] = 'Detail Penjualan';
				$data['content_view'] = 'penjualan/detail';
				$this->template->template_admin($data);
			}
		}
	}
	
	public function hitung($id_lapkeu){
		$params = array(
			'id_lapkeu'			=> $this->input->post('id_lapkeu'),
			'mos'				=> $this->input->post('mos'),
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
	function rencana($id_lapkeu)
	{
		$where = array('id_lapkeu' => $id_lapkeu);
		$data['penjualan'] = $this->pen->edit_data($where,'lapkeu');
		$data['sub_title'] = 'Rencana Penjualan';
		$data['title'] = 'Rencana Penjualan';
		$data['content_view'] = 'penjualan/rencana';
		$this->template->template_admin($data);
	}
	function buat_rencana($id_lapkeu = NULL)
	{
		$params = array(
			'laba_bersih'			=> $this->input->post('laba_bersih')
		);
		$where = array('id_lapkeu'=>$id_lapkeu);
		$this->pen->update_data($where,$params,'lapkeu');
		
		redirect('penjualan/detail/'.$id_lapkeu);
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
				'mos'				=> (($unit*$harga) - (($biaya_tetap / ($mc/($unit*$harga))))),
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
	// AJAX
	
}
