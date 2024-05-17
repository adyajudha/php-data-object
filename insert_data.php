<?php
    try{
        $dbh = new PDO("mysql:host=localhost;dbname=pegawai", "root", "");
        $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $result = $dbh->query("INSERT INTO jabatan VALUES(NULL, 'Direktur')");
        echo $result-> rowCount(). " berhasil ditambahkan ke tabel jabatan";
        $dbh = null;
    }
    catch (PDOException $error){
        die("Koneksi/query bermasalah: ". $error->getMessage());
    }
?>