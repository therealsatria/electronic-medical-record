<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Bridge extends CI_Controller {

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

    public function seek(){
        $data['fill'] = 'slave/v99212';
        $this->load->view('masterview',$data);
    }

    public function listpasiensik(){
        $data['pasien'] = $this->mdaftar->tampil_data_sik();
        $data['fill'] = 'slave/v99455';
        $this->load->view('masterview',$data);
    }


    public function filter(){
        $norm = $this->input->post("norm");
        $this->session->set_userdata("keyrm",$norm);

        $dt = $this->mdaftar->getrmsik($norm);
      if(count($dt) > 0){
        foreach ($dt as $d){
          $c1 = $d->no_rkm_medis;
          $c2 = $d->nm_pasien;
        }
        echo "$c1|$c2";
      }else{
        echo "0";
      }
    }

    public function filterJSON(){
        $norm = $this->session->userdata("keyrm");
        $dtJSON = '{"data": [xxx]}';
        $dtisi = "";
        $p = " ";
        $dt = $this->mdaftar->filter_rm($norm);
        foreach ($dt as $k){
            $d1 = $k->no_rkm_medis;
            $d2 = $k->nm_pasien;
            $d3 = $k->alamat;
            $d4 = $k->tgl_daftar;
            $aksi = "<button type='button' class='btn btn-info btn-rounded waves-effect waves-light' style='margin-top: 5px;' data-kode='".$d1."' onclick='filter(this)'>Pilih</button>&nbsp";
            $dtisi .= '["'.$d1.'","'.$d2.'","'.$d3.'","'.$d4.'","'.$aksi.'"],';
        }
        $dtisifix = rtrim($dtisi, ",");
        $data = str_replace("xxx", $dtisifix, $dtJSON);
        echo $data;
    }

    public function import($dx){
      $data['jk'] = $this->mdaftar->enums('tb_pasien','jk');
      $data['gd'] = $this->mdaftar->enums('tb_pasien','gol_darah');
      $data['sn'] = $this->mdaftar->enums('tb_pasien','stts_nikah');
      $data['pnd'] = $this->mdaftar->enums('tb_pasien','pendidikan');
      $data['kl'] = $this->mdaftar->enums('tb_pasien','hub_pasien');
      $data['hs1'] = $this->mdaftar->getUser('penjab');

      $nm = trim(str_replace("'","''",$dx));

      $data['dp'] = $this->mdaftar->importsik($nm);
      $data['rm'] = $dx;
      $data['fill'] = 'slave/v44988';
      $this->load->view('masterview',$data);
    }

    public function dash1(){
      $dt = $this->mdaftar->dash1();
      if(count($dt) > 0){
        foreach ($dt as $d){
          $c1 = $d->tt_humaira;
          $c2 = $d->humaira;
          $c3 = $d->tt_vk;
          $c4 = $d->vk;
          $c5 = $d->tt_kautsar;
          $c6 = $d->kautsar;
          $c7 = $d->tt_naim;
          $c8 = $d->naim;
          $c9 = $d->tt_hcu;
          $c10 = $d->hcu;
          $c11 = $d->tt_icu;
          $c12 = $d->icu;
          $c13 = $d->tt_firdaus;
          $c14 = $d->firdaus;
          $c15 = $d->tt_iso;
          $c16 = $d->iso;
          $c17 = $d->tt_royyan;
          $c18 = $d->royyan;
          $c19 = $d->tt_zalzabil;
          $c20 = $d->zalzabil;
          $c21 = $d->tt_roudhoh;
          $c22 = $d->roudhoh;
          $c23 = $d->tt_drs;
          $c24 = $d->drs;
          $c25 = $d->tt_neo;
          $c26 = $d->neo;

        }
        echo "$c1|$c2|$c3|$c4|$c5|$c6|$c7|$c8|$c9|$c10|$c11|$c12|$c13|$c14|$c15|$c16|$c17|$c18|$c19|$c20|$c21|$c22|$c23|$c24|$c25|$c26";
      }else{
        echo "0";
      }

  }











}
