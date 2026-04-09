<?php
// Mulai session untuk kebutuhan login/RBAC nanti
if (!session_id()) session_start();

// Panggil file inti framework
require_once '../app/Core/App.php';
require_once '../app/Core/Controller.php';

// Jalankan mesin routing
$app = new App();