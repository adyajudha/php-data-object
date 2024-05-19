<?php
    try{
        $dbh = new PDO("mysql:host=localhost;dbname=pegawai", "root", "");
        $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        // Menghapus data pada tabel Jabatan
        $result = $dbh->query("DELETE FROM jabatan WHERE id_jabatan=7");
        echo $result->rowCount()." berhasil dihapus";
        $dbh = null;
    }
    catch (PDOException $error){
        die("Koneksi/query bermasalah: ". $error->getMessage());
    }
?>