<?php
    try{
        $dbh = new PDO("mysql:host=localhost;dbname=pegawai", "root", "");
        $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        // Menampilkan data pada tabel Jabatan
        $result = $dbh->query("SELECT * FROM jabatan");
        while($row = $result->fetch()){
            echo "$row[id_jabatan] $row[nama_jabatan] <br>";
        }
        $dbh = null;
    }
    catch (PDOException $error){
        die("Koneksi/query bermasalah: ". $error->getMessage());
    }
?>