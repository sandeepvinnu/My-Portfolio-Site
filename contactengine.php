<?php
    $Name = $_POST['Name'];    //getting name from html page
    $Email = $_POST['Email'];     //getting email from html page
    $Message = $_POST['Message'];     //getting message from html page


    $EmailFrom = "sandeepvinnu852@gmail.com";   //your first email from where you want to send email
    $Subject = $_POST['Name']." Contacted you from your portfolio site";  //mail subject
    
    // prepare email body text
    $Body = "Name: $Name.\n".
              "Eamil: $Email.\n".
                "Message: $Message.\n";            
    
    $EmailTo = "sunkumar.grace@gmail.com";   //your second email where you want to receive contact form content
    $headers = "From: $EmailFrom \r\n";
    $headers .= "Reply-To: $Email \r\n";

    mail($EmailTo, $Subject, $Body, $headers);

    header("Location: index.html");

?>
