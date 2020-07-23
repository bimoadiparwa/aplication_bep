<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_penjualan extends CI_Model {
	
		function __construct()
		{
			parent::__construct();
		}
	  function semua_penjualan()
	  {
		$this->db->select('*');
		$this->db->from('lapkeu');
		return $this->db->get();
	  }
	  function tambah_data($params,$table)
	  {
		$this->db->insert($table,$params);
	}
	  function edit_data($where,$table)
  {
  	return $this->db->get_where($table,$where)->row_array();
  }
  function update_data($where,$params,$table)
  {		$this->db->set($params);
		return $this->db->update($table);
	}
	function ambil($id_lapkeu)
	{
		return $this->db->get_where('lapkeu',array('id_lapkeu'=>$id_lapkeu))->row_array();
	}
	function hapus($id_lapkeu)
	{
		return $this->db->delete('lapkeu',array('id_lapkeu'=>$id_lapkeu));
	}
}