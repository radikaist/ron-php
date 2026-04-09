<?php
// Deteksi HTTPS atau HTTP
$protocol = isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http";

// Ambil nama host (contoh: dev.radika.id)
$host = $_SERVER['HTTP_HOST'];

// Definisikan BASE_URL
// Hasilnya akan selalu menjadi: https://dev.radika.id
define('BASE_URL', $protocol . "://" . $host);

// (Nantinya konfigurasi database akan ditaruh di sini juga)