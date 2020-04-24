<?php

/**
* 
*/
class Pickup_model extends CI_model
{
	function can_login($no_siri)
	{
		$multipleWhere = ['no_siri' => $no_siri, 'kehadiran' => '0'];
		$this->db->select('*');
		$this->db->from('amd');
		//$this->db->where('no_siri', $no_siri);
		$this->db->where($multipleWhere);
		$this->db->limit(1);

		$query = $this->db->get();

		if($query->num_rows() == 1)
		{
			return $query->result();
		}

		else
		{
			return false;
		}
	}

	// function check_data_available($kehadiran,$no_siri)
	// {
	// 	$this->db->where('kehadiran', $kehadiran);
	// 	$query = $this->db->get();

	// 	if($query->num_rows() == 0)
	// 	{
	// 		return $query->result();
	// 	}

	// 	else
	// 	{
	// 		return false;
	// 	}
	// }

	public function hadir($data,$no_siri){
		$this->db->where('amd.no_siri',$no_siri);
		return $this->db->update('amd',$data);
	}

	public function checkhadirandesit($no_siri){
		$multipleWhere = ['no_siri' => $no_siri, 'kehadiran' => '1'];
		$this->db->select('*');
		$this->db->from('amd');
		$this->db->where($multipleWhere);
		$this->db->limit(1);

		$query = $this->db->get();

		if($query->num_rows() == 1)
		{
			return $query->result();
		}

		else
		{
			return false;
		}
	}

	public function totalpesertaamd(){
    	$this->db->select('count(*)');
    	$this->db->from('amd');
    	$this->db->where('income > 0');
    	$result = $this->db->count_all_results();
    	echo $result;
  	}

  	public function bakalhadiramd(){
    	$this->db->select('count(*)');
    	$this->db->from('amd');
    	$this->db->where('kehadiran !="1" and income >0');
    	$result = $this->db->count_all_results();
    	echo $result;
  	}

  	public function hadiramd(){
    	$this->db->select('count(*)');
    	$this->db->from('amd');
    	$this->db->where('kehadiran ="1" and income >0');
    	$result = $this->db->count_all_results();
    	echo $result;
  	}




  	//////////////////this for smf///////////////////////////////////////

  	function can_loginsmf($no_siri)
	{
		$multipleWhere = ['no_siri' => $no_siri, 'kehadiran' => '0'];
		$this->db->select('*');
		$this->db->from('smf');
		//$this->db->where('no_siri', $no_siri);
		$this->db->where($multipleWhere);
		$this->db->limit(1);

		$query = $this->db->get();

		if($query->num_rows() == 1)
		{
			return $query->result();
		}

		else
		{
			return false;
		}
	}

	public function hadirsmf($data,$no_siri){
		$this->db->where('smf.no_siri',$no_siri);
		return $this->db->update('smf',$data);
	}

	public function checkhadirandesitsmf($no_siri){
		$multipleWhere = ['no_siri' => $no_siri, 'kehadiran' => '1'];
		$this->db->select('*');
		$this->db->from('smf');
		$this->db->where($multipleWhere);
		$this->db->limit(1);

		$query = $this->db->get();

		if($query->num_rows() == 1)
		{
			return $query->result();
		}

		else
		{
			return false;
		}
	}

	public function totalpesertasmf(){
    	$this->db->select('count(*)');
    	$this->db->from('smf');
    	$this->db->where('income > 0');
    	$result = $this->db->count_all_results();
    	echo $result;
  	}

  	public function bakalhadirsmf(){
    	$this->db->select('count(*)');
    	$this->db->from('smf');
    	$this->db->where('kehadiran !="1" and income >0');
    	$result = $this->db->count_all_results();
    	echo $result;
  	}

  	public function hadirseminarsmf(){
    	$this->db->select('count(*)');
    	$this->db->from('smf');
    	$this->db->where('kehadiran ="1" and income >0');
    	$result = $this->db->count_all_results();
    	echo $result;
  	}

  	///////////////////////////////this for smh/////////////////////////////////////
  	function can_loginsmh($no_siri)
	{
		$multipleWhere = ['no_siri' => $no_siri, 'kehadiran' => '0'];
		$this->db->select('*');
		$this->db->from('smh');
		//$this->db->where('no_siri', $no_siri);
		$this->db->where($multipleWhere);
		$this->db->limit(1);

		$query = $this->db->get();

		if($query->num_rows() == 1)
		{
			return $query->result();
		}

		else
		{
			return false;
		}
	}

	public function hadirsmh($data,$no_siri){
		$this->db->where('smh.no_siri',$no_siri);
		return $this->db->update('smh',$data);
	}

	public function checkhadirandesitsmh($no_siri){
		$multipleWhere = ['no_siri' => $no_siri, 'kehadiran' => '1'];
		$this->db->select('*');
		$this->db->from('smh');
		$this->db->where($multipleWhere);
		$this->db->limit(1);

		$query = $this->db->get();

		if($query->num_rows() == 1)
		{
			return $query->result();
		}

		else
		{
			return false;
		}
	}

