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

}
