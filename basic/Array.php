<?php
/*
 * PHP 배열 정리
 *  1. 숫자 인덱스 배열
 *  2. 연관 배열
 *  3. 다차원 배열
 */
$varArr = array("one", "two", "tree");
$varArr2 = ["one", "two", "tree"];    // php5.4 이상 [] 대괄호를 이용한 배열 선언

// 1. 숫자 인덱스 배열 -  Indexed Arrays
// 방식1
$names = array('kim', 'lee', 'park');

// 방식2
$numbers1 = array(1, 2, 3, 4, 5);
$numbers2 = range(1, 10); // 1~10
$words = range('a', 'z'); // a~z

// 방식3
$products[0] = 'Tires'; // $products가 미리 정의되어 있지 않아도 된다.
$products[1] = 'Oil';
$products[2] = 'Spark Plugs';


// 2. 연관 배열 - Associative Arrays
// 방식 1
$prices = array('Tires' => 100, 'Oil' => 10, 'Spark' => 4);

// 방식 2
$prices['Tires'] = 100;
$prices['Oil'] = 10;
$prices['Spark Plugs'] = 4;


// 3. 다차원 배열 - Multidimensional Arrays
$cars = array(
    array("Volvo", 22, 18),
    array("BMW", 15, 13),
    array("Saab", 5, 2),
    array("Land Rover", 17, 15)
);