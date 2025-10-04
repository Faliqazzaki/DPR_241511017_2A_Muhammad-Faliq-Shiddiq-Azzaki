<?php
echo view('Layout/HeaderCitizen');
?>
<div class="container" style="display: flex; justify-content: center; flex-direction:column;">
    <div class="col">
        <div class="row">
            <?= $content; ?>
        </div>
    </div>
</div>
<?php
echo view('Layout/FooterCitizen');
?>