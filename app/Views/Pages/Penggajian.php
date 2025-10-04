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
    </div>
    <?php 
        echo view('Layout/Footer');
    ?>