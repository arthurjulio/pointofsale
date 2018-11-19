<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Satuan extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->model("master/M_satuan","M_satuan");
	}

	function index(){
		$this->load->view("master/satuan");
	}

	function ajaxTable()
	{

		$list = $this->M_satuan->tampil();
    	$data = array();
        $no = $_POST['start'];
    	foreach ($list as $key) {
            $no++;
    		$row = array();
            $row[] = $no;
			$data[] = $row;
            
    	}
    	$output = array("draw" => $_POST['draw'],
                        "recordsTotal" => $this->M_satuan->count_all(),
                        "recordsFiltered" => $this->M_satuan->count_filtered(),
                        "data" => $data);

    	echo json_encode($output);
	}

}