	public function totalpesertasmh(){
    	$this->db->select('count(*)');
    	$this->db->from('smh');
    	$this->db->where('income > 0');
    	$result = $this->db->count_all_results();
    	echo $result;
  	}

  	public function bakalhadirsmh(){
    	$this->db->select('count(*)');
    	$this->db->from('smh');
    	$this->db->where('kehadiran !="1" and income >0');
    	$result = $this->db->count_all_results();
    	echo $result;
  	}

  	public function hadirseminarsmh(){
    	$this->db->select('count(*)');
    	$this->db->from('smh');
    	$this->db->where('kehadiran ="1" and income >0');
    	$result = $this->db->count_all_results();
    	echo $result;
  	}

  	////////////////////////////////rcm pickup here/////////////////////////////////////

  	function can_loginrcm($no_siri)
	{
		$multipleWhere = ['no_siri' => $no_siri, 'kehadiran' => '0'];
		$this->db->select('*');
		$this->db->from('rcm');
		//$this->db->where('no_siri', $no_siri);
		$this->db->where($multipleWhere);
		$this->db->limit(1);

		$query = $this->db->get();

		if($query->num_rows() == 1)
		{
			return $query->result();
		}

		else
		{
			return false;
		}
	}

	public function hadirrcm($data,$no_siri){
		$this->db->where('rcm.no_siri',$no_siri);
		return $this->db->update('rcm',$data);
	}

	public function checkhadirandesitrcm($no_siri){
		$multipleWhere = ['no_siri' => $no_siri, 'kehadiran' => '1'];
		$this->db->select('*');
		$this->db->from('rcm');
		$this->db->where($multipleWhere);
		$this->db->limit(1);

		$query = $this->db->get();

		if($query->num_rows() == 1)
		{
			return $query->result();
		}

		else
		{
			return false;
		}
	}

	public function totalpesertarcm(){
    	$this->db->select('count(*)');
    	$this->db->from('rcm');
    	$this->db->where('income > 0 or income = "NA"');
    	$result = $this->db->count_all_results();
    	echo $result;
  	}

  	public function bakalhadirrcm(){
    	$this->db->select('count(*)');
    	$this->db->from('rcm');
    	$this->db->where('kehadiran !="1" and income >0');
    	$result = $this->db->count_all_results();
    	echo $result;
  	}

  	public function hadirseminarrcm(){
    	$this->db->select('count(*)');
    	$this->db->from('rcm');
    	$this->db->where('kehadiran ="1" and income >0');
    	$result = $this->db->count_all_results();
    	echo $result;
  	}


  	////////////////////////////////mmd////////////////////////

  	function can_loginmmd($no_siri)
	{
		$multipleWhere = ['no_siri' => $no_siri, 'kehadiran' => '0'];
		$this->db->select('*');
		$this->db->from('mmd');
		//$this->db->where('no_siri', $no_siri);
		$this->db->where($multipleWhere);
		$this->db->limit(1);

		$query = $this->db->get();

		if($query->num_rows() == 1)
		{
			return $query->result();
		}

		else
		{
			return false;
		}
	}

	public function hadirmmd($data,$no_siri){
		$this->db->where('mmd.no_siri',$no_siri);
		return $this->db->update('mmd',$data);
	}

	public function checkhadirandesitmmd($no_siri){
		$multipleWhere = ['no_siri' => $no_siri, 'kehadiran' => '1'];
		$this->db->select('*');
		$this->db->from('mmd');
		$this->db->where($multipleWhere);
		$this->db->limit(1);

		$query = $this->db->get();

		if($query->num_rows() == 1)
		{
			return $query->result();
		}

		else
		{
			return false;
		}
	}

	public function totalpesertammd(){
    	$this->db->select('count(*)');
    	$this->db->from('mmd');
    	// $this->db->where('income > 0');
    	$result = $this->db->count_all_results();
    	echo $result;
  	}

  	public function bakalhadirmmd(){
    	$this->db->select('count(*)');
    	$this->db->from('mmd');
    	$this->db->where('kehadiran !="1"');
    	$result = $this->db->count_all_results();
    	echo $result;
  	}

  	public function hadirseminarmmd(){
    	$this->db->select('count(*)');
    	$this->db->from('mmd');
    	$this->db->where('kehadiran ="1"');
    	$result = $this->db->count_all_results();
    	echo $result;
  	}

  	//////////////////////mmmf////////////
  	function can_loginmmf($no_siri)
	{
		$multipleWhere = ['no_siri' => $no_siri, 'kehadiran' => '0'];
		$this->db->select('*');
		$this->db->from('mmf');
		//$this->db->where('no_siri', $no_siri);
		$this->db->where($multipleWhere);
		$this->db->limit(1);

		$query = $this->db->get();

		if($query->num_rows() == 1)
		{
			return $query->result();
		}

		else
		{
			return false;
		}
	}

