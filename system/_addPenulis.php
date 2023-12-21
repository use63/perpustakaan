<?php

session_start();

if (isset($_POST['btnTambah']) && $_POST['btnTambah'] === 'true') {
    $addPenulisTrue = true;
}

if ($addPenulisTrue == false) {
    header('Location: /dashboard');
    exit();
}

// koneksi DB
$databaseFile = './system/perpustakaan.sqlite';
$db = new SQLite3($databaseFile);

// Query untuk memasukkan data buku ke dalam tabel
$query = $db->prepare("INSERT INTO penulis (nama_penulis) 
                       VALUES (:nama_penulis)");

// Binding parameter
$query->bindParam(':nama_penulis', $_POST['nama_penulis']);


// Eksekusi query
$result = $query->execute();

// Mengecek hasil eksekusi query
if (!$result) {
    die($db->lastErrorMsg());
}

// Menutup koneksi
$db->close();

if ($result) {
    $_SESSION['addpenulis'] = true;
    header('Location: /dashboard');
}

?>