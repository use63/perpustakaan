<?php
$databaseFile = './system/perpustakaan.sqlite';
$db = new SQLite3($databaseFile);

// Mengeksekusi query untuk mengambil data dari tabel penulis
$query = "SELECT id_penulis, nama_penulis FROM penulis";
$result = $db->query($query);

// Membuat opsi dropdown selama iterasi data
$dmaOptionsPenulis = "";
while ($row = $result->fetchArray(SQLITE3_ASSOC)) {
    $idPenulis = $row['id_penulis'];
    $namaPenulis = $row['nama_penulis'];

    // Menambahkan opsi ke variabel $dmaOptionsPenulis
    $dmaOptionsPenulis .= "<option value=\"$idPenulis\">$namaPenulis</option>";
}

// Tutup koneksi ke database
$db->close();
?>



<div class="container-fluid">
    <div class="dma-tambah-penulis">
        <h1>Tambah Penulis</h1>
        <div>
            <form action="/addpenulis" method="POST">
                    <div class="item-dmatb">
                        <label for="addpenulis">Penulis</label>
                        <input type="text" id="addpenulis" name="nama_penulis" required>
                    </div>
                    <div class="item-dmatb">
                        <button type="submit" name="btnTambah" value="true">Tambah Penulis</button>
                    </div>
            </form>
        </div>
        <?php
            // session_start();
            if ($_SESSION['addpenulis'] == true) {
                echo "<div style='padding: 1em; margin: 1em 0; background-color: yellowgreen; border-radius: 8px; color: white;'>Berhasil menambahakan penulis</div>";
            }
        ?>
    </div>
    <hr>
    <div class="dma-tambah-buku">
        <h1>Tambah Buku</h1>
        <div>
            <form action="/addbook" method="POST" enctype="multipart/form-data">
                <div class="item-dmatb">
                    <label for="judul">Judul</label>
                    <input type="text" id="judul" name="judul" required>
                </div>

                <div class="item-dmatb">
                    <label for="kategori">Kategori</label>
                    <input type="text" id="kategori" name="kategori" required>
                </div>

                <div class="item-dmatb">
                    <label for="cover">Cover</label>
                    <span>
                        <label for="cover">Select Cover</label>
                        <input type="file" id="cover" name="cover" required>
                    </span>
                    
                </div>

                <div class="item-dmatb">
                    <label for="isbn">ISBN</label>
                    <input type="text" id="isbn" name="isbn" required>
                </div>

                <div class="item-dmatb">
                    <label for="tahun_terbit">Tahun Terbit</label>
                    <input type="number" id="tahun_terbit" name="tahun_terbit" required>
                </div>

                <div class="item-dmatb">
                    <label for="penerbit">Penerbit</label>
                    <input type="text" id="penerbit" name="penerbit" required>
                </div>

                <div class="item-dmatb">
                    <label for="penulis">Penulis</label>
                    <select name="penulis" id="penulis">
                        <option value="#" disabled selected>PILIH PENULIS</option>
                        <?= $dmaOptionsPenulis; ?>
                    </select>
                </div>

                <div class="item-dmatb">
                    <label for="jumlah_eksamplar">Jumlah Eksamplar</label>
                    <input type="number" id="jumlah_eksamplar" name="jumlah_eksamplar" required>
                </div>

                <div class="item-dmatb">
                    <label for="deskripsi">Deskripsi</label>
                    <textarea id="deskripsi" name="deskripsi" required></textarea>
                </div>

                <div class="item-dmatb">
                    <label for="total_stok">Total Stok</label>
                    <input type="number" id="total_stok" name="total_stok" required>
                </div>

                <div class="item-dmatb">
                    <label for="tanggal_masuk">Tanggal Masuk</label>
                    <input type="date" id="tanggal_masuk" name="tanggal_masuk" required>
                </div>

                <div class="item-dmatb">
                    <button type="submit" name="btnTambah" value="true">Tambah Buku</button>
                </div>
            </form>
        </div>
        <?php
            // session_start();
            if ($_SESSION['addbook'] == true) {
                echo "<div style='padding: 1em; margin: 1em 0; background-color: yellowgreen; border-radius: 8px; color: white;'>Berhasil menambahakan buku</div>";
            }
        ?>
    </div>
</div>
