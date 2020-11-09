<section class="map">
  <div class="textcenter">
    <h2><?= $data->heading()->html() ?></h2>
    <?= $data->text()->kirbytext() ?>
  </div>
  
  <div>
    <iframe src='assets\map\mapdemo.html'
        width='100%' height='579px'>
    </iframe>
  </div>
</section>