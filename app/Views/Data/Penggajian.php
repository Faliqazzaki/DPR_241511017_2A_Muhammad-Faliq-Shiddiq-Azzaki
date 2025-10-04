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
                <?php $d = $detailGaji ?>
        <?php } ?>
    </table>
    <?php if (!empty($detailGaji)) : ?>
        <div style="margin-top: 16px; text-align: center;">
            <a href="<?= base_url('input/detail/penggajian/' . $detailGaji[0]['jabatan']); ?>" 
               style="display: inline-block; background-color: #007bff; color: white; padding: 8px 16px; 
                      text-decoration: none; border-radius: 4px;">
                Input
            </a>
        </div>
    <?php endif; ?>
</body>
</html>