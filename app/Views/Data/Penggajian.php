<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Gaji</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f4f6f9;
        }
        .card-header {
            background-color: #001f3f !important;
            color: #fff !important;
        }
        .table thead {
            background-color: #001f3f;
            color: #fff;
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
    <div class="card shadow-lg rounded-3">
        <div class="card-header">
            <h4 class="mb-0">Detail Komponen Gaji</h4>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-striped table-hover table-bordered align-middle">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nama Komponen</th>
                            <th>Kategori</th>
                            <th>Jabatan</th>
                            <th>Nominal</th>
                            <th>Satuan</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php if (!empty($detailGaji)) { ?>
                            <?php foreach ($detailGaji as $d) { ?>
                                <tr>
                                    <td><?= $d['id_komponen_gaji']; ?></td>
                                    <td><?= $d['nama_komponen']; ?></td>
                                    <td><?= $d['kategori']; ?></td>
                                    <td><?= $d['jabatan']; ?></td>
                                    <td><?= $d['nominal']; ?></td>
                                    <td><?= $d['satuan']; ?></td>
                                </tr>
                            <?php } ?>
                        <?php } else { ?>
                            <tr>
                                <td colspan="6" class="text-center text-muted">Data komponen gaji tidak tersedia.</td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>

            <?php if (!empty($detailGaji)) : ?>
                <div class="text-center mt-3">
                        <a href="<?= base_url('input/detail/penggajian/' . $detailGaji[0]['jabatan'] . '/' . $id_anggota); ?>" class="btn btn-primary px-4">
                        + Input
                    </a>
                </div>
            <?php endif; ?>
        </div>
    </div>
</div>
<a href="/home/admin/" style="display: flex; justify-content: center;" class="btn btn-danger">Kembali</a>
<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
