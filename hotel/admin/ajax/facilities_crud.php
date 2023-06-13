<?php

    require('../main/db_config.php');
    require('../main/essentials.php');
    adminLogin();

    if (isset($_POST['add_facility'])) {
        $frm_data = filteration($_POST);

        $query = "INSERT INTO `fasilitas`(`jenisfasilitas`, `deskripsi`, `harga2`) VALUES (?,?,?)";
        
        $values = [$frm_data['name'], $frm_data['desc'], $frm_data['price']];
        $res = insert($query,$values, 'ssi');
        echo $res;
    }

    if (isset($_POST['get_facility'])) {
        $res = selectAll('fasilitas');
        $i = 1;

        while ($row = mysqli_fetch_assoc($res)) {

            $money = number_format($row['HARGA2'], 2, ',', '.');

            echo <<<data
                <tr>
                    <td>$i</td>
                    <td>$row[JENISFASILITAS]</td>
                    <td>$row[deskripsi]</td>
                    <td>Rp$money</td>
                    <td>
                        <button type="button" onclick="rem_facility($row[f_id])" class="btn btn-danger btn-sm shadow-none">
                            <i class="bi bi-trash"></i> Delete
                        </button>
                    </td>
                </tr>
            data;
            $i++;
        }
    }

    if (isset($_POST['rem_facility'])) {
        $frm_data = filteration($_POST);
        $values = [$frm_data['rem_facility']];

        $query = "DELETE FROM `fasilitas` WHERE `f_id`=?";
        $res = deleted($query,$values,'i');
        echo $res;
    }

?>