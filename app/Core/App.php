<?php

class App {
    protected $controller = 'HomeController'; // Controller default
    protected $method = 'index';              // Method default
    protected $params = [];                   // Parameter default (kosong)

    public function __construct() {
        $url = $this->parseUrl();

        // 1. Setup Controller
        // Cek apakah ada parameter url pertama dan file controller-nya ada
        if (isset($url[0])) {
            $controllerName = ucwords($url[0]) . 'Controller'; // Ubah 'home' jadi 'HomeController'
            
            // Gunakan ROOT_PATH untuk mengecek file
            if (file_exists(ROOT_PATH . '/app/Controllers/' . $controllerName . '.php')) {
                $this->controller = $controllerName;
                unset($url[0]);
            }
        }

        // Tentukan path lengkap controller
        $controllerPath = ROOT_PATH . '/app/Controllers/' . $this->controller . '.php';

        // Pengecekan ekstra: Jika file tidak ada, tampilkan pesan error yang jelas
        if (!file_exists($controllerPath)) {
            die("<b>Error RON PHP:</b> File Controller <strong>{$this->controller}.php</strong> tidak ditemukan di folder <strong>app/Controllers/</strong>. <br>Mohon periksa kembali huruf besar/kecil pada nama file dan foldernya.");
        }

        // Panggil dan instansiasi controller
        require_once $controllerPath;
        $this->controller = new $this->controller;

        // 2. Setup Method
        if (isset($url[1])) {
            if (method_exists($this->controller, $url[1])) {
                $this->method = $url[1];
                unset($url[1]);
            }
        }

        // 3. Setup Parameters
        // Ambil sisa elemen array sebagai parameter jika ada
        if (!empty($url)) {
            $this->params = array_values($url);
        }

        // Jalankan Controller & Method, serta kirim Params
        call_user_func_array([$this->controller, $this->method], $this->params);
    }

    // Fungsi untuk memecah URL dan membersihkannya
    public function parseUrl() {
        if (isset($_GET['url'])) {
            $url = rtrim($_GET['url'], '/');
            $url = filter_var($url, FILTER_SANITIZE_URL); // Bersihkan dari karakter aneh
            $url = explode('/', $url);
            return $url;
        }
        return [];
    }
}