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
if (isset($_SESSION['course_success']) || !isset($_SESSION['course_success'])) {
    $_SESSION['course_success'] = false;
}
if (isset($_SESSION['course_error']) || !isset($_SESSION['course_error'])) {
    $_SESSION['course_error'] = false;
}


require('../includes/_functions.php');

if (isset($_POST['submit'])) {

    $_lessonname = $_POST['lessonname'];
    $_courseid = $_POST['courseid'];
    $_lessondescription = $_POST['lessonDescription'];
    $_availablity = $_POST['availablity'];

    $lessontype = $_POST['lessontype'];




    if (isset($_POST['isactive'])) {
        $isactive = $_POST['isactive'];
    } else {
        $isactive = false;
    }

    if ($_FILES["lessonfile"]["name"] != '') {
        $lessonfile = $_FILES["lessonfile"]["name"];
        $extension = substr($lessonfile, strlen($lessonfile) - 4, strlen($lessonfile));
        $allowed_extensions = array(".mp4", ".mkv", ".webm", ".avi");
        if (!in_array($extension, $allowed_extensions)) {
            echo "<script>alert('Invalid format. Only mp4 / mkv/ webm /avi format allowed');</script>";
        } else {
            $lessonurl = '';
            $lessondate = '';
            $lessontime = '';
            $recorderfile = md5($lessonfile) . $extension;
            move_uploaded_file($_FILES["lessonfile"]["tmp_name"], "../uploads/recordedlesson/" . $recorderfile);
        }
    } else {
        $recorderfile = '';
        $lessonurl = $_POST['lessonurl'];
        $lessondate = $_POST['lessondate'];
        $lessontime = $_POST['lessontime'];
    }



    _createLesson($_courseid, $_lessonname, $lessontype, $lessonurl, $lessondate, $lessontime, $recorderfile, $_lessondescription, $isactive, $_availablity);
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Add Lesson |
        <?php echo _siteconfig('_sitetitle'); ?>
    </title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/@mdi/font@6.9.96/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="../assets/vendors/feather/feather.css">
    <link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../assets/vendors/ti-icons/css/themify-icons.css">
    <link rel="stylesheet" href="../assets/vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <script src="../assets/plugins/tinymce/js/tinymce/tinymce.min.js" referrerpolicy="origin"></script>
    <script>
        tinymce.init({
            selector: '#mytextarea',
            statusbar: false,
            branding: false,
        });
    </script>
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
                    <?php

                    if ($_SESSION['course_success']) {
                    ?>
                    <div id="liveAlertPlaceholder">
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            <strong>Lesson Added!</strong> New lesson added successfully.
                        </div>
                    </div>
                    <?php
                    }

                    if ($_SESSION['course_error']) {
                    ?>
                    <div id="liveAlertPlaceholder">
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            <strong>Lesson Creatation Failed</strong>
                        </div>
                    </div>
                    <?php
                    }

                    ?>
                    <div class="col-12 grid-margin stretch-card">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Add Lesson</h4>
                                <p class="card-description">
                                    Before you start writing about your new topic, it's important to do some research.
                                    This will help you to understand the topic better, This will make it easier for you
                                    to write about the topic, and it will also make it more likely that people will be
                                    interested in reading what you have to say.
                                </p>
                                <form method="POST" action="" enctype="multipart/form-data" class="needs-validation"
                                    novalidate>

                                    <div class="row g-3">
                                        <div class="col-lg-6" style="margin-bottom: 20px;">
                                            <?php _showCourses() ?>

                                        </div>
                                        <div class="col-lg-6">
                                            <label for="availablity" class="form-label">Availablity (In Days)</label>
                                            <input type="number" class="form-control" name="availablity"
                                                id="availablity" placeholder="Availablity" required>
                                            <div class="invalid-feedback">Please type correct capacity</div>
                                        </div>
                                    </div>

                                    <div class="row g-3">
                                        <div class="col-6">
                                            <label for="lessontype" class="form-label">Lesson Type</label>
                                            <select style="height: 46px;" id="lessontype" name="lessontype"
                                                class="form-control form-control-lg"
                                                onchange="setInputForLessonType(this.options[this.selectedIndex])"
                                                required>
                                                <option selected disabled value="">Type</option>
                                                <option value="Live">Live</option>
                                                <option value="Recorded">Recorded</option>
                                            </select>
                                            <div class="invalid-feedback">Please select correct lessontype</div>
                                        </div>

                                        <div class="col-lg-6" style="display: none;" id="lessonurl">
                                            <label for="lessonurl" class="form-label">Lesson URl</label>
                                            <input type="text" class="form-control" name="lessonurl"
                                                placeholder="Lesson URl">
                                            <div class="invalid-feedback">Please type correct url</div>
                                        </div>

                                        <div class="col-lg-6" style="display: none;" id="lessonfile">
                                            <label for="lessonfile" class="form-label">Video Lecture</label>
                                            <input type="file" class="form-control" name="lessonfile">
                                            <div class="invalid-feedback">Please upload correct file</div>
                                        </div>

                                    </div>

                                    <div class="row g-3" style="margin-top: 20px;">

                                        <div class="col-lg-6" style="display: none;" id="lessondate">
                                            <label for="lessondate" class="form-label">Date</label>
                                            <input type="date" class="form-control" name="lessondate">
                                            <div class="invalid-feedback">Please select correct date</div>
                                        </div>

                                        <div class="col-lg-6" style="display: none;" id="lessontime">
                                            <label for="lessontime" class="form-label">Time</label>
                                            <input type="time" class="form-control" name="lessontime">
                                            <div class="invalid-feedback">Please select correct time</div>
                                        </div>

                                    </div>


                                    <div class="row g-3" style="margin-top: 30px;">

                                        <div class="col">
                                            <label class="checkbox-inline" style="margin-left: 5px;">
                                                <input name="isactive" value="true" type="checkbox"> &nbsp; Is Active
                                            </label>
                                        </div>

                                    </div>


                                    <div class="row" style="margin-top: 30px;">
                                        <div class="col">
                                            <label for="lessonname" class="form-label">Lesson Name</label>
                                            <input type="text" class="form-control" name="lessonname" id="lessonname"
                                                placeholder="Lesson Name" required>
                                            <div class="invalid-feedback">Please type correct Description</div>
                                            <div id="wordCountDisplay" style="margin: 10px 5px; display: none;">
                                                <p style="color: red;">Word Count <strong style="color: red;"
                                                        id="wordCount"></strong> </p>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="row" style="margin-top: 30px;">
                                        <div class="col">
                                            <label for="lessonDescription" class="form-label">Lesson Description</label>
                                            <textarea name="lessonDescription" id="mytextarea" style="width:100%"
                                                rows="10"></textarea>
                                            <div class="invalid-feedback">Please type correct Description</div>
                                        </div>
                                    </div>

                                    <div class="col-12" style="margin-top: 30px;">
                                        <button type="submit" name="submit" style="width: 200px;margin-left: -10px"
                                            class="btn btn-primary">Add Lesson</button>

                                    </div>

                                </form>
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

            let lessontype = document.getElementById('lessontype');
            
            let lessonurl = document.getElementById('lessonurl');
            let lessondate = document.getElementById('lessondate');
            let lessontime = document.getElementById('lessontime');
            
            let lessonfile = document.getElementById('lessonfile');


            const setInputForLessonType = (value) => {

                let input = value.value;

                if (input == 'Live') {
                    lessonurl.style.display = 'block'
                    lessonurl.children[1].setAttribute('required', true);
                   
                    lessondate.style.display = 'block'
                    lessondate.children[1].setAttribute('required', true);
                   
                    lessontime.style.display = 'block'
                    lessontime.children[1].setAttribute('required', true);

                    lessonfile.style.display = 'none'
                    lessonfile.children[1].removeAttribute('required');
                }
                else if (input == 'Recorded') {
                    lessonfile.style.display = 'block'
                    lessonfile.children[1].setAttribute('required', true);

                    lessonurl.style.display = 'none'
                    lessonurl.children[1].removeAttribute('required', true);

                    lessondate.style.display = 'none'
                    lessondate.children[1].removeAttribute('required', true);

                    lessontime.style.display = 'none'
                    lessontime.children[1].removeAttribute('required', true);
                }

            }

            let lessonname = document.getElementById('lessonname');
            lessonname.addEventListener('input', (ele) => {
                let value = ele.target.value;
                if (value.length > 0) {

                    let wordCountDisplay = document.getElementById('wordCountDisplay');
                    let wordCount = document.getElementById('wordCount');
                    wordCountDisplay.style.display = 'block'
                    wordCount.innerText = value.length;
                }
            })

        </script>




        <script src="../includes/_validation.js"></script>

</body>
<script src="../assets/vendors/js/vendor.bundle.base.js"></script>
<!-- endinject -->
<!-- Plugin js for this page -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3"
    crossorigin="anonymous"></script>
<!-- End plugin js for this page -->
<!-- inject:js -->
<script src="../assets/js/off-canvas.js"></script>
<script src="../assets/js/hoverable-collapse.js"></script>
<script src="../assets/js/template.js"></script>
<script src="../assets/js/settings.js"></script>
<script src="../assets/js/todolist.js"></script>
<script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>

</html>