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

$_id = $_GET['id'];


if (isset($_POST['submit'])) {
    $membershipname = $_POST['membershipname'];
    $membershipdesc = $_POST['membershipdesc'];

    if (isset($_POST['isactive'])) {
        $isactive = $_POST['isactive'];
    } else {
        $isactive = false;
    }

    _updateMembership($membershipname, $membershipdesc, $isactive, $_id);
}


if(isset($_GET['del'])){
    $delid = $_GET['delid'];
    $_id = $_GET['id'];
}

require('../includes/_config.php');
$record_per_page = 5;
$page = '';
if (isset($_GET["page"])) {
    $page = $_GET["page"];
} else {
    $page = 1;
}
$start_from = ($page - 1) * $record_per_page;

if (isset($_POST['addpricing'])) {

    $membershipid = $_id;
    $duration = $_POST['duration'];
    $discount = $_POST['discount'];
    $discounttype = $_POST['discounttype'];
    $discountcurrency = $_POST['discountcurrency'];
    $price = $_POST['price'];

    if (isset($_POST['isactive'])) {
        $isactive = $_POST['isactive'];
    } else {
        $isactive = false;
    }

}

if (isset($_POST['editpricing'])) {

    $pricingId = $_POST['pricingid'];
    $duration = $_POST['duration'];
    $discount = $_POST['discount'];
    $discounttype = $_POST['discounttype'];
    $discountcurrency = $_POST['discountcurrency'];
    $price = $_POST['price'];

    if (isset($_POST['isactive'])) {
        $isactive = $_POST['isactive'];
    } else {
        $isactive = false;
    }

}


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Edit <?php echo _getSingleMembership($_id, '_membershipname'); ?> | <?php echo _siteconfig('_sitetitle'); ?></title>
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
        <!-- partial -->
        <div class="container-fluid page-body-wrapper">
            <?php include('templates/_sidebar.php'); ?>
            <!-- partial -->
            <div class="main-panel">
                <div class="content-wrapper">
                    <div class="col-12 grid-margin stretch-card">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Edit Membership</h4>
                                <p class="card-description">
                                    Before you start writing about your new topic, it's important to do some research. This will help you to understand the topic better, This will make it easier for you to write about the topic, and it will also make it more likely that people will be interested in reading what you have to say.
                                </p>
                                <form method="POST" action="" class="needs-validation" novalidate>


                                    <div class="row g-3">
                                        <div class="col">
                                            <label for="membershipname" class="form-label">Membership Name</label>
                                            <input type="text" value="<?php echo _getSingleMembership($_id, '_membershipname'); ?>" class="form-control" placeholder="Membership name" aria-label="Membership name" id="membershipname" name="membershipname" required>
                                            <div class="invalid-feedback">Please type correct membership name</div>
                                        </div>

                                        <div class="col">
                                            <label for="membershipdesc" class="form-label">Membership Description</label>
                                            <input type="text" value="<?php echo _getSingleMembership($_id, '_membershipdesc'); ?>" class="form-control" placeholder="Membership Description" aria-label="Membership Description" id="membershipdesc" name="membershipdesc" required>
                                            <div class="invalid-feedback">Please type correct membership desc</div>
                                        </div>
                                    </div>


                                    <div class="row g-3" style="margin-top: 15px;">
                                        <div class="col" style="margin-top: 10px;">
                                            <label class="checkbox-inline" style="margin-left: 5px;">
                                                <?php
                                                if (_getSingleMembership($_id, '_status') == true) { ?><input name="isactive" value="true" checked type="checkbox">&nbsp;Is Active<?php }
                                                                                                                                                                                if (_getSingleMembership($_id, '_status') != true) { ?><input name="isactive" value="true" type="checkbox">&nbsp;Is Active<?php }
                                                                                                                                                                                                                                                                                                            ?>
                                            </label>
                                        </div>
                                    </div>



                                    <div class="col-12" style="margin-top: 30px;">
                                        <button type="submit" name="submit" style="width: 180px;margin-left: -10px" class="btn btn-primary">Update Membership</button>
                                        <button type="button" class="btn btn-primary btn-sm font-weight-medium auth-form-btn" style="height:40px; float: right;  " data-bs-toggle="modal" data-bs-target="#exampleModal">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="white" style="width: 15px;" viewBox="0 0 448 512">
                                                <!-- Font Awesome Pro 5.15.4 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) -->
                                                <path d="M416 208H272V64c0-17.67-14.33-32-32-32h-32c-17.67 0-32 14.33-32 32v144H32c-17.67 0-32 14.33-32 32v32c0 17.67 14.33 32 32 32h144v144c0 17.67 14.33 32 32 32h32c17.67 0 32-14.33 32-32V304h144c17.67 0 32-14.33 32-32v-32c0-17.67-14.33-32-32-32z" />
                                            </svg>&nbsp;&nbsp;Add Pricing
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- content-wrapper ends -->
                    <!-- partial:partials/_footer.html -->

                    <!-- Manage Pricing -->

                    <div class="col-12 grid-margin stretch-card">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Manage Pricing</h4>
                                <p class="card-description">
                                    From here, you'll see a list of all the categories on your site. You can edit or delete them from here. You can also change the order of your categories by dragging and dropping them into the order you
                                </p>
                                <form method="POST" action="">
                                    <div class="row">
                                        <div class="col-lg-3" style="margin-bottom: 20px;">
                                            <input type="text" class="form-control form-control-sm" name="pricingname" placeholder="Pricing Name">
                                        </div>
                                        <div class="col-lg-2" style="margin-bottom: 20px;">
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
                                                        <th>Pricing Id</th>
                                                        <th>Duration</th>
                                                        <th>Benefit</th>
                                                        <th>Benefit Type</th>
                                                        <th>Benefit Currency</th>
                                                        <th>Status</th>
                                                        <th>Price</th>
                                                        <th>Created at</th>
                                                        <th>Updated at</th>
                                                        <th>Action</th>
                                                        <th></th>
                                                    </tr>
                                                </thead>
                                                <tbody style="text-align: left;margin-left: 30px">
                                                    <?php
                                                    if (isset($_POST['search'])) {
                                                    }
                                                    if (!isset($_POST['search'])) {
                                                    }
                                                    ?>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <nav aria-label="Page navigation example" style="margin-top: 10px;">
                                    <ul class="pagination">
                                        <?php
                                        $query = mysqli_query($conn, "SELECT * FROM `tblmembershippricing`");
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
                        <a href='edit-membership?id=$_id&page=" . ($page - 1) . "' class='page-link'>Previous</a>
                      </li>";
                                        }
                                        for ($i = 1; $i <= $total_pages; $i++) {
                                            echo "
                      <li class='page-item'><a class='page-link' href='edit-membership?id=$_id&page=" . $i . "'>$i</a></li>";
                                        }
                                        if ($page <= $end_loop) {
                                            echo "<li class='page-item'>
                        <a class='page-link' href='edit-membership?id=$_id&page=" . ($page + 1) . "'>Next</a>
                      </li>";
                                        } ?>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>

                    <?php include('templates/_footer.php'); ?>
                    <!-- partial -->
                </div>
                <!-- main-panel ends -->
            </div>
            <!-- page-body-wrapper ends -->
        </div>
        <div class="container"></div>

        <?php include('templates/_footer.php'); ?>





        <!-- Add Pricing Modal -->

        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <form action="" method="post"  class="needs-validation" novalidate>
                    <div class="modal-content" style="padding: 10px;">
                        <div class="modal-header" style="padding: 0px;margin-bottom: 20px;padding-bottom:10px">
                            <h4 class="modal-title fs-5" id="exampleModalLabel">Add Pricing</h4>
                            <button type="button" class="btn-close" style="border: none;;background-color:white" data-bs-dismiss="modal" aria-label="Close"><svg style="width: 15px;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 352 512">
                                    <!-- Font Awesome Pro 5.15.4 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) -->
                                    <path d="M242.72 256l100.07-100.07c12.28-12.28 12.28-32.19 0-44.48l-22.24-22.24c-12.28-12.28-32.19-12.28-44.48 0L176 189.28 75.93 89.21c-12.28-12.28-32.19-12.28-44.48 0L9.21 111.45c-12.28 12.28-12.28 32.19 0 44.48L109.28 256 9.21 356.07c-12.28 12.28-12.28 32.19 0 44.48l22.24 22.24c12.28 12.28 32.2 12.28 44.48 0L176 322.72l100.07 100.07c12.28 12.28 32.2 12.28 44.48 0l22.24-22.24c12.28-12.28 12.28-32.19 0-44.48L242.72 256z" />
                                </svg></button>
                        </div>
                        <div class="modal-body" style="padding: 0px;">
                            <div class="row">
                                <div class="col-lg-6">
                                    <label for="duration" class="form-label">Duration(Months)</label>
                                    <select name="duration" id="duration" class="form-control" required>
                                        <option selected value="">Select Duration</option>

                                        <option value="1">1 month </option>
                                        <option value="2">2 month </option>
                                        <option value="3">3 month </option>
                                        <option value="4">4 month </option>
                                        <option value="5">5 month </option>
                                        <option value="6">6 month </option>
                                        <option value="7">7 month </option>
                                        <option value="8">8 month </option>
                                        <option value="9">9 month </option>
                                        <option value="10">10 month </option>
                                        <option value="11">11 month </option>
                                        <option value="12">12 month </option>

                                    </select>
                                    <div class="invalid-feedback">Please select correct duration</div>
                                </div>
                                <div class="col-lg-6">
                                    <label for="price" class="form-label">Price</label>
                                    <input type="text" class="form-control" name="price" id="price" placeholder="Price" required>
                                    <div class="invalid-feedback">Please type correct price</div>
                                </div>
                            </div>

                            <div class="row" style="margin-top: 20px;">
                                <div class="col-lg-6">
                                    <label for="discount" class="form-label">Discount</label>
                                    <input type="text" class="form-control" id="discount" name="discount" placeholder="Discount" required>
                                    <div class="invalid-feedback">Please type correct discount</div>
                                </div>


                                <div class="col-lg-6" style="margin-top: 40px;">
                                    <label class="checkbox-inline" style="margin-left: 5px;">
                                        <input name="isactive" value="true" type="checkbox"> &nbsp; Is Active
                                    </label>
                                </div>
                            </div>

                            <div class="row" style="margin-top: 20px;">
                                <div class="col-lg-6">
                                    <label for="discounttype" class="form-label">Discount Type</label>
                                    <select name="discounttype" id="duration" class="form-control">
                                        <option selected value="">Discount Type</option>
                                        <option value="Fixed">Fixed</option>
                                        <option value="Variable">Percentage</option>
                                    </select>
                                    <div class="invalid-feedback">Please select correct discount type</div>

                                </div>
                                <div class="col-lg-6">
                                    <label for="discountcurrency" class="form-label">Discount Currency</label>
                                    <select name="discountcurrency" class="form-control" required>
                                        <option selected disabled value="">Select currency</option>
                                        <option value="USD">America (United States) Dollars – USD</option>
                                        <option value="AFN">Afghanistan Afghanis – AFN</option>
                                        <option value="ALL">Albania Leke – ALL</option>
                                        <option value="DZD">Algeria Dinars – DZD</option>
                                        <option value="ARS">Argentina Pesos – ARS</option>
                                        <option value="AUD">Australia Dollars – AUD</option>
                                        <option value="ATS">Austria Schillings – ATS</OPTION>

                                        <option value="BSD">Bahamas Dollars – BSD</option>
                                        <option value="BHD">Bahrain Dinars – BHD</option>
                                        <option value="BDT">Bangladesh Taka – BDT</option>
                                        <option value="BBD">Barbados Dollars – BBD</option>
                                        <option value="BEF">Belgium Francs – BEF</OPTION>
                                        <option value="BMD">Bermuda Dollars – BMD</option>

                                        <option value="BRL">Brazil Reais – BRL</option>
                                        <option value="BGN">Bulgaria Leva – BGN</option>
                                        <option value="CAD">Canada Dollars – CAD</option>
                                        <option value="XOF">CFA BCEAO Francs – XOF</option>
                                        <option value="XAF">CFA BEAC Francs – XAF</option>
                                        <option value="CLP">Chile Pesos – CLP</option>

                                        <option value="CNY">China Yuan Renminbi – CNY</option>
                                        <option value="CNY">RMB (China Yuan Renminbi) – CNY</option>
                                        <option value="COP">Colombia Pesos – COP</option>
                                        <option value="XPF">CFP Francs – XPF</option>
                                        <option value="CRC">Costa Rica Colones – CRC</option>
                                        <option value="HRK">Croatia Kuna – HRK</option>

                                        <option value="CYP">Cyprus Pounds – CYP</option>
                                        <option value="CZK">Czech Republic Koruny – CZK</option>
                                        <option value="DKK">Denmark Kroner – DKK</option>
                                        <option value="DEM">Deutsche (Germany) Marks – DEM</OPTION>
                                        <option value="DOP">Dominican Republic Pesos – DOP</option>
                                        <option value="NLG">Dutch (Netherlands) Guilders – NLG</OPTION>

                                        <option value="XCD">Eastern Caribbean Dollars – XCD</option>
                                        <option value="EGP">Egypt Pounds – EGP</option>
                                        <option value="EEK">Estonia Krooni – EEK</option>
                                        <option value="EUR">Euro – EUR</option>
                                        <option value="FJD">Fiji Dollars – FJD</option>
                                        <option value="FIM">Finland Markkaa – FIM</OPTION>

                                        <option value="FRF*">France Francs – FRF*</OPTION>
                                        <option value="DEM">Germany Deutsche Marks – DEM</OPTION>
                                        <option value="XAU">Gold Ounces – XAU</option>
                                        <option value="GRD">Greece Drachmae – GRD</OPTION>
                                        <option value="GTQ">Guatemalan Quetzal – GTQ</OPTION>
                                        <option value="NLG">Holland (Netherlands) Guilders – NLG</OPTION>
                                        <option value="HKD">Hong Kong Dollars – HKD</option>

                                        <option value="HUF">Hungary Forint – HUF</option>
                                        <option value="ISK">Iceland Kronur – ISK</option>
                                        <option value="XDR">IMF Special Drawing Right – XDR</option>
                                        <option value="INR">India Rupees – INR</option>
                                        <option value="IDR">Indonesia Rupiahs – IDR</option>
                                        <option value="IRR">Iran Rials – IRR</option>

                                        <option value="IQD">Iraq Dinars – IQD</option>
                                        <option value="IEP*">Ireland Pounds – IEP*</OPTION>
                                        <option value="ILS">Israel New Shekels – ILS</option>
                                        <option value="ITL*">Italy Lire – ITL*</OPTION>
                                        <option value="JMD">Jamaica Dollars – JMD</option>
                                        <option value="JPY">Japan Yen – JPY</option>

                                        <option value="JOD">Jordan Dinars – JOD</option>
                                        <option value="KES">Kenya Shillings – KES</option>
                                        <option value="KRW">Korea (South) Won – KRW</option>
                                        <option value="KWD">Kuwait Dinars – KWD</option>
                                        <option value="LBP">Lebanon Pounds – LBP</option>
                                        <option value="LUF">Luxembourg Francs – LUF</OPTION>

                                        <option value="MYR">Malaysia Ringgits – MYR</option>
                                        <option value="MTL">Malta Liri – MTL</option>
                                        <option value="MUR">Mauritius Rupees – MUR</option>
                                        <option value="MXN">Mexico Pesos – MXN</option>
                                        <option value="MAD">Morocco Dirhams – MAD</option>
                                        <option value="NLG">Netherlands Guilders – NLG</OPTION>

                                        <option value="NZD">New Zealand Dollars – NZD</option>
                                        <option value="NOK">Norway Kroner – NOK</option>
                                        <option value="OMR">Oman Rials – OMR</option>
                                        <option value="PKR">Pakistan Rupees – PKR</option>
                                        <option value="XPD">Palladium Ounces – XPD</option>
                                        <option value="PEN">Peru Nuevos Soles – PEN</option>

                                        <option value="PHP">Philippines Pesos – PHP</option>
                                        <option value="XPT">Platinum Ounces – XPT</option>
                                        <option value="PLN">Poland Zlotych – PLN</option>
                                        <option value="PTE">Portugal Escudos – PTE</OPTION>
                                        <option value="QAR">Qatar Riyals – QAR</option>
                                        <option value="RON">Romania New Lei – RON</option>

                                        <option value="ROL">Romania Lei – ROL</option>
                                        <option value="RUB">Russia Rubles – RUB</option>
                                        <option value="SAR">Saudi Arabia Riyals – SAR</option>
                                        <option value="XAG">Silver Ounces – XAG</option>
                                        <option value="SGD">Singapore Dollars – SGD</option>
                                        <option value="SKK">Slovakia Koruny – SKK</option>

                                        <option value="SIT">Slovenia Tolars – SIT</option>
                                        <option value="ZAR">South Africa Rand – ZAR</option>
                                        <option value="KRW">South Korea Won – KRW</option>
                                        <option value="ESP">Spain Pesetas – ESP</OPTION>
                                        <option value="XDR">Special Drawing Rights (IMF) – XDR</option>
                                        <option value="LKR">Sri Lanka Rupees – LKR</option>

                                        <option value="SDD">Sudan Dinars – SDD</option>
                                        <option value="SEK">Sweden Kronor – SEK</option>
                                        <option value="CHF">Switzerland Francs – CHF</option>
                                        <option value="TWD">Taiwan New Dollars – TWD</option>
                                        <option value="THB">Thailand Baht – THB</option>
                                        <option value="TTD">Trinidad and Tobago Dollars – TTD</option>

                                        <option value="TND">Tunisia Dinars – TND</option>
                                        <option value="TRY">Turkey New Lira – TRY</option>
                                        <option value="AED">United Arab Emirates Dirhams – AED</option>
                                        <option value="GBP">United Kingdom Pounds – GBP</option>
                                        <option value="USD">United States Dollars – USD</option>
                                        <option value="VEB">Venezuela Bolivares – VEB</option>

                                        <option value="VND">Vietnam Dong – VND</option>
                                        <option value="ZMK">Zambia Kwacha – ZMK</option>
                                    </select>
                                    <div class="invalid-feedback">Please select correct currency</div>
                                </div>
                            </div>

                        </div>
                        <div class="modal-footer" style="padding: 0px;margin-top: 20px;padding-top:10px">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" name="addpricing" class="btn btn-primary">Save changes</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>



        <!-- Edit Modal -->



        <div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">

            <div class="modal-dialog" id="displayData">

            </div>
        </div>


        <script src="../includes/_validation.js"></script>



</body>
<script src="../assets/vendors/js/vendor.bundle.base.js"></script>
<!-- endinject -->
<!-- Plugin js for this page -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
<!-- End plugin js for this page -->
<!-- inject:js -->
<script src="../assets/js/off-canvas.js"></script>
<script src="../assets/js/hoverable-collapse.js"></script>
<script src="../assets/js/template.js"></script>
<script src="../assets/js/settings.js"></script>
<script src="../assets/js/todolist.js"></script>
<script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>
<script src="jquery-3.6.0.min.js"></script>

<script>
    $('.editPricingButton').click(function(e) {
        e.preventDefault();

        const rowId = $(this).closest('tr').find('.row_id').text();


        $.ajax({
            type: "POST",
            url: "getEditPricing.php",
            data: {
                "edit": true,
                "value": rowId,
            },

            success: function(response) {
                $("#displayData").html(response);
                $("#editModal").modal("show");
            }
        });


    });
</script>


</html>