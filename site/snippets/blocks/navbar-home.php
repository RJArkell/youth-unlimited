<nav class="navhome navstick">
  <div class="mnavbar">
    <a href="./home"><img class="navlogo" src="./assets/images/svgs/YUlogoblack.svg"></a>
    <a href="./mnav"><img class="hamburger" src="./assets/images/svgs/hamburger.svg"></a>
  </div>
  <div class="navbar">
    <a href="./home"><img class="navlogo" src="./assets/images/svgs/YUlogowhite.svg"></a>
    <div class="navlinks">
      <div class="dropdown navtextw">
        <a href="./about-us" class="navtextw">About Us</a>
        <div class="dropdown-content">
          <a href="./what-we-do">What We Do</a>
          <a href="./making-space">Making Space</a>
          <a target="_blank" href="<?= page('impact-report')->pdf()->toFile() ?>">Impact Report</a>
        </div>
      </div>
      <div class="dropdown navtextw">
        <a href="./get-involved" class="navtextw">Get Involved</a>
        <div class="dropdown-content">
          <a href="./job-openings">Job Openings</a>
          <a href="./volunteer">Volunteer</a>
          <a href="./fundraise">Fundraise</a>
        </div>
      </div>
      <div class="dropdown navtextw">
        <a href="./news" class="navtextw">News + Stories</a>
        <div class="dropdown-content">
          <a href="./events">Events</a>
          <a href="./stories">Stories</a>
          <a href="./publications">Publications</a>
        </div>
      </div>
      <div class="dropdown navtextw">
        <a href="./our-team" class="navtextw">Our Team</a>
      </div>
      <div><a href="./donate" class=""><button class="navbutton">Donate</button></a></div>
      <div><a href="./search" class=""><img class="search" src=".\assets\images\svgs\searchwhite.svg"></a></div>
    </div>
  </div>
</nav>