<?php

    require('../main/db_config.php');
    require('../main/essentials.php');
    adminLogin();

    if (isset($_POST['add_room_t'])) {
        $frm_data = filteration($_POST);

        $query = "INSERT INTO `jenis_kamar`(`NAMA_JENIS`, `DESKRIPSI`, `max_guest`, `HARGA1`, `kuantitas`) VALUES (?,?,?,?,?)";
        
        $values = [$frm_data['name'], $frm_data['desc'], $frm_data['guests'], $frm_data['price'], $frm_data['quantity']];
        $res = insert($query,$values, 'ssiii');
        echo $res;
    }

    if (isset($_POST['get_room_t'])) {
        $res = selectAll('jenis_kamar');
        $i = 1;

        // $data = "";

        while ($row = mysqli_fetch_assoc($res)) {
            // print_r($row);
            if ($row['status'] == 1) {
                $status = "<button type='button' onclick='toggle_status($row[jk_id],0)' class='btn btn-dark btn-sm shadow-none'>Active</button>";
            } else {
                $status = "<button type='button' onclick='toggle_status($row[jk_id],1)' class='btn btn-warning btn-sm shadow-none'>Inactive</button>";
            }
            
            // $data.="
            echo <<<data
                <tr>
                    <td>$i</td>
                    <td>$row[NAMA_JENIS]</td>
                    <td>$row[DESKRIPSI]</td>
                    <td class='text-center'>$row[max_guest]</td>
                    <td>Rp.$row[HARGA1]</td>
                    <td class='text-center'>$row[kuantitas]</td>
                    <td>$status</td>
                    <td>
                        <button type='button' onclick='rem_room_t($row[jk_id])' class='btn btn-danger btn-sm shadow-none'>
                            Delete
                        </button>
                    </td>
                </tr>
            data;
            // ";   
            $i++;
        }

        // echo $data;
    }

    if (isset($_POST['rem_room_t'])) {
        $frm_data = filteration($_POST);
        $values = [$frm_data['rem_room_t']];

        $query = "DELETE FROM `jenis_kamar` WHERE `jk_id`=?";
        $res = deleted($query,$values,'i');
        echo $res;
    }

    if (isset($_POST['toggle_status'])) {
        $frm_data = filteration($_POST);

        $query = "UPDATE `jenis_kamar` SET `status`=? WHERE `jk_id`=?";
        
        $values = [$frm_data['value'], $frm_data['toggle_status']];
        $res = update($query,$values,'ii');
        echo $res;
        
    }

?>