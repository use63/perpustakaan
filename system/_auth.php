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
$query = "SELECT email, password, role FROM users;";
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


foreach ($userData as $data) {
    if ($data['email'] == $email) {
        if ($data['password'] == $password) {
            $_SESSION['role'] = $data['role'];
            header('Location: /dashboard');
            break;
        } else {
            $_SESSION['error'] = true;
            $_SESSION['error_message'] = "Autentikasi Gagal.";
            header('Location: /login');
            break;
        }
    } else {
        $_SESSION['error'] = true;
        $_SESSION['error_message'] = "Email tidak terdaftar.";
        header('Location: /login');
        break;
    }
}

