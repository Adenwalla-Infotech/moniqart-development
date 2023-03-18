<?php include('includes/_clientfunctions.php'); ?>
<div class="topbar">
    <div class="container">
        <div class="row" style="padding-top: 8px">
            <div class="col-10">
              <p><i class="fa-solid fa-phone"></i> <span><?php echo _siteconfig('_sitephone'); ?></span>&nbsp;&nbsp;&nbsp; <i class="fa-solid fa-envelope-open"></i><?php echo _siteconfig('_siteemail'); ?></p>
            </div>
            <div class="col-2">
              <select name="currency" id="currency" style="float:right">
                  <?php _allcurrency();?>
              </select>
            </div>
        </div>
    </div>
</div>
<div class="navbar">
<nav class="navbar fixed-top navbar-expand-lg navbar-dark p-md-3">
      <div class="container">
        <a class="navbar-brand" href="#"><img src="<?php echo base_url('uploads/images/' . _siteconfig('_sitelogo')); ?>" alt=""></a>
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarNav"
          aria-controls="navbarNav"
          aria-expanded="false"
          aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
          <div class="mx-auto"></div>
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link text-white" href="#">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-white" href="#">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-white" href="#">Blog</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-white" href="#">Pricing</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-white" href="#">Contact</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
</div>