<?php

/*

session_start();

if (isset($_POST['btnTambah']) && $_POST['btnTambah'] === 'true') {
    $addBookTrue = true;
}

if ($addBookTrue == false) {
    header('Location: /dashboard');
    exit();
}

// koneksi DB
$databaseFile = './system/perpustakaan.sqlite';
$db = new SQLite3($databaseFile);

// Query untuk memasukkan data buku ke dalam tabel
$query = $db->prepare("INSERT INTO buku (judul, kategori, isbn, tahun_terbit, penerbit, penulis, jumlah_eksamplar, desktipsi, total_stok, tanggal_masuk) 
                       VALUES (:judul, :kategori, :isbn, :tahun_terbit, :penerbit, :penulis, :jumlah_eksamplar, :deskripsi, :total_stok, :tanggal_masuk)");

// Binding parameter
$query->bindParam(':judul', $_POST['judul']);
$query->bindParam(':kategori', $_POST['kategori']);
$query->bindParam(':isbn', $_POST['isbn']);
$query->bindParam(':tahun_terbit', $_POST['tahun_terbit']);
$query->bindParam(':penerbit', $_POST['penerbit']);
$query->bindParam(':penulis', $_POST['penulis']);
$query->bindParam(':jumlah_eksamplar', $_POST['jumlah_eksamplar']);
$query->bindParam(':deskripsi', $_POST['deskripsi']);
$query->bindParam(':total_stok', $_POST['total_stok']);
$query->bindParam(':tanggal_masuk', $_POST['tanggal_masuk']);


// Eksekusi query
$result = $query->execute();

// Mengecek hasil eksekusi query
if (!$result) {
    die($db->lastErrorMsg());
}

// Menutup koneksi
$db->close();

if ($result) {
    $_SESSION['addbook'] = true;
    header('Location: /dashboard');
}

*/

?>


<?php

session_start();

if (isset($_POST['btnTambah']) && $_POST['btnTambah'] === 'true') {
    $addBookTrue = true;
}

if ($addBookTrue == false) {
    header('Location: /dashboard');
    exit();
}

// koneksi DB
$databaseFile = './system/perpustakaan.sqlite';
$db = new SQLite3($databaseFile);

// Query untuk memasukkan data buku ke dalam tabel
$query = $db->prepare("INSERT INTO buku (judul, kategori, isbn, tahun_terbit, penerbit, penulis, jumlah_eksamplar, desktipsi, total_stok, tanggal_masuk) 
                       VALUES (:judul, :kategori, :isbn, :tahun_terbit, :penerbit, :penulis, :jumlah_eksamplar, :deskripsi, :total_stok, :tanggal_masuk)");

// Binding parameter
$query->bindParam(':judul', $_POST['judul']);
$query->bindParam(':kategori', $_POST['kategori']);
$query->bindParam(':isbn', $_POST['isbn']);
$query->bindParam(':tahun_terbit', $_POST['tahun_terbit']);
$query->bindParam(':penerbit', $_POST['penerbit']);
$query->bindParam(':penulis', $_POST['penulis']);
$query->bindParam(':jumlah_eksamplar', $_POST['jumlah_eksamplar']);
$query->bindParam(':deskripsi', $_POST['deskripsi']);
$query->bindParam(':total_stok', $_POST['total_stok']);
$query->bindParam(':tanggal_masuk', $_POST['tanggal_masuk']);

// Eksekusi query
$result = $query->execute();

// Mengecek hasil eksekusi query
if (!$result) {
    die($db->lastErrorMsg());
}

// Mendapatkan ISBN
$isbn = $_POST['isbn'];

// Direktori tempat menyimpan file
$uploadDirectory = './public/img/books/';

// Buat nama file dengan format ISBN.jpg
$uploadFileName = $uploadDirectory . $isbn . '.jpg';

// Pindahkan file yang diunggah ke direktori tujuan
if (move_uploaded_file($_FILES['cover']['tmp_name'], $uploadFileName)) {
    // Tambahkan pesan sukses jika perlu
    echo 'File berhasil diunggah.';
} else {
    // Tambahkan pesan gagal jika perlu
    echo 'Gagal mengunggah file.';
}

// Menutup koneksi
$db->close();

if ($result) {
    $_SESSION['addbook'] = true;
    header('Location: /dashboard');
}

?>
