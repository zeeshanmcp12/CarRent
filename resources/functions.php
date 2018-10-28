<?php

//Helper functions



function set_message($msg){
    if(!empty($msg)){
        $_SESSION['message'] = $msg;

    }else{
        $msg = "";
    }
    
}

function display_message(){

    if(isset($_SESSION['message'])){

        echo $_SESSION['message'];
        unset($_SESSION['message']);
    }

}


function redirect($location){
    header("Location: $location ");

}

function query($sql){

    global $connection;
    return mysqli_query($connection, $sql);
}

function confirm($result){

    global $connection;
    if(!$result){
        die("QUERY FAILED " . mysqli_error($connection));
    }
}

//This function will save us from SQL injection
function escape_string($string){

    global $connection;
    return mysqli_real_escape_string($connection, $string);
}


function fetch_array($result){

    return mysqli_fetch_array($result);
}


/*****************************FRONT END FUNCTIONS***********************************/
<<<<<<< HEAD

=======
//get products

/* function get_products(){
    $query = query("SELECT * FROM products");
    confirm($query);

    while($row = fetch_array($query)){

        $product = <<<DELIMETER
        
        <div class="col-sm-4 col-lg-4 col-md-4">
            <div class="thumbnail">
            <a href="item.php?id={$row['prod_id']}"><img src="{$row['prod_image']}" alt=""></a>
                <div class="caption">
                    <h4 class="pull-right">&#8360;{$row['prod_price']}</h4>
                    <h4><a href="item.php?id={$row['prod_id']}">{$row['prod_title']}</a>
                    </h4>
                    <p>See more snippets like this online store item at <a target="_blank" href="http://www.bootsnipp.com">Bootsnipp - http://bootsnipp.com</a>.</p>
                    <a class="btn btn-primary" target="_blank" href="cart.php?add={$row['prod_id']}">Add to Cart</a>
                </div>
            </div>
        </div>

DELIMETER;
    echo $product;

    }
} */
//Agar hamne massive amount of strings ko under php tag echo karana ho tu ham DELIMETER ka use karte hain so hame us string main double quotes or single quotes ko exchange karne ki zaroorat na pare.
//Note: <<<DELIMETER k bad ko space nahi hona chahiye or na hi closing DELIMTER main koi space hona chahiye.
//Hamne PKR k liye HTML ki entity &#8360; ko use kiya

/* function get_categories(){
    $query = query("SELECT * FROM categories");
    confirm($query);

    while($row = fetch_array($query)){

$categories_links = <<<DELIMETER
        
        <a href='category.php?id={$row['cat_id']}' class='list-group-item'>{$row['cat_title']}</a>

DELIMETER;
        
    echo $categories_links;

    }
        
} */
//square bracket main agar cat_title nahi likhenge tu categories table k cat_title se data fetch nahi hoga.

/* function get_products_in_cat_page(){
    $query = query("SELECT * FROM products WHERE prod_category_id = " . escape_string($_GET['id']) . " ");
    confirm($query);

    while($row = fetch_array($query)){

$show_product = <<<DELIMETER
        
<div class="col-md-3 col-sm-6 hero-feature">
        <div class="thumbnail">
            <img src="{$row['prod_image']}" alt="">
            <div class="caption">
                <h3>{$row['prod_title']}</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                <p>
                    <a href="#" class="btn btn-primary">Buy Now!</a> <a href="item.php?id={$row['prod_id']} "id= class="btn btn-default">More Info</a>
                </p>
            </div>
        </div>
    </div>

DELIMETER;
    echo $show_product;

    }
} */
//http://placehold.it/800x500


/* function get_products_in_shop_page(){
    $query = query("SELECT * FROM products");
    confirm($query);

    while($row = fetch_array($query)){

$show_product_in_shop_page = <<<DELIMETER
        
<div class="col-md-3 col-sm-6 hero-feature">
        <div class="thumbnail">
            <img src="{$row['prod_image']}" alt="">
            <div class="caption">
                <h3>{$row['prod_title']}</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                <p>
                    <a href="#" class="btn btn-primary">Buy Now!</a> <a href="item.php?id={$row['prod_id']} "id= class="btn btn-default">More Info</a>
                </p>
            </div>
        </div>
    </div>

DELIMETER;
    echo $show_product_in_shop_page;

    }
} */
>>>>>>> a4f61e5f505e09b698a9f059d4e067cbc56f466f

