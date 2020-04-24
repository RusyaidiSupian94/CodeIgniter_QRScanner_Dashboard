<?php

/**
* 
*/
class Statistik_smh_model extends CI_model
{
	function __construct() 
    { 
        parent::__construct(); 
    }
    
	
	public function hadir()
	{
		/*$totalsah = $this->get_total_peserta();
		$total = $this->total_peserta();*/

		$sql = "SELECT 'no_siri' FROM smf WHERE status = 'SDN BHD";
		

		
		$percent = ($sql / 900) *100;
		$per = round($percent);
		return $per;
	}

    public function total_hadir()
	{
		$this->db->select('no_siri');
		$this->db->from('smf');
		return $this->db->count_all_results();
	}
	

	public function total_peserta()
	{
		$this->db->select('nric');
		$this->db->from('smf');
		return $this->db->count_all_results();
	}

	public function total_peserta_percuma()
	{
		$this->db->select('no_siri');
		$this->db->from('smf');
		$this->db->where('tiket','Free');
		return $this->db->count_all_results();
	}

	function total_peserta_percuma_sah()
	{
		$this->db->select('gender');
		$this->db->from('smf');
		$this->db->where('no_siri','');
		$this->db->where('company!=','NA');
		echo $this->db->count_all_results();
	}

	public function total_vip()
	{
		$this->db->select('tiket');
		$this->db->from('smf');
		$this->db->where('tiket','VIP');
		$this->db->where('company!=','NA');
		echo $this->db->count_all_results();
	}

	function total_general()
	{
		$this->db->select('tiket');
		$this->db->from('smf');
		$this->db->where('tiket','GENERAL');
		$this->db->where('company!=','NA');
		echo $this->db->count_all_results();
	}
	
	function total_hope1()
	{
		$this->db->select('state');
		$this->db->from('smf');
		$this->db->where('hope','Menyelesaikan Masalah Pengurusan');
		echo $this->db->count_all_results();
	}

	function total_hope2()
	{
		$this->db->select('state');
		$this->db->from('smf');
		$this->db->where('hope','Menaikkan Jualan Syarikat');
		echo $this->db->count_all_results();
	}

	function total_hope3()
	{
		$this->db->select('state');
		$this->db->from('smf');
		$this->db->where('hope','Menambah Jaringan (Networking) Bisnes');
		echo $this->db->count_all_results();
	}

	function total_hope4()
	{
		$this->db->select('state');
		$this->db->from('smf');
		$this->db->where('hope','Sesi Bersama Tuan Basit');
		echo $this->db->count_all_results();
	}

	function get_total_peserta()
	{
		$this->db->select('company');
		$this->db->from('smf');
		$this->db->where('company!=','NA');
		$this->db->where('company!=','');
		echo $this->db->count_all_results();
	}

	public function total_lelaki()
	{
		$this->db->select('gender');
		$this->db->from('smf');
		$this->db->where('gender','L');
		echo $this->db->count_all_results();
	}

	function total_perempuan()
	{
		$this->db->select('gender');
		$this->db->from('smf');
		$this->db->where('gender','P');
		echo $this->db->count_all_results();
	}

	function total_johor()
	{
		$this->db->select('state');
		$this->db->from('smf');
		$this->db->where('state','JOHOR');
		echo $this->db->count_all_results();
	}

	function total_kedah()
	{
		$this->db->select('state');
		$this->db->from('smf');
		$this->db->where('state','KEDAH');
		echo $this->db->count_all_results();
	}

	function total_kelantan()
	{
		$this->db->select('state');
		$this->db->from('smf');
		$this->db->where('state','KELANTAN');
		echo $this->db->count_all_results();
	}

	function total_melaka()
	{
		$this->db->select('state');
		$this->db->from('smf');
		$this->db->where('state','MELAKA');
		echo $this->db->count_all_results();
	}

	function total_negeri9()
	{
		$this->db->select('state');
		$this->db->from('smf');
		$this->db->where('state','state SEMBILAN');
		echo $this->db->count_all_results();
	}

