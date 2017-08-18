<!DOCTYPE html>

<html lang="en">
    <head>
        <title>Insert Ploice Station</title>
        <meta charset="UTF-8">      
        
    </head>
    <body>
        <form action="../Controller/PSController.php" method="post">
            
            <p>Branch:</p> 
            <input type="text" name="Bname">
            
			<p>Phon No :</p>
            <input type="text" name="phone">			
            <br/><br/>
            <input type="submit" name="PSC" value="ADD Police Station">
        </form>
    </body>
</html>