<?php
$word = "<b>Hello, world!</b>";
echo $word , "<br>";
$pure_str = substr($word, 3, -4);
/* выделяем подстроку,
   начиная с 3-го символа,
   не включая 4 символа с конца строки */
echo $pure_str, "<br>";;
?>

<?php
$text = "Привет! Сегодня мы изучаем работу
         со строками. Автор.";
$no_hello = substr($text, 8);
    // убираем приветствие
$content = substr($text, 8, 48);
    // то же самое, что substr($text, 8, -6).
    // Убираем подпись.
echo $text, "<br>", $no_hello,
     "<br>", $content;
?>

