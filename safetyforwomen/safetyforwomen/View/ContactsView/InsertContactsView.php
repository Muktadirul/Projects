<!DOCTYPE html>

<html lang="en">
    <head>
        <title>Insert Contacts</title>
        <meta charset="UTF-8">      
        
    </head>
    <body>
        <form action="../../Controller/ContactsController.php" method="post">
            
            <p>Name:</p> 
            <input type="text" name="cname">

            <p>Contact No. 1:</p>
            <input type="text" name="cphn1">

            <p>Contact No. 2:</p>
            <input type="text" name="cphn2">
            
            <input type="submit" name="AddContact" value="Add Contact">

        </form>

    </body>
</html>