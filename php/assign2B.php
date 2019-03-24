<?php
//variables to store form data 
$active = $_GET['active'];
$fname = isset($_GET['fname']) ? $_GET['fname'] : '';
$lname = $_GET['lname'];
$pos = $_GET['pos'];
$phone =  $_GET['phone'];
$email =  $_GET['email'];

if($active == 'on'){ //checks to see if active is selected
    echo "Greetings! $fname $lname currently has the title $pos and can be reached by phone at $phone or email at $email";
}
else {

    echo "$fname $lname is NOT active";
}
?>