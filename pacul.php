<?php

include "function.php";
@ini_set('output_buffering',0);
$data = array('GABOLEH | AH');
$data2 = $data[array_rand($data)];
$data3 = explode(' | ', $data2);
//$ktp = base64_encode($data3[0]);
//$kk = base64_encode($data3[1]);
$ktp = $data3[0];
$kk = $data3[1];
//$data4 = array('KTP' => $ktp, 'NO_KK' => $kk);
//print(json_encode(array('src'=>'Hasil', 'result'=>$data4)));
echo         "GENERATOR NIK NOK\n";
echo color("red","Code By Adun Bandring\n");
echo "Time    :".date('[d-m-Y] [H:i:s]')."   \n";
echo color("blue"," ===========================\n");
echo color("blue"," vvvvvvvvvvvvvvvvvvvvvvvvvvv\n");
echo color("yellow","No. KTP : ".$ktp."\n");
echo color("green","No. KK  : ".$kk."\n");

?>
