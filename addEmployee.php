<?php
    include("config/db_connection.php");
    if(isset($_POST['addEmployee'])){
        $name = $_POST['employeeName'];

        // INSERT INTO employees(employee_name) VALUES("Zaid");

        $insert_query = "INSERT INTO employees(employee_name) VALUES('$name')";

        $execute = mysqli_query($connection_ref, $insert_query);
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Employee</title>
</head>
<body>


    <!-- 
        CREATE TABLE employees(
        employee_id int PRIMARY KEY AUTO_INCREMENT,
        employee_name varchar(60)
        ); 
    -->

    <form method="post">
        <input type="text" name="employeeName">

        <button name="addEmployee">ADD</button>
    </form>
</body>
</html>