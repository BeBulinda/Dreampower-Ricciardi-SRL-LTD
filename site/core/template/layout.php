<?php
// Before anything is sent, set the appropriate header
header('Content-Type: text/html; charset=UTF-8');
?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="en">
    <!--<![endif]-->

    <head>
        <meta charset="utf-8">
        <!--[if IE]>
                <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <![endif]-->
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon" href="images/favicon.ico" type="image/ico" sizes="16x16 32x32">
        <link rel="icon" href="images/favicon.png" type="image/png" sizes="16x16 32x32">
        <link rel="icon" href="images/favicon.svg" type="image/png" sizes="16x16 32x32">
        <link rel="stylesheet" href="web/css/bootstrap.min.css">
        <link rel="stylesheet" href="web/css/main.css" id="color-switcher-link">
        <link rel="stylesheet" href="web/css/animations.css">
        <link rel="stylesheet" href="web/css/fonts.css">
        <script src="web/js/vendor/modernizr-2.6.2.min.js"></script>

        <!--[if lt IE 9]>
                <script src="js/vendor/html5shiv.min.js"></script>
                <script src="js/vendor/respond.min.js"></script>
                <script src="js/vendor/jquery-1.12.4.min.js"></script>
        <![endif]-->

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
        <!--[if lt IE 9]>
                <div class="bg-danger text-center">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/" class="highlight">upgrade your browser</a> to improve your experience.</div>
        <![endif]-->

        <div class="preloader">
            <div class="preloader_image"></div>
        </div>
        <!-- search modal -->
        <div class="modal" tabindex="-1" role="dialog" aria-labelledby="search_modal" id="search_modal">
            <div class="widget widget_search">
                <form method="get" class="searchform form-inline" action="/">
                    <div class="form-group">
                        <input type="text" value="" name="search" class="form-control" placeholder="Search keyword" id="modal-search-input">
                    </div>
                    <button type="submit" class="theme_button">Search</button>
                </form>
            </div>
        </div>
        <!-- wrappers for visual page editor and boxed version of template -->
        <div id="canvas">
            <div id="box_wrapper">
                <?php
                require "top_header.php";
                require "header.php";
                ?>

                <?php
                require $currentPage;
                ?>

                <?php
                require "footer.php";
                require "copyright.php";
                ?>

                <!-- Basic scripts -->  
                <script src="web/js/compressed.js"></script>
                <script src="web/js/main.js"></script>
                <!-- End of basic scripts -->
                <?php
                /*                 * *
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
            </div>
            <!-- eof #box_wrapper -->
        </div>
        <!-- eof #canvas -->
    </body>
</html>
