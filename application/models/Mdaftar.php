<?php

class Mdaftar extends CI_Model{

	private $db2;

	public function __construct()
	{
		parent::__construct();
		$this->db2 = $this->load->database('database_2', true);
	}

	function tampil_data1(){
		return $this->db->get('tb_pasien',100);
	}

	function tampil_data2(){
		return $this->db->get('tb_cppt');
	}

	function tampil_data3(){
		return $this->db->get('tb_ralan');
	}

	public function hapuspasien($kode){
		$sql = "DELETE FROM tb_pasien WHERE no_rm='$kode'";
		$querySQL = $this->db->query($sql);
		if($querySQL){return "1";}
		else{return "0";}
	}

	function filtercpptbase($norm){
		$sql = "SELECT * FROM tb_cppt WHERE no_rm = '$norm'";
		$querySQL = $this->db->query($sql);
		if($querySQL){
			return $querySQL->result();
		}else{return 0;}
	}

	function cetakbycppt($nocppt){
		//$sql = "SELECT `no_rm`, `no_cppt`, `tanggal`, `jam`, `ppa`, `soap`, `paraf` FROM `tb_cppt` WHERE  `no_cppt`= '$nocppt' ";
		$sql = "SELECT p.no_rm,p.nama_lengkap,p.tgl_lhr,p.kamar,c.no_cppt,c.tanggal,c.jam,c.ppa,c.soap,c.paraf FROM `tb_pasien` p INNER JOIN `tb_cppt` c ON p.no_rm = c.no_rm WHERE c.no_cppt = $nocppt";
		$querySQL = $this->db->query($sql);
		if($querySQL){
			return $querySQL->result();
		}else{return 0;}
	}

	public function getUser($table_name)
		  {
		  $get_user = $this->db2->get($table_name);
      	return $get_user->result_array();
		  }

	function enums($table , $field){
        $query = "SHOW COLUMNS FROM ".$table." LIKE '$field'";
        $row = $this->db->query("SHOW COLUMNS FROM ".$table." LIKE '$field'")->row()->Type;
        $regex = "/'(.*?)'/";
        preg_match_all( $regex , $row, $enum_array );
        $enum_fields = $enum_array[1];
        foreach ($enum_fields as $key=>$value)
        {
            $enums[$value] = $value;
        }
        return $enums;
	  }

	  function select($key, $field, $table){
		$query = ("SELECT `$key`,`$field` FROM `$table` ;");
    	return $this->db->query($query)->result();
	  }

		function selectwhere($field, $table, $where, $value){
		$query = ("SELECT $field FROM `$table` WHERE `$where` = '$value';");
    	return $this->db->query($query)->result();
	  }

	function update_data($where,$data,$table){
		$this->db->where($where);
		$querySQL = $this->db->update($table,$data);
		if($querySQL){return 1;}
		else{return 0;}
	}

	function getrm($nilai){
		$q = "SELECT * FROM tb_pasien WHERE no_rm = '$nilai' ";
		$qSQL = $this->db->query($q);
		if($qSQL){return $qSQL->result();
		}else{return 0;}
	}

	function getcp($nilai){
		$q = "SELECT * FROM tb_cppt WHERE no_cppt = '$nilai' ";
		$qSQL = $this->db->query($q);
		if($qSQL){return $qSQL->result();
		}else{return 0;}
	}

	// ------------------------------------------------------------

  function storeform1($data,$table){
  $querySQL = $this->db->insert($table,$data);
		if($querySQL){return 1;}
		else{return 0;}
  }

	function storeformsik($data,$table){
  $this->db2->insert($table,$data);
  }

  function storecppt($data,$table){
	$querySQL = $this->db->insert($table,$data);
		 if($querySQL){return 1;}
		 else{return 0;}
	}

	// ------------------------------------------------------------
	function tampil_data_sik(){
		$sql = "SELECT * FROM pasien ORDER BY tgl_daftar DESC LIMIT 100 ";
		$querySQL = $this->db2->query($sql);
		if($querySQL){
			return $querySQL->result();
		}else{return 0;}
	}

	function getrmsik($nilai){
		$q = "SELECT `no_rkm_medis`,`nm_pasien` FROM pasien WHERE no_rkm_medis LIKE '%$nilai%' OR `nm_pasien` LIKE '%$nilai%' ;";
		$qSQL = $this->db2->query($q);
		if($qSQL){return $qSQL->result();
		}else{return 0;}
	}

	function filter_rm($norm){
		$sql = "SELECT `no_rkm_medis`, `nm_pasien`,`alamat`,`tgl_daftar` FROM `pasien` WHERE no_rkm_medis LIKE '%$norm%' OR `nm_pasien` LIKE '%$norm%' ORDER BY tgl_daftar DESC LIMIT 100 ";
		$querySQL = $this->db2->query($sql);
		if($querySQL){
			return $querySQL->result();
		}else{return 0;}
	}

	function importsik($nm){
		$q = "SELECT * FROM pasien WHERE no_rkm_medis = $nm ;";
		$querySQL = $this->db2->query($q);
		if($querySQL){
			return $querySQL->result();
		}else{return 0;}
	}

