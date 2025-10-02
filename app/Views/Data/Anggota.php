<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table>
        <tr>
            <th>No</th>
            <th>id</th>
            <th>nama depan</th>
            <th>nama belakang</th>
            <th>gelar depan</th>
            <th>gelar belakang</th>
            <th>jabatan</th>
            <th>statu pernikahan</th>
        </tr>

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
                </tr>
            <?php } ?>
        <?php } ?>

    </table>
</body>
</html>