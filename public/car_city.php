
<?php require_once("../resources/config.php"); ?>

<?php include(TEMPLATE_FRONT . DS . "header.php"); ?>

    <!-- Page Content -->
    <div class="container">

        <div class="row">



            <div class="col-md-9">

<!-- Our Cars -->
            <div id="resource_details">
            <h2 class="resource_name">City</h2>
            <a id="lbimg_1" class="withlightbox" style="display:inline-block;position:relative;" target="_self" href="javascript:js_show_full_img(1,1,1)" onmouseover="document.getElementById('lbimginfo_1').style.visibility='visible';" onmouseout="document.getElementById('lbimginfo_1').style.visibility='hidden';"><span class="lbimginfo" id="lbimginfo_1" style="visibility: visible;"></span><img src="https://s3.amazonaws.com/planyo/2753_5893_82187_R.jpg" style="max-width:100%;width:600px;"></a><div style="display:none" id="C1WH"><img src="https://s3.amazonaws.com/planyo/2753_5893_82187_R.jpg" id="full1"><span id="full1info"></span></div><img style="display:none" src="http://www.planyo.com/slideshow/btn-prev-dsbld.png"><img style="display:none" src="http://www.planyo.com/slideshow/btn-next-dsbld.png"><img style="display:none" src="http://www.planyo.com/slideshow/btn-prev-hvr.png"><img style="display:none" src="http://www.planyo.com/slideshow/btn-next-hvr.png"><img style="display:none" src="http://www.planyo.com/slideshow/btn-play-hvr.png"><img style="display:none" src="http://www.planyo.com/slideshow/btn-pause-hvr.png"><img style="display:none" src="http://www.planyo.com/slideshow/btn-close-hvr.png"><div style="overflow:hidden;padding:5px;display:none;position:absolute;background:black;filter:alpha(opacity=85);-moz-opacity:.85;opacity:.85;z-index:990" class="bg_hider" id="bg_hider" onmouseup="js_close_full_img()"></div><div style="z-index:999;display:none;position:absolute;filter:alpha(opacity=100);-moz-opacity:1;opacity:1;border:15px solid black;background-color:black;border-radius:10px;-moz-border-radius:10px;-webkit-border-radius:10px" id="full_img_div" class="full_img_div"><img id="full_img" onmouseover="over_full_image ();" onmouseout="out_full_image ();"><br><a id="on_img_prev" style="display:none;position:absolute; top:20px; z-index:1000;" onmouseover="over_img_nav ();" onmouseout="out_img_nav ();" href="javascript:js_prev_full_img_by_prev()"></a><a id="on_img_next" style="display:none;position:absolute; top:20px; z-index:1000;" onmouseover="over_img_nav ();" onmouseout="out_img_nav ();" href="javascript:js_next_full_img_by_next()"></a><div style="background-color:black;color:white;padding-top:15px; font: normal 15px Georgia,Trebuchet,Times New Roman;" id="img_info"></div></div><script type="text/javascript">
            var sc = document.createElement("script");
            sc.src = "http://www.planyo.com/slideshow/planyo-slideshow.js?v=5";
            sc.type="text/javascript";
            document.getElementsByTagName("head")[0].appendChild(sc);
            </script>

            <div class="description">Minis are really cool rental cars. They are stylish, economical and simple to drive. Rent a Mini and experience an adventure today!<br>
            <br>
            Features:<br>
            • 4 seats<br>
            • CD and Radio Boost<br>
            • Manual or automatic transmission<br>
            • Power steering<br>
            • Available in a range of colours<br>
            • Chilli Pack and chrome throughout<br>
            - Alloy wheels<br>
            </div>
            <div id="properties">

            </div>

                    <!-- Original Code -->
            <div class="button_container"><h3><a class="button" href="login_carrent.php">Click Here!</a> to Check Your Eligibility to Calculate Fare.</h3>
            </div>

<!-- Our Cars -->

                <div class="row">


                </div><!-- Row ends here -->

            </div>

        </div>

    </div>
    <!-- /.container -->

<!-- Footer Here -->
<?php include(TEMPLATE_FRONT . DS . "footer.php") ?>