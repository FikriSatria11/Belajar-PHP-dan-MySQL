<b>Latihan Get pada form 1 halaman</b>
<hr>
<PRE>
    <form name="test" method="GET" action="">
        nama : <input type="text" name="nama">
        <input type="submit" name="kirim" value="tekan untuk kirim">
    </form>
</PRE>

<?php
    if(isset($_GET['kirim'])){
        $hasilNama=$_GET['nama'];
        echo "Nama saya $hasilNama";
    }
?>