<section >
  <div class="headerabgrid">
    <div class="headerabbackground"></div>
    <div class="navablogo">
    <a href="home"><img class="navablogo1" src="./assets/images/svgs/YUlogoblack.svg"></a>
    </div>
    <div class="headerabnav">
      <div class="dropdown navabtext">
        <a href="about-us" class="navabtext">About Us</a>
        <div class="dropdown-content">
          <a href="what-we-do">What We Do</a>
          <a href="making-space">Making Space</a>
          <a href="home">Impact Report</a>
        </div>
      </div>
      <div class="dropdown navabtext">
        <a href="about-us" class="navabtext">Get Involved</a>
        <div class="dropdown-content">
          <a href="volunteer">Volunteer</a>
          <a href="fundraise">Fundraise</a>
          <a href="job-openings">Job Openings</a>
        </div>
      </div>
      <div class="dropdown navabtext">
        <a href="news" class="navabtext">News + Stories</a>
        <div class="dropdown-content">
          <a href="events">Events</a>
          <a href="news">Stories</a>
          <a href="publications">Publications</a>
        </div>
      </div>
      <a href="our-team" class="navabtext">Our Team</a>
      <a href="home" class=""><button class="donatebutton">Donate</button></a>
      <a href="#" class=""><img class="search" src="./assets/images/svgs/searchblack.svg"></a>
    </div>
    <div class="headerab1">
      <h2 class="headerabheader"><?= $data->heading()->html() ?></h2>
    </div>
    <div class="headerab3">
      <div class="headerabsubh"><?= $data->bottomsubhead()->html() ?></div>
      <div class="headerabtext"><?= $data->bottomhtext()->html() ?></div>
      <a href="<?= $data->button()->toLinkObject() ?>"><button class="bbutton"><?= $data->buttontext()->html() ?></button></a>
    </div>
    <div class="headerab2">
      <?php $image = $data->image()->toFile() ?>
      <img class="headerabimg" src="<?= $image->url() ?>">
    </div>
  </div>
</section>