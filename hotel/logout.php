<?php
    require('admin/main/essentials.php');
    require('admin/main/db_config.php');

    session_start();

    // Mendapatkan u_id dari session
    $u_id = $_SESSION['uId'];

    // Update status menjadi 0
    $update_query = "UPDATE `user` SET `status` = 0 WHERE `u_id` = ?";
    $update_values = [$u_id];
    update($update_query, $update_values, 'i');

    session_destroy();
    redirect('index.php');
?>