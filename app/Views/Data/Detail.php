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
            <th>nama depan</th>
            <th>nama belakang</th>
            <th>gelar depan</th>
            <th>gelar belakang</th>
            <th>jabatan</th>
            <th>status pernikahan</th>
            <th>Gaji</th>
        </tr>

        <?php if (!empty($detail)) { ?>
            <?php $a = $detail ?>
                <tr>
                    <td><?= $a['anggota']['id_anggota']; ?></td>
                    <td><?= $a['anggota']['nama_depan']; ?></td>
                    <td><?= $a['anggota']['nama_belakang']; ?></td>
                    <td><?= $a['anggota']['gelar_depan']; ?></td>
                    <td><?= $a['anggota']['gelar_belakang']; ?></td>
                    <td><?= $a['anggota']['jabatan']; ?></td>
                    <td><?= $a['anggota']['status_pernikahan']; ?></td>
                    <td><?= $a['gaji']; ?></td>
                    <td><a href="<?= base_url('/detail/gaji' . $a['anggota']['id_anggota']); ?>">Detail Gaji</a></td>
                </tr>
        <?php } ?>

    </table>
</body>
</html>