<?php
ob_start();
include '../../../template/includes/session.php';
include "../../../template/includes/dbcon.php";
?>

        <!DOCTYPE html>
        <html>
        <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <style>
        body, html {
            height: 100%;
            margin: 0%;
        }

        .bg {
            /* The image used */
            background-image: url("../../images/404.png");

            /* Full height */
            height: 100%;

            /* Center and scale the image nicely */
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
        }
        </style>
        </head>
        <body>

        <div class="bg">
            <?php
            if ($_SESSION['role']=='Administrator') {
                echo '<center><h3 style="position: absolute; ">Go back to <a href="../librarian/index.php">Home</a></h3></center>';
            }elseif ($_SESSION['role']=='Student') {
                echo '<center><h3 style="position: absolute; ">Go back to <a href="../students/students_home.php">Home</a></h3></center>';
            }elseif ($_SESSION['role']=='Super Admin') {
                echo '<center><h3 style="position: absolute; ">Go back to <a href="../admin/super_admin_home.php">Home</a></h3></center>';
            }
            
            ?>
        </div>


        </body>
        </html>