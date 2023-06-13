<?php
    require('admin/main/essentials.php');

    session_start();
    session_destroy();
    redirect('index.php');
?>