<!DOCTYPE html>
<html lang="en" dir="ltr">

<?php require_once 'include/head.php' ?>

<body>
    <!-- tap on top start -->
    <div class="tap-top">
        <span class="lnr lnr-chevron-up"></span>
    </div>
    <!-- tap on tap end -->

    <!-- page-wrapper Start-->
    <div class="page-wrapper compact-wrapper" id="pageWrapper">
        <!-- Page Header Start-->
        <?php require_once 'include/header.php' ?>
        <!-- Page Header Ends-->

        <!-- Page Body Start -->
        <div class="page-body-wrapper">
            <!-- Page Sidebar Start-->
            <?php require_once 'include/sidebar.php' ?>
            <!-- Page Sidebar Ends-->

            <!-- Container-fluid starts-->
            <div class="page-body">
                <!-- All User Table Start -->
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="card card-table">
                                <div class="card-body">
                                    <div class="title-header option-title">
                                        <h5>All Category</h5>
                                        <form class="d-inline-flex">
                                            <a href="<?= base_url('admin/addbrand') ?>" class="align-items-center btn btn-theme d-flex">
                                                <i data-feather="plus-square"></i>Add New
                                            </a>
                                        </form>
                                    </div>

                                    <div class="table-responsive category-table">
                                        <div>
                                            <table class="table all-package theme-table" id="table_id">
                                                <thead>
                                                    <tr>
                                                        <th>Subcategory</th>
                                                        <th>Brand Name</th>
                                                        <th>Brand Icon</th>
                                                        <th>Created On</th>
                                                        <th>Option</th>
                                                    </tr>
                                                </thead>

                                                <tbody>
                                                    <?php
                                                    foreach($brand as $brand){
                                                    ?>
                                                    <tr>
                                                    <td><?= $brand['subcategory_name']; ?></td>
                                                        <td><?= $brand['brand_name']; ?></td>
                                                        <td>
                                                            <div class="table-image">
                                                                <img src="<?= base_url() ?>uploads/brand_icon/<?= $brand['brand_icon']; ?>" class="img-fluid" alt="">
                                                            </div>
                                                        </td>
                                                        <td><?= $brand['created_on']; ?></td>

                                                        <td>
                                                            <ul>
                                                                <li>
                                                                    <a href="<?= base_url() ?>admin/editbrand/<?= $brand['bid'] ?>">
                                                                        <i class="ri-pencil-line"></i>
                                                                    </a>
                                                                </li>

                                                                <li>
                                                                    <a href="javascript:void(0)" id="delete" class="delete-button" data-row="<?= $brand['bid'] ?>">
                                                                        <i class="ri-delete-bin-line"></i>
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </td>
                                                    </tr>
                                                    <?php } ?>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- All User Table Ends-->

                <div class="container-fluid">
                    <!-- footer start-->
                    <?php require_once 'include/footer.php' ?>
                    <!-- footer end-->
                </div>
            </div>
            <!-- Container-fluid end -->
        </div>
        <!-- Page Body End -->


    </div>

    <!-- Delete Modal Box Start -->
    <div class="modal fade theme-modal remove-coupon" id="exampleModalToggle" aria-hidden="true" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header d-block text-center">
                    <h5 class="modal-title w-100" id="exampleModalLabel22">Are You Sure ?</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                        <i class="fas fa-times"></i>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="remove-box">
                        <p>The permission for the use/group, preview is inherited from the object, object will create a
                            new permission for this object</p>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-animation btn-md fw-bold" data-bs-dismiss="modal">No</button>
                    <button type="button" class="btn btn-animation btn-md fw-bold confirmDelete" >Yes</button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade theme-modal remove-coupon" id="exampleModalToggle2" aria-hidden="true" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title text-center" id="exampleModalLabel12">Done!</h5>
                    <!-- <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                        <i class="fas fa-times"></i>
                    </button> -->
                </div>
                <div class="modal-body">
                    <div class="remove-box text-center">
                        <div class="wrapper">
                            <svg class="checkmark" xmlns="http://www.w3.org/2000/svg" viewbox="0 0 52 52">
                                <circle class="checkmark__circle" cx="26" cy="26" r="25" fill="none"></circle>
                                <path class="checkmark__check" fill="none" d="M14.1 27.2l7.1 7.2 16.7-16.8"></path>
                            </svg>
                        </div>
                        <h4 class="text-content">It's Removed.</h4>
                    </div>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-primary load" data-bs-toggle="modal" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Delete Modal Box End -->

    <?php require_once 'include/foot.php' ?>
<script>
document.addEventListener('DOMContentLoaded', function() {
    var deleteButtons = document.getElementsByClassName('delete-button');

    for (var i = 0; i < deleteButtons.length; i++) {
        deleteButtons[i].addEventListener('click', function() {
            var rowId = this.getAttribute('data-row');
            showConfirmationModal(rowId);
        });
    }

    function showConfirmationModal(rowId) {
        $('#exampleModalToggle').modal('show');

        $('.confirmDelete').click(function() {
            deleteTableRow(rowId);
            $('#exampleModalToggle').modal('hide');
        });
    }

    function deleteTableRow(rowId) {
        $.ajax({
            url: "<?php echo base_url('admin/brandelete'); ?>",
            type: "POST",
            data: {row_id: rowId},
            success: function(response) {
                if (response == "success") {
                    // Delete the table row from the DOM
                    $('#exampleModalToggle2').modal('show');
                    var row = document.getElementById("row" + rowId);
                    if (row) {
                        row.parentNode.removeChild(row);
                    }
                    
                } else {
                    // Handle the deletion error
                    console.log(response);
                }
            },
            error: function(xhr, status, error) {
                // Handle the AJAX error
                console.log(error);
            }
        });
    }
});
$('.load').click(function(){
    location.reload();
})
</script>

</body>

</html>