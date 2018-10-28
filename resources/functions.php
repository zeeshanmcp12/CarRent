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


function login_user(){

    if(isset($_POST['submit'])){
        $min_age = escape_string($_POST['cust_min_age']);
        //$max_age = escape_string($_POST['cust_max_age']);
        $license_activation = escape_string($_POST['license_active_date']);
        $license_cancellation = escape_string($_POST['license_cancel_date']);
        $city = escape_string($_POST['cust_city']);
        
        // $activation_date = '01/01/2018';
        // $cancel_date = '12/31/2022';
        // $date_arr = explode('/', $activation_date, $cancel_date);


        // $query = query("SELECT * FROM eligible_criteria WHERE cust_min_age = '{$min_age}' AND password = '{$password}' ");
        $query = query("SELECT * FROM eligible_criteria");
        confirm($query);

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

/*function send_message(){

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
}*/




/*****************************BACK END FUNCTIONS***********************************/

?>
