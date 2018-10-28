
<!-- Configuration-->
<<<<<<< HEAD
<?php 
require_once("../resources/config.php"); 


if(isset($_POST['submit']) &&  !empty($_POST['submit'])) { 
    //echo "<pre>";print_r($_POST);die;
    
    if(isset($_POST['selectCar'])) {
        if($_POST['selectCar'] != 0 ) {
            $selectCar      = $_POST['selectCar'];
        } else {
            $selectCar = '';
        }
    }

    if(isset($_POST['carModel'])) {
        if($_POST['carModel'] != 0 ) {
            $carModel       = $_POST['carModel'];
        } else {
            $carModel  = '';
        }
    }

    if(isset($_POST['totalDuration'])) {
        if($_POST['totalDuration'] != 0 ) {
            $totalDuration      = $_POST['totalDuration'];
        } else {
            $totalDuration  = '';
        }
    }

    if(isset($_POST['advance'])) {
        if($_POST['advance'] != 0 ) {
           $advance       = $_POST['advance'];
        } else {
           $advance  = '';
        }
    }



    $err            = "Please fill required fields";

    if (empty($selectCar)) {
        echo "<h2 class='text-center bg-warning'> $err </h2>";

    } else if (empty($carModel)) {
        echo "<h2 class='text-center bg-warning'> $err </h2>";

    } else if (empty($totalDuration)) {
        echo "<h2 class='text-center bg-warning'> $err </h2>";

    } else if (empty($advance)) {
        echo "<h2 class='text-center bg-warning'> $err </h2>";

    } else if (empty($selectCar)  && empty($carModel)   
        && empty($totalDuration)  && empty($advance)) {

        echo "<h2 class='text-center bg-warning'> $err </h2>";

    } elseif (!empty($selectCar) && !empty($carModel)   
        && !empty($totalDuration)  && !empty($advance))  {

            $carValues = [
                '1' => ['1' => 100, '2' => 200, '3'=> 300],
                '2' => ['1' => 150, '2' => 250, '3'=> 350],
                '3' => ['1' => 200, '2' => 300, '3'=> 400],
                '4' => ['1' => 250, '2' => 350, '3'=> 450],
            ];



            $price = $carValues[$selectCar][$carModel];
            
            $duration = split(':', $totalDuration);
           
            
            $priceInMinutes = $price/60;

            $hourPrice      = $duration[0] * $price;
            $minutePrice    = $duration[1] * $priceInMinutes;

            $totalPrice =  $hourPrice + $minutePrice;
            
            $percentAmount = 0;

            if ($advance == 1) {
                $percentAmount = 15;
            } else if($advance == 2) {
                $percentAmount = 35;
            } 

            $percentValue   = $totalPrice / $percentAmount;
            $priceToPay     = $totalPrice / $percentValue;

            $priceToPay;
           
        }
         else {
            echo "<h2 class='text-center bg-warning'> Please fill required fields  </h2>";
        }
    }
   
?>
=======

<?php require_once("../resources/config.php"); ?>

>>>>>>> a4f61e5f505e09b698a9f059d4e067cbc56f466f

<!-- Header-->
<?php include(TEMPLATE_FRONT .  "/header.php");?>

<<<<<<< HEAD
=======

>>>>>>> a4f61e5f505e09b698a9f059d4e067cbc56f466f
         <!-- Contact Section -->

        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Calculate Total Fare</h2>
