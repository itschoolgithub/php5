<?php
    // $a = 10;
    // $b = 10;

    // echo (int)($a === $b);

    // $isAdmin = true;
    // $hasAccess = false;

    // echo (int)($isAdmin && $hasAccess);
    // echo (int)($isAdmin || $hasAccess);
    // echo (int)(!$isAdmin);

    // $a = 5;

    // if ($a > 5) {
    //     echo "A больше 5";
    // } else {
    //     if ($a == 5) {
    //         echo "A равно 5";
    //     } else {
    //         echo "A меньше 5";
    //     } 
    // }

    // if ($a > 5) {
    //     echo "A больше 5";
    // } elseif ($a == 5) {
    //     echo "A равно 5";
    // } else {
    //     echo "A меньше 5";
    // }

    // if ($a <= 5) {
    //     echo "A меньше или равно 5";
    // }

    // echo "Конец";

    // $a = 121;
    // $b = [1, 2, 3];

    // if (isset($a)) {
    //     echo "Переменная А существует: " . $a;
    // } else {
    //     echo "Переменная А неопределенна";
    // }

    // define("PI", 3.14);

    // if (defined("PI")) {
    //     echo PI * 50;
    // } else {
    //     echo "Константа не существует";
    // }

    // $a = 49;

    // if (empty($a)) {
    //     echo "Переменная А пустая";
    // } else {
    //     echo "Переменная А заполненна";
    // }

    // if (is_array($a)) {
    //     echo "Это массив";
    // } else {
    //     echo "У переменной другой тип данных";
    // }

    // if (isset($a) && is_int($a) && $a == 49) {
    //     echo "Hello World!";
    // }

    // if (is_int($a) || is_float($a)) {
    //     echo "Hello World!";
    // }

    // $a = 10;
    // $b = 15;
    // $result;

    // if ($a < $b) {
    //     $result = $b;
    // } else {
    //     $result = $a;
    // }

    // $result = $a < $b ? $b : $a;

    // echo $result;

    // $a = 29;
    // $b;

    // if (isset($a)) {
    //     $b = $a;
    // } else {
    //     $b = 20;
    // }

    // $b = $a ?? 20;

    // echo $b;

    $a = 23;
    $b = 55;
    $operator = "+"; // - / *
    $result;

    // if ($operator == "+") {
    //     $result = $a + $b;
    // } elseif ($operator == "-") {
    //     $result = $a - $b;
    // } elseif ($operator == "/") {
    //     $result = $a / $b;
    // } else {
    //     $result = $a * $b;
    // }

    // switch ($operator) {
    //     case '+':
    //         $result = $a + $b;
    //         break;
    //     case '-':
    //         $result = $a - $b;
    //         break;
    //     case '/':
    //         $result = $a / $b;
    //         break;
    //     default:
    //         $result = $a * $b;
    //         break;
    // }

    $result = match ($operator) {
        "+" => $a + $b,
        "-" => $a - $b,
        "/" => $a / $b,
        default => $a * $b,
    };

    echo $result;