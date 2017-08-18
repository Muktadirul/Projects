
<!DOCTYPE html>

<html lang="en">
    <head>
        <title>Insert Contacts</title>
        <meta charset="UTF-8">      
        <meta name="viewport" content="width=device-width, initial-scale=1">
              <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
              <link href='https://fonts.googleapis.com/css?family=Dancing+Script|Great+Vibes|Lobster|Russo One|Kaushan Script|Playfair Display' rel='stylesheet' type='text/css'>
              <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
              <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
            <meta http-equiv="Content-Type" content="text/html; charset=utf-8"></head>
    </head>
    <style type="text/css">
        
        body{
            background-image: url(http://www.excitecs.com/wp-content/uploads/2014/06/atlanta-web-design-background.jpg);                                
        }
        a{
          color: white;
          font-size: 20px;
        }
        a:hover {
                color: #FDFC52;
            } 
        .navbar-brand{
          font-size: 30px;
          font-family: Kaushan Script;
        }
        .container{
          float: left;
          height: 500px;
          width: 30%;          
          margin-left: 35px;
          margin-top: 20px;
          padding: 25px;
        }
        #div1{
          background-color:rgba(13, 33, 94, 0.42);
        }
        #div2{
          background-color:rgba(33, 65, 74, 0.51);
         
        }        
        #div3{
           background-color: rgba(13, 33, 94, 0.42);
        }
        #help{
          width: 120px;
          height: 120px;
          font-size: 30px;
          margin-left: 110px;
          margin-top: 140px;
          background-color:rgba(199, 10, 0, 1);
          color: black;
          border-radius: 70px;
          box-shadow: 1px 10px 30px 5px rgba(66, 255, 230, 1);
          font-family: Russo One;
        }
        #police{
          font-size: 22px;
        }
        h4{
          color: white;
          font-family: Playfair Display;
          font-weight: bold;
        }
        h3{
          color: white;
          font-family: Playfair Display;
        }
        p{
            font-size: 18px;
            font-family: Playfair Display;
            color: rgba(255, 235, 56, 1);
            font-weight: bold;
            padding-top: 3px;
        }
        #add{
            margin-top: 45px;
            font-weight: bold; 
        }
    </style>
    
    <body> 

      <nav class="navbar navbar-inverse">
        <div class="container-fluid">
          <div class="navbar-header">
            <a class="navbar-brand" href="#">Safety for Women</a>
          </div>
            <ul class="nav navbar-nav navbar-right">
              <li><a href="./Edit.php"><span class="glyphicon glyphicon-user"></span> Edit my account</a></li>
              <li><a href="../Controller/InfoController.php?Logout=true"><span class="glyphicon glyphicon-log-out"></span> Log Out</a></li>
            </ul>
          </div>
      </nav> 

      <div id="div1" class="container">
        <h3><b>My Dashboard</b></h3>
        <br>
        <h4>Name:</h4>
        <h4>Phone No.:</h4>
        <h4>Location:</h4>
      </div>  

      <div id="div2" class="container">
        <h3><b>Add Contact</b></h3>
        <br>
          <form action="../../Controller/ContactsController.php" method="post">
            
            <p>Name:</p> 
            <input type="text" name="cname">

            <p>Contact No. 1:</p>
            <input type="text" name="cphn1">

            <p>Contact No. 2:</p>
            <input type="text" name="cphn2">

            <br>
            
            <input type="submit" class="btn btn-info btn-lg" id="add" name="AddContact" value="Add Contact">

        </form>  
      </div> 

      <div id="div3" class="container">
        
            <button class="btn btn-circle" id="help" onclick="location.href='../Controller/TextController.php?HELP=true';">HELP!</button>

      </div>            

  </body>
</html>




<!--
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
-->