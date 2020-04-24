<?php 
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Statis extends MY_Controller{
	
	function __construct(){
		parent::__construct();
		$this->load->helper(array('form', 'url'));
        $this->load->library('form_validation');
        $this->load->library('session');
        $this->load->model('chart_model');
		//$this->load->model('crud_model');
        $this->load->model('auth_model');
        $this->load->model('modelamd');
        $this->load->model('modelamdchart');
		$this->load->model('modelsmh');
		$this->load->model('modelsmhchart');
        $this->load->model('modelsmf');
        $this->load->model('modelsmfchart');
        $this->load->model('modelrcm');
        $this->load->model('modelrcmchart');
		$this->load->helper('string');
	}

	function index(){
		$this->load->view('header');
        $this->load->view('sidebar');
        $this->account();
        $this->load->view('statistic/dashboardstatis');
        $this->load->view('statistic/menuseminar');
        $this->load->view('footer');
        $this->load->view('jsfooter');
	}

/////////////////////////////////seminar amd data//////////////
	function amddata(){

        ///pie chart statis syarikat
        $data=$this->modelsmfchart->piedata();
        $x22['data']=json_encode($data);

        ///pie chart working
        $data=$this->modelsmfchart->piedataworking();
        $x23['data']=json_encode($data);

        ///pie chart industry
        $data=$this->modelsmfchart->piedataindustry();
        $x24['data']=json_encode($data);

        ///pie chart state
        $data=$this->modelsmfchart->piedatastate();
        $x25['data']=json_encode($data);

        ///pie chart funnel
        $data=$this->modelsmfchart->piedatafunnel();
        $x26['data']=json_encode($data);

        ///pie chart experience
        $data=$this->modelsmfchart->piedataexp();
        $x27['data']=json_encode($data);

        ///pie chart experience
        $data=$this->modelsmfchart->piedatainvest();
        $x28['data']=json_encode($data);

        ///pie chart income
        $data=$this->modelsmfchart->piedataincome();
        $x29['data']=json_encode($data);

		$this->load->view('header');
        $this->load->view('sidebar');
        $this->account();
        $this->load->view('seminar/amd/amddashboard');
		$this->load->view('seminar/amd/amddata');
		$this->load->view('seminar/amd/amddata2');
		$this->load->view('seminar/amd/tab penal/amdstatussyarikat',$x22);
		$this->load->view('seminar/amd/tab penal/amdstatuspekerjaan',$x23);
		$this->load->view('seminar/amd/tab penal/amdindustry',$x24);
		$this->load->view('seminar/amd/tab penal/amdnegeri',$x25);
		$this->load->view('seminar/amd/tab penal/amdfunnel',$x26);
		$this->load->view('seminar/amd/tab penal/amdpengalaman',$x27);
		$this->load->view('seminar/amd/tab penal/amdjumpelaburan',$x28);
		$this->load->view('seminar/amd/tab penal/amdjumpedapatan',$x29);
        $this->load->view('footer');
        $this->load->view('jsfooter');
	}

    ////////////////////////////////////////////chart amd//////////////////////////

    ////////////////////this for amd/////////////////////
    ///////////////////////////////pie for status
    function getpiedataamd(){
        $data = $this->modelamdchart->piedata();
        $responce->cols[] = array( 
             "id" => "", 
            "label" => "Topping", 
            "pattern" => "", 
            "type" => "string" 
        ); 
        $responce->cols[] = array( 
            "id" => "", 
            "label" => "Total", 
            "pattern" => "", 
            "type" => "number" 
        ); 
        foreach($data as $cd){ 
            $responce->rows[]["c"] = array( 
                array( 
                    "v" => "$cd->status", 
                    "f" => null 
                ) , 
                array( 
                    "v" => (int)$cd->total,
                    "f" => null 
                ) 
            ); 
        }

        echo json_encode($responce); 
    }

    ///////////////////////////////pie for working
    function getworking2amd(){
        $data = $this->modelamdchart->piedataworking();
        $responce->cols[] = array( 
            "id" => "", 
            "label" => "Topping", 
            "pattern" => "", 
            "type" => "string" 
        ); 
        $responce->cols[] = array( 
            "id" => "", 
            "label" => "Total", 
            "pattern" => "", 
            "type" => "number" 
        ); 
        foreach($data as $cd){ 
            $responce->rows[]["c"] = array( 
                array( 
                    "v" => "$cd->working", 
                    "f" => null 
                ) , 
                array(
                    "v" => (int)$cd->total,
                    "f" => null 
                ) 
            ); 
        }

        echo json_encode($responce); 
    }

    ///////////////////////////////pie for industry
    function getindustryamd(){
        $data = $this->modelamdchart->piedataindustry();
        $responce->cols[] = array( 
            "id" => "", 
            "label" => "Topping", 
            "pattern" => "", 
            "type" => "string" 
        ); 
        $responce->cols[] = array( 
            "id" => "", 
            "label" => "Total", 
            "pattern" => "", 
            "type" => "number" 
        ); 
        foreach($data as $cd){ 
            $responce->rows[]["c"] = array( 
                array( 
                    "v" => "$cd->industry", 
                    "f" => null 
                ) , 
                array(
                    "v" => (int)$cd->total,
                    "f" => null 
                ) 
            ); 
        }

        echo json_encode($responce); 
    }

    ///////////////////////////////pie for industry
    function getstateamd(){
        $data = $this->modelamdchart->piedatastate();
        $responce->cols[] = array( 
            "id" => "", 
            "label" => "Topping", 
            "pattern" => "", 
            "type" => "string" 
        ); 
        $responce->cols[] = array( 
            "id" => "", 
            "label" => "Total", 
            "pattern" => "", 
            "type" => "number" 
        ); 
        foreach($data as $cd){ 
            $responce->rows[]["c"] = array( 
                array( 
                    "v" => "$cd->state", 
                    "f" => null 
                ) , 
                array(
                    "v" => (int)$cd->total,
                    "f" => null 
                ) 
            ); 
        }

        echo json_encode($responce); 
    }

    ///////////////////////////////pie for industry
    function getfunnelamd(){
        $data = $this->modelamdchart->piedatafunnel();
        $responce->cols[] = array( 
            "id" => "", 
            "label" => "Topping", 
            "pattern" => "", 
            "type" => "string" 
        ); 
        $responce->cols[] = array( 
            "id" => "", 
            "label" => "Total", 
            "pattern" => "", 
            "type" => "number" 
        ); 
        foreach($data as $cd){ 
            $responce->rows[]["c"] = array( 
                array( 
                    "v" => "$cd->funnel", 
                    "f" => null 
                ) , 
                array(
                    "v" => (int)$cd->total,
                    "f" => null 
                ) 
            ); 
        }

        echo json_encode($responce); 
    }

    ///////////////////////////////pie for exp
    function getexpamd(){
        $data = $this->modelamdchart->piedataexp();
        $responce->cols[] = array( 
            "id" => "", 
            "label" => "Topping", 
            "pattern" => "", 
            "type" => "string" 
        ); 
        $responce->cols[] = array( 
            "id" => "", 
            "label" => "Total", 
            "pattern" => "", 
            "type" => "number" 
        ); 
        foreach($data as $cd){ 
            $responce->rows[]["c"] = array( 
                array( 
                    "v" => "$cd->experience", 
                    "f" => null 
                ) , 
                array(
                    "v" => (int)$cd->total,
                    "f" => null 
                ) 
            ); 
        }

        echo json_encode($responce); 
    }

    ///////////////////////////////pie for exp
    function getinvestamd(){
        $data = $this->modelamdchart->piedatainvest();
        $responce->cols[] = array( 
            "id" => "", 
            "label" => "Topping", 
            "pattern" => "", 
            "type" => "string" 
        ); 
        $responce->cols[] = array( 
            "id" => "", 
            "label" => "Total", 
            "pattern" => "", 
            "type" => "number" 
        ); 
        foreach($data as $cd){ 
            $responce->rows[]["c"] = array( 
                array( 
                    "v" => "$cd->investment", 
                    "f" => null 
                ) , 
                array(
                    "v" => (int)$cd->total,
                    "f" => null 
                ) 
            ); 
        }

        echo json_encode($responce); 
    }

    ///////////////////////////////pie for exp
    function getincomeamd(){
        $data = $this->modelamdchart->piedataincome();
        $responce->cols[] = array( 
            "id" => "", 
            "label" => "Topping", 
            "pattern" => "", 
            "type" => "string" 
        ); 
        $responce->cols[] = array( 
            "id" => "", 
            "label" => "Total", 
            "pattern" => "", 
            "type" => "number" 
        ); 
        foreach($data as $cd){ 
            $responce->rows[]["c"] = array( 
                array( 
                    "v" => "$cd->income", 
                    "f" => null 
                ) , 
                array(
                    "v" => (int)$cd->total,
                    "f" => null 
                ) 
            ); 
        }

        echo json_encode($responce); 
    }


////////////////////////////////////seminar smf data//////////////////
	function smfdata(){

        ///pie chart statis syarikat
        $data=$this->modelsmfchart->piedata();
        $x12['data']=json_encode($data);

        ///pie chart working
        $data=$this->modelsmfchart->piedataworking();
        $x13['data']=json_encode($data);

        ///pie chart industry
        $data=$this->modelsmfchart->piedataindustry();
        $x14['data']=json_encode($data);

        ///pie chart state
        $data=$this->modelsmfchart->piedatastate();
        $x15['data']=json_encode($data);

        ///pie chart funnel
        $data=$this->modelsmfchart->piedatafunnel();
        $x16['data']=json_encode($data);

        ///pie chart experience
        $data=$this->modelsmfchart->piedataexp();
        $x17['data']=json_encode($data);

        ///pie chart experience
        $data=$this->modelsmfchart->piedatainvest();
        $x18['data']=json_encode($data);

        ///pie chart income
        $data=$this->modelsmfchart->piedataincome();
        $x19['data']=json_encode($data);

		$this->load->view('header');
        $this->load->view('sidebar');
        $this->account();
        $this->load->view('seminar/smf/smfdashboard');
		$this->load->view('seminar/smf/smfdata');
		$this->load->view('seminar/smf/smfdata2');
		$this->load->view('seminar/smf/tab penal/smfstatussyarikat',$x12);
		$this->load->view('seminar/smf/tab penal/smfstatuspekerjaan',$x13);
		$this->load->view('seminar/smf/tab penal/smfindustry',$x14);
		$this->load->view('seminar/smf/tab penal/smfnegeri',$x15);
		$this->load->view('seminar/smf/tab penal/smffunnel',$x16);
		$this->load->view('seminar/smf/tab penal/smfpengalaman',$x17);
		$this->load->view('seminar/smf/tab penal/smfjumpelaburan',$x18);
		$this->load->view('seminar/smf/tab penal/smfjumpedapatan',$x19);
        $this->load->view('footer');
        $this->load->view('jsfooter');
	}

    ////////////////////chart smf///////////////


    ////////////////////this for smf/////////////////////
    ///////////////////////////////pie for status
    function getpiedatasmf(){
        $data = $this->modelsmfchart->piedata();
        $responce->cols[] = array( 
             "id" => "", 
            "label" => "Topping", 
            "pattern" => "", 
            "type" => "string" 
        ); 
        $responce->cols[] = array( 
            "id" => "", 
            "label" => "Total", 
            "pattern" => "", 
            "type" => "number" 
        ); 
        foreach($data as $cd){ 
            $responce->rows[]["c"] = array( 
                array( 
                    "v" => "$cd->status", 
                    "f" => null 
                ) , 
                array( 
                    "v" => (int)$cd->total,
                    "f" => null 
                ) 
            ); 
        }

        echo json_encode($responce); 
    }

    ///////////////////////////////pie for working
    function getworking2smf(){
        $data = $this->modelsmfchart->piedataworking();
        $responce->cols[] = array( 
            "id" => "", 
            "label" => "Topping", 
            "pattern" => "", 
            "type" => "string" 
        ); 
        $responce->cols[] = array( 
            "id" => "", 
            "label" => "Total", 
            "pattern" => "", 
            "type" => "number" 
        ); 
        foreach($data as $cd){ 
            $responce->rows[]["c"] = array( 
                array( 
                    "v" => "$cd->working", 
                    "f" => null 
                ) , 
                array(
                    "v" => (int)$cd->total,
                    "f" => null 
                ) 
            ); 
        }

        echo json_encode($responce); 
    }

    ///////////////////////////////pie for industry
    function getindustrysmf(){
        $data = $this->modelsmfchart->piedataindustry();
        $responce->cols[] = array( 
            "id" => "", 
            "label" => "Topping", 
            "pattern" => "", 
            "type" => "string" 
        ); 
        $responce->cols[] = array( 
            "id" => "", 
            "label" => "Total", 
            "pattern" => "", 
            "type" => "number" 
        ); 
        foreach($data as $cd){ 
            $responce->rows[]["c"] = array( 
                array( 
                    "v" => "$cd->industry", 
                    "f" => null 
                ) , 
                array(
                    "v" => (int)$cd->total,
                    "f" => null 
                ) 
            ); 
        }

        echo json_encode($responce); 
    }

    ///////////////////////////////pie for industry
    function getstatesmf(){
        $data = $this->modelsmfchart->piedatastate();
        $responce->cols[] = array( 
            "id" => "", 
            "label" => "Topping", 
            "pattern" => "", 
            "type" => "string" 
        ); 
        $responce->cols[] = array( 
            "id" => "", 
            "label" => "Total", 
            "pattern" => "", 
            "type" => "number" 
        ); 
        foreach($data as $cd){ 
            $responce->rows[]["c"] = array( 
                array( 
                    "v" => "$cd->state", 
                    "f" => null 
                ) , 
                array(
                    "v" => (int)$cd->total,
                    "f" => null 
                ) 
            ); 
        }

        echo json_encode($responce); 
    }

    ///////////////////////////////pie for industry
    function getfunnelsmf(){
        $data = $this->modelsmfchart->piedatafunnel();
        $responce->cols[] = array( 
            "id" => "", 
            "label" => "Topping", 
            "pattern" => "", 
            "type" => "string" 
        ); 
        $responce->cols[] = array( 
            "id" => "", 
            "label" => "Total", 
            "pattern" => "", 
            "type" => "number" 
        ); 
        foreach($data as $cd){ 
            $responce->rows[]["c"] = array( 
                array( 
                    "v" => "$cd->funnel", 
                    "f" => null 
                ) , 
                array(
                    "v" => (int)$cd->total,
                    "f" => null 
                ) 
            ); 
        }

        echo json_encode($responce); 
    }

    ///////////////////////////////pie for exp
    function getexpsmf(){
        $data = $this->modelsmfchart->piedataexp();
        $responce->cols[] = array( 
            "id" => "", 
            "label" => "Topping", 
            "pattern" => "", 
            "type" => "string" 
        ); 
        $responce->cols[] = array( 
            "id" => "", 
            "label" => "Total", 
            "pattern" => "", 
            "type" => "number" 
        ); 
        foreach($data as $cd){ 
            $responce->rows[]["c"] = array( 
                array( 
                    "v" => "$cd->experience", 
                    "f" => null 
                ) , 
                array(
                    "v" => (int)$cd->total,
                    "f" => null 
                ) 
            ); 
        }

        echo json_encode($responce); 
    }

    ///////////////////////////////pie for exp
    function getinvestsmf(){
        $data = $this->modelsmfchart->piedatainvest();
        $responce->cols[] = array( 
            "id" => "", 
            "label" => "Topping", 
            "pattern" => "", 
            "type" => "string" 
        ); 
        $responce->cols[] = array( 
            "id" => "", 
            "label" => "Total", 
            "pattern" => "", 
            "type" => "number" 
        ); 
        foreach($data as $cd){ 
            $responce->rows[]["c"] = array( 
                array( 
                    "v" => "$cd->investment", 
                    "f" => null 
                ) , 
                array(
                    "v" => (int)$cd->total,
                    "f" => null 
                ) 
            ); 
        }

        echo json_encode($responce); 
    }

    ///////////////////////////////pie for exp
    function getincomesmf(){
        $data = $this->modelsmfchart->piedataincome();
        $responce->cols[] = array( 
            "id" => "", 
            "label" => "Topping", 
            "pattern" => "", 
            "type" => "string" 
        ); 
        $responce->cols[] = array( 
            "id" => "", 
            "label" => "Total", 
            "pattern" => "", 
            "type" => "number" 
        ); 
        foreach($data as $cd){ 
            $responce->rows[]["c"] = array( 
                array( 
                    "v" => "$cd->income", 
                    "f" => null 
                ) , 
                array(
                    "v" => (int)$cd->total,
                    "f" => null 
                ) 
            ); 
        }

        echo json_encode($responce); 
    }



/////////////////////////////////////////////////////////////seminar smh data/////////////////////////

	public function smhdata()
	{

		///pie chart statis syarikat
		$data=$this->modelsmhchart->piedata();
		$x2['data']=json_encode($data);

		///pie chart working
		$data=$this->modelsmhchart->piedataworking();
		$x3['data']=json_encode($data);

		///pie chart industry
		$data=$this->modelsmhchart->piedataindustry();
		$x4['data']=json_encode($data);

		///pie chart state
		$data=$this->modelsmhchart->piedatastate();
		$x5['data']=json_encode($data);

		///pie chart funnel
		$data=$this->modelsmhchart->piedatafunnel();
		$x6['data']=json_encode($data);

		///pie chart experience
		$data=$this->modelsmhchart->piedataexp();
		$x7['data']=json_encode($data);

		///pie chart experience
		$data=$this->modelsmhchart->piedatainvest();
		$x8['data']=json_encode($data);

		///pie chart income
		$data=$this->modelsmhchart->piedataincome();
		$x9['data']=json_encode($data);


		$this->load->view('header');
		$this->load->view('sidebar');
		$this->account();
		$this->load->view('seminar/smhapril/smhdashboard');
		$this->load->view('seminar/smhapril/smhdata');
		$this->load->view('seminar/smhapril/smhdata2');
		$this->load->view('seminar/smhapril/tab penal/statussyarikat',$x2);
		$this->load->view('seminar/smhapril/tab penal/statuspekerjaan',$x3);
		$this->load->view('seminar/smhapril/tab penal/industry',$x4);
		$this->load->view('seminar/smhapril/tab penal/negeri',$x5);
		$this->load->view('seminar/smhapril/tab penal/funnel',$x6);
		$this->load->view('seminar/smhapril/tab penal/pengalaman',$x7);
		$this->load->view('seminar/smhapril/tab penal/jumpelaburan',$x8);
		$this->load->view('seminar/smhapril/tab penal/jumpedapatan',$x9);
		$this->load->view('footer');
		$this->load->view('jsfooter');
	}


    //////////////////charttt smh//////////////

    ////////////////////this for smh/////////////////////
    ///////////////////////////////pie for status
    function getpiedata(){
        $data = $this->modelsmhchart->piedata();
        $responce->cols[] = array( 
             "id" => "", 
            "label" => "Topping", 
            "pattern" => "", 
            "type" => "string" 
        ); 
        $responce->cols[] = array( 
            "id" => "", 
            "label" => "Total", 
            "pattern" => "", 
            "type" => "number" 
        ); 
        foreach($data as $cd){ 
            $responce->rows[]["c"] = array( 
                array( 
                    "v" => "$cd->status", 
                    "f" => null 
                ) , 
                array( 
                    "v" => (int)$cd->total,
                    "f" => null 
                ) 
            ); 
        }

        echo json_encode($responce); 
    }

    ///////////////////////////////pie for working
    function getworking2(){
        $data = $this->modelsmhchart->piedataworking();
        $responce->cols[] = array( 
            "id" => "", 
            "label" => "Topping", 
            "pattern" => "", 
            "type" => "string" 
        ); 
        $responce->cols[] = array( 
            "id" => "", 
            "label" => "Total", 
            "pattern" => "", 
            "type" => "number" 
        ); 
        foreach($data as $cd){ 
            $responce->rows[]["c"] = array( 
                array( 
                    "v" => "$cd->working", 
                    "f" => null 
                ) , 
                array(
                    "v" => (int)$cd->total,
                    "f" => null 
                ) 
            ); 
        }

        echo json_encode($responce); 
    }

    ///////////////////////////////pie for industry
    function getindustry(){
        $data = $this->modelsmhchart->piedataindustry();
        $responce->cols[] = array( 
            "id" => "", 
            "label" => "Topping", 
            "pattern" => "", 
            "type" => "string" 
        ); 
        $responce->cols[] = array( 
            "id" => "", 
            "label" => "Total", 
            "pattern" => "", 
            "type" => "number" 
        ); 
        foreach($data as $cd){ 
            $responce->rows[]["c"] = array( 
                array( 
                    "v" => "$cd->industry", 
                    "f" => null 
                ) , 
                array(
                    "v" => (int)$cd->total,
                    "f" => null 
                ) 
            ); 
        }

        echo json_encode($responce); 
    }

    ///////////////////////////////pie for industry
    function getstate(){
        $data = $this->modelsmhchart->piedatastate();
        $responce->cols[] = array( 
            "id" => "", 
            "label" => "Topping", 
            "pattern" => "", 
            "type" => "string" 
        ); 
        $responce->cols[] = array( 
            "id" => "", 
            "label" => "Total", 
            "pattern" => "", 
            "type" => "number" 
        ); 
        foreach($data as $cd){ 
            $responce->rows[]["c"] = array( 
                array( 
                    "v" => "$cd->state", 
                    "f" => null 
                ) , 
                array(
                    "v" => (int)$cd->total,
                    "f" => null 
                ) 
            ); 
        }

        echo json_encode($responce); 
    }

    ///////////////////////////////pie for industry
    function getfunnel(){
        $data = $this->modelsmhchart->piedatafunnel();
        $responce->cols[] = array( 
            "id" => "", 
            "label" => "Topping", 
            "pattern" => "", 
            "type" => "string" 
        ); 
        $responce->cols[] = array( 
            "id" => "", 
            "label" => "Total", 
            "pattern" => "", 
            "type" => "number" 
        ); 
        foreach($data as $cd){ 
            $responce->rows[]["c"] = array( 
                array( 
                    "v" => "$cd->funnel", 
                    "f" => null 
                ) , 
                array(
                    "v" => (int)$cd->total,
                    "f" => null 
                ) 
            ); 
        }

        echo json_encode($responce); 
    }

    ///////////////////////////////pie for exp
    function getexp(){
        $data = $this->modelsmhchart->piedataexp();
        $responce->cols[] = array( 
            "id" => "", 
            "label" => "Topping", 
            "pattern" => "", 
            "type" => "string" 
        ); 
        $responce->cols[] = array( 
            "id" => "", 
            "label" => "Total", 
            "pattern" => "", 
            "type" => "number" 
        ); 
        foreach($data as $cd){ 
            $responce->rows[]["c"] = array( 
                array( 
                    "v" => "$cd->experience", 
                    "f" => null 
                ) , 
                array(
                    "v" => (int)$cd->total,
                    "f" => null 
                ) 
            ); 
        }

        echo json_encode($responce); 
    }

    ///////////////////////////////pie for exp
    function getinvest(){
        $data = $this->modelsmhchart->piedatainvest();
        $responce->cols[] = array( 
            "id" => "", 
            "label" => "Topping", 
            "pattern" => "", 
            "type" => "string" 
        ); 
        $responce->cols[] = array( 
            "id" => "", 
            "label" => "Total", 
            "pattern" => "", 
            "type" => "number" 
        ); 
        foreach($data as $cd){ 
            $responce->rows[]["c"] = array( 
                array( 
                    "v" => "$cd->investment", 
                    "f" => null 
                ) , 
                array(
                    "v" => (int)$cd->total,
                    "f" => null 
                ) 
            ); 
        }

        echo json_encode($responce); 
    }

    ///////////////////////////////pie for exp
    function getincome(){
        $data = $this->modelsmhchart->piedataincome();
        $responce->cols[] = array( 
            "id" => "", 
            "label" => "Topping", 
            "pattern" => "", 
            "type" => "string" 
        ); 
        $responce->cols[] = array( 
            "id" => "", 
            "label" => "Total", 
            "pattern" => "", 
            "type" => "number" 
        ); 
        foreach($data as $cd){ 
            $responce->rows[]["c"] = array( 
                array( 
                    "v" => "$cd->income", 
                    "f" => null 
                ) , 
                array(
                    "v" => (int)$cd->total,
                    "f" => null 
                ) 
            ); 
        }

        echo json_encode($responce); 
    }

    /////////////////////seminar rcm data/////////////////

        public function rcmdata()
    {

        ///pie chart statis syarikat
        $data=$this->modelrcmchart->piedata();
        $x32['data']=json_encode($data);

        ///pie chart working
        $data=$this->modelrcmchart->piedataworking();
        $x33['data']=json_encode($data);

        ///pie chart industry
        $data=$this->modelrcmchart->piedataindustry();
        $x34['data']=json_encode($data);

        ///pie chart state
        $data=$this->modelrcmchart->piedatastate();
        $x35['data']=json_encode($data);

        ///pie chart funnel
        $data=$this->modelrcmchart->piedatafunnel();
        $x36['data']=json_encode($data);

        ///pie chart experience
        // $data=$this->modelrcmchart->piedataexp();
        // $x37['data']=json_encode($data);

        ///pie chart experience
        // $data=$this->modelrcmchart->piedatainvest();
        // $x38['data']=json_encode($data);

        ///pie chart income
        $data=$this->modelrcmchart->piedataincome();
        $x39['data']=json_encode($data);


        $this->load->view('header');
        $this->load->view('sidebar');
        $this->account();
        $this->load->view('seminar/rcm/rcmdashboard');
        $this->load->view('seminar/rcm/rcmdata');
        $this->load->view('seminar/rcm/rcmdata2');
        $this->load->view('seminar/rcm/tab penal/rcmstatussyarikat',$x32);
        $this->load->view('seminar/rcm/tab penal/rcmstatuspekerjaan',$x33);
        $this->load->view('seminar/rcm/tab penal/rcmindustry',$x34);
        $this->load->view('seminar/rcm/tab penal/rcmnegeri',$x35);
        $this->load->view('seminar/rcm/tab penal/rcmfunnel',$x36);
        //$this->load->view('seminar/rcm/tab penal/rcmpengalaman',$x37);
        //$this->load->view('seminar/rcm/tab penal/rcmjumpelaburan',$x38);
        $this->load->view('seminar/rcm/tab penal/rcmjumpedapatan',$x39);
        $this->load->view('footer');
        $this->load->view('jsfooter');
    }

    ////////////////////this for rcm/////////////////////
    ///////////////////////////////pie for status
    function getpiedatarcm(){
        $data = $this->modelrcmchart->piedata();
        $responce->cols[] = array( 
             "id" => "", 
            "label" => "Topping", 
            "pattern" => "", 
            "type" => "string" 
        ); 
        $responce->cols[] = array( 
            "id" => "", 
            "label" => "Total", 
            "pattern" => "", 
            "type" => "number" 
        ); 
        foreach($data as $cd){ 
            $responce->rows[]["c"] = array( 
                array( 
                    "v" => "$cd->status", 
                    "f" => null 
                ) , 
                array( 
                    "v" => (int)$cd->total,
                    "f" => null 
                ) 
            ); 
        }

        echo json_encode($responce); 
    }

    ///////////////////////////////pie for working
    function getworking2rcm(){
        $data = $this->modelrcmchart->piedataworking();
        $responce->cols[] = array( 
            "id" => "", 
            "label" => "Topping", 
            "pattern" => "", 
            "type" => "string" 
        ); 
        $responce->cols[] = array( 
            "id" => "", 
            "label" => "Total", 
            "pattern" => "", 
            "type" => "number" 
        ); 
        foreach($data as $cd){ 
            $responce->rows[]["c"] = array( 
                array( 
                    "v" => "$cd->working", 
                    "f" => null 
                ) , 
                array(
                    "v" => (int)$cd->total,
                    "f" => null 
                ) 
            ); 
        }

        echo json_encode($responce); 
    }

    ///////////////////////////////pie for industry
    function getindustryrcm(){
        $data = $this->modelrcmchart->piedataindustry();
        $responce->cols[] = array( 
            "id" => "", 
            "label" => "Topping", 
            "pattern" => "", 
            "type" => "string" 
        ); 
        $responce->cols[] = array( 
            "id" => "", 
            "label" => "Total", 
            "pattern" => "", 
            "type" => "number" 
        ); 
        foreach($data as $cd){ 
            $responce->rows[]["c"] = array( 
                array( 
                    "v" => "$cd->industry", 
                    "f" => null 
                ) , 
                array(
                    "v" => (int)$cd->total,
                    "f" => null 
                ) 
            ); 
        }

        echo json_encode($responce); 
    }

    ///////////////////////////////pie for industry
    function getstatercm(){
        $data = $this->modelrcmchart->piedatastate();
        $responce->cols[] = array( 
            "id" => "", 
            "label" => "Topping", 
            "pattern" => "", 
            "type" => "string" 
        ); 
        $responce->cols[] = array( 
            "id" => "", 
            "label" => "Total", 
            "pattern" => "", 
            "type" => "number" 
        ); 
        foreach($data as $cd){ 
            $responce->rows[]["c"] = array( 
                array( 
                    "v" => "$cd->state", 
                    "f" => null 
                ) , 
                array(
                    "v" => (int)$cd->total,
                    "f" => null 
                ) 
            ); 
        }

        echo json_encode($responce); 
    }

    ///////////////////////////////pie for industry
    function getfunnelrcm(){
        $data = $this->modelrcmchart->piedatafunnel();
        $responce->cols[] = array( 
            "id" => "", 
            "label" => "Topping", 
            "pattern" => "", 
            "type" => "string" 
        ); 
        $responce->cols[] = array( 
            "id" => "", 
            "label" => "Total", 
            "pattern" => "", 
            "type" => "number" 
        ); 
        foreach($data as $cd){ 
            $responce->rows[]["c"] = array( 
                array( 
                    "v" => "$cd->funnel", 
                    "f" => null 
                ) , 
                array(
                    "v" => (int)$cd->total,
                    "f" => null 
                ) 
            ); 
        }

        echo json_encode($responce); 
    }

    ///////////////////////////////pie for exp
    // function getexprcm(){
    //     $data = $this->modelrcmchart->piedataexp();
    //     $responce->cols[] = array( 
    //         "id" => "", 
    //         "label" => "Topping", 
    //         "pattern" => "", 
    //         "type" => "string" 
    //     ); 
    //     $responce->cols[] = array( 
    //         "id" => "", 
    //         "label" => "Total", 
    //         "pattern" => "", 
    //         "type" => "number" 
    //     ); 
    //     foreach($data as $cd){ 
    //         $responce->rows[]["c"] = array( 
    //             array( 
    //                 "v" => "$cd->experience", 
    //                 "f" => null 
    //             ) , 
    //             array(
    //                 "v" => (int)$cd->total,
    //                 "f" => null 
    //             ) 
    //         ); 
    //     }

    //     echo json_encode($responce); 
    // }

    ///////////////////////////////pie for exp
    // function getinvestrcm(){
    //     $data = $this->modelrcmchart->piedatainvest();
    //     $responce->cols[] = array( 
    //         "id" => "", 
    //         "label" => "Topping", 
    //         "pattern" => "", 
    //         "type" => "string" 
    //     ); 
    //     $responce->cols[] = array( 
    //         "id" => "", 
    //         "label" => "Total", 
    //         "pattern" => "", 
    //         "type" => "number" 
    //     ); 
    //     foreach($data as $cd){ 
    //         $responce->rows[]["c"] = array( 
    //             array( 
    //                 "v" => "$cd->investment", 
    //                 "f" => null 
    //             ) , 
    //             array(
    //                 "v" => (int)$cd->total,
    //                 "f" => null 
    //             ) 
    //         ); 
    //     }

    //     echo json_encode($responce); 
    // }

    ///////////////////////////////pie for exp
    function getincomercm(){
        $data = $this->modelrcmchart->piedataincome();
        $responce->cols[] = array( 
            "id" => "", 
            "label" => "Topping", 
            "pattern" => "", 
            "type" => "string" 
        ); 
        $responce->cols[] = array( 
            "id" => "", 
            "label" => "Total", 
            "pattern" => "", 
            "type" => "number" 
        ); 
        foreach($data as $cd){ 
            $responce->rows[]["c"] = array( 
                array( 
                    "v" => "$cd->income", 
                    "f" => null 
                ) , 
                array(
                    "v" => (int)$cd->total,
                    "f" => null 
                ) 
            ); 
        }

        echo json_encode($responce); 
    }
}