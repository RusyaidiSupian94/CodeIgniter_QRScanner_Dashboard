<?php

/**
* 
*/
class Login_model extends CI_model
{

	function can_login($username, $password)
	{
		$this->db->where('username', $username);
		$this->db->where('password', $password);
		$query = $this->db->get('account');

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
		$this->db->insert("amd", $data);
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
		$query = $this->db->get("account");
		return $query;
	}

	function fetch_single_data($username)
	{
		$this->db->where('username', $username);
		$query = $this->db->get('account');
		return $query;
	}

	function fetch_userdata($username = null)
	{
		if($username)
		{
		$sql = "SELECT * FROM account WHERE username = ?";
		$query = $this->db->query($sql, array($username));
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