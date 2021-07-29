
<?php
echo "<strong>Создать функцию определяющую какой тип данных ей передан и выводящей соответствующее сообщение:</strong>" . "<br>";
function  Type($a){
  return 'Переданный тип:' . gettype($a);
}
echo Type('hi');
echo " " . "<br>";

echo "<strong>Создать функцию которая считает все буквы b в переданной строке, в случае если передается не строка функция должна возвращать false:</strong>" . "<br>";
function countsAllLettersB($b)
{
    if(is_string($b)) {
  echo "Количество букв b: " . substr_count($b, 'b');
}else {
echo 'false';
}
}
countsAllLettersB(1);
echo " " . "<br>";

echo "<strong>Создать функцию которая считает сумму значений всех элементов массива произвольной глубины:</strong>" . "<br>";
$input = array(0,2,array(1,2,1),1,0);
function sum($arr){
  $sum=0;
  foreach($arr as $single){
      if(is_array($single))
        $sum+= sum($single);
      else
        $sum+=$single;
    }
  return $sum;
}

echo "Сумма значений всех элементов массива: " . sum($input);
echo " " . "<br>";

echo "<strong>Создать функцию которая определит сколько квадратов меньшего размера можно вписать в квадрат большего размера размер возвращать в float:</strong>" . "<br>";
function square($a,$b):float
{
  $a=$a*$a;
  $b=$b*$b;
  if($a>$b){
    $res=$a/$b;
  }else {
    $res=$b/$a;
  }
  return $res;
}
echo "Квадратов можно: " . square(3,2);
 ?>
