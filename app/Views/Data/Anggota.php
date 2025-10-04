<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Anggota</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background-color: #f4f6f9;
        }
        .navbar-custom {
            background-color: #001f3f;
        }
        .card-header {
            background-color: #001f3f !important;
        }
        .btn-navy {
            background-color: #001f3f;
            color: #fff;
        }
        .btn-navy:hover {
            background-color: #003366;
            color: #fff;
        }
        .table thead {
            background-color: #001f3f;
            color: #fff;
        }
        .link-input {
            display: flex;
            justify-content: center;
            margin-top: 20px;
        }
        .link-input a {
            background-color: #001f3f;
            color: #fff;
            padding: 10px 20px;
            border-radius: 8px;
            text-decoration: none;
            transition: 0.3s;
        }
        .link-input a:hover {
            background-color: #003366;
            color: #fff;
        }
    </style>
</head>
<body>

<div class="container my-5">
    <div class="card shadow-lg rounded-3">
        <div class="card-header text-white">
            <h4 class="mb-0">Daftar Anggota</h4>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-striped table-hover table-bordered align-middle">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>ID</th>
                            <th>Nama Depan</th>
                            <th>Nama Belakang</th>
                            <th>Gelar Depan</th>
                            <th>Gelar Belakang</th>
                            <th>Jabatan</th>
                            <th>Status Pernikahan</th>
                            <th class="text-center">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php if (!empty($anggota)) { ?>
                            <?php $no = 1; ?>
                            <?php foreach ($anggota as $a) { ?>
                                <tr>
                                    <td><?= $no++; ?></td>
                                    <td><?= $a['id_anggota']; ?></td>
                                    <td><?= $a['nama_depan']; ?></td>
                                    <td><?= $a['nama_belakang']; ?></td>
                                    <td><?= $a['gelar_depan']; ?></td>
                                    <td><?= $a['gelar_belakang']; ?></td>
                                    <td><?= $a['jabatan']; ?></td>
                                    <td><?= $a['status_pernikahan']; ?></td>
                                    <td class="text-center">
                                        <a href="<?= base_url('detail/anggota/' . $a['id_anggota']); ?>" class="btn btn-info btn-sm me-1">
                                            Details
                                        </a>
                                        <a href="<?= base_url('edit/' . $a['id_anggota']); ?>" class="btn btn-warning btn-sm me-1">
                                            Edit
                                        </a>
                                        <a href="<?= base_url('delete/' . $a['id_anggota']); ?>" 
                                           onclick="return confirm('Apakah anda ingin menghapus anggota <?= esc($a['nama_depan']);?> <?= esc($a['nama_belakang']); ?>')" 
                                           class="btn btn-danger btn-sm">
                                            Delete
                                        </a>
                                    </td>
                                </tr>
                            <?php } ?>
                        <?php } else { ?>
                            <tr>
                                <td colspan="9" class="text-center text-muted">Tidak ada data anggota.</td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<div class="link-input">
    <a href="/input">+ Input Anggota</a>
</div>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
