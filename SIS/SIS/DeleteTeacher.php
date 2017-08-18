<?php
include_once './connection.php';
require_once 'connection.php';
$sql = "SELECT * FROM `sis_teacher`";
$retval= mysql_query($sql, $conn);


?>

<table style="width: 100%;">
        <tr>
            <td>Teacher Name</td>
            <td>Address</td>
            <td>Qualification</td>
            <td>Action</td>
        </tr>
       <?php 
       if ( mysql_num_rows($retval) > 0) {
           
                while($row = mysql_fetch_array($retval)) {
                    
                 echo '<tr>';
                echo "<td>".$row['T_name']."</td>"; 
                echo "<td>".$row['T_address']."</td>";
                echo "<td>".$row['T_qualification']."</td>";
                $X="http://localhost:8080/SIS/DeleteTeacherBackEnd.php?id=";
                echo "<td><a href=".$X.$row['T_id']."><button >Delete</button></a></td>";
                echo '</tr>';
    }
} 
       ?>
    </table>

        <a href="index.php">Back</a>