<section>
  <div class="footergigrid">
    <div class="footergi1">
      <h2 class="footergihdr"><?= $data->heading()->html() ?></h2>
      <div class="footergitext"><?= $data->text()->html() ?></div>
      <button class="fgibbutton"><?= $data->buttontext()->html() ?></button>
    </div>
    <div class="footergi2">
      <h2 class="footergihdr"><?= $data->footerheading()->html() ?></h2>
      <button class="fgibutton"><?= $data->Leftbuttontext()->html() ?></button>
      <button class="fgibutton"><?= $data->Midbuttontext()->html() ?></button>
      <button class="fgibutton"><?= $data->Rightbuttontext()->html() ?></button>
    </div>
    <div class="footergi3"></div>
    <div class="footergi4">
      <?php $image = $data->image()->toFile() ?>
      <img class="footergiimg" src="<?= $image->url() ?>">
    </div>
  </div>
</section>
