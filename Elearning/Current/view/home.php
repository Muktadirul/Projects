<?php include("./loginlogoutregister/auth.php"); //include auth.php file on all secure pages 
 include_once '../template/top.php';
?>
<title>Welcome Home</title>
<link rel="stylesheet" href="../assets/css/style.css" />
<link href='https://fonts.googleapis.com/css?family=Butterfly+Kids' rel='stylesheet' type='text/css'><div class="form">
    <center><h2 id="wel1">Welcome <?php echo $_SESSION['username']; $id=$_SESSION["id"];?>!</h2></center>
    <h1 id='wel2'"><center>Let's start learning!!</center></h1>
</div>

<?php include_once '../template/bottom.php';?>