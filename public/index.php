<?php
// TAMPILKAN ERROR selama masa development
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Mulai session
if (!session_id()) session_start();

// Definisikan ROOT_PATH
define('ROOT_PATH', dirname(__DIR__)); 

// Panggil konfigurasi utama
require_once ROOT_PATH . '/config/config.php';

// Panggil file inti framework
require_once ROOT_PATH . '/app/Core/App.php';
require_once ROOT_PATH . '/app/Core/Controller.php';

// Jalankan mesin routing
$app = new App();