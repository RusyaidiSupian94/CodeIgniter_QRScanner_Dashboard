<?php
class Chart_model extends CI_Model{
 
  //get data from database
  function get_data(){
      // $this->db->select('count(*),DATE_FORMAT(created,"%b") as Month,IFNULL(COUNT(name),  0) as count');///,MONTHNAME(created)
      // $this->db->from('amd');
      // $this->db->where('name is null or name is not null and status = "active"');
      // $this->db->group_by('Month');
      // $this->db->order_by('created');
    $this->db->select('table_name, table_rows');
    $this->db->from('INFORMATION_SCHEMA.TABLES');
    $this->db->where('TABLE_SCHEMA = "nakdaftar"');
    $this->db->having('TABLE_NAME !="cust_data2" and TABLE_NAME !="emp_tbl" and TABLE_NAME !="qruser" and TABLE_NAME !="mmh" and TABLE_NAME !="mmd" and TABLE_NAME !="mmf" and TABLE_NAME !="mcm"');
    $result = $this->db->get();
    return $result;
  }

    /////total alll
  function daftar(){
    $query = $this->db->query('select sum(count) as total
      from (
        select count(no_siri) as count from amd 
        union all 
        select count(no_siri) as count from smf 
        union all 
        select count(no_siri) as count from smh
        union all
        select count(no_siri) as count from rcm
      ) as tbl');

    $row=$query->row();
    echo $row->total;
  }
  function yghadir(){ /////yg datang seminar
    $query = $this->db->query('select sum(count) as total
      from (
        select count(no_siri) as count from amd where kehadiran ="1" 
        union all 
        select count(no_siri) as count from smf where kehadiran ="1" 
        union all 
        select count(no_siri) as count from smh where kehadiran ="1"
        union all 
        select count(no_siri) as count from rcm where kehadiran ="1"
      ) as tbl');

    $row=$query->row();
    echo $row->total;
  }
  function ygsahkan(){ ////sahkan kehadiran
    $query = $this->db->query('select sum(count) as total
      from (
        select count(no_siri) as count from amd where income !="0" and income !="NA" 
        union all 
        select count(no_siri) as count from smf where income !="0" and income !="NA" 
        union all 
        select count(no_siri) as count from smh where income !="0" and income !="NA"
        union all 
        select count(no_siri) as count from rcm where income !="0" and income !="NA"
      ) as tbl');

    $row=$query->row();
    echo $row->total;
  }

  ////////////////////////new user//////////can be alter///////
  function newuser(){
    $this->db->select('count(*)');
    $this->db->from('amd');
    $this->db->where('MONTH(created)<=5 and YEAR(created)=2019 and industry!="NA"');
    $result = $this->db->count_all_results(); 
    echo $result;///////////////data asing yang ni
  }



  /////////////////////////////////////////////amd///////////////////////////////////////////

  function daftaramd(){
    $this->db->select('count(*)');
    $this->db->from('amd');
    //$this->db->where('gender = "L"');
    $result = $this->db->count_all_results();
    echo $result;
  }
  function yghadiramd(){ /////yg datang seminar
    $this->db->select('count(*)');
    $this->db->from('amd');
    $this->db->where('kehadiran = "1" and income>0');
    $result = $this->db->count_all_results();
    echo $result;
  }
  function ygsahkanamd(){ ////sahkan kehadiran
    $this->db->select('count(*)');
    $this->db->from('amd');
    $this->db->where('income>0');
    $result = $this->db->count_all_results();
    echo $result;
  }

    /////////////////////////////////////////////rcm///////////////////////////////////////////

  function daftarrcm(){
    $this->db->select('count(*)');
    $this->db->from('rcm');
    //$this->db->where('gender = "L"');
    $result = $this->db->count_all_results();
    echo $result;
  }
  function yghadirrcm(){ /////yg datang seminar
    $this->db->select('count(*)');
    $this->db->from('rcm');
    $this->db->where('kehadiran = "1" and income>0');
    $result = $this->db->count_all_results();
    echo $result;
  }
  function ygsahkanrcm(){ ////sahkan kehadiran
    $this->db->select('count(*)');
    $this->db->from('rcm');
    $this->db->where('income>0');
    $result = $this->db->count_all_results();
    echo $result;
  }


    /////////////////////////////////////////////smf///////////////////////////////////////////

  function daftarsmf(){
    $this->db->select('count(*)');
    $this->db->from('smf');
    //$this->db->where('gender = "L"');
    $result = $this->db->count_all_results();
    echo $result;
  }
  function yghadirsmf(){ /////yg datang seminar
    $this->db->select('count(*)');
    $this->db->from('smf');
    $this->db->where('kehadiran = "1" and income>0');
    $result = $this->db->count_all_results();
    echo $result;
  }
  function ygsahkansmf(){ ////sahkan kehadiran
    $this->db->select('count(*)');
    $this->db->from('smf');
    $this->db->where('income>0');
    $result = $this->db->count_all_results();
    echo $result;
  }


  /////////////////////////////////////////////smh///////////////////////////////////////////

  function daftarsmh(){
    $this->db->select('count(*)');
    $this->db->from('smh');
    //$this->db->where('gender = "L"');
    $result = $this->db->count_all_results();
    echo $result;
  }
  function yghadirsmh(){ /////yg datang seminar
    $this->db->select('count(*)');
    $this->db->from('smh');
    $this->db->where('kehadiran = "1" and income>0');
    $result = $this->db->count_all_results();
    echo $result;
  }
  function ygsahkansmh(){ ////sahkan kehadiran
    $this->db->select('count(*)');
    $this->db->from('smh');
    $this->db->where('income>0');
    $result = $this->db->count_all_results();
    echo $result;
  }
 
}


/////SELECT count(*) as count from cust_data where status="active" group by monthname(created) order by created;