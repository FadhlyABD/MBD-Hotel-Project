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
    <title>Admin | Dashboard</title>
    <?php require('main/links.php')?>
</head>
<body class="custom-bg-5">

    <?php require('main/header.php')?>

    <div class="container-fluid" id="main-content">
        <div class="row">
            <div class="col-lg-10 ms-auto p-4 overflow-hidden">
                <h3 class="mb-4">DASHBOARD</h3>

                <!-- Dashboard Section -->

                <div class="card border-0 shadow-sm mb-4">
                    <div class="card-body">
                        <div class="d-flex align-items-center justify-content-between mb-3">
                            <h5 class="card-title m-0 fw-bold">Welcome Home!</h5>
                        </div>
                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas quis diam suscipit, convallis felis ut, condimentum nibh. Quisque eu laoreet enim. Cras sit amet vehicula dui. Donec dapibus nunc vitae cursus lacinia. Vestibulum imperdiet rhoncus odio, a lobortis lorem varius eget. Nullam in purus sed eros tempus vulputate eget ut felis. Proin iaculis fringilla erat, id egestas elit pellentesque eget.

                        Morbi dictum libero eget scelerisque dictum. Suspendisse porta nulla ac risus porta, non commodo sem sagittis. Vestibulum nec massa nisl. Etiam ut semper nisi. Ut non lorem consectetur, egestas justo vel, finibus tellus. Phasellus vulputate, risus vel mollis molestie, eros libero sollicitudin diam, eu volutpat lacus mauris scelerisque ligula. Cras auctor eros a neque sollicitudin congue. Donec et tortor scelerisque, blandit massa ut, faucibus ligula. Aliquam rutrum nibh ac diam varius faucibus. Nulla risus lorem, molestie ac vehicula porttitor, ornare in felis. Suspendisse at gravida ante, egestas accumsan tellus. Sed libero urna, mollis consectetur ligula ac, sodales tempus urna. Praesent vehicula scelerisque ligula, sed auctor odio consequat ac. In volutpat leo et turpis semper fringilla. Aenean tempus orci turpis, in eleifend diam placerat ut.

                        Duis ullamcorper lorem imperdiet velit ornare, ultrices dapibus felis semper. Aliquam egestas at ipsum eget volutpat. Proin sit amet dignissim velit. Vivamus tempor diam sed mi vulputate, ut euismod urna convallis. Vivamus posuere lorem at risus feugiat feugiat. Integer commodo turpis at pellentesque volutpat. Sed viverra velit et odio tristique commodo.

                        Duis ac tristique metus. Nulla tincidunt blandit dui eu interdum. Suspendisse eget convallis magna. Phasellus mattis, erat a consectetur imperdiet, risus libero blandit magna, vitae dignissim justo lorem sit amet turpis. Aliquam erat volutpat. Sed volutpat ex est, vel maximus turpis interdum vitae. Nunc finibus ultrices nibh, id commodo odio commodo quis. Proin id neque scelerisque, feugiat felis ac, elementum justo. Etiam porttitor varius nunc, nec luctus lectus posuere sit amet. Donec in risus dignissim, commodo nibh vel, interdum leo. Sed in congue nibh.

                        Aenean interdum ante id ante tristique, sed ornare ante commodo. Sed sodales orci leo, at tristique tortor ultricies id. Aenean mollis nulla non turpis scelerisque, et ultricies ante vulputate. Etiam volutpat enim nec purus tincidunt bibendum. Maecenas non erat ipsum. Donec ut nibh ut neque cursus suscipit ut id justo. Phasellus at nulla egestas, placerat libero ut, maximus justo.</p>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- <div class="container-fluid" id="main-content">
        <div class="row">
            <div class="col-lg-10 ms-auto p-4 overflow-hidden">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas quis diam suscipit, convallis felis ut, condimentum nibh. Quisque eu laoreet enim. Cras sit amet vehicula dui. Donec dapibus nunc vitae cursus lacinia. Vestibulum imperdiet rhoncus odio, a lobortis lorem varius eget. Nullam in purus sed eros tempus vulputate eget ut felis. Proin iaculis fringilla erat, id egestas elit pellentesque eget.

            Morbi dictum libero eget scelerisque dictum. Suspendisse porta nulla ac risus porta, non commodo sem sagittis. Vestibulum nec massa nisl. Etiam ut semper nisi. Ut non lorem consectetur, egestas justo vel, finibus tellus. Phasellus vulputate, risus vel mollis molestie, eros libero sollicitudin diam, eu volutpat lacus mauris scelerisque ligula. Cras auctor eros a neque sollicitudin congue. Donec et tortor scelerisque, blandit massa ut, faucibus ligula. Aliquam rutrum nibh ac diam varius faucibus. Nulla risus lorem, molestie ac vehicula porttitor, ornare in felis. Suspendisse at gravida ante, egestas accumsan tellus. Sed libero urna, mollis consectetur ligula ac, sodales tempus urna. Praesent vehicula scelerisque ligula, sed auctor odio consequat ac. In volutpat leo et turpis semper fringilla. Aenean tempus orci turpis, in eleifend diam placerat ut.

            Duis ullamcorper lorem imperdiet velit ornare, ultrices dapibus felis semper. Aliquam egestas at ipsum eget volutpat. Proin sit amet dignissim velit. Vivamus tempor diam sed mi vulputate, ut euismod urna convallis. Vivamus posuere lorem at risus feugiat feugiat. Integer commodo turpis at pellentesque volutpat. Sed viverra velit et odio tristique commodo.

            Duis ac tristique metus. Nulla tincidunt blandit dui eu interdum. Suspendisse eget convallis magna. Phasellus mattis, erat a consectetur imperdiet, risus libero blandit magna, vitae dignissim justo lorem sit amet turpis. Aliquam erat volutpat. Sed volutpat ex est, vel maximus turpis interdum vitae. Nunc finibus ultrices nibh, id commodo odio commodo quis. Proin id neque scelerisque, feugiat felis ac, elementum justo. Etiam porttitor varius nunc, nec luctus lectus posuere sit amet. Donec in risus dignissim, commodo nibh vel, interdum leo. Sed in congue nibh.

            Aenean interdum ante id ante tristique, sed ornare ante commodo. Sed sodales orci leo, at tristique tortor ultricies id. Aenean mollis nulla non turpis scelerisque, et ultricies ante vulputate. Etiam volutpat enim nec purus tincidunt bibendum. Maecenas non erat ipsum. Donec ut nibh ut neque cursus suscipit ut id justo. Phasellus at nulla egestas, placerat libero ut, maximus justo.
            </div>
        </div>
    </div> -->

    <?php require('main/scripts.php')?>
</body>
</html>