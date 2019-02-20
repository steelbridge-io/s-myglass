<?php
/**
 * Created by PhpStorm.
 * User: chrisparsons
 * Date: 2019-02-17
 * Time: 18:04
 */

function google_analytics() { ?>

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-134592752-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-134592752-1');
    </script>



<?php }
add_action( 'wp_head', 'google_analytics', 10 );
