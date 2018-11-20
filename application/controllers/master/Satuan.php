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
            $row[] = $key->nama;
            $row[] = "
            <button class='btn btn-sm btn-primary' data-toggle='modal' data-target='#modal-satuan' title='ubah data' onclick='ubah(".$key->id.")'><i class='fa fa-edit'></i></button>
            <button class='btn btn-sm btn-danger' title='hapus data' onclick='hapus(".$key->id.")'><i class='fa fa-trash'></i></button>
            ";
			$data[] = $row;
            
    	}
    	$output = array("draw" => $_POST['draw'],
                        "recordsTotal" => $this->M_satuan->count_all(),
                        "recordsFiltered" => $this->M_satuan->count_filtered(),
                        "data" => $data);

    	echo json_encode($output);
	}

	function get_data($id)
	{
		$this->M_satuan->get_data($id);
	}

	function simpan()
	{
		$this->M_satuan->simpan($this->input->post());
	}

	function edit($id)
	{
		$this->M_satuan->edit($id, $this->input->post());
	}

	function hapus($id)
	{
		$this->M_satuan->hapus($id);
	}

}
