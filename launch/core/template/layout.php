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
        <link rel="icon" href="images/faviconr.ico" type="image/ico" sizes="16x16 32x32">
        <link rel="icon" href="images/faviconr.png" type="image/png" sizes="16x16 32x32">
        <title>Dreampower Ricciardi SRL LTD | Website Under Reconstruction</title>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <link rel="stylesheet" href="web/css/main.css" />

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
        <!-- Wrapper -->
        <div id="wrapper" class="divided">
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
            <script src="web/js/jquery.min.js"></script>
            <script src="web/js/jquery.scrollex.min.js"></script>
            <script src="web/js/jquery.scrolly.min.js"></script>
            <script src="web/js/skel.min.js"></script>
            <script src="web/js/util.js"></script>
            <script src="web/js/main.js"></script>
            <!-- End of basic scripts -->
            <?php
            /*             * *
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
    </body>
</html>
