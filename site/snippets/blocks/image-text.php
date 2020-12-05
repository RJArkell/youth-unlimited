<section>
  <div class="imgtxtgrid">
    <div class="imgtxt1">
      <?php $image = $data->image()->toFile() ?>
      <img class="imgtxtimg" src="<?= $image->url() ?>">
    </div>

    <div class="imgtxt2">
      <div class="imgtxtsubheader"><?= $data->subheading()->html() ?></div>
      <h2 class="imgtxtheader"><?= $data->heading()->html() ?></h2>
      <div class="imgtxttext"><?= $data->text()->html() ?></div>
      <a href="<?= $data->button()->toLinkObject() ?>"><button class="bbutton"><?= $data->buttontext()->html() ?></button></a>
    </div>
  </div>
</section>