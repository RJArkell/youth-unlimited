<section>
  <div class="txtimggrid">
    <div class="txtimg1">
      <h2><?= $data->heading()->html() ?></h2>
      <?= $data->text()->kirbytext() ?>
      <button><?= $data->buttontext()->kirbytext() ?></button>
    </div>
    
    <div class="txtimg2">
      <?php $image = $data->image()->toFile() ?>
      <img class="textimg" src="<?= $image->url() ?>">
    </div>
  </div>
</section>