<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Modelamd extends CI_Model{
////////////////////////////yang daftar////////////////
  function amddaftar(){
    $this->db->select('count(*)');
    $this->db->from('amd');
    //$this->db->where('gender = "L"');
    $result = $this->db->count_all_results();
    echo $result;
  }

  ////////////////////////////yang hadir////////////////
  function amdhadir(){
    $this->db->select('count(*)');
    $this->db->from('amd');
    $this->db->where('kehadiran = "1"');
    $result = $this->db->count_all_results();
    echo $result;
  }
////////////////////////////////////////////////////gender////////////
  function amdgenderL(){
    $this->db->select('count(*)');
    $this->db->from('amd');
    $this->db->where('gender = "L" OR gender = "LELAKI"');
    $result = $this->db->count_all_results();
    echo $result;
  }

  function amdgenderP(){
    $this->db->select('count(*)');
    $this->db->from('amd');
    $this->db->where('gender = "P" OR gender = "PEREMPUAN"');
    $result = $this->db->count_all_results();
    echo $result;
  }


///////////////////////////////////////////status syarikat
  function amdstatussdn(){
    $this->db->select('count(*)');
    $this->db->from('amd');
    $this->db->where('status = "SDN BHD"');
    $result = $this->db->count_all_results();
    echo $result;
  }

  function amdstatusenter(){
    $this->db->select('count(*)');
    $this->db->from('amd');
    $this->db->where('status = "ENTERPRISE"');
    $result = $this->db->count_all_results();
    echo $result;
  }

  function amdstatusngo(){
    $this->db->select('count(*)');
    $this->db->from('amd');
    $this->db->where('status = "NGO"');
    $result = $this->db->count_all_results();
    echo $result;
  }

  function amdstatusbelumdaftar(){
    $this->db->select('count(*)');
    $this->db->from('amd');
    $this->db->where('status = "BELUM DAFTAR"');
    $result = $this->db->count_all_results();
    echo $result;
  }

  function amdstatusplt(){
    $this->db->select('count(*)');
    $this->db->from('amd');
    $this->db->where('status = "PLT"');
    $result = $this->db->count_all_results();
    echo $result;
  }

  //////////////////////////////////////////////// status working//////
  function amdstatusmajikan(){
    $this->db->select('count(*)');
    $this->db->from('amd');
    $this->db->where('working = "MAJIKAN"');
    $result = $this->db->count_all_results();
    echo $result;
  }

  function amdstatuspekerja(){
    $this->db->select('count(*)');
    $this->db->from('amd');
    $this->db->where('working = "PEKERJA"');
    $result = $this->db->count_all_results();
    echo $result;
  }

  function amdstatuspengurus(){
    $this->db->select('count(*)');
    $this->db->from('amd');
    $this->db->where('working = "PENGURUS/KETUA JABATAN"');
    $result = $this->db->count_all_results();
    echo $result;
  }

  /////////////////////////////////////////industry////////////////
  function amdfesyen(){
    $this->db->select('count(*)');
    $this->db->from('amd');
    $this->db->where('industry = "FESYEN"');
    $result = $this->db->count_all_results();
    echo $result;
  }
  function amdkosmetik(){
    $this->db->select('count(*)');
    $this->db->from('amd');
    $this->db->where('industry = "KOSMETIK/KECANTIKAN"');
    $result = $this->db->count_all_results();
    echo $result;
  }
  function amdlain(){
    $this->db->select('count(*)');
    $this->db->from('amd');
    $this->db->where('industry = "LAIN-LAIN"');
    $result = $this->db->count_all_results();
    echo $result;
  }
  function amdmakanan(){
    $this->db->select('count(*)');
    $this->db->from('amd');
    $this->db->where('industry = "MAKANAN"');
    $result = $this->db->count_all_results();
    echo $result;
  }
  function amdngo(){
    $this->db->select('count(*)');
    $this->db->from('amd');
    $this->db->where('industry = "NGO"');
    $result = $this->db->count_all_results();
    echo $result;
  }
  function amdpembinaan(){
    $this->db->select('count(*)');
    $this->db->from('amd');
    $this->db->where('industry = "PEMBINAAN/KONTRAKTOR"');
    $result = $this->db->count_all_results();
    echo $result;
  }
  function amdpemasaran(){
    $this->db->select('count(*)');
    $this->db->from('amd');
    $this->db->where('industry = "PEMASARAN"');
    $result = $this->db->count_all_results();
    echo $result;
  }
  function amdpengiklanan(){
    $this->db->select('count(*)');
    $this->db->from('amd');
    $this->db->where('industry = "PENGIKLANAN"');
    $result = $this->db->count_all_results();
    echo $result;
  }
  function amdpertanian(){
    $this->db->select('count(*)');
    $this->db->from('amd');
    $this->db->where('industry = "PERTANIAN/PENTERNAKAN"');
    $result = $this->db->count_all_results();
    echo $result;
  }
  function amdpendidikan(){
    $this->db->select('count(*)');
    $this->db->from('amd');
    $this->db->where('industry = "PENDIDIKAN/SEMINAR"');
    $result = $this->db->count_all_results();
    echo $result;
  }
  function amdperuncitan(){
    $this->db->select('count(*)');
    $this->db->from('amd');
    $this->db->where('industry = "PERUNCITAN/PEMBORONG"');
    $result = $this->db->count_all_results();
    echo $result;
  }
  function amdservis(){
    $this->db->select('count(*)');
    $this->db->from('amd');
    $this->db->where('industry = "SERVIS"');
    $result = $this->db->count_all_results();
    echo $result;
  }

  //////////////////state/////////////////
  function amdjohor(){
    $this->db->select('count(*)');
    $this->db->from('amd');
    $this->db->where('state = "johor"');
    $result = $this->db->count_all_results();
    echo $result;
  }
  function amdkedah(){
    $this->db->select('count(*)');
    $this->db->from('amd');
    $this->db->where('state = "kedah"');
    $result = $this->db->count_all_results();
    echo $result;
  }
  function amdkelantan(){
    $this->db->select('count(*)');
    $this->db->from('amd');
    $this->db->where('state = "kelantan"');
    $result = $this->db->count_all_results();
    echo $result;
  }
  function amdmelaka(){
    $this->db->select('count(*)');
    $this->db->from('amd');
    $this->db->where('state = "melaka"');
    $result = $this->db->count_all_results();
    echo $result;
  }
  function amdn9(){
    $this->db->select('count(*)');
    $this->db->from('amd');
    $this->db->where('state = "NEGERI SEMBILAN"');
    $result = $this->db->count_all_results();
    echo $result;
  }
  function amdpahang(){
    $this->db->select('count(*)');
    $this->db->from('amd');
    $this->db->where('state = "PAHANG"');
    $result = $this->db->count_all_results();
    echo $result;
  }
  function amdperak(){
    $this->db->select('count(*)');
    $this->db->from('amd');
    $this->db->where('state = "PERAK"');
    $result = $this->db->count_all_results();
    echo $result;
  }
  function amdperlis(){
    $this->db->select('count(*)');
    $this->db->from('amd');
    $this->db->where('state = "PERLIS"');
    $result = $this->db->count_all_results();
    echo $result;
  }
  function amdpp(){
    $this->db->select('count(*)');
    $this->db->from('amd');
    $this->db->where('state = "PULAU PINANG"');
    $result = $this->db->count_all_results();
    echo $result;
  }
  function amdsabah(){
    $this->db->select('count(*)');
    $this->db->from('amd');
    $this->db->where('state = "SABAH"');
    $result = $this->db->count_all_results();
    echo $result;
  }
  function amdsarawak(){
    $this->db->select('count(*)');
    $this->db->from('amd');
    $this->db->where('state = "SARAWAK"');
    $result = $this->db->count_all_results();
    echo $result;
  }
  function amdselangor(){
    $this->db->select('count(*)');
    $this->db->from('amd');
    $this->db->where('state = "SELANGOR"');
    $result = $this->db->count_all_results();
    echo $result;
  }
  function amdtganu(){
    $this->db->select('count(*)');
    $this->db->from('amd');
    $this->db->where('state = "TERENGGANU"');
    $result = $this->db->count_all_results();
    echo $result;
  }
  function amdkl(){
    $this->db->select('count(*)');
    $this->db->from('amd');
    $this->db->where('state = "WP KUALA LUMPUR"');
    $result = $this->db->count_all_results();
    echo $result;
  }
  function amdlabuan(){
    $this->db->select('count(*)');
    $this->db->from('amd');
    $this->db->where('state = "WP LABUAN"');
    $result = $this->db->count_all_results();
    echo $result;
  }
  function amdlain2(){
    $this->db->select('count(*)');
    $this->db->from('amd');
    $this->db->where('state = "LAIN-LAIN"');
    $result = $this->db->count_all_results();
    echo $result;
  }

  ///////////////////////////////////funnel////////////////////////
  function amdfacebook(){
    $this->db->select('count(*)');
    $this->db->from('amd');
    $this->db->where('funnel = "FACEBOOK"');
    $result = $this->db->count_all_results();
    echo $result;
  }
  function amdwebsite(){
    $this->db->select('count(*)');
    $this->db->from('amd');
    $this->db->where('funnel = "LAMAN WEB"');
    $result = $this->db->count_all_results();
    echo $result;
  }
  function amdinsta(){
    $this->db->select('count(*)');
    $this->db->from('amd');
    $this->db->where('funnel = "INSTAGRAM"');
    $result = $this->db->count_all_results();
    echo $result;
  }
  function amdradio(){
    $this->db->select('count(*)');
    $this->db->from('amd');
    $this->db->where('funnel = "RADIO"');
    $result = $this->db->count_all_results();
    echo $result;
  }
  function amdbanner(){
    $this->db->select('count(*)');
    $this->db->from('amd');
    $this->db->where('funnel = "BANNER"');
    $result = $this->db->count_all_results();
    echo $result;
  }
  function amdnews(){
    $this->db->select('count(*)');
    $this->db->from('amd');
    $this->db->where('funnel = "SURAT KHABAR"');
    $result = $this->db->count_all_results();
    echo $result;
  }
  function amdrakan(){
    $this->db->select('count(*)');
    $this->db->from('amd');
    $this->db->where('funnel = "RAKAN"');
    $result = $this->db->count_all_results();
    echo $result;
  }

  ///////////////////////pelaburan/////////////
  function amd0_6(){
    $this->db->select('count(*)');
    $this->db->from('amd');
    $this->db->where('experience = "0 - 6 BULAN"');
    $result = $this->db->count_all_results();
    echo $result;
  }
  function amd6_1(){
    $this->db->select('count(*)');
    $this->db->from('amd');
    $this->db->where('experience = "6 BULAN - 1 TAHUN"');
    $result = $this->db->count_all_results();
    echo $result;
  }
  function amd1_3(){
    $this->db->select('count(*)');
    $this->db->from('amd');
    $this->db->where('experience = "1 TAHUN - 3 TAHUN"');
    $result = $this->db->count_all_results();
    echo $result;
  }
  function amd3_5(){
    $this->db->select('count(*)');
    $this->db->from('amd');
    $this->db->where('experience = "3 TAHUN - 5 TAHUN"');
    $result = $this->db->count_all_results();
    echo $result;
  }
  function amd5_10(){
    $this->db->select('count(*)');
    $this->db->from('amd');
    $this->db->where('experience = "5 TAHUN - 10 TAHUN"');
    $result = $this->db->count_all_results();
    echo $result;
  }
  function amd10(){
    $this->db->select('count(*)');
    $this->db->from('amd');
    $this->db->where('experience = "10 TAHUN KE ATAS"');
    $result = $this->db->count_all_results();
    echo $result;
  }

  ///////////////////////////pelaburan/////////////
  function amd300(){
    $this->db->select('count(*)');
    $this->db->from('amd');
    $this->db->where('investment = "Bawah RM300"');
    $result = $this->db->count_all_results();
    echo $result;
  }
  function amd1000(){
    $this->db->select('count(*)');
    $this->db->from('amd');
    $this->db->where('investment = "RM300 - RM1000"');
    $result = $this->db->count_all_results();
    echo $result;
  }
  function amd3000(){
    $this->db->select('count(*)');
    $this->db->from('amd');
    $this->db->where('investment = "RM1000 - RM3000"');
    $result = $this->db->count_all_results();
    echo $result;
  }
  function amd10000(){
    $this->db->select('count(*)');
    $this->db->from('amd');
    $this->db->where('investment = "RM3000 - RM10000"');
    $result = $this->db->count_all_results();
    echo $result;
  }
  function amd30000(){
    $this->db->select('count(*)');
    $this->db->from('amd');
    $this->db->where('investment = "RM10000 - RM30000"');
    $result = $this->db->count_all_results();
    echo $result;
  }
  function amd39999(){
    $this->db->select('count(*)');
    $this->db->from('amd');
    $this->db->where('investment = "RM30000 KE ATAS"');
    $result = $this->db->count_all_results();
    echo $result;
  }


  ////////////////income////////////////
  function amd1(){
    $this->db->select('count(*)');
    $this->db->from('amd');
    $this->db->where('income = "1"');
    $result = $this->db->count_all_results();
    echo $result;
  }
  function amd2(){
    $this->db->select('count(*)');
    $this->db->from('amd');
    $this->db->where('income = "2"');
    $result = $this->db->count_all_results();
    echo $result;
  }
  function amd3(){
    $this->db->select('count(*)');
    $this->db->from('amd');
    $this->db->where('income = "3"');
    $result = $this->db->count_all_results();
    echo $result;
  }
  function amd4(){
    $this->db->select('count(*)');
    $this->db->from('amd');
    $this->db->where('income = "4"');
    $result = $this->db->count_all_results();
    echo $result;
  }
  function amd5(){
    $this->db->select('count(*)');
    $this->db->from('amd');
    $this->db->where('income = "5"');
    $result = $this->db->count_all_results();
    echo $result;
  }
  function amd6(){
    $this->db->select('count(*)');
    $this->db->from('amd');
    $this->db->where('income = "6"');
    $result = $this->db->count_all_results();
    echo $result;
  }
}