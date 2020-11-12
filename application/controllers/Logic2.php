<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Logic2 extends CI_Controller {

    function __construct() {
      parent::__construct();
      $dtlogin = $this->Mlogin->cek_login();
      if(is_array($dtlogin)){
        foreach ($dtlogin as $dl){
        $data["usrnm"] = $dl->username;
        $data["nm"] = $dl->nama;
        }
        $data['fill'] = 'slave/v14266';
        $this->load->view('masterview', $data, true);
      }else{redirect(base_url('login/'));}
    }

    public function index(){
        $data['fill'] = 'slave/v14266';
        $this->load->view('masterview',$data);
    }

    public function addrj($norm){
      $data['kdpl'] = $this->mdaftar->select('kd_poli','nm_poli','poliklinik');
      $data['kddr'] = $this->mdaftar->select('kd_dokter','nm_dokter','dokter');
      $data['jk'] = $this->mdaftar->enums('tb_pasien','jk');
      $data['norm'] = $norm;
      $field = "nama_lengkap, tgl_lhr, jk";
      $dt = $this->mdaftar->selectwhere($field,'tb_pasien','no_rm',$norm);
    if(count($dt) > 0){
      foreach ($dt as $d){
        $c1 = $d->nama_lengkap;
        $c2 = $d->tgl_lhr;
        $c3 = $d->jk;
      }
    }
      $data['nama_lengkap'] = $c1;
      $data['tgl_lhr'] = $c2;
      $data['ejk'] = $c3;

      $data['fill'] = 'slave/i1';
      $this->load->view('masterview',$data);

    }

    public function edit($no_reg){
      $data['kdpl'] = $this->mdaftar->select('kd_poli','nm_poli','poliklinik');
      $data['kddr'] = $this->mdaftar->select('kd_dokter','nm_dokter','dokter');
      $data['jk'] = $this->mdaftar->enums('tb_pasien','jk');
      $data['noreg'] = $no_reg;
      $field = "nama_lengkap, tgl_lhr, jk";

      $data['fill'] = 'slave/i2';
      $this->load->view('masterview',$data);

    }

    public function getedit(){
      $rv = $this->input->post("reg");
      $dt = $this->mdaftar->selectwhere('*','tb_ralan','a2',$rv);
      if(count($dt) > 0){
        foreach ($dt as $d){
          $q1 = $d->a1;
          $q2 = $d->a2;
          $q3 = $d->a3;
          $q4 = $d->a4;
          $q5 = $d->a5;
          $q6 = $d->a6;
          $q7 = $d->a7;
          $q8 = $d->a8;
          $q9 = $d->a9;
          $q10 = $d->a10;
          $q11 = $d->a11;
          $q12 = $d->a12;
          $q13 = $d->a13;
          $q14 = $d->a14;
          $q15 = $d->a15;
          $q16 = $d->a16;
          $q17 = $d->a17;
          $q18 = $d->a18;
          $q19 = $d->a19;
          $q20 = $d->a20;
          $q21 = $d->a21;
          $q22 = $d->a22;
          $q23 = $d->a23;
          $q24 = $d->a24;
          $q25 = $d->a25;
          $q26 = $d->a26;
          $q27 = $d->a27;
          $q28 = $d->a28;
          $q29 = $d->a29;
          $q30 = $d->a30;
          $q31 = $d->a31;
          $q32 = $d->a32;
          $q33 = $d->a33;
          $q34 = $d->a34;
          $q35 = $d->a35;
          $q36 = $d->a36;
          $q37 = $d->a37;
          $q38 = $d->a38;
          $q39 = $d->a39;

        }
        echo "$q1|$q2|$q3|$q4|$q5|$q6|$q7|$q8|$q9|$q10|$q11|$q12|$q13|$q14|$q15|$q16|$q17|$q18|$q19|$q20|$q21|$q22|$q23|$q24|$q25|$q26|$q27|$q28|$q29|$q30|$q31|$q32|$q33|$q34|$q35|$q36|$q37|$q38|$q39";
      }else{
        echo "0";
      }
    }

    public function store(){
      $f1 = trim(str_replace("'","''",$this->input->post("v1")));
      $f2 = trim(str_replace("'","''",$this->input->post("v2")));
      $f3 = trim(str_replace("'","''",$this->input->post("v3")));
      $f4 = trim(str_replace("'","''",$this->input->post("v4")));
      $f5 = trim(str_replace("'","''",$this->input->post("v5")));
      $f6 = trim(str_replace("'","''",$this->input->post("v6")));
      $f7 = trim(str_replace("'","''",$this->input->post("v7")));
      $f8 = trim(str_replace("'","''",$this->input->post("v8")));
      $f9 = trim(str_replace("'","''",$this->input->post("v9")));
      $f10 = trim(str_replace("'","''",$this->input->post("v10")));
      $f11 = trim(str_replace("'","''",$this->input->post("v11")));
      $f12 = trim(str_replace("'","''",$this->input->post("v12")));
      $f13 = trim(str_replace("'","''",$this->input->post("v13")));
      $f14 = trim(str_replace("'","''",$this->input->post("v14")));
      $f15 = trim(str_replace("'","''",$this->input->post("v15")));
      $f16 = trim(str_replace("'","''",$this->input->post("v16")));
      $f17 = trim(str_replace("'","''",$this->input->post("v17")));
      $f18 = trim(str_replace("'","''",$this->input->post("v18")));
      $f19 = trim(str_replace("'","''",$this->input->post("v19")));
      $f20 = trim(str_replace("'","''",$this->input->post("v20")));
      $f21 = trim(str_replace("'","''",$this->input->post("v21")));
      $f22 = trim(str_replace("'","''",$this->input->post("v22")));
      $f23 = trim(str_replace("'","''",$this->input->post("v23")));
      $f24 = trim(str_replace("'","''",$this->input->post("v24")));
      $f25 = trim(str_replace("'","''",$this->input->post("v25")));
      $f26 = trim(str_replace("'","''",$this->input->post("v26")));
      $f27 = trim(str_replace("'","''",$this->input->post("v27")));
      $f28 = trim(str_replace("'","''",$this->input->post("v28")));
      $f29 = trim(str_replace("'","''",$this->input->post("v29")));
      $f30 = trim(str_replace("'","''",$this->input->post("v30")));
      $f31 = trim(str_replace("'","''",$this->input->post("v31")));
      $f32 = trim(str_replace("'","''",$this->input->post("v32")));
      $f33 = trim(str_replace("'","''",$this->input->post("v33")));
      $f34 = trim(str_replace("'","''",$this->input->post("v34")));
      $f35 = trim(str_replace("'","''",$this->input->post("v35")));
      $f36 = trim(str_replace("'","''",$this->input->post("v36")));
      $f37 = trim(str_replace("'","''",$this->input->post("v37")));
      // data canvas
      $f38 = trim($this->input->post("v38"));
      $f39 = trim(str_replace("'","''",$this->input->post("v39")));

      $dt = array(
        'a1' => $f1,
        'a2' => $f2,
        'a3' => $f3,
        'a4' => $f4,
        'a5' => $f5,
        'a6' => $f6,
        'a7' => $f7,
        'a8' => $f8,
        'a9' => $f9,
        'a10' => $f10,
        'a11' => $f11,
        'a12' => $f12,
        'a13' => $f13,
        'a14' => $f14,
        'a15' => $f15,
        'a16' => $f16,
        'a17' => $f17,
        'a18' => $f18,
        'a19' => $f19,
        'a20' => $f20,
        'a21' => $f21,
        'a22' => $f22,
        'a23' => $f23,
        'a24' => $f24,
        'a25' => $f25,
        'a26' => $f26,
        'a27' => $f27,
        'a28' => $f28,
        'a29' => $f29,
        'a30' => $f30,
        'a31' => $f31,
        'a32' => $f32,
        'a33' => $f33,
        'a34' => $f34,
        'a35' => $f35,
        'a36' => $f36,
        'a37' => $f37,
        'a38' => $f38,
        'a39' => $f39

      );
      $operasi = $this->mdaftar->storeform1($dt,'tb_ralan');
      echo $operasi;
    }

    public function update(){
      $f1 = trim(str_replace("'","''",$this->input->post("v1")));
      $f2 = trim(str_replace("'","''",$this->input->post("v2")));
      $f3 = trim(str_replace("'","''",$this->input->post("v3")));
      $f4 = trim(str_replace("'","''",$this->input->post("v4")));
      $f5 = trim(str_replace("'","''",$this->input->post("v5")));
      $f6 = trim(str_replace("'","''",$this->input->post("v6")));
      $f7 = trim(str_replace("'","''",$this->input->post("v7")));
      $f8 = trim(str_replace("'","''",$this->input->post("v8")));
      $f9 = trim(str_replace("'","''",$this->input->post("v9")));
      $f10 = trim(str_replace("'","''",$this->input->post("v10")));
      $f11 = trim(str_replace("'","''",$this->input->post("v11")));
      $f12 = trim(str_replace("'","''",$this->input->post("v12")));
      $f13 = trim(str_replace("'","''",$this->input->post("v13")));
      $f14 = trim(str_replace("'","''",$this->input->post("v14")));
      $f15 = trim(str_replace("'","''",$this->input->post("v15")));
      $f16 = trim(str_replace("'","''",$this->input->post("v16")));
      $f17 = trim(str_replace("'","''",$this->input->post("v17")));
      $f18 = trim(str_replace("'","''",$this->input->post("v18")));
      $f19 = trim(str_replace("'","''",$this->input->post("v19")));
      $f20 = trim(str_replace("'","''",$this->input->post("v20")));
      $f21 = trim(str_replace("'","''",$this->input->post("v21")));
      $f22 = trim(str_replace("'","''",$this->input->post("v22")));
      $f23 = trim(str_replace("'","''",$this->input->post("v23")));
      $f24 = trim(str_replace("'","''",$this->input->post("v24")));
      $f25 = trim(str_replace("'","''",$this->input->post("v25")));
      $f26 = trim(str_replace("'","''",$this->input->post("v26")));
      $f27 = trim(str_replace("'","''",$this->input->post("v27")));
      $f28 = trim(str_replace("'","''",$this->input->post("v28")));
      $f29 = trim(str_replace("'","''",$this->input->post("v29")));
      $f30 = trim(str_replace("'","''",$this->input->post("v30")));
      $f31 = trim(str_replace("'","''",$this->input->post("v31")));
      $f32 = trim(str_replace("'","''",$this->input->post("v32")));
      $f33 = trim(str_replace("'","''",$this->input->post("v33")));
      $f34 = trim(str_replace("'","''",$this->input->post("v34")));
      $f35 = trim(str_replace("'","''",$this->input->post("v35")));
      $f36 = trim(str_replace("'","''",$this->input->post("v36")));
      $f37 = trim(str_replace("'","''",$this->input->post("v37")));
      // data canvas
      $f38 = trim($this->input->post("v38"));
      $f39 = trim(str_replace("'","''",$this->input->post("v39")));

      $dt = array(
        'a1' => $f1,
        'a2' => $f2,
        'a3' => $f3,
        'a4' => $f4,
        'a5' => $f5,
        'a6' => $f6,
        'a7' => $f7,
        'a8' => $f8,
        'a9' => $f9,
        'a10' => $f10,
        'a11' => $f11,
        'a12' => $f12,
        'a13' => $f13,
        'a14' => $f14,
        'a15' => $f15,
        'a16' => $f16,
        'a17' => $f17,
        'a18' => $f18,
        'a19' => $f19,
        'a20' => $f20,
        'a21' => $f21,
        'a22' => $f22,
        'a23' => $f23,
        'a24' => $f24,
        'a25' => $f25,
        'a26' => $f26,
        'a27' => $f27,
        'a28' => $f28,
        'a29' => $f29,
        'a30' => $f30,
        'a31' => $f31,
        'a32' => $f32,
        'a33' => $f33,
        'a34' => $f34,
        'a35' => $f35,
        'a36' => $f36,
        'a37' => $f37,
        'a38' => $f38,
        'a39' => $f39
      );

      $where = array(
        'a2' => $f2
      );

      $operasi = $this->mdaftar->update_data($where,$dt,'tb_ralan');
      echo $operasi;
    }

    public function setkeyralan(){
        $norm = $this->input->post("norm");
        $this->session->set_userdata("keyralan",$norm);

        $dt = $this->mdaftar->getrm($norm);
      if(count($dt) > 0){
        foreach ($dt as $d){
          $c1 = $d->no_rm;
          $c2 = $d->nama_lengkap;
          $c3 = $d->tgl_lhr;
          $c4 = $d->jk;
        }
        echo "$c1|$c2|$c3|$c4";
      }else{
        echo "0";
      }
    }

    public function ralanbaseJSON(){
        $norm = $this->session->userdata("keyralan");
        $dtJSON = '{"data": [xxx]}';
        $dtisi = "";
        $p = " ";
        $dt = $this->mdaftar->filterralanbase($norm);
        foreach ($dt as $k){
            $no_rm = $k->a1;
            $no_reg = $k->a2;
            $kd_poli = $k->nm_poli;
            $kd_dokter = $k->nm_dokter;
            $tgl = $k->a6;
            $anchor = "<code><a data-kode='".$no_reg."' onclick='edit(this)'>$no_reg</a></code>";
            $aksi = "<button type='button' class='btn btn-info btn-rounded waves-effect waves-light' style='margin-top: 5px;' data-kode='".$no_reg."' onclick='filter(this)'>Pilih</button>&nbsp<button type='button' class='btn btn-success btn-rounded waves-effect waves-light' style='margin-top: 5px;' data-kode='".$no_reg."' onclick='render(this)'>Cetak</button>";
            $dtisi .= '["'.$norm.'","'.$anchor.'","'.$kd_poli.'","'.$kd_dokter.'","'.$tgl.'","'.$aksi.'"],';
        }
        $dtisifix = rtrim($dtisi, ",");
        $data = str_replace("xxx", $dtisifix, $dtJSON);
        echo $data;
    }

    public function listsoa($norawat){
      $data['nr'] = $norawat;
      $data['fill'] = 'slave/i3';
      $this->load->view('masterview',$data);
    }

    public function setkeysoa(){
        $nr = $this->input->post("nr");
        $this->session->set_userdata("keysoa",$nr);

        $dt = $this->mdaftar->filtersoabase($nr);
      if(count($dt) > 0){
        foreach ($dt as $d){
          $c1 = $d->a1;
          $c2 = $d->a2;
          $c3 = $d->nama_lengkap;
          $c4 = $d->tgl_lhr;
          $c5 = $d->alamat;
          $c6 = $d->jk;
        }
        echo "$c1|$c2|$c3|$c4|$c5|$c6";
      }else{
        echo "0";
      }
    }

    public function soaJSON(){
        $norawat = $this->session->userdata("keysoa");
        $dtJSON = '{"data": [xxx]}';
        $dtisi = "";
        $dt = $this->mdaftar->filtersoa($norawat);
        $i = "1";
        foreach ($dt as $k){
            $tanggal = $k->tanggal;
            $poli = $k->poliklinik;
            $c1 = '<code>['.$tanggal.']<br>['.$poli.']</code>';
            $soa = $k->soa;
            $ttd = $k->ttd;

            $norm = $k->a1;
            $norawat = $k->no_rawat;
            $idsoa = $k->id_soa;

            $v_soa = " <img data-kode='".$idsoa."' onclick='edit(this)' src=".$soa."> ";
            $v_ttd = " <img data-kode='".$idsoa."' onclick='edit(this)' src=".$ttd."> ";
            $n1 = $i; $i++;
            $edit = "<button class='btn btn-block' data-kode='".$idsoa."' onclick='edit(this)'>$n1</button>";
            $anchor = "<code><a data-kode='".$idsoa."' onclick='edit(this)'>$c1</a></code>";
            $action = "<i  data-kode='".$idsoa."' onclick='edit(this)' class='fas fa-edit' style='font-size:24px;'></i> &nbsp <i data-kode='".$idsoa."' onclick='remove($idsoa)' class='fas fa-eraser' style='font-size:24px;'></i>";
            //$aksi = "<button type='button' class='btn btn-info btn-rounded waves-effect waves-light' style='margin-top: 5px;' data-kode='".$no_reg."' onclick='filter(this)'>Pilih</button>&nbsp<button type='button' class='btn btn-success btn-rounded waves-effect waves-light' style='margin-top: 5px;' data-kode='".$no_reg."' onclick='render(this)'>Cetak</button>";
            $dtisi .= '["'.$edit.'","'.$anchor.'","'.$v_soa.'","'.$v_ttd.'","'.$action.'"],';
        }
        $dtisifix = rtrim($dtisi, ",");
        $data = str_replace("xxx", $dtisifix, $dtJSON);
        echo $data;
    }

    public function geteditsoa(){
      $rv = $this->input->post("id");
      $dt = $this->mdaftar->selectwhere('*','tb_soa','id_soa',$rv);
      if(count($dt) > 0){
        foreach ($dt as $d){
          $q1 = $d->soa;
          $q3 = $d->ttd;
          $q4 = $d->id_soa;
        }
        echo "$q1~$q3~$q4";
      }else{
        echo "0";
      }
    }

    public function updatesoa(){
      $f1 = trim(str_replace("'","''",$this->input->post("v1")));
      $f2 = trim(str_replace("'","''",$this->input->post("v2")));
      $f3 = trim($this->input->post("v3"));
      $f4 = trim($this->input->post("v4"));

      $dt = array(
        'tanggal' => $f2,
        'soa' => $f3,
        'ttd' => $f4
      );

      $where = array(
        'id_soa' => $f1
      );

      $operasi = $this->mdaftar->update_data($where,$dt,'tb_soa');
      echo $operasi;
    }

    public function storesoa(){
      $f1 = trim(str_replace("'","''",$this->input->post("v1")));
      $f4 = trim(str_replace("'","''",$this->input->post("v2")));


      $dt = array(
        'tanggal' => $f1,
        'no_rawat' => $f4
      );

      $operasi = $this->mdaftar->storeform1($dt,'tb_soa');
      echo $operasi;
    }

    public function renderstatus($nrw){
      $data['nrw'] = $nrw;
      $this->load->view('render/ralan_edit',$data);
    }

    public function render($rw){
      $data['nrw'] = $rw;
      $data['dt'] = $this->mdaftar->selectwhere('*','tb_ralan','a2',$rw);
      $mpdf = new \Mpdf\Mpdf(['mode' => 'utf-8', 'format' => 'A4-P']);
      //$this->load->view('render/ralan_edit',$data);
       $html = $this->load->view('render/ralan_edit',$data,true);
       $mpdf->WriteHTML($html);
       $mpdf->Output('form_cppt.pdf','I');
    }

    public function rendersoa($nr){

      $ft = $this->mdaftar->filtersoabase($nr);
      if(count($ft) > 0){
        foreach ($ft as $d){
          $data['rm'] = $d->a1;
          $data['nr'] = $d->a2;
          $data['nama'] = $d->nama_lengkap;
          $data['tgl'] = $d->tgl_lhr;
          $data['alamat'] = $d->alamat;
          $data['jk'] = $d->jk;
        }}

      $data['dt'] = $this->mdaftar->filtersoa($nr);

      $mpdf = new \Mpdf\Mpdf(['mode' => 'utf-8', 'format' => 'A4-P']);
      //$this->load->view('render/ralan_soa',$data,true);

      $html = $this->load->view('render/ralan_soa',$data,true);
      $mpdf->WriteHTML($html);
      $mpdf->Output('form_cppt.pdf','I');
    }

    public function dropsoa(){
      $f1 = trim($this->input->post("kd"));
				$operasi = $this->mdaftar->dropsoa($f1);
				echo  $operasi;
    }

}
