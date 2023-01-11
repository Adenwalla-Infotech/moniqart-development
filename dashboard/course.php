<?php

session_start();
require('../includes/_functions.php');

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
if (!isset($_GET['course']) && $_GET['course'] == '') {
    header('location:index.php');
}

$course = $_GET['lesson'];

$courseId = _getSingleCourseByPermalink($course, '_id');

if (!isset($_GET['lesson'])) {
    echo "<script>";
    echo "window.location.href = 'dashboard'";
    echo "</script>";
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Dashboard | <?php echo _siteconfig('_sitetitle'); ?></title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/@mdi/font@6.9.96/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="<?php echo base_url('assets/vendors/feather/feather.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/vendors/ti-icons/css/themify-icons.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/vendors/css/vendor.bundle.base.css'); ?>">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
        integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />


    <!-- endinject -->
    <!-- Plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="<?php echo base_url('assets/css/vertical-layout-light/style.css'); ?>">
    <!-- endinject -->
    <link rel="shortcut icon" href="<?php echo base_url('assets/images/favicon.png'); ?>" />

    <style>
        .line-clamp {
            display: -webkit-box;
            -webkit-line-clamp: 2;
            -webkit-box-orient: vertical;
            overflow: hidden;
        }
        .line-clamp#lessonAccordionName {
            display: -webkit-box;
            -webkit-line-clamp:1;
            -webkit-box-orient: vertical;
            overflow: hidden;
        }

        .accordion{
            --bs-accordion-active-bg : none;
            --bs-accordion-color : none;
            --bs-accordion-border-color: none;
        --bs-accordion-btn-focus-border-color :none; 
        --bs-accordion-btn-focus-box-shadow : none;
        }

        .accordion-button::after{
            /* color: black; */
        }


    </style>

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

                        <div class="container">

                            <div class="row">

                                <div class="col-lg-8">

                                    <div class="card" id="lessonIsRecorded" style=" display: none;">
                                        <video id="lessonVideo" controls></video>

                                        <div class="card-body">
                                            <h5 class="card-title" id="lessonTitle" >Video title</h5>
                                            <div class="card-text" id="lessonDesc" >Video Description</div>
                                        </div>
                                        <div class="card-footer">

                                        </div>

                                    </div>

                                    <div class="card" id="lessonIsLive" style=" display: none;">

                                        <div class="card-body">
                                            <a href="#" class="btn btn-primary mt-2" id="lessonliveUrl"> Link </a>
                                            <h5 class="card-title text-center">Class Starts at</h5>
                                            <p class="card-text text-center" id="lessonLiveDate">Time and Date</p>
                                        </div>

                                    </div>


                                </div>

                                <div class="col-lg-4">

                                    <div class="card ">

                                        <div class="card-header bg-primary">
                                            <span class="text-light text-center" style="font-weight:900;" > <i class="fa-regular fa-square-caret-down" ></i>&nbsp;&nbsp;Course Playlist </span>
                                        </div>

                                        <div class="accordion accordion-flush" id="accordionExample">
                                            <?php 
                                            _getLessonForAccordion($courseId);
                                             ?>
                                        </div>

                                    </div>

                                </div>

                            </div>

                        </div>

                    </div>
                    </form>
                    <?php include('templates/_footer.php'); ?>
                </div>
                <!-- main-panel ends -->
            </div>

            <!-- page-body-wrapper ends -->
        </div>
        <div class="container"></div>

        <script>
            const allLesson = document.querySelectorAll(".lessonAccordion");


            const lessonLiveDate = document.getElementById('lessonLiveDate');

            const lessonliveUrl = document.getElementById('lessonliveUrl');

            const lessonIsRecorded = document.getElementById('lessonIsRecorded');
            const lessonIsLive = document.getElementById('lessonIsLive');


            const lessonVideo = document.getElementById('lessonVideo');
            
            const lessonTitle = document.getElementById('lessonTitle');
            const lessonDesc = document.getElementById('lessonDesc');




            const callSetLessonUrl = (date, url) => {

                lessonIsRecorded.style.display = 'none';
                lessonIsLive.style.display = 'flex';

                lessonLiveDate.innerText = date;
                lessonliveUrl.href = url;

            }

            const callSetLessonVideo = (videoUrl,name,desc) => {

                lessonIsRecorded.style.display = 'flex';
                lessonIsLive.style.display = 'none';

                let dirUrl = '../../uploads/recordedlesson'

                lessonVideo.src = `${dirUrl}/${videoUrl}`


                lessonTitle.innerText = name;
                lessonDesc.innerText = desc.replace("<p>",'').replace("</p>",'');

            }



            const lessonAccordion1 = document.getElementById('lessonAccordion1');


            const lessonAccordion1Type = lessonAccordion1.querySelector('#lessonAccordionType');

            if (lessonAccordion1Type.innerText == 'Live') {

                const lessonAccordion1Date = lessonAccordion1.querySelector("#lessonAccordionDate");
                const lessonAccordion1Url = lessonAccordion1.querySelector("#lessonAccordionUrl");

                lessonIsRecorded.style.display = 'none';
                lessonIsLive.style.display = 'flex';

                lessonLiveDate.innerText = lessonAccordion1Date.textContent;
                lessonliveUrl.href = lessonAccordion1Url.textContent.trim();

            } else {

                const lessonAccordion1Video = lessonAccordion1.querySelector("#lessonAccordionVideo");

                lessonIsRecorded.style.display = 'flex';
                lessonIsLive.style.display = 'none';

                let dirUrl = '../../uploads/recordedlesson'

                lessonVideo.src = `${dirUrl}/${lessonAccordion1Video.textContent.trim()}`
            }


        </script>

</body>
<script src="<?php echo base_url('assets/vendors/js/vendor.bundle.base.js'); ?>"></script>
<script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
<!-- endinject -->
<!-- Plugin js for this page -->
<!-- End plugin js for this page -->
<!-- inject:js -->
<script src="<?php echo base_url('assets/js/off-canvas.js'); ?>"></script>
<script src="<?php echo base_url('assets/js/hoverable-collapse.js'); ?>"></script>
<script src="<?php echo base_url('assets/js/template.js'); ?>"></script>
<script src="<?php echo base_url('assets/js/settings.js'); ?>"></script>
<script src="<?php echo base_url('assets/js/todolist.js'); ?>"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>

</html>