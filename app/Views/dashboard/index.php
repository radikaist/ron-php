<div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0"><?= $title; ?></h1>
                    </div>
                </div>
            </div>
        </div>
        <section class="content">
            <div class="container-fluid">
                <div class="card card-primary card-outline">
                    <div class="card-header">
                        <h3 class="card-title">Selamat Datang di <?= $appName; ?>!</h3>
                    </div>
                    <div class="card-body">
                        <p>Ini adalah halaman konten utama yang kini sudah sepenuhnya menggunakan aset asli AdminLTE. Semua kueri dari database akan dimunculkan di sini dalam format tabel atau grafik yang interaktif.</p>
                        <button class="btn btn-info"><i class="fas fa-check"></i> Tombol Percobaan</button>
                    </div>
                </div>
            </div>
        </section>
        </div>
    ```

### 3. File `app/Views/layouts/footer.php`
Pastikan isinya murni hanya kode ini:

```html
    <footer class="main-footer">
        <strong>&copy; 2026 PT. Matsuo Precision Indonesia.</strong>
        All rights reserved.
        <div class="float-right d-none d-sm-inline-block">
            <b>Version</b> 1.0.0-dev
        </div>
    </footer>

</div>
<script src="[https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js](https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js)"></script>
<script src="[https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js](https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js)"></script>
<script src="[https://cdn.jsdelivr.net/npm/admin-lte@3.2/dist/js/adminlte.min.js](https://cdn.jsdelivr.net/npm/admin-lte@3.2/dist/js/adminlte.min.js)"></script>

</body>
</html>