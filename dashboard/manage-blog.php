<?php

session_start();

if (!isset($_SESSION['isLoggedIn']) || !$_SESSION['isLoggedIn'] || $_SESSION['isLoggedIn'] == '') {
    echo "<script>";
    echo "window.location.href = 'login'";
    echo "</script>";
} else {
    if ($_SESSION['userVerify'] != 'true') {
        echo "<script>";
        echo "window.location.href = 'verify'";
        echo "</script>";
    }
}

require('../includes/_functions.php');
require('../includes/_config.php');


if(isset($_GET['del'])){
    $_id = $_GET['id'];
    _deleteBlog($_id);
  }
  

$record_per_page = 5;
$page = '';
if (isset($_GET["page"])) {
    $page = $_GET["page"];
} else {
    $page = 1;
}
$start_from = ($page - 1) * $record_per_page;

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Manage Blogs | <?php echo _siteconfig('_sitetitle'); ?></title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/@mdi/font@6.9.96/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="../assets/vendors/feather/feather.css">
    <link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../assets/vendors/ti-icons/css/themify-icons.css">
    <link rel="stylesheet" href="../assets/vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="../assets/css/vertical-layout-light/style.css">
    <!-- endinject -->
    <link rel="shortcut icon" href="../assets/images/favicon.png" />
</head>

<body>
    <div class="container-scroller">
        <?php include('templates/_header.php'); ?>
        <!-- partial -->
        <div class="container-fluid page-body-wrapper">
            <?php include('templates/_sidebar.php'); ?>
            <!-- partial -->
            <div class="main-panel">
                <div class="content-wrapper">
                    <div class="col-12 grid-margin stretch-card">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Manage Posts (All Blog Posts)</h4>
                                <p class="card-description">
                                    Web Help Desk uses tickets to manage service requests. These tickets can be initiated through email, created in the application, and imported from another application. Techs, admins, and clients can also manage tickets through email or through the application in a web browser.
                                </p>
                                <form method="POST" action="">
                                    <div class="row">

                                        <div class="col-lg-3" style="margin-bottom: 20px;">
                                            <label for="blogtitle" class="form-label">Blog Title</label>
                                            <input type="text" class="form-control form-control-md" name="blogtitle" placeholder="Blog Title">
                                        </div>

                                        <div class="col-lg-3" style="margin-bottom: 20px;">
                                            <?php _showCategoryOptions() ?>
                                        </div>

                                        <div class="col-lg-3" style="margin-bottom: 20px;">
                                            <?php _showSubCategoryOptions() ?>
                                        </div>
                                        <div class="col-lg-2" style="margin-top: 30px;">
                                            <button name="search" class="btn btn-block btn-primary btn-sm font-weight-medium auth-form-btn" style="height:40px" name="submit"><i class="mdi mdi-account-search"></i>&nbsp;SEARCH</button>
                                        </div>
                                    </div>
                                </form>
                                <div class="row">
                                    <div class="col-12">
                                        <div class="table-responsive">
                                            <table id="example" class="display expandable-table" style="width:100%">
                                                <thead>
                                                    <tr>

                                                        <th>Blog Title</th>
                                                        <th>Status</th>
                                                        <th>Blog Category</th>
                                                        <th>Created at</th>
                                                        <th>Updated at</th>
                                                        <th>Action</th>
                                                        <th></th>
                                                    </tr>
                                                </thead>
                                                <tbody style="text-align: left;margin-left: 30px">
                                                    <?php
                                                    if (isset($_POST['search'])) {
                                                        if(isset($_POST['blogtitle'])){
                                                            $blogtitle = $_POST['blogtitle'];
                                                        }else{
                                                            $blogtitle = null;
                                                        }
                                                        if(isset($_POST['categoryId'])){
                                                            $_blogcategory = $_POST['categoryId'];
                                                        }else{
                                                            $_blogcategory = null;
                                                        }
                                                        if(isset($_POST['subcategoryId'])){
                                                            $_blogsubcategory = $_POST['subcategoryId'];
                                                        }else{
                                                            $_blogsubcategory = null;
                                                        }
                                                        _getBlogs($blogtitle,$_blogcategory,$_blogsubcategory);
                                                    }
                                                    if (!isset($_POST['search'])) {
                                                        _getBlogs('', '', '', $start_from, $record_per_page);
                                                    }
                                                    ?>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <nav aria-label="Page navigation example" style="margin-top: 30px;">
                                    <ul class="pagination">
                                        <?php
                                        $query = mysqli_query($conn, "SELECT * FROM `tblblog`");
                                        $total_records = mysqli_num_rows($query);
                                        $total_pages = ceil($total_records / $record_per_page);
                                        $start_loop = $page;
                                        $difference = $total_pages - $page;
                                        if ($difference <= 4) {
                                            $start_loop = $total_pages - 4;
                                        }
                                        $end_loop = $start_loop + 3;
                                        if ($page > 1) {
                                            echo "<li class='page-item'>
                        <a href='manage-blog?page=" . ($page - 1) . "' class='page-link'>Previous</a>
                      </li>";
                                        }
                                        for ($i = 1; $i <= $total_pages; $i++) {
                                            echo "
                      <li class='page-item'><a class='page-link' href='manage-blog?page=" . $i . "'>$i</a></li>";
                                        }
                                        if ($page <= $end_loop) {
                                            echo "<li class='page-item'>
                        <a class='page-link' href='manage-blog?page=" . ($page + 1) . "'>Next</a>
                      </li>";
                                        } ?>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                    <!-- content-wrapper ends -->
                    <!-- partial:partials/_footer.html -->
                    <?php include('templates/_footer.php'); ?>
                    <!-- partial -->
                </div>
                <!-- main-panel ends -->
            </div>
            <!-- page-body-wrapper ends -->
        </div>
        <div class="container"></div>
        <script>
            const getSubCategory = (val) => {
                $.ajax({
                    type: "POST",
                    url: "getSubCategory.php",
                    data: 'catid=' + val,
                    success: function(data) {
                        $(`#subcategoryId`).html(data);
                    }
                });
            }
        </script>
</body>
<script src="../assets/vendors/js/vendor.bundle.base.js"></script>
<!-- endinject -->
<!-- Plugin js for this page -->
<!-- End plugin js for this page -->
<!-- inject:js -->
<script src="../assets/js/off-canvas.js"></script>
<script src="../assets/js/hoverable-collapse.js"></script>
<script src="../assets/js/template.js"></script>
<script src="../assets/js/settings.js"></script>
<script src="../assets/js/todolist.js"></script>
<script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>

</html>