<?php

// Видео 12. Создать 4 персонажа.


//// Видео 3. Создать 4 персонажа.
//
//$name = 'Olga';
//$age = 32;
//$profession = 'journalist';
//$isMarried = true;
//$howManyPets = 5;
//$carBrand = 'VW';
//
//$name1 = 'Sveta';
//$age1 = 31;
//$profession1 = 'cook';
//$isMarried1 = true;
//$howManyPets1 = 0;
//$carBrand1 = 'no car';
//
//$name2 = 'Amily';
//$age2 = 26;
//$profession2 = 'accountant';
//$isMarried2 = false;
//$howManyPets2 = 1;
//$carBrand2 = 'Honda';
//
//$name3 = 'Valya';
//$age3 = 28;
//$profession3 = 'trainer';
//$isMarried3 = true;
//$howManyPets3 = 0;
//$carBrand3 = 'Toyota';
//
////echo "This story is about $name" . "\n";
////echo "$name is $age years" . "\n";
////echo "$name's profession is $profession" . "\n";
////echo "Marriage status $isMarried" . "\n";
////echo "$name has $howManyPets pets" . "\n";
////echo "$name has $carBrand" . "\n";
////
////echo "This story is about $name1" . "\n";
////echo "$name1 is $age1 years" . "\n";
////echo "$name1's profession is $profession1" . "\n";
////echo "Marriage status $isMarried1" . "\n";
////echo "$name1 has $howManyPets1 pets" . "\n";
////echo "$name1 has $carBrand1" . "\n";
////
////echo "This story is about $name2" . "\n";
////echo "$name2 is $age2 years" . "\n";
////echo "$name2's profession is $profession2" . "\n";
////echo "Marriage status $isMarried2" . "\n";
////echo "$name2 has $howManyPets2 pets" . "\n";
////echo "$name2 has $carBrand2" . "\n";
////
////echo "This story is about $name3" . "\n";
////echo "$name3 is $age3 years" . "\n";
////echo "$name3's profession is $profession3" . "\n";
////echo "Marriage status $isMarried3" . "\n";
////echo "$name3 has $howManyPets3 pets" . "\n";
////echo "$name3 has $carBrand3" . "\n";
//
//// Видео 4. Массив.
//
//$person = [
//    'name' => 'Olga',
//    'age' => 32,
//    'profession' => 'journalist',
//    'is_married' => true,
//    'how_many_pets' => 5,
//    'car_brand' => 'VW',
//];
//$person1 = [
//    'name' => 'Sveta',
//    'age' => 31,
//    'profession' => 'cook',
//    'is_married' => true,
//    'how_many_pets' => 0,
//    'car_brand' => 'no car',
//];
//$person2 = [
//    'name' => 'Amily',
//    'age' => 26,
//    'profession' => 'accountant',
//    'is_married' => false,
//    'how_many_pets' => 1,
//    'car_brand' => 'Honda',
//];
//$person3 = [
//    'name' => 'Valya',
//    'age' => 28,
//    'profession' => 'trainer',
//    'is_married' => true,
//    'how_many_pets' => 0,
//    'car_brand' => 'Toyota',
//];
//
////print_r($person);
////print_r($person1);
////print_r($person2);
////print_r($person3);
//
//// Видео 5. Цикличный оператор.
//
////foreach ($person as $key => $item){
////    echo $key . ': ';
////    echo $item . "\n";
////}
////
////foreach ($person1 as $key => $item){
////    echo $key . ': ';
////    echo $item . "\n";
////}
////foreach ($person2 as $key => $item){
////    echo $key . ': ';
////    echo $item . "\n";
////}
////
////foreach ($person3 as $key => $item){
////    echo $key . ': ';
////    echo $item . "\n";
////}
//
//// Видео 6. Многомерный массив.
//
//$persons = [
//    [
//    'name' => 'Olga',
//    'age' => 32,
//    'profession' => 'journalist',
//    'is_married' => true,
//    'how_many_pets' => 5,
//    'car_brand' => 'VW'
//    ],
//    [
//        'name' => 'Sveta',
//        'age' => 31,
//        'profession' => 'cook',
//        'is_married' => true,
//        'how_many_pets' => 0,
//        'car_brand' => 'no car'
//    ],
//    [
//        'name' => 'Amily',
//        'age' => 26,
//        'profession' => 'accountant',
//        'is_married' => false,
//        'how_many_pets' => 1,
//        'car_brand' => 'Honda'
//    ],
//    [
//        'name' => 'Valya',
//        'age' => 28,
//        'profession' => 'trainer',
//        'is_married' => true,
//        'how_many_pets' => 0,
//        'car_brand' => 'Toyota'
//    ],
//    [
//    'name' => 'Sasha',
//    'age' => 35,
//    'profession' => 'IT',
//    'is_married' => false,
//    'how_many_pets' => 0,
//    'car_brand' => ['Toyota', 'Mazda']
//    ]
//];
//
////foreach ($persons as $person){
////    print_r($person['profession']);
////}
//
//// Видео 7. У кого есть животные?
//
////foreach ($persons as $person) {
////    if ($person['how_many_pets']) {
////    print_r($person['name'] . ' has pets' . "\n");
////    }
////}
//
//// Видео 8. Оператор сравнения
//
//$pineapple = 44;
//$apple = 60;
//$banana = 80;
//$elemet1 = 'one';
//$elemet2 = 'two';
//
////if (($apple + $banana) / 10 >= $pineapple) {
////    echo 'Yes'. "\n";
////} else {
////    echo 'No'. "\n";
////}
////
////if ($pineapple === 44 && $elemet1 === 'br') {
////    echo 'Yes'. "\n";
////} else {
////    echo 'No'. "\n";
////}
////
////if ($pineapple > 45 || $elemet1 === 'one') {
////    echo 'Yes'. "\n";
////} else {
////    echo 'No'. "\n";
////}
////
////if ($elemet2 != 45 && $elemet1 <= 'one') {
////    echo 'Yes'. "\n";
////} else {
////    echo 'No'. "\n";
////}
////
////if (($pineapple + $apple) > 110) {
////    echo 'Yes'. "\n";
////} else {
////    echo 'No'. "\n";
////}
////
////if ($elemet1 == $elemet2) {
////    echo 'Yes'. "\n";
////} else {
////    echo 'No'. "\n";
////}
////
////if ($elemet1 < $elemet2) {
////    echo 'Yes'. "\n";
////} else {
////    echo 'No'. "\n";
////}
//
//// Видео 9. Функции
//
//function sayStory() {
//    echo 'Skazka ';
//    $name = 'O rybake i rybke ';
//    echo $name;
//}
//
//function sayWord() {
//    echo 'Skazka ';
//    $name = 'Volk i semero kozlyat ';
//    echo $name;
//}
//
//function callNumber() {
//    echo 'Номер ';
//    $phoneNumber = '89001231231';
//    echo $phoneNumber;
//}
//function newMessage() {
//    $newMessage = '1@mail.ru';
//    echo $newMessage;
//}
//
//function sum() {
//    $sum = 10 + 50;
//    echo $sum;
//}
//function multiply() {
//    $multiply = 10 * 50;
//    echo $multiply;
//}
//
//function division() {
//    $division = 10 / 50;
//    echo $division;
//}
//function expon() {
//    $expon = 11 ** 5;
//    echo $expon;
//}
//
////sayStory();
////echo "\n";
////sayWord();
////echo "\n";
////callNumber();
////echo "\n";
////newMessage();
////echo "\n";
////sum();
////echo "\n";
////multiply();
////echo "\n";
////division();
////echo "\n";
////expon();
////echo "\n";
//
//// Видео 10. Аргументы функции
//function Result($a, $b, $c)
//{
//    $Result = $a + $b * $c;
//    echo $Result;
//}
//
//function Result1($a, $b, $c)
//{
//    $Result = ($a + $b) * $c;
//    echo $Result;
//}
//
//function Result2($a, $b, $c)
//{
//    $Result = ($a + $b) ** $c;
//    echo $Result;
//}
//
//function Result3($a, $b, $c)
//{
//    $Result = ($a + $b ** $c)/$a;
//    echo $Result;
//}
//
//function Result4($a, $b, $c)
//{
//    $Result = $a * 100 - $b ** $c;
//    echo $Result;
//}
//function Result5($a, $b, $c)
//{
//    $Result = $a / 10 + $b * $c;
//    echo $Result;
//}
//function Result6($a, $b, $c)
//{
//    $Result = $a + $b - $c;
//    echo $Result;
//}
//function Result7($a, $b, $c)
//{
//    $Result = $a - -$b * $c;
//    echo $Result;
//}
//
////Result(45,56,90);
////echo "\n";
////Result1(20,6,9);
////echo "\n";
////Result2(5,5,9);
////echo "\n";
////Result3(7,56,55);
////echo "\n";
////Result4(0.1,10,100);
////echo "\n";
////Result5(1000,2,-5);
////echo "\n";
////Result6(7,-2,0);
////echo "\n";
////Result7(99,99,99);
//
//
//// Видео 11. Возвращаемые функции
//
//function getResult($a, $b, $c)
//{
//    $Result = $a + $b * $c;
//    return $Result;
//}
//
//function getResult1($a, $b, $c)
//{
//    $Result = ($a + $b) * $c;
//    return $Result;
//}
//
//function getResult2($a, $b, $c)
//{
//    $Result = ($a + $b) ** $c;
//    return $Result;
//}
//
//function getResult3($a, $b, $c)
//{
//    $Result = ($a + $b ** $c)/$a;
//    return $Result;
//}
//
//function getResult4($a, $b, $c)
//{
//    $Result = $a * 100 - $b ** $c;
//    return $Result;
//}
//function getResult5($a, $b, $c)
//{
//    $Result = $a / 10 + $b * $c;
//    return $Result;
//}
//function getResult6($a, $b, $c)
//{
//    $Result = $a + $b - $c;
//    return $Result;
//}
//function getResult7($a, $b, $c)
//{
//    $Result = $a - -$b * $c;
//    return $Result;
//}
//
////$res = getResult(45,56,90);
////echo $res. "\n";
////$res1 = getResult1(20,6,9);
////echo $res1. "\n";
////$res2 = getResult2(5,5,9);
////echo $res2. "\n";
////$res3 = getResult3(7,56,55);
////echo $res3. "\n";
////$res4 =getResult4(0.1,10,100);
////echo $res4. "\n";
////$res5 =getResult5(1000,2,-5);
////echo $res5. "\n";
////$res6 =getResult6(7,-2,0);
////echo $res6. "\n";
////$res7 =getResult7(99,99,99);
////echo $res7. "\n";
