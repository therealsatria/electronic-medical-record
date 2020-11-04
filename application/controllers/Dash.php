<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Dash extends CI_Controller {
	public function index(){
        // $data["total_buku"] = $this->Mdata->totalbuku();
        // $data["total_penerbit"] = $this->Mdata->totalpenerbit();
        // $data["total_pengarang"] = $this->Mdata->totalpengarang();
        // $tahunskr = date("Y");
        // $data["buku_tahun_ini"] = $this->Mdata->bukutahunini($tahunskr);
        // $data["grafik_buku"] = $this->Mdata->grafikbuku();
        // $data["grafik_penerbit"] = $this->Mdata->grafikpenerbit();
        // $data["grafik_pengarang"] = $this->Mdata->grafikpengarang();
        $dt = $this->Mlog->lastlogin();
            foreach ($dt as $d){
              $c1 = $d->nama;
              $c2 = $d->tgl;
       
        $data['lastlogin'] = $c1;
        $data['lastlogintgl'] = $c2;
		$this->load->view('v66574',$data);
    }
    
}
}
