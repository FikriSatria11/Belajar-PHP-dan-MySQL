<b>Latihan Post pada form 1 halaman</b>
<hr>
<PRE>
    <form name="test" method="POST" action="">
        name : <input type="text" name="nama">
        <input type="submit" name="kirim" value="tekan untuk kirim">
    </form>
</PRE>

<?php
    if(isset($_POST['kirim'])){
        $hasilNama=$_POST['nama'];
        echo "Nama saya $hasilNama";
    }
?>