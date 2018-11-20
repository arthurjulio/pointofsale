<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pelanggan extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->model("master/M_pelanggan","M_pelanggan");
	}

	function index(){
		$this->load->view("master/pelanggan");
	}

	function ajaxTable(){

		$list = $this->M_pelanggan->tampil();
		$data = array();
		$no = $_POST['start'];
		foreach ($list as $key) {
			$no++;
			$row = array();
			$row[] = $key->nama;
			$row[] = $key->alamat;
			$row[] = $key->no_telpon;
			$row[] = "
			<button class='btn btn-sm btn-primary' data-toggle='modal' data-target='#modal-pelanggan' onclick='ubah(".$key->id.")' tittle='Ubah Data'><i class='fa fa-edit'></i></button> 
			<button class='btn btn-sm btn-danger' tittle='Hapus Data' onclick='hapus(".$key->id.")'><i class='fa fa-trash'></i></button>
			";
			$data[] = $row;

		}
		$output = array("draw" => $_POST['draw'],
						"recordsTotal" => $this->M_pelanggan->count_all(),
						"recordsFiltered" => $this->M_pelanggan->count_filtered(),
						"data" => $data
						);
		
		echo json_encode($output);
	}

	function get_data($id){
		$this->M_pelanggan->get_data($id);
	}

	function simpan()
	{
		$this->M_pelanggan->simpan($this->input->post());
	}

	function edit($id)
	{
		$this->M_pelanggan->edit($id, $this->input->post());
	}

	function hapus($id)
	{
		$this->M_pelanggan->hapus($id);
	}

}
