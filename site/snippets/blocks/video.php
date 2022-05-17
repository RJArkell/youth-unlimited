<section >
  <div class="video">
    <?php if ($data->heading()->isNotEmpty()) : ?>
      <h2 class="imgtxtheader"><?= $data->heading()->html() ?></h2>
    <?php endif ?>
    <?php if ($data->text()->isNotEmpty()) : ?>
      <h2 class="imgtxtsubheader"><?= $data->text()->kirbytext() ?></h2>
    <?php endif ?>
    <iframe class="wwdvideo" src="<?= $data->video()->toLinkObject() ?>"></iframe>
  </div>
</section>