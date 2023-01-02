<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
        <li class="nav-item">
            <a class="nav-link" href="index">
                <i class="icon-grid menu-icon"></i>
                <span class="menu-title">Dashboard</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="memberships">
                <i class="mdi mdi-wallet-membership menu-icon"></i>
                <span class="menu-title">Memberships</span>
            </a>
        </li>
        <!-- <li class="nav-item">
      <a class="nav-link" href="myinvoice">
        <i class="mdi mdi-cash-multiple menu-icon"></i>
        <span class="menu-title">My Invoice</span>
      </a>
    </li> -->
        <li class="nav-item">
            <a class="nav-link" href="mytranscations">
                <!-- <i class="mdi mdi-wallet-membership menu-icon"></i> -->
                <i class="mdi mdi-cash-multiple menu-icon"></i>
                <span class="menu-title">My Transactions</span>
            </a>
        </li>
        <hr style="width: 100%;height:0.1px;background-color:#E5E5E5">
        <?php if ($_SESSION['userType'] == 2) { ?>
        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#ui-transactions" aria-expanded="false"
                aria-controls="ui-basic">
                <i class="mdi mdi-currency-inr menu-icon"></i>
                <span class="menu-title">Transactions</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-transactions">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="payment-transcations">Payment Record</a></li>
                    <li class="nav-item"> <a class="nav-link" href="coupon-transcations">Coupon Record</a></li>
                </ul>
            </div>
        </li>
        <?php } ?>
        <?php if ($_SESSION['userType'] == 2) { ?>
        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#ui-markups" aria-expanded="false"
                aria-controls="ui-basic">
                <i class="mdi mdi-database menu-icon"></i>
                <span class="menu-title">All Markups</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-markups">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="manage-currency">Curreny Markup</a></li>
                    <li class="nav-item"> <a class="nav-link" href="manage-tax">Fee Markup</a></li>
                    <li class="nav-item"> <a class="nav-link" href="manage-coupon">Offer Markup</a></li>
                </ul>
            </div>
        </li>
        <?php } ?>
        <?php if ($_SESSION['userType'] == 2) { ?>
        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#ui-membership" aria-expanded="false"
                aria-controls="ui-basic">
                <i class="mdi mdi-wallet-membership menu-icon"></i>
                <span class="menu-title">Membership</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-membership">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="add-membership">Add Membership</a></li>
                    <li class="nav-item"> <a class="nav-link" href="manage-membership">Manage Membership</a></li>
                </ul>
            </div>
        </li>
        <hr style="width: 100%;height:0.1px;background-color:#E5E5E5">
        <?php } ?>
        <?php if ($_SESSION['userType'] == 2) { ?>
        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#ui-category" aria-expanded="false"
                aria-controls="ui-basic">
                <i class="mdi mdi-source-branch menu-icon"></i>
                <span class="menu-title">Category</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-category">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="add-category">Add Parent</a></li>
                    <li class="nav-item"> <a class="nav-link" href="add-subcategory">Add Child</a></li>
                    <li class="nav-item"> <a class="nav-link" href="manage-category">Manage Parent</a></li>
                    <li class="nav-item"> <a class="nav-link" href="manage-subcategory">Manage Child</a></li>
                </ul>
            </div>
        </li>
        <?php } ?>
        <?php if ($_SESSION['userType'] == 2) { ?>
        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#ui-blog" aria-expanded="false" aria-controls="ui-basic">
                <i class="ti-rss menu-icon"></i>
                <span class="menu-title">Blog Posts</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-blog">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="add-blog">Add Blog</a></li>
                    <li class="nav-item"> <a class="nav-link" href="manage-blog">Manage Blog</a></li>
                </ul>
            </div>
        </li>
        <hr style="width: 100%;height:0.1px;background-color:#E5E5E5">
        <?php } ?>
        <?php if ($_SESSION['userType'] == 2) { ?>
        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
                <i class="mdi mdi-account-outline menu-icon"></i>
                <span class="menu-title">All User</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basic">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="add-user">Add user</a></li>
                    <li class="nav-item"> <a class="nav-link" href="manage-users">Manage Users</a></li>
                </ul>
            </div>
        </li>
        <?php } ?>
        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#ui-ticket" aria-expanded="false" aria-controls="ui-basic">
                <i class="mdi mdi-ticket-account menu-icon"></i>
                <span class="menu-title">Support Ticket</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-ticket">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="add-ticket">Add Ticket</a></li>
                    <li class="nav-item"> <a class="nav-link" href="manage-tickets">Manage Tickets</a></li>
                </ul>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="edit-profile">
                <i class="ti-settings menu-icon"></i>
                <span class="menu-title">Profile Setting</span>
            </a>
        </li>
        <hr style="width: 100%;height:0.1px;background-color:#E5E5E5">

        <?php if ($_SESSION['userType'] == 2) { ?>
        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#ui-setting" aria-expanded="false"
                aria-controls="ui-basic">
                <i class="mdi mdi-security menu-icon"></i>
                <span class="menu-title">Settings</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-setting">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="sms-config">SMS Setting</a></li>
                    <li class="nav-item"> <a class="nav-link" href="email-config">Email Setting</a></li>
                    <li class="nav-item"> <a class="nav-link" href="site-config">Site Setting</a></li>
                    <li class="nav-item"> <a class="nav-link" href="payment-config">Payment Setting</a></li>
                </ul>
            </div>
        </li>
        <?php } ?>

        <?php if ($_SESSION['userType'] == 2) { ?>
        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#ui-template" aria-expanded="false"
                aria-controls="ui-basic">
                <i class="mdi mdi-email-outline menu-icon"></i>
                <span class="menu-title">Email Template</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-template">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="purchase-template">Purchase</a></li>
                    <li class="nav-item"> <a class="nav-link" href="reminder-template">Reminder</a></li>
                    <li class="nav-item"> <a class="nav-link" href="lecture-template">Lecture</a></li>
                    <li class="nav-item"> <a class="nav-link" href="signup-template">Signup</a></li>
                    <li class="nav-item"> <a class="nav-link" href="cancel-template">Cancel</a></li>
                    <li class="nav-item"> <a class="nav-link" href="payment-template">Payment</a></li>
                </ul>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#ui-pageSettings" aria-expanded="false"
                aria-controls="ui-pageSettings">
                <i class="mdi mdi-email-outline menu-icon"></i>
                <span class="menu-title">Page Settings</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-pageSettings">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="pagesetting-about">About Us</a></li>
                    <li class="nav-item"> <a class="nav-link" href="pagesetting-contact">Contact Us</a></li>
                    <li class="nav-item"> <a class="nav-link" href="pagesetting-privacypolicy">Privacy Policy</a></li>
                    <li class="nav-item"> <a class="nav-link" href="pagesetting-termsandcondition">Terms</a></li>
                    <li class="nav-item"> <a class="nav-link" href="pagesetting-menusettings">Menu Settings</a></li>
                </ul>
            </div>
        </li>
        <!-- <li class="nav-item">
        <a class="nav-link" data-toggle="collapse" href="#ui-invoice" aria-expanded="false" aria-controls="ui-basic">
          <i class="mdi mdi-cash-multiple menu-icon"></i>
          <span class="menu-title">Invoice</span>
          <i class="menu-arrow"></i>
        </a>
        <div class="collapse" id="ui-invoice">
          <ul class="nav flex-column sub-menu">
            <li class="nav-item"> <a class="nav-link" href="create-invoice">Create Invoice</a></li>
            <li class="nav-item"> <a class="nav-link" href="manage-invoice">Manage Invoice</a></li>
          </ul>
        </div>
      </li> -->
        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#ui-course" aria-expanded="false" aria-controls="ui-basic">
                <i class="mdi mdi-cash-multiple menu-icon"></i>
                <span class="menu-title">All Courses</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-course">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="create-course">Create Course</a></li>
                    <li class="nav-item"> <a class="nav-link" href="manage-course">Manage Course</a></li>
                </ul>
            </div>
        </li>
      
        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#ui-Lesson" aria-expanded="false" aria-controls="ui-basic">
                <i class="mdi mdi-cash-multiple menu-icon"></i>
                <span class="menu-title">Lesson Plan</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-Lesson">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="add-lesson">Add Lesson Plan</a></li>
                    <li class="nav-item"> <a class="nav-link" href="manage-lesson">Manage Lesson Plan</a></li>
                </ul>
            </div>
        </li>

        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#ui-product" aria-expanded="false" aria-controls="ui-product">
                <i class="mdi mdi-cash-multiple menu-icon"></i>
                <span class="menu-title">All Products</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-product">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="create-product">Create Product</a></li>
                    <li class="nav-item"> <a class="nav-link" href="manage-products">Manage Products</a></li>
                </ul>
            </div>
        </li>

        <li class="nav-item">
            <a class="nav-link" href="manage-reviews">
                <i class="mdi mdi-wallet-membership menu-icon"></i>
                <span class="menu-title">Manage Alll Reviews</span>
            </a>
        </li>

        <?php } ?>
    </ul>
</nav>