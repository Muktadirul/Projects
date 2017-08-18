<!DOCTYPE html>
<html>
<body>
<table style="width:100%">
  <tr>
    
    <td>Name</td>		
    <td>Phone</td>
    
  </tr>
  <?php
  
   foreach ( $PoliceStationList as $PSL) {  
       echo "<tr>";
       echo  "<td>".$PSL->Bname."</td>";
       echo  "<td>".$PSL->Bphone."</td>";
       echo "</tr>";    
   }  
  ?>
  
  
</table>

</body>
</html>
