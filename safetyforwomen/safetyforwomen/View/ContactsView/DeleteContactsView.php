<!DOCTYPE html>

<html>
<table style="width:100%">
<tr>
<td>Name</td>
<td>Phone1</td>
<td>Phone2</td>
<td>Action</td>
</tr>
  </br>

<?php
  
   foreach ( $ContactList as $Info) {  
       echo "<tr>";
       echo  "<td>".$Info->name."</td>";
       echo  "<td>".$Info->phn1."</td>";
       echo  "<td>".$Info->phn2."</td>";
       echo  "<td>"." <a href='.././Controller/ContactsController.php?Delete=true&&ID=".$Info->id." '>Delete</a>"."<td>";

       echo "</tr>";    
   } 
?>
</html>