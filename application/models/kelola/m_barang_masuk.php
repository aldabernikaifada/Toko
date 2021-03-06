<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_barang_masuk extends CI_Model {

	public function getData($value='')
	{
		$this->db->from('barang_masuk ma');
		$this->db->order_by('ma.id', 'desc');
		return $this->db->get();
	}

	public function insertData($data='')
	{
		
        $this->db->insert('barang_masuk',$data);
       
	}

	public function updateData($data='')
	{
		 $this->db->where('id',$data['id']);
            $this->db->update('barang_masuk',$data);
	}

	public function deleteData($id='')
	{
		$this->db->where('id', $id);
        $this->db->delete('barang_masuk');
	}

}

/* End of file m_barang_masuk.php */
/* Location: ./application/models/kelola/m_barang_masuk.php */