<section>
  <div class="txtonimggrid">
    <div class="txtonimg1">
      <h2 class="txtonimgheader"><?= $data->heading()->html() ?></h2>
      <div class="txtonimgtext"><?= $data->text()->kirbytext() ?></div>
    </div>
    
    <div class="txtonimg2">
      <?php $image = $data->image()->toFile() ?>
      <img class="" src="<?= $image->url() ?>">
    </div>

    <div class="txtonimg3"></div>
  </div>
</section>