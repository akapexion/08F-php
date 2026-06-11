<?php
    include("config/db_connection.php");
    if(isset($_POST['updateEmployee'])){
        $name = $_POST['employeeName'];


        $update_query = "UPDATE employees SET employee_name = '$name' WHERE employee_id = $_GET[empID]";

        $execute = mysqli_query($connection_ref, $update_query);

        header("location: readEmployees.php");
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Employee</title>
</head>
<body>


    <!-- 
        CREATE TABLE employees(
        employee_id int PRIMARY KEY AUTO_INCREMENT,
        employee_name varchar(60)
        ); 
    -->

    <?php
    $select_query = "SELECT * FROM employees WHERE employee_id = $_GET[empID]";
    $execute = mysqli_query($connection_ref, $select_query);

    $display = mysqli_fetch_array($execute);
    ?>

    <form method="post">
        <input type="text" name="employeeName" value="<?php echo $display['employee_name']?>">

        <button name="updateEmployee">SAVE</button>
    </form>
</body>
</html>