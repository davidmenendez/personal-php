<!DOCTYPE html>
<html>
    <head>
        <title>#BeACharacter</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href='http://fonts.googleapis.com/css?family=Lato:300,400|Open+Sans:400,300|Oswald' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" type="text/css" href="assets/css/jquery.fancybox.css">
        <link rel="stylesheet" type="text/css" href="assets/css/styles.css">
    </head>
    <body>
        <section id="siteHeader" class="container">
            <h1>David Menendez</h1>
            <nav>
                <ul>
                    <li><a href="index.html">HOME</a></li>
                    <li class="active"><a href="portfolio.html">WORK</a></li>
                    <li><a href="about.html">ABOUT</a></li>
                    <li><a href="about.html#resumeContainer">RESUME</a></li>
                </ul>
            </nav>
        </section>
        <section id="work">
            <div class="container mainContent">
                <img class="banner" src="assets/img/work/beacharacter/banner.jpg">
                <h3>#BeACharacter</h3>
                <p>Client- WhiteCastle</p>
                <h2>Description</h2>
                <p>This year Party City decided to make a heavily social network based microsite for their Halloween promotion. The theme is #BeACharacter, as if using the hash tag on various social networks to be a part of the website. For this project I worked as head front end developer.</p>
                <p>Phase 1 of the site is the largest of the 2 phases. Phase 1 involves setting up the responsive layout of the website. Some of the components that need to be developed include a youtube theater at the top of the page, setting up a responsive carousel, and the user generated content area.</p>
                <p>Once the CSS for the layout was complete I spent a great amount of time working with the creative developer to get the images sliced correctly and start adding the creative assets. This was a bit tricky at times because of the responsive element, but after some tinkering I was able to get everything to act correctly.</p>
                <p>The user generated content area took quite a bit of time to do. It's a 4x4 image grid that uses infinite scrolling. There was originally two pages, one for the user generated content, but that was dropped into an overlay. It was just a matter of setting up the grid and connecting the overlay with all the share functionality. I also had to find a solution for the content that was videos.</p>
                <p>In the end everything was connected and the had a good flow responsively. The trickiest part of the project was getting the overlay to act nicely responsively in a way that fit the creative. Once that was worked out everything else sort of fell into place.</p>
                <p><a href="http://bacdev.ztrac.com" target="_blank">BeACharacter Link</a></p>
                <div id="screens">
                    <h3>Screens</h3>
                    <div class="row">
                        <div class="col col3">
                            <a href="assets/img/work/beacharacter/fullsize/be-a-character2.jpg" class="fancybox" rel="group">
                                <img src="assets/img/work/beacharacter/be-a-character2.jpg" alt="party city development">
                            </a>
                        </div>
                        <div class="col col3">
                            <a href="assets/img/work/beacharacter/fullsize/be-a-character1.jpg" class="fancybox" rel="group">
                                <img src="assets/img/work/beacharacter/be-a-character1.jpg" alt="party city development">
                            </a>
                        </div>
                        <div class="col col3">
                            <a href="assets/img/work/beacharacter/fullsize/be-a-character3.jpg" class="fancybox" rel="group">
                                <img src="assets/img/work/beacharacter/be-a-character3.jpg" alt="party city development">
                            </a>
                        </div>
                    </div>
                </div>
                <div id="workNav">
                    <a class="btn" href="bridgewater.php">Bridgwater</a>
                </div>
            </div>
        </section>
        <footer>
            <div class="container">
                <nav id="footerNav">
                    <ul>
                        <li><h2><a href="work.html">WORK</a></h2></li>
                        <li><h2><a href="work.html#resumeContainer">RESUME</a></h2></li>
                        <li><h2><a id="contactBtn" href="#">CONTACT</a></h2></li>
                    </ul>
                </nav>
            </div>
        </footer>
        <script src="assets/js/libs/jquery/jquery.js"></script>
        <script src="assets/js/libs/fancybox/jquery.fancybox.js"></script>
        <script src="assets/js/libs/fancybox/jquery.mousewheel-3.0.6.pack.js"></script>
        <script src="assets/js/functions.js"></script>
    </body>
</html>