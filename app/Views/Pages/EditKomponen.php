<?php echo view('Layout/Header'); ?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Komponen Gaji</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8 col-lg-6">
            <div class="card p-4">
                <div class="card-body">
                    <h2 class="card-title text-center mb-4">Edit Komponen Gaji</h2>
                    
                    <form action="/edit/gaji/auth" method="post">
                        <input type="hidden" name="id_komponen_gaji" value="<?= esc($komponen['id_komponen_gaji']); ?>">

                        <div class="mb-3">
                            <label class="form-label">Nama Komponen</label>
                            <input type="text" class="form-control" name="nama_komponen"
                                   value="<?= esc($komponen['nama_komponen']); ?>" required>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Kategori</label>
                            <select class="form-select" name="kategori" required>
                                <option value="">Pilih Kategori</option>
                                <option value="Gaji Pokok" <?= $komponen['kategori'] == 'Gaji Pokok' ? 'selected' : '' ?>>Gaji Pokok</option>
                                <option value="Tunjangan Melekat" <?= $komponen['kategori'] == 'Tunjangan Melekat' ? 'selected' : '' ?>>Tunjangan Melekat</option>
                                <option value="Tunjangan Lain" <?= $komponen['kategori'] == 'Tunjangan Lain' ? 'selected' : '' ?>>Tunjangan Lain</option>
                            </select>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Jabatan</label>
                            <select class="form-select" name="jabatan" required>
                                <option value="">Pilih Jabatan</option>
                                <option value="Ketua" <?= $komponen['jabatan'] == 'Ketua' ? 'selected' : '' ?>>Ketua</option>
                                <option value="Wakil Ketua" <?= $komponen['jabatan'] == 'Wakil Ketua' ? 'selected' : '' ?>>Wakil Ketua</option>
                                <option value="Anggota" <?= $komponen['jabatan'] == 'Anggota' ? 'selected' : '' ?>>Anggota</option>
                                <option value="Semua" <?= $komponen['jabatan'] == 'Semua' ? 'selected' : '' ?>>Semua</option>
                            </select>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Nominal</label>
                            <input type="number" class="form-control" name="nominal"
                                   value="<?= esc($komponen['nominal']); ?>" required>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Satuan</label>
                            <select class="form-select" name="satuan" required>
                                <option value="">Pilih Satuan</option>
                                <option value="Bulan" <?= $komponen['satuan'] == 'Bulan' ? 'selected' : '' ?>>Bulan</option>
                                <option value="Hari" <?= $komponen['satuan'] == 'Hari' ? 'selected' : '' ?>>Hari</option>
                                <option value="Periode" <?= $komponen['satuan'] == 'Periode' ? 'selected' : '' ?>>Periode</option>
                            </select>
                        </div>

                        <div class="d-grid gap-2 mt-4">
                            <button type="submit" class="btn btn-primary btn-lg">Simpan Perubahan</button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>
<?php echo view('Layout/Footer'); ?>
