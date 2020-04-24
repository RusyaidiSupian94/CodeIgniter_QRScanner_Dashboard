<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Modelrcm extends CI_Model{
////////////////////////////yang daftar////////////////
  function rcmdaftar(){
    $this->db->select('count(*)');
    $this->db->from('rcm');
    //$this->db->where('gender = "L"');
    $result = $this->db->count_all_results();
    echo $result;
  }

  ////////////////////////////yang hadir////////////////
  function rcmhadir(){
    $this->db->select('count(*)');
    $this->db->from('rcm');
    $this->db->where('kehadiran = "1"');
    $result = $this->db->count_all_results();
    echo $result;
  }
////////////////////////////////////////////////////gender////////////
  function rcmgenderL(){
    $this->db->select('count(*)');
    $this->db->from('rcm');
    $this->db->where('gender = "L" OR gender = "LELAKI"');
    $result = $this->db->count_all_results();
    echo $result;
  }

  function rcmgenderP(){
    $this->db->select('count(*)');
    $this->db->from('rcm');
    $this->db->where('gender = "P" OR gender = "PEREMPUAN"');
    $result = $this->db->count_all_results();
    echo $result;
  }


///////////////////////////////////////////status syarikat
  function rcmstatussdn(){
    $this->db->select('count(*)');
    $this->db->from('rcm');
    $this->db->where('status = "SDN BHD"');
    $result = $this->db->count_all_results();
    echo $result;
  }

  function rcmstatusenter(){
    $this->db->select('count(*)');
    $this->db->from('rcm');
    $this->db->where('status = "ENTERPRISE"');
    $result = $this->db->count_all_results();
    echo $result;
  }

  function rcmstatusngo(){
    $this->db->select('count(*)');
    $this->db->from('rcm');
    $this->db->where('status = "NGO"');
    $result = $this->db->count_all_results();
    echo $result;
  }

  function rcmstatusbelumdaftar(){
    $this->db->select('count(*)');
    $this->db->from('rcm');
    $this->db->where('status = "BELUM DAFTAR"');
    $result = $this->db->count_all_results();
    echo $result;
  }
  function rcmstatusplt(){
    $this->db->select('count(*)');
    $this->db->from('rcm');
    $this->db->where('status = "PLT"');
    $result = $this->db->count_all_results();
    echo $result;
  }

  //////////////////////////////////////////////// status working//////
  function rcmstatusmajikan(){
    $this->db->select('count(*)');
    $this->db->from('rcm');
    $this->db->where('working = "MAJIKAN"');
    $result = $this->db->count_all_results();
    echo $result;
  }

  function rcmstatuspekerja(){
    $this->db->select('count(*)');
    $this->db->from('rcm');
    $this->db->where('working = "PEKERJA"');
    $result = $this->db->count_all_results();
    echo $result;
  }

  function rcmstatuspengurus(){
    $this->db->select('count(*)');
    $this->db->from('rcm');
    $this->db->where('working = "PENGURUS/KETUA JABATAN"');
    $result = $this->db->count_all_results();
    echo $result;
  }

  /////////////////////////////////////////industry////////////////
  function rcmfesyen(){
    $this->db->select('count(*)');
    $this->db->from('rcm');
    $this->db->where('industry = "FESYEN"');
    $result = $this->db->count_all_results();
    echo $result;
  }
  function rcmkosmetik(){
    $this->db->select('count(*)');
    $this->db->from('rcm');
    $this->db->where('industry = "KOSMETIK/KECANTIKAN"');
    $result = $this->db->count_all_results();
    echo $result;
  }
  function rcmlain(){
    $this->db->select('count(*)');
    $this->db->from('rcm');
    $this->db->where('industry = "LAIN-LAIN"');
    $result = $this->db->count_all_results();
    echo $result;
  }
  function rcmmakanan(){
    $this->db->select('count(*)');
    $this->db->from('rcm');
    $this->db->where('industry = "MAKANAN"');
    $result = $this->db->count_all_results();
    echo $result;
  }
  function rcmngo(){
    $this->db->select('count(*)');
    $this->db->from('rcm');
    $this->db->where('industry = "NGO"');
    $result = $this->db->count_all_results();
    echo $result;
  }
  function rcmpembinaan(){
    $this->db->select('count(*)');
    $this->db->from('rcm');
    $this->db->where('industry = "PEMBINAAN/KONTRAKTOR"');
    $result = $this->db->count_all_results();
    echo $result;
  }
  function rcmpemasaran(){
    $this->db->select('count(*)');
    $this->db->from('rcm');
    $this->db->where('industry = "PEMASARAN"');
    $result = $this->db->count_all_results();
    echo $result;
  }
  function rcmpengiklanan(){
    $this->db->select('count(*)');
    $this->db->from('rcm');
    $this->db->where('industry = "PENGIKLANAN"');
    $result = $this->db->count_all_results();
    echo $result;
  }
  function rcmpertanian(){
    $this->db->select('count(*)');
    $this->db->from('rcm');
    $this->db->where('industry = "PERTANIAN/PENTERNAKAN"');
    $result = $this->db->count_all_results();
    echo $result;
  }
  function rcmpendidikan(){
    $this->db->select('count(*)');
    $this->db->from('rcm');
    $this->db->where('industry = "PENDIDIKAN/SEMINAR"');
    $result = $this->db->count_all_results();
    echo $result;
  }
  function rcmperuncitan(){
    $this->db->select('count(*)');
    $this->db->from('rcm');
    $this->db->where('industry = "PERUNCITAN/PEMBORONG"');
    $result = $this->db->count_all_results();
    echo $result;
  }
  function rcmservis(){
    $this->db->select('count(*)');
    $this->db->from('rcm');
    $this->db->where('industry = "SERVIS"');
    $result = $this->db->count_all_results();
    echo $result;
  }

  //////////////////state/////////////////
  function rcmjohor(){
    $this->db->select('count(*)');
    $this->db->from('rcm');
    $this->db->where('state = "johor"');
    $result = $this->db->count_all_results();
    echo $result;
  }
  function rcmkedah(){
    $this->db->select('count(*)');
    $this->db->from('rcm');
    $this->db->where('state = "kedah"');
    $result = $this->db->count_all_results();
    echo $result;
  }
  function rcmkelantan(){
    $this->db->select('count(*)');
    $this->db->from('rcm');
    $this->db->where('state = "kelantan"');
    $result = $this->db->count_all_results();
    echo $result;
  }
  function rcmmelaka(){
    $this->db->select('count(*)');
    $this->db->from('rcm');
    $this->db->where('state = "melaka"');
    $result = $this->db->count_all_results();
    echo $result;
  }
  function rcmn9(){
    $this->db->select('count(*)');
    $this->db->from('rcm');
    $this->db->where('state = "NEGERI SEMBILAN"');
    $result = $this->db->count_all_results();
    echo $result;
  }
  function rcmpahang(){
    $this->db->select('count(*)');
    $this->db->from('rcm');
    $this->db->where('state = "PAHANG"');
    $result = $this->db->count_all_results();
    echo $result;
  }
  function rcmperak(){
    $this->db->select('count(*)');
    $this->db->from('rcm');
    $this->db->where('state = "PERAK"');
    $result = $this->db->count_all_results();
    echo $result;
  }
  function rcmperlis(){
    $this->db->select('count(*)');
    $this->db->from('rcm');
    $this->db->where('state = "PERLIS"');
    $result = $this->db->count_all_results();
    echo $result;
  }
  function rcmpp(){
    $this->db->select('count(*)');
    $this->db->from('rcm');
    $this->db->where('state = "PULAU PINANG"');
    $result = $this->db->count_all_results();
    echo $result;
  }
  function rcmsabah(){
    $this->db->select('count(*)');
    $this->db->from('rcm');
    $this->db->where('state = "SABAH"');
    $result = $this->db->count_all_results();
    echo $result;
  }
  function rcmsarawak(){
    $this->db->select('count(*)');
    $this->db->from('rcm');
    $this->db->where('state = "SARAWAK"');
    $result = $this->db->count_all_results();
    echo $result;
  }
  function rcmselangor(){
    $this->db->select('count(*)');
    $this->db->from('rcm');
    $this->db->where('state = "SELANGOR"');
    $result = $this->db->count_all_results();
    echo $result;
  }
  function rcmtganu(){
    $this->db->select('count(*)');
    $this->db->from('rcm');
    $this->db->where('state = "TERENGGANU"');
    $result = $this->db->count_all_results();
    echo $result;
  }
  function rcmkl(){
    $this->db->select('count(*)');
    $this->db->from('rcm');
    $this->db->where('state = "WP KUALA LUMPUR"');
    $result = $this->db->count_all_results();
    echo $result;
  }
  function rcmlabuan(){
    $this->db->select('count(*)');
    $this->db->from('rcm');
    $this->db->where('state = "WP LABUAN"');
    $result = $this->db->count_all_results();
    echo $result;
  }
  function rcmlain2(){
    $this->db->select('count(*)');
    $this->db->from('rcm');
    $this->db->where('state = "LAIN-LAIN"');
    $result = $this->db->count_all_results();
    echo $result;
  }

  ///////////////////////////////////funnel////////////////////////
  function rcmfacebook(){
    $this->db->select('count(*)');
    $this->db->from('rcm');
    $this->db->where('funnel = "FACEBOOK"');
    $result = $this->db->count_all_results();
    echo $result;
  }
  function rcmwebsite(){
    $this->db->select('count(*)');
    $this->db->from('rcm');
    $this->db->where('funnel = "LAMAN WEB"');
    $result = $this->db->count_all_results();
    echo $result;
  }
  function rcminsta(){
    $this->db->select('count(*)');
    $this->db->from('rcm');
    $this->db->where('funnel = "INSTAGRAM"');
    $result = $this->db->count_all_results();
    echo $result;
  }
  function rcmradio(){
    $this->db->select('count(*)');
    $this->db->from('rcm');
    $this->db->where('funnel = "RADIO"');
    $result = $this->db->count_all_results();
    echo $result;
  }
  function rcmbanner(){
    $this->db->select('count(*)');
    $this->db->from('rcm');
    $this->db->where('funnel = "BANNER"');
    $result = $this->db->count_all_results();
    echo $result;
  }
  function rcmnews(){
    $this->db->select('count(*)');
    $this->db->from('rcm');
    $this->db->where('funnel = "SURAT KHABAR"');
    $result = $this->db->count_all_results();
    echo $result;
  }
  function rcmrakan(){
    $this->db->select('count(*)');
    $this->db->from('rcm');
    $this->db->where('funnel = "RAKAN"');
    $result = $this->db->count_all_results();
    echo $result;
  }

  // ///////////////////////pelaburan/////////////
  // function rcm0_6(){
  //   $this->db->select('count(*)');
  //   $this->db->from('rcm');
  //   $this->db->where('experience = "0 - 6 BULAN"');
  //   $result = $this->db->count_all_results();
  //   echo $result;
  // }
  // function rcm6_1(){
  //   $this->db->select('count(*)');
  //   $this->db->from('rcm');
  //   $this->db->where('experience = "6 BULAN - 1 TAHUN"');
  //   $result = $this->db->count_all_results();
  //   echo $result;
  // }
  // function rcm1_3(){
  //   $this->db->select('count(*)');
  //   $this->db->from('rcm');
  //   $this->db->where('experience = "1 TAHUN - 3 TAHUN"');
  //   $result = $this->db->count_all_results();
  //   echo $result;
  // }
  // function rcm3_5(){
  //   $this->db->select('count(*)');
  //   $this->db->from('rcm');
  //   $this->db->where('experience = "3 TAHUN - 5 TAHUN"');
  //   $result = $this->db->count_all_results();
  //   echo $result;
  // }
  // function rcm5_10(){
  //   $this->db->select('count(*)');
  //   $this->db->from('rcm');
  //   $this->db->where('experience = "5 TAHUN - 10 TAHUN"');
  //   $result = $this->db->count_all_results();
  //   echo $result;
  // }
  // function rcm10(){
  //   $this->db->select('count(*)');
  //   $this->db->from('rcm');
  //   $this->db->where('experience = "10 TAHUN KE ATAS"');
  //   $result = $this->db->count_all_results();
  //   echo $result;
  // }

  ///////////////////////////pelaburan/////////////
  // function rcm300(){
  //   $this->db->select('count(*)');
  //   $this->db->from('rcm');
  //   $this->db->where('investment = "Bawah RM300"');
  //   $result = $this->db->count_all_results();
  //   echo $result;
  // }
  // function rcm1000(){
  //   $this->db->select('count(*)');
  //   $this->db->from('rcm');
  //   $this->db->where('investment = "RM300 - RM1000"');
  //   $result = $this->db->count_all_results();
  //   echo $result;
  // }
  // function rcm3000(){
  //   $this->db->select('count(*)');
  //   $this->db->from('rcm');
  //   $this->db->where('investment = "RM1000 - RM3000"');
  //   $result = $this->db->count_all_results();
  //   echo $result;
  // }
  // function rcm10000(){
  //   $this->db->select('count(*)');
  //   $this->db->from('rcm');
  //   $this->db->where('investment = "RM3000 - RM10000"');
  //   $result = $this->db->count_all_results();
  //   echo $result;
  // }
  // function rcm30000(){
  //   $this->db->select('count(*)');
  //   $this->db->from('rcm');
  //   $this->db->where('investment = "RM10000 - RM30000"');
  //   $result = $this->db->count_all_results();
  //   echo $result;
  // }
  // function rcm39999(){
  //   $this->db->select('count(*)');
  //   $this->db->from('rcm');
  //   $this->db->where('investment = "RM30000 KE ATAS"');
  //   $result = $this->db->count_all_results();
  //   echo $result;
  // }


  ////////////////income////////////////
  function rcm1(){
    $this->db->select('count(*)');
    $this->db->from('rcm');
    $this->db->where('income = "1"');
    $result = $this->db->count_all_results();
    echo $result;
  }
  function rcm2(){
    $this->db->select('count(*)');
    $this->db->from('rcm');
    $this->db->where('income = "2"');
    $result = $this->db->count_all_results();
    echo $result;
  }
  function rcm3(){
    $this->db->select('count(*)');
    $this->db->from('rcm');
    $this->db->where('income = "3"');
    $result = $this->db->count_all_results();
    echo $result;
  }
  function rcm4(){
    $this->db->select('count(*)');
    $this->db->from('rcm');
    $this->db->where('income = "4"');
    $result = $this->db->count_all_results();
    echo $result;
  }
  function rcm5(){
    $this->db->select('count(*)');
    $this->db->from('rcm');
    $this->db->where('income = "5"');
    $result = $this->db->count_all_results();
    echo $result;
  }
  function rcm6(){
    $this->db->select('count(*)');
    $this->db->from('rcm');
    $this->db->where('income = "6"');
    $result = $this->db->count_all_results();
    echo $result;
  }
}