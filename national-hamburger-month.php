<?php
#META Settings
$title = "National Hamburger Month";
$description = "National Hamburger Month 2014 David Menendez & Blackbaud";
?>
<?php include 'includes/header.php'; ?>
        <section id="work">
            <div class="container mainContent">
                <img class="banner" src="assets/img/work/nhm/banner.jpg" alt="national hamburger month promotion for Whitecastle by David Menendez">
                <h1>National Hamburger Month by WhiteCastle</h1>
                <p>May kicks off the start of White Castles National Hamburger Month. The point of the website is to allow users to sign up for flash sales in there area and unveil when and where a new sale will take place around the country. I was lead front end developer for this project, which involved heavy use of css3, html5, and jquery. This project has two phases and each phase having it's own set of requirements and challenges to overcome.</p>
                <h2>Phase 1: Develop the initial layout</h2>
                <p>The front end portion of this phase involved building the entire responsive layout. Often times we get the go ahead on a site without creative or specs right away. This was one of the cases. I began by building the fluid layout to account for all devices. The next part was building the form. The form is simple enough; name, age, and zipcode, but behind it lies quite a bit of functionality. We have to check the users information and give them options based off their information. If a user enters an email that is already in the Whitecastle or Craver Nation database then we have to give these users special offers. Likewise for the zip code. Given a database of all Whitecastle location zipcodes, we had to build a system to check the radius of a user and tell them how many castles are in their area.</p>
                <p>To accomplish all this there is a heavy use of jquery that's used to connect the front end with the back end.</p>
                <p>The other main part to this was the count down timer. This project is an MVC project, and unfortunately makes working with ASP date/time tricky with javascript. But in the end I was able to create the working timer.</p>
                <h2>Phase 2: Flash sales</h2>
                <p>Phase 2 of this project consists of showing all the flash sales going on. My end required working with more timer functionality, including adding a progress bar. The initial layout is the same, which saved a lot of time working any new CSS since the site is already responsive. A few new adjustments would have to be made with the jquery as well to include new functionality.</p>
                <p>Part of this phase also involved working with the twitter api to create a twitter feed ticker. Surprisingly, I was unable to find a plugin that already had this functionality, so I had to build one from scratch. After reading up on jquery plugin development I decided to package the feeder as a plugin for the website.</p>
                <p><a href="http://cndev.whitecastle.com/sliderbrationphase2" target="_blank">NHM site link</a></p>
                <div id="screens">
                    <h3>Screens</h3>
                    <div class="row">
                        <div class="col col3">
                            <a href="assets/img/work/nhm/fullsize/national-hamburger-month4.jpg" class="fancybox" rel="group">
                                <img src="assets/img/work/nhm/national-hamburger-month44.jpg" alt="custom sgnup form with twitter feed">
                            </a>
                        </div>
                        <div class="col col3">
                            <a href="assets/img/work/nhm/fullsize/national-hamburger-month1.jpg" class="fancybox" rel="group">
                                <img src="assets/img/work/nhm/national-hamburger-month1.jpg" alt="promotion timers with responsive progress bar">
                            </a>
                        </div>
                        <div class="col col3">
                            <a href="assets/img/work/nhm/fullsize/national-hamburger-month3.jpg" class="fancybox" rel="group">
                                <img src="assets/img/work/nhm/national-hamburger-month3.jpg" alt="store locator by zipcode and custom form validation">
                            </a>
                        </div>
                    </div>
                </div>
                <div id="workNav">
                    <a class="btn" href="zimmerman-blog.php">zBlog</a>
                </div>
            </div>
        </section>
<?php include 'includes/footer.php'; ?>