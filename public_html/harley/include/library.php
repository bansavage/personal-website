<?php
/**
 * Repeatedly used functions - mostly all generate HTML
 * (Libary.php is included within all pages)
 */

/**
 * Generate HTML head for all pages
 */
function head()
{
    $header = '<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <title>Harley Scrapbook</title>
        <!-- Favicon -->
        <link rel="icon" type="image/png" href="favicon-32x32.png" sizes="32x32" />
        <link rel="icon" type="image/png" href="favicon-16x16.png" sizes="16x16" />
        <!-- Bootstrap core CSS -->
        <link type="text/css" href="css/bootstrap.min.css" rel="stylesheet">
        <!-- jquery-ui CSS -->
        <link type="text/css" href="css/jquery-ui.min.css" rel="stylesheet">
        <!--load jquery 3-->
        <script type="text/javascript" src="plugins/js/jquery/jquery-3.1.1.min.js"></script>
        <!--load bootstrap-->
        <script type="text/javascript" src="plugins/js/bootstrap/bootstrap.min.js"></script>
        <!--load jquery-UI-->
        <script type="text/javascript" src="plugins/js/jquery/jquery-ui.min.js"></script>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=PT+Serif" rel="stylesheet">
        <!-- Custom CSS & Scripts -->
        <link type="text/css" href="css/customizedBootstrap.css" rel="stylesheet">
        <link type="text/css" href="css/custom.css" rel="stylesheet">
        <script type="text/javascript" src="js/sharedScript.js"></script>
    </head>
    <body>';
    return $header;
}

/**
 * Generate closing HTML tags
 */
function footer()
{
    $footer = '</body></html>';
    return $footer;
}


/**
 * Remove whitespace and HTML chars/special chars
 */
function cleanData($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
