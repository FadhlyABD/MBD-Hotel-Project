<?php

    require('../main/db_config.php');
    require('../main/essentials.php');
    adminLogin();

    if (isset($_POST['get_general'])) {
        
        $query = "SELECT * FROM `settings` WHERE `settings_id`=?";

        $values = [1];
        $res = select($query, $values, "i");
        $data = mysqli_fetch_assoc($res);
        $json_data = json_encode($data);
        echo $json_data;
    }

    if (isset($_POST['upd_general'])) {
        $frm_data = filteration($_POST);

        echo $frm_data['site_title'];
        echo $frm_data['site_about'];

        $query = "UPDATE `settings` SET `site_title`=?, `site_about`=? WHERE `settings_id`=?";
        
        $values = [$frm_data['site_title'],$frm_data['site_about'], 1];
        $res = update($query, $values, 'ssi');
        echo $res;
    }

    if (isset($_POST['upd_shutdown'])) {
        $frm_data = ($_POST['upd_shutdown'] == 0) ? 1 : 0;

        $query = "UPDATE `settings` SET `shutdown`=? WHERE `settings_id`=?";
        
        $values = [$frm_data,1];
        $res = update($query, $values, 'ii');
        echo $res;
    }

?>