<?php
// Basic PHP Core Concepts

// 1. Variables declirations
$name = "Alice";  // String 
$age = 25;  // Integer 
$salary= 0.0; // double 

/// Array (Single Dimancel Array)

$skills = array("Dart","php","python","js");

/// Also you can use like this 
$tools=['VsCode',"PhotoShop","GitHub","Xampp"];


/// Multi Dimancial Array 

$skillFactor=array("dart"=>40,"php"=>25,"go"=>40);

/// Real-life senario 

$user=array("first_name"=>"Bunny","last_name"=>"Doe","age"=>25,"mobile"=>"878198283");


/// For Multiple data but with same key so you can use like this 

$users = [
    ["first_name" => "Bunny", "last_name" => "Doe", "age" => 25, "mobile" => "878198283"],
    ["first_name" => "Alice", "last_name" => "Smith", "age" => 30, "mobile" => "987654321"],
    ["first_name" => "John", "last_name" => "Brown", "age" => 28, "mobile" => "123456789"],
    ["first_name" => "Sara", "last_name" => "Lee", "age" => 22, "mobile" => "555666777"]
];



/// End of variables part.








/* Printing data to webpage... */

// Both echo and print are used to output data to the screen.

// The differences are small:

// echo has no return value, while print has a return value of 1 so it can be used in expressions
// echo can take multiple parameters, while print can take one argument
// echo is marginally faster than print

print_r($skills);  // Print_r work like console.log(data.runtimetype) it print data with their type and length.


echo $age;  // can only print data not their type and it can't handle direct array or other object.


echo "First Name".$name;