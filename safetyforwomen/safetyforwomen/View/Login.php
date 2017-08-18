<!DOCTYPE html>

<html lang="en">
    <head>
        <title>Login</title>
        <meta charset="UTF-8">      
        <meta name="viewport" content="width=device-width, initial-scale=1">
              <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
              <link href='https://fonts.googleapis.com/css?family=Dancing+Script|Great+Vibes|Lobster' rel='stylesheet' type='text/css'>
              <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
              <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
            <meta http-equiv="Content-Type" content="text/html; charset=utf-8"></head>       
        <style type="text/css">
            .container{
                padding: 30px;
            }
            .block{
                background-color: rgba(28, 53, 94, 0.58);
                height: 220px;
                width: 35%;
                margin-top: 50px;
                margin-left: 365px;
                padding: 25px;
            }
            #btn{
                margin-left: 38%;
                margin-top: 10px;

            }
            label{                
                color: white;
                font-size: 18px;
            }
            h1{
                color:#CA5021;
                font-family: "Lobster";
                font-size: 70px;
                text-align: center;
                text-shadow:5px 5px 2px #2B052E;
            }
            body{
                background-image: url(http://www.excitecs.com/wp-content/uploads/2014/06/atlanta-web-design-background.jpg);
            }
            a{
                color: white;
                font-size: 18px;
            }
            a:hover {
                color: #FDFC52;
            } 
        </style>

    </head>

    <body>
        
        <div class="container">
            <h1>Safety for Women</h1>
            <div class="block">
                <form action="../Controller/LoginController.php" method="post"  class="form-horizontal" role="form">
           
                    <div class="form-group">
                    <label class="control-label col-sm-5">Name:</label>
                        <div class="col-sm-7">
                            <input type="text" name="name">
                        </div>
                    </div> 
                          
                    <div class="form-group">
                    <label class="control-label col-sm-5">Password:</label>
                        <div class="col-sm-7">
                            <input  name="pw" placeholder="**********" type="password">
                        </div>
                    </div> 

                    <input type="submit" name="Login" class="btn btn-danger btn-lg" id="btn" value="Log In">

                </form>
                <a href="./CoverPage.php"><span class="glyphicon glyphicon-menu-left"></span>back</a>   
            </div>            
        </div>

    </body>
</html>