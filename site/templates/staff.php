<?php snippet('html_start') ?>
<?php snippet('blocks/navbar-ourteam') ?>
<section >
  <div class="headersgrid">
    <div class="headersbackground"></div>
    <div class="headers1">
        <img class="headersimg" src=<?= $page->image()->url() ?>>
      </div>
      <div class="headers2">
        <h2 class="headersheader"><?= $page->title()->html() ?></h2>
        <div class="headerssub"><?= $page->position()->html() ?></div>
      </div>
      <div class="headerssocial">
        <a href="<?= $page->facebooklink()->toLinkObject() ?>"><img class="stsocial" src="\.\assets\images\svgs\fb.svg"></a>
        <a href="<?= $page->instagramlink()->toLinkObject() ?>"><img class="stsocial" src="\.\assets\images\svgs\insta.svg"></a>
        <a href="<?= $page->twitterlink()->toLinkObject() ?>"><img class="stsocial" src="\.\assets\images\svgs\twitter.svg"></a>
      </div>
      <div class="headers3">
        <div class="headerstxt"><?= $page->description()->kt() ?></div>
        <?php $team = $page->team();?>
        <a href="/./teams/<?= str_replace(' ', '-', strtolower($team)); ?>"><button class="sbutton">View Team Page  ›</button></a>
      </div>
  </div>
</section>
<h2 class="headersheader btext">Direct Donation</h2> 
<div class="donateblock">
  <?= $page->script()->kt() ?>
</div>
<?php snippet('footer') ?>
<?php snippet('html_end') ?>