	function total_pahang()
	{
		$this->db->select('state');
		$this->db->from('smf');
		$this->db->where('state','PAHANG');
		echo $this->db->count_all_results();
	}

	function total_perak()
	{
		$this->db->select('state');
		$this->db->from('smf');
		$this->db->where('state','PERAK');
		echo $this->db->count_all_results();
	}

	function total_perlis()
	{
		$this->db->select('state');
		$this->db->from('smf');
		$this->db->where('state','PERLIS');
		echo $this->db->count_all_results();
	}

	function total_penang()
	{
		$this->db->select('state');
		$this->db->from('smf');
		$this->db->where('state','PULAU PINANG');
		echo $this->db->count_all_results();
	}

	function total_sabah()
	{
		$this->db->select('state');
		$this->db->from('smf');
		$this->db->where('state','SABAH');
		echo $this->db->count_all_results();
	}

	function total_sarawak()
	{
		$this->db->select('state');
		$this->db->from('smf');
		$this->db->where('state','SARAWAK');
		echo $this->db->count_all_results();
	}

	function total_selangor()
	{
		$this->db->select('state');
		$this->db->from('smf');
		$this->db->where('state','SELANGOR');
		echo $this->db->count_all_results();
	}

	function total_terengganu()
	{
		$this->db->select('state');
		$this->db->from('smf');
		$this->db->where('state','TERENGGANU');
		echo $this->db->count_all_results();
	}

	function total_kl()
	{
		$this->db->select('state');
		$this->db->from('smf');
		$this->db->where('state','WP KUALA LUMPUR');
		echo $this->db->count_all_results();
	}

	function total_labuan()
	{
		$this->db->select('state');
		$this->db->from('smf');
		$this->db->where('state','WP LABUAN');
		echo $this->db->count_all_results();
	}

	function total_lain()
	{
		$this->db->select('state');
		$this->db->from('smf');
		$this->db->where('state','LAIN-LAIN');
		echo $this->db->count_all_results();
	}

	function total_malaysia()
	{
		$this->db->select('country');
		$this->db->from('smf');
		$this->db->where('country','MALAYSIA');
		echo $this->db->count_all_results();
	}

	function total_brunei()
	{
		$this->db->select('country');
		$this->db->from('smf');
		$this->db->where('country','BRUNEI');
		echo $this->db->count_all_results();
	}

	function total_indon()
	{
		$this->db->select('country');
		$this->db->from('smf');
		$this->db->where('country','INDONESIA');
		echo $this->db->count_all_results();
	}

	function total_singapura()
	{
		$this->db->select('country');
		$this->db->from('smf');
		$this->db->where('country','SINGAPURA');
		echo $this->db->count_all_results();
	}

	function total_majikan()
	{
		$this->db->select('working');
		$this->db->from('smf');
		$this->db->where('working','MAJIKAN');
		echo $this->db->count_all_results();
	}

	function total_pengurus()
	{
		$this->db->select('working');
		$this->db->from('smf');
		$this->db->where('working','PENGURUS/KETUA JABATAN');
		echo $this->db->count_all_results();
	}

	function total_pekerja()
	{
		$this->db->select('working');
		$this->db->from('smf');
		$this->db->where('working','PEKERJA');
		echo $this->db->count_all_results();
	}

	function total_fesyen()
	{
		$this->db->select('industry');
		$this->db->from('smf');
		$this->db->where('industry','FESYEN');
		echo $this->db->count_all_results();
	}

	function total_kosmetik()
	{
		$this->db->select('industry');
		$this->db->from('smf');
		$this->db->where('industry','KOSMETIK/KECANTIKAN');
		echo $this->db->count_all_results();
	}

	function total_makanan()
	{
		$this->db->select('industry');
		$this->db->from('smf');
		$this->db->where('industry','MAKANAN');
		echo $this->db->count_all_results();
	}

	function total_ngo()
	{
		$this->db->select('industry');
		$this->db->from('smf');
		$this->db->where('industry','NGO');
		echo $this->db->count_all_results();
	}

