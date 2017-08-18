<!DOCTYPE html>
<html>
<body>
<table style="width:100%">
  <tr>
    
    <td>AreaName</td>		
    <td>Location</td>
  </tr>
  <?php
  
   foreach ( $AreaList as $Info) {  
       echo "<tr>";
       echo  "<td>".$Info->areaname."</td>";
       echo  "<td>".$Info->location."</td>";
       echo "</tr>";    
   }  
  ?>
  
  
</table>

</body>
</html>