	function dash1(){
		$q = "SELECT (SELECT COUNT(*) FROM `kamar` WHERE `kd_kamar` LIKE '%Humaira%' )AS 'tt_humaira',
		(SELECT COUNT(*) FROM `kamar` WHERE `kd_kamar` LIKE '%Humaira%' AND `status` LIKE 'ISI' )AS 'humaira',
		(SELECT COUNT(*) FROM `kamar` WHERE `kd_kamar` LIKE '%VK%' )AS 'tt_vk',
		(SELECT COUNT(*) FROM `kamar` WHERE `kd_kamar` LIKE '%VK%' AND `status` LIKE 'ISI' )AS 'vk',
		(SELECT COUNT(*) FROM `kamar` WHERE `kd_kamar` LIKE '%Al-Kautsar%' )AS 'tt_kautsar',
		(SELECT COUNT(*) FROM `kamar` WHERE `kd_kamar` LIKE '%Al-Kautsar%' AND `status` LIKE 'ISI' )AS 'kautsar',
		(SELECT COUNT(*) FROM `kamar` WHERE `kd_kamar` LIKE '%An-Naim%' )AS 'tt_naim',
		(SELECT COUNT(*) FROM `kamar` WHERE `kd_kamar` LIKE '%An-Naim%' AND `status` LIKE 'ISI' )AS 'naim',
		(SELECT COUNT(*) FROM `kamar` WHERE `kd_kamar` LIKE '%HCU%' )AS 'tt_hcu',
		(SELECT COUNT(*) FROM `kamar` WHERE `kd_kamar` LIKE '%HCU%' AND `status` LIKE 'ISI' )AS 'hcu',
		(SELECT COUNT(*) FROM `kamar` WHERE `kd_kamar` LIKE '%ICU%')AS 'tt_icu',
		(SELECT COUNT(*) FROM `kamar` WHERE `kd_kamar` LIKE '%ICU%' AND `status` LIKE 'ISI' )AS 'icu',
		(SELECT COUNT(*) FROM `kamar` WHERE `kd_kamar` LIKE '%Firdaus%' )AS 'tt_firdaus',
		(SELECT COUNT(*) FROM `kamar` WHERE `kd_kamar` LIKE '%Firdaus%' AND `status` LIKE 'ISI' )AS 'firdaus',
		(SELECT COUNT(*) FROM `kamar` WHERE `kd_kamar` LIKE '%ISO%' )AS 'tt_iso',
		(SELECT COUNT(*) FROM `kamar` WHERE `kd_kamar` LIKE '%ISO%' AND `status` LIKE 'ISI' )AS 'iso',
		(SELECT COUNT(*) FROM `kamar` WHERE `kd_kamar` LIKE '%Ar-Royyan%' )AS 'tt_royyan',
		(SELECT COUNT(*) FROM `kamar` WHERE `kd_kamar` LIKE '%Ar-Royyan%' AND `status` LIKE 'ISI' )AS 'royyan',
		(SELECT COUNT(*) FROM `kamar` WHERE `kd_kamar` LIKE '%Zalzabil%' )AS 'tt_zalzabil',
		(SELECT COUNT(*) FROM `kamar` WHERE `kd_kamar` LIKE '%Zalzabil%' AND `status` LIKE 'ISI' )AS 'zalzabil',
		(SELECT COUNT(*) FROM `kamar` WHERE `kd_kamar` LIKE '%Ar-Roudhoh%' )AS 'tt_roudhoh',
		(SELECT COUNT(*) FROM `kamar` WHERE `kd_kamar` LIKE '%Ar-Roudhoh%' AND `status` LIKE 'ISI' )AS 'roudhoh',
		(SELECT COUNT(*) FROM `kamar` WHERE `kd_kamar` LIKE '%drs%' )AS 'tt_drs',
		(SELECT COUNT(*) FROM `kamar` WHERE `kd_kamar` LIKE '%drs%' AND `status` LIKE 'ISI' )AS 'drs',
		(SELECT COUNT(*) FROM `kamar` WHERE `kd_kamar` LIKE '%NEO%' )AS 'tt_neo',
		(SELECT COUNT(*) FROM `kamar` WHERE `kd_kamar` LIKE '%NEO%' AND `status` LIKE 'ISI' )AS 'neo' ;";

		$querySQL = $this->db2->query($q);
		return $querySQL->result();
	}

	function filterralanbase($norm){
		//$sql = "SELECT * FROM tb_ralan WHERE a1 = '$norm'";
		$sql = "SELECT a.*,b.nm_poli,c.nm_dokter FROM tb_ralan AS a LEFT JOIN poliklinik AS b ON a.a9 = b.kd_poli LEFT JOIN dokter AS c ON a.a39 = c.kd_dokter WHERE a1 = $norm;";
		$querySQL = $this->db->query($sql);
		if($querySQL){
			return $querySQL->result();
		}else{return 0;}
	}

	function filtersoabase($nilai){
		$sql = "SELECT b.a1 ,b.a2 , a.nama_lengkap ,a.tgl_lhr,a.alamat,a.jk FROM tb_pasien AS a LEFT JOIN tb_ralan AS b ON a.no_rm = b.a1 WHERE b.a2 = '$nilai';";
		$querySQL = $this->db->query($sql);
		if($querySQL){
			return $querySQL->result();
		}else{return 0;}
	}

	function filtersoa($nilai){
		$sql = "SELECT b.a1,(SELECT nm_poli FROM poliklinik WHERE kd_poli = b.a9) AS poliklinik,a.* FROM tb_soa AS a LEFT JOIN tb_ralan AS b ON b.a2 = a.no_rawat WHERE b.a2 = '$nilai';";
		$querySQL = $this->db->query($sql);
		if($querySQL){
			return $querySQL->result();
		}else{return 0;}
	}

	public function dropsoa($kode){
		$sql = "DELETE FROM tb_soa WHERE id_soa='$kode'";
		$querySQL = $this->db->query($sql);
		if($querySQL){return "1";}
		else{return "0";}
	}

	public function dropralan($kode){
		$sql = "DELETE FROM tb_ralan WHERE a2='$kode'";
		$querySQL = $this->db->query($sql);
		if($querySQL){return "1";}
		else{return "0";}
	}

}
