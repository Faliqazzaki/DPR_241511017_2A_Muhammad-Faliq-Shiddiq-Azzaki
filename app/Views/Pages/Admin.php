  <?php 
    echo view('Layout/Header');
  ?>
    <div class="container" style="display: flex; justify-content: center; flex-direction:column;">
      <div class="col">
        <div class="row">
          <h1 style="display: flex; justify-content: center; margin: 10px;">DATA ANGGOTA DPR</h1>
          <?= $content; ?>
        </div>
      </div>
      <a href="/input" style="display: flex; justify-content: center;">Input</a>
    </div>
  <?php 
    echo view('Layout/Footer');
  ?>
