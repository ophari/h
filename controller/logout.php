<?php
    session_start();
    session_unset();
    session_destroy();
    echo "<script>alert('terimakasih');window.location='../index.php';</script>";



 