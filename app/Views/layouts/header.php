<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>RON PHP - <?= isset($title) ? $title : 'ERP System'; ?></title>
    <style>
        aside ul { list-style: none; padding: 0; }
        aside ul li { padding: 10px 15px; border-radius: 4px; transition: background-color 0.2s; color: #555; cursor: pointer; }
        aside ul li:hover { background-color: #e0f2f1; color: #00796b; } /* Warna hijau toska muda saat hover */
    </style>
</head>
<body style="margin: 0; font-family: sans-serif;">
    <header style="background: #e0f7fa; color: #006064; padding: 15px 20px; border-bottom: 1px solid #b2ebf2; display: flex; align-items: center; justify-content: space-between;">
        <h2 style="margin: 0;">[NAVBAR] RON PHP Framework</h2>
        <div style="color: #00838f;">Admin Panel</div>
    </header>