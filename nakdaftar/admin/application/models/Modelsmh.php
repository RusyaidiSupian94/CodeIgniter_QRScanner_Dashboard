<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Modelsmh extends CI_Model{


////////////////////////////yang daftar////////////////
  function smhdaftar(){
    $this->db->select('count(*)');
    $this->db->from('smh');
    //$this->db->where('gender = "L"');
    $result = $this->db->count_all_results();
    echo $result;
  }

  ////////////////////////////yang hadir////////////////
  function smhhadir(){
    $this->db->select('count(*)');
    $this->db->from('smh');
    $this->db->where('kehadiran = "1"');
    $result = $this->db->count_all_results();
    echo $result;
  }

////////////////////////////////////////////////////gender////////////
  function smhgenderL(){
    $this->db->select('count(*)');
    $this->db->from('smh');
    $this->db->where('gender = "L" OR gender = "LELAKI"');
    $result = $this->db->count_all_results();
    echo $result;
  }

  function smhgenderP(){
    $this->db->select('count(*)');
    $this->db->from('smh');
    $this->db->where('gender = "P" OR gender = "PEREMPUAN"');
    $result = $this->db->count_all_results();
    echo $result;
  }


///////////////////////////////////////////status syarikat
  function smhstatussdn(){
    $this->db->select('count(*)');
    $this->db->from('smh');
    $this->db->where('status = "SDN BHD"');
    $result = $this->db->count_all_results();
    echo $result;
  }

  function smhstatusenter(){
    $this->db->select('count(*)');
    $this->db->from('smh');
    $this->db->where('status = "ENTERPRISE"');
    $result = $this->db->count_all_results();
    echo $result;
  }

  function smhstatusngo(){
    $this->db->select('count(*)');
    $this->db->from('smh');
    $this->db->where('status = "NGO"');
    $result = $this->db->count_all_results();
    echo $result;
  }

  function smhstatusbelumdaftar(){
    $this->db->select('count(*)');
    $this->db->from('smh');
    $this->db->where('status = "BELUM DAFTAR"');
    $result = $this->db->count_all_results();
    echo $result;
  }
  function smhstatusplt(){
    $this->db->select('count(*)');
    $this->db->from('smh');
    $this->db->where('status = "PLT"');
    $result = $this->db->count_all_results();
    echo $result;
  }

  //////////////////////////////////////////////// status working//////
  function smhstatusmajikan(){
    $this->db->select('count(*)');
    $this->db->from('smh');
    $this->db->where('working = "MAJIKAN"');
    $result = $this->db->count_all_results();
    echo $result;
  }

  function smhstatuspekerja(){
    $this->db->select('count(*)');
    $this->db->from('smh');
    $this->db->where('working = "PEKERJA"');
    $result = $this->db->count_all_results();
    echo $result;
  }

  function smhstatuspengurus(){
    $this->db->select('count(*)');
    $this->db->from('smh');
    $this->db->where('working = "PENGURUS/KETUA JABATAN"');
    $result = $this->db->count_all_results();
    echo $result;
  }

  /////////////////////////////////////////industry////////////////
  function smhfesyen(){
    $this->db->select('count(*)');
    $this->db->from('smh');
    $this->db->where('industry = "FESYEN"');
    $result = $this->db->count_all_results();
    echo $result;
  }
  function smhkosmetik(){
    $this->db->select('count(*)');
    $this->db->from('smh');
    $this->db->where('industry = "KOSMETIK/KECANTIKAN"');
    $result = $this->db->count_all_results();
    echo $result;
  }
  function smhlain(){
    $this->db->select('count(*)');
    $this->db->from('smh');
    $this->db->where('industry = "LAIN-LAIN"');
    $result = $this->db->count_all_results();
    echo $result;
  }
  function smhmakanan(){
    $this->db->select('count(*)');
    $this->db->from('smh');
    $this->db->where('industry = "MAKANAN"');
    $result = $this->db->count_all_results();
    echo $result;
  }
  function smhngo(){
    $this->db->select('count(*)');
    $this->db->from('smh');
    $this->db->where('industry = "NGO"');
    $result = $this->db->count_all_results();
    echo $result;
  }
  function smhpembinaan(){
    $this->db->select('count(*)');
    $this->db->from('smh');
    $this->db->where('industry = "PEMBINAAN/KONTRAKTOR"');
    $result = $this->db->count_all_results();
    echo $result;
  }
  function smhpemasaran(){
    $this->db->select('count(*)');
    $this->db->from('smh');
    $this->db->where('industry = "PEMASARAN"');
    $result = $this->db->count_all_results();
    echo $result;
  }
  function smhpengiklanan(){
    $this->db->select('count(*)');
    $this->db->from('smh');
    $this->db->where('industry = "PENGIKLANAN"');
    $result = $this->db->count_all_results();
    echo $result;
  }
  function smhpertanian(){
    $this->db->select('count(*)');
    $this->db->from('smh');
    $this->db->where('industry = "PERTANIAN/PENTERNAKAN"');
    $result = $this->db->count_all_results();
    echo $result;
  }
  function smhpendidikan(){
    $this->db->select('count(*)');
    $this->db->from('smh');
    $this->db->where('industry = "PENDIDIKAN/SEMINAR"');
    $result = $this->db->count_all_results();
    echo $result;
  }
  function smhperuncitan(){
    $this->db->select('count(*)');
    $this->db->from('smh');
    $this->db->where('industry = "PERUNCITAN/PEMBORONG"');
    $result = $this->db->count_all_results();
    echo $result;
  }
  function smhservis(){
    $this->db->select('count(*)');
    $this->db->from('smh');
    $this->db->where('industry = "SERVIS"');
    $result = $this->db->count_all_results();
    echo $result;
  }

  //////////////////state/////////////////
  function smhjohor(){
    $this->db->select('count(*)');
    $this->db->from('smh');
    $this->db->where('state = "johor"');
    $result = $this->db->count_all_results();
    echo $result;
  }
  function smhkedah(){
    $this->db->select('count(*)');
    $this->db->from('smh');
    $this->db->where('state = "kedah"');
    $result = $this->db->count_all_results();
    echo $result;
  }
  function smhkelantan(){
    $this->db->select('count(*)');
    $this->db->from('smh');
    $this->db->where('state = "kelantan"');
    $result = $this->db->count_all_results();
    echo $result;
  }
  function smhmelaka(){
    $this->db->select('count(*)');
    $this->db->from('smh');
    $this->db->where('state = "melaka"');
    $result = $this->db->count_all_results();
    echo $result;
  }
  function smhn9(){
    $this->db->select('count(*)');
    $this->db->from('smh');
    $this->db->where('state = "NEGERI SEMBILAN"');
    $result = $this->db->count_all_results();
    echo $result;
  }
  function smhpahang(){
    $this->db->select('count(*)');
    $this->db->from('smh');
    $this->db->where('state = "PAHANG"');
    $result = $this->db->count_all_results();
    echo $result;
  }
  function smhperak(){
    $this->db->select('count(*)');
    $this->db->from('smh');
    $this->db->where('state = "PERAK"');
    $result = $this->db->count_all_results();
    echo $result;
  }
  function smhperlis(){
    $this->db->select('count(*)');
    $this->db->from('smh');
    $this->db->where('state = "PERLIS"');
    $result = $this->db->count_all_results();
    echo $result;
  }
  function smhpp(){
    $this->db->select('count(*)');
    $this->db->from('smh');
    $this->db->where('state = "PULAU PINANG"');
    $result = $this->db->count_all_results();
    echo $result;
  }
  function smhsabah(){
    $this->db->select('count(*)');
    $this->db->from('smh');
    $this->db->where('state = "SABAH"');
    $result = $this->db->count_all_results();
    echo $result;
  }
  function smhsarawak(){
    $this->db->select('count(*)');
    $this->db->from('smh');
    $this->db->where('state = "SARAWAK"');
    $result = $this->db->count_all_results();
    echo $result;
  }
  function smhselangor(){
    $this->db->select('count(*)');
    $this->db->from('smh');
    $this->db->where('state = "SELANGOR"');
    $result = $this->db->count_all_results();
    echo $result;
  }
  function smhtganu(){
    $this->db->select('count(*)');
    $this->db->from('smh');
    $this->db->where('state = "TERENGGANU"');
    $result = $this->db->count_all_results();
    echo $result;
  }
  function smhkl(){
    $this->db->select('count(*)');
    $this->db->from('smh');
    $this->db->where('state = "WP KUALA LUMPUR"');
    $result = $this->db->count_all_results();
    echo $result;
  }
  function smhlabuan(){
    $this->db->select('count(*)');
    $this->db->from('smh');
    $this->db->where('state = "WP LABUAN"');
    $result = $this->db->count_all_results();
    echo $result;
  }
  function smhlain2(){
    $this->db->select('count(*)');
    $this->db->from('smh');
    $this->db->where('state = "LAIN-LAIN"');
    $result = $this->db->count_all_results();
    echo $result;
  }

  ///////////////////////////////////funnel////////////////////////
  function smhfacebook(){
    $this->db->select('count(*)');
    $this->db->from('smh');
    $this->db->where('funnel = "FACEBOOK"');
    $result = $this->db->count_all_results();
    echo $result;
  }
  function smhwebsite(){
    $this->db->select('count(*)');
    $this->db->from('smh');
    $this->db->where('funnel = "LAMAN WEB"');
    $result = $this->db->count_all_results();
    echo $result;
  }
  function smhinsta(){
    $this->db->select('count(*)');
    $this->db->from('smh');
    $this->db->where('funnel = "INSTAGRAM"');
    $result = $this->db->count_all_results();
    echo $result;
  }
  function smhradio(){
    $this->db->select('count(*)');
    $this->db->from('smh');
    $this->db->where('funnel = "RADIO"');
    $result = $this->db->count_all_results();
    echo $result;
  }
  function smhbanner(){
    $this->db->select('count(*)');
    $this->db->from('smh');
    $this->db->where('funnel = "BANNER"');
    $result = $this->db->count_all_results();
    echo $result;
  }
  function smhnews(){
    $this->db->select('count(*)');
    $this->db->from('smh');
    $this->db->where('funnel = "SURAT KHABAR"');
    $result = $this->db->count_all_results();
    echo $result;
  }
  function smhrakan(){
    $this->db->select('count(*)');
    $this->db->from('smh');
    $this->db->where('funnel = "RAKAN"');
    $result = $this->db->count_all_results();
    echo $result;
  }

  ///////////////////////pelaburan/////////////
  function smh0_6(){
    $this->db->select('count(*)');
    $this->db->from('smh');
    $this->db->where('experience = "0 - 6 BULAN"');
    $result = $this->db->count_all_results();
    echo $result;
  }
  function smh6_1(){
    $this->db->select('count(*)');
    $this->db->from('smh');
    $this->db->where('experience = "6 BULAN - 1 TAHUN"');
    $result = $this->db->count_all_results();
    echo $result;
  }
  function smh1_3(){
    $this->db->select('count(*)');
    $this->db->from('smh');
    $this->db->where('experience = "1 TAHUN - 3 TAHUN"');
    $result = $this->db->count_all_results();
    echo $result;
  }
  function smh3_5(){
    $this->db->select('count(*)');
    $this->db->from('smh');
    $this->db->where('experience = "3 TAHUN - 5 TAHUN"');
    $result = $this->db->count_all_results();
    echo $result;
  }
  function smh5_10(){
    $this->db->select('count(*)');
    $this->db->from('smh');
    $this->db->where('experience = "5 TAHUN - 10 TAHUN"');
    $result = $this->db->count_all_results();
    echo $result;
  }
  function smh10(){
    $this->db->select('count(*)');
    $this->db->from('smh');
    $this->db->where('experience = "10 TAHUN KE ATAS"');
    $result = $this->db->count_all_results();
    echo $result;
  }

  ///////////////////////////pelaburan/////////////
  function smh300(){
    $this->db->select('count(*)');
    $this->db->from('smh');
    $this->db->where('investment = "Bawah RM300"');
    $result = $this->db->count_all_results();
    echo $result;
  }
  function smh1000(){
    $this->db->select('count(*)');
    $this->db->from('smh');
    $this->db->where('investment = "RM300 - RM1000"');
    $result = $this->db->count_all_results();
    echo $result;
  }
  function smh3000(){
    $this->db->select('count(*)');
    $this->db->from('smh');
    $this->db->where('investment = "RM1000 - RM3000"');
    $result = $this->db->count_all_results();
    echo $result;
  }
  function smh10000(){
    $this->db->select('count(*)');
    $this->db->from('smh');
    $this->db->where('investment = "RM3000 - RM10000"');
    $result = $this->db->count_all_results();
    echo $result;
  }
  function smh30000(){
    $this->db->select('count(*)');
    $this->db->from('smh');
    $this->db->where('investment = "RM10000 - RM30000"');
    $result = $this->db->count_all_results();
    echo $result;
  }
  function smh39999(){
    $this->db->select('count(*)');
    $this->db->from('smh');
    $this->db->where('investment = "RM30000 KE ATAS"');
    $result = $this->db->count_all_results();
    echo $result;
  }


  ////////////////income////////////////
  function smh1(){
    $this->db->select('count(*)');
    $this->db->from('smh');
    $this->db->where('income = "1"');
    $result = $this->db->count_all_results();
    echo $result;
  }
  function smh2(){
    $this->db->select('count(*)');
    $this->db->from('smh');
    $this->db->where('income = "2"');
    $result = $this->db->count_all_results();
    echo $result;
  }
  function smh3(){
    $this->db->select('count(*)');
    $this->db->from('smh');
    $this->db->where('income = "3"');
    $result = $this->db->count_all_results();
    echo $result;
  }
  function smh4(){
    $this->db->select('count(*)');
    $this->db->from('smh');
    $this->db->where('income = "4"');
    $result = $this->db->count_all_results();
    echo $result;
  }
  function smh5(){
    $this->db->select('count(*)');
    $this->db->from('smh');
    $this->db->where('income = "5"');
    $result = $this->db->count_all_results();
    echo $result;
  }
  function smh6(){
    $this->db->select('count(*)');
    $this->db->from('smh');
    $this->db->where('income = "6"');
    $result = $this->db->count_all_results();
    echo $result;
  }
}