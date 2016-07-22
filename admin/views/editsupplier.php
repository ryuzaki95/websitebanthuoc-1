<?php
//Header
require(PATH_APPLICATION."/views/header.php");
//Left
require(PATH_APPLICATION."/views/left.php");
//Main

?>

<div id="page_content">
    <div id="page_content_inner">
        <h3 class="heading_b uk-margin-bottom">Chỉnh sửa nhà cung cấp</h3>

        <div class="md-card">
            <div class="md-card-content large-padding">
                <form novalidate="" id="form_validation" class="uk-form-stacked" action="" method="post">
                    <div class="uk-grid" data-uk-grid-margin="">
                        <div class="uk-width-medium-1-1">
                            <div class="parsley-row">
                                <div class="md-input-wrapper"><label for="SupplierName">SupplierName<span
                                            class="req">*</span></label><input data-parsley-id="4" name="SupplierName"
                                                                               required="" class="md-input"
                                                                               type="text" value="<?php echo $supplierSelect->SupplierName ?>"><span
                                        class="md-input-bar"></span></div>

                            </div>
                        </div>
                        <div class="uk-width-medium-1-1">
                            <div class="parsley-row">
                                <div class="md-input-wrapper"><label for="Address">Address<span
                                            class="req">*</span></label><input data-parsley-id="6" name="Address"
                                                                               data-parsley-trigger="change" required=""
                                                                               class="md-input" type="text" value=" <?php echo $supplierSelect->Address?>"><span
                                        class="md-input-bar"></span></div>

                            </div>
                        </div>
                    </div>
                    <div class="uk-grid" data-uk-grid-margin="">
                        <div class="uk-width-medium-1-1">
                            <div class="parsley-row">
                                <div class="md-input-wrapper"><label for="Phone">Phone<span
                                            class="req">*</span></label><input data-parsley-id="4" name="Phone"
                                                                               required="" class="md-input"
                                                                               type="text" value="<?php echo $supplierSelect->Phone?>"><span
                                        class="md-input-bar"></span></div>

                            </div>
                        </div>
                        <div class="uk-width-medium-1-1">
                            <div class="parsley-row">
                                <div class="md-input-wrapper"><label for="Email">Email<span
                                            class="req">*</span></label><input data-parsley-id="6" name="Email"
                                                                               data-parsley-trigger="change" required=""
                                                                               class="md-input" type="text" value=" <?php echo $supplierSelect->Email?>"><span
                                        class="md-input-bar"></span></div>

                            </div>
                        </div>
                    </div>
                    <div class="uk-grid">
                        <div class="uk-width-1-1">
                            <input type="submit" class="md-btn md-btn-primary" name="Edit" value="Submit">
                        </div>
                    </div>
                </form>
            </div>
        </div>

    </div>
</div>
</body>
</html>