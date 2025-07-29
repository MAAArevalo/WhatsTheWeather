<?php

function get_header( $header = '' ){
    $headerurl = "views/partials/header.php";
    if(!empty($header)){
        $headerurl = "views/partials/header-{$header}.php";
    }

    if (file_exists($headerurl)) {
        require $headerurl;
    } else {
        echo "<!-- Header file not found: $headerurl -->";
    }
}

function get_footer( $footer = '' ){
    $footerurl = "views/partials/footer.php";
    if(!empty($footer)){
        $footerurl = "views/partials/footer-{$footer}.php";
    }

    if (file_exists($footerurl)) {
        require $footerurl;
    } else {
        echo "<!-- Header file not found: $footerurl -->";
    }

}