<?php
class Chart_model extends CI_Model{
 
  //get data from database
  function get_data(){
      $this->db->select('count(*),DATE_FORMAT(created,"%b") as Month,IFNULL(COUNT(name),  0) as count');///,MONTHNAME(created)
      $this->db->from('cust_data');
      $this->db->where('name is null or name is not null and status = "active"');
      $this->db->group_by('Month');
      $this->db->order_by('created');
      $result = $this->db->get();
      return $result;
  }
 
}


/////SELECT count(*) as count from cust_data where status="active" group by monthname(created) order by created;