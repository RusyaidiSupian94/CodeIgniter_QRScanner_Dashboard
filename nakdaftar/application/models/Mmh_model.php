<?php

/**
* 
*/
class Mmh_model extends CI_model
{

	function can_login($nric)
	{
		$this->db->select('nric');
		$this->db->from('mmh');
		$this->db->where('nric', $nric);
		$this->db->limit(1);

		$query = $this->db->get();

		if($query->num_rows() == 1)
		{
			return $query->result();
		}

		else
		{
			return false;
		}
	}

	function insert_data($data)
	{
		$this->db->insert("mmh", $data);
	}

	public function insert_data2($from,$data,$nric){
		//$this->db->where('nric',$nric);
 		$insert_data2=$this->db->update($from,$data)->where('nric',$nric);
 		return $insert_data2;
 	}

	function check_email_available($email)
	{
		$this->db->where('email', $email);
		$query = $this->db->get('mmh');

		if($query->num_rows() > 0)
		{
			return $query->result();
		}

		else
		{
			return $query->result();
		}
	}

	function check_data_available($income)
	{
		$this->db->where('income', $income);
		$query = $this->db->get('mmh');

		if($query->num_rows() > 0)
		{
			return $query->result();
		}

		else
		{
			return $query->result();
		}
	}

	function fetch_data()
	{
		
		$query = $this->db->get("mmh");
		return $query;
	}

	function fetch_single_data($nric)
	{
		$this->db->where('nric', $nric);
		$query = $this->db->get('mmh');
		return $query;
	}

	function fetch_userdata($nric = null)
	{
		if($nric)
		{
		$sql = "SELECT * FROM mmh WHERE nric = ?";
		$query = $this->db->query($sql, array($nric));
		$result = $query->row_array();

		return $result;
		}
	}

	function update_userdata($data, $nric)
	{	
		$this->db->where('nric',$nric);
		$this->db->update('mmh', $data);
		return true;
	}
	function save($data,$nric)
	{	
		$this->db->where('nric',$nric);
		$this->db->update('mmh', $data);
		return true;
	}

}