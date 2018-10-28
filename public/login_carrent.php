<?php require_once("../resources/config.php"); ?>

<?php include(TEMPLATE_FRONT . DS . "header.php"); ?>

<?php 

        $min_ageErr = $max_ageErr = $license_activationErr = $license_cancellationErr = $cityErr = "";
        $min_age = $max_age = $license_activation = $license_cancellation = $city = "";

        $min_age 	= 19;
        $max_age 	= 65;
        $city 		= "lahore";
        $err 		= "Please fill required fields";


if(isset($_POST['submit'])){

	$age 					= $_POST['age'];
	$min_age 				= $_POST['age'];
	$max_age 				= $_POST['age'];
	$city 					= $_POST['cust_city']; 
	$license_activation 	= $_POST['license_active_date'];
	$license_cancellation 	= $_POST['license_cancel_date'];



	if (empty($age)) {
		echo "<h2 class='text-center bg-warning'> $err </h2>";

	} else if (empty($license_activation)) {
		echo "<h2 class='text-center bg-warning'> $err </h2>";

	} else if (empty($license_cancellation)) {
		echo "<h2 class='text-center bg-warning'> $err </h2>";

	} else if (empty($city)) {
		echo "<h2 class='text-center bg-warning'> $err </h2>";

	} else if (empty($age) && empty($license_activation)   
		&& empty($license_cancellation)  && empty($city)) {
		echo "<h2 class='text-center bg-warning'> $err </h2>";

	} else if ($min_age > 19 && $max_age < 66 && $city == $_POST['cust_city']) {

?>
        <!-- Modal content-->
                <div class="modal-content">
                <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Congratulations! You are Eligible.</h4>
                </div>
                <div class="modal-body">
                <p><a href="farecalculator.php"> Click Here!</a> to Calculate Fare.</p>
                </div>
                <div class="modal-footer">
                <button type="button" id="#myModal" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
                </div>        
		
<?php 
// redirect("farecalculator.php");
	} else { 

		echo "<h2 class='text-center bg-warning'> You are not Eligible </h2>";
	}

}

?>

    <!-- Page Content -->
 <div class="container">

      <header>
            <h1 class="text-center">Check Your Eligibilty</h1>

            
        <div class="col-sm-4 col-sm-offset-5">         
            <form class="" action="" method="post" enctype="multipart/form-data">

                <div class="form-group"><label for="">
                    Age<input type="text" name="age" class="form-control" placeholder="19-65" 
                    value=""><span class="error"><?php   ?></span></label>
                </div>

                <div class="form-group"><label for="">
                    <p>License Activation Date: <input type="text" name="license_active_date" class="datepicker form-control" id="activation_date" placeholder="2018" value=""></p>
                    <span class="error"><?php ?></span></label>
                </div>
                <div class="form-group"><label for="">
                    <p>License Cancellation Date: <input type="text" name="license_cancel_date" class="datepicker form-control" id="cancellation_date" placeholder="2022" value=""></p>
                    <span class="error"><?php  ?></span></label>
                </div>

                <div class="form-group"><label for="">
                    City<input type="text" name="cust_city" class="form-control" placeholder="Lahore" 
                    value=""> <span class="error"><?php ?></span> </label>
                </div>

                <div class="form-group">
                  <!-- <input type="submit" name="submit" class="btn btn-primary popup"> -->
                  <span class="error"><?php  ?></span>
                </div>


                        <!-- Trigger the modal with a button -->
                <button type="button submit" name="submit" class="btn btn-info btn-lg" data-toggle="modal" data-target="modal">Submit</button>

                <!-- Modal -->
                <div id="#myModal" class="modal fade" role="dialog">
                <div class="modal-dialog">

                

                </div>
                </div>

                <!-- <a href="our_cars.php"></a> -->
                <!-- <div class="popup" onclick="myFunction()">Click me!
                <span class="popuptext" id="myPopup">Popup text...</span>
                </div> -->

                

           	 </form>
		</div>
   	   </header>
	</div>
</div>
    <!-- /.container -->

<!-- Footer Here -->

<?php include(TEMPLATE_FRONT . DS . "footer.php") ?>