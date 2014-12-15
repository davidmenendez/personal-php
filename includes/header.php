<!DOCTYPE html>
<html>
    <head>
        <title><?php echo (isset($title)) ? $title : "David Menendez"; ?></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href='http://fonts.googleapis.com/css?family=Lato:300,400|Open+Sans:400,300|Oswald' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" type="text/css" href="assets/css/jquery.fancybox.css">
        <link rel="stylesheet" type="text/css" href="assets/css/styles.css">
    </head>
    <body>
        <?php
        (basename($_SERVER['PHP_SELF']) !== "index.php") ? include 'nav.php' : "";
        ?>