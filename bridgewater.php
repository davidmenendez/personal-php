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
                <p>Lennar is a housing company in South Florida and the Lakewood Ranch website is a portal for a new housing community. The site was a quick one month project that features responsive design, carousels, and a nifty little home gallery. For the project I was put as lead developer and only had to work with the artist to get it done.</p>
                <p>As lead developer it was my duty to work directly with the creative artist and own the project. Set estimates and create a time line. Take full responsibility. I started the responsive layout from a functional wireframe. Slowly building the framework. Researching which plugins and techniques could be used. This is usually the process while we wait for official mocks to be drafted.</p>
                <p>The site is small and simple enough, but elegant and functional. The Community, Lifestyle, and Location pages use standard HTML and CSS, but the Homes page is a little more involved. The gallery needed to expand and be responsive as well as have an image overlay with printing and social functionality. This page took the most work by far, but came out looking great. The other part that took a little bit of creative thinking was the carousel. The plugin does not natively come with navigation functionality like how it looks, so after a some tinkering I was able to get it to have that nice looking image navigation.</p>
                <p>The biggest challenge was the form. Because the site was not going to be hosted by Zimmerman I had to wait for contact from the Lennar IT services to get specific information about how to post the form. This information did not come until nearly the end. What was once just an HTML site needed to be converted to an ASP webforms website in order post the form properly. With the help of one of the .Net developers I was able to make sure the site was converted successfully.</p>
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
                    <a class="btn" href="bridgewater.html">Bridgwater</a>
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