<<<<<<< HEAD
                    <h3 class="section-subheading "> </h3>
                </div>
            </div>
            
            <div class="row">
                <div class="col-lg-12">
                    <form action=""   method="post" >
                    
                    <!-- Fare Calculator Section-->
                   

                        <div class="row">
                            <div class="col-md-6">
                               

                                <div class="form-group">
                                     <label for="select_Car">Select Car</label>
                                      <select  class="form-control" name="selectCar" id="select_Car">
                                        <option value = '0'>None</option>
                                        <option value = '1'>City</option>
                                        <option value = '2'>Elegance</option>
                                        <option value = '3'>Family</option>
                                        <option value = '4'>Sport</option>
                                    </select>
                                </div>

                                <div>
                                    
                                    <label for="car_model">Car Model</label>
                                      <select  class="form-control" name="carModel" id="car_model">
                                        <option value = '0'>None</option>
                                        <option value = '1'>2016</option>
                                        <option value = '2'>2017</option>
                                        <option value = '3'>2018</option>
                                    </select>
                                
                                    
                                </div>

                                
                                <div>
                                    <label for="total_duration">Total Duration</label>
                                    
                                    <input type="text" name="totalDuration" class="timepicker form-control" id="total_duration" placeholder="HH/MM">
                                </div>

                                <div class="form-group">
                                    <label for="advance">Advance Payment</label>
                                    <select  class="form-control" name="advance" id="advance">
                                        <option value = '0'>None</option>
                                        <option value = '1'>15 % </option>
                                        <option value = '2'>35 %</option>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <input type="submit" name="submit" value='Calculate' class="btn btn-primary" >
                                    <span class="error"><?php  ?></span>
                                </div>


                                <div>
                                    <?php if (isset($totalPrice)  && !empty($totalPrice)) { ?>
                                        <h2 class="section-subheading ">
                                            Total Price To Pay:
                                        </h2>
                                        <h5> Total Price : <b><?php echo round($totalPrice);?></b> </h5>
                                        
                                    <?php } ?>

                                    <?php if (isset($priceToPay)  && !empty($priceToPay)) { ?>
                                        <h2 class="section-subheading ">
                                            Advance To Pay:
                                        </h2>
                                        <h5> Advance Price :  <b><?php echo round($priceToPay);?></b></h5>
                                        
                                    <?php } ?>

                                </div>
                            </div>


                            <!-- Car Table -->

                            <div class="row">
                            <div class='col-md-6'>
                                <table class="table">
                                <thead>
                                  <tr>
                                    <th>Car</th>
                                    <th>2016</th>
                                    <th>2017</th>
                                    <th>2018</th>
                                  </tr>
                                </thead>
                                <tbody>
                                  <tr>
                                    <td>Honda Civic</td>
                                    <td>100</td>
                                    <td>200</td>
                                    <td>300</td>
                                  </tr>
                                  <tr>
                                    <td>Suzuki Mega Carry</td>
                                    <td>150</td>
                                    <td>250</td>
                                    <td>350</td>
                                  </tr>
                                  <tr>
                                    <td>Hyundai Elantra</td>
                                    <td>200</td>
                                    <td>300</td>
                                    <td>400</td>
                                  </tr>
                                  <tr>
                                    <td>Toyota Vios</td>
                                    <td>250</td>
                                    <td>350</td>
                                    <td>450</td>
                                  </tr>
                                </tbody>
                              </table>
                            </div>
                         </div>
                       </div>
=======
                    <h3 class="section-subheading ">
                    <?php display_message(); ?>  <!-- Used function "display_message" to confirmation message on screen-->
                    </h3>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <form name="sentMessage" id="contactForm" method="post" >
                    
                    <!-- Contact us page function showing msg on screen-->
                    <?php send_message(); ?>

                        <div class="row">
                            <div class="col-md-3">
                                <!-- <div class="form-group">
                                    <input type="text" name="name" class="form-control" placeholder="Your Name *" id="name" required data-validation-required-message="Please enter your name.">
                                    <p class="help-block text-danger"></p>
                                </div> -->

                                <div class="form-group">
                                    <tr>
                                    <td>Cars</td>
                                        <td><select class="form-control">
                                        <option>Honda Civic</option>
                                        <option>Suzuki Mega Carry</option>
                                        <option>Hyundai Elantra</option>
                                        <option>Toyota Vios</option>
                                        </select></td>
                                    </tr>
                                </div>

                                <div>
                                    <tr>
                                    <td>Model</td>
                                        <td><select class="form-control">
                                        <option>2016</option>
                                        <option>2017</option>
                                        <option>2018</option>
                                        </select></td>
                                    </tr>
                                    <!-- <tr>
                                    <td colspan="2"><input type="submit" value="Register"/>
                                    <input type="reset"/></td>
                                    </tr> -->
                                </div>

                                <!-- class="form-group" -->
                                <!-- <label for=""> -->
                                <div>
                                    <tr>
                                        <td>
                                            Total Duration <input type="text" name="" class="timepicker form-control" id="total_duration" placeholder="HH/MM">
                                        </td>
                                    </tr>
                                        <!-- <input type="email" name="email" class="form-control" placeholder="Your Email *" id="email" required data-validation-required-message="Please enter your email address.">
                                        <p class="help-block text-danger"></p> -->
                                </div>

                                <div class="form-group">
                                        Advance Payment <input name="subject" type="text" class="form-control" placeholder="15-35%" id="" required data-validation-required-message="">
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>


                            <!-- <div class="col-md-6">
                                <div class="form-group">
                                    <textarea name="message" class="form-control" placeholder="Your Message *" id="message" required data-validation-required-message="Please enter a message."></textarea>
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                            <div class="col-lg-12 text-center">
                                <div id="success"></div>
                                <button name="submit" type="submit" class="btn btn-xl">Send Message</button>
                            </div> -->

                        </div>
>>>>>>> a4f61e5f505e09b698a9f059d4e067cbc56f466f
                    </form>
                </div>
            </div>
        </div>

    </div>
    <!-- /.container -->
<?php include(TEMPLATE_FRONT .  "/footer.php");?>