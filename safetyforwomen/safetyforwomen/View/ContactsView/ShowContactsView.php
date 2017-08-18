<!DOCTYPE html>
<html>
<body>
<table style="width:100%">
  <tr>
    
    <td>Name</td>		
    <td>Phone1</td>
    <td>Phone2</td>
  </tr>
  <?php
  
   foreach ( $ContactList as $Info) {  
       echo "<tr>";
       echo  "<td>".$Info->name."</td>";
       echo  "<td>".$Info->phn1."</td>";
       echo  "<td>".$Info->phn2."</td>";
       echo "</tr>";    
   }  
  ?>
  
  
</table>

</body>
</html>
