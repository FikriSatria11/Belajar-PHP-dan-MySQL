<?php
    // $pria = ['nama'=>'aco', 'tinggi'=>170];
    // $wanita = ['nama'=>'ani', 'tinggi'=>165];
    $nama = "fikri";
    $umur = 20;
    // echo "<h3>hello world </h3>";
    // echo "<br>";
    // if($pria['nama'] == 'aco'){
    //     echo '<center>nama saya '.$pria['nama'].' tinggi badan saya '.$pria['tinggi'].' cm</center>';
    // }
    echo "<center>nama saya $nama umur saya $umur<center>";

    echo "pengiriman Metode GET melalui Link = <a href=getProses.php?nama=$nama&umur=$umur>Klik Ini</a>";
    echo "<br>";
    echo "metode GET pada form 1 halaman = <a href=get1Halaman.php>Klik Ini</a>";
    echo "<br>";
    echo "metode GET pada form 2 halaman = <a href=get2Halaman.php>Klik Ini</a>";
    echo "<br>";
?>