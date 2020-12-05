<section>
  <div class="">
    <div class="">
      <h2 class="sixslideheader"><?= $data->heading()->html() ?></h2>
    </div>

    <div class="tab">
      <button class="tablinks" onclick="openTab(event, '<?= $data->slide1heading()->html() ?>')" id="defaultOpen"><?= $data->slide1heading()->html() ?></button>
      <button class="tablinks" onclick="openTab(event, '<?= $data->slide2heading()->html() ?>')"><?= $data->slide2heading()->html() ?></button>
      <button class="tablinks" onclick="openTab(event, '<?= $data->slide3heading()->html() ?>')"><?= $data->slide3heading()->html() ?></button>
      <button class="tablinks" onclick="openTab(event, '<?= $data->slide4heading()->html() ?>')"><?= $data->slide4heading()->html() ?></button>
      <button class="tablinks" onclick="openTab(event, '<?= $data->slide5heading()->html() ?>')"><?= $data->slide5heading()->html() ?></button>
      <button class="tablinks" onclick="openTab(event, '<?= $data->slide6heading()->html() ?>')"><?= $data->slide6heading()->html() ?></button>
    </div>

    <div id="<?= $data->slide1heading()->html() ?>" class="tabcontent">
      <div class="tab1">
        <div class="tabheader"><?= $data->slide1heading()->html() ?></div>
        <div class="tabtext"><?= $data->slide1text()->kirbytext() ?></div>
      </div>
      <div class="tab2">
        <div class="tabnumber"><?= $data->slide1topheading()->html() ?></div>
        <div class="tabnumbertxt"><?= $data->slide1toptext()->html() ?></div>
        <div class="tabnumber"><?= $data->slide1bottomheading()->html() ?></div>
        <div class="tabnumbertxt"><?= $data->slide1bottomtext()->html() ?></div>
      </div>
      <div class="tab3">
        <?php $image = $data->slide1image()->toFile() ?>
        <img class="tabimg" src="<?= $image->url() ?>">
      </div>
    </div>

    <div id="<?= $data->slide2heading()->html() ?>" class="tabcontent">
      <div class="tab1">
        <div class="tabheader"><?= $data->slide2heading()->html() ?></div>
        <div class="tabtext"><?= $data->slide2text()->kirbytext() ?></div>
      </div>
      <div class="tab2">
        <div class="tabnumber"><?= $data->slide2topheading()->html() ?></div>
        <div class="tabnumbertxt"><?= $data->slide2toptext()->html() ?></div>
        <div class="tabnumber"><?= $data->slide2bottomheading()->html() ?></div>
        <div class="tabnumbertxt"><?= $data->slide2bottomtext()->html() ?></div>
      </div>
      <div class="tab3">
        <?php $image = $data->slide2image()->toFile() ?>
        <img class="tabimg" src="<?= $image->url() ?>">
      </div>
    </div>

    <div id="<?= $data->slide3heading()->html() ?>" class="tabcontent">
      <div class="tab1">
        <div class="tabheader"><?= $data->slide3heading()->html() ?></div>
        <div class="tabtext"><?= $data->slide3text()->kirbytext() ?></div>
      </div>
      <div class="tab2">
        <div class="tabnumber"><?= $data->slide3topheading()->html() ?></div>
        <div class="tabnumbertxt"><?= $data->slide3toptext()->html() ?></div>
        <div class="tabnumber"><?= $data->slide3bottomheading()->html() ?></div>
        <div class="tabnumbertxt"><?= $data->slide3bottomtext()->html() ?></div>
      </div>
      <div class="tab3">
        <?php $image = $data->slide3image()->toFile() ?>
        <img class="tabimg" src="<?= $image->url() ?>">
      </div>
    </div>

    <div id="<?= $data->slide4heading()->html() ?>" class="tabcontent">
      <div class="tab1">
        <div class="tabheader"><?= $data->slide4heading()->html() ?></div>
        <div class="tabtext"><?= $data->slide4text()->kirbytext() ?></div>
      </div>
      <div class="tab2">
        <div class="tabnumber"><?= $data->slide4topheading()->html() ?></div>
        <div class="tabnumbertxt"><?= $data->slide4toptext()->html() ?></div>
        <div class="tabnumber"><?= $data->slide4bottomheading()->html() ?></div>
        <div class="tabnumbertxt"><?= $data->slide4bottomtext()->html() ?></div>
      </div>
      <div class="tab3">
        <?php $image = $data->slide4image()->toFile() ?>
        <img class="tabimg" src="<?= $image->url() ?>">
      </div>
    </div>

    <div id="<?= $data->slide5heading()->html() ?>" class="tabcontent">
      <div class="tab1">
        <div class="tabheader"><?= $data->slide5heading()->html() ?></div>
        <div class="tabtext"><?= $data->slide5text()->kirbytext() ?></div>
      </div>
      <div class="tab2">
        <div class="tabnumber"><?= $data->slide5topheading()->html() ?></div>
        <div class="tabnumbertxt"><?= $data->slide5toptext()->html() ?></div>
        <div class="tabnumber"><?= $data->slide5bottomheading()->html() ?></div>
        <div class="tabnumbertxt"><?= $data->slide5bottomtext()->html() ?></div>
      </div>
      <div class="tab3">
        <?php $image = $data->slide5image()->toFile() ?>
        <img class="tabimg" src="<?= $image->url() ?>">
      </div>
    </div>

    <div id="<?= $data->slide6heading()->html() ?>" class="tabcontent">
      <div class="tab1">
        <div class="tabheader"><?= $data->slide6heading()->html() ?></div>
        <div class="tabtext"><?= $data->slide6text()->kirbytext() ?></div>
      </div>
      <div class="tab2">
        <div class="tabnumber"><?= $data->slide6topheading()->html() ?></div>
        <div class="tabnumbertxt"><?= $data->slide6toptext()->html() ?></div>
        <div class="tabnumber"><?= $data->slide6bottomheading()->html() ?></div>
        <div class="tabnumbertxt"><?= $data->slide6bottomtext()->html() ?></div>
      </div>
      <div class="tab3">
        <?php $image = $data->slide6image()->toFile() ?>
        <img class="tabimg" src="<?= $image->url() ?>">
      </div>
    </div>
  </div>
</section>