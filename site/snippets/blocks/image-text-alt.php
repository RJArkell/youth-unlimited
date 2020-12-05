<section>
  <div class="imgtxtaltgrid">
    <div class="imgtxtalt1">
      <?php $image = $data->image()->toFile() ?>
      <img class="textimgalt" src="<?= $image->url() ?>">
    </div>

    <div class="imgtxtalt2">
      <h2 class="imgtxtaltheader"><?= $data->heading()->html() ?></h2>
      <div class="imgtxtalttext"><?= $data->text()->html() ?></div>
      <button class="bbutton"><?= $data->buttontext()->html() ?></button>
    </div>
  </div>
</section>