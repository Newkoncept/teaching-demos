<?php
$title = "Home Page";
    require "head.php";
    include "navbar.php";
  
// String
// $meszsage = "This is a new class and I think that should settle some issues";
/*
strlen(string)
str_word_count(string)
trim(string)
strpos(string, value to search for) 
strtolower(string)
strtoupper(string)
str_replace(word to replace, what to replace with, string)
strrev(string)
str_shuffle(string)
str_contains(string, word)
substr(string, starting position, length of character to return)
*/


// Number
/*
is_numeric()
is_int()
is_double()
is_float()
*/

// Math 
/*
    abs
    floor
    ceil
    round
    rand
    min
    max
*/

// $job = "student";

// if ($job === "teacher"){
//     echo "You are a teacher";
// } 
// elseif($job === "student"){
//     echo "You are a student";
// } 


// switch ($job) {
//     case "teacher":
//         echo "You are a teacher";
//         break;
//     case "student":
//         echo "You are a student";
//         break;
//     default:
//         echo "Yourr job is unknown";
//         break;
// }

// while (condition) {
//     action
// }


// $counter = 0;

// while ($counter <= 100) {
    //     echo $counter . "<br>";
    //     $counter += 1;
//     // $counter = $counter + 1;
// }

// do {
//     echo $counter . "<br>";
//     $counter+=2;
// } while($counter === -1);


// for(starting point; destination; increment/decrement){
//     action
// }

// for($counter = 100; $counter <= 200; $counter++){
//     echo $counter . "<br>";
// }

// sp - 300
//  dest - 200

// $startingPoint = 300;
// $destination = 200;

// while ($startingPoint >= $destination ) {
//     echo $startingPoint . "<br>";
//     $startingPoint--;
// };

// for ($i = 100; $i >= 0; $i--) {
//     echo $i ."<br>";
// }

// function functionname(){
//     action
// }

// function showMessage(){
//     echo "welcome to this place Niit";
// }
// // function declaration

// // calling / executing
// showMessage();

// function showMessage($name) {
//     echo "welcome to this place " .$name;   
// }

// showMessage("Peter");


// function add($num1, $num2){
//     echo $num1 + $num2;
// }

// add(4, 6);

// function welcome($name = "user"){
//     echo "welcome to this place " .$name;
// }

// welcome();

// Array
// Indexed array
// $friends = ["Peter", "Luke", "sam", "andrea"];
// $friends = array("Peter", "Luke", "sam", "andrea", 4, 6, true);

// var_dump($friends);

// Associative Array
// school, course, no of students, class
// $classDetails = ["niit", "web development", 4, 2022];
// $classDetails = ["name Of School" => "niit", 
//                 "course Name" => "web development", 
//                 "No of students" => 4, 
//                 "class year" => 2022
//             ];

//            var_dump(array_key_exists("class year", $classDetails));

//         $classDetails["sample"] = 25;
//         var_dump($classDetails);
//         echo "<br>";
//         unset($classDetails["class year"]);
//         var_dump($classDetails);
// echo $classDetails["course Name"];

// $problem = [
//     [1,2,3,4,5,6,7],
//     "sample" => [3,5,6,89,6,54,3,],
//     [1,5,7,4, [
//         1,2,4,5
//     ]]
// ];

// var_dump($problem);

// $index = ["a", "b", "c"];
// echo count($index);
// var_dump($index);
// echo "<br>";
// array_push($index, "d", "e", "f");

// var_dump($index);

// pop - removes from the last index
// shift - removes the 1st index
// unshift - add to the first index
// push - add to the end of the array


$index = ["a", "b", "c", "d", "e", "f", "g"];
// echo $index[2];

// $counter = 0;

// while( $counter < count($index)) {
//     echo $index[$counter];
//     // echo $counter;
//     $counter++;
// }

// for ($i = 0; $i < count($index); $i++) {
//     echo $index[$i];
// }

// foreach($index as $i){
//     echo $i;
// }


$classDetails = ["name Of School" => "niit", 
                "course Name" => "web development", 
                "No of students" => 4, 
                "class year" => 2022
            ];

foreach($classDetails as $key => $value){
    echo $key.": ". $value."<br>";
}