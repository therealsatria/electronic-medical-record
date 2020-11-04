<?php

public function getedit(){
  $rv = $this->input->post("reg");
  $dt = $this->mdaftar->selectwhere('*','tb_ralan','a2',$rv);
  if(count($dt) > 0){
    foreach ($dt as $d){
      $q1 = $d->a1;
      $q2 = $d->a2;
      $q3 = $d->a3;
      $q4 = $d->a4;
    }
    echo "$q1|$q2|$q3|$q4";
  }else{
    echo "0";
  }
}


public function store(){
  $f1 = trim(str_replace("'","''",$this->input->post("v1")));
  $f2 = trim(str_replace("'","''",$this->input->post("v2")));
  $f3 = trim(str_replace("'","''",$this->input->post("v3")));
  $f38 = trim($this->input->post("v38"));


  $dt = array(
    'a1' => $f1,
    'a2' => $f2,
    'a3' => $f3,
    'a4' => $f4
  );
  $operasi = $this->mdaftar->storeform1($dt,'tb_ralan');
  echo $operasi;
}


public function update(){
  $f1 = trim(str_replace("'","''",$this->input->post("v1")));
  $f2 = trim(str_replace("'","''",$this->input->post("v2")));
  $f3 = trim(str_replace("'","''",$this->input->post("v3")));
  $f38 = trim($this->input->post("v38"));


  $dt = array(
    'a1' => $f1,
    'a2' => $f2,
    'a3' => $f3,
    'a4' => $f4
  );

  $where = array(
    'a2' => $f2
  );

  $operasi = $this->mdaftar->update_data($where,$dt,'tb_ralan');
  echo $operasi;
}
