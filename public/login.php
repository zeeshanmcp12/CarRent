<?php require_once("../resources/config.php"); ?>

<?php include(TEMPLATE_FRONT . DS . "header.php"); ?>

<<<<<<< HEAD
<?php 

        $min_ageErr = $max_ageErr = $license_activationErr = $license_cancellationErr = $cityErr = "";
        $min_age = $max_age = $license_activation = $license_cancellation = $city = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    if (empty($_POST["age"])) {
        $min_ageErr = "Missing";
    }
    else {
        $min_age = $_POST["age"];
    }

    if (empty($_POST["age"])) {
        $max_ageErr = "Missing";
    }
    else {
        $max_age = $_POST["age"];
    }

    if (empty($_POST["license_active_date"]))  {
        $license_activationErr = "You must select Activation date";
    }
    else {
        $license_activation = $_POST["license_active_date"];
    }

    if (empty($_POST["license_cancel_date"])) {
        $license_cancellationErr = "You must select Cancellation date";
    }
    else {
        $license_cancellation = $_POST["license_cancel_date"];
    }

    if (empty($_POST["cust_city"])) {
        $cityErr = "Missing";
    }
    else {
        $city = $_POST["cust_city"];
    }

    if (isset($_POST['submit'])) {
        $min_age = $_POST["age"];/* . "license_active_date" . "license_cancel_date" . "cust_city"*/

        if ($min_age < 19 && $min_age > 65) {

            echo "You are eligible";
            //redirect("./farecalculator.php");


        }
        
        //redirect("./farecalculator.php");

    } else {
        echo "Not working";
    }
    
}
// if ($min_age < 19 && $max_age > 65) {
//     echo "You are eligible.";
// }else{
//     echo "You are not eligible.";
// }


?>

=======
>>>>>>> a4f61e5f505e09b698a9f059d4e067cbc56f466f
    <!-- Page Content -->
    <div class="container">

      <header>
            <h1 class="text-center">Login</h1>
            <!-- <h2 class="text-center bg-warning "> <?php display_message(); ?> </h2> -->
        <div class="col-sm-4 col-sm-offset-5">         
<<<<<<< HEAD
            <form class="" action="./farecalculator" method="post" enctype="multipart/form-data">

                <!-- <?php  login_user(); ?> -->

                <div class="form-group"><label for="">
                    Age<input type="text" name="age" class="form-control" placeholder="19-65" 
                    value="<?php echo $min_age; ?>"><span class="error"><?php echo $min_ageErr; ?></span></label>
                </div>

                <div class="form-group"><label for="">
                    <p>License Activation Date: <input type="text" name="license_active_date" class="datepicker form-control" id="activation_date" placeholder="2018" value="<?php echo $license_activation; ?>"></p><span class="error"><?php echo $license_activationErr;?></span></label>
                </div>
                <div class="form-group"><label for="">
                    <p>License Cancellation Date: <input type="text" name="license_cancel_date" class="datepicker form-control" id="cancellation_date" placeholder="2022" value="<?php echo $license_cancellation;?>"></p><span class="error"><?php echo $license_cancellationErr;?></span></label>
                </div>

                <div class="form-group"><label for="">
                    City<input type="text" name="cust_city" class="form-control" placeholder="Lahore" 
                    value="<?php echo $city;?>"> <span class="error"><?php echo $cityErr;?></span> </label>
=======
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
>>>>>>> a4f61e5f505e09b698a9f059d4e067cbc56f466f
                </div>

                <div class="form-group">
                  <input type="submit" name="submit" class="btn btn-primary" >
                </div>

<<<<<<< HEAD

=======
                <!-- <?php session_start(); ?> -->
>>>>>>> a4f61e5f505e09b698a9f059d4e067cbc56f466f
            </form>
        </div>  


    </header>


        </div>

    </div>
    <!-- /.container -->

<!-- Footer Here -->
<<<<<<< HEAD

<?php include(TEMPLATE_FRONT . DS . "footer.php") ?>
=======
<?php include(TEMPLATE_FRONT . DS . "footer.php") ?>
>>>>>>> a4f61e5f505e09b698a9f059d4e067cbc56f466f
