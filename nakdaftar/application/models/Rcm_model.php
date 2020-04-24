<?php

/**
* 
*/
class Rcm_model extends CI_model
{

	function can_login($nric)
	{
		$this->db->select('*');
		$this->db->from('rcm');
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
		$this->db->insert("rcm", $data);
	}

	function check_email_available($email)
	{
		$this->db->where('email', $email);
		$query = $this->db->get('rcm');

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
		$query = $this->db->get('rcm');

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
		$query = $this->db->get("rcm");
		return $query;
	}

	function fetch_single_data($nric)
	{
		$this->db->where('nric', $nric);
		$query = $this->db->get('rcm');
		return $query;
	}

	function fetch_userdata($nric = null)
	{
		if($nric)
		{
		$sql = "SELECT * FROM rcm WHERE nric = ?";
		$query = $this->db->query($sql, array($nric));
		$result = $query->row_array();

		return $result;
		}
	}

	function update_userdata($data, $nric)
	{
		$this->db->where('nric',$nric);
		$this->db->update('rcm', $data);
		return true;
	}

	public function total_hadir()
	{
		$this->db->select('no_siri');
		$this->db->from('rcmhadir');
		return $this->db->count_all_results();
	}

	public function total_sah()
	{
		$this->db->select('gender');
		$this->db->from('rcm');

		$this->db->where('gender!=','NA');
		$this->db->where('gender!=',' ');
		echo $this->db->count_all_results();
	}

	public function total_peserta()
	{
		$this->db->select('no_siri');
		$this->db->from('rcm');
		return $this->db->count_all_results();
	}
}