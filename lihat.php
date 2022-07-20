<?php
    echo "<head><title> RIWAYAT TRANSAKSI </title></head>";
    $fp = fopen ("guestbook.txt", "r");
    echo "<table border = 1>";

    while ($isi = fgets($fp,80))
    {
        $pisah = explode("|", $isi);
        echo "<tr><td>Nama </td><td>: $pisah[0]</td><tr>";
        echo "<tr><td>Kendaraan </td><td>: $pisah[1]</td><tr>";
        echo "<tr><td>Plat </td><td>: $pisah[2]</td><tr>";
        echo "<tr><td>Bensin </td><td>: $pisah[3]</td><tr>";
        echo "<tr><td>Jumlah </td><td>: $pisah[4]</td><tr><tr><td>&nbsp;<hr></td><td>&nbsp;<hr></td></tr>";
    }
    echo "</table>";
    echo "<a href =tampilan.php> KLIK DIsini </a> Isi Form Buku Tamu ";
    ?>