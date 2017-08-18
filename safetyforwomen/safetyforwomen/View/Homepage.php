
<!DOCTYPE html>

<html lang="en">
    <head>
        <title>Homepage</title>
        <meta charset="UTF-8">      
        
    </head>
    <body>
        <h3><a href="../View/Homepage.php">Homepage</h3>
        
<?php    
        include_once("../View/Homepage.php");                    
 ?>

        <h4>Personal Contacts</h4>
        <ul>
            <li><a href="./ContactsView/InsertContactsView.php">Add Contacts</a></li>
            <li><a href=".././Controller/ContactsController.php?Delete_show_all=true">Delete Contacts</a></li>
            <li><a href="../Controller/ContactsController.php?show_all=true">View Contacts</a></li>
        </ul>

        <h4><a href="../Controller/PSController.php?PSshow=true">Police_Station_Contacts</a></h4>

        <button onclick="location.href='../Controller/TextController.php?HELP=true';">HELP!</button>

        <button onclick="location.href='../Controller/InfoController.php?Logout=true';">Log Out</button>
    </body>
</html>