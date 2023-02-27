<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Siswa</title>
</head>

    <script>
      function dekor1() {
          dekor_1 = document.getElementById("home");
          dekor_1.style.color = "#7CFA6D";
      }

      function dekor2() {
        dekor_2 = document.getElementById("home");
        dekor_2.style.color = "black";
      }

    </script>

<body>
    <?php 
    $ns1 = ['id'=>1,'nim'=>'011010997','uts'=>90,'uas'=>89,'tugas'=>88]; 
    $ns2 = ['id'=>2,'nim'=>'011141095','uts'=>95,'uas'=>88,'tugas'=>90]; 
    $ns3 = ['id'=>3,'nim'=>'011130301','uts'=>86,'uas'=>91,'tugas'=>87]; 
    $ns4 = ['id'=>4,'nim'=>'011151102','uts'=>90,'uas'=>93,'tugas'=>89]; 

    $ar_nilai = [$ns1, $ns2 , $ns3, $ns4];
    ?>

<a href="#" onmouseover="dekor1()" onmouseout="dekor2()" id="home">
    <h3 align="center"> Daftar Nilai Siswa </h3>
</a>
<table border="2" width="100%">
    <thead> 
        <tr>
            <th>No</th><th>NIM</th><th>UTS</th>
            <th>UAS</th><th>Tugas</th><th>Nilai Akhir</th>
        </tr> 
    </thead> 
    <tbody align="center">
        <?php
        $nomor = 1;
        foreach($ar_nilai as $ns){
            echo '<tr><td>'.$nomor.'</td>';
            echo '<td>'.$ns['nim'].'</td>';
            echo '<td>'.$ns['uts'].'</td>';
            echo '<td>'.$ns['uas'].'</td>';
            echo '<td>'.$ns['tugas'].'</td>'; 
            $nilai_akhir  = ($ns['uts'] + $ns['uas']+$ns['tugas'])/3;
            echo '<td>'.number_format($nilai_akhir,2,',','.').'</td>';
            echo '<tr/>';
            $nomor++;
        }
        ?>
    </tbody>
</table> 
    
</body>
</html>