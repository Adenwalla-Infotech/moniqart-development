<?php


session_start();


require('./includes/_clientfunctions.php');

$userLoggedIn = false;

if (!isset($_SESSION['isLoggedIn']) || !$_SESSION['isLoggedIn'] || $_SESSION['isLoggedIn'] == '') {
    // $memebershipAva
} else {
    $userLoggedIn = true;
}


$currency = 'INR';


$_id = $_GET['id'];

$courseName = _getSingleCourse($_id, '_coursename');
$teacherId = _getSingleCourse($_id, '_teacheremailid');
$coursePrice = _getSingleCourse($_id, '_pricing');

$teacherUser = _getsingleuser($teacherId, '_username');

$total = _gettotal('0', 'INR', '0') + $coursePrice;

$couponAppliedSuccess = '0';


if ($userLoggedIn) {
    $userId = $_SESSION['userId'];
    $currency = _getsingleuser($userId, '_usercurrency');
    $memebershipId = _getsingleuser($userId, '_usermembership');
    $membershipDiscount = checkmembership($coursePrice, $currency);

    $total = (_gettotal('0', 'INR', '0') + $coursePrice) - $membershipDiscount;

} else {
    $membershipDiscount = '0';
}


if (isset($_POST['couponcode'])) {

    $couponCode = $_POST['couponcode'];

    $couponPrice = _validatecoupon($coursePrice, $couponCode, 'INR', 'ecommerce');

    if ($couponPrice) {

        $couponAppliedSuccess = true;
        $total = (_gettotal('0', 'INR', '0') + $coursePrice) - $couponPrice;
    } else {
        $couponAppliedSuccess = false;
    }
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checkout Page</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Baloo+Bhaijaan+2&family=Balsamiq+Sans&fa
mily=Comfortaa&family=Montserrat&family=Poppins&display=swap" rel="stylesheet">

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>


    <style>
        * {
            font-family: 'Poppins', sans-serif;
        }

        body {
            background-color: #F6F8FD
        }

        .bg {
            background-color: #F6F8FD
        }

        .green {
            color: rgb(15, 207, 143);
            font-weight: 680
        }

        @media(max-width:567px) {
            .mobile {
                padding-top: 40px
            }
        }
    </style>

</head>

<body>

    <div class="container rounded bg-white">
        <div class="bg row d-flex justify-content-center pb-5">
            <div class="col-sm-4 col-md-4 ml-1">
                <div class="py-4 pl-6 d-flex flex-row">
                    <!-- <h5><span class="fa fa-check-square-o"></span><b>ELIGIBLE</b> | </h5><span class="pl-2">Pay</span> -->
                </div>
                <div class="bg-white p-4 d-flex flex-column" style="border-radius:14px">
                    <div class="text-center mt-4"> <img class="img-fluid" src="https://i.imgur.com/kvdO7jw.png"
                            width="200" /> </div>
                    <h5>
                        <?php echo $courseName ?>
                    </h5>
                    <p><?php echo $teacherUser ?></p>
                    <h4 class="green">
                        <?php echo $coursePrice ?>
                    </h4>
                </div>
            </div>
            <div class="col-sm-5 col-md-6 mobile">
                <div class="py-4 d-flex justify-content-end">
                    <!-- <h6><a href="#">Cancel and return to website</a></h6> -->
                </div>
                <div class="bg-white p-3 d-flex flex-column" style="border-radius:14px">
                    <div class="pt-2">
                        <h5>Heading</h5>
                    </div>


                    <div class="d-flex">
                        <div class="col-8">Course Price</div>
                        <div class="ml-auto green price">
                            <?php echo $coursePrice ?>
                        </div>
                    </div>

                    <?php _getAllMarkupsForCheckout(); ?>



                    <?php


                    if (!isset($_SESSION['isLoggedIn']) || !$_SESSION['isLoggedIn'] || $_SESSION['isLoggedIn'] == '') {
                        ?>

                        <form action="#" method="POST" class="d-flex border-top mt-2 pt-2 align-items-center ">
                            <div class="col-8">Coupon Code</div>
                            <input type="text" class="form-control" placeholder="Coupon Code" name="couponcode"
                                onchange="this.form.submit()">
                        </form>

                        <div class="d-flex flex-column align-items-end mt-2">

                            <?php

                            if ($couponAppliedSuccess === true) {
                                ?>
                                <h5 class="green" style="font-size: 15px;">Coupon Code Applied !!</h5>
                                <?php
                            } else if ($couponAppliedSuccess === false) {
                                ?>
                                    <h5 style="font-size: 15px; color: red; font-weight: 600; ">Invalid Coupon Code</h5>
                                    <a href="" style="float:right">Reset Coupon</a>
                                <?php
                            }

                            ?>

                        </div>

                        <?php

                    } else {
                        ?>

                        <div class="d-flex flex-column align-items-end mt-3">

                            <h5 class="green" style="font-size: 15px; font-weight: 200;">Membership Discount : <span
                                    style="font-weight: 600;">
                                    <?php echo $membershipDiscount; ?>
                                </span> </h5>

                        </div>

                        <?php

                    }


                    ?>



                    <div class="pt-2 mt-3 border-top d-flex">
                        <h5 class="col-8">Total Amount</h5>
                        <div class="ml-auto  price">
                            <!-- 1000 -->

                            <?php
                            echo $total;

                            ?>

                        </div>
                    </div>

                    <input type="button" value="Purchase" class=" btn mt-4 btn-primary btn-block"
                        style="border-radius:100px; background-color:#2447f9;" id="purchaseBtn" >
                    <div class="text-center p-3"> <a class="text-link " target="_blank" href="#">Cancel</a> </div>
                </div>



            </div>
        </div>
    </div>

    <script src="https://checkout.razorpay.com/v1/checkout.js"></script>

    <script>
        var options = {
            "key": "<?php echo _paymentconfig('_apikey'); ?>", // Enter the Key ID generated from the Dashboard
            "amount": "<?php echo ceil($total * 100); ?>", // Amount is in currency subunits. Default currency is INR. Hence, 50000 refers to 50000 paise
            "currency": "<?php echo $currency; ?>",
            "name": "<?php echo _paymentconfig('_companyname'); ?>",
            "description": "Payment for your Purchase",
            "image": "http://localhost/Adenwalla-Infotech/moniqart-development/uploads/images/logo.png",
            // "order_id": "OD<?php echo rand(111111, 999999) ?>", //This is a sample Order ID. Pass the `id` obtained in the response of Step 1
            "handler": function (response) {
                console.log('response', response);
                document.getElementById('transpay').click();
            },
            "notes": {
                "address": "Razorpay Corporate Office"
            },
            "theme": {
                "color": "#4B49AC"
            }
        };
        var rzp1 = new Razorpay(options);

        rzp1.on('payment.failed', function (response) {
            window.location.href = "failed";
        });
        document.getElementById('purchaseBtn').onclick = function (e) {
            rzp1.open();
            // e.preventDefault();
        }
    </script>



</body>

</html>