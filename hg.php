<?php

// Reads the variables sent via POST from our gateway
$sessionId   = $_POST["sessionId"];
$serviceCode = $_POST["serviceCode"];
$phoneNumber = $_POST["phoneNumber"];
$text        = $_POST["text"];

if ( $text == "" ) {

	 // This is the first request. Note how we start the response with CON
	 $response  = "CON Welcome to JAMB result checker \n";
	 $response .= "1. Check my result \n";
	 $response .= "2. Buy scratch PIN using your bank account \n";
         $response .= "3. Exit \n";
          $response .= "4. Enter 1,2,3 to proceed ";
 
}

else if ( $text == "1" ) {
  // Business logic for first level response
  $response = "CON Your name is IBRAHIM ABBAS \n";
  $response .= "1. Enter 1, to view your result  \n";
  $response .= "2. Enter 2, to go back to the previous menu \n";
   $response .= "3. Enter 3, to exit";
 }
 
 else if($text == "2") {
 
  // Business logic for first level response

  // This is a terminal request. Note how we start the response with END
  $response = "CON Your name is IBRAHIM ABBAS  \n";
   $response .= "1. Enter 1, to deduct 300NGN from you bank account \n";
    $response .= "2. Enter 2, to go back to the prevous menu  \n";
     $response .= "3. Enter , to go back to the main menu  \n";
      $response .= "4. Enter 4, to exit";
 }

 
 else if($text == "1*1") {
 
  // This is a second level response where the user selected 1 in the first instance
 // $accountNumber  = "ACC1001";
  // This is a terminal request. Note how we start the response with END
  $response = "END Congratulation!!! IBRAHIM ABBAS  your result is:  1. English language 50points. 2. Mathematics, 50points. 3. Physics, 50points.  4. Chemistry,60points.  TOTAL:  210points. You will recieve an sms shortly";
  // $response = "1. English language 50points \n";
 //  $response = "2. Mathematics, 50points \n";
 //  $response = "3. Physics, 50points\n";
  // $response = "4. Chemistry,60points \n";
 //  $response = "5. TOTAL:  210points\n";
 //$response = " BYE.";
 }
	
 else if ( $text == "1*2" ) {
  
	 // This is a second level response where the user selected 1 in the first instance
	// $balance  = "NGN 10,000";
	 // This is a terminal request. Note how we start the response with END
	 $response = "END Your PIN is: 1a2b3c4d5e \n";
          //$response .= "1. Enter 1, to go back to the prevous menu  \n";
           //$response .= "2. Enter 2, to go back to the main menu \n";
            //$response .= "3. Enter 3, to exit  ";
}

// Print the response onto the page so that our gateway can read it
header('Content-type: text/plain');
echo $response;

// DONE!!!
?>