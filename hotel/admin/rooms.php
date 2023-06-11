<?php
    require('main/essentials.php');
    adminLogin();
    session_regenerate_id(true);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin | Rooms & Suites</title>
    <?php require('main/links.php')?>
</head>
<body class="custom-bg-5">

    <?php require('main/header.php')?>

    <div class="container-fluid" id="main-content">
        <div class="row">
            <div class="col-lg-10 ms-auto p-4 overflow-hidden">
                <h3 class="mb-4">ROOMS & SUITES</h3>

                <!-- General Rooms Section -->

                <div class="card border-0 shadow-sm mb-4">
                    <div class="card-body">
                        <div class="d-flex align-items-center justify-content-between mb-3">
                            <h5 class="card-title m-0 fw-bold">Rooms & Suites</h5>
                            <button type="button" class="btn custom-bg-4 text-white" data-bs-toggle="modal" data-bs-target="#add-room-t">
                                <i class="bi bi-plus-square"></i> Add
                            </button>
                        </div>

                        <div class="table-responsive-lg" style="height: 450px; overflow-y: scroll;">
                            <table class="table table-hover border">
                                <thead class="sticky-top table-dark">
                                    <tr>
                                        <th scope="col">No</th>
                                        <th scope="col">Name</th>
                                        <th scope="col">Description</th>
                                        <th scope="col">Guests</th>
                                        <th scope="col">Price</th>
                                        <th scope="col">Quantity</th>
                                        <th scope="col">Status</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody id="room-t-data" class="align-middle">
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                

            </div>
        </div>
    </div>

    <!-- Add Room Modal -->

    <div class="modal fade" id="add-room-t" data-bs-backdrop="static" data-bs-keyboard="true" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <form id="add_room_t_form">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title fs-5">Add Room</h5>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label class="form-label fw-bold">Name</label>
                                <input type="text" name="room_t_name" id="room_t_name_inp" class="form-control shadow-none" required>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="form-label fw-bold">Price</label>
                                <input type="number" name="room_t_price" id="room_t_price_inp" class="form-control shadow-none" required>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="form-label fw-bold">Quantity</label>
                                <input type="number" name="room_t_quantity" id="room_t_quantity_inp" class="form-control shadow-none" required>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="form-label fw-bold">Guests</label>
                                <input type="number" name="room_t_guests" id="room_t_guests_inp" class="form-control shadow-none" required>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label class="form-label fw-bold">Description</label>
                            <textarea name="room_t_desc" id="room_t_desc_inp" rows="3" class="form-control shadow-none" required></textarea>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="reset" class="btn text-secondary shadow-none" data-bs-dismiss="modal">Cancel</button>
                        <button type="submit" class="btn custom-bg-1">SUBMIT</button>
                    </div>
                </div>
            </form>                       
        </div>
    </div>

    <!-- Edit Room Modal -->

    <div class="modal fade" id="edit-room-t" data-bs-backdrop="static" data-bs-keyboard="true" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <form id="edit_room_t_form">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title fs-5">Edit Room</h5>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label class="form-label fw-bold">Name</label>
                                <input type="text" name="room_t_name" id="room_t_name_inp" class="form-control shadow-none" required>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="form-label fw-bold">Price</label>
                                <input type="number" name="room_t_price" id="room_t_price_inp" class="form-control shadow-none" required>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="form-label fw-bold">Quantity</label>
                                <input type="number" name="room_t_quantity" id="room_t_quantity_inp" class="form-control shadow-none" required>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="form-label fw-bold">Guests</label>
                                <input type="number" name="room_t_guests" id="room_t_guests_inp" class="form-control shadow-none" required>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label class="form-label fw-bold">Description</label>
                            <textarea name="room_t_desc" id="room_t_desc_inp" rows="3" class="form-control shadow-none" required></textarea>
                        </div>
                        <input type="hidden" name="room_t_id">
                    </div>
                    <div class="modal-footer">
                        <button type="reset" class="btn text-secondary shadow-none" data-bs-dismiss="modal">Cancel</button>
                        <button type="submit" class="btn custom-bg-1">SUBMIT</button>
                    </div>
                </div>
            </form>                       
        </div>
    </div>


    <?php require('main/scripts.php')?>
    <script src="scripts/rooms.js"></script>
</body>
</html>
