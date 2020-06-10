<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class m_periode extends CI_Model {

	public function getData($value='')
	{
		$this->db->from('peminjaman_periode ma');
		$this->db->order_by('ma.id', 'desc');
		return $this->db->get();
	}

	public function insertData($data='')
	{
		
        $this->db->insert('peminjaman_periode',$data);
       
	}

	public function updateData($data='')
	{
		 $this->db->where('id',$data['id']);
            $this->db->update('peminjaman_periode',$data);
	}

	public function deleteData($id='')
	{
		$this->db->where('id', $id);
        $this->db->delete('peminjaman_periode');
	}

}

