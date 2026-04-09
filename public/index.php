<?php
// TAMPILKAN ERROR: Baris ini sangat penting selama masa development
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Mulai session untuk kebutuhan login/RBAC
if (!session_id()) session_start();

// Panggil file inti framework
// CATATAN PENTING: Pastikan huruf besar/kecil di struktur folder Anda 
// sama persis dengan '../app/Core/App.php'
require_once '../app/Core/App.php';
require_once '../app/Core/Controller.php';

// Jalankan mesin routing
$app = new App();