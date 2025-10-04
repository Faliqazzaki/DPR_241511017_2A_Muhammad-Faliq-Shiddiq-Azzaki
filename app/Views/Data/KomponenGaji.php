<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table border="solid 2px">
        <tr>
            <th>id</th>
            <th>nama komponen</th>
            <th>kategori</th>
            <th>jabatan</th>
            <th>nominal</th>
            <th>satuan</th>
            <th>Aksi</th>
        </tr>

        <?php if (!empty($komponen_gaji)) { ?>
            <?php foreach ($komponen_gaji as $g) { ?>
                <tr>
                    <td><?= $g['id_komponen_gaji']; ?></td>
                    <td><?= $g['nama_komponen']; ?></td>
                    <td><?= $g['kategori']; ?></td>
                    <td><?= $g['jabatan']; ?></td>
                    <td><?= $g['nominal']; ?></td>
                    <td><?= $g['satuan']; ?></td>
                    <td>
                        <a href="<?= base_url('delete/gaji' . $g['id_komponen_gaji']); ?>" onclick="return confirm('Apakah anda ingin menghapus komponen gaji <?= esc($g['nama_komponen']);?> pada kategori <?= esc($g['kategori']); ?>')">
                            delete
                        </a>
                    </td>
                </tr>
                <?php } ?>
        <?php } ?>
    </table>
</body>
</html>