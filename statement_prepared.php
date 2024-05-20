<?php
    try{
        $dbh = new PDO("mysql:host=localhost;dbname=pegawai", "root", "");
        $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        // Menambahkan data pada tabel Jabatan
        $st = $dbh->prepare("INSERT INTO pegawai VALUES (:id, :nama, :jenis_kelamin, :tgl_lahir, :id_jabatan, :foto, :ket)");

        $st->bindParam(':id', $id);
        $st->bindParam(':nama', $nama);
        $st->bindParam(':jenis_kelamin', $jenis_kelamin);
        $st->bindParam(':tgl_lahir', $tgl_lahir);
        $st->bindParam(':id_jabatan', $id_jabatan);
        $st->bindParam(':foto', $foto);
        $st->bindParam(':ket', $ket);

        $id = 'NULL';
        $nama = 'Aditya Yudha Pratama';
        $jenis_kelamin = 'L';
        $tgl_lahir = '2001-05-19';
        $id_jabatan = 1;
        $foto = 'yuda.jpg';
        $ket = 'Direktur Utama';

        $st->execute(array(
            ':id' => $id,
            ':nama' => $nama,
            ':jenis_kelamin' => $jenis_kelamin,
            ':tgl_lahir' => $tgl_lahir,
            'id_jabatan' => $id_jabatan,
            ':foto' => $foto,
            ':ket' => $ket
        ));

        echo $st->rowCount()." berhasil ditambahkan.";

        $dbh = null;
    }
    catch (PDOException $error){
        die("Koneksi/query bermasalah: ". $error->getMessage());
    }
?>