<section >
  <div class="headerwwdgrid">
    <div class="headerwwdbackground"></div>
    <div class="navwwdlogo">
    <a href="home"><img class="navablogo1" src="./assets/images/svgs/YUlogoblack.svg"></a>
    </div>
    <div class="headerwwdnav">
      <div class="dropdown navwwdtext">
        <a href="about-us" class="navwwdtext">About Us</a>
        <div class="dropdown-content">
          <a href="what-we-do">What We Do</a>
          <a href="making-space">Making Space</a>
          <a href="home">Impact Report</a>
        </div>
      </div>
      <div class="dropdown navwwdtext">
        <a href="get-involved" class="navwwdtext">Get Involved</a>
        <div class="dropdown-content">
          <a href="volunteer">Volunteer</a>
          <a href="fundraise">Fundraise</a>
          <a href="job-openings">Job Openings</a>
        </div>
      </div>
      <div class="dropdown navwwdtext">
        <a href="news" class="navwwdtext">News + Stories</a>
        <div class="dropdown-content">
          <a href="events">Events</a>
          <a href="news">Stories</a>
          <a href="publications">Publications</a>
        </div>
      </div>
      <a href="our-team" class="navwwdtext">Our Team</a>
      <a href="home" class=""><button class="donatebutton">Donate</button></a>
      <a href="#" class=""><img class="search" src="./assets/images/svgs/searchblack.svg"></a>
    </div>
    <div class="headerwwd1">
      <h2 class="headerwwdheader"><?= $data->heading()->html() ?></h2>
    </div>
    <div class="headerwwd2">
      <iframe class="wwdvideo" src="<?= $data->video()->toLinkObject() ?>">
      </iframe>
    </div>
    <div class="headerwwd3">
      <h2 class="headerwwdtext"><?= $data->text()->kirbytext() ?></h2>
    </div>
  </div>
</section>