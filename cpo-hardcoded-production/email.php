<?php 
    $firstName = $_POST['First_Name'];
    $lastName = $_POST['Last_Name'];
    $email = $_POST['Email'];
    $phone = $_POST['Phone'];
    $address = $_POST['Address'];
    $city = $_POST['City'];
    $state = $_POST['State'];
    $zipCode = $_POST['Zip_Code'];
    $propertyType = $_POST['Property_Type'];
    $interest = $_POST['Interested_In'];
    $referredBy = $_POST['How_Did_You_Hear_About_Us'];
    $question = $_POST['Questions'];

    $mailFrom = "scheduling@camelotpropertiesonline.com";
    $mailSubject = "Owner Inquiry About Property Management";
    $mailBody = "Name: ".$firstName." ".$lastName."\n\n"."Email: ".$email."\n\n"."Phone: ".$phone."\n\n"."Address: ".$address." ".$city." ".$state." ".$zipCode."\n\n"."Property Type: ".$propertyType."\n\n"."Interested In: ".$interest."\n\n"."How Did You Hear About Us?: ".$referredBy."\n\n"."Questions / How Can We Help?: ".$question;

    $mailTo = "bonnie@camelotpropertiesonline.com, dustin@camelotpropertiesonline.com";
    $headers = "From: ".$mailFrom." \r\n";
    $headers .= "To: Bonnie Haynes <bonnie@camelotpropertiesonline.com> \r\n";
    $headers .= "CC: Dustin Woodley <dustin@camelotpropertiesonline.com> \r\n";

    mail($mailTo,$mailSubject,$mailBody,$headers);
    header("Location: sent.html");
?>