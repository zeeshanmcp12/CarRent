<div class="container">

        <hr>

        <!-- Footer -->
        <footer>
            <div class="row">
                <div class="col-lg-12">
                    <p>Copyright &copy; Your Website 2030</p>
                </div>
            </div>
        </footer>

    </div>
    <!-- /.container -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery-ui.js"></script>
    <script src="js/jquery.ui.timepicker.js"></script>

     <!-- <script>
        jQuery( function() {
            jQuery( "#datepicker" ).datepicker({ minDate: -213, maxDate: "+39M +29D" });
        } );
    </script> -->

    <!-- <script>
        $( function() {
            $( "#activation_date" ).datepicker({
                changeMonth: true,
                changeYear: true
            });
            $( "#cancellation_date" ).datepicker({
                changeMonth: true,
                changeYear: true
            });
        });

        </script> -->

      <script>
        $( function() {
            $( "#activation_date" ).datepicker({
                minDate: -216,
                maxDate: "+4M +26D"
            });
            $( "#cancellation_date" ).datepicker({
                minDate: +149,
                maxDate: "+52M +26D"
            });
        });

        </script>

        <script>
                $('#total_duration').timepicker({
                    showPeriodLabels: false,
            });
        </script>
  

</body>

</html>