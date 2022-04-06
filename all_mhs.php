<?php
$curl = curl_init();
curl_setopt($curl,CURLOPT_RETURNTRANSFER,True);
curl_setopt($curl,CURLOPT_URL,'http://localhost/sait_uts/sait_mhs_api.php');
$res = curl_exec($curl);
$json = json_decode($res,true);

echo"
   <h1> Daftar Mahasiswa <h1/>
";

echo"<table border=1>
         <tr>
            <td width=200>Nim</td>
            <td width=200>Nama</td>
            <td width=200>Alamat</td>
            <td width=200>Tanggal Lahir</td>
            <td width=200>Kode Mk</td>
            <td width=200>Nama Mk</td>
            <td width=200>Sks</td>
            <td width=200>Nilai</td>
         </tr>";
         
foreach($json["data"] as $key => $data){
   echo "<tr><td> {$data['nim']} </td>
             <td> {$data['nama']} </td>
             <td> {$data['alamat']} </td>
             <td> {$data['tanggal_lahir']} </td>
             <td> {$data['kode_mk']} </td>
             <td> {$data['nama_mk']} </td>
             <td> {$data['sks']} </td>
             <td> {$data['nilai']} </td>
         </tr>";
}
echo"</table>";


?>