	function total_pembinaan()
	{
		$this->db->select('industry');
		$this->db->from('smf');
		$this->db->where('industry','PEMBINAAN/KONTRAKTOR');
		echo $this->db->count_all_results();
	}

	function total_pemasaran()
	{
		$this->db->select('industry');
		$this->db->from('smf');
		$this->db->where('industry','PEMASARAN');
		echo $this->db->count_all_results();
	}

	function total_pengiklanan()
	{
		$this->db->select('industry');
		$this->db->from('smf');
		$this->db->where('industry','PENGIKLANAN');
		echo $this->db->count_all_results();
	}

	function total_pertanian()
	{
		$this->db->select('industry');
		$this->db->from('smf');
		$this->db->where('industry','PERTANIAN/PENTERNAKAN');
		echo $this->db->count_all_results();
	}

	function total_pendidikan()
	{
		$this->db->select('industry');
		$this->db->from('smf');
		$this->db->where('industry','PENDIDIKAN/SEMINAR');
		echo $this->db->count_all_results();
	}

	function total_runcit()
	{
		$this->db->select('industry');
		$this->db->from('smf');
		$this->db->where('industry','PERUNCITAN/PEMBORONG');
		echo $this->db->count_all_results();
	}

	function total_servis()
	{
		$this->db->select('industry');
		$this->db->from('smf');
		$this->db->where('industry','SERVIS');
		echo $this->db->count_all_results();
	}

	function total_industri_lain()
	{
		$this->db->select('industry');
		$this->db->from('smf');
		$this->db->where('industry','LAIN-LAIN');
		echo $this->db->count_all_results();
	}

	function total_sdn()
	{
		$this->db->select('status');
		$this->db->from('smf');
		$this->db->where('status','SDN BHD');
		echo $this->db->count_all_results();
	}

	function total_plt()
	{
		$this->db->select('status');
		$this->db->from('smf');
		$this->db->where('status','PLT');
		echo $this->db->count_all_results();
	}

	function total_ent()
	{
		$this->db->select('status');
		$this->db->from('smf');
		$this->db->where('status','ENTERPRISE');
		echo $this->db->count_all_results();
	}

	function total_status_ngo()
	{
		$this->db->select('status');
		$this->db->from('smf');
		$this->db->where('status','NGO');
		echo $this->db->count_all_results();
	}

	function total_belum_daftar()
	{
		$this->db->select('status');
		$this->db->from('smf');
		$this->db->where('status','BELUM DAFTAR');
		echo $this->db->count_all_results();
	}

	function total_facebook()
	{
		$this->db->select('funnel');
		$this->db->from('smf');
		$this->db->where('funnel','Facebook');
		echo $this->db->count_all_results();
	}

	function total_web()
	{
		$this->db->select('funnel');
		$this->db->from('smf');
		$this->db->where('funnel','Laman Web');
		echo $this->db->count_all_results();
	}

	function total_ig()
	{
		$this->db->select('funnel');
		$this->db->from('smf');
		$this->db->where('funnel','Instagram');
		echo $this->db->count_all_results();
	}

	function total_radio()
	{
		$this->db->select('funnel');
		$this->db->from('smf');
		$this->db->where('funnel','Radio');
		echo $this->db->count_all_results();
	}

	function total_banner()
	{
		$this->db->select('funnel');
		$this->db->from('smf');
		$this->db->where('funnel','Banner');
		echo $this->db->count_all_results();
	}

	function total_flyers()
	{
		$this->db->select('funnel');
		$this->db->from('smf');
		$this->db->where('funnel','Flyers');
		echo $this->db->count_all_results();
	}

	function total_news()
	{
		$this->db->select('funnel');
		$this->db->from('smf');
		$this->db->where('funnel','Surat Khabar');
		echo $this->db->count_all_results();
	}

	function total_rakan()
	{
		$this->db->select('funnel');
		$this->db->from('smf');
		$this->db->where('funnel','Rakan');
		echo $this->db->count_all_results();
	}

	function total_topik()
	{
		$this->db->select('interest');
		$this->db->from('smf');
		$this->db->where('interest','Topik Menarik');
		echo $this->db->count_all_results();
	}

