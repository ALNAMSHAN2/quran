<?php
include "inc/hader.php";
?>
<?php
$saaid="http://saaid.net";
$knoon="http://www.knoon.com";
$alboqah="http://www.alboqah.com";
$sedanycom= "www.sedany.com";
$sedanynet= "<div class= sedany > <a title=سيداني   target=_blank      href=http://$sedanycom > Powered by sedany.com  </a> </div>";
$Blok = " القائمة الرئيسية ";
$min=" ::: فلاشات دعويه , فلاشات دينية :::  ";
$Bloklink="
<li><a href='?sedany=files1' class='link1'>   <span>   فلاش  أجمل عروس   </span> </a></li>
<li><a href='?sedany=files2' class='link1'>   <span>   فلاش حبك لنا ملموس   </span> </a></li>
<li><a href='?sedany=files3' class='link1'>   <span>   فلاش   قبـل الندم    </span> </a></li>
<li><a href='?sedany=files4' class='link1'>   <span>   فلاش أحبكم يامهجتي   </span> </a></li>
<li><a href='?sedany=files5' class='link1'>   <span>   فلاش الحـيـاهـ الطيـبه    </span> </a></li>
<li><a href='?sedany=files6' class='link1'>   <span>   فلاش  آهــــات   </span> </a></li>
<li><a href='?sedany=files7' class='link1'>   <span>   فلاش   القلب الحزين   </span> </a></li>
<li><a href='?sedany=files8' class='link1'>   <span>  الأربعون النووية  </span> </a></li>
<li><a href='?sedany=files9' class='link1'>   <span>   فلاش  الــقدر   </span> </a></li>
<li><a href='?sedany=files10' class='link1'>   <span>   فلاش   أمي   </span> </a></li>
<li><a href='?sedany=files11' class='link1'>   <span>   فلاش  انعم الله علينا    </span> </a></li>
<li><a href='?sedany=files12' class='link1'>   <span>   من أنت يا مسكين </span> </a></li>
<li><a href='?sedany=files13' class='link1'>   <span>   فلاش  أنتي العفيفة   </span> </a></li>
<li><a href='?sedany=files14' class='link1'>   <span>   فلاش   يا اخيه   </span> </a></li>
<li><a href='?sedany=files15' class='link1'>   <span>   فلاش  أتمـناهـا   </span> </a></li>
<li><a href='?sedany=files16' class='link1'>   <span>   فلاش درر باز     </span> </a></li>
<li><a href='?sedany=files17' class='link1'>   <span>   فلاش   دار المسنين   </span> </a></li>
<li><a href='?sedany=files18' class='link1'>   <span>   فلاش  بلادي   </span> </a></li>
<li><a href='?sedany=files19' class='link1'>   <span>  يا رفيق الدرب  </span> </a></li>
<li><a href='?sedany=files20' class='link1'>   <span>  هزت فؤادي   </span> </a></li>
<li><a href='?sedany=files21' class='link1'>   <span>  صلاتي نجاتي </span> </a></li>
<li><a href='?sedany=files22' class='link1'>   <span>   فلاش  التراب يضمني   </span> </a></li>
<li><a href='?sedany=files23' class='link1'>   <span>   فلاش جيتك يادار  </span> </a></li>
<li><a href='?sedany=files24' class='link1'>   <span>  يارب أنا جيتك   </span> </a></li>
<li><a href='?sedany=files25' class='link1'>   <span>   فلاش هذا الحبييب   </span> </a></li>
<li><a href='?sedany=files26' class='link1'>   <span>   فلاش هـــداية غريبة    </span> </a></li>
<li><a href='?sedany=files27' class='link1'>   <span>   فلاش هو الله    </span> </a></li>
<li><a href='?sedany=files28' class='link1'>   <span>    فلاش خالد يبي شوربه   </span> </a></li>
<li><a href='?sedany=files29' class='link1'>   <span>   فلاش  كريسماس   </span> </a></li>
<li><a href='?sedany=files30' class='link1'>   <span>   فلاش   لاح النور    </span> </a></li>
<li><a href='?sedany=files31' class='link1'>   <span>   فلاش  لا تحزن    </span> </a></li>
<li><a href='?sedany=files32' class='link1'>   <span>   فلاش  للـؤلـؤة المصونـة   </span> </a></li>
<li><a href='?sedany=files33' class='link1'>   <span>   فلاش  مع الله   </span> </a></li>
<li><a href='?sedany=files34' class='link1'>   <span>   فلاش   ما أغلاك    </span> </a></li>
<li><a href='?sedany=files35' class='link1'>   <span>   فلاش   يا أماهـ    </span> </a></li>
<li><a href='?sedany=files36' class='link1'>   <span>   فلاش  المملكه وطنا   </span> </a></li>
<li><a href='?sedany=files37' class='link1'>   <span>   صيحة لمن تزوج عليها زوجها  </span> </a></li>
<li><a href='?sedany=files38' class='link1'>   <span>   فلاش   من يدعوني    </span> </a></li>
<li><a href='?sedany=files39' class='link1'>   <span>   فلاش رسول الله ( ص)   </span> </a></li>
<li><a href='?sedany=files40' class='link1'>   <span>   فلاش   مشاعر مودعة   </span> </a></li>
<li><a href='?sedany=files41' class='link1'>   <span>   فلاش  نهائة رائد   </span> </a></li>
<li><a href='?sedany=files42' class='link1'>   <span>   فلاش  رحمة للعالمين    </span> </a></li>
<li><a href='?sedany=files43' class='link1'>   <span>   فلاش   رنة جوال   </span> </a></li>
<li><a href='?sedany=files44' class='link1'>   <span>   فلاش  رقــة قــلــب    </span> </a></li>
<li><a href='?sedany=files45' class='link1'>   <span>   فلاش  سامحوني   </span> </a></li>
<li><a href='?sedany=files46' class='link1'>   <span>   فلاش  طلت ياليل   </span> </a></li>
<li><a href='?sedany=files47' class='link1'>   <span>    طفل الأحداث   </span> </a></li>
<li><a href='?sedany=files48' class='link1'>   <span>   فلاش  الأنسي غني    </span> </a></li>
<li><a href='?sedany=files49' class='link1'>   <span>   فلاش  ضحكة زماني    </span> </a></li>
<li><a href='?sedany=files50' class='link1'>   <span>   فلاش  تــــوبتي   </span> </a></li>
<li><a href='?sedany=files51' class='link1'>   <span>   فلاش  طفل الأحداث   </span> </a></li>
<li><a href='?sedany=files52' class='link1'>   <span>   فلاش  ولد النور   </span> </a></li>
<li><a href='?sedany=files53' class='link1'>   <span>   فلاش  وبالوالدين إحسانا   </span> </a></li>
<li><a href='?sedany=files54' class='link1'>   <span>   فلاش  وقفت أناجي   </span> </a></li>
<li><a href='?sedany=files55' class='link1'>   <span>   فلاش يحبهم ويحبونه   </span> </a></li>
";
?><div class="com-sedany">
<link rel='stylesheet' type='text/css' href='css/files.css' /><div class="mw">
<div class="mw-right">
<div class="mw-left">
<!--هذا الكلاسات للاطراف-->
<div class="web"><div class="web-right"><?php
include "inc/Blok.php";
?>
<div class="clr"> </div></div>
<div class="web-left">
<?=$minhader;?>
<h1> <?=$min;?>  </h1>
<?=$addthis;?>
<?php
$sedanyfiles1 = "
<title>
فلاش أجمل عروس</title>
<div class='booxvg'>
<h3>فلاش أجمل عروس</h3>
<a>
<object classid='clsid:D27CDB6E-AE6D-11CF-96B8-444553540000' id='obj1' codebase='http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,40,0' border='0' width='450' height='450'>
<param name='movie' value='$knoon/rwasn/upload/3roos.swf'>
<embed src='$knoon/rwasn/upload/3roos.swf' pluginspage='http://www.macromedia.com/go/getflashplayer' type='application/x-shockwave-flash' name='obj1' quality='High' width='450' height='450'></object>
</a>
</div>";$sedanyfiles2 = "
<title>
فلاش
أناشيد حبك لنا ملموس</title>
<div class='booxvg'>
<h3>أناشيد حبك لنا ملموس </h3>
<a>
<object classid='clsid:D27CDB6E-AE6D-11CF-96B8-444553540000' id='obj1' codebase='http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,40,0' border='0' width='450' height='450'>
<param name='movie' value='$saaid/flash/1255800378.swf'>
<param name='quality' value='High'>
<embed src='$saaid/flash/1255800378.swf' pluginspage='http://www.macromedia.com/go/getflashplayer' type='application/x-shockwave-flash' name='obj1' quality='High' width='450' height='450'></object></object>
</a>
</div>";
$sedanyfiles3 = "
<title>
فلاش
قبـل الندم </title>
<div class='booxvg'>
<h3>قبـل الندم </h3>
<a>
<object classid='clsid:D27CDB6E-AE6D-11CF-96B8-444553540000' id='obj1' codebase='http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,40,0' border='0' width='450' height='450'>
<param name='movie' value='$saaid/flash/1206301106.swf'>
<param name='quality' value='High'>
<embed src='$saaid/flash/1206301106.swf' pluginspage='http://www.macromedia.com/go/getflashplayer' type='application/x-shockwave-flash' name='obj1' quality='High' width='450' height='450'></object></object>
</a>
</div>";
$sedanyfiles4 = "<title>أحبكم يامهجتي
</title><div class='booxvg'>
<h3>أناشيد أحبكم يامهجتي </h3>
<a>
<object classid='clsid:D27CDB6E-AE6D-11CF-96B8-444553540000' id='obj1' codebase='http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,40,0' border='0' width='450' height='450'>
<param name='movie' value='$saaid/flash/sa31.swf'>
<param name='quality' value='High'>
<embed src='$saaid/flash/sa31.swf' pluginspage='http://www.macromedia.com/go/getflashplayer' type='application/x-shockwave-flash' name='obj1' quality='High' width='450' height='450'></object></object>
</a>
</div>";
$sedanyfiles5 = "<title>
فلاشالحـــيــاهـ الطيـبه
</title><div class='booxvg'>
<h3>الحـــيــاهـ الطيـبه</h3>
<a>
<object classid='clsid:D27CDB6E-AE6D-11CF-96B8-444553540000' id='obj1' codebase='http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,40,0' border='0' width='450' height='450'>
<param name='movie' value='$saaid/flash/sa32.swf'>
<param name='quality' value='High'>
<embed src='$saaid/flash/sa32.swf' pluginspage='http://www.macromedia.com/go/getflashplayer' type='application/x-shockwave-flash' name='obj1' quality='High' width='450' height='450'></object></object>
</a>
</div>";
$sedanyfiles6 = "<title>
فلاش
آهــــات</title>
<div class='booxvg'>
<h3>آهــــات</h3>
<a>
<object classid='clsid:D27CDB6E-AE6D-11CF-96B8-444553540000' id='obj1' codebase='http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,40,0' border='0' width='450' height='450'>
<param name='movie' value='$saaid/flash/sa58.swf'>
<param name='quality' value='High'>
<embed src='$saaid/flash/sa58.swf' pluginspage='http://www.macromedia.com/go/getflashplayer' type='application/x-shockwave-flash' name='obj1' quality='High' width='450' height='450'></object></object>
</a>
</div>";
$sedanyfiles7 = "
<title>
حبها في القلب</title><div class='booxvg'>
<h3> حبها في القلب </h3>
<a>
<object classid='clsid:D27CDB6E-AE6D-11CF-96B8-444553540000' id='obj1' codebase='http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,40,0' border='0' width='500' height='500'>
<param name='movie' value='$saaid/flash/sa160.swf'>
<param name='quality' value='High'>
<embed src='$saaid/flash/sa160.swf' pluginspage='http://www.macromedia.com/go/getflashplayer' type='application/x-shockwave-flash' name='obj1' quality='High' width='450' height='450'></object></object>
</a>
</div>
";
$sedanyfiles8 = "<title>
الأربعون النووية</title>
<div class='booxvg'>
<h3> الأربعون النووية </h3>
<a>
<object classid='clsid:D27CDB6E-AE6D-11CF-96B8-444553540000' id='obj1' codebase='http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,40,0' border='0' width='500' height='500'>
<param name='movie' value='$saaid/flash/sa183.swf'>
<param name='quality' value='High'>
<embed src='$saaid/flash/sa183.swf' pluginspage='http://www.macromedia.com/go/getflashplayer' type='application/x-shockwave-flash' name='obj1' quality='High' width='450' height='450'></object></object>
</a>
</div>
";
$sedanyfiles9 = "<title>
فلاش
الــقدر
</title><div class='booxvg'>
<h3>الــقدر</h3>
<a>
<object classid='clsid:D27CDB6E-AE6D-11CF-96B8-444553540000' id='obj1' codebase='http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,40,0' border='0' width='450' height='450'>
<param name='movie' value='$saaid/flash/qdar.swf'>
<param name='quality' value='High'>
<embed src='$saaid/flash/qdar.swf' pluginspage='http://www.macromedia.com/go/getflashplayer' type='application/x-shockwave-flash' name='obj1' quality='High' width='450' height='450'></object></object>
</a>
</div>";
$sedanyfiles10 = "
<title>
فلاش أناشيد أمي
</title>
<div class='booxvg'>
<h3>فلاش أناشيد أمي</h3>
<a>
<object classid='clsid:D27CDB6E-AE6D-11CF-96B8-444553540000' id='obj1' codebase='http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,40,0' border='0' width='450' height='450'>
<param name='movie' value='$saaid/flash/Ommy.swf'>
<param name='quality' value='High'>
<embed src='$saaid/flash/Ommy.swf' pluginspage='http://www.macromedia.com/go/getflashplayer' type='application/x-shockwave-flash' name='obj1' quality='High' width='450' height='450'></object></object>
</a>
</div>
";
$sedanyfiles11 = "<title>
فلاش
انعم الله علينا
</title><div class='booxvg'>
<h3>انعم الله علينا </h3>
<a>
<object classid='clsid:D27CDB6E-AE6D-11CF-96B8-444553540000' id='obj1' codebase='http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,40,0' border='0' width='450' height='450'>
<param name='movie' value='$saaid/flash/rtlll.swf'>
<param name='quality' value='High'>
<embed src='$saaid/flash/rtlll.swf' pluginspage='http://www.macromedia.com/go/getflashplayer' type='application/x-shockwave-flash' name='obj1' quality='High' width='450' height='450'></object></object>
</a>
</div>";
$sedanyfiles12 = "<title>
من أنت يا مسكين</title>
<div class='booxvg'>
<h3> من أنت يا مسكين </h3>
<a>
<object classid='clsid:D27CDB6E-AE6D-11CF-96B8-444553540000' id='obj1' codebase='http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,40,0' border='0' width='500' height='500'>
<param name='movie' value='$saaid/flash/sa45.swf'>
<param name='quality' value='High'>
<embed src='$saaid/flash/sa45.swf' pluginspage='http://www.macromedia.com/go/getflashplayer' type='application/x-shockwave-flash' name='obj1' quality='High' width='450' height='450'></object></object>
</a>
</div>
";
$sedanyfiles13 = "<title>فلاش
أنتي العفيفة
</title>
<div class='booxvg'>
<h3>أنتي العفيفة</h3>
<a>
<object classid='clsid:D27CDB6E-AE6D-11CF-96B8-444553540000' id='obj1' codebase='http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,40,0' border='0' width='450' height='450'>
<param name='movie' value='$saaid/flash/1224797942.swf'>
<param name='quality' value='High'>
<embed src='$saaid/flash/1224797942.swf' pluginspage='http://www.macromedia.com/go/getflashplayer' type='application/x-shockwave-flash' name='obj1' quality='High' width='450' height='450'></object></object>
</a>
</div>
";
$sedanyfiles14 = "<title>يا أمي </title><div class='booxvg'>
<h3> يا أمي </h3>
<a><object classid='clsid:D27CDB6E-AE6D-11CF-96B8-444553540000' id='obj1' codebase='http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,40,0' border='0' width='500' height='500'>
<param name='movie' value='$saaid/flash/ommy1.swf'>
<param name='quality' value='High'>
<embed src='$saaid/flash/ommy1.swf' pluginspage='http://www.macromedia.com/go/getflashplayer' type='application/x-shockwave-flash' name='obj1' quality='High' width='450' height='450'></object></object>
</a>
</div>";
$sedanyfiles15 = "<title>فلاش
أتمناها</title>
<div class='booxvg'>
<h3>أتمناها</h3>
<a>
<object classid='clsid:D27CDB6E-AE6D-11CF-96B8-444553540000' id='obj1' codebase='http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,40,0' border='0' width='450' height='450'>
<param name='movie' value='$saaid/flash/1184897424.swf'>
<param name='quality' value='High'>
<embed src='$saaid/flash/1184897424.swf' pluginspage='http://www.macromedia.com/go/getflashplayer' type='application/x-shockwave-flash' name='obj1' quality='High' width='450' height='450'></object></object>
</a>
</div>
";
$sedanyfiles16 = "
<title>فلاش درر باز الشبخ عبدالعزيز بن عبدالله بن باز الله يرحهم
</title>
<div class='booxvg'>
<h3>فلاش درر باز الشبخ عبدالعزيز بن عبدالله بن باز الله يرحهم </h3>
<a>
<object classid='clsid:D27CDB6E-AE6D-11CF-96B8-444553540000' id='obj1' codebase='http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,40,0' border='0' width='500' height='600'>
<param name='movie' value='$knoon/rwasn/upload/BaAzZ.swf'>
<param name='quality' value='High'>
<embed src='$knoon/rwasn/upload/BaAzZ.swf' pluginspage='http://www.macromedia.com/go/getflashplayer' type='application/x-shockwave-flash' name='obj1' quality='High' width='450' height='450'></object></object>
</a>
</div>
";
$sedanyfiles17 = "<title>
فلاش
أناشيد دار المسنين 
</title><div class='booxvg'>
<h3>أناشيد دار المسنين </h3>
<a>
<object classid='clsid:D27CDB6E-AE6D-11CF-96B8-444553540000' id='obj1' codebase='http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,40,0' border='0' width='500' height='500'>
<param name='movie' value='http://www.anashed.net/flash/ayn_abnayey.swf'>
<param name='quality' value='High'>
<embed src='http://www.anashed.net/flash/ayn_abnayey.swf' pluginspage='http://www.macromedia.com/go/getflashplayer' type='application/x-shockwave-flash' name='obj1' quality='High' width='450' height='450'></object></object>
</a>
</div>
";
$sedanyfiles18 = "<title>
فلاش أناشيد بلادي
</title><div class='booxvg'>
<h3>فلاش أناشيد بلادي </h3>
<a>
<object classid='clsid:D27CDB6E-AE6D-11CF-96B8-444553540000' id='obj1' codebase='http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,40,0' border='0' width='450' height='450'>
<param name='movie' value='$saaid/flash/bladi.swf'>
<param name='quality' value='High'>
<embed src='$saaid/flash/bladi.swf' pluginspage='http://www.macromedia.com/go/getflashplayer' type='application/x-shockwave-flash' name='obj1' quality='High' width='450' height='450'></object></object>
</a>
</div>
";
$sedanyfiles19 = "<title> يا رفيق الدرب </title>
<div class='booxvg'>
<h3> يا رفيق الدرب </h3>
<a>
<object classid='clsid:D27CDB6E-AE6D-11CF-96B8-444553540000' id='obj1' codebase='http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,40,0' border='0' width='450' height='450'>
<param name='movie' value='$saaid/flash/sa181.swf'>
<param name='quality' value='High'>
<embed src='$saaid/flash/sa181.swf' pluginspage='http://www.macromedia.com/go/getflashplayer' type='application/x-shockwave-flash' name='obj1' quality='High' width='450' height='450'></object></object>
</a>
</div>";
$sedanyfiles20 = "<title> هزت فؤادي  </title><div class='booxvg'>
<h3> هزت فؤادي </h3>
<a>
<object classid='clsid:D27CDB6E-AE6D-11CF-96B8-444553540000' id='obj1' codebase='http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,40,0' border='0' width='450' height='450'>
<param name='movie' value='$saaid/flash/sa164.swf'>
<param name='quality' value='High'>
<embed src='$saaid/flash/sa164.swf' pluginspage='http://www.macromedia.com/go/getflashplayer' type='application/x-shockwave-flash' name='obj1' quality='High' width='450' height='450'></object></object>
</a>
</div>";
$sedanyfiles21 = "
<title> صلاتي نجاتي  </title><div class='booxvg'>
<h3> صلاتي نجاتي  </h3>
<a>
<object classid='clsid:D27CDB6E-AE6D-11CF-96B8-444553540000' id='obj1' codebase='http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,40,0' border='0' width='450' height='450'>
<param name='movie' value='$saaid/flash/sa156.swf'>
<param name='quality' value='High'>
<embed src='$saaid/flash/sa156.swf' pluginspage='http://www.macromedia.com/go/getflashplayer' type='application/x-shockwave-flash' name='obj1' quality='High' width='450' height='450'></object></object>
</a>
</div>
";$sedanyfiles22 = "<title> متاهة ظروفي </title>
<div class='booxvg'>
<h3>فرشي التراب يضمني </h3>
<a>
<object classid='clsid:D27CDB6E-AE6D-11CF-96B8-444553540000' id='obj1' codebase='http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,40,0' border='0' width='450' height='450'>
<param name='movie' value='$saaid/flash/9ce19b0cc32.swf'>
<param name='quality' value='High'>
<embed src='$saaid/flash/9ce19b0cc32.swf' pluginspage='http://www.macromedia.com/go/getflashplayer' type='application/x-shockwave-flash' name='obj1' quality='High' width='450' height='450'></object></object>
</a>
</div>";$sedanyfiles23 = "<title>
فلاش
فرشي التراب يضمني 
</title>
<div class='booxvg'>
<h3>فرشي التراب يضمني </h3>
<a>
<object classid='clsid:D27CDB6E-AE6D-11CF-96B8-444553540000' id='obj1' codebase='http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,40,0' border='0' width='450' height='450'>
<param name='movie' value='$saaid/flash/Frshy_eTurab.swf'>
<param name='quality' value='High'>
<embed src='$saaid/flash/Frshy_eTurab.swf' pluginspage='http://www.macromedia.com/go/getflashplayer' type='application/x-shockwave-flash' name='obj1' quality='High' width='450' height='450'></object></object>
</a>
</div>";
$sedanyfiles24 = "<title> يارب أنا جيتك  </title>
<div class='booxvg'>
<h3> يارب أنا جيتك </h3>
<a>
<object classid='clsid:D27CDB6E-AE6D-11CF-96B8-444553540000' id='obj1' codebase='http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,40,0' border='0' width='450' height='450'>
<param name='movie' value='$saaid/flash/sa165.swf'>
<param name='quality' value='High'>
<embed src='$saaid/flash/sa165.swf' pluginspage='http://www.macromedia.com/go/getflashplayer' type='application/x-shockwave-flash' name='obj1' quality='High' width='450' height='450'></object></object>
</a>
</div>";
$sedanyfiles25 = "<title>
فلاش
ياغــا فـــلاً
</title>
<div class='booxvg'>
<h3>ياغــا فـــلاً</h3>
<a>
<object classid='clsid:D27CDB6E-AE6D-11CF-96B8-444553540000' id='obj1' codebase='http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,40,0' border='0' width='450' height='450'>
<param name='movie' value='$saaid/flash/yagafel.swf'>
<param name='quality' value='High'>
<embed src='$saaid/flash/uxnl3by99kkb.swf' pluginspage='http://www.macromedia.com/go/getflashplayer' type='application/x-shockwave-flash' name='obj1' quality='High' width='450' height='450'></object></object>
</a>
</div>";
$sedanyfiles26 = "<title>
فلاش
هذا الحبييب</title>
<div class='booxvg'>
<h3>هذا الحبييب</h3>
<a>
<object classid='clsid:D27CDB6E-AE6D-11CF-96B8-444553540000' id='obj1' codebase='http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,40,0' border='0' width='450' height='450'>
<param name='movie' value='$saaid/flash/sa20.swf'>
<param name='quality' value='High'>
<embed src='$saaid/flash/sa20.swf' pluginspage='http://www.macromedia.com/go/getflashplayer' type='application/x-shockwave-flash' name='obj1' quality='High' width='450' height='450'></object></object>
</a>
</div>
";
$sedanyfiles27 = "<title>
فلاش
هـــداية غريبة 
</title>
<div class='booxvg'>
<h3>هـــداية غريبة </h3>
<a>
<a>
<object classid='clsid:D27CDB6E-AE6D-11CF-96B8-444553540000' id='obj1' codebase='http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,40,0' border='0' width='450' height='450'>
<param name='movie' value='$saaid/flash/e29042c5d3.swf'>
<param name='quality' value='High'>
<embed src='$saaid/flash/e29042c5d3.swf' pluginspage='http://www.macromedia.com/go/getflashplayer' type='application/x-shockwave-flash' name='obj1' quality='High' width='450' height='450'></object></object>
</a>
</div>";
$sedanyfiles28 = "<title>
فلاش
هو الله
</title>
<div class='booxvg'>
<h3>هو الله </h3>
<a>
<object classid='clsid:D27CDB6E-AE6D-11CF-96B8-444553540000' id='obj1' codebase='http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,40,0' border='0' width='450' height='450'>
<param name='movie' value='$saaid/flash/1122.swf'>
<param name='quality' value='High'>
<embed src='$saaid/flash/1122.swf' pluginspage='http://www.macromedia.com/go/getflashplayer' type='application/x-shockwave-flash' name='obj1' quality='High' width='450' height='450'></object></object>
</a>
</div>";
$sedanyfiles29 = "<title>
فلاش خالد يبي شوربه</title>
<div class='booxvg'>
<h3>فلاش خالد يبي شوربه</h3>
<a>
<object classid='clsid:D27CDB6E-AE6D-11CF-96B8-444553540000' id='obj1' codebase='http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,40,0' border='0' width='450' height='450'>
<param name='movie' value='$knoon/rwasn/upload/knoon-1214445269.swf'>
<param name='quality' value='High'>
<embed src='$knoon/rwasn/upload/knoon-1214445269.swf' pluginspage='http://www.macromedia.com/go/getflashplayer' type='application/x-shockwave-flash' name='obj1' quality='High' width='450' height='450'></object></object>
</a>
</div>";
$sedanyfiles30 = "<title>
فلاش كريسماس
</title>
<div class='booxvg'>
<h3>فلاش كريسماس</h3>
<a>
<object classid='clsid:D27CDB6E-AE6D-11CF-96B8-444553540000' id='obj1' codebase='http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,40,0' border='0' width='500' height='600'>
<param name='movie' value='$knoon/rwasn/upload/christmas.swf'>
<param name='quality' value='High'>
<embed src='$knoon/rwasn/upload/christmas.swf' pluginspage='http://www.macromedia.com/go/getflashplayer' type='application/x-shockwave-flash' name='obj1' quality='High' width='450' height='450'></object></object>
</a>
</div>
";
$sedanyfiles31 = "
<title>
فلاش أناشيد لاح النور 
</title>
<div class='booxvg'>
<h3>فلاش أناشيد لاح النور </h3>
<a><object classid='clsid:D27CDB6E-AE6D-11CF-96B8-444553540000' id='obj1' codebase='http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,40,0' border='0' width='450' height='450'>
<param name='movie' value='$saaid/flash/laaaa7.swf'>
<param name='quality' value='High'>
<embed src='$saaid/flash/laaaa7.swf' pluginspage='http://www.macromedia.com/go/getflashplayer' type='application/x-shockwave-flash' name='obj1' quality='High' width='450' height='450'></object></object>
</a>
</div>
";
$sedanyfiles32 = "<title>
فلاش
لا تحزن </title>
<div class='booxvg'>
<h3>لا تحزن </h3>
<a>
<object classid='clsid:D27CDB6E-AE6D-11CF-96B8-444553540000' id='obj1' codebase='http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,40,0' border='0' width='450' height='450'>
<param name='movie' value='$saaid/flash/4b16b70601.swf'>
<param name='quality' value='High'>
<embed src='$saaid/flash/4b16b70601.swf' pluginspage='http://www.macromedia.com/go/getflashplayer' type='application/x-shockwave-flash' name='obj1' quality='High' width='450' height='450'></object></object>
</a>
</div>";
$sedanyfiles33 = "<title>
فلاش
اللـؤلـؤة المصونـة
</title><div class='booxvg'>
<h3>اللـؤلـؤة المصونـة </h3>
<a>
<object classid='clsid:D27CDB6E-AE6D-11CF-96B8-444553540000' id='obj1' codebase='http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,40,0' border='0' width='450' height='450'>
<param name='movie' value='$saaid/flash/llmsonh.swf'>
<param name='quality' value='High'>
<embed src='$saaid/flash/llmsonh.swf' pluginspage='http://www.macromedia.com/go/getflashplayer' type='application/x-shockwave-flash' name='obj1' quality='High' width='450' height='450'></object></object>
</a>
</div>";
$sedanyfiles34 = "<title>
فلاش أناشيد مع الله </title>
<div class='booxvg'>
<h3>فلاش أناشيد مع الله </h3>
<a>
<object classid='clsid:D27CDB6E-AE6D-11CF-96B8-444553540000' id='obj1' codebase='http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,40,0' border='0' width='450' height='450'>
<param name='movie' value='$saaid/flash/162.swf'>
<param name='quality' value='High'>
<embed src='$saaid/flash/162.swf' pluginspage='http://www.macromedia.com/go/getflashplayer' type='application/x-shockwave-flash' name='obj1' quality='High' width='450' height='450'></object></object>
</a>
</div>";
$sedanyfiles35 = "<title>فلاش ما أغلاك </title><div class='booxvg'>
<h3>فلاش ما أغلاك </h3>
<a>
<object classid='clsid:D27CDB6E-AE6D-11CF-96B8-444553540000' id='obj1' codebase='http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,40,0' border='0' width='450' height='450'>
<param name='movie' value='$saaid/flash/f655571ebf.swf'>
<param name='quality' value='High'>
<embed src='$saaid/flash/f655571ebf.swf' pluginspage='http://www.macromedia.com/go/getflashplayer' type='application/x-shockwave-flash' name='obj1' quality='High' width='450' height='450'></object></object>
</a>
</div>
";
$sedanyfiles36 = "<title>
فلاش ما أرحمك يا أماهـ </title><div class='booxvg'>
<h3> ما أرحمك يا أماهـ </h3>
<a>
<object classid='clsid:D27CDB6E-AE6D-11CF-96B8-444553540000' id='obj1' codebase='http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,40,0' border='0' width='450' height='450'>
<param name='movie' value='$saaid/flash/1240345638.swf'>
<param name='quality' value='High'>
<embed src='$saaid/flash/1240345638.swf' pluginspage='http://www.macromedia.com/go/getflashplayer' type='application/x-shockwave-flash' name='obj1' quality='High' width='450' height='450'></object></object>
</a>
</div>
";
$sedanyfiles37 = "<title> صيحة لمن تزوج عليها زوجها </title>
<div class='booxvg'>
<h3> صيحة لمن تزوج عليها زوجها </h3>
<a>
<object classid='clsid:D27CDB6E-AE6D-11CF-96B8-444553540000' id='obj1' codebase='http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,40,0' border='0' width='450' height='450'>
<param name='movie' value='$saaid/flash/1321638461.swf'>
<param name='quality' value='High'>
<embed src='$saaid/flash/1321638461.swf' pluginspage='http://www.macromedia.com/go/getflashplayer' type='application/x-shockwave-flash' name='obj1' quality='High' width='450' height='450'></object></object>
</a>
</div>";
$sedanyfiles38 = "<title>
فلاش 
من يدعوني 
</title>
<div class='booxvg'>
<h3> من يدعوني </h3>
<a>
<object classid='clsid:D27CDB6E-AE6D-11CF-96B8-444553540000' id='obj1' codebase='http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,40,0' border='0' width='450' height='450'>
<param name='movie' value='$saaid/flash/8ha52jfi8vez.swf'>
<param name='quality' value='High'>
<embed src='$saaid/flash/8ha52jfi8vez.swf' pluginspage='http://www.macromedia.com/go/getflashplayer' type='application/x-shockwave-flash' name='obj1' quality='High' width='450' height='450'></object></object>
</a>
</div>
";
$sedanyfiles39 = "<title>
فلاش محمد رسول الله ( صلى الله عليه وسلم )محمد رسول الله فلاش</title>
<div class='booxvg'>
<h3>فلاش محمد رسول الله ( صلى الله عليه وسلم )محمد رسول الله فلاش </h3>
<a>
<object classid='clsid:D27CDB6E-AE6D-11CF-96B8-444553540000' id='obj1' codebase='http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,40,0' border='0' width='450' height='450'>
<param name='movie' value='$saaid/flash/Lhib-Al-Ghirh.swf'>
<param name='quality' value='High'>
<embed src='$saaid/flash/Lhib-Al-Ghirh.swf' pluginspage='http://www.macromedia.com/go/getflashplayer' type='application/x-shockwave-flash' name='obj1' quality='High' width='450' height='450'></object></object>
</a>
</div>
";
$sedanyfiles40 = "
<title>
فلاش 
اناشيد مشاعر مودعة</title>
<div class='booxvg'>
<h3>اناشيد مشاعر مودعة</h3>
<a>
<object classid='clsid:D27CDB6E-AE6D-11CF-96B8-444553540000' id='obj1' codebase='http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,40,0' border='0' width='450' height='450'>
<param name='movie' value='$saaid/flash/mo9alla-600-600.swf'>
<param name='quality' value='High'>
<embed src='$saaid/flash/mo9alla-600-600.swf' pluginspage='http://www.macromedia.com/go/getflashplayer' type='application/x-shockwave-flash' name='obj1' quality='High' width='450' height='450'></object></object>
</a>
</div>";
$sedanyfiles41 = "<title>
فلاش نهائة رائد </title>
<div class='booxvg'>
<h3>فلاش نهائة رائد </h3>
<a>
<object classid='clsid:D27CDB6E-AE6D-11CF-96B8-444553540000' id='obj1' codebase='http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,40,0' border='0' width='450' height='450'>
<param name='movie' value='$knoon/flash/data/media/1/ra2ed.swf'>
<param name='quality' value='High'>
<embed src='$knoon/flash/data/media/1/ra2ed.swf' pluginspage='http://www.macromedia.com/go/getflashplayer' type='application/x-shockwave-flash' name='obj1' quality='High' width='450' height='450'></object></object>
</a>
</div>
";
$sedanyfiles42 = "
<title>
فلاش 
رحمة للعالمين</title>
<div class='booxvg'>
<h3>رحمة للعالمين </h3>
<a>
<object classid='clsid:D27CDB6E-AE6D-11CF-96B8-444553540000' id='obj1' codebase='http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,40,0' border='0' width='450' height='450'>
<param name='movie' value='$saaid/flash/1240345948.swf'>
<param name='quality' value='High'>
<embed src='$saaid/flash/1240345948.swf' pluginspage='http://www.macromedia.com/go/getflashplayer' type='application/x-shockwave-flash' name='obj1' quality='High' width='450' height='450'></object></object>
</a>
</div>
";
$sedanyfiles43 = "<title>
فلاش رنة جوال
</title>
<div class='booxvg'>
<h3>فلاش رنة جوال</h3>
<a>
<object classid='clsid:D27CDB6E-AE6D-11CF-96B8-444553540000' id='obj1' codebase='http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,40,0' border='0' width='450' height='450'>
<param name='movie' value='$knoon/flash/data/media/1/Jwal.swf'>
<param name='quality' value='High'>
<embed src='$knoon/flash/data/media/1/Jwal.swf' pluginspage='http://www.macromedia.com/go/getflashplayer' type='application/x-shockwave-flash' name='obj1' quality='High' width='450' height='450'></object></object>
</a>
</div>";
$sedanyfiles44 = "<title>
فلاش 
رقــة قــلــب</title>
<div class='booxvg'>
<h3>رقــة قــلــب </h3>
<a><object classid='clsid:D27CDB6E-AE6D-11CF-96B8-444553540000' id='obj1' codebase='http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,40,0' border='0' width='450' height='450'>
<param name='movie' value='$saaid/flash/rgah.swf'>
<param name='quality' value='High'>
<embed src='$saaid/flash/rgah.swf' pluginspage='http://www.macromedia.com/go/getflashplayer' type='application/x-shockwave-flash' name='obj1' quality='High' width='450' height='450'></object></object>
</a>
</div>";
$sedanyfiles45 = "<title>
فلاش 
سامحوووني
</title>
<div class='booxvg'>
<h3>سامحوووني</h3>
<a>
<object classid='clsid:D27CDB6E-AE6D-11CF-96B8-444553540000' id='obj1' codebase='http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,40,0' border='0' width='450' height='450'>
<param name='movie' value='$saaid/flash/samhoony.swf'>
<param name='quality' value='High'>
<embed src='$saaid/flash/samhoony.swf' pluginspage='http://www.macromedia.com/go/getflashplayer' type='application/x-shockwave-flash' name='obj1' quality='High' width='450' height='450'></object></object>
</a>
</div>";
$sedanyfiles46 = "<title>
فلاش أناشيد طلت ياليل</title>
<div class='booxvg'>
<h3>فلاش أناشيد طلت ياليل</h3>
<a>
<object classid='clsid:D27CDB6E-AE6D-11CF-96B8-444553540000' id='obj1' codebase='http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,40,0' border='0' width='450' height='450'>
<param name='movie' value='$saaid/flash/6olt-600-600.swf'>
<param name='quality' value='High'>
<embed src='$saaid/flash/6olt-600-600.swf' pluginspage='http://www.macromedia.com/go/getflashplayer' type='application/x-shockwave-flash' name='obj1' quality='High' width='450' height='450'></object></object>
</a>
</div>";
$sedanyfiles47 = "<title>
فلاش 
طفل الأحداث
</title><div class='booxvg'>
<h3>طفل الأحداث</h3>
<a>
<object classid='clsid:D27CDB6E-AE6D-11CF-96B8-444553540000' id='obj1' codebase='http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,40,0' border='0' width='450' height='450'>
<param name='movie' value='$saaid/flash/tefla.swf'>
<param name='quality' value='High'>
<embed src='$saaid/flash/tefla.swf' pluginspage='http://www.macromedia.com/go/getflashplayer' type='application/x-shockwave-flash' name='obj1' quality='High' width='450' height='450'></object></object>
</a>
</div>";
$sedanyfiles48 = "
<title>
فلاش أناشيد طيور الأنسي غني</title>
<div class='booxvg'>
<h3>فلاش أناشيد طيور الأنسي غني</h3>
<a>
<object classid='clsid:D27CDB6E-AE6D-11CF-96B8-444553540000' id='obj1' codebase='http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,40,0' border='0' width='450' height='450'>
<param name='movie' value='$saaid/flash/toyooooor.swf'>
<param name='quality' value='High'>
<embed src='$saaid/flash/toyooooor.swf' pluginspage='http://www.macromedia.com/go/getflashplayer' type='application/x-shockwave-flash' name='obj1' quality='High' width='450' height='450'></object></object>
</a>
</div>";
$sedanyfiles49 = "<title>
فلاش ضحكة زماني
</title><div class='booxvg'>
<h3>فلاش ضحكة زماني </h3>
<a>
<object classid='clsid:D27CDB6E-AE6D-11CF-96B8-444553540000' id='obj1' codebase='http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,40,0' border='0' width='450' height='450'>
<param name='movie' value='$saaid/flash/1250040208.swf'>
<param name='quality' value='High'>
<embed src='$saaid/flash/1250040208.swf' pluginspage='http://www.macromedia.com/go/getflashplayer' type='application/x-shockwave-flash' name='obj1' quality='High' width='450' height='450'></object></object>
</a>
</div>";
$sedanyfiles50 = "
<title>
فلاش 
توبتي
</title>
<div class='booxvg'>
<h3> توبتي </h3>
<a>
<object classid='clsid:D27CDB6E-AE6D-11CF-96B8-444553540000' id='obj1' codebase='http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,40,0' border='0' width='450' height='450'>
<param name='movie' value='$saaid/flash/1214774453.swf'>
<param name='quality' value='High'>
<embed src='$saaid/flash/1214774453.swf' pluginspage='http://www.macromedia.com/go/getflashplayer' type='application/x-shockwave-flash' name='obj1' quality='High' width='450' height='450'></object></object>
</a>
</div>";
$sedanyfiles51 = "<title>
فلاش 
طفل الأحداث</title><div class='booxvg'>
<h3>طفل الأحداث</h3>
<a>
<object classid='clsid:D27CDB6E-AE6D-11CF-96B8-444553540000' id='obj1' codebase='http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,40,0' border='0' width='450' height='450'>
<param name='movie' value='$saaid/flash/tefla.swf'>
<param name='quality' value='High'>
<embed src='$saaid/flash/tefla.swf' pluginspage='http://www.macromedia.com/go/getflashplayer' type='application/x-shockwave-flash' name='obj1' quality='High' width='450' height='450'></object></object>
</a>
</div>";
$sedanyfiles52 = "
<title>
فلاش 
ولد النور
</title>
<div class='booxvg'>
<h3>ولد النور</h3>
<a>
<object classid='clsid:D27CDB6E-AE6D-11CF-96B8-444553540000' id='obj1' codebase='http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,40,0' border='0' width='450' height='450'>
<param name='movie' value='$saaid/flash/waledalnoor.swf'>
<param name='quality' value='High'>
<embed src='$saaid/flash/waledalnoor.swf' pluginspage='http://www.macromedia.com/go/getflashplayer' type='application/x-shockwave-flash' name='obj1' quality='High' width='450' height='450'></object></object>
</a>
</div>
";
$sedanyfiles53 = "<title>
فلاش
وبالوالدين إحسانا
</title>
<div class='booxvg'>
<h3>وبالوالدين إحسانا</h3>
<a>
<object classid='clsid:D27CDB6E-AE6D-11CF-96B8-444553540000' id='obj1' codebase='http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,40,0' border='0' width='450' height='450'>
<param name='movie' value='$saaid/flash/walidayn.swf'>
<param name='quality' value='High'>
<embed src='$saaid/flash/walidayn.swf' pluginspage='http://www.macromedia.com/go/getflashplayer' type='application/x-shockwave-flash' name='obj1' quality='High' width='450' height='450'></object></object>
</a>
</div>";
$sedanyfiles54 = "<title>
فلاش أناشيد وقفت أناجي </title>
<div class='booxvg'>
<h3>فلاش أناشيد وقفت أناجي </h3>
<a>
<object classid='clsid:D27CDB6E-AE6D-11CF-96B8-444553540000' id='obj1' codebase='http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,40,0' border='0' width='450' height='450'>
<param name='movie' value='$saaid/flash/425.swf'>
<param name='quality' value='High'>
<embed src='$saaid/flash/425.swf' pluginspage='http://www.macromedia.com/go/getflashplayer' type='application/x-shockwave-flash' name='obj1' quality='High' width='450' height='450'></object></object>
</a>
</div>";
$sedanyfiles55 = "<title>
فلاش
يحبهم ويحبونه
</title><div class='booxvg'>
<h3>يحبهم ويحبونه</h3>
<a>
<object classid='clsid:D27CDB6E-AE6D-11CF-96B8-444553540000' id='obj1' codebase='http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,40,0' border='0' width='450' height='450'>
<param name='movie' value='$saaid/flash/yhoob-wer.swf'>
<param name='quality' value='High'>
<embed src='$saaid/flash/yhoob-wer.swf' pluginspage='http://www.macromedia.com/go/getflashplayer' type='application/x-shockwave-flash' name='obj1' quality='High' width='450' height='450'></object></object>
</a>
</div>
";
$sedanyfiles56 = "
<div class='booxvg'>
</div>
";
?>
<?php 


