<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class Download extends MY_Controller {
	
	function __construct(){
		parent::__construct();
		$this->load->helper(array('url','download'));				
	}
	public function lakukan_download(){				
		force_download('./assets/download/premiercsv.csv',NULL);
	}

	public function lakukan_downloadmastery(){				
		force_download('./assets/download/masterycsv.csv',NULL);
	}
 
}