<section class="map">
  <div class="mapgrid">
    <h2 class="mapheader headertext"><?= $data->heading()->html() ?></h2>
    <div class="maptext smalltext"><?= $data->text()->html() ?></div>
  </div>
  
  <div>
    <iframe src='assets\map\mapdemo.html' class="mapframe">
    </iframe>
  </div>
</section>