<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {

    echo "***** VARIABLES Y TIPOS DE VARIABLES ***** <br><br>";

    $name = "Sergio Alejandro";

    echo $name;

    $age = rand(18,40); //Variable tipo integer "Random"
    $height = 1.78; //Variable tipo float o decimal

    $isLogin = true; //Variable tipo booleano

    echo "<br>";
    echo "Mi nombre es $name , tengo $age años y mido $height";
});
