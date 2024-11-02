<?php
$no_urut = $_POST['no_urut'];
$nama = $_POST['nama'];
$kota_tujuan = $_POST['kota_tujuan'];
$jenis_ka = $_POST['jenis_ka'];
$layanan_makan = $_POST['layanan_makan'];

$tarif_ka = ($jenis_ka == 'Ekonomi') ? 50000 : 275000;

$tarif_makan = ($layanan_makan == 'Ya') ? 15000 : 0;

$subtotal = $tarif_ka + $tarif_makan;

$diskon = 0;
if ($jenis_ka == 'Eksekutif' && $layanan_makan == 'Ya') {
    $diskon = $subtotal * 0.10;
}

$grand_total = $subtotal - $diskon;
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laporan Pemesanan Tiket</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>
    <div class="container mt-5">
        <div class="card shadow-lg">
            <div class="card-header bg-primary text-white text-center">
                <h3 class="mb-0"><i class="fas fa-ticket-alt"></i> PT Kereta Api Indonesia
                    <br>Laporan Pemesanan Tiket
                </h3>
            </div>
            <div class="card-body">
                <table class="table table-borderless">
                    <tbody>
                        <tr>
                            <th class="text-left">No Urut</th>
                            <td>:</td>
                            <td><?= htmlspecialchars($no_urut) ?></td>
                        </tr>
                        <tr>
                            <th class="text-left">Nama</th>
                            <td>:</td>
                            <td><?= htmlspecialchars($nama) ?></td>
                        </tr>
                        <tr>
                            <th class="text-left">Kota Tujuan</th>
                            <td>:</td>
                            <td><?= htmlspecialchars($kota_tujuan) ?></td>
                        </tr>
                        <tr>
                            <th class="text-left">Tarif Jenis KA</th>
                            <td>:</td>
                            <td>Rp <?= number_format($tarif_ka, 0, ',', '.') ?></td>
                        </tr>
                        <tr>
                            <th class="text-left">Tarif Layanan Makan</th>
                            <td>:</td>
                            <td>Rp <?= number_format($tarif_makan, 0, ',', '.') ?></td>
                        </tr>
                        <tr class="border-top">
                            <td colspan="3"></td>
                        </tr>
                        <tr>
                            <th class="text-left">Subtotal</th>
                            <td>:</td>
                            <td>Rp <?= number_format($subtotal, 0, ',', '.') ?></td>
                        </tr>
                        <tr>
                            <th class="text-left">Diskon</th>
                            <td>:</td>
                            <td>Rp <?= number_format($diskon, 0, ',', '.') ?></td>
                        </tr>
                        <tr class="border-top">
                            <td colspan="3"></td>
                        </tr>
                        <tr>
                            <th class="text-left">Grand Total</th>
                            <td>:</td>
                            <td>Rp <?= number_format($grand_total, 0, ',', '.') ?></td>
                        </tr>
                    </tbody>
                </table>
                <div class="text-center">
                    <a href="pemesanan.php" class="btn btn-primary">Input Lagi?</a>
                </div>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>
</body>

</html>