if(!(isset($_GET['sedany']))){
echo" $sedanyfiles1 ";
}
if($_REQUEST['sedany']=='files1'){
echo" $sedanyfiles1 ";
}
if($_REQUEST['sedany']=='files2'){
echo" $sedanyfiles2 ";
}
if($_REQUEST['sedany']=='files3'){
echo" $sedanyfiles3 ";
}
if($_REQUEST['sedany']=='files4'){
echo" $sedanyfiles4 ";
}
if($_REQUEST['sedany']=='files5'){
echo" $sedanyfiles5 ";
}
if($_REQUEST['sedany']=='files6'){
echo" $sedanyfiles6 ";
}
if($_REQUEST['sedany']=='files7'){
echo" $sedanyfiles7 ";
}
if($_REQUEST['sedany']=='files8'){
echo" $sedanyfiles8 ";
}
if($_REQUEST['sedany']=='files9'){
echo" $sedanyfiles9 ";
}
if($_REQUEST['sedany']=='files10'){
echo" $sedanyfiles10 ";
}

if($_REQUEST['sedany']=='files11'){
echo" $sedanyfiles11 ";
}
if($_REQUEST['sedany']=='files12'){
echo" $sedanyfiles12 ";
}
if($_REQUEST['sedany']=='files13'){
echo" $sedanyfiles13 ";
}
if($_REQUEST['sedany']=='files14'){
echo" $sedanyfiles14 ";
}
if($_REQUEST['sedany']=='files15'){
echo" $sedanyfiles15 ";
}
if($_REQUEST['sedany']=='files16'){
echo" $sedanyfiles16 ";
}
if($_REQUEST['sedany']=='files17'){
echo" $sedanyfiles17 ";
}
if($_REQUEST['sedany']=='files18'){
echo" $sedanyfiles18 ";
}
if($_REQUEST['sedany']=='files19'){
echo" $sedanyfiles19 ";
}
if($_REQUEST['sedany']=='files20'){
echo" $sedanyfiles20 ";
}


