<?php

class HomeController extends Controller {
    
    public function index() {
        // Menyiapkan data yang akan dikirim ke View
        $data = [
            'title'   => 'Dashboard ERP',
            'appName' => 'Sistem Manufaktur RON PHP'
        ];

        // Memanggil View beserta datanya menggunakan layout AdminLTE
        $this->adminView('dashboard/index', $data);
    }
}