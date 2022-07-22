<?php 
if(isset($_POST['submit'])){
    $to = "dann9313@gmail.com"; // this is your Email address
    $from = "cooldan477@gmail.com"; // this is the sender's Email address
    $date = $_POST['date'];
    
    

    $subject = "test";
    $message =   "Date:" . $_POST['date'];  
   

    $headers = "From:" . $from;
    mail($to,$subject,$message,$headers);

    }
?>