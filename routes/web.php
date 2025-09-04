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

        echo "***** ESTRUCTURAS DE CONTROL ***** <br><br>";
        echo "<br>";
        $message = "Hola soy $name, ";
        if($age >= 18) {
            $message .= "Eres mayor de edad";
        } else if ($age > 50) {
            $message .+ "Eres un adulto mayor";
        }
        else {
            $message .= "Eres menor de edad";
        }

        $message .= " " .($isLogin? "Ya estas logeado" : "No estas logeado"). "<br>";

        echo $message;

        echo "<br>";
        echo "***** FUNCIONES ***** <br><br>";

        echo printUser($name,$age);

        echo "<br>";
        printUserWithCallBack($name, $age, callable: function(){
            echo "Esta es una función callback, saludos!!! <br>";
        });
});

function printUser(string $name, int $age){
    return "El nombre del usuario es $name y su edad es $age años <br>";
}


function printUserWithCallBack(string $name, int $age, callable $callable){

    echo "Soy $name y  tengo $age años <br>";
    $callable();

}