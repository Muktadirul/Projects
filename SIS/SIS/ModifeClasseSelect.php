<?php
require_once 'connection.php';
$sql = "SELECT * FROM `class`";
$retval= mysql_query($sql, $conn);


?>

<table style="width: 100%;">
        <tr>
            <td>Class Name</td>
            <td>Class Capasity</td>
            <td>Action</td>
        </tr>
       <?php 
       if ( mysql_num_rows($retval) > 0) {
           
                while($row = mysql_fetch_array($retval)) {
                    
                 echo '<tr>';
                echo "<td>".$row['ClassName']."</td>"; 
                echo "<td>".$row['Capasity']."</td>";   
                $X="http://localhost:8080/SIS/ModifieSelect.php?id=";
                echo "<td><a href=".$X.$row['class_id']."><button >Select</button></a></td>";
                echo '</tr>';
    }
} 
       ?>
    </table>

        <a href="index.php">Back</a>