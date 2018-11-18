<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Barang extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->model("master/M_barang","M_barang");
	}

	function index(){
		$this->load->view("master/barang");
	}

}
