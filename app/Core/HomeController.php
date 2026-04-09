<?php

class HomeController extends Controller {
    
    // Method default jika tidak ada URL tambahan (misal: domain.com)
    public function index() {
        echo "<h1>Sistem Routing RON PHP Berhasil!</h1>";
        echo "<p>Coba akses URL: <strong>domainanda.com/home/test/cikarang/bekasi</strong></p>";
    }

    // Method untuk mengecek apakah parameter URL terbaca
    public function test($param1 = '', $param2 = '') {
        echo "<h1>Halaman Test</h1>";
        echo "<p>Parameter 1: " . htmlspecialchars($param1) . "</p>";
        echo "<p>Parameter 2: " . htmlspecialchars($param2) . "</p>";
    }
}