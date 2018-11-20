<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->model("master/M_user","M_user");
	}

	function index(){
		$this->load->view("master/user");
	}

	function ajaxTable()
	{
		$list = $this->M_user->tampil();
		$data = array();
		$no = $_POST['start'];
		foreach ($list as $key) {
			$no++;
			$row = array();
			$row[] = $key->nama;
			$row[] = $key->alamat;
			$row[] = $key->no_telpon;
			$row[] = $key->jabatan;
			$row[] = $key->username;
			$row[] = $key->password;
			$row[] = "
			<button class='btn btn-sm btn-primary' title='ubah data' data-toggle='modal' data-target='#modaltambahuser' onclick='ubah(".$key->id.")'><i class='fa fa-edit'></i></button>
			<button class='btn btn-sm btn-danger' title='hapus'><i class='fa fa-trash'></i></button>
			";
			$data[] = $row;
		}
		$output = array("draw" => $_POST['draw'],
						"recordsTotal" => $this->M_user->count_all(),
						"recordsFiltered" => $this->M_user->count_filtered(),
						"data" => $data);

		echo json_encode($output);
	}
	function get_data($id)
	{
		$this->M_user->get_data($id);
	}

}
