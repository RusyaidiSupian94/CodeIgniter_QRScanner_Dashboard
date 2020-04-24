<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth_model extends CI_Model
{

  function __construct()
  {
    parent::__construct();
    $this->load->database();
  }

  public function getAllUsers()
  {
    $query = $this->db->get('emp_tbl');
    return $query->result();
  }

  public function insert($emp)
  {
    if (!empty($emp)) {
      if (!array_key_exists("created", $emp)) {
        $emp['created'] = date("Y-m-d H:i:s");
      }
      if (!array_key_exists("modified", $emp)) {
        $emp['modified'] = date("Y-m-d H:i:s");
      }

      $this->db->insert('emp_tbl', $emp);
      //return $this->db->insert('emp_tbl',$emp);
      //return $insert?true:false;
      // return $this->db->insert();
    }
    //return false;
    return $this->db->insert_id();
  }

  // public function insert($emp){
  //   $this->db->insert('emp_tbl', $emp);
  //   return $this->db->insert_id(); 
  // }

  public function getUser($id_emp)
  {
    $query = $this->db->get_where('emp_tbl', array('id_emp' => $id_emp));
    return $query->row_array();
  }

  public function activate($data, $id_emp)
  {
    $this->db->where('emp_tbl.id_emp', $id_emp);
    return $this->db->update('emp_tbl', $data);
  }


  /*
     * get rows from the users table
     */
  function getRows($params = array())
  {
    $this->db->select('*');
    $this->db->from('emp_tbl');

    //fetch data by conditions
    if (array_key_exists("conditions", $params)) {
      foreach ($params['conditions'] as $key => $value) {
        $this->db->where($key, $value);
      }
    }

    if (array_key_exists("id_emp", $params)) {
      $this->db->where('id_emp', $params['id_emp']);
      $query = $this->db->get();
      $result = $query->row_array();
    } else {
      //set start and limit
      if (array_key_exists("start", $params) && array_key_exists("limit", $params)) {
        $this->db->limit($params['limit'], $params['start']);
      } elseif (!array_key_exists("start", $params) && array_key_exists("limit", $params)) {
        $this->db->limit($params['limit']);
      }
      $query = $this->db->get();
      if (array_key_exists("returnType", $params) && $params['returnType'] == 'count') {
        $result = $query->num_rows();
      } elseif (array_key_exists("returnType", $params) && $params['returnType'] == 'single') {
        $result = ($query->num_rows() > 0) ? $query->row_array() : FALSE;
      } else {
        $result = ($query->num_rows() > 0) ? $query->result_array() : FALSE;
      }
    }

    //return fetched data
    return $result;
  }
}