if($_REQUEST['sedany']=='files21'){
echo" $sedanyfiles21 ";
}
if($_REQUEST['sedany']=='files22'){
echo" $sedanyfiles22 ";
}
if($_REQUEST['sedany']=='files23'){
echo" $sedanyfiles23 ";
}
if($_REQUEST['sedany']=='files24'){
echo" $sedanyfiles24 ";
}
if($_REQUEST['sedany']=='files25'){
echo" $sedanyfiles25 ";
}
if($_REQUEST['sedany']=='files26'){
echo" $sedanyfiles26 ";
}
if($_REQUEST['sedany']=='files27'){
echo" $sedanyfiles27 ";
}
if($_REQUEST['sedany']=='files28'){
echo" $sedanyfiles28 ";
}
if($_REQUEST['sedany']=='files29'){
echo" $sedanyfiles29 ";
}
if($_REQUEST['sedany']=='files30'){
echo" $sedanyfiles30 ";
}

if($_REQUEST['sedany']=='files31'){
echo" $sedanyfiles31 ";
}
if($_REQUEST['sedany']=='files32'){
echo" $sedanyfiles32 ";
}
if($_REQUEST['sedany']=='files33'){
echo" $sedanyfiles33 ";
}
if($_REQUEST['sedany']=='files34'){
echo" $sedanyfiles34 ";
}
if($_REQUEST['sedany']=='files35'){
echo" $sedanyfiles35 ";
}
if($_REQUEST['sedany']=='files36'){
echo" $sedanyfiles36 ";
}
if($_REQUEST['sedany']=='files37'){
echo" $sedanyfiles37 ";
}
if($_REQUEST['sedany']=='files38'){
echo" $sedanyfiles38 ";
}
if($_REQUEST['sedany']=='files39'){
echo" $sedanyfiles39 ";
}
if($_REQUEST['sedany']=='files40'){
echo" $sedanyfiles40 ";
}

