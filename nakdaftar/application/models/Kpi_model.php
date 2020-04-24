<?php

/**
* 
*/
class Kpi_model extends CI_model
{

	function can_login($nric)
	{
		$this->db->where('nric', $nric);
		$query = $this->db->get('amd');

		if($query->num_rows()>0)
		{
			return true;
		}

		else
		{
			return false;
		}
	}

	function insert_data($data)
	{
		$this->db->insert("kpi", $data);
	}

	function check_email_available($email)
	{
		$this->db->where('email', $email);
		$query = $this->db->get('amd');

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
		$query = $this->db->get('amd');

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
		$query = $this->db->get("amd");
		return $query;
	}

	function fetch_single_data($nric)
	{
		$this->db->where('nric', $nric);
		$query = $this->db->get('amd');
		return $query;
	}

	function fetch_userdata($nric = null)
	{
		if($nric)
		{
		$sql = "SELECT * FROM amd WHERE nric = ?";
		$query = $this->db->query($sql, array($nric));
		$result = $query->row_array();

		return $result;
		}
	}

	function update_userdata($data, $nric)
	{
		$this->db->where('nric',$nric);
		$this->db->update('amd', $data);
		return true;
	}
}