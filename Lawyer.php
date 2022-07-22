<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);
if(isset($_POST['submit'])){
    $to = "info@noshadha.com"; // this is your Email address
    $from = $_POST['Email']; // this is the sender's Email address
    $Name = $_POST['Name'];
    $Surname = $_POST['Surname'];
    $Date_of_birth = $_POST['Date_of_birth'];
    $Nationality = $_POST['Nationality'];
    $Country_of_resident = $_POST['Country_of_resident'];
    $Tel = $_POST['Tel'];
    $Fax = $_POST['Fax'];
    $Full_address = $_POST['Full_address'];
    $Spesialisations = $_POST['Spesialisations'];
    $Education = $_POST['Education'];
    $Current_Position = $_POST['Current_Position'];
    $Career = $_POST['Career'];
    $Experience_in_Specialization = $_POST['Experience_in_Specialization'];
    $Publications = $_POST['Publications'];
    $Professional_membership_and_licenses = $_POST['Professional_membership_and_licenses'];
    $Languages = $_POST['Languages'];
    $Bar = $_POST['Bar'];
    $Bar1 = $_POST['Bar1'];
    $practice = $_POST['practice'];
    $practice1 = $_POST['practice1'];
    $news = $_POST['news'];
    $post = $_POST['post'];
    $convicted = $_POST['convicted'];
    $I_confirm_that_the_information_provided_in_this_primary_online_application_is_authentic = $_POST['I_confirm_that_the_information_provided_in_this_primary_online_application_is_authentic'];
    $I_confirm_that_I_am_not_convicted_or_suspected_of_crime = $_POST['I_confirm_that_I_am_not_convicted_or_suspected_of_crime'];
    $I_confirm_and_accept_consent_for_processing_of_my_personal_data = $_POST['I_confirm_and_accept_consent_for_processing_of_my_personal_data'];
    $I_confirm_and_accept_notice_on_the_rights_determined_by_the_legislation_in_the_sphere_of_personal_data_protection_the_purposes_for_processing_of_personal_data = $_POST['I_confirm_and_accept_notice_on_the_rights_determined_by_the_legislation_in_the_sphere_of_personal_data_protection_the_purposes_for_processing_of_personal_data'];

    $subject = $Name . " " . $Surname . " ONLINE APPLICATION FORM TO APPLY FOR JOINING LAWYERS TEAM OF NOSHADHA INTERNATIONAL LAW FIRM";
    $subject2 = $Name . " " . $Surname . " ONLINE APPLICATION FORM TO APPLY FOR JOINING LAWYERS TEAM OF NOSHADHA INTERNATIONAL LAW FIRM";
   $message = $Name . " " . $Surname . " wrote the following:" . "\n\n"  . "Name:" . $_POST['Name']. "\n\n"  . "Surname:" . $_POST['Surname']."\n\n"  .  "Date of birth:" . $_POST['Date_of_birth']. "\n\n"  . "Nationality:" . $_POST['Nationality']."\n\n"  .  "Country of resident:" . $_POST['Country_of_resident']."\n\n"  .  "Tel:" . $_POST['Tel']. "\n\n"  ."Fax:" . $_POST['Fax']. "\n\n"  . "Full address:" . $_POST['Full_address']. "\n\n"  . "Spesialisations:" . $_POST['Spesialisations']. "\n\n"  . "Education:" . $_POST['Education']."\n\n"  . "Current Position:" . $_POST['Current_Position']. "\n\n"  . "Career:" . $_POST['Career']. "\n\n"  . "Experience in Specialization:" . $_POST['Experience_in_Specialization']. "\n\n"  . "Publications:" . $_POST['Publications']. "\n\n"  . "Professional membership and licenses:" . $_POST['Professional_membership_and_licenses']. "\n\n"  . "Languages:" . $_POST['Languages']. "\n\n"  . "Do you have any Bar admission?:" . $_POST['Bar']. "\n\n"  . "Specify name of the Bar:" . $_POST['Bar1']. "\n\n"  . "Do you practice law in any organization, firm or as an individual lawyer?:" . $_POST['practice']. "\n\n"  . "Specify:" . $_POST['practice1']. "\n\n"  . "Would you like to receive regular information, news, announcements and etc?:" . $_POST['news'].  "\n\n" . "How do you prefer to receive information from Noshadha Law International Firm?:" . $_POST['post'].  "\n\n" . "Have you ever convicted to a disciplinary qualification commission as a lawyer or advocate?:" . $_POST['convicted'].  "\n\n" . "I confirm that the information provided in this primary online application is authentic -". $_POST['I_confirm_that_the_information_provided_in_this_primary_online_application_is_authentic'].  "\n\n"  ."Specify name of the Bar ". $_POST['I_confirm_that_I_am_not_convicted_or_suspected_of_crime'].  "\n\n"  ."I confirm and accept consent for processing of my personal data -". $_POST['I_confirm_and_accept_consent_for_processing_of_my_personal_data']. "\n\n"  ."I confirm and accept notice on the rights determined by the legislation in the sphere of personal data protection the purposes for processing of personal data -".  $_POST['I_confirm_and_accept_notice_on_the_rights_determined_by_the_legislation_in_the_sphere_of_personal_data_protection_the_purposes_for_processing_of_personal_data'];

   $message2 = "Here is a copy of your message " . "\n\n"  . "Name:" . $_POST['Name']. "\n\n"  . "Surname:" . "Surname:" . $_POST['Surname']."\n\n"  .  "Date of birth:" . $_POST['Date_of_birth']. "\n\n"  . "Nationality:" . $_POST['Nationality']."\n\n"  .  "Country of resident:" . $_POST['Country_of_resident']."\n\n"  .  "Tel:" . $_POST['Tel']. "\n\n"  ."Fax:" . $_POST['Fax']. "\n\n"  . "Full address:" . $_POST['Full_address']. "\n\n"  . "Spesialisations:" . $_POST['Spesialisations']. "\n\n"  . "Education:" . $_POST['Education']."\n\n"  . "Current Position:" . $_POST['Current_Position']. "\n\n"  . "Career:" . $_POST['Career']. "\n\n"  . "Experience in Specialization:" . $_POST['Experience_in_Specialization']. "\n\n"  . "Publications:" . $_POST['Publications']. "\n\n"  . "Professional membership and licenses:" . $_POST['Professional_membership_and_licenses']. "\n\n"  . "Languages:" . $_POST['Languages']. "\n\n"  . "Do you have any Bar admission?:" . $_POST['Bar']. "\n\n"  . "Specify name of the Bar:" . $_POST['Bar1']. "\n\n"  . "Do you practice law in any organization, firm or as an individual lawyer?:" . $_POST['practice']. "\n\n"  . "Specify:" . $_POST['practice1']. "\n\n"  . "Would you like to receive regular information, news, announcements and etc?:" . $_POST['news'].  "\n\n" . "How do you prefer to receive information from Noshadha Law International Firm?:" . $_POST['post'].  "\n\n" . "Have you ever convicted to a disciplinary qualification commission as a lawyer or advocate?:" . $_POST['convicted']. "\n\n"   ."I confirm that the information provided in this primary online application is authentic -". $_POST['I_confirm_that_the_information_provided_in_this_primary_online_application_is_authentic'].  "\n\n"  ."Specify name of the Bar ". $_POST['I_confirm_that_I_am_not_convicted_or_suspected_of_crime'].  "\n\n"  ."I confirm and accept consent for processing of my personal data -". $_POST['I_confirm_and_accept_consent_for_processing_of_my_personal_data']. "\n\n"  ."I confirm and accept notice on the rights determined by the legislation in the sphere of personal data protection the purposes for processing of personal data -".  $_POST['I_confirm_and_accept_notice_on_the_rights_determined_by_the_legislation_in_the_sphere_of_personal_data_protection_the_purposes_for_processing_of_personal_data'];

    $headers = "From:" . $from;
    $headers2 = "From:" . $to;
    mail($to,$subject,$message,$headers);
    mail($from,$subject2,$message2,$headers2); // sends a copy of the message to the sender
    $link_address = 'http://noshadha.com/';
    echo "Dear Applicant.<br /><br />";
    echo "Thank you.<br />";
    echo "Your application sent. We will contact you shortly.<br /><br />";
    echo "<a href='$link_address'>Noshadha Law International Firm</a>";

    }
?>
