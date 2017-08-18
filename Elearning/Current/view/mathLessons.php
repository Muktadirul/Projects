<?php 
    include_once '../template/top.php';
?>
<script>
   function change_background(){
       $('div3').css('background-image','url(../assets/img/Backgrounds/back8.jpg)');
   }
</script>
 <h1>Math Lessons</h1>
 
 <ul>
     <li><a href="./mathLessons/count.php">Counting 1 to 10</a></li>
     <li><a href="./mathLessons/numbers1-20.php">Numbers 1 to 20</a></li>
     <li><a href="./mathLessons/numbers1-100.php">Chart of Numbers 1 to 100</a></li>
     <li><a href="./mathLessons/add.php" onclick="change_background();">Addition</a></li>
     <li><a href="./mathLessons/sub.php">Subtraction</a></li>
 </ul>
 
 <button onclick="location.href='learn.php'">Back</button>
 
<?php include_once '../template/bottom.php'; ?>


