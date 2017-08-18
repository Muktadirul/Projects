<!DOCTYPE html>

<html lang="en">
    <head>
        <title>Insert Area</title>
        <meta charset="UTF-8">      
        
    </head>
    <body>
        <form action="../Controller/AreaController.php" method="post">
            
            <p>Area Name:</p> 
            <input type="text" name="areaname">
            <p>Location:</p>
            <input type="text" name="location">
			<br/><br/>
            <input type="submit" name="InsertArea" value="ADD Area">
        </form>
    </body>
</html>