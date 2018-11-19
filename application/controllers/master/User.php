<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->model("master/M_user","M_User");
	}

	function index(){
		$this->load->view("master/user");
	}

	function ajaxTable()
	{
		$list = $this->M_User->tampil();
		$data = array();
		$no = $_POST['start'];
		foreach ($list as $key) {
			$no++;
			$row = array();
			$row[] = $no;
			$data[] = $row;
		}
		$output = array("draw" => $_POST['draw'],
						"recordsTotal" => $this->M_user->count_all(),
						"data" => $data);

		echo json_encode($output);
	}

}
