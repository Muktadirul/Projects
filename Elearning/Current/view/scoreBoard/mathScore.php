<?php
include_once '../../template/top.php';?>
<link rel="stylesheet" type="text/css" href="../../assets/css/style.css">

<?php
session_start();
if($_SESSION["id"]==''){
    header("Location: ../loginlogoutregister/loginerr.php");
}
include_once '../../template/top.php';
require '../../Connect.php';
$id=$_SESSION["id"];
$sql="select * from math_score where id ='$id';";
$result=  mysql_query($sql);
//var_dump($result);die();
$result=  mysql_fetch_assoc($result);

?>

<form>
    <h1>Hello <?php echo $_SESSION["username"];?>!</h1>
    <h1><b>Your Math ScoreBoard</b></h1>
    <table>
       
        <tr>
            <td style="padding-left: 50px;"></td>
            <td>Count</td>
            <td>Addition</td>
            <td>Subtraction</td>
            
            
        </tr>
        <tr>
            <td style="padding-left: 50px;"></td>
            <td style="padding-left: 30px;"><?php echo $result["count"];?></td>
            <td style="padding-left: 30px;"><?php echo $result["add"];?></td>
            <td style="padding-left: 30px;"><?php echo $result["sub"];?></td>
        </tr>
    </table>
</form>
<button onclick="location.href='../scoreBoard.php'">Back</button>
<?php include_once '../../template/bottom.php'; ?>