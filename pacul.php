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
echo " \n";
echo color("green","           GENERATOR NIK NOK\n");
echo color("yellow","            Code By MG Cell\n");
echo "-\n";
echo "|Time    :".date('[d-m-Y] [H:i:s]')."   \n";
echo " \n";
echo " \n";
echo color("purple","No. KTP : ".$ktp."\n");
echo color("nevy","No. KK  : ".$kk."\n");

?>
