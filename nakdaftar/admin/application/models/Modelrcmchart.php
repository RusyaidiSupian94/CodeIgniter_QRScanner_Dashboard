<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Modelrcmchart extends CI_Model{


    /////////pie chart for status company/////////
    function piedata(){
        $this->db->select('status,count(status) as total');
        $this->db->from('rcm');
        $this->db->group_by('status');
        $this->db->having('count(
            case 
              when status="SDN BHD" then "SDN BHD"
              when status="ENTERPRISE" then "ENTERPRISE"
              when status="NGO" then "NGO"
              when status="PLT" then "PLT"
              when status="BELUM DAFTAR" then "BELUM DAFTAR" else null end)>0');
        return $this->db->get()->result();
    }
    ///////////pie chart for working sql
    function piedataworking(){
        $this->db->select('working, count(working) as total');
        $this->db->from('rcm');
        $this->db->group_by('working');
        $this->db->having('count(CASE
             when working="MAJIKAN" then "MAJIKAN"
             when working="PEKERJA" then "PEKERJA"
             when working="PENGURUS/KETUA JABATAN" then "PENGURUS/KETUA JABATAN" else null end)');
        return $this->db->get()->result();
    }

    ///////////pie chart for industri sql
    function piedataindustry(){
        $this->db->select('industry, count(industry) as total');
        $this->db->from('rcm');
        $this->db->group_by('industry');
        // $this->db->having('count(CASE
        //      when working="MAJIKAN" then "MAJIKAN"
        //      when working="PEKERJA" then "PEKERJA"
        //      when working="PENGURUS/KETUA JABATAN" then "PENGURUS/KETUA JABATAN" else null end)');
        $this->db->having('industry !="" and industry !="NA"');
        return $this->db->get()->result();
    }

    ///////////pie chart for state sql
    function piedatastate(){
        $this->db->select('state, count(state) as total');
        $this->db->from('rcm');
        $this->db->group_by('state');
        // $this->db->having('count(CASE
        //      when working="MAJIKAN" then "MAJIKAN"
        //      when working="PEKERJA" then "PEKERJA"
        //      when working="PENGURUS/KETUA JABATAN" then "PENGURUS/KETUA JABATAN" else null end)');
        $this->db->having('state !="" and state !="NA"');
        return $this->db->get()->result();
    }

    ///////////pie chart for funnel sql
    function piedatafunnel(){
        $this->db->select('funnel, count(funnel) as total');
        $this->db->from('rcm');
        $this->db->group_by('funnel');
        // $this->db->having('count(CASE
        //      when working="MAJIKAN" then "MAJIKAN"
        //      when working="PEKERJA" then "PEKERJA"
        //      when working="PENGURUS/KETUA JABATAN" then "PENGURUS/KETUA JABATAN" else null end)');
        $this->db->having('funnel !="" and funnel !="NA"');
        return $this->db->get()->result();
    }

    ///////////pie chart for penglaman bisness sql
    // function piedataexp(){
    //     $this->db->select('experience, count(experience) as total');
    //     $this->db->from('rcm');
    //     $this->db->group_by('experience');
    //     // $this->db->having('count(CASE
    //     //      when working="MAJIKAN" then "MAJIKAN"
    //     //      when working="PEKERJA" then "PEKERJA"
    //     //      when working="PENGURUS/KETUA JABATAN" then "PENGURUS/KETUA JABATAN" else null end)');
    //     $this->db->having('experience !="" and experience !="NA"');
    //     return $this->db->get()->result();
    // }

    // ///////////pie chart for investment sql
    // function piedatainvest(){
    //     $this->db->select('investment, count(investment) as total');
    //     $this->db->from('rcm');
    //     $this->db->group_by('investment');
    //     // $this->db->having('count(CASE
    //     //      when working="MAJIKAN" then "MAJIKAN"
    //     //      when working="PEKERJA" then "PEKERJA"
    //     //      when working="PENGURUS/KETUA JABATAN" then "PENGURUS/KETUA JABATAN" else null end)');
    //     $this->db->having('investment !="" and investment !="NA"');
    //     return $this->db->get()->result();
    // }

    ///////////pie chart for income sql
    function piedataincome(){
        $this->db->select('income, count(income) as total');
        $this->db->from('rcm');
        $this->db->group_by('income');
        // $this->db->having('count(CASE
        //      when working="MAJIKAN" then "MAJIKAN"
        //      when working="PEKERJA" then "PEKERJA"
        //      when working="PENGURUS/KETUA JABATAN" then "PENGURUS/KETUA JABATAN" else null end)');
        $this->db->having('income !="" and income !="NA"');
        return $this->db->get()->result();
    }
}