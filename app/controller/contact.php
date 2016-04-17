<?php
$http_referer = $_SERVER['HTTP_REFERER'];
$query = filter_var(urldecode(explode('?',$http_referer)[1]), FILTER_SANITIZE_STRING);
$form = explode('&', $query);
foreach($form as $input) {
    echo '<script>console.log("'.$input.'");</script>';
}
echo '<script>console.log("'.$query.'");</script>';

$name_query_string = $form[0];
$email_query_string = $form[1];
$phone_query_string = $form[2];
$message_query_string = $form[3];

$name = explode('=', $name_query_string)[1];
$first_name = explode(' ', $name)[0];
$email_address = explode('=', $email_query_string)[1];
$phone = explode('=', $phone_query_string)[1];
$message = explode('=', $message_query_string)[1];

// Create the email and send the message
$to = 'omierwalls@gmail.com'; // Add your email address inbetween the '' replacing yourname@yourdomain.com - This is where the form will send a message to.
$email_subject = "Website Contact Form:  ".$name;
$email_body = "You have received a new message from your website contact form.\n\n Here are the details:\n\nName: ".$name."\n\nEmail: ".$email_address."\n\nPhone: ".$phone."\n\nMessage:\n".$message;
$headers = "From: noreply@omiewalls.com\n"; 
$headers .= "Reply-To: ".$email_address;	
mail($to,$email_subject,$email_body,$headers);
echo "Thank you ".$first_name."! Message received! I will get back to you shortly. In the meantime, please checkout my <a href='#/resume'>resume</a> or <a href='#/portfolio'>portfolio</a> if you haven't already!";
?>

<hr>