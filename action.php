<?php

// echo "Hi, " . htmlspecialchars($_POST['name_input']);
// echo "<br>Your salary is... $" . htmlspecialchars($_POST['salary_input']);

$hostName = "localhost";
$userName = "root";
$userPass = "root";
$database = "dudes";

// Connect directly to the database on PHPMyAdmin
$db = mysqli_connect($hostName, $userName, $userPass, $database) or die(mysqli_error());

print_r($_POST);

if(isset($_POST['submit'])){
  $new_dude_query = "INSERT INTO dude_details(name,eyecolor,age)
                     VALUES('" . htmlspecialchars($_POST['name_input']) . "',
                     '" . htmlspecialchars($_POST['eyecolor_input']) . "',
                     '" . htmlspecialchars($_POST['age_input']) . "')";


                     if(mysqli_query($db,$new_dude_query)){
                       echo "<br>Your record added succesfully: " . $new_dude_query;
                     }else{
                       echo "<br>Could not insert record: " . mysqli_error();
                     }
}

// $new_person_query = "INSERT INTO people(name,salary)
//                VALUES('Tim','100'),
//                ('Mohnish','100000'),
//                ('Troy','500'),
//                ('James','10000')
//               ";
$new_dude_query = "INSERT INTO dude_details(name,eyecolor,age)
               VALUES('Tim','Red', '12')";
?>
