<?php snippet('html_start') ?>
<?php snippet('blocks/navbar-news') ?>
<section >
  <div class="headerngrid">
    <div class="headernbackground"></div>
    <div class="headern1">
      <h2 class="headernheader"><?= $page->name()->html() ?></h2>
    </div>
    <div class="headern2"></div>
  </div>
</section>
<div class="eventgrid">
  <article class="event1">
    <p class="eventsub">Event Details</p>
    <div class="eventdate"><time><?= $page->eventdate()->toDate('l dS F, Y') ?></time></div>
    <div class="eventloc"><?= $page->location()->html() ?></div>
    <a href="<?= $page->link()->toLinkObject() ?>"><button class="bbutton eventb"><?= $page->button()->html() ?></button></a>
    <p class="eventsub">About</p>
    <div class="eventtext"><?= $page->body()->kt() ?></div>
  </article>
  <div class="event2">
  <img class="eventimg" src=<?= $page->image()->url() ?>>
    <?php if ($image2 = $page->image2()->toFile()): ?>
      <img class="eventimg beimg" src=<?= $image2->url() ?>>
    <?php endif ?>
  </div> 
</div>
<?php snippet('footer') ?>
<?php snippet('html_end') ?>
