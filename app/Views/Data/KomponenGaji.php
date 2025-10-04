<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Komponen Gaji</title>
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
            <h4 class="mb-0">Daftar Komponen Gaji</h4>
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
                            <th class="text-center">Aksi</th>
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
                                    <td class="text-center">
                                        <a href="<?= base_url('edit/gaji/' . $g['id_komponen_gaji']); ?>" class="btn btn-warning btn-sm me-1">
                                            Edit
                                        </a>
                                        <a href="<?= base_url('delete/gaji/' . $g['id_komponen_gaji']); ?>" 
                                           onclick="return confirm('Apakah anda ingin menghapus komponen gaji <?= esc($g['nama_komponen']);?> pada kategori <?= esc($g['kategori']); ?>')" 
                                           class="btn btn-danger btn-sm">
                                            Delete
                                        </a>
                                    </td>
                                </tr>
                            <?php } ?>
                        <?php } else { ?>
                            <tr>
                                <td colspan="7" class="text-center text-muted">Tidak ada data komponen gaji.</td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
            <div class="text-end mt-3 ">
                <a href="<?= base_url('input/komponen'); ?>" class="btn btn-primary">
                    + Tambah Komponen Gaji
                </a>
            </div>
        </div>
    </div>
</div>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
