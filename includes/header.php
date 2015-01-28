<!DOCTYPE html>
<html lang="en-US">
    <head>
        <title><?php echo (isset($title)) ? $title . " | David Menendez | Front-End Developer" : "David Menendez | Front-End Developer"; ?></title>
        <meta charset="UTF-8">
        <meta http-equiv="Cache-control" content="public">
        <meta name="description" content='<?php echo (isset($description)) ? $description : "portfolio site for front-end web developer David Menendez"; ?>'>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta property="og:image" content="http://www.<?php echo $_SERVER['SERVER_NAME']; ?>/assets/img/work/david_menendez_fb.jpg" />
        <link href='http://fonts.googleapis.com/css?family=Lato:300,400|Open+Sans:400,300|Oswald' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" type="text/css" href="assets/css/jquery.fancybox.css">
        <link rel="stylesheet" type="text/css" href="assets/css/styles.css">
        <script>
            (function (i, s, o, g, r, a, m) {
                i['GoogleAnalyticsObject'] = r;
                i[r] = i[r] || function () {
                    (i[r].q = i[r].q || []).push(arguments)
                }, i[r].l = 1 * new Date();
                a = s.createElement(o),
                        m = s.getElementsByTagName(o)[0];
                a.async = 1;
                a.src = g;
                m.parentNode.insertBefore(a, m)
            })(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');

            ga('create', 'UA-43805951-2', 'auto');
            ga('send', 'pageview');

        </script>
    </head>
    <body>
<?php (basename($_SERVER['PHP_SELF']) !== "index.php") ? include 'nav.php' : ""; ?>
