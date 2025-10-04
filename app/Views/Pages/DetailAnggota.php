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
          <?= $content; ?>
        </div>
      </div>
    </div>
    <?php 
        echo view('Layout/Footer');
    ?>
</body>
</html>