if($_REQUEST['sedany']=='files41'){
echo" $sedanyfiles41 ";
}
if($_REQUEST['sedany']=='files42'){
echo" $sedanyfiles42 ";
}
if($_REQUEST['sedany']=='files43'){
echo" $sedanyfiles43 ";
}
if($_REQUEST['sedany']=='files44'){
echo" $sedanyfiles44 ";
}
if($_REQUEST['sedany']=='files45'){
echo" $sedanyfiles45 ";
}
if($_REQUEST['sedany']=='files46'){
echo" $sedanyfiles46 ";
}
if($_REQUEST['sedany']=='files47'){
echo" $sedanyfiles47 ";
}
if($_REQUEST['sedany']=='files48'){
echo" $sedanyfiles48 ";
}
if($_REQUEST['sedany']=='files49'){
echo" $sedanyfiles49 ";
}
if($_REQUEST['sedany']=='files50'){
echo" $sedanyfiles50 ";
}

if($_REQUEST['sedany']=='files51'){
echo" $sedanyfiles51 ";
}
if($_REQUEST['sedany']=='files52'){
echo" $sedanyfiles52 ";
}
if($_REQUEST['sedany']=='files53'){
echo" $sedanyfiles53 ";
}
if($_REQUEST['sedany']=='files54'){
echo" $sedanyfiles54 ";
}
if($_REQUEST['sedany']=='files55'){
echo" $sedanyfiles55 ";
}



?> 

<?=$minfooter;?>
<div class="clr"> </div>
<div class="clr"> </div>
</div>
<div class="clr"> </div>
<?=$sedanynet;?>
</div>
<!--هذا الكلاسات للفوتر-->
</div>
</div>
</div>
</div>
<?php
include "inc/footer.php";
?>