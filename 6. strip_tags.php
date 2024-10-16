<?php
$string = "<b>Bold text</b>
           <i>Italic text</i>";
$str = strip_tags($string);
   // удаляем все теги из строки
$str1 = strip_tags($string, '<i>');
   // удаляем все теги, кроме тега <i>
$str2 = strip_tags($string, '<i><b>');
   // удаляем все теги, кроме тегов <i> и <b>
echo $str,"<br>",$str1,"<br>", $str2;
?>