	function total_belajar()
	{
		$this->db->select('interest');
		$this->db->from('smf');
		$this->db->where('interest','Nak Belajar');
		echo $this->db->count_all_results();
	}

	function total_speaker()
	{
		$this->db->select('interest');
		$this->db->from('smf');
		$this->db->where('interest','Speaker Bagus');
		echo $this->db->count_all_results();
	}

	function total_lokasi()
	{
		$this->db->select('interest');
		$this->db->from('smf');
		$this->db->where('interest','Lokasi Mudah Akses');
		echo $this->db->count_all_results();
	}

	function total_berapa1()
	{
		$this->db->select('experience');
		$this->db->from('smf');
		$this->db->where('experience','0 - 6 Bulan');
		echo $this->db->count_all_results();
	}

	function total_berapa2()
	{
		$this->db->select('experience');
		$this->db->from('smf');
		$this->db->where('experience','6 Bulan - 1 Tahun');
		echo $this->db->count_all_results();
	}

	function total_berapa3()
	{
		$this->db->select('experience');
		$this->db->from('smf');
		$this->db->where('experience','1 Tahun - 3 Tahun');
		echo $this->db->count_all_results();
	}

	function total_berapa4()
	{
		$this->db->select('experience');
		$this->db->from('smf');
		$this->db->where('experience','3 Tahun - 5 Tahun');
		echo $this->db->count_all_results();
	}

	function total_berapa5()
	{
		$this->db->select('experience');
		$this->db->from('smf');
		$this->db->where('experience','5 Tahun - 10 Tahun');
		echo $this->db->count_all_results();
	}

	function total_berapa6()
	{
		$this->db->select('experience');
		$this->db->from('smf');
		$this->db->where('experience','10 Tahun Ke Atas');
		echo $this->db->count_all_results();
	}

	function total_jumlah1()
	{
		$this->db->select('investment');
		$this->db->from('smf');
		$this->db->where('investment','Bawah RM300');
		echo $this->db->count_all_results();
	}

	function total_jumlah2()
	{
		$this->db->select('investment');
		$this->db->from('smf');
		$this->db->where('investment','RM3000 - RM1,000');
		echo $this->db->count_all_results();
	}

	function total_jumlah3()
	{
		$this->db->select('investment');
		$this->db->from('smf');
		$this->db->where('investment','RM1,000 - RM3,000');
		echo $this->db->count_all_results();
	}

	function total_jumlah4()
	{
		$this->db->select('investment');
		$this->db->from('smf');
		$this->db->where('investment','RM3,000 - RM10,000');
		echo $this->db->count_all_results();
	}

	function total_jumlah5()
	{
		$this->db->select('investment');
		$this->db->from('smf');
		$this->db->where('investment','RM10,000 - RM30,000');
		echo $this->db->count_all_results();
	}

	function total_jumlah6()
	{
		$this->db->select('investment');
		$this->db->from('smf');
		$this->db->where('investment','RM30,000 Ke Atas');
		echo $this->db->count_all_results();
	}

	function total_pendapatan1()
	{
		$this->db->select('income');
		$this->db->from('smf');
		$this->db->where('income','1');
		echo $this->db->count_all_results();
	}

	function total_pendapatan2()
	{
		$this->db->select('income');
		$this->db->from('smf');
		$this->db->where('income','2');
		echo $this->db->count_all_results();
	}

	function total_pendapatan3()
	{
		$this->db->select('income');
		$this->db->from('smf');
		$this->db->where('income','3');
		echo $this->db->count_all_results();
	}

	function total_pendapatan4()
	{
		$this->db->select('income');
		$this->db->from('smf');
		$this->db->where('income','4');
		echo $this->db->count_all_results();
	}

	function total_pendapatan5()
	{
		$this->db->select('income');
		$this->db->from('smf');
		$this->db->where('income','5');
		echo $this->db->count_all_results();
	}

	function total_pendapatan6()
	{
		$this->db->select('income');
		$this->db->from('smf');
		$this->db->where('income','6');
		echo $this->db->count_all_results();
	}

}