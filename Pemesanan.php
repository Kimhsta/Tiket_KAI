<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pemesanan Tiket</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>
    <div class="container mt-5">
        <div class="card shadow-lg">
            <div class="card-header bg-primary text-white text-center  font-weight-bold">
                <h3 class="mb-0"><i class="fas fa-ticket-alt"></i> Pemesanan Tiket Online
                    <br>PT Kereta Api Indonesia
                </h3>
            </div>
            <div class="card-body">
                <form action="reportpemesanan.php" method="post">
                    <div class="form-group">
                        <label>No Urut</label>
                        <input type="text" class="form-control" name="no_urut" required>
                    </div>
                    <div class="form-group">
                        <label>Nama</label>
                        <input type="text" class="form-control" name="nama" required>
                    </div>
                    <div class="form-group">
                        <label>Kota Tujuan</label>
                        <select class="form-control" name="kota_tujuan" required>
                            <option value="">Pilih Kota Tujuan</option>
                            <option value="Jakarta">Jakarta</option>
                            <option value="Bandung">Bandung</option>
                            <option value="Yogyakarta">Yogyakarta</option>
                            <option value="Semarang">Semarang</option>
                            <option value="Surabaya">Surabaya</option>
                            <option value="Malang">Malang</option>
                            <option value="Solo">Solo</option>
                            <option value="Cirebon">Cirebon</option>
                            <option value="Tegal">Tegal</option>
                            <option value="Purwokerto">Purwokerto</option>
                            <option value="Madiun">Madiun</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Jenis KA</label>
                        <select class="form-control" name="jenis_ka" required>
                            <option value="Ekonomi">Ekonomi - Rp 50.000</option>
                            <option value="Eksekutif">Eksekutif - Rp 275.000</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Layanan Makan</label>
                        <select class="form-control" name="layanan_makan" required>
                            <option value="Ya">Ya - Rp 15.000</option>
                            <option value="Tidak">Tidak</option>
                        </select>
                    </div>
                    <div class="text-center">
                        <button type="submit" class="btn btn-primary mr-2">Proses</button>
                        <button type="reset" class="btn btn-secondary">Kosongkan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>
</body>

</html>