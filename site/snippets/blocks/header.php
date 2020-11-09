<section>
  <div class="headergrid">
    <div class="header1">
      <h2><?= $data->heading()->html() ?></h2>
      <?= $data->text()->kirbytext() ?>
      <button><?= $data->buttontext()->kirbytext() ?></button>
      <?= $data->bottomsubhead()->kirbytext() ?>
      <h2><?= $data->bottomheading()->html() ?></h2>
      <?= $data->bottomtext()->kirbytext() ?>
    </div>
    <div class="header2">
      <?php $image = $data->image()->toFile() ?>
      <img src="<?= $image->url() ?>">
    </div>
  </div>
</section>