<?php

require("../includes/_config.php");
require('../includes/_functions.php');


if (isset($_POST['get'])) {

    $lessonid = $_POST['lessonid'];

    $query = mysqli_query($conn, "SELECT * FROM `tblattachements` WHERE `_lessonid`='$lessonid' ");
    
    while ($row = mysqli_fetch_array($query)) {
        ?>
            <li class="list-group-item"> Attachment <?php echo $row['_id'] ?> <a href="<?php echo $row['_attachementurl'] ?>" download class="btn btn-primary" style="float: right;" ><i class="fa-solid fa-download"></i></a> </li>
    <?php
    }


}





?>