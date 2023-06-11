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

    if (isset($_POST['get_all_room_t'])) {
        $res = selectAll('jenis_kamar');
        $i = 1;

        $data = "";

        while ($row = mysqli_fetch_assoc($res)) {
            // print_r($row);

            $money = number_format($row['HARGA1'], 2, ',', '.');

            if ($row['status'] == 1) {
                $status_s = "<button type='button' onclick='toggle_status($row[jk_id],0)' class='btn w-100 btn-dark btn-sm shadow-none'><i class='bi bi-clipboard-check'></i><br>Active</button>";
            } else {
                $status_s = "<button type='button' onclick='toggle_status($row[jk_id],1)' class='btn btn-warning btn-sm shadow-none'><i class='bi bi-clipboard-check'></i>Inactive</button>";
            }
            
            $data.="
                <tr>
                    <td class='text-center'>$i</td>
                    <td>$row[NAMA_JENIS]</td>
                    <td>$row[DESKRIPSI]</td>
                    <td class='text-center'>$row[max_guest]</td>
                    <td>Rp$money</td>
                    <td class='text-center'>$row[kuantitas]</td>
                    <td>$status_s</td>
                    <td>
                        <button type='button' onclick='rem_room_t($row[jk_id])' class='btn btn-danger btn-sm shadow-none mb-1'>
                            <i class='bi bi-trash'></i> Delete
                        </button>
                        <button type='button' onclick='edit_room_t($row[jk_id])' class='btn btn-primary btn-sm shadow-none' data-bs-toggle='modal' data-bs-target='#edit-room-t'>
                            <i class='bi bi-pencil-square'></i> Edit 
                        </button>
                    </td>
                </tr>
            ";   
            $i++;
        }

        echo $data;
    }

    if (isset($_POST['get_room_t'])) {
        $frm_data = filteration($_POST);

        $query = "SELECT * FROM `jenis_kamar` WHERE `jk_id`=?";
        
        $values = [$frm_data['get_room_t']];
        $res = select($query,$values, 'i');

        $roomdata = mysqli_fetch_assoc($res);
        $data = ["roomdata" => $roomdata];
        $data = json_encode($data);

        echo $data;
    }

    if (isset($_POST['edit_room_t'])) {
        $frm_data = filteration($_POST); 

        $query = "UPDATE `jenis_kamar` SET `NAMA_JENIS`=?,`DESKRIPSI`=?,`max_guest`=?,`HARGA1`=?,`kuantitas`=? WHERE `jk_id`=?";
        
        $values = [$frm_data['name'], $frm_data['desc'], $frm_data['guests'], $frm_data['price'], $frm_data['quantity'], $frm_data['id']];
        if (update($query,$values, 'ssiiii')) {
            echo 1;
        } else {
            echo 0;
        }

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
        
        $values = [$frm_data['status_values'], $frm_data['toggle_status']];        
        if (update($query,$values,'ii')) {
            echo 1;
        } else {
            echo 0;
        }
               
    }

?>