<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Instruksi Pembayaran</title>
    <link rel="stylesheet" href="<?= base_url('brem/css/bootstrap.min.css') ?>">
    <link rel="stylesheet" href="<?= base_url('brem/css/style.css') ?>">
</head>
<body>
    <div class="container py-5">
        <div class="card shadow-lg p-4">
            <h2 class="text-center mb-4">Instruksi Pembayaran</h2>
            <p><strong>Nama:</strong> <?= esc($pembayaran['full_name']) ?></p>
            <p><strong>Email:</strong> <?= esc($pembayaran['email']) ?></p>
            <p><strong>Produk:</strong> <?= esc($produk['title']) ?></p>
            <?php
                            // Ambil angka dari string seperti "IDR 500000"
                            $hargaBersih = preg_replace('/[^\d]/', '', $produk['harga']);
                            $hargaAngka = (int) $hargaBersih;
            ?>
            <p><strong>Harga:</strong>Rp. <?= number_format($hargaAngka, 0, ',', '.') ?></p>
            <p><strong>Metode Pembayaran:</strong> <?= esc(ucfirst($pembayaran['metode_pembayaran'])) ?></p>
            <p><strong>Status:</strong> <?= esc($pembayaran['status']) ?></p>

            <hr>

            <?php if ($pembayaran['metode_pembayaran'] == 'bank') : ?>
                <h5>Silakan transfer ke rekening berikut:</h5>
                <ul>
                    <li><strong>Bank:</strong> BCA</li>
                    <li><strong>No. Rekening:</strong> 1234567890</li>
                    <li><strong>Atas Nama:</strong> BMC Education</li>
                </ul>
            <?php elseif ($pembayaran['metode_pembayaran'] == 'dana') : ?>
                <h5>Transfer Pembayaran ke link Dana berikut untuk membayar:</h5>
                <p><strong>Rekening Dana: </strong> 012851025120581</p>
            <?php endif; ?>

            <p class="mt-4">Setelah pembayaran, silakan hubungi admin atau unggah bukti pembayaran melalui dashboard.</p>

            <div class="text-center mt-4">
                <a href="<?= base_url()?>" class="btn btn-primary">Kembali ke Home</a>
            </div>
        </div>
    </div>
</body>
</html>
