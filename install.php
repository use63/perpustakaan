<?php

// Nama file database
$databaseFile = './system/perpustakaan.sqlite';

// Membuat koneksi ke database
$db = new SQLite3($databaseFile);

// Mengecek koneksi
if (!$db) {
    die($db->lastErrorMsg());
}

// Query untuk membuat tabel "users"
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
