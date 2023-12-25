<?php
session_start();
?>

<div class="navbar">
    <div class="brand">
        <a href="/">
            <img src="./public/img/library.png" alt="">Perpustakaan
        </a>
    </div>
    <div class="nav-button"><hr>
        <span></span>
        <span></span>
        <span></span>
    </div>
    <div class="nav-list">
        <ul>
            <li class="close">
                <span>X</span>
            </li>
            <li class="nav-item">Beranda</li>
            <li class="nav-item">Manajemen Buku</li>
            <li class="nav-item">Manajemen Anggota</li>
            <li class="nav-item">Laporan</li>
            <li class="nav-item">Keluar (<?= $_SESSION['nama']; ?>)</li>
        </ul>
    </div>
</div>