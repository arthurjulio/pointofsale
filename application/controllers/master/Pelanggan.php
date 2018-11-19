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

}
