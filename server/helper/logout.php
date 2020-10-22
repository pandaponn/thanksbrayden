<?php 
    session_start();
    session_unset();
    session_destroy();
    header("Location: ../../guugle-main/guugle/home_page/home.html" );

?>