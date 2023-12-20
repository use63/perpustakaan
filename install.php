<?php

// Nama file database
$databaseFile = './system/perpustakaan.sqlite';

// Membuat koneksi ke database
$db = new SQLite3($databaseFile);

// Mengecek koneksi
if (!$db) {
    die($db->lastErrorMsg());
}

// Query untuk membuat tabel
$query = <<<EOD
CREATE TABLE IF NOT EXISTS users (
    id_user INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL,
    nama TEXT NOT NULL,
    alamat TEXT NOT NULL,
    nomor_telepon TEXT NOT NULL,
    email TEXT NOT NULL,
    password TEXT NOT NULL, 
    tanggal_pendaftaran TEXT NOT NULL,
    role TEXT NOT NULL
);
CREATE TABLE IF NOT EXISTS buku (
    id_buku INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL,
    judul TEXT NOT NULL,
    kategori TEXT NOT NULL,
    isbn TEXT NOT NULL,
    tahun_terbit INTEGER NOT NULL,
    penerbit TEXT NOT NULL,
    penulis INTEGER NOT NULL,
    jumlah_eksamplar INTEGER NOT NULL,
    desktipsi TEXT NOT NULL,
    total_stok INTEGER NOT NULL,
    tanggal_masuk TEXT NOT NULL,
    FOREIGN KEY (penulis) REFERENCES penulis(id_penulis)
);
CREATE TABLE IF NOT EXISTS penulis (
    id_penulis INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL,
    nama_penulis TEXT NOT NULL
);
EOD;

// Eksekusi query
$result = $db->exec($query);

// Mengecek hasil eksekusi query
if (!$result) {
    die($db->lastErrorMsg());
}

echo "Database and Table created successfully\n";

// Menutup koneksi
$db->close();

?>
