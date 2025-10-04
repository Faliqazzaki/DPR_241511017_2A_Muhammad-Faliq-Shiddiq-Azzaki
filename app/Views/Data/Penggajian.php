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
        </tr>

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
        <?php } ?>
    </table>
</body>
</html>