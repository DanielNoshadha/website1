<?php 
if(isset($_POST['submit'])){

    $to = "info@noshadha.com"; // this is your Email address
    $from = $_POST['Email']; // this is the sender's Email address
    $Name = $_POST['Name'];
    $Surname = $_POST['Surname'];
    $Nationality = $_POST['Nationality'];
    $Country_of_Residence = $_POST['Country_of_Residence'];
    $Date_of_birth = $_POST['Date_of_birth'];
    $Tel = $_POST['Tel'];
    $qst1 = $_POST['qst1'];
    $Subject_of_application = $_POST['Subject_of_application'];
    $Comment = $_POST['Comment'];
    $a = $_POST['a'];
    $b = $_POST['b'];
    $c = $_POST['c'];
	 
	 
	 
	$subject = $Name . " " . $Surname . " فرم درخواست خدمات حقوقی";
    $subject2 = $Name . " " . $Surname . " فرم درخواست خدمات حقوقی";
   
	

   $message = $Name . " " . $Suranme . " wrote the following:" . "\n\n"  . "نام:" . $_POST['Name']. "\n\n"  . "نام خانوادگی:" . $_POST['Surname']."\n\n"  .  "تابعیت:" . $_POST['Nationality']. "\n\n"  . "کشور محل اقامت:" . $_POST['Country_of_Residence']."\n\n"  .  "تاریخ تولد:" . $_POST['Date_of_birth']."\n\n"  .  "تاریخ تولد:" . $_POST['Date_of_birth']. "\n\n"  ."تلفن تماس :" . $_POST['Tel']. "\n\n"  . "پست الکترونیک (برای ارتباط):" . $_POST['Email']. "\n\n"  . "موضوع درخواست:" . $_POST['Subject_of_application']. "\n\n"  . "شرح درخواست:" . $_POST['Comment']."\n\n"  . "با گذاشتن علامت تیک در این قسمت تائید مینمایم که دفتر حقوقی نوشادها اجازه پردازش و نگهداری اطلاعات من را دارد (برای مطالعه متن کامل به زبان انگلیسی اینجا را کلیک کنید):" . $_POST['a']. "\n\n"  . "با گذاشتن علامت تیک در این قسمت تائید مینمایم که از حقوق و اختیارت مشخص شده خود توسط قانونگذار در خصوص حفاظت از پردازش و نگهداری اطلاعات شخصی مطلع هستم (برای مطالعه متن کامل به زبان انگلیسی اینجا را کلیک کنید):" . $_POST['b']. "\n\n"  . "با گذاشتن علامت تیک در این قسمت تائید مینمایم به زبان انگلیسی تسلط دارم و نیاز به خدمات مترجم پارسی -انگلیسی ندارم:" . $_POST['c'];  
   
        $message2 = "Here is a copy of your message " . "\n\n"  . "نام:" . $_POST['Name']. "\n\n"  . "نام خانوادگی:" . $_POST['Surname']."\n\n"  .  "تابعیت:" . $_POST['Nationality']. "\n\n"  . "کشور محل اقامت:" . $_POST['Country_of_Residence']."\n\n"  .  "تاریخ تولد:" . $_POST['Date_of_birth']."\n\n"  .  "تاریخ تولد:" . $_POST['Date_of_birth']. "\n\n"  ."تلفن تماس :" . $_POST['Tel']. "\n\n"  . "پست الکترونیک (برای ارتباط):" . $_POST['Email']. "\n\n"  . "موضوع درخواست:" . $_POST['Subject_of_application']. "\n\n"  . "شرح درخواست:" . $_POST['Comment']. "\n\n"  . "با گذاشتن علامت تیک در این قسمت تائید مینمایم که دفتر حقوقی نوشادها اجازه پردازش و نگهداری اطلاعات من را دارد (برای مطالعه متن کامل به زبان انگلیسی اینجا را کلیک کنید):" . $_POST['a']. "\n\n"  . "با گذاشتن علامت تیک در این قسمت تائید مینمایم که از حقوق و اختیارت مشخص شده خود توسط قانونگذار در خصوص حفاظت از پردازش و نگهداری اطلاعات شخصی مطلع هستم (برای مطالعه متن کامل به زبان انگلیسی اینجا را کلیک کنید):" . $_POST['b']. "\n\n"  . "با گذاشتن علامت تیک در این قسمت تائید مینمایم به زبان انگلیسی تسلط دارم و نیاز به خدمات مترجم پارسی -انگلیسی ندارم:" . $_POST['c'];
    $headers = "From:" . $from;
    $headers2 = "From:" . $to;
    mail($to,$subject,$message,$headers);
    mail($from,$subject2,$message2,$headers2); // sends a copy of the message to the sender
    $link_address = 'http://noshadha.com/';
	echo "<div style='text-align:Center'>";
    echo ",متقاضی گرامی<br /><br />"; 
    echo ".همکاران دفتر حقوقی نوشادها ظرف ۱ الی ۵ روز آینده با شما تماس خواهند گرفت

<br />"; 
    echo ".در صورت عدم دریافت پاسخ ظرف حداکثر ۵ روز از زمان ارسال درخواست، خواهشمندیم با ما تماس حاصل فرمایید
<br /><br />"; 
    echo ".اگر در شرایط اضطراری قرارگرفته اید و نیاز به خدمات حقوقی فوری دارید ، با ما از طریق تلفن تماس بگیرید";
    echo "!شاد و پیروز باشید";
	 echo "<a href='$link_address'>Noshadha Law Firm</a>";
	echo "</div>";
    // You can also use header('Location: thank_you.php'); to redirect to another page.
    // You cannot use header and echo together. It's one or the other.
    }
?>
