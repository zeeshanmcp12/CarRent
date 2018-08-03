<?php require_once("../resources/config.php"); ?>

<?php include(TEMPLATE_FRONT . DS . "header.php"); ?>

    <!-- Page Content -->
    <div class="container">

      <header>
            <h1 class="text-center">Login</h1>
            <!-- <h2 class="text-center bg-warning "> <?php display_message(); ?> </h2> -->
        <div class="col-sm-4 col-sm-offset-5">         
            <form class="" action="" method="post" enctype="multipart/form-data">
                    <?php  login_user(); ?>


                <div class="form-group"><label for="">
                    Age<input type="text" name="age" class="form-control" placeholder="19-65"></label>
                </div>

                <div class="form-group"><label for="">
                    <p>License Activation Date: <input type="text" name="license_active_date" class="datepicker form-control" id="activation_date" placeholder="2018"></p></label>
                </div>
                <div class="form-group"><label for="">
                    <p>License Cancellation Date: <input type="text" name="license_cancel_date" class="datepicker form-control" id="cancellation_date" placeholder="2022"></p></label>
                </div>

                <!-- <div class="form-group"><label for="">
                    License Activation Date<input type="text" name="license-activation-date" class="form-control"></label>
                </div> -->
                <!-- <div class="form-group"><label for="">
                    License Cancellation Date<input type="text" name="license-cancellation-date" class="form-control"></label>
                </div> -->
                <div class="form-group"><label for="">
                    City<input type="text" name="city" class="form-control" placeholder="Lahore"></label>
                </div>

                <div class="form-group">
                  <input type="submit" name="submit" class="btn btn-primary" >
                </div>

                <!-- <?php session_start(); ?> -->
            </form>
        </div>  


    </header>


        </div>

    </div>
    <!-- /.container -->

<!-- Footer Here -->
<?php include(TEMPLATE_FRONT . DS . "footer.php") ?>
