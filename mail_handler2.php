<?php 
if(isset($_POST['submit'])){
    $to = "info@noshadha.com"; // this is your Email address
    $from = $_POST['Email']; // this is the sender's Email address
    $Client_Full_Name = $_POST['Client_Full_Name'];
    $Invoice_Number = $_POST['Invoice_Number'];
    $Email = $_POST['Email'];
    $Tell = $_POST['Tell'];
    $Country = $_POST['Country'];
    $City = $_POST['City'];
    $Postal_Zip_Code = $_POST['Postal_Zip_Code'];
    $Amount = $_POST['Amount'];
    $Currency = $_POST['Currency'];
    $Invoice_purpose = $_POST['Invoice_purpose'];
    $By_making_a_mark_in_this_box_I_confirm_and_accept_the_Noshadha_Law_Firm_Public_Offer_Contract_on_services = $_POST['By_making_a_mark_in_this_box_I_confirm_and_accept_the_Noshadha_Law_Firm_Public_Offer_Contract_on_services'];
    $By_making_a_mark_in_this_box_I_confirm_and_accept_consent_for_processing_of_my_personal_data = $_POST['By_making_a_mark_in_this_box_I_confirm_and_accept_consent_for_processing_of_my_personal_data'];
    $By_making_a_mark_in_this_box_I_confirm_and_accept_notice_on_the_rights_determined_by_the_legislation_in_the_sphere_of_personal_data_protection_the_purposes_for_processing_of_personal_data = $_POST['By_making_a_mark_in_this_box_I_confirm_and_accept_notice_on_the_rights_determined_by_the_legislation_in_the_sphere_of_personal_data_protection_the_purposes_for_processing_of_personal_data'];
    $By_making_a_mark_in_this_box_I_confirm_and_accept_fee_terms = $_POST['By_making_a_mark_in_this_box_I_confirm_and_accept_fee_terms'];  
    $I_hereby_confirm_that_the_information_provided_in_this_online_payment_form_is_authentic = $_POST['I_hereby_confirm_that_the_information_provided_in_this_online_payment_form_is_authentic'];

    $subject = $Client_Full_Name . " Online Payment";
    $subject2 = $Client_Full_Name . " Online Payment";
   $message = $Client_Full_Name . " wrote the following:" . "\n\n"  . "Client Full Name :" . $_POST['Client_Full_Name']. "\n\n"  . "Invoice Number :" . $_POST['Invoice_Number']."\n\n"  .  "Email :" . $_POST['Email']. "\n\n"  . "Tel:" . $_POST['Tell'] . "\n\n"  .  "Country :" . $_POST['Country'] . "\n\n"  .  "City :" . $_POST['City'] . "\n\n"  .  "Postal\Zip Code :" . $_POST['Postal_Zip_Code'] . "\n\n"  . "Please choose a subject close to your invoice purpose : " . $_POST['Invoice_purpose'] . "\n\n"  .  "Amount :" . $_POST['Amount'] . "\n\n"  .  "Currency :" . $_POST['Currency'] . "\n\n"  .  "By making a mark in this box, I confirm and accept the Noshadha Law Firm Public Offer Contract on services (please click here to read, only English language)! :" . $_POST['By_making_a_mark_in_this_box_I_confirm_and_accept_the_Noshadha_Law_Firm_Public_Offer_Contract_on_services'] . "\n\n"  .  "By making a mark in this box I confirm and accept consent for processing of my personal data :" . $_POST['By_making_a_mark_in_this_box_I_confirm_and_accept_consent_for_processing_of_my_personal_data'] . "\n\n"  .  "By making a mark in this box I confirm and accept notice on the rights determined by the legislation in the sphere of personal data protection the purposes for processing of personal data :" . $_POST['By_making_a_mark_in_this_box_I_confirm_and_accept_notice_on_the_rights_determined_by_the_legislation_in_the_sphere_of_personal_data_protection_the_purposes_for_processing_of_personal_data'] . "\n\n"  . "By making a mark in this box I confirm and accept fee terms :" . $_POST['By_making_a_mark_in_this_box_I_confirm_and_accept_fee_terms'] . "\n\n" . "I hereby confirm that the information provided in this online payment form is authentic :" . $_POST['I_hereby_confirm_that_the_information_provided_in_this_online_payment_form_is_authentic'];  
   
        $message2 = "Here is a copy of your message " . "\n\n"  . "Client Full Name :" . $_POST['Client_Full_Name']. "\n\n"  . "Invoice Number :" . $_POST['Invoice_Number']."\n\n"  .  "Email :" . $_POST['Email']. "\n\n"  . "Tel :" . $_POST['Tell'] . "\n\n"  .  "Country :" . $_POST['Country'] . "\n\n"  .  "City :". $_POST['City'] . "\n\n"  .  "Postal\Zip Code :" . $_POST['Postal_Zip_Code'] . "\n\n"  . "Please choose a subject close to your invoice purpose : " . $_POST['Invoice_purpose'] . "\n\n"  .  "Amount :" . $_POST['Amount'] . "\n\n"  .  "Currency :" . $_POST['Currency'] . "\n\n"  .  "By making a mark in this box, I confirm and accept the Noshadha Law Firm Public Offer Contract on services (please click here to read, only English language)! :" . $_POST['By_making_a_mark_in_this_box_I_confirm_and_accept_the_Noshadha_Law_Firm_Public_Offer_Contract_on_services'] . "\n\n"  .  "By making a mark in this box I confirm and accept consent for processing of my personal data :" . $_POST['By_making_a_mark_in_this_box_I_confirm_and_accept_consent_for_processing_of_my_personal_data'] . "\n\n"  .  "By making a mark in this box I confirm and accept notice on the rights determined by the legislation in the sphere of personal data protection the purposes for processing of personal data :" . $_POST['By_making_a_mark_in_this_box_I_confirm_and_accept_notice_on_the_rights_determined_by_the_legislation_in_the_sphere_of_personal_data_protection_the_purposes_for_processing_of_personal_data'] . "\n\n"  . "By making a mark in this box I confirm and accept fee terms :" . $_POST['By_making_a_mark_in_this_box_I_confirm_and_accept_fee_terms'] . "\n\n" .  "I hereby confirm that the information provided in this online payment form is authentic :" . $_POST['I_hereby_confirm_that_the_information_provided_in_this_online_payment_form_is_authentic'];  

    $headers = "From:" . $from;
    $headers2 = "From:" . $to;
    mail($to,$subject,$message,$headers);
    mail($from,$subject2,$message2,$headers2); // sends a copy of the message to the sender
    header("Location: https://www.liqpay.ua/en/checkout/i95075839317");
    // You can also use header('Location: thank_you.php'); to redirect to another page.
    // You cannot use header and echo together. It's one or the other.
    }
?>