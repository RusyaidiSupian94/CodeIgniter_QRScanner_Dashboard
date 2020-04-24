<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Crud extends CI_Model{


    function getRows($pakej = "golden"){
        $this->db->select('*');
        $this->db->from('cust_data');
        $this->db->where('pakej',$pakej);

        $query = $this->db->get();
        $result = ($query->num_rows() > 0)?$query->result_array():FALSE;
        return $result;
    }

    function getRows2($pakej = "silver"){
        $this->db->select('*');
        $this->db->from('cust_data');
        $this->db->where('pakej',$pakej);

        $query = $this->db->get();
        $result = ($query->num_rows() > 0)?$query->result_array():FALSE;
        return $result;
    }

    function getRows3($pakej = "crystal"){
        $this->db->select('*');
        $this->db->from('cust_data');
        $this->db->where('pakej',$pakej);

        $query = $this->db->get();
        $result = ($query->num_rows() > 0)?$query->result_array():FALSE;
        return $result;
    }

    function getRows4($pakej = "bronze"){
        $this->db->select('*');
        $this->db->from('cust_data');
        $this->db->where('pakej',$pakej);

        $query = $this->db->get();
        $result = ($query->num_rows() > 0)?$query->result_array():FALSE;
        return $result;
    }

    function getCount() {//this to count the number of data 
        $this->db->select('pakej');
        $this->db->from('cust_data');
        $this->db->where('pakej = "bronze"');
        $result = $this->db->count_all_results();
        echo $result;
    } 
    function getCounthadir() {//this to count the number of data 
        $this->db->select('pakej');
        $this->db->from('cust_data');
        $this->db->where('pakej = "bronze" and status="active"');
        $result = $this->db->count_all_results();
        echo $result;
    } 

    //////terkini/////////
    
    function count_hadir(){
        $this->db->select('*');
        $this->db->from('cust_data');
        $this->db->where('status = "active"');
        $result = $this->db->count_all_results();
        echo $result;
    }
    function count(){
        $this->db->select('*');
        $this->db->from('cust_data');
        //$this->db->where('status = "active"');
        $result = $this->db->count_all_results();
        echo $result;
    }
    function count_male(){
        $this->db->select('*');
        $this->db->from('cust_data');
        $this->db->where('gender = "male"');
        $result = $this->db->count_all_results();
        echo $result;
    }
    function count_female(){
        $this->db->select('*');
        $this->db->from('cust_data');
        $this->db->where('gender = "female"');
        $result = $this->db->count_all_results();
        echo $result;
    }

    ///syarikat status
    function count_sdn(){
        $this->db->select('*');
        $this->db->from('cust_data');
        $this->db->where('company_status = "SDN BHD"');
        $result = $this->db->count_all_results();
        echo $result;
    }

    function count_ent(){
        $this->db->select('*');
        $this->db->from('cust_data');
        $this->db->where('company_status = "Enterprise"');
        $result = $this->db->count_all_results();
        echo $result;
    }

    function count_ngo(){
        $this->db->select('*');
        $this->db->from('cust_data');
        $this->db->where('company_status = "NGO"');
        $result = $this->db->count_all_results();
        echo $result;
    }
    function count_belomdaftar(){
        $this->db->select('*');
        $this->db->from('cust_data');
        $this->db->where('company_status = "Belum daftar"');
        $result = $this->db->count_all_results();
        echo $result;
    }

    ///status pekerja
    function count_pekerja(){
        $this->db->select('*');
        $this->db->from('cust_data');
        $this->db->where('status_pekerjaan = "pekerja"');
        $result = $this->db->count_all_results();
        echo $result;
    }
    function count_majikan(){
        $this->db->select('*');
        $this->db->from('cust_data');
        $this->db->where('status_pekerjaan = "majikan"');
        $result = $this->db->count_all_results();
        echo $result;
    }
    function count_leader(){
        $this->db->select('*');
        $this->db->from('cust_data');
        $this->db->where('status_pekerjaan = "Pengurus/Ketua Jabatan"');
        $result = $this->db->count_all_results();
        echo $result;
    }

    ///sebab hadir program byond

    function count_problem(){
        $this->db->select('*');
        $this->db->from('cust_data');
        $this->db->where('intention = "Menyelesaikan Masalah Pengurusan"');
        $result = $this->db->count_all_results();
        echo $result;
    }
    function count_upsale(){
        $this->db->select('*');
        $this->db->from('cust_data');
        $this->db->where('intention = "menaikkan jualan syarikat"');
        $result = $this->db->count_all_results();
        echo $result;
    }
    function count_networking(){
        $this->db->select('*');
        $this->db->from('cust_data');
        $this->db->where('intention = "menambah jaringan(networking)"');
        $result = $this->db->count_all_results();
        echo $result;
    }
    function count_abdulbasit(){
        $this->db->select('*');
        $this->db->from('cust_data');
        $this->db->where('intention = "sesi bersama tuan basit"');
        $result = $this->db->count_all_results();
        echo $result;
    }

    /////industri perniagaan

    function count_fesyen(){
        $this->db->select('*');
        $this->db->from('cust_data');
        $this->db->where('industri = "Fesyen"');
        $result = $this->db->count_all_results();
        echo $result;
    }
    function count_kosmetik(){
        $this->db->select('*');
        $this->db->from('cust_data');
        $this->db->where('industri = "Kosmetic"');
        $result = $this->db->count_all_results();
        echo $result;
    }
    function count_makanan(){
        $this->db->select('*');
        $this->db->from('cust_data');
        $this->db->where('industri = "Makan"');
        $result = $this->db->count_all_results();
        echo $result;
    }
    function count_industNGO(){
        $this->db->select('*');
        $this->db->from('cust_data');
        $this->db->where('industri = "NGO"');
        $result = $this->db->count_all_results();
        echo $result;
    }
    function count_pembinaan(){
        $this->db->select('*');
        $this->db->from('cust_data');
        $this->db->where('industri = "Pembinaan"');
        $result = $this->db->count_all_results();
        echo $result;
    }
    function count_pemasaran(){
        $this->db->select('*');
        $this->db->from('cust_data');
        $this->db->where('industri = "Pemasaran"');
        $result = $this->db->count_all_results();
        echo $result;
    }
    function count_pengiklanan(){
        $this->db->select('*');
        $this->db->from('cust_data');
        $this->db->where('industri = "Periklanan"');
        $result = $this->db->count_all_results();
        echo $result;
    }
    function count_pertanian(){
        $this->db->select('*');
        $this->db->from('cust_data');
        $this->db->where('industri = "Pertanian"');
        $result = $this->db->count_all_results();
        echo $result;
    }
    function count_pendidikan(){
        $this->db->select('*');
        $this->db->from('cust_data');
        $this->db->where('industri = "Pendidikan"');
        $result = $this->db->count_all_results();
        echo $result;
    }
    function count_peruncit(){
        $this->db->select('*');
        $this->db->from('cust_data');
        $this->db->where('industri = "Peruncitan"');
        $result = $this->db->count_all_results();
        echo $result;
    }
    function count_service(){
        $this->db->select('*');
        $this->db->from('cust_data');
        $this->db->where('industri = "services"');
        $result = $this->db->count_all_results();
        echo $result;
    }
    function count_lain(){
        $this->db->select('*');
        $this->db->from('cust_data');
        $this->db->where('industri = "lain-lain"');
        $result = $this->db->count_all_results();
        echo $result;
    }

    ////negeri

    function count_johor(){
        $this->db->select('*');
        $this->db->from('cust_data');
        $this->db->where('negeri = "johor"');
        $result = $this->db->count_all_results();
        echo $result;
    }
    function count_kedah(){
        $this->db->select('*');
        $this->db->from('cust_data');
        $this->db->where('negeri = "kedah"');
        $result = $this->db->count_all_results();
        echo $result;
    }
    function count_kelantan(){
        $this->db->select('*');
        $this->db->from('cust_data');
        $this->db->where('negeri = "kelantan"');
        $result = $this->db->count_all_results();
        echo $result;
    }
    function count_melaka(){
        $this->db->select('*');
        $this->db->from('cust_data');
        $this->db->where('negeri = "melaka"');
        $result = $this->db->count_all_results();
        echo $result;
    }
    function count_n9(){
        $this->db->select('*');
        $this->db->from('cust_data');
        $this->db->where('negeri = "Negeri Sembilan"');
        $result = $this->db->count_all_results();
        echo $result;
    }
    function count_pahang(){
        $this->db->select('*');
        $this->db->from('cust_data');
        $this->db->where('negeri = "pahang"');
        $result = $this->db->count_all_results();
        echo $result;
    }
    function count_perak(){
        $this->db->select('*');
        $this->db->from('cust_data');
        $this->db->where('negeri = "perak"');
        $result = $this->db->count_all_results();
        echo $result;
    }
    function count_perlis(){
        $this->db->select('*');
        $this->db->from('cust_data');
        $this->db->where('negeri = "perlis"');
        $result = $this->db->count_all_results();
        echo $result;
    }
    function count_pp(){
        $this->db->select('*');
        $this->db->from('cust_data');
        $this->db->where('negeri = "pulau pinang"');
        $result = $this->db->count_all_results();
        echo $result;
    }
    function count_sabah(){
        $this->db->select('*');
        $this->db->from('cust_data');
        $this->db->where('negeri = "sabah"');
        $result = $this->db->count_all_results();
        echo $result;
    }
    function count_sarawak(){
        $this->db->select('*');
        $this->db->from('cust_data');
        $this->db->where('negeri = "sarawak"');
        $result = $this->db->count_all_results();
        echo $result;
    }
    function count_selangor(){
        $this->db->select('*');
        $this->db->from('cust_data');
        $this->db->where('negeri = "selangor"');
        $result = $this->db->count_all_results();
        echo $result;
    }
    function count_ganu(){
        $this->db->select('*');
        $this->db->from('cust_data');
        $this->db->where('negeri = "terengganu"');
        $result = $this->db->count_all_results();
        echo $result;
    }
    function count_kl(){
        $this->db->select('*');
        $this->db->from('cust_data');
        $this->db->where('negeri = "Wilayah Kuala Lumpur"');
        $result = $this->db->count_all_results();
        echo $result;
    }
    function count_labuan(){
        $this->db->select('*');
        $this->db->from('cust_data');
        $this->db->where('negeri = "WP Labuan"');
        $result = $this->db->count_all_results();
        echo $result;
    }
    function count_negerilain(){
        $this->db->select('*');
        $this->db->from('cust_data');
        $this->db->where('negeri = "lain-lain"');
        $result = $this->db->count_all_results();
        echo $result;
    }



    /////jumlah pendapatan

    function count_0k(){
        $this->db->select('*');
        $this->db->from('cust_data');
        $this->db->where('jumlah_pendapatan >=0  and jumlah_pendapatan <10000');
        $result = $this->db->count_all_results();
        echo $result;
    }
    function count_10k(){
        $this->db->select('*');
        $this->db->from('cust_data');
        $this->db->where('jumlah_pendapatan >=10000  and jumlah_pendapatan < 30000');
        $result = $this->db->count_all_results();
        echo $result;
    }
    function count_30k(){
        $this->db->select('*');
        $this->db->from('cust_data');
        $this->db->where('jumlah_pendapatan >=30000  and jumlah_pendapatan < 50000');
        $result = $this->db->count_all_results();
        echo $result;
    }
    function count_50k(){
        $this->db->select('*');
        $this->db->from('cust_data');
        $this->db->where('jumlah_pendapatan >=50000  and jumlah_pendapatan < 100000 ');
        $result = $this->db->count_all_results();
        echo $result;
    }
    function count_100k(){
        $this->db->select('*');
        $this->db->from('cust_data');
        $this->db->where('jumlah_pendapatan >=100000  and jumlah_pendapatan < 500000 ');
        $result = $this->db->count_all_results();
        echo $result;
    }
    function count_500k(){
        $this->db->select('*');
        $this->db->from('cust_data');
        $this->db->where('jumlah_pendapatan >= 500000');
        $result = $this->db->count_all_results();
        echo $result;
    }

}