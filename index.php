
<!--Задание 3: Рекурсия
<?php
function factorial($n){
   
if ($n ==0 || $n ==1) {
return 1;
}
return $n * factorial($n-1);
}
echo factorial(5);
?>

<!--Задание 4: Анонимные функции

<?php
//Массив
$strings = ["apple", "banana", "cherry"];
$uppercaseStrings = array_map(function($str){
    return strtoupper($str); //преобразуем в верхний регистр
}, $strings);
?>

<!--Задание 6: Замыкания 
<?php
function counter(){
   $count = 0;
//Возвращаем анонимную функцию, которая увеличивает счетчик
    return function() use (&$count) {
        $count++;
        return $count;
    };
}
// Создаем замыкание
$myCounter = counter();
//Вызовы замыкания
    echo $myCounter(); //Выведет 1
    echo $myCounter(); //Выведет 2
    echo $myCounter(); //Выведет 3
    ?>

         