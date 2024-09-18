<?php
//ob start helps with headers that have already been sent, 

ob_start();
require basePath('core/config.php');


//Grabbing Namespaces from the phpmailer folders
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Uses composer to autoload. Not part of phpMailer
require basePath('vendor/autoload.php');

//Prevent Users from accesing from URL
if ($_SERVER['REQUEST_METHOD'] !== 'POST'){
    header("Location: /");
    ob_end_flush();
    exit();
//Redirects to homepage.





}else if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST)) {
    
    $name = $_POST["name"];
    $email = $_POST["email"];
    $subject = $_POST["subject"];
    $message = $_POST["message"];
    $lastname = $_POST["lastName"];

     // Handle case where one or more POST fields are empty
    if (empty($name) || empty($email) || empty($subject) || empty($message)) {
       
    
  
      
        header("Location: ../?form=empty#contact");
        ob_end_flush();
        exit;
    
     // Handle case where the name,subject, and message field does not match the expected pattern
    } else if (!preg_match("/^[a-zA-Z'\-\s]+$/", $name) || !preg_match("/^[a-zA-Z'\-\s]+$/", $subject) || !preg_match("/^[\w\s\d.,?!-]+$/", $message)) {
        header("Location: ../?form=invalid#cf1");
        echo "Invalid input format. Please check your input fields.";
        ob_end_flush();
        exit;
    
     // Handle bad emails
    }else if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        header("Location: ../?form=emailerror#cf1");
        ob_end_flush();
        exit();

    
    } 
        
       
        // Proceed with further processing if the email address is valid
        // For example:
     
        
    
    
    //HoneyPot Trap for Spammers
    else if(!empty($lastname)){
        header("Location: ../?succes=no");
        ob_end_flush();
        exit;
    

    }else if( $_POST['email']){

        $api_key = $APIKEY ;

        $ch = curl_init();

        curl_setopt_array($ch, [
            CURLOPT_URL => "https://emailvalidation.abstractapi.com/v1/?api_key=$api_key&email=$email",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_FOLLOWLOCATION => true
        ]);

        $response = curl_exec($ch);

        curl_close($ch);

        $data = json_decode($response, true);

   
       
        if ($data['deliverability'] === "UNDELIVERABLE") {
            
            header("Location: ../?form=emailvalerror");
            exit();
            
        }

        if ($data["is_disposable_email"]["value"] === true) {
            
         
            header("Location: ../?form=emailvalerror");
            exit("Disposable");
        }

        header("Location: ../?form=success#cf1");
    }
        

    
    
    try{

        $encodedMessage = htmlspecialchars($message, ENT_QUOTES, 'UTF-8');
        $sanitized_input_message = strip_tags($encodedMessage);
        $decodedMessage = html_entity_decode($sanitized_input_message, ENT_QUOTES, 'UTF-8');
    

//Creates an instance for PHPMailer. This argument throws an exception if there is a problem
$mail = new PHPMailer(true);



//Letting php mailer know we are using SMTP by calling SMTP method
$mail->isSMTP();
$mail->SMTPAuth = true;

//Connecting to SMTP Server using definitions from config.php
$mail->Host = MAILHOST;
$mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
$mail->Port = PORT;


$mail->Username = USERNAME;
$mail->Password = PASSWORD;


$mail->addReplyTo($email, $name); // Set reply-to address to form input

//setFrom is the above variables 

/*works for gmail*/
//$mail->setFrom($email, "Contact Form Inquiry");
$mail->setFrom(USERNAME, "Contact Form Inquiry");
//"Devin" Name is optional
$mail->addAddress(USERNAME);

$emailReplyLink = $email;

$mail->Subject = $subject;
$mail->Body = 
"Name: {$name}
\nContact Email: mailto:{$emailReplyLink}
\nSubject: {$subject}

\n------------------------------------------------------------
\n\nContact Message: 
\n{$decodedMessage}

";
$mail->send();

//Must have the .php at end to work. The routing i have set will not do anythi
/*header("Location: /sent.php");*/
view("sent.view.php", [
    'heading' => "GTS | Home"
   
]);

exit(); 
/*
he Exception class is from the PHPMailer library, and the \Exception class is the general PHP exception class. 
Using both catch blocks ensures that you can handle both PHPMailer-specific exceptions and general exceptions that may occur during the process.


*/
}catch (Exception $e) {
    view("404.php", [
        'heading' => "GTS | Fail"
       
    ]);

    echo 'Message could not be sent. Mailer Error: ';
    //echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
    
} catch (\Exception $e) {
    echo 'An unexpected error occurred: ', $e->getMessage();
}
   
}

ob_end_flush();

