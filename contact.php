<?php
include "inc/hader.php";
?>
<?php
$sedanycom= "www.sedany.com";
$sedany= "<div class= sedany > <a title=سيداني   target=_blank  href=http://$sedanycom > Powered by sedany.com  </a> </div>";
$Blok = "القائمة الرئيسية ";
$min="   اتصل بنا  ";
$Bloklink="
<li><a class='link-mig' href='index.php'> القرأن الكريم</a></li>
<li><a class='link-mig' href='alla7.php'>  اسماء الله الحسنى  </a></li>
<li><a class='link-mig' href='7tsmin.php'> احديث نبوي </a></li>
<li><a class='link-mig' href='Do3a.php'> الأدعية الصحيحة   </a></li>
<li><a class='link-mig' href='files.php'> فلاشات دينية</a></li>
<li><a class='link-mig' href='vg.php'>  رجال ونساء أسلموا</a></li>
<li><a class='link-mig' href='vip.php'>  قصص الآنبياء   </a></li>
<li><a href='contact.php' class='link1'> اتصل بنا  </a></li>
<li><a href='index.php?Quran=banr' class='link1'>   ساهم معنا</a></li>
";
?>
<div class="com-sedany">
<link href="css/contact.css" rel="stylesheet" type="text/css" />
<title>  اتصل بنا  </title>
<div class="mw">
<div class="mw-right">
<div class="mw-left">
<!--هذا الكلاسات للاطراف-->
<div class="web">
<div class="web-right">
<?php
include "inc/Blok.php";
?>
<div class="clr"> </div>
</div>
<div class="web-left">
<?=$minhader;?>
<h1> <?=$min;?>  </h1>
<div id="contentForm">
<!-- The contact form starts from here-->
<?php
$error= ''; // error message
$name = ''; // sender's name
$email= ''; // sender's email address
$subject  = ''; // subject
$message  = ''; // the message itself
$spamcheck = ''; // Spam check
if(isset($_POST['send']))
{
 $name = strip_tags( $_POST['name']);
 $email= strip_tags( $_POST['email']);
 $subject  = strip_tags( $_POST['subject']);
 $message  = strip_tags( $_POST['message']);
$spamcheck = strip_tags( $_POST['spamcheck']);

if(trim($name) == '')
{
$error = '<div class="errormsg"> من فضلك ادخل اسمك!  </div>';
}else if(trim($email) == ''){
$error = '<div class="errormsg">من فضلك ادخل عنوان البريد الالكتروني! </div>';
}else if(!isEmail($email)){
$error = '<div class="errormsg">  من فضلك أدخل بريدك الألكترونى صحيح !</div>';
}if(trim($subject) == ''){
$error = '<div class="errormsg">  من فضلك أختار عنوان الرسالة !</div>';
}else if(trim($message) == ''){
$error = '<div class="errormsg">  من فضلك ادخل رسالتك! </div>';
}  else if(trim($spamcheck) == ''){
$error = '<div class="errormsg"> من فضلك إدخل الرمز التأكيدي </div>';
}  else if(trim($spamcheck) != '5'){
$error = '<div class="errormsg">  الرمز التأكيدي الذي أدخلته غير صحيح!   2 + 3 = ???</div>';
}if($error == ''){
if(get_magic_quotes_gpc()){
$message = stripslashes($message);
}
// the email subject
// '[Contact Form] :' will appear automatically in the subject.
// You can change it as you want
$subject = '[Contact Form] : ' . $subject;
// the mail message ( add any additional information if you want )
$msg = "From : $name \r\ne-Mail : $email \r\nSubject : $subject \r\n\n" . "Message : \r\n$message";
mail($to, $subject, $msg, "From: $email\r\nReply-To: $email\r\nReturn-Path: $email\r\n");
?>

<!-- Message sent! (change the text below as you wish)-->
<div style="text-align:center;">
<h1> تم استلام طلبكم بنجاح </h1>
<p>
شكرا
<b><?=$name;?>
</b>
سيتم الرد عليكم في غضون ساعات قليلة إن شاء الله </p>
</div>
<!--End Message Sent-->
<?php
}
}
if(!isset($_POST['send']) || $error != '')
{
?>
<h2> يجب عليك تعبئة جميع الخانات بشكل صحيح وسليم </h2>
<h2> جميع المعلومات هي معلومات سرية ولا يمكن لأحد الاطلاع عليها </h2>
<!--Error Message-->
<?=$error;?>
<form  method="post" name="contFrm" id="contFrm" action="">
<label>: الإسم <span class="required">*</span></label>
<input name="name" type="text" class="box" id="name" maxlength="30" size="30" value="<?=$name;?>" />
<label>   : البريد الإلكتروني <span class="required">*</span> </label>
<input name="email" type="text" class="box" id="email" size="30" maxlength="50" value="<?=$email;?>" />
<label> : عنوان الرسالة  <span class="required">*</span> </label>
<input name="subject" type="text" class="box" id="subject" maxlength="100" size="30" value="<?=$subject;?>" />
<label>  :  نص الرسالة <span class="required">*</span> </label>
<textarea  class="ss" name="message" cols="40" rows="3"  maxlength="200" id="message"><?=$message;?></textarea>
<label> <b> = 2 + 3 </b> : إدخل الرمز التأكيدي  <span class="required">*</span></label>
<input name="spamcheck" type="text" maxlength="2" class="box" id="spamcheck" size="4" value="<?=$spamcheck;?>" /><br /><br />
<!-- Submit Button-->
<input name="send" type="submit" class="button" id="send" value="ارسال" />
</form>
<!-- E-mail verification. Do not edit -->
<?php
}

