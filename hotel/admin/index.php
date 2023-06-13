<?php
    require('main/essentials.php');
    require('main/db_config.php');

    session_start();
    
    if ((isset($_SESSION['adminLogin']) && $_SESSION['adminLogin'] == true)) {
        redirect('dashboard.php');
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login Panel</title>    
    <?php require('main/links.php'); ?>
    <style>
        .login-form{
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            width: 400px;
        }
    </style>
</head>
<body class="custom-bg-5">
    
    <div class="login-form text-center bg-white shadow overflow-none">
        <form method="POST">
            <h4 class="bg-dark text-white py-3">ADMIN LOGIN PANEL</h4>
            <div class="p-4">
                <div class="mb-3">
                    <input name="admin_name" required type="text" class="form-control shadow-none text-center" placeholder="Admin Name">
                </div>
                <div class="mb-4">
                    <input name="admin_pass" required type="password" class="form-control shadow-none text-center" placeholder="Password">
                </div>
                <button name="login" type="submit" class="btm text-white custom-bg-1 shadow-none border-0 px-3 py-1">LOGIN</button>
            </div>
        </form>
    </div>

    <?php
        if(isset($_POST['login'])){
            $frm_data = filteration($_POST);

            $query = "SELECT * FROM `admin` WHERE `admin_name`=? AND `admin_pass`=?";
            $values = [$frm_data['admin_name'],$frm_data['admin_pass']];

            $res = select($query,$values,"ss");
            if ($res->num_rows==1) {
                $row = mysqli_fetch_assoc($res);
                $_SESSION['adminLogin'] = true;
                $_SESSION['adminId'] = $row['admin_id'];
                redirect('dashboard.php');
            }
            else {
                alert('error','Login failed - Invalid Credentials!');
            }
        }
    ?>

    <?php require('main/scripts.php'); ?>
</body>
</html>