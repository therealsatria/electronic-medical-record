<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Logic extends CI_Controller {

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

    public function logout(){
      $this->Mlog->log_history("Akses","Logout","Logout Berhasil");
      unset($_SESSION[nama_sesi]);
      redirect(base_url("Login/"));
    }

    public function regedit(){
      $this->load->view('v99972');
    }

    public function reg(){
      $u = $this->input->post("u");
      $n = $this->input->post("n");
      $p = hash1arah($this->input->post("p"));
      $regusr = $this->Mlogin->register($u, $n, $p);
      echo $regusr;
    }

    public function index(){
        $data['fill'] = 'slave/v14266';
        $this->load->view('masterview',$data);
    }

    public function listpasien(){
      $data['tb_pasien'] = $this->mdaftar->tampil_data1()->result();
      $data['fill'] = 'slave/v83455';
      $this->load->view('masterview',$data);
    }

    public function addrm(){
      $data['jk'] = $this->mdaftar->enums('tb_pasien','jk');
      $data['gd'] = $this->mdaftar->enums('tb_pasien','gol_darah');
      $data['sn'] = $this->mdaftar->enums('tb_pasien','stts_nikah');
      $data['pnd'] = $this->mdaftar->enums('tb_pasien','pendidikan');
      $data['kl'] = $this->mdaftar->enums('tb_pasien','hub_pasien');
      $data['hs1'] = $this->mdaftar->getUser('penjab');

      $data['fill'] = 'slave/v57624';
      $this->load->view('masterview',$data);
    }

    // ----group data pasien-----------------------------------------------
    public function registrasi(){
      $data['jk'] = $this->mdaftar->enums('tb_pasien','jk');
      $data['gd'] = $this->mdaftar->enums('tb_pasien','gol_darah');
      $data['sn'] = $this->mdaftar->enums('tb_pasien','stts_nikah');
      $data['pnd'] = $this->mdaftar->enums('tb_pasien','pendidikan');
      $data['kl'] = $this->mdaftar->enums('tb_pasien','hub_pasien');
      $data['hs1'] = $this->mdaftar->getUser('penjab');
      $data['fill'] = 'slave/v44987';
      $this->load->view('masterview',$data);
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
      $f33 = trim($this->input->post("v33"));
      $f34 = trim($this->input->post("v34"));

      $dt = array(
        'no_rm' => $f1,
        'nama_lengkap' => $f2,
        'gol_darah' => $f3,
        'jk' => $f4,
        'tmpt_lhr' => $f5,
        'tgl_lhr' => $f6,
        'alamat' => $f7,
        'agama' => $f8,
        'no_ktp' => $f9,
        'nm_ibu' => $f10,
        'stts_nikah' => $f11,
        'email' => $f12,
        'tlp' => $f13,
        'pendidikan' => $f14,
        'pekerjaan' => $f15,
        'alamat_kantor' => $f16,
        'warga_negara' => $f17,
        'nama_pj' => $f18,
        'gd_pj' => $f19,
        'jk_pj' => $f20,
        'tmp_lhr_pj' => $f21,
        'tgl_lhr_pj' => $f22,
        'agama_pj' => $f23,
        'alamat_pj' => $f24,
        'email_pj' => $f25,
        'tlp_pj' => $f26,
        'pendidikan_pj' => $f27,
        'pekerjaan_pj' => $f28,
        'alamat_kantor_pj' => $f29,
        'warga_negara_pj' => $f30,
        'hub_pasien' => $f31,
        'kd_pj' => $f32,
        'ttd1' => $f33,
        'ttd2' => $f34
      );

      $operasi = $this->mdaftar->storeform1($dt,'tb_pasien');
      echo $operasi;
    }

    public function dataPasien(){
      $data['tb_pasien'] = $this->mdaftar->tampil_data1()->result();
      $data['fill'] = 'slave/v83555';
      $this->load->view('masterview',$data);
    }

    public function get($rm){
      $data['jk'] = $this->mdaftar->enums('tb_pasien','jk');
      $data['gd'] = $this->mdaftar->enums('tb_pasien','gol_darah');
      $data['sn'] = $this->mdaftar->enums('tb_pasien','stts_nikah');
      $data['pnd'] = $this->mdaftar->enums('tb_pasien','pendidikan');
      $data['kl'] = $this->mdaftar->enums('tb_pasien','hub_pasien');
      $data['hs1'] = $this->mdaftar->getUser('penjab');

      $data['rm'] = $rm;
      //$data['fill'] = 'slave/v39853';
      $data['fill'] = 'slave/v44983';
      $this->load->view('masterview',$data);
    }

    public function getedit(){
      $rv = $this->input->post("rm");
      $dt = $this->mdaftar->getrm($rv);
      if(count($dt) > 0){
        foreach ($dt as $d){
          $q1 = $d->no_rm;
          $q2 = $d->nama_lengkap;
          $q3 = $d->gol_darah;
          $q4 = $d->jk;
          $q5 = $d->tmpt_lhr;
          $q6 = $d->tgl_lhr;
          $q7 = $d->alamat;
          $q8 = $d->agama;
          $q9 = $d->no_ktp;
          $q10 = $d->nm_ibu;
          $q11 = $d->stts_nikah;
          $q12 = $d->email;
          $q13 = $d->tlp;
          $q14 = $d->pendidikan;
          $q15 = $d->pekerjaan;
          $q16 = $d->alamat_kantor;
          $q17 = $d->warga_negara;
          $q18 = $d->nama_pj;
          $q19 = $d->gd_pj;
          $q20 = $d->jk_pj;
          $q21 = $d->tmp_lhr_pj;
          $q22 = $d->tgl_lhr_pj;
          $q23 = $d->agama_pj;
          $q24 = $d->alamat_pj;
          $q25 = $d->email_pj;
          $q26 = $d->tlp_pj;
          $q27 = $d->pendidikan_pj;
          $q28 = $d->pekerjaan_pj;
          $q29 = $d->alamat_kantor_pj;
          $q30 = $d->warga_negara_pj;
          $q31 = $d->hub_pasien;
          $q32 = $d->kd_pj;
          $q33 = $d->ttd1;
          $q34 = $d->ttd2;

        }
        echo "$q1|$q2|$q3|$q4|$q5|$q6|$q7|$q8|$q9|$q10|$q11|$q12|$q13|$q14|$q15|$q16|$q17|$q18|$q19|$q20|$q21|$q22|$q23|$q24|$q25|$q26|$q27|$q28|$q29|$q30|$q31|$q32|$q33|$q34";
      }else{
        echo "0";
      }
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
      $f33 = trim($this->input->post("v33"));
      $f34 = trim($this->input->post("v34"));

      $dt = array(
        'no_rm' => $f1,
        'nama_lengkap' => $f2,
        'gol_darah' => $f3,
        'jk' => $f4,
        'tmpt_lhr' => $f5,
        'tgl_lhr' => $f6,
        'alamat' => $f7,
        'agama' => $f8,
        'no_ktp' => $f9,
        'nm_ibu' => $f10,
        'stts_nikah' => $f11,
        'email' => $f12,
        'tlp' => $f13,
        'pendidikan' => $f14,
        'pekerjaan' => $f15,
        'alamat_kantor' => $f16,
        'warga_negara' => $f17,
        'nama_pj' => $f18,
        'gd_pj' => $f19,
        'jk_pj' => $f20,
        'tmp_lhr_pj' => $f21,
        'tgl_lhr_pj' => $f22,
        'agama_pj' => $f23,
        'alamat_pj' => $f24,
        'email_pj' => $f25,
        'tlp_pj' => $f26,
        'pendidikan_pj' => $f27,
        'pekerjaan_pj' => $f28,
        'alamat_kantor_pj' => $f29,
        'warga_negara_pj' => $f30,
        'hub_pasien' => $f31,
        'kd_pj' => $f32,
        'ttd1' => $f33,
        'ttd2' => $f34,
      );

      $where = array(
        'no_rm' => $f1
      );

      $operasi = $this->mdaftar->update_data($where,$dt,'tb_pasien');
      echo $operasi;
    }
    // ----/group data pasien----------------------------------------------

    // ----group data cppt-------------------------------------------------
    public function cpptbase($no_rm){
      $this->session->set_userdata("keycppt","xxxxx");
      $data['tb_cppt'] = $this->mdaftar->tampil_data2()->result();
      $data['norm'] = $no_rm;
      $data['fill'] = 'slave/v79856';
      $this->load->view('masterview',$data);
    }

    public function setkeycppt(){
        $norm = $this->input->post("norm");
        $this->session->set_userdata("keycppt",$norm);

        $dt = $this->mdaftar->getrm($norm);
      if(count($dt) > 0){
        foreach ($dt as $d){
          $c1 = $d->no_rm;
          $c2 = $d->nama_lengkap;
          $c3 = $d->tgl_lhr;
          $c4 = $d->kamar;
        }
        echo "$c1|$c2|$c3|$c4";
      }else{
        echo "0";
      }
    }

    public function cpptbaseJSON(){
        $norm = $this->session->userdata("keycppt");
        $dtJSON = '{"data": [xxx]}';
        $dtisi = "";
        $p = " ";
        $dt = $this->mdaftar->filtercpptbase($norm);
        foreach ($dt as $k){
            $norm = $k->no_rm;
            $nocppt = $k->no_cppt;
            $ppa = $k->ppa;
            $tgl = $k->tanggal;
            $jam = $k->jam;
            $aksi = "<button type='button' class='btn btn-info btn-rounded waves-effect waves-light' style='margin-top: 5px;' data-kode='".$nocppt."' onclick='filter(this)'>Pilih</button>&nbsp<button type='button' class='btn btn-success btn-rounded waves-effect waves-light' style='margin-top: 5px;' data-kode='".$nocppt."' onclick='render(this)'>Cetak</button>";
            $dtisi .= '["'.$norm.'","'.$nocppt.'","'.$ppa.'","'.$tgl.'","'.$jam.'","'.$aksi.'"],';
        }
        $dtisifix = rtrim($dtisi, ",");
        $data = str_replace("xxx", $dtisifix, $dtJSON);
        echo $data;
    }

    public function tambahcppt($no_rm){
      $data['norm'] = $no_rm;
      $data['fill'] = 'slave/v88897';
      $this->load->view('masterview',$data);
    }

    public function editCppt(){
      $norm = $this->input->post("cp");
        $dt = $this->mdaftar->getcp($norm);
      if(count($dt) > 0){
        foreach ($dt as $d){
          $c1 = $d->no_cppt;
          $c2 = $d->ppa;
          $c3 = $d->soap;
          $c4 = $d->paraf;
        }
        echo "$c1|$c2|$c3|$c4";
      }else{
        echo "0";
      }
    }

    public function getforcppt(){
      $rv = $this->input->post("rm");
      $dt = $this->mdaftar->getrm($rv);
      if(count($dt) > 0){
        foreach ($dt as $d){
          $c1 = $d->no_rm;
          $c2 = $d->nama_lengkap;
          $c3 = $d->tgl_lhr;
          $c4 = $d->kamar;
        }
        echo "$c1|$c2|$c3|$c4";
      }else{
        echo "0";
      }
    }

    public function addcppt(){
      $f1 = trim(str_replace("'","''",$this->input->post("p1")));
      $f2 = trim(str_replace("'","''",$this->input->post("p2")));
      $f3 = trim(str_replace("'","''",$this->input->post("p3")));
      $f4 = trim(str_replace("'","''",$this->input->post("p4")));
      $f5 = trim($this->input->post("p5"));
      $f6 = trim($this->input->post("p6"));

      $dt = array(
        'no_rm' => $f1,
        'tanggal' => $f2,
        'jam' => $f3,
        'ppa' => $f4,
        'soap' => $f5,
        'paraf' => $f6,
      );
      $operasi = $this->mdaftar->storecppt($dt,'tb_cppt');
      echo $operasi;
    }

    public function updatecppt(){
      $f1 = trim($this->input->post("v1"));
      $f2 = trim($this->input->post("v2"));
      $f3 = trim($this->input->post("v3"));

      $dt = array(
        'soap' => $f1,
        'paraf' => $f2,
      );

      $where = array(
        'no_cppt' => $f3
      );

      $operasi = $this->mdaftar->update_data($where,$dt,'tb_cppt');
      echo $operasi;
    }
    // ----/group data cppt------------------------------------------------

    // ----group data cetak------------------------------------------------

    public function cetakmpdf(){
      $mpdf = new \Mpdf\Mpdf(['mode' => 'utf-8', 'format' => 'A4-P']);
      $html1 = $this->load->view('render/cpptraw',[],true);
      $mpdf->SetAuthor('');
      $mpdf->WriteHTML($html1);
      $mpdf->Output('form_cppt.pdf','I');
    }

    public function render($rm,$pg){

      $dt = $this->mdaftar->getrm($rm);
      $data['no_rm'] = $rm;
      $data['rm'] = $dt;

      $mpdf = new \Mpdf\Mpdf(['mode' => 'utf-8', 'format' => 'A4-P']);
      if ($pg == 0){
      $html1 = $this->load->view('render/r1',$data,true);
      $html2 = $this->load->view('render/r2',$data,true);
      $html3 = $this->load->view('render/r3',$data,true);
      $html4 = $this->load->view('render/r4',$data,true);
        $mpdf->WriteHTML($html1);
        $mpdf->AddPage();
        $mpdf->WriteHTML($html2);
        $mpdf->AddPage();
        $mpdf->WriteHTML($html3);
        $mpdf->AddPage();
        $mpdf->WriteHTML($html4);
      }else if($pg == 1){
        $html1 = $this->load->view('render/r1',$data,true);
        $mpdf->WriteHTML($html1);
      }else if($pg == 2){
        $html2 = $this->load->view('render/r2',$data,true);
        $mpdf->WriteHTML($html2);
      }else if($pg == 3){
        $html3 = $this->load->view('render/r3',$data,true);
        $mpdf->WriteHTML($html3);
      }else if($pg == 4){
        $html4 = $this->load->view('render/r4',$data,true);
        $mpdf->WriteHTML($html4);
      }
      $mpdf->Output('form_erm.pdf','I');

    }

    public function rendercppt($cppt){

      $operasi = $this->mdaftar->cetakbycppt($cppt);
        foreach ($operasi as $k){
          $data['no_cppt'] = $k->no_cppt;
          $data['no'] = $k->no_rm;
            $data['nm'] = $k->nama_lengkap;
            $data['tgl'] = $k->tgl_lhr;
            $data['rr'] = $k->kamar;
        }
      $data['dt'] = $this->mdaftar->cetakbycppt($cppt);
      //$this->load->view('render/c1',$data);
      $mpdf = new \Mpdf\Mpdf(['mode' => 'utf-8', 'format' => 'A4-P']);
      $html = $this->load->view('render/c1',$data,true);
      $mpdf->WriteHTML($html);
      $mpdf->Output('form_cppt.pdf','I');
    }

    // ----/group data cetak-----------------------------------------------

    public function hapusdata($kode){
      //$kode = trim($this->input->post("kd"));
          $dt = $this->mdaftar->getrm($kode);
          $operasi = $this->mdaftar->hapuspasien($kode);
          if($operasi == "1"){
              foreach ($dt as $k){
                  $v1 = $k->no_rm;
                  $v2 = $k->nama_lengkap;
              }
              $ket = "no_rm: $v1,\nnama_lengkap: $v2";
          $this->Mlog->log_history("Buku","Hapus",$ket);
          }
          redirect('logic/listpasien');
    }

    public function dropPasien(){
      $f1 = trim($this->input->post("kd"));
				$operasi = $this->mdaftar->hapuspasien($f1);
				echo  $operasi;
    }

    public function ralanbase ($no_rm){
      $this->session->set_userdata("keyralan","xxxxx");
      $data['tb_ralan'] = $this->mdaftar->tampil_data3()->result();
      $data['norm'] = $no_rm;
      $data['fill'] = 'slave/v22342';
      $this->load->view('masterview',$data);
    }

}
