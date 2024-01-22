<?php

$databaseFile = './system/perpustakaan.sqlite';
$db = new SQLite3($databaseFile);

$query = "SELECT b.id_buku, b.judul, b.kategori, b.isbn, b.tahun_terbit, b.penerbit, p.nama_penulis, b.total_stok, b.tanggal_masuk 
          FROM buku b
          INNER JOIN penulis p ON b.penulis = p.id_penulis";

$result = $db->query($query);

$tabelBuku = "";
$noUrut = 1;

if ($result) {
    while ($row = $result->fetchArray(SQLITE3_ASSOC)) {
        $tabelBuku .= "<tr>";
        $tabelBuku .= "<td>$noUrut</td>";
        $tabelBuku .= "<td class='dma-beranda-cover'><img class='cover' src='/public/img/books/{$row['isbn']}.jpg'></td>";
        $tabelBuku .= "<td>{$row['judul']}</td>";
        $tabelBuku .= "<td>{$row['kategori']}</td>";
        $tabelBuku .= "<td>{$row['isbn']}</td>";
        $tabelBuku .= "<td>{$row['tahun_terbit']}</td>";
        $tabelBuku .= "<td>{$row['penerbit']}</td>";
        $tabelBuku .= "<td>{$row['nama_penulis']}</td>";
        $tabelBuku .= "<td>{$row['total_stok']}</td>";
        $tabelBuku .= "<td>{$row['tanggal_masuk']}</td>";
        $tabelBuku .= "<td><button>Delete</button></td>";
        $tabelBuku .= "</tr>";
        $noUrut += 1;
    }
} else {
    $tabelBuku = "<tr><td colspan='10'>Tidak ada data yang ditemukan</td></tr>";
}

$db->close();

?>

<div class="container-fluid">
    <div class="dma-beranda">
        <h1>Daftar Buku</h1>
        <span class="toggle-cover">Show Cover</span>
        <div class="tabel-container">
            <table>
                <tr>
                    <th>Nomor</th>
                    <th class='dma-beranda-cover'>Cover</th>
                    <th>Judul</th>
                    <th>Kategori</th>
                    <th>ISBN</th>
                    <th>Tahun Terbit</th>
                    <th>Penerbit</th>
                    <th>Penulis</th>
                    <th>Total Stok</th>
                    <th>Tanggal Masuk</th>
                    <th>Aksi</th>
                </tr>

                <?= $tabelBuku; ?>
            </table>  
        </div>
    </div>
</div>
