<?php
$data = array("Иванов","Иван","Иванович");
$str = implode($data," "); //  Объединяет элементы массива в строку
echo $str;
?>

<?php
$data = array("Иванов","Иван","Иванович");
$str = join($data," ");  // Псевдоним функции implode()

echo $str;
?>
