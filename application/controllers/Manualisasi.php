<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Manualisasi extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->model("M_manualisasi");
	}


	function manualisasi(){
		$input = $this->input->post();
		$l4 = $this->M_manualisasi->get_data($input);

		$datapakar = $this->M_manualisasi->datapakar();

		$langkah6 = $this->M_manualisasi->langkah6($datapakar);

		$langkah8 = $this->M_manualisasi->langkah8($langkah6);

		$langkah9 = $this->M_manualisasi->langkah9($langkah8, $l4);

	}

}
