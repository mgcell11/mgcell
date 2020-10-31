<?php
echo 'Waktu   : ' . date('d-m-Y H:i:s');
echo 'Tanggal : ' . date('d.m.y')
echo "<font color='red'>GENERATOR NIK NOK</font>
echo "Created By Adun Banding";
@ini_set('output_buffering',0);
$data = array('3213127112370008 | 3213120302110029');
$data2 = $data[array_rand($data)];
$data3 = explode(' | ', $data2);
//$ktp = base64_encode($data3[0]);
//$kk = base64_encode($data3[1]);
$ktp = $data3[0];
$kk = $data3[1];
//$data4 = array('KTP' => $ktp, 'NO_KK' => $kk);
//print(json_encode(array('src'=>'Hasil', 'result'=>$data4)));
echo ".::[ Generator NIK NOK ]::.\n\n";
echo "No. KTP : ".$ktp."\n";
echo "No. KK : ".$kk."\n";
?>
