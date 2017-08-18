<?php
require_once 'connection.php';
$id=$_GET['id'];
$sql = "SELECT * FROM `class` where class_id=".$_GET['id'];
$retval= mysql_query($sql, $conn);
?>
<form method="post" action="ModifeBackEnd.php?id=<?php echo $id;?>">    
    <table style="width: 100%;">
    <tr>
        <td>Class Name</td>
        <td>Class Capasity</td>
        <td>Update</td>
    </tr>
    <?php
              if ( mysql_num_rows($retval) > 0) {
                $row = mysql_fetch_array($retval);?>
    <tr>
        
        <td><input type="text" name="CN" value="<?php echo $row['ClassName'];?>"></td>
        <td><input type="text" name="CP" value="<?php echo $row['Capasity']?>"></td>
        <td><input type="submit" value="Update"></td>
    </tr>

<?php

              } 
?>
</table>
 <a href="index.php">Back</a>
</form>