<section>
  <div class="imgtxtgrid">
    <div class="imgtxt1">
      <?php $image = $data->image()->toFile() ?>
      <img class="textimg" src="<?= $image->url() ?>">
    </div>

    <div class="imgtxt2">
      <h2><?= $data->heading()->html() ?></h2>
      <?= $data->text()->kirbytext() ?>
      <button><?= $data->buttontext()->kirbytext() ?></button>
    </div>
  </div>
</section>