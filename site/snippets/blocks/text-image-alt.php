<section>
  <div class="txtimgaltgrid">
    <div class="txtimgalt1">
      <h2 class="txtimgaltheader"><?= $data->heading()->html() ?></h2>
      <div class="txtimgalttext"><?= $data->text()->html() ?></div>
      <a href="<?= $data->button()->toLinkObject() ?>"><button class="bbutton"><?= $data->buttontext()->html() ?></button></a>
    </div>
    
    <div class="txtimgalt2">
      <?php $image = $data->image()->toFile() ?>
      <img class="textimgalt" src="<?= $image->url() ?>">
    </div>
  </div>
</section>