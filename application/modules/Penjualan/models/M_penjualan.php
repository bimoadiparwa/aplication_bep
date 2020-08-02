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
	  function tambah_data($data)
	  {
		return $this->db->insert('lapkeu',$data);
	}
	  function edit_data($where,$table)
  {
  	return $this->db->get_where($table,$where)->row_array();
  }
  function ambil_data($where,$table)
  {
  	return $this->db->get_where($table,$where)->row_array();
  }
  public function data($id_lapkeu){
	  $this->db->select("*");
	  $this->db->from("lapkeu");
	  $this->db->where("id_lapkeu", $id_lapkeu);
	  $query = $this->db->get()->row();
	  
  }
  function update_data($where,$params,$table)
  {		
	  	$this->db->where($where);
	  	$this->db->set($params);
		return $this->db->update($table);
	}
	function update_laporan($id_lapkeu,$params)
    {
        $this->db->where('id_lapkeu',$id_lapkeu);
        return $this->db->update('lapkeu',$params);
    }
	function get_data($id_lapkeu)
    {
        return $this->db->get_where('lapkeu',array('id_lapkeu'=>$id_lapkeu))->row_array();
    }
	function ambil($id_lapkeu)
	{
		return $this->db->get_where('lapkeu',array('id_lapkeu'=>$id_lapkeu))->row_array();
	}
	function hapus($id_lapkeu)
	{
		return $this->db->delete('lapkeu',array('id_lapkeu'=>$id_lapkeu));
	}
	function add_data($data)
	{
		$this->db->insert('lapkeu',$data);
		return $this->db->insert_id();
	}
}