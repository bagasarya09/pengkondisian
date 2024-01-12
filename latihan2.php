<?php
    $namaPanjang = "Bagas Arya";
    $kelas = "XI RPL 1";
    $namaBuku = "Pemograman Web dan Perangkat Lunak";
    $tanggalPeminjaman = 5;
    $tanggalPengembalian = 6;
    $tanggalDikembalikan = 8;
    $biayaDenda = 50000;

    $jumlah = $tanggalDikembalikan - $tanggalPengembalian;
    

    
    if ($tanggalDikembalikan > $tanggalPengembalian){
    $total = $jumlah * $biayaDenda;
    $status = "telat mengembalikan";
    }else if($tanggalDikembalikan == $tanggalPengembalian){
    $total = $jumlah == $biayaDenda;
    $status = "sudah mengembalikan";
    }else if($tanggalDikembalikan < $tanggalPengembalian && $tanggalDikembalikan != null){
    $total = $jumlah == $biayaDenda;
    $status = "sudah mengembalikan";
    }else{
    $total = $jumlah == $biayaDenda;
    $status = "blom mengembalikan";
    }


    echo "== Program Perpustakaan == <br>";
    echo "Nama Panjang : $namaPanjang <br>";
    echo "Kelas : $kelas <br>";
    echo "Nama Buku : $namaBuku <br>";
    echo "Tanggal Peminjaman : $tanggalPeminjaman Januari 2024 <br>";
    echo "Tanggal Pengembalian : $tanggalPengembalian Januari 2024 <br>";
    echo "Tanggal Dikembalikan : $tanggalDikembalikan Januari 2024 <br>";
    echo "Denda: $total <br>";
    echo "Status : $status";

    

?>