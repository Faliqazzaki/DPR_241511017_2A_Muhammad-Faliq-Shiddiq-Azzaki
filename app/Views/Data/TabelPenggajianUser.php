<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Penggajian</title>
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
            padding: 6px 14px;
            text-decoration: none;
        }
        .btn-navy:hover {
            background-color: #003366;
            color: #fff;
        }
        .link-detail {
            color: #001f3f;
            text-decoration: none;
        }
        .link-detail:hover {
            text-decoration: underline;
            color: #003366;
        }
    </style>
</head>
<body>

<div class="container my-5">
    <div class="card shadow-lg rounded-3">
        <div class="card-header">
            <h4 class="mb-0">Daftar Penggajian</h4>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-striped table-hover table-bordered align-middle">
                    <thead>
                        <tr>
                            <th>ID Anggota</th>
                            <th>Nama</th>
                            <th>Jabatan</th>
                            <th>Total Gaji</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php if (!empty($listGaji)): ?>
                            <?php foreach ($listGaji as $row): ?>
                                <tr>
                                    <td><?= esc($row['id_anggota']); ?></td>
                                    <td><?= esc($row['nama']); ?></td>
                                    <td><?= esc($row['jabatan']); ?></td>
                                    <td>Rp <?= number_format($row['total_gaji'], 0, ',', '.'); ?></td>
                                </tr>
                            <?php endforeach; ?>
                        <?php else: ?>
                            <tr>
                                <td colspan="5" class="text-center text-muted">Tidak ada data</td>
                            </tr>
                        <?php endif; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>