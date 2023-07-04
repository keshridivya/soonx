<!DOCTYPE html>
<html lang="en" dir="ltr">


<?php require_once 'include/head.php' ?>

<body>
    <!-- tap on top start -->
    <div class="tap-top">
        <span class="lnr lnr-chevron-up"></span>
    </div>
    <!-- tap on tap end -->

    <!-- page-wrapper start -->
    <div class="page-wrapper compact-wrapper" id="pageWrapper">
        <!-- Page Header Start-->
        <?php require_once 'include/header.php' ;?>
        <!-- Page Header Ends-->

        <!-- Page Body start -->
        <div class="page-body-wrapper">
            <!-- Page Sidebar Start-->
            <?php require_once 'include/sidebar.php' ;?>
            <!-- Page Sidebar Ends-->

            <div class="page-body">

                <!-- New Product Add Start -->
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12">
                            <div class="row">
                                <div class="col-xxl-8 col-lg-10 m-auto">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="card-header-2">
                                                <h5>Add Attribute</h5>
                                            </div>

                                            <form class="theme-form theme-form-2 mega-form" method="post">
                                                <div class="mb-4 row align-items-center">
                                                    <label class="form-label-title col-sm-3 mb-0">Attribute
                                                        Name</label>
                                                    <div class="col-sm-9">
                                                        <input class="form-control" type="text" placeholder="Attribute Name" name="attriname">
                                                    </div>
                                                </div>

                                                <div class="mb-4 row align-items-start">
                                                    <label class="col-sm-3 col-form-label form-label-title">Attribute
                                                        Value</label>
                                                    <div class="col-sm-9">
                                                        <div class="row g-sm-4 g-3">
                                                            <div class="col-sm-10 col-9">
                                                                <input class="form-control" type="text" placeholder="Attribute Value" name="attrivalue[]">
                                                            </div>


                                                            <div class="col-xxl-4">
                                                                <button type="button" class="btn text-white theme-bg-color addattrvalue">Add
                                                                    Value</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <button class="btn ms-auto theme-bg-color text-white" type="submit">Add Attribute</button>

                                            </form>


                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- New Product Add End -->

                <!-- footer Start -->
                <div class="container-fluid">
                <?php require_once 'include/footer.php' ;?>
                </div>
                <!-- footer End -->
            </div>
            <!-- Container-fluid End -->
        </div>
        <!-- Page Body End -->
    </div>
    <!-- page-wrapper End -->

    <?php require_once 'include/foot.php' ;?>
</body>

</html>