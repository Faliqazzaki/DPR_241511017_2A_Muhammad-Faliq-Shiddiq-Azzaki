<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title; ?></title>
</head>
<body>
    <?php 
        echo view('Layout/Header');
    ?>
    <div class="container" style="display: flex; justify-content: center; flex-direction:column;">
      <div class="col">
        <div class="row">
          <h1 style="display: flex; justify-content: center; margin: 10px;">Data Anggota</h1>
          <?= $content; ?>
        </div>
      </div>
      <a href="/home/admin" style="display: flex; justify-content: center;">Kembali</a>
    </div>
    <?php 
        echo view('Layout/Footer');
    ?>
</body>
</html>