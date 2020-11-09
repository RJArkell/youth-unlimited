<section>
  <div class="circlegrid">
    <div class="circle1 cgrid">
      <div class="cgrid1">
        <?= $data->Texttopleft()->kirbytext() ?>
        <?= $data->Textbottomleft()->kirbytext() ?>
      </div>
      <div class="cgrid2">
        <?php $image = $data->Imageleft()->toFile() ?>
        <img class="circleimg" src="<?= $image->url() ?>">
      </div>
    </div>

    <div class="circle2 cgrid">
      <div class="cgrid1">
        <?= $data->Texttopmid()->kirbytext() ?>
        <?= $data->Textbottommid()->kirbytext() ?>
      </div>
      <div class="cgrid2">
        <?php $image = $data->Imagemid()->toFile() ?>
        <img class="circleimg" src="<?= $image->url() ?>">
      </div>
    </div>

    <div class="circle3 cgrid">
      <div class="cgrid1">
        <?= $data->Texttopright()->kirbytext() ?>
        <?= $data->Textbottomright()->kirbytext() ?>
      </div>
      <div class="cgrid2">
        <?php $image = $data->Imageright()->toFile() ?>
        <img class="circleimg" src="<?= $image->url() ?>">
      </div>
    </div>
  </div>
</section>