<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Modelsmf extends CI_Model{


////////////////////////////yang daftar////////////////
  function smfdaftar(){
    $this->db->select('count(*)');
    $this->db->from('smf');
    //$this->db->where('gender = "L"');
    $result = $this->db->count_all_results();
    echo $result;
  }

  ////////////////////////////yang hadir////////////////
  function smfhadir(){
    $this->db->select('count(*)');
    $this->db->from('smf');
    $this->db->where('kehadiran = "1"');
    $result = $this->db->count_all_results();
    echo $result;
  }

////////////////////////////////////////////////////gender////////////
  function smfgenderL(){
    $this->db->select('count(*)');
    $this->db->from('smf');
    $this->db->where('gender = "L" OR gender = "LELAKI"');
    $result = $this->db->count_all_results();
    echo $result;
  }

  function smfgenderP(){
    $this->db->select('count(*)');
    $this->db->from('smf');
    $this->db->where('gender = "P" OR gender = "PEREMPUAN"');
    $result = $this->db->count_all_results();
    echo $result;
  }


///////////////////////////////////////////status syarikat
  function smfstatussdn(){
    $this->db->select('count(*)');
    $this->db->from('smf');
    $this->db->where('status = "SDN BHD"');
    $result = $this->db->count_all_results();
    echo $result;
  }

  function smfstatusenter(){
    $this->db->select('count(*)');
    $this->db->from('smf');
    $this->db->where('status = "ENTERPRISE"');
    $result = $this->db->count_all_results();
    echo $result;
  }

  function smfstatusngo(){
    $this->db->select('count(*)');
    $this->db->from('smf');
    $this->db->where('status = "NGO"');
    $result = $this->db->count_all_results();
    echo $result;
  }

  function smfstatusbelumdaftar(){
    $this->db->select('count(*)');
    $this->db->from('smf');
    $this->db->where('status = "BELUM DAFTAR"');
    $result = $this->db->count_all_results();
    echo $result;
  }

  function smfstatusplt(){
    $this->db->select('count(*)');
    $this->db->from('smf');
    $this->db->where('status = "PLT"');
    $result = $this->db->count_all_results();
    echo $result;
  }

  //////////////////////////////////////////////// status working//////
  function smfstatusmajikan(){
    $this->db->select('count(*)');
    $this->db->from('smf');
    $this->db->where('working = "MAJIKAN"');
    $result = $this->db->count_all_results();
    echo $result;
  }

  function smfstatuspekerja(){
    $this->db->select('count(*)');
    $this->db->from('smf');
    $this->db->where('working = "PEKERJA"');
    $result = $this->db->count_all_results();
    echo $result;
  }

  function smfstatuspengurus(){
    $this->db->select('count(*)');
    $this->db->from('smf');
    $this->db->where('working = "PENGURUS/KETUA JABATAN"');
    $result = $this->db->count_all_results();
    echo $result;
  }

  /////////////////////////////////////////industry////////////////
  function smffesyen(){
    $this->db->select('count(*)');
    $this->db->from('smf');
    $this->db->where('industry = "FESYEN"');
    $result = $this->db->count_all_results();
    echo $result;
  }
  function smfkosmetik(){
    $this->db->select('count(*)');
    $this->db->from('smf');
    $this->db->where('industry = "KOSMETIK/KECANTIKAN"');
    $result = $this->db->count_all_results();
    echo $result;
  }
  function smflain(){
    $this->db->select('count(*)');
    $this->db->from('smf');
    $this->db->where('industry = "LAIN-LAIN"');
    $result = $this->db->count_all_results();
    echo $result;
  }
  function smfmakanan(){
    $this->db->select('count(*)');
    $this->db->from('smf');
    $this->db->where('industry = "MAKANAN"');
    $result = $this->db->count_all_results();
    echo $result;
  }
  function smfngo(){
    $this->db->select('count(*)');
    $this->db->from('smf');
    $this->db->where('industry = "NGO"');
    $result = $this->db->count_all_results();
    echo $result;
  }
  function smfpembinaan(){
    $this->db->select('count(*)');
    $this->db->from('smf');
    $this->db->where('industry = "PEMBINAAN/KONTRAKTOR"');
    $result = $this->db->count_all_results();
    echo $result;
  }
  function smfpemasaran(){
    $this->db->select('count(*)');
    $this->db->from('smf');
    $this->db->where('industry = "PEMASARAN"');
    $result = $this->db->count_all_results();
    echo $result;
  }
  function smfpengiklanan(){
    $this->db->select('count(*)');
    $this->db->from('smf');
    $this->db->where('industry = "PENGIKLANAN"');
    $result = $this->db->count_all_results();
    echo $result;
  }
  function smfpertanian(){
    $this->db->select('count(*)');
    $this->db->from('smf');
    $this->db->where('industry = "PERTANIAN/PENTERNAKAN"');
    $result = $this->db->count_all_results();
    echo $result;
  }
  function smfpendidikan(){
    $this->db->select('count(*)');
    $this->db->from('smf');
    $this->db->where('industry = "PENDIDIKAN/SEMINAR"');
    $result = $this->db->count_all_results();
    echo $result;
  }
  function smfperuncitan(){
    $this->db->select('count(*)');
    $this->db->from('smf');
    $this->db->where('industry = "PERUNCITAN/PEMBORONG"');
    $result = $this->db->count_all_results();
    echo $result;
  }
  function smfservis(){
    $this->db->select('count(*)');
    $this->db->from('smf');
    $this->db->where('industry = "SERVIS"');
    $result = $this->db->count_all_results();
    echo $result;
  }

  //////////////////state/////////////////
  function smfjohor(){
    $this->db->select('count(*)');
    $this->db->from('smf');
    $this->db->where('state = "johor"');
    $result = $this->db->count_all_results();
    echo $result;
  }
  function smfkedah(){
    $this->db->select('count(*)');
    $this->db->from('smf');
    $this->db->where('state = "kedah"');
    $result = $this->db->count_all_results();
    echo $result;
  }
  function smfkelantan(){
    $this->db->select('count(*)');
    $this->db->from('smf');
    $this->db->where('state = "kelantan"');
    $result = $this->db->count_all_results();
    echo $result;
  }
  function smfmelaka(){
    $this->db->select('count(*)');
    $this->db->from('smf');
    $this->db->where('state = "melaka"');
    $result = $this->db->count_all_results();
    echo $result;
  }
  function smfn9(){
    $this->db->select('count(*)');
    $this->db->from('smf');
    $this->db->where('state = "NEGERI SEMBILAN"');
    $result = $this->db->count_all_results();
    echo $result;
  }
  function smfpahang(){
    $this->db->select('count(*)');
    $this->db->from('smf');
    $this->db->where('state = "PAHANG"');
    $result = $this->db->count_all_results();
    echo $result;
  }
  function smfperak(){
    $this->db->select('count(*)');
    $this->db->from('smf');
    $this->db->where('state = "PERAK"');
    $result = $this->db->count_all_results();
    echo $result;
  }
  function smfperlis(){
    $this->db->select('count(*)');
    $this->db->from('smf');
    $this->db->where('state = "PERLIS"');
    $result = $this->db->count_all_results();
    echo $result;
  }
  function smfpp(){
    $this->db->select('count(*)');
    $this->db->from('smf');
    $this->db->where('state = "PULAU PINANG"');
    $result = $this->db->count_all_results();
    echo $result;
  }
  function smfsabah(){
    $this->db->select('count(*)');
    $this->db->from('smf');
    $this->db->where('state = "SABAH"');
    $result = $this->db->count_all_results();
    echo $result;
  }
  function smfsarawak(){
    $this->db->select('count(*)');
    $this->db->from('smf');
    $this->db->where('state = "SARAWAK"');
    $result = $this->db->count_all_results();
    echo $result;
  }
  function smfselangor(){
    $this->db->select('count(*)');
    $this->db->from('smf');
    $this->db->where('state = "SELANGOR"');
    $result = $this->db->count_all_results();
    echo $result;
  }
  function smftganu(){
    $this->db->select('count(*)');
    $this->db->from('smf');
    $this->db->where('state = "TERENGGANU"');
    $result = $this->db->count_all_results();
    echo $result;
  }
  function smfkl(){
    $this->db->select('count(*)');
    $this->db->from('smf');
    $this->db->where('state = "WP KUALA LUMPUR"');
    $result = $this->db->count_all_results();
    echo $result;
  }
  function smflabuan(){
    $this->db->select('count(*)');
    $this->db->from('smf');
    $this->db->where('state = "WP LABUAN"');
    $result = $this->db->count_all_results();
    echo $result;
  }
  function smflain2(){
    $this->db->select('count(*)');
    $this->db->from('smf');
    $this->db->where('state = "LAIN-LAIN"');
    $result = $this->db->count_all_results();
    echo $result;
  }

  ///////////////////////////////////funnel////////////////////////
  function smffacebook(){
    $this->db->select('count(*)');
    $this->db->from('smf');
    $this->db->where('funnel = "FACEBOOK"');
    $result = $this->db->count_all_results();
    echo $result;
  }
  function smfwebsite(){
    $this->db->select('count(*)');
    $this->db->from('smf');
    $this->db->where('funnel = "LAMAN WEB"');
    $result = $this->db->count_all_results();
    echo $result;
  }
  function smfinsta(){
    $this->db->select('count(*)');
    $this->db->from('smf');
    $this->db->where('funnel = "INSTAGRAM"');
    $result = $this->db->count_all_results();
    echo $result;
  }
  function smfradio(){
    $this->db->select('count(*)');
    $this->db->from('smf');
    $this->db->where('funnel = "RADIO"');
    $result = $this->db->count_all_results();
    echo $result;
  }
  function smfbanner(){
    $this->db->select('count(*)');
    $this->db->from('smf');
    $this->db->where('funnel = "BANNER"');
    $result = $this->db->count_all_results();
    echo $result;
  }
  function smfnews(){
    $this->db->select('count(*)');
    $this->db->from('smf');
    $this->db->where('funnel = "SURAT KHABAR"');
    $result = $this->db->count_all_results();
    echo $result;
  }
  function smfrakan(){
    $this->db->select('count(*)');
    $this->db->from('smf');
    $this->db->where('funnel = "RAKAN"');
    $result = $this->db->count_all_results();
    echo $result;
  }

  ///////////////////////pelaburan/////////////
  function smf0_6(){
    $this->db->select('count(*)');
    $this->db->from('smf');
    $this->db->where('experience = "0 - 6 BULAN"');
    $result = $this->db->count_all_results();
    echo $result;
  }
  function smf6_1(){
    $this->db->select('count(*)');
    $this->db->from('smf');
    $this->db->where('experience = "6 BULAN - 1 TAHUN"');
    $result = $this->db->count_all_results();
    echo $result;
  }
  function smf1_3(){
    $this->db->select('count(*)');
    $this->db->from('smf');
    $this->db->where('experience = "1 TAHUN - 3 TAHUN"');
    $result = $this->db->count_all_results();
    echo $result;
  }
  function smf3_5(){
    $this->db->select('count(*)');
    $this->db->from('smf');
    $this->db->where('experience = "3 TAHUN - 5 TAHUN"');
    $result = $this->db->count_all_results();
    echo $result;
  }
  function smf5_10(){
    $this->db->select('count(*)');
    $this->db->from('smf');
    $this->db->where('experience = "5 TAHUN - 10 TAHUN"');
    $result = $this->db->count_all_results();
    echo $result;
  }
  function smf10(){
    $this->db->select('count(*)');
    $this->db->from('smf');
    $this->db->where('experience = "10 TAHUN KE ATAS"');
    $result = $this->db->count_all_results();
    echo $result;
  }

  ///////////////////////////pelaburan/////////////
  function smf300(){
    $this->db->select('count(*)');
    $this->db->from('smf');
    $this->db->where('investment = "Bawah RM300"');
    $result = $this->db->count_all_results();
    echo $result;
  }
  function smf1000(){
    $this->db->select('count(*)');
    $this->db->from('smf');
    $this->db->where('investment = "RM300 - RM1000"');
    $result = $this->db->count_all_results();
    echo $result;
  }
  function smf3000(){
    $this->db->select('count(*)');
    $this->db->from('smf');
    $this->db->where('investment = "RM1000 - RM3000"');
    $result = $this->db->count_all_results();
    echo $result;
  }
  function smf10000(){
    $this->db->select('count(*)');
    $this->db->from('smf');
    $this->db->where('investment = "RM3000 - RM10000"');
    $result = $this->db->count_all_results();
    echo $result;
  }
  function smf30000(){
    $this->db->select('count(*)');
    $this->db->from('smf');
    $this->db->where('investment = "RM10000 - RM30000"');
    $result = $this->db->count_all_results();
    echo $result;
  }
  function smf39999(){
    $this->db->select('count(*)');
    $this->db->from('smf');
    $this->db->where('investment = "RM30000 KE ATAS"');
    $result = $this->db->count_all_results();
    echo $result;
  }


  ////////////////income////////////////
  function smf1(){
    $this->db->select('count(*)');
    $this->db->from('smf');
    $this->db->where('income = "1"');
    $result = $this->db->count_all_results();
    echo $result;
  }
  function smf2(){
    $this->db->select('count(*)');
    $this->db->from('smf');
    $this->db->where('income = "2"');
    $result = $this->db->count_all_results();
    echo $result;
  }
  function smf3(){
    $this->db->select('count(*)');
    $this->db->from('smf');
    $this->db->where('income = "3"');
    $result = $this->db->count_all_results();
    echo $result;
  }
  function smf4(){
    $this->db->select('count(*)');
    $this->db->from('smf');
    $this->db->where('income = "4"');
    $result = $this->db->count_all_results();
    echo $result;
  }
  function smf5(){
    $this->db->select('count(*)');
    $this->db->from('smf');
    $this->db->where('income = "5"');
    $result = $this->db->count_all_results();
    echo $result;
  }
  function smf6(){
    $this->db->select('count(*)');
    $this->db->from('smf');
    $this->db->where('income = "6"');
    $result = $this->db->count_all_results();
    echo $result;
  }
}