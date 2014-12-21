<section id="siteHeader" class="container">
            <h1>David Menendez</h1>
            <img id="navicon" src="assets/img/menu.svg" alt="menu icon">
            <nav>
                <ul>
                    <li <?php if(basename($_SERVER['PHP_SELF']) == "index.php"){echo "class='active'";}?>><a href="index.php">HOME</a></li>
                    <li <?php if(basename($_SERVER['PHP_SELF']) != "index.php" && basename($_SERVER['PHP_SELF']) != "about.php"){echo "class='active'";}?>><a href="portfolio.php">PORTFOLIO</a></li>
                    <li <?php if(basename($_SERVER['PHP_SELF']) == "about.php"){echo "class='active'";}?>><a href="about.php">ABOUT</a></li>
                    <li><a href="about.php#resumeContainer">RESUME</a></li>
                </ul>
            </nav>
        </section>
