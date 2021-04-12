<section >
  <div class="headerwwdgrid">
    <div class="headerwwdbackground"></div>
    <div class="headerwwd1">
      <h2 class="headerwwdheader"><?= $data->heading()->html() ?></h2>
    </div>
    <div class="headerwwd3">
      <h2 class="headerwwdtext"><?= $data->text()->kirbytext() ?></h2>
    </div>
    <div class="headerwwd2">
      <iframe class="wwdvideo" src="<?= $data->video()->toLinkObject() ?>">
      </iframe>
    </div>
  </div>
</section>