function login_user(){

    if(isset($_POST['submit'])){
<<<<<<< HEAD
        $min_age = escape_string($_POST['cust_min_age']);
        //$max_age = escape_string($_POST['cust_max_age']);
        $license_activation = escape_string($_POST['license_active_date']);
        $license_cancellation = escape_string($_POST['license_cancel_date']);
        $city = escape_string($_POST['cust_city']);
=======
        $min_age = escape_string($_POST['age']);
        $max_age = escape_string($_POST['age']);
        $license_activation = escape_string($_POST['license_active_date']);
        $license_cancellation = escape_string($_POST['license_cancel_date']);
        $city = escape_string($_POST['city']);
>>>>>>> a4f61e5f505e09b698a9f059d4e067cbc56f466f
        
        // $activation_date = '01/01/2018';
        // $cancel_date = '12/31/2022';
        // $date_arr = explode('/', $activation_date, $cancel_date);


        // $query = query("SELECT * FROM eligible_criteria WHERE cust_min_age = '{$min_age}' AND password = '{$password}' ");
        $query = query("SELECT * FROM eligible_criteria");
        confirm($query);

<<<<<<< HEAD
        while ($row = fetch_array($query)) {
            // echo $row['cust_min_age'] . "\n";
            // echo $row['license_active_date'] . "\n";
            // echo $row['license_cancel_date'] . "\n";
            // echo $row['cust_city'] . "\n";

            if(!empty($min_age)){
                echo "Please fill required fields";
            }
            // if(empty($row)){
            //     set_message('Please fill required fields');
            // }
        }

        /*******will be using later on */
        // if(!$min_age < 19 && $max_age > 66 && $city == $_POST['cust_city']){
        //     set_message("You are not Eligible");
        //     //redirect("login.php");
           
        // }


        /* elseif ($license_activation > $_POST['license_active_date'] && $license_cancellation < $_POST['license_cancel_date']) {
=======
        if($min_age > 19 && $max_age < 66 && checkdate($date_arr[0], $date_arr[1] , $date_arr[2])){
            set_message("You are Eligible");
            redirect("farecalculator.php");
           
        }/* elseif ($license_activation > $_POST['license_active_date'] && $license_cancellation < $_POST['license_cancel_date']) {
>>>>>>> a4f61e5f505e09b698a9f059d4e067cbc56f466f
            set_message("You are Eligible");
            redirect("farecalculator.php");

        }else{

            //set_message("You are not Eligible." );
            echo "<h2 class='text-center bg-warning'> You are not Eligible</h2>";
            //redirect("admin");
        } */


    }
}


// {    previous query
//     $min_age = escape_string($_POST['age']);
//     $max_age = escape_string($_POST['age']);
//     $license_activation = escape_string($_POST['licenseActivation']);
//     $license_cancellation = escape_string($_POST['licenseCancellation']);
//     $city = escape_string($_POST['city']);

//     // $query = query("SELECT * FROM eligible_criteria WHERE cust_min_age = '{$min_age}' AND password = '{$password}' ");
//     $query = query("SELECT * FROM eligible_criteria");
//     confirm($query);

//     if(mysqli_num_rows($query) == 0){

//         set_message("Username or Password is incorrect");
//         redirect("login.php");

//     }else{

//         set_message("Welcome to Admin {$username} " );
//         redirect("admin");
//     }
// }

<<<<<<< HEAD
/*function send_message(){
=======
function send_message(){
>>>>>>> a4f61e5f505e09b698a9f059d4e067cbc56f466f

    if(isset($_POST['submit'])){

        $to         = "someEmail@gmail.com";
        $from_name  = $_POST['name'];
        $subject    = $_POST['subject'];
        $email      = $_POST['email'];
        $message    = $_POST['message'];

        $headers = "From: {$from_name} {$email}";

        $result = mail($to, $subject, $message, $headers);

        if(!$result){
            set_message("ERROR");
            redirect("contact.php");
        }
        else{
             set_message("Message sent successfully.");
             redirect("contact.php");
        }
    }
<<<<<<< HEAD
}*/
=======
}
>>>>>>> a4f61e5f505e09b698a9f059d4e067cbc56f466f




/*****************************BACK END FUNCTIONS***********************************/

?>
