<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Anggota</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f4f6f9;
        }
        .card-custom {
            max-width: 600px;
            margin: 50px auto;
            border-radius: 15px;
            box-shadow: 0 8px 20px rgba(0,0,0,0.2);
        }
        .card-header-custom {
            background-color: #001f3f;
            color: #fff;
            font-size: 1.4rem;
            font-weight: 500;
            text-align: center;
        }
        .label {
            font-weight: 500;
            color: #333;
        }
        .value {
            color: #555;
        }
        .btn-navy {
            background-color: #001f3f;
            color: #fff;
            border-radius: 6px;
        }
        .btn-navy:hover {
            background-color: #003366;
            color: #fff;
        }
    </style>
</head>
<body>

<div class="container my-5">
    <?php if (!empty($detail)): ?>
        <?php $a = $detail; ?>
        <div class="card card-custom">
            <div class="card-header card-header-custom">
                Detail Anggota
            </div>
            <div class="card-body">
                <div class="row mb-2">
                    <div class="col-5 label">ID</div>
                    <div class="col-7 value"><?= $a['anggota']['id_anggota']; ?></div>
                </div>
                <div class="row mb-2">
                    <div class="col-5 label">Nama Depan</div>
                    <div class="col-7 value"><?= $a['anggota']['nama_depan']; ?></div>
                </div>
                <div class="row mb-2">
                    <div class="col-5 label">Nama Belakang</div>
                    <div class="col-7 value"><?= $a['anggota']['nama_belakang']; ?></div>
                </div>
                <div class="row mb-2">
                    <div class="col-5 label">Gelar Depan</div>
                    <div class="col-7 value"><?= $a['anggota']['gelar_depan']; ?></div>
                </div>
                <div class="row mb-2">
                    <div class="col-5 label">Gelar Belakang</div>
                    <div class="col-7 value"><?= $a['anggota']['gelar_belakang']; ?></div>
                </div>
                <div class="row mb-2">
                    <div class="col-5 label">Jabatan</div>
                    <div class="col-7 value"><?= $a['anggota']['jabatan']; ?></div>
                </div>
                <div class="row mb-2">
                    <div class="col-5 label">Status Pernikahan</div>
                    <div class="col-7 value"><?= $a['anggota']['status_pernikahan']; ?></div>
                </div>
                <div class="row mb-3">
                    <div class="col-5 label">Gaji</div>
                    <div class="col-7 value">Rp <?= number_format($a['gaji'], 0, ',', '.'); ?></div>
                </div>
                <div class="text-center">
                    <a href="<?= base_url('/detail/gaji/' . $a['anggota']['id_anggota']); ?>" class="btn btn-primary px-4">
                        Detail Gaji
                    </a>
                </div>
            </div>
        </div>
    <?php else: ?>
        <div class="text-center mt-5 text-muted">
            Data tidak tersedia.
        </div>
    <?php endif; ?>
</div>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
