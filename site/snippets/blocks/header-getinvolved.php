<section >
  <div class="headergigrid">
    <div class="headergibackground"></div>
    <div class="headergi1">
      <h2 class="headergiheader"><?= $data->heading()->html() ?></h2>
    </div>
    <div class="headergi3">
      <div class="headergisubh"><?= $data->bottomsubhead()->html() ?></div>
      <div class="headergitext"><?= $data->bottomhtext()->html() ?></div>
    </div>
    <div class="headergi2">
      <?php $image = $data->image()->toFile() ?>
      <img class="headergiimg" alt="<?= $data->alttext()->html() ?>" src="<?= $image->url() ?>">
    </div>
    <div class="headergi4">
      <img class="headergilogo" src="./assets/images/svgs/bluequote.svg">
    </div>
  </div>
</section>