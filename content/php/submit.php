<?php 
if(isset($_POST['url']) && $_POST['url'] == '')
{

    //The form was submitted 
    $ouremail = 'renaud@rolisteam.org'; 
    // Important: if we add any form fields to the HTML, 
    // and want them included in the email, we will need to add them here also 
    $body = "This is the form that was just submitted: 
    Name: $_POST[name] 
    E-Mail: $_POST[email] 
    Message: $_POST[message]"; 
    // From:
    // Use the submitters email if they supplied one 
    // (and it isn't trying to hack our form). 
    // Otherwise send from our email address. 
    if( $_POST['email'] && !preg_match( "/[\r\n]/", $_POST['email']) ) 
    { 
        $headers = "From: $_POST[email]"; 
    } 
    else 
    { 
        $headers = "From: $ouremail"; 
    } 
    // finally, send the message
    mail($ouremail, 'Contact Form Rolisteam', $body, $headers ); 
    header('Location: ../../thankyou.html'); } 

?>
