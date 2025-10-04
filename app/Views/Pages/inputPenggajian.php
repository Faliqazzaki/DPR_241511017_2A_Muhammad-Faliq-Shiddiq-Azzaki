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
                        <h2 class="card-title text-center mb-4">Form Input penggajian</h2>
                        <form action="/input/detail/auth" method="post">
                                <div class="table-responsive mb-4">
                                    <table class="table table-bordered table-striped w-100 text-center align-middle">
                                        <thead class="table-primary">
                                            <tr>
                                                <th>id</th>
                                                <th>nama komponen</th>
                                                <th>kategori</th>
                                                <th>jabatan</th>
                                                <th>nominal</th>
                                                <th>satuan</th>
                                                <th>Pilih</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php if (!empty($komponen_gaji)) { ?>
                                                <?php foreach ($komponen_gaji as $g) { ?>
                                                    <tr>
                                                        <td><?= $g['id_komponen_gaji']; ?></td>
                                                        <td><?= $g['nama_komponen']; ?></td>
                                                        <td><?= $g['kategori']; ?></td>
                                                        <td><?= $g['jabatan']; ?></td>
                                                        <td><?= $g['nominal']; ?></td>
                                                        <td><?= $g['satuan']; ?></td>
                                                        <td><input type="checkbox" name="selected[]" value="<?= $$g['id_komponen_gaji']; ?>"></td>
                                                    </tr>
                                                <?php } ?>
                                            <?php } ?>
                                        </tbody>
                                    </table>
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