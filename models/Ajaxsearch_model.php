<?php
class Ajaxsearch_model extends CI_Model
{
	function fetch_data($query)
	{
		$this->db->select("*");
		$this->db->from("new");
		if($query != '')
		{
			$this->db->like('id', $query);
			$this->db->or_like('name', $query);
			$this->db->or_like('address', $query);
			$this->db->or_like('city', $query);
			$this->db->or_like('contact', $query);
			$this->db->or_like('date', $query);
		}
		$this->db->order_by('id', 'DESC');
		return $this->db->get();
	}
}
?>