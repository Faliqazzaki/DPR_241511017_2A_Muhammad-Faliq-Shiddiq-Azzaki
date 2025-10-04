<?php echo view('Layout/Header'); ?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Input Data Anggota</title> <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" 
          integrity="sha384-QWTKZyjpPEjISv5WaRU9O+2hD8T9c9S8P+Gf4w5fL0j3o4G5W5V0h5vL4j5vL4j5vL4j5" crossorigin="anonymous">
    <style>
        body {
            background-color: #f8f9fa; /* Warna latar belakang abu-abu muda */
        }
        .card {
            border-radius: 1rem; /* Sudut membulat untuk card */
            box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.1); /* Bayangan lembut */
        }
        .form-label {
            font-weight: 600; /* Label lebih tebal */
            color: #343a40; /* Warna label lebih gelap */
        }
        .btn-primary {
            background-color: #007bff; /* Biru utama Bootstrap */
            border-color: #007bff;
        }
        .btn-primary:hover {
            background-color: #0056b3; /* Biru lebih gelap saat hover */
            border-color: #0056b3;
        }
        h2 {
            color: #007bff; /* Warna judul */
            font-weight: bold;
        }
    </style>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>
<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-8 col-lg-6">
                <div class="card p-4">
                    <div class="card-body">
                        <h2 class="card-title text-center mb-4">Form Input Data Komponen Gaji</h2>
                        <form action="/input/komponen/auth" method="post">
                            <div class="mb-3">
                                <label for="nama_komponen" class="form-label">Nama Komponen</label>
                                <input type="text" class="form-control" name="nama_komponen" id="nama_komponen" required>
                            </div>
                            <div class="mb-3">
                                <label for="kategori" class="form-label">Kategori</label>
                                <select class="form-select" name="kategori" id="kategori" required>
                                    <option value="">Pilih Status</option>
                                    <option value="Gaji Pokok">Gaji Pokok</option>
                                    <option value="Tunjangan Melekat">Tunjangan Melekat</option>
                                    <option value="Tunjangan Lain">Tunjangan Lain</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="jabatan" class="form-label">Jabatan</label>
                                <select class="form-select" name="jabatan" id="jabatan" required>
                                    <option value="">Pilih Status</option>
                                    <option value="Ketua">Ketua</option>
                                    <option value="Wakil Ketua">Wakil ketua</option>
                                    <option value="Anggota">Anggota</option>
                                    <option value="Semua">Semua</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="nominal" class="form-label">nominal</label>
                                <input type="number" class="form-control" name="nominal" id="nominal">
                                <div class="form-text text-muted">Opsional</div> 
                            </div>
                            <div class="mb-3">
                                <label for="satuan" class="form-label">Satuan</label>
                                <select class="form-select" name="satuan" id="satuan" required>
                                    <option value="">Pilih Status</option>
                                    <option value="Bulan">Bulan</option>
                                    <option value="Hari">Hari</option>
                                    <option value="Periode">Periode</option>
                                </select>
                            </div>
                            <div class="d-grid gap-2 mt-4">
                                <button type="submit" name="input" class="btn btn-primary btn-lg">Input Data</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" 
            integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
<?php echo view('Layout/Footer'); ?>