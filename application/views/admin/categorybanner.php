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
                                        <!-- <form class="d-inline-flex">
                                            <a href="<?= base_url('admin/addCategory') ?>" class="align-items-center btn btn-theme d-flex">
                                                <i data-feather="plus-square"></i>Add New
                                            </a>
                                        </form> -->
                                    </div>

                                    <div class="table-responsive category-table">
                                        <div>
                                            <table class="table all-package theme-table" id="table_id">
                                                <thead>
                                                    <tr>
                                                        <th>Banner Image</th>
                                                        <th>Status</th>
                                                        <th>Modified Date</th>
                                                        <th>Option</th>
                                                    </tr>
                                                </thead>

                                                <tbody>
                                                    <?php
                                                    foreach($category_banner as $category_banner){
                                                    ?>
                                                    <tr>
                                                        <td>
                                                            <div class="table-image">
                                                                <img src="<?= base_url() ?>uploads/banner/<?= $category_banner['banner_image']; ?>" class="img-fluid" alt="">
                                                            </div>
                                                        </td>
                                                        <td><?php echo ($category_banner['status']=='1') ? 'Active' : 'Deactive' ?></td>

                                                        <td><?= $category_banner['modified_on']; ?></td>

                                                        <td>
                                                            <ul>
                                                                <li>
                                                                    <a href="<?= base_url()?>admin/editCategory/<?= $category_banner['id'] ?>">
                                                                        <i class="ri-pencil-line"></i>
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

    <!-- Delete Modal Box End -->

    <?php require_once 'include/foot.php' ?>

</body>

</html>