<?php
//read
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "airost";

    $date=$_POST['date'];
	$timeslot=$_POST['timeslot'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];
    $amount=$_POST['amt'];
    $pay_to='FriendsBook Sdn Bhd';


    $userName = $_POST['name'];
    $userEmail = $_POST['email'];
    $amount = $_POST['amt'];
    

    $to = "";
    $subject = "FriendsBook";

    $to = $_POST['email'];
    
    $body = "";           
       
    $body .= "We have received your order are very excited to meet you virtually on Zoom as detailed below :". "\n\n";

    $body .="Instruction on Zoom meeting". "\n".
    "In preparation for your upcoming virtual meeting, please do the following:
         
     1.    Download Zoom Application.
     2.    Ensure your internet connection is stable.
     3.    Test your webcam, speaker and microphone to ensure that they are working properly.
     4.    Silence your other devices before joining the meeting. 
     5.    At the scheduled time, click on “Join Zoom meeting” to connect.
         
     If you experience technical difficulties during your meeting, exit Zoom and re-join.  If you are still have difficulties, please contact us at 03-2711 8428 / 016-6536118.". "\n\n". "We look forward to meeting you virtually! ". "\n\n";


    $body .= "Topic: Friend's Book Zoom Meeting". "\r\n"." Join Zoom Meeting:". "\r
    https://us04web.zoom.us/j/79294026421?pwd=dzF3bVFZMDVCL25QdUlaKzNxcVZqUT09
    Meeting ID: 792 9402 6421
    Passcode: 31YFv2"."\n\n";


    $body .="Date: ". $date."\r\n";
    $body .="Amount: ". $amount. "\r\n";

    $body .= "Yours faithfully," ."\r\n". "Friends Book SDN BHD   "."\r\n";
   
                                                        
    
    mail ($to, $subject, $body);

    $conn = mysqli_connect($servername, $username, $password, $dbname);

    $sql = "INSERT payment(date,timeslot,email,phone,amount,pay_to) VALUES('$date','$timeslot','$email','$phone','$amount','$pay_to')";

    $result = mysqli_query($conn, $sql);

    header ("Location: cardpayment.php");

	
?>
 
 
