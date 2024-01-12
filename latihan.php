<?php
    $namaBarang = "Printer HP Laserjet 001";
    $kodeBarang = "HP 001";
    $hargaBarang = 100000;
    $jumlahBarang =  3;
    $diskon = 50000;
    $status = "Proses";
    
    
    if($hargaBarang > 100000){
        $total = $hargaBarang * $jumlahBarang - $diskon;   
    }else{
        $total = $hargaBarang * $jumlahBarang;
    }

    
    
    
    echo "=== Program Menghitung Pembelian Barang === <br>";
    echo "Nama Barang : $namaBarang <br>";
    echo "Kode Barang : $kodeBarang <br>";
    echo "Harga Barang :$hargaBarang <br>";
    echo "Jumlah Barang : $jumlahBarang <br>";
    echo "Diskon : $diskon <br>";
    echo "Total : $total <br>";
    
    if($status == "Proses"){
        echo "<p>Status : <span style='color:yellow';>$status</span></p>";
    }else if($status == "sudah bayar"){
        echo "<p>Status : <span style='color:green';>$status</span></p>";
    }
    
    ?>
