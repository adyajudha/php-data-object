<?php
    try{
        $dbh = new PDO("mysql:host=localhost;dbname=pegawai", "root", "");
        $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        // Menambahkan data pada tabel Jabatan
        $st = $dbh->prepare("INSERT INTO pegawai VALUES (?, ?, ?, ?, ?, ?, ?)");

        $st->bindParam(1, $id);
        $st->bindParam(2, $nama);
        $st->bindParam(3, $jenis_kelamin);
        $st->bindParam(4, $tgl_lahir);
        $st->bindParam(5, $id_jabatan);
        $st->bindParam(6, $foto);
        $st->bindParam(7, $ket);

        $id = 'NULL';
        $nama = 'Aditya Yudha Pratama';
        $jenis_kelamin = 'L';
        $tgl_lahir = '1990-07-08';
        $id_jabatan = 1;
        $foto = 'yuda.jpg';
        $ket = 'Direktur Utama';

        $st->execute();

        echo $st->rowCount()." berhasil ditambahkan.";

        $dbh = null;
    }
    catch (PDOException $error){
        die("Koneksi/query bermasalah: ". $error->getMessage());
    }
?>