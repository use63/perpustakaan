<?php

session_start();
$email = $_POST['email'];
$password = $_POST['password'];


// Nama file database
$databaseFile = './system/perpustakaan.sqlite';
// Membuat koneksi ke database
$db = new SQLite3($databaseFile);
// Mengecek koneksi
if (!$db) {
    die($db->lastErrorMsg());
}
// Query untuk mengambil email dan password dari tabel "users"
$query = "SELECT email, password, role, nama FROM users;";
// Mengeksekusi query
$result = $db->query($query);
// Memeriksa hasil eksekusi query
if (!$result) {
    die($db->lastErrorMsg());
}
// Menyimpan hasil query dalam sebuah array
$userData = array();
while ($row = $result->fetchArray(SQLITE3_ASSOC)) {
    $userData[] = $row;
}
// Menutup koneksi
$db->close();


$auth_error = true;
foreach ($userData as $data) {
    if ($data['email'] == $email) {
        if ($data['password'] == $password) {
            $auth_error = false;
            $_SESSION['role'] = $data['role'];
            $_SESSION['nama'] = $data['nama'];
            header('Location: /dashboard');
            break;
        }
    }
}

if ($auth_error) {
    $_SESSION['error'] = true;
    $_SESSION['error_message'] = "Autentikasi Gagal.";
    header('Location: /login');
}