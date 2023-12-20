<div class="container-fluid">
    <div class="dma-tambah-buku">
        <h1>Tambah Buku</h1>
        <div>
            <form action="/addbook" method="POST">
                <div class="item-dmatb">
                    <label for="judul">Judul:</label>
                    <input type="text" id="judul" name="judul" required>
                </div>

                <div class="item-dmatb">
                    <label for="kategori">Kategori:</label>
                    <input type="text" id="kategori" name="kategori" required>
                </div>

                <div class="item-dmatb">
                    <label for="isbn">ISBN:</label>
                    <input type="text" id="isbn" name="isbn" required>
                </div>

                <div class="item-dmatb">
                    <label for="tahun_terbit">Tahun Terbit:</label>
                    <input type="number" id="tahun_terbit" name="tahun_terbit" required>
                </div>

                <div class="item-dmatb">
                    <label for="penerbit">Penerbit:</label>
                    <input type="text" id="penerbit" name="penerbit" required>
                </div>

                <div class="item-dmatb">
                    <label for="penulis">Penulis:</label>
                    <select name="penulis" id="penulis">
                        <option value="#" disabled selected>PILIH PENULIS</option>
                        <option value="1">penulis 1</option>
                        <option value="#">penulis 2</option>
                        <option value="#">penulis 3</option>
                    </select>
                </div>

                <div class="item-dmatb">
                    <label for="jumlah_eksamplar">Jumlah Eksamplar:</label>
                    <input type="number" id="jumlah_eksamplar" name="jumlah_eksamplar" required>
                </div>

                <div class="item-dmatb">
                    <label for="deskripsi">Deskripsi:</label>
                    <textarea id="deskripsi" name="deskripsi" required></textarea>
                </div>

                <div class="item-dmatb">
                    <label for="total_stok">Total Stok:</label>
                    <input type="number" id="total_stok" name="total_stok" required>
                </div>

                <div class="item-dmatb">
                    <label for="tanggal_masuk">Tanggal Masuk:</label>
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
