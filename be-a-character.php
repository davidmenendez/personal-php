<?php
#META Settings
$title = "#BeACharacter";
$description = "#BeACharacter 2014 David Menendez & Blackbaud";
?>
<?php include 'includes/header.php'; ?>
    <section id="project">
        <div class="mainContent">
            <section id="work">
                <div class="container">
                <img class="banner" alt="be a character project for party city" src="assets/img/work/beacharacter/be-a-character-banner.jpg">
                <h1>#BeACharacter by Party City</h1>
                <p><a href="http://bacdev.ztrac.com" target="_blank">BeACharacter Link</a></p>
                <div id="screens">
                    <div class="row">
                        <div class="col col3">
                            <a href="assets/img/work/beacharacter/fullsize/be-a-character2.jpg" class="fancybox" rel="group">
                                <img src="assets/img/work/beacharacter/be-a-character2.jpg" alt="fancybox implementation with custom sharing overlay for be a character">
                            </a>
                        </div>
                        <div class="col col3">
                            <a href="assets/img/work/beacharacter/fullsize/be-a-character1.jpg" class="fancybox" rel="group">
                                <img src="assets/img/work/beacharacter/be-a-character1.jpg" alt="video selector carousel for be a character promotion">
                            </a>
                        </div>
                        <div class="col col3">
                            <a href="assets/img/work/beacharacter/fullsize/be-a-character3.jpg" class="fancybox" rel="group">
                                <img src="assets/img/work/beacharacter/be-a-character3.jpg" alt="instagram library grid for #beacharacter">
                            </a>
                        </div>
                    </div>
                </div>
            </section>
            <section id="projectDescription" class="container">
                <h3>Description</h3>
                <p>This year Party City decided to make a heavily social network based microsite for their Halloween promotion. The theme is #BeACharacter, as if using the hash tag on various social networks to be a part of the website. For this project I worked as head front end developer.</p>
                <p>Phase 1 of the site is the largest of the 2 phases. Phase 1 involves setting up the responsive layout of the website. Some of the components that need to be developed include a youtube theater at the top of the page, setting up a responsive carousel, and the user generated content area.</p>
                <p>Once the CSS for the layout was complete I spent a great amount of time working with the creative developer to get the images sliced correctly and start adding the creative assets. This was a bit tricky at times because of the responsive element, but after some tinkering I was able to get everything to act correctly.</p>
                <p>The user generated content area took quite a bit of time to do. It's a 4x4 image grid that uses infinite scrolling. There was originally two pages, one for the user generated content, but that was dropped into an overlay. It was just a matter of setting up the grid and connecting the overlay with all the share functionality. I also had to find a solution for the content that was videos.</p>
                <p>In the end everything was connected and the had a good flow responsively. The trickiest part of the project was getting the overlay to act nicely responsively in a way that fit the creative. Once that was worked out everything else sort of fell into place.</p>
                <div id="workNav">
                    <a class="btn" href="bridgewater.php">Bridgewater</a>
                </div>
            </section>
        </div>
    </section>
<?php include 'includes/footer.php'; ?>