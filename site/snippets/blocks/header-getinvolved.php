<section >
  <div class="headergigrid">
    <div class="headergibackground"></div>
    <div class="navgilogo">
    <a href="home"><img class="navgilogo1" src="./assets/images/svgs/YUlogoblack.svg"></a>
    </div>
    <div class="headerginav">
      <div class="dropdown navgitext">
        <a href="about-us" class="navgitext">About Us</a>
        <div class="dropdown-content">
          <a href="what-we-do">What We Do</a>
          <a href="making-space">Making Space</a>
          <a href="home">Impact Report</a>
        </div>
      </div>
      <div class="dropdown navgitext">
        <a href="get-involved" class="navgitext">Get Involved</a>
        <div class="dropdown-content">
          <a href="volunteer">Volunteer</a>
          <a href="fundraise">Fundraise</a>
          <a href="job-openings">Job Openings</a>
        </div>
      </div>
      <div class="dropdown navgitext">
        <a href="news" class="navgitext">News + Stories</a>
        <div class="dropdown-content">
          <a href="events">Events</a>
          <a href="news">Stories</a>
          <a href="publications">Publications</a>
        </div>
      </div>
      <a href="our-team" class="navgitext">Our Team</a>
      <a href="home" class=""><button class="donatebutton">Donate</button></a>
      <a href="#" class=""><img class="search" src="./assets/images/svgs/searchblack.svg"></a>
    </div>
    <div class="headergi1">
      <h2 class="headergiheader"><?= $data->heading()->html() ?></h2>
    </div>
    <div class="headergi3">
      <div class="headergisubh"><?= $data->bottomsubhead()->html() ?></div>
      <div class="headergitext"><?= $data->bottomhtext()->html() ?></div>
    </div>
    <div class="headergi2">
      <?php $image = $data->image()->toFile() ?>
      <img class="headergiimg" src="<?= $image->url() ?>">
    </div>
  </div>
</section>