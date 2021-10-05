<?php

$hostName = "localhost";
$userName = "root";
$userPass = "root";
$database = "new_database";

// Connect directly to the database on PHPMyAdmin
$db = mysqli_connect($hostName, $userName, $userPass, $database) or die(mysqli_error());

// print_r($db);

// Set up our initial table
$new_table_query = "CREATE TABLE people(
                    id INT AUTO_INCREMENT,
                    name VARCHAR(50) NOT NULL,
                    salary INT NOT NULL,
                    primary key (id)
                  )";

// if (mysqli_query($db,$new_table_query)){
//   echo "Table created successfully!";
// }else{
//   echo "Error creating table: " . mysqli_error($db);
// }


// Create the database connection
// $connection = new mysqli($hostName, $userName, $userPass);
// if($connection) {
//   echo "PHP MyAdmin Database connected!";
// }
//
// if($connection -> connect_error){
//   die("<br>Connection failed" . $connection->connect_error);
// }
//
// echo "<br>";

// $newdb_query = "CREATE DATABASE " . $database;
// if ($connection->query($newdb_query) == TRUE ) {
//   echo "Database " . $database . " created succesfully!";
// }else{
//   echo "Database creation failed: " . $connection->error;
// }

// $new_person_query = "INSERT INTO people(name,salary)
//                VALUES('Tim','100'),
//                ('Mohnish','100000'),
//                ('Troy','500'),
//                ('James','10000')
//               ";
//
//               if (mysqli_query($db,$new_person_query)){
//                 echo "Added: " . $new_person_query;
//               }else{
//                 echo "Error creating person: " . mysqli_error($db);
//               }

$show_all_users_query = "SELECT id, name, salary FROM people";
  $result = $db->query($show_all_users_query);
  if ($result->num_rows > 0) {
    // Output data from each row
    while($row = $result->fetch_assoc()) {
      echo '<div>' . $row["name"] . '</div>';
    }
  }else{
    echo "0 results";
  }

?>