function isEmail($email)
{
return(preg_match("/^[-_.[:alnum:]]+@((([[:alnum:]]|[[:alnum:]][[:alnum:]-]*[[:alnum:]])\.)+(ad|ae|aero|af|ag|ai|al|am|an|ao|aq|ar|arpa|as|at|au|aw|az|ba|bb|bd|be|bf|bg|bh|bi|biz|bj|bm|bn|bo|br|bs|bt|bv|bw|by|bz|ca|cc|cd|cf|cg|ch|ci|ck|cl|cm|cn|co|com|coop|cr|cs|cu|cv|cx|cy|cz|de|dj|dk|dm|do|dz|ec|edu|ee|eg|eh|er|es|et|eu|fi|fj|fk|fm|fo|fr|ga|gb|gd|ge|gf|gh|gi|gl|gm|gn|gov|gp|gq|gr|gs|gt|gu|gw|gy|hk|hm|hn|hr|ht|hu|id|ie|il|in|info|int|io|iq|ir|is|it|jm|jo|jp|ke|kg|kh|ki|km|kn|kp|kr|kw|ky|kz|la|lb|lc|li|lk|lr|ls|lt|lu|lv|ly|ma|mc|md|mg|mh|mil|mk|ml|mm|mn|mo|mp|mq|mr|ms|mt|mu|museum|mv|mw|mx|my|mz|na|name|nc|ne|net|nf|ng|ni|nl|no|np|nr|nt|nu|nz|om|org|pa|pe|pf|pg|ph|pk|pl|pm|pn|pr|pro|ps|pt|pw|py|qa|re|ro|ru|rw|sa|sb|sc|sd|se|sg|sh|si|sj|sk|sl|sm|sn|so|sr|st|su|sv|sy|sz|tc|td|tf|tg|th|tj|tk|tm|tn|to|tp|tr|tt|tv|tw|tz|ua|ug|uk|um|us|uy|uz|va|vc|ve|vg|vi|vn|vu|wf|ws|ye|yt|yu|za|zm|zw)$|(([0-9][0-9]?|[0-1][0-9][0-9]|[2][0-4][0-9]|[2][5][0-5])\.){3}([0-9][0-9]?|[0-1][0-9][0-9]|[2][0-4][0-9]|[2][5][0-5]))$/i"
,$email));
}
?>
<!-- END CONTACT FORM -->
<div class="link-sedany">
<a class="link-my"  href="http://www.sedany.com" >www.sedany.com</a>
</div>
</div>
<!-- /contentForm -->
<div class="clr"> </div>
<?=$minfooter;?>
<div class="clr"> </div>
<div class="clr"> </div>
</div>
<div class="clr"> </div>
<?=$sedany;?>
</div>
<!--هذا الكلاسات للفوتر-->
</div>
</div>
</div>
</div>
<?php
include "inc/footer.php";
?>