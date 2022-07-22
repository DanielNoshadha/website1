<?php
if(isset($_POST['submit'])){
    $to = "info@noshadha.com"; // this is your Email address
    $from = $_POST['Email']; // this is the sender's Email address
    $Name = $_POST['Name'];
    $Surname = $_POST['Surname'];
    $Middle_name = $_POST['Middle_name'];
    $Citizenship = $_POST['Citizenship'];
    $Other_citizenship = $_POST['Other_citizenship'];
    $Previous_citizenship = $_POST['Previous_citizenship'];
    $Country_of_residence = $_POST['Country_of_residence'];
    $Full_address = $_POST['Full_address'];
    $Tel = $_POST['Tel'];
    $Mob = $_POST['Mob'];
    $Web_site = $_POST['Web_site'];
    $Organization_full_name = $_POST['Organization_full_name'];
    $Organization_registered_number = $_POST['Organization_registered_number'];
    $Organization_registration_territory = $_POST['Organization_registration_territory'];
    $Organization_full_address = $_POST['Organization_full_address'];
    $Organization_authority_name = $_POST['Organization_authority_name'];
    $Comment = $_POST['Comment'];
    $IP = $_POST['IP'];
    $I_confirm_that_the_information_provided_in_this_primary_online_application_is_authentic = $_POST['I_confirm_that_the_information_provided_in_this_primary_online_application_is_authentic'];
    $I_confirm_that_I_am_not_convicted_or_suspected_of_crime = $_POST['I_confirm_that_I_am_not_convicted_or_suspected_of_crime'];
    $I_confirm_and_accept_consent_for_processing_of_my_personal_data = $_POST['I_confirm_and_accept_consent_for_processing_of_my_personal_data'];
    $I_confirm_and_accept_notice_on_the_rights_determined_by_the_legislation_in_the_sphere_of_personal_data_protection_the_purposes_for_processing_of_personal_data = $_POST['I_confirm_and_accept_notice_on_the_rights_determined_by_the_legislation_in_the_sphere_of_personal_data_protection_the_purposes_for_processing_of_personal_data'];

    $subject = $Name . " " . $Surname . " LSFP online form";
    $subject2 = $Name . " " . $Surname . " LSFP online form";
    $message = $Name . " " . $Suranme . " wrote the following:" . "\n\n"  . "Name:" . $_POST['Name']. "\n\n"  . "Surname:" . $_POST['Surname']."\n\n"  .  "Middle name:" . $_POST['Middle_name']. "\n\n"  . "Citizenship:" . $_POST['Citizenship']."\n\n"  .  "Other citizenship:" . $_POST['Other_citizenship']."\n\n"  .  "Previous citizenship:" . $_POST['Previous_citizenship']. "\n\n"  ."Country of residence:" . $_POST['Country_of_residence']. "\n\n"  . "Full address:" . $_POST['Full_address']. "\n\n"  . "Tel:" . $_POST['Tel']. "\n\n"  . "Mob:" . $_POST['Mob']."\n\n"  . "Web site:" . $_POST['Web_site']. "\n\n"  . "Email:" . $_POST['Email']. "\n\n"  . "Organization full name:" . $_POST['Organization_full_name']. "\n\n"  . "Organization registered number:" . $_POST['Organization_registered_number']. "\n\n"  . "Organization registration territory:" . $_POST['Organization_registration_territory']. "\n\n"  . "Organization full name:" . $_POST['Organization_full_name']. "\n\n"  . "Organization authority name:" . $_POST['Organization_authority_name'].  "\n\n"  ."Please provide your project information (Target, type (credit or credit line), amount, currency, term and information of investment/ credit project):". $_POST['Comment']. "\n\n"  ."I confirm that the information provided in this primary online application is authentic -". $_POST['I_confirm_that_the_information_provided_in_this_primary_online_application_is_authentic'].  "\n\n"  ."I confirm that I am not convicted or suspected of crime -". $_POST['I_confirm_that_I_am_not_convicted_or_suspected_of_crime'].  "\n\n"  ."I confirm and accept consent for processing of my personal data -". $_POST['I_confirm_and_accept_consent_for_processing_of_my_personal_data']. "\n\n"  ."I confirm and accept notice on the rights determined by the legislation in the sphere of personal data protection the purposes for processing of personal data -".  $_POST['I_confirm_and_accept_notice_on_the_rights_determined_by_the_legislation_in_the_sphere_of_personal_data_protection_the_purposes_for_processing_of_personal_data']."\n\n"  ."IP address:" . $_POST['IP'];

         $message2 = "Here is a copy of your message " . "\n\n"  . "Name:" . $_POST['Name']. "\n\n"  . "Surname:" . $_POST['Surname']."\n\n"  .  "Middle name:" . $_POST['Middle_name']. "\n\n"  . "Citizenship:" . $_POST['Citizenship']."\n\n"  .  "Other citizenship:" . $_POST['Other_citizenship']."\n\n"  .  "Previous citizenship:" . $_POST['Previous_citizenship']. "\n\n"  ."Country of residence:" . $_POST['Country_of_residence']. "\n\n"  . "Full address:" . $_POST['Full_address']. "\n\n"  . "Tel:" . $_POST['Tel']. "\n\n"  . "Mob:" . $_POST['Mob']."\n\n"  . "Web site:" . $_POST['Web_site']. "\n\n"  . "Email:" . $_POST['Email']. "\n\n"  . "Organization full name:" . $_POST['Organization_full_name']. "\n\n"  . "Organization registered number:" . $_POST['Organization_registered_number']. "\n\n"  . "Organization registration territory:" . $_POST['Organization_registration_territory']. "\n\n"  . "Organization full name:" . $_POST['Organization_full_name']. "\n\n"  . "Organization authority name:" . $_POST['Organization_authority_name'].  "\n\n"  ."Please provide your project information (Target, type (credit or credit line), amount, currency, term and information of investment/ credit project):".$_POST['Comment'].  "\n\n"  ."I confirm that the information provided in this primary online application is authentic -". $_POST['I_confirm_that_the_information_provided_in_this_primary_online_application_is_authentic'].  "\n\n"  ."I confirm that I am not convicted or suspected of crime -". $_POST['I_confirm_that_I_am_not_convicted_or_suspected_of_crime'].  "\n\n"  ."I confirm and accept consent for processing of my personal data -". $_POST['I_confirm_and_accept_consent_for_processing_of_my_personal_data']. "\n\n"  ."I confirm and accept notice on the rights determined by the legislation in the sphere of personal data protection the purposes for processing of personal data -".  $_POST['I_confirm_and_accept_notice_on_the_rights_determined_by_the_legislation_in_the_sphere_of_personal_data_protection_the_purposes_for_processing_of_personal_data'];
    $headers = "From:" . $from;
    $headers2 = "From:" . $to;
    mail($to,$subject,$message,$headers);
    mail($from,$subject2,$message2,$headers2); // sends a copy of the message to the sender
    $link_address = 'http://noshadha.com/';
    echo "Шановний заявнику.<br /><br />";
    echo "Дякую.<br />";
    echo "Вашу заявку надіслано. Ми зв'яжемося з вами найближчим часом.<br /><br />";
    echo "<a href='$link_address'>Noshadha Law Firm</a>";
    // You can also use header('Location: thank_you.php'); to redirect to another page.
    // You cannot use header and echo together. It's one or the other.
    }
?>
