
<!-- Configuration-->

<?php require_once("../resources/config.php"); ?>


<!-- Header-->
<?php include(TEMPLATE_FRONT .  "/header.php");?>


         <!-- Contact Section -->

        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Calculate Total Fare</h2>
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

                                
                                <div class="form-group"><label for="">
                                    <p>Total Duration: <input type="text" name="" class="timepicker" id="total_duration" placeholder=""></p></label>
                                <!-- <input type="email" name="email" class="form-control" placeholder="Your Email *" id="email" required data-validation-required-message="Please enter your email address.">
                                <p class="help-block text-danger"></p> -->
                                </div>

                                <div class="form-group">
                                    <input name="subject" type="text" class="form-control" placeholder="Adcance Payment" id="" required data-validation-required-message="">
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
                    </form>
                </div>
            </div>
        </div>

    </div>
    <!-- /.container -->
<?php include(TEMPLATE_FRONT .  "/footer.php");?>