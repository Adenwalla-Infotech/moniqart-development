<?php

require("../includes/_config.php");
require('../includes/_functions.php');


if (isset($_POST['edit'])) {

    $imgId = $_POST['imgId'];





    ?>


    <form action="" method="post" enctype="multipart/form-data">
        <div class="modal-content" style="padding: 10px;">
            <div class="modal-header" style="padding: 0px;margin-bottom: 20px;padding-bottom:10px">
                <h4 class="modal-title fs-5" id="exampleModalLabel">Update Product Image</h4>
                <button type="button" class="btn-close" style="border: none;;background-color:white" data-bs-dismiss="modal"
                    aria-label="Close"><svg style="width: 15px;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 352 512">
                        <!-- Font Awesome Pro 5.15.4 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) -->
                        <path
                            d="M242.72 256l100.07-100.07c12.28-12.28 12.28-32.19 0-44.48l-22.24-22.24c-12.28-12.28-32.19-12.28-44.48 0L176 189.28 75.93 89.21c-12.28-12.28-32.19-12.28-44.48 0L9.21 111.45c-12.28 12.28-12.28 32.19 0 44.48L109.28 256 9.21 356.07c-12.28 12.28-12.28 32.19 0 44.48l22.24 22.24c12.28 12.28 32.2 12.28 44.48 0L176 322.72l100.07 100.07c12.28 12.28 32.2 12.28 44.48 0l22.24-22.24c12.28-12.28 12.28-32.19 0-44.48L242.72 256z" />
                    </svg></button>
            </div>

            <div class="modal-body" style="padding: 0px;">


                <div class="row">
                    <div class="col-lg-12">
                        <label for="inputEmail4" class="form-label">Product Image</label>
                        <input type="file" name="file" class="form-control">
                    </div>


                </div>

                <div class="col-lg-6" style="display: none;">

                    <input type="text" name="imgId" value="<?php echo $imgId ?>">

                </div>

            </div>
            <div class="modal-footer" style="padding: 0px;margin-top: 20px;padding-top:10px">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" name="updateImgInGallery" class="btn btn-primary"><i
                        class="mdi mdi-content-save"></i>&nbsp;&nbsp;Save changes</button>
            </div>
        </div>
    </form>

<?php




}





?>