<?php
    echo "<head><title>PERTAMINI SUKAMAJU</head></title>";
    $nama = $_POST['nama'];
    $kendaraan = $_POST['kendaraan'];
    $plat = $_POST['plat'];
    $bensin = $_POST['bensin'];
    $jumlah = $_POST['jumlah'];

    $fp = fopen("guestbook.txt", "a+");
    fputs($fp, "$nama|$kendaraan|$plat|$bensin|$jumlah\n");
    fclose($fp);

    echo "Data telah diinputkan<br>";
    echo "<a href = tampilan.php> Isi Form </a><br>";
    echo "<a href = lihat.php> Lihat Riwayat Transaksi </a><br>";
    ?>