	public function hadirmmf($data,$no_siri){
		$this->db->where('mmf.no_siri',$no_siri);
		return $this->db->update('mmf',$data);
	}

	public function checkhadirandesitmmf($no_siri){
		$multipleWhere = ['no_siri' => $no_siri, 'kehadiran' => '1'];
		$this->db->select('*');
		$this->db->from('mmf');
		$this->db->where($multipleWhere);
		$this->db->limit(1);

		$query = $this->db->get();

		if($query->num_rows() == 1)
		{
			return $query->result();
		}

		else
		{
			return false;
		}
	}

	public function totalpesertammf(){
    	$this->db->select('count(*)');
    	$this->db->from('mmf');
    	//$this->db->where('income > 0');
    	$result = $this->db->count_all_results();
    	echo $result;
  	}

  	public function bakalhadirmmf(){
    	$this->db->select('count(*)');
    	$this->db->from('mmf');
    	$this->db->where('kehadiran !="1"');
    	$result = $this->db->count_all_results();
    	echo $result;
  	}

  	public function hadirseminarmmf(){
    	$this->db->select('count(*)');
    	$this->db->from('mmf');
    	$this->db->where('kehadiran ="1"');
    	$result = $this->db->count_all_results();
    	echo $result;
  	}

  	/////////////////////mmh/////////////////////
  	function can_loginmmh($no_siri)
	{
		$multipleWhere = ['no_siri' => $no_siri, 'kehadiran' => '0'];
		$this->db->select('*');
		$this->db->from('mmh');
		//$this->db->where('no_siri', $no_siri);
		$this->db->where($multipleWhere);
		$this->db->limit(1);

		$query = $this->db->get();

		if($query->num_rows() == 1)
		{
			return $query->result();
		}

		else
		{
			return false;
		}
	}

	public function hadirmmh($data,$no_siri){
		$this->db->where('mmh.no_siri',$no_siri);
		return $this->db->update('mmh',$data);
	}

	public function checkhadirandesitmmh($no_siri){
		$multipleWhere = ['no_siri' => $no_siri, 'kehadiran' => '1'];
		$this->db->select('*');
		$this->db->from('mmh');
		$this->db->where($multipleWhere);
		$this->db->limit(1);

		$query = $this->db->get();

		if($query->num_rows() == 1)
		{
			return $query->result();
		}

		else
		{
			return false;
		}
	}

	public function totalpesertammh(){
    	$this->db->select('count(*)');
    	$this->db->from('mmh');
    	// $this->db->where('income > 0');
    	$result = $this->db->count_all_results();
    	echo $result;
  	}

  	public function bakalhadirmmh(){
    	$this->db->select('count(*)');
    	$this->db->from('mmh');
    	$this->db->where('kehadiran !="1"');
    	$result = $this->db->count_all_results();
    	echo $result;
  	}

  	public function hadirseminarmmh(){
    	$this->db->select('count(*)');
    	$this->db->from('mmh');
    	$this->db->where('kehadiran ="1"');
    	$result = $this->db->count_all_results();
    	echo $result;
  	}


  	///////////////////////////////////////////////////////mcm///////////////////////////////
  	function can_loginmcm($no_siri)
	{
		$multipleWhere = ['no_siri' => $no_siri, 'kehadiran' => '0'];
		$this->db->select('*');
		$this->db->from('mcm');
		//$this->db->where('no_siri', $no_siri);
		$this->db->where($multipleWhere);
		$this->db->limit(1);

		$query = $this->db->get();

		if($query->num_rows() == 1)
		{
			return $query->result();
		}

		else
		{
			return false;
		}
	}

	public function hadirmcm($data,$no_siri){
		$this->db->where('mcm.no_siri',$no_siri);
		return $this->db->update('mcm',$data);
	}

	public function checkhadirandesitmcm($no_siri){
		$multipleWhere = ['no_siri' => $no_siri, 'kehadiran' => '1'];
		$this->db->select('*');
		$this->db->from('mcm');
		$this->db->where($multipleWhere);
		$this->db->limit(1);

		$query = $this->db->get();

		if($query->num_rows() == 1)
		{
			return $query->result();
		}

		else
		{
			return false;
		}
	}

	public function totalpesertamcm(){
    	$this->db->select('count(*)');
    	$this->db->from('mcm');
    	// $this->db->where('income > 0');
    	$result = $this->db->count_all_results();
    	echo $result;
  	}

  	public function bakalhadirmcm(){
    	$this->db->select('count(*)');
    	$this->db->from('mcm');
    	$this->db->where('kehadiran !="1"');
    	$result = $this->db->count_all_results();
    	echo $result;
  	}

  	public function hadirseminarmcm(){
    	$this->db->select('count(*)');
    	$this->db->from('mcm');
    	$this->db->where('kehadiran ="1"');
    	$result = $this->db->count_all_results();
    	echo $result;
  	}
}