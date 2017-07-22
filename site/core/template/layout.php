<?php
// Before anything is sent, set the appropriate header
header('Content-Type: text/html; charset=UTF-8');
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">
        <link href="web/css/bootstrap.min.css" rel="stylesheet">
        <link href="web/css/font-awesome.min.css" rel="stylesheet">
        <link href="web/css/prettyPhoto.css" rel="stylesheet">
        <link href="web/css/price-range.css" rel="stylesheet">
        <link href="web/css/animate.css" rel="stylesheet">
        <link href="web/css/main.css" rel="stylesheet">
        <link href="web/css/responsive.css" rel="stylesheet">
        <!--[if lt IE 9]>
        <script src="web/js/html5shiv.js"></script>
        <script src="web/js/respond.min.js"></script>
        <![endif]-->       
        <link rel="shortcut icon" href="images/ico/favicon.ico">
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="web/images/ico/apple-touch-icon-144-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="web/images/ico/apple-touch-icon-114-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="web/images/ico/apple-touch-icon-72-precomposed.png">
        <link rel="apple-touch-icon-precomposed" href="web/images/ico/apple-touch-icon-57-precomposed.png">

        <?php
        /*         * *
         * This section specifies the page header
         */

        // The page title
        if ($templateResource = TemplateResource::getResource('title')) {
            ?>
            <title><?php echo $templateResource; ?></title>
        <?php } ?>	
        <!-- Basic CSS -->
        <!-- End of basic CSS -->
        <?php
        // The CSS included
        if ($templateResource = TemplateResource::getResource('css')) {
            ?>
            <!-- Additional CSS -->
            <?php
            foreach ($templateResource as $style) {
                $style = "web/$style";
                ?>
                <link rel="stylesheet" href="<?php echo $style; ?>" />
                <?php
            }
            ?>
            <!-- Additional CSS end -->
            <?php
        }
        ?>

        <!-- Favicon and touch icons -->


    </head>
    <!--    <body>-->

    <body> 
        <?php
        require "header.php";
        ?>

        <?php
        require $currentPage;
        ?>

        <?php
        require "footer.php";
        ?>

        <!-- Basic scripts -->  
        <script src="web/js/jquery.js"></script>
        <script src="web/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=true"></script>
        <script type="text/javascript" src="js/gmaps.js"></script>
        <script src="web/js/contact.js"></script>
        <script src="web/js/price-range.js"></script>
        <script src="web/js/jquery.scrollUp.min.js"></script>
        <script src="web/js/jquery.prettyPhoto.js"></script>
        <script src="web/js/main.js"></script>
        <!-- End of basic scripts -->
        <?php
        /*         * *
         * Specify the scripts that are to be added.
         */
        if ($templateResource = TemplateResource::getResource('js')) {
            ?>
            <!-- Additional Scripts -->
            <?php
            foreach ($templateResource as $js) {
                $js = "web/$js";
                ?>
                <script src="<?php echo $js; ?>"></script>
                <?php
            }
            ?>
            <?php
        }
        ?>
        <?php if (!App::isLoggedIn()) { ?>
            <script>
                jQuery(document).ready(function () {
                    App.initLogin();
                });
            </script>
        <?php } else { ?>
            <script>
                jQuery(document).ready(function () {
                    // initiate layout and plugins
                    App.init();
                    //App.setMainPage(true);

                });
            </script>
            <?php
        }
        ?>
    </body>
</html>
