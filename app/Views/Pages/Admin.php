  <?php 
    echo view('Layout/Header');
  ?>
    <div class="container">
      <div class="col">
        <div class="row">
          <?= $content; ?>
        </div>
      </div>
    </div>
  <?php 
    echo view('Layout/Footer');
  ?>
