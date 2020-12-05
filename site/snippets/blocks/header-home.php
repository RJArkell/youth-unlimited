<section >
  <div class="headerhgrid">
    <div class="headerhbackground"></div>
    <div class="headerbanner"><span class="bannertext"><?= $data->banner()->html() ?></span></div>
    <div class="navhlogo">
    <a href="home"><img class="navablogo1" src="./assets/images/svgs/YUlogowhite.svg"></a>
    </div>
    <div class="headerhnav">
      <div class="dropdown navhtext">
        <a href="about-us" class="navhtext">About Us</a>
        <div class="dropdown-content">
          <a href="what-we-do">What We Do</a>
          <a href="making-space">Making Space</a>
          <a href="#">Impact Report</a>
        </div>
      </div>
      <div class="dropdown navhtext">
        <a href="get-involved" class="navhtext">Get Involved</a>
        <div class="dropdown-content">
          <a href="volunteer">Volunteer</a>
          <a href="fundraise">Fundraise</a>
          <a href="job-openings">Job Openings</a>
        </div>
      </div>
      <div class="dropdown navhtext">
        <a href="news" class="navhtext">News + Stories</a>
        <div class="dropdown-content">
          <a href="events">Events</a>
          <a href="stories">Stories</a>
          <a href="publications">Publications</a>
        </div>
      </div>
      <a href="#" class="navhtext">Our Team</a>
      <a href="#" class=""><button class="donatebutton">Donate</button></a>
      <a href="#" class=""><img class="search" src="./assets/images/svgs/searchwhite.svg"></a>
    </div>
    <div class="headerh1">
      <h2 class="headerhtheader"><?= $data->heading()->html() ?></h2>
      <div class="headerhttext"><?= $data->text()->html() ?></div>
      <a href="<?= $data->button()->toLinkObject() ?>"><button class="pbutton"><?= $data->buttontext()->html() ?></button></a>
      </div>
    <div class="headerh3">
      <div class="headerhsubh"><?= $data->bottomsubhead()->html() ?></div>
      <h2 class="headerhbheader"><?= $data->bottomheading()->html() ?></h2>
      <div class="headerhbtext"><?= $data->bottomtext()->html() ?></div>
    </div>
    <div class="headerh2">
      <?php $image = $data->image()->toFile() ?>
      <img class="headerhimg" src="<?= $image->url() ?>">
    </div>
    <div class="headerh4">
      <img class="headerhlogo" src="./assets/images/svgs/goldquote.svg">
    </div>
  </div>
</section>