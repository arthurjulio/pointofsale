<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
* 
*/
class M_manualisasi extends CI_Model
{
	function get_data($data){
		$this->db->where("variabel", $data["c1"]);
		$kriteria['c1'] = $this->db->get("variabel_linguistik")->row_array();
		
		$this->db->where("variabel", $data["c2"]);
		$kriteria['c2'] = $this->db->get("variabel_linguistik")->row_array();

		return $kriteria;
		
	}

	function datapakar(){
		$this->db->select("pakar.kriteria, pakar.alternatif, dm1.l as dm1l, dm1.p as dm1p, dm1.q as dm1q, dm1.u as dm1u, dm2.l as dm2l, dm2.p as dm2p, dm2.q as dm2q, dm2.u as dm2u");
		$this->db->from("pakar");
		$this->db->join("variabel_linguistik dm1", "pakar.dm1 = dm1.variabel");
		$this->db->join("variabel_linguistik dm2", "pakar.dm2 = dm2.variabel");
		$tabelpakar = $this->db->get()->result_array();

		return $tabelpakar;


	}

	function langkah6($tabelpakar){
		$langkah6 = array();

		foreach ($tabelpakar as $key) {
			$l = 0;
			if ($key["dm1l"]<$key["dm2l"]) {
				$l = $key["dm1l"];
			}
			else{
				$l = $key["dm2l"];
			}

			$p = ($key["dm1p"]+$key["dm2p"])/2;

			$q = ($key["dm1q"]+$key["dm2q"])/2;

			$u = 0;
			if ($key["dm1u"]>$key["dm2u"]) {
				$u = $key["dm1u"];
			}
			else{
				$u = $key["dm2u"];
			}

			// $row = array(
			// 				'kriteria' => $key["kriteria"],
			// 				'alternatif' => $key["alternatif"],
			// 				'l' => $l, 
			// 				'p' => $p, 
			// 				'q' => $q, 
			// 				'u' => $u, 
			// 			);

			$row[0]	= $key["kriteria"];
			$row[1] = $key["alternatif"];
			$row[2] = $l;
			$row[3] = $p;
			$row[4] = $q;
			$row[5] = $u;
			$langkah6[] = $row;
		}
		return $langkah6;
	}

	function langkah8($langkah6){
		$langkah8 = array();

		$maxc1 = 0;
		$maxc2 = 0;

		foreach ($langkah6 as $key) {
			
			for ($i=2; $i <= 5 ; $i++) { 
				
				if ($key[0]=="c1") {
					
					if ($key[$i] > $maxc1) {
						$maxc1 = $key[$i];
					}

				}
				elseif ($key[0]=="c2") {
					if ($key[$i] > $maxc2) {
						$maxc2 = $key[$i];
					}
				}
				
			}
		}


		foreach ($langkah6 as $key) {
			
			$row[0] = $key[0];
			$row[1] = $key[1];
			for ($i=2; $i <= 5 ; $i++) { 
				if ($key[0]=="c1") {
					$row[$i] = $key[$i]/$maxc1;
				}
				elseif ($key[0]=="c2") {
					$row[$i] = $key[$i]/$maxc2;
				}

			}
			$langkah8[] = $row;
			// echo $maxc1." ".$maxc2."<br>";
			// echo $row[0]." ".$row[1]." ".$row[2]." ".$row[3]." ".$row[4]." ".$row[5]."<br>";
		}


		return $langkah8;
	}

	function langkah9($langkah8, $l4){
		$langkah9 = array();
		foreach ($langkah8 as $key) {

			$row[0] = $key[0];
			$row[1] = $key[1];
			if ($key[0] == 'c1') {
				$row[2] = $key[2] * $l4['c1']['l'];
			}
			else{
				$row[2] = $key[2] * $l4['c2']['l'];
			}

			if ($key[0] == 'c1') {
				$row[3] = $key[3] * $l4['c1']['p'];
			}
			else{
				$row[3] = $key[3] * $l4['c2']['p'];
			}
			
			if ($key[0] == 'c1') {
				$row[4] = $key[4] * $l4['c1']['q'];
			}
			else{
				$row[4] = $key[4] * $l4['c2']['q'];
			}
			
			if ($key[0] == 'c1') {
				$row[5] = $key[5] * $l4['c1']['u'];
			}
			else{
				$row[5] = $key[5] * $l4['c2']['u'];
			}
			
			$langkah9[] = $row;
			echo $row[0]." ".$row[1]." ".$row[2]." ".$row[3]." ".$row[4]." ".$row[5]."<br>";
			
		}
	}
}

?>