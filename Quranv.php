<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head><link href='css/facebook-Quranv.css' rel='stylesheet' type='text/css' />
<link href='templates/facebook-Quranv.css' rel='stylesheet' type='text/css' />
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" /></head>
<body ><?php
include "config.php";
include "fun/language.php";?>
<?php
$sedanycom= "www.sedany.com";
$sedany= "<div class= sedany > <a title=سيداني   target=_blank      href=http://$sedanycom > Powered by Quranv2.4  </a> </div>";
$Blok = "اختر القارئ المفضل لك";
$Bloklink="<select name='menu' onChange='location=document.jump.menu.options[document.jump.menu.selectedIndex].value;' value='GO'>
<option value='Quranv.php?Quran=Abdulbasit_Mojawwad'> عبدالباسط عبدالصمد </option>
<option value='Quranv.php?Quran=Al-Ajmy'> أحمد بن علي العجمي </option>
<option value='Quranv.php?Quran=Abdulbasit'>  عبد الباسط عبد الصمد </option>
<option value='Quranv.php?Quran=Al-Minshawi'> محمد صديق المنشاوي  </option>
<option value='Quranv.php?Quran=Al-Minshawi_Mojawwad'> محمد صديق المنشاوي  </option>
<option value='Quranv.php?Quran=Alsudaes'>   عبدالرحمن السديس  </option>
<option value='Quranv.php?Quran=Al-Johany'>   عبدالله عواد الجهني  </option>
<option value='Quranv.php?Quran=maher'>   ماهر المعيقلي </option>
<option value='Quranv.php?Quran=Al-Shuraim'>  سعود الشريم </option>
<option value='Quranv.php?Quran=Al-Ghamdi'> سعد الغامدي </option>
<option value='Quranv.php?Quran=Fares'>   فارس عباد </option>
<option value='Quranv.php?Quran=Alafasi'>  مشاري العفاسي </option>
<option value='Quranv.php?Quran=abdulkafi'> خالد عبدالكافي </option>
<option value='Quranv.php?Quran=adel-rayan'> عادل ريان </option>
<option value='Quranv.php?Quran=Al-Ahmad'> عبدالعزيز الأحمد  </option>
<option value='Quranv.php?Quran=alakhdar'>  إبراهيم الأخضر </option>
<option value='Quranv.php?Quran=Al-Dosari'> ياسر الدوسري </option>
<option value='Quranv.php?Quran=Al-Hussary'> محمود خليل الحصري  </option>
<option value='Quranv.php?Quran=Ali-Alhuthaifi'> علي الحذيفي  </option>
<option value='Quranv.php?Quran=alkalbany'> عادل الكلباني </option>
<option value='Quranv.php?Quran=Al-Mattrod'> عبد الله المطرود  </option>
<option value='Quranv.php?Quran=Al-Qahtani'> خالد القحطاني </option>
<option value='Quranv.php?Quran=al-qasim'> عبدالمحسن القاسم  </option>
<option value='Quranv.php?Quran=Al-Qazabri'> عمر القزابري  </option>
<option value='Quranv.php?Quran=athobaity'> عبدالبارئ الثبيتي  </option>
<option value='Quranv.php?Quran=basfar'> عبدالله بصفر </option>
<option value='Quranv.php?Quran=Bukhatir'> صلاح بو خاطر  </option>
<option value='Quranv.php?Quran=doukkali'> الدوكالي محمد العالم  </option>
<option value='Quranv.php?Quran=el-najjar'> صلاح النجار  </option>
<option value='Quranv.php?Quran=Hani'> هاني الرفاعي  </option>
<option value='Quranv.php?Quran=hatem'> حاتم فريد الواعر  </option>
<option value='Quranv.php?Quran=Jaber'>علي جابر  </option>
<option value='Quranv.php?Quran=jamal'> جمال شاكر عبد الله  </option>
<option value='Quranv.php?Quran=Jibrel'> محمد جبريل  </option>
<option value='Quranv.php?Quran=Kanakeri'> عبدالهادي كناكري  </option>
<option value='Quranv.php?Quran=khalifa'> خليفة الطنيجي  </option>
<option value='Quranv.php?Quran=khayat'> عبدالله خياط  </option>
<option value='Quranv.php?Quran=Mohamad-Abdullkarem'> محمد عبدالكريم  </option>
<option value='Quranv.php?Quran=muslim'> عادل مسلم  </option>
<option value='Quranv.php?Quran=nabil'> نبيل الرفاعي </option>
<option value='Quranv.php?Quran=Sahl-Yassin'> سهل ياسين  </option>
<option value='Quranv.php?Quran=Salah-Albudair'> صلاح البدير  </option>
<option value='Quranv.php?Quran=Shatri'> شيخ أبو بكر الشاطري  </option>
<option value='Quranv.php?Quran=Shirazad-Taher'> شيرزاد طاهر  </option>
<option value='Quranv.php?Quran=soufi'> عبدالرشيد بن علي صوفي  </option>
<option value='Quranv.php?Quran=Tawfeeq-As-Sayegh'> توفيق الصايغ  </option>
<option value='Quranv.php?Quran=yaseen'> ياسين   </option>
<option value='Quranv.php?Quran=youssef'> يوسف الشويعي</option>
<option value='Quranv.php?Quran=zain'> الزين محمد أحمد  </option>
<option value='Quranv.php?Quran=zaki'> زكي داغستاني  </option>
<option value='Quranv.php?Quran=banr'>  ساهم معنا </option>
<option value='Quranv.php?Quran=abdelmoujib-benkirane'>  عبدالمجيب بنكيران </option>
<option value='Quranv.php?Quran=abdlkaber'> عبد الكبير الحديدي  </option>
<option value='Quranv.php?Quran=Abdulbasit_Mojawwad'> عبدالباسط عبدالصمد  </option>
<option value='Quranv.php?Quran=Abdulmuhsin-Al-Harthy'> عبدالمحسن الحارثي  </option>
<option value='Quranv.php?Quran=abdulqawi-abdulmajid'> عبد القوي عبد المجيد  </option>
<option value='Quranv.php?Quran=abdulrhman-aljuraidy'> عبدالرحمن الجريذي  </option>
<option value='Quranv.php?Quran=abkar'>  إدريس أبكر  </option>
<option value='Quranv.php?Quran=ahmed-attarabolsi'>  أحمد خضر الطرابلسي  </option>
<option value='Quranv.php?Quran=ahmed-neana'> أحمد نعينع  </option>
<option value='Quranv.php?Quran=Al-Arkani'>  عبدالولي الأركاني  </option>
<option value='Quranv.php?Quran=Al-Asiri'>  إبراهيم العسيري  </option>
<option value='Quranv.php?Quran=albana'>  محمود علي البنا  </option>
<option value='Quranv.php?Quran=albana_mjwd'>  محمود علي البنا - المصحف المجود   </option>
<option value='Quranv.php?Quran=Al-Barrak'> محمد البراك </option>
<option value='Quranv.php?Quran=alhashim'>     صلاح الهاشم </option>
<option value='Quranv.php?Quran=Al-Kandari'>     فهد الكندري </option>
<option value='Quranv.php?Quran=Al-Lohaidan'>   محمد اللحيدان  </option>
<option value='Quranv.php?Quran=Al-Minshawi_Mojawwad'>  محمد صديق المنشاوي - المصحف المجود  </option>
<option value='Quranv.php?Quran=Al-Oni'>  لافي العوني  </option>
<option value='Quranv.php?Quran=Alqatami'>  ناصر القطامي  </option>
<option value='Quranv.php?Quran=ayman-aldeeb'>   أيمن أحمد الديب  </option>
<option value='Quranv.php?Quran=Ayyub'>     محمد أيوب  </option>
<option value='Quranv.php?Quran=azzawi'>  مصطفى بن رعد العزاوي  </option>
<option value='Quranv.php?Quran=elkantaoui'>  محمد الكنتاوي - رواية ورش عن نافع   </option>
<option value='Quranv.php?Quran=fouad-alkhamri'>     فؤاد الخامري  </option>
<option value='Quranv.php?Quran=hafez-ishak-danish'>   حافظ إسحاق دانيش  </option>
<option value='Quranv.php?Quran=haneef'>  عبدالودود مقبول حنيف  </option>
<option value='Quranv.php?Quran=hasan-mohamed-saleh-warsh'>  حسن محمد صالح (برواية ورش عن نافع)  </option>
<option value='Quranv.php?Quran=hawashy'>  أحمد الحواشي   </option>
<option value='Quranv.php?Quran=jazza-alsuwaileh'>  جزاع بن فليح الصويلح  </option>
<option value='Quranv.php?Quran=jbreen'>  ابراهيم الجبرين  </option>
<option value='Quranv.php?Quran=jleel'>  خالد الجليل   </option>
<option value='Quranv.php?Quran=koshi'>  العيون الكوشي (رواية ورش عن نافع)  </option>
<option value='Quranv.php?Quran=lahoni'>   مصطفى اللاهوني  </option>
<option value='Quranv.php?Quran=mahmoud-rifai'>  محمود الرفاعي  </option>
<option value='Quranv.php?Quran=Mansoor'>  منصور الزهراني  </option>
<option value='Quranv.php?Quran=mhsny'>   محمد المحيسني  </option>
<option value='Quranv.php?Quran=mohamed-alabdulah'>   محمد عبدالحكيم سعيد العبدالله - الدوري عن الكسائي   </option>
<option value='Quranv.php?Quran=mohamed-elhodairi'>   محمد الحضيري - رواية قالون عن نافع  </option>
<option value='Quranv.php?Quran=mohamed-hassan'>  محمد حسان   </option>
<option value='Quranv.php?Quran=mustafaismail'>  مصطفى إسماعيل  </option>
<option value='Quranv.php?Quran=salama-hdr'>  ياسر سلامة - مصحف الحدر  </option>
<option value='Quranv.php?Quran=Sami-Al-Hasn'>  سامي الحسن  </option>
<option value='Quranv.php?Quran=shakhashero'>   ماهر شخاشيرو  </option>
<option value='Quranv.php?Quran=sultan-alrukan'>  سلطان الروكان   </option>
<option value='Quranv.php?Quran=tablawi'>   محمد محمود الطبلاوي   </option>
<option value='Quranv.php?Quran=Walid-Al-Dulaimi'>  وليد الدليمي  </option>
<option value='Quranv.php?Quran=yahya'>  يحيى حوا  </option>
<option value='Quranv.php?Quran=youssef-abkar'>  يوسف أبكر   </option>
<option value='Quranv.php?Quran=youssef-nouh'>  يوسف نوح أحمد   </option>
<option value='Quranv.php?Quran=zamil'> ماجد الزامل  </option></select>";
?>
<div class="com-sedany">
<!--هذا الكلاسات للاطراف--><div class="web-left">
<?=$minhader;?>
<div class="min">
<h1> <?=$SEDANY[10];?>  </h1>
<?=$addthis;?><!-- البداية -->
<form name="jump"><?=$Bloklink;?></form>
<!-- النهاية -->
<?php
if (!isset($_GET['Quran'])) { 
// the had is badre
include("Quran/$twQuran");
}else{
$filename="Quran/" . $_GET['Quran'] . ".html";
if (file_exists($filename)){
include("Quran/" . $_GET['Quran'] . ".html");
}else{
include("error.php");}
}
?>
<div class="clr"> </div></div>
<?=$minfooter;?>
<div class="clr"> </div>
<div class="clr"> </div>
</div>
<div class="clr"> </div>
<?=$sedany;?>
<!--هذا الكلاسات للفوتر-->
</div>
</body>
</html>