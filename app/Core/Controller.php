<?php

class Controller {

    // 1. Fungsi untuk halaman tanpa layout (Contoh: Login, Error Page)
    public function view($viewPath, $data = []) {
        // Ekstrak array data menjadi variabel individual agar mudah dipanggil di HTML
        if (!empty($data)) {
            extract($data);
        }

        $file = ROOT_PATH . '/app/Views/' . $viewPath . '.php';

        if (file_exists($file)) {
            require_once $file;
        } else {
            die("<b>Error RON PHP:</b> File View <strong>{$viewPath}.php</strong> tidak ditemukan.");
        }
    }

    // 2. Fungsi khusus untuk halaman AdminLTE (Otomatis memuat Header, Sidebar, Footer)
    public function adminView($viewPath, $data = []) {
        if (!empty($data)) {
            extract($data);
        }

        // Panggil bagian atas AdminLTE (CSS, Meta, Navbar)
        if (file_exists(ROOT_PATH . '/app/Views/layouts/header.php')) {
            require_once ROOT_PATH . '/app/Views/layouts/header.php';
        }

        // Panggil bagian Sidebar (Menu Navigasi Dinamis nantinya)
        if (file_exists(ROOT_PATH . '/app/Views/layouts/sidebar.php')) {
            require_once ROOT_PATH . '/app/Views/layouts/sidebar.php';
        }

        // Panggil file KONTEN UTAMA
        $contentFile = ROOT_PATH . '/app/Views/' . $viewPath . '.php';
        if (file_exists($contentFile)) {
            require_once $contentFile;
        } else {
            echo "<div class='content-wrapper'><section class='content'><div class='alert alert-danger'>Error: File View <strong>{$viewPath}.php</strong> tidak ditemukan.</div></section></div>";
        }

        // Panggil bagian Footer (Copyright, Scripts JS)
        if (file_exists(ROOT_PATH . '/app/Views/layouts/footer.php')) {
            require_once ROOT_PATH . '/app/Views/layouts/footer.php';
        }
    }
}