<?php
include("config/db_connection.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Read All Employees</title>
</head>
<body>


<table>
    <tr>
        <th>Index</th>
        <th>Name</th>
        <th>Action</th>
    </tr>


    <?php
    // SELECT * FROM employees;
    $select_query = "SELECT * FROM employees";
    $execute = mysqli_query($connection_ref, $select_query);

    // var_dump($execute);
    
    // print_r($execute);
        
    while($display = mysqli_fetch_array($execute)){
    ?>
    <tr>
        <td><?php echo $display['employee_id'];  ?></td>
        <td> <?php echo $display['employee_name'] ?>  </td>
        <td>
            <a href="">Edit</a>
            <a href="">Delete</a>
        </td>
    </tr>
    <?php
    }
    ?>
    

</table>
</body>
</html>