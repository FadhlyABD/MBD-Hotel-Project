<?php

    require('../admin/main/db_config.php');
    require('../admin/main/essentials.php');

    if(isset($_POST['register']))
    {
        $data = filteration($_POST);

        // Validasi Password dengan Confirm Password

        if($data['pass'] != $data['cpass']){
            echo 'pass_mismatch';
            exit;
        }

        // Cek apakah user sudah pernah terdaftar

        $u_exist = select("SELECT * FROM `user` WHERE `email` = ? LIMIT 1", [$data['email']], "s");
        

        if(mysqli_num_rows($u_exist)!=0){
            $u_exist_fetch = mysqli_fetch_assoc($u_exist);
            echo 'email_already';
            exit;
        }

        $query = "INSERT INTO `user`(`USERNAME`, `EMAIL`, `PASSWORD`) VALUES (?,?,?)";

        $values = [$data['name'], $data['email'], $data['pass']];

        if(insert($query, $values, 'sss')){
            echo 1;
        }
        else{
            echo 'ins_failed';
        }
    }

?>