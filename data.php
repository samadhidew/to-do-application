<?php
$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "todo";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
$task1 = $_POST['myInput'];
$task2 = $_POST['myInput1'];
$task3 = $_POST['myInput2'];
$task4 = $_POST['myInput3'];
$task5 = $_POST['myInput4'];

/Insert Query of SQL
$query = mysql_query("insert into todolist(Task1,Task2,Task3,Task4,Task5)
echo "<br/><br/><span>Data Inserted successfully...!!</span>";
}

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>