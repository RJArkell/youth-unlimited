<section >
  <div class="txtimgaltgrid">
    <div class="txtimgalt1">
      <h2 class="txtimgaltheader"><?= $data->heading()->html() ?></h2>
      <div class="txtimgalttext"><?= $data->text()->html() ?></div>
      <?php if ($data->buttontext()->isNotEmpty()) : ?>
        <a href="<?= $data->button()->toLinkObject()?>"><button class="bbutton"><?= $data->buttontext()->html() ?></button></a>
      <?php endif ?>
    </div>   
    <div class="">
      <iframe class="wwdvideo" src="<?= $data->video()->toLinkObject() ?>"></iframe>
    </div>
  </div>
</section>