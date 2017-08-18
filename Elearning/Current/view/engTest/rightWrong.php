<?php 
    include_once '../../template/top.php';
?>
<link rel="stylesheet" type="text/css" href="../../assets/css/style.css">

<script type="text/javascript">
    var s=0;
    function score(){
        s=s+1;
        console.log(s);
    }
function score1(){
        var rw="rw";
        
        window.location.href="../score.php?sc="+s+"&option="+rw;
    }
</script>
<style type="text/css">@import url("../../assets/css/rightWrong.css");</style>	
 
<h1>Right or Wrong?</h1>
<form method="post" >
<div class="spell">
 <h3>This is a Tiger</h3>
 <img src="../../assets/img/English/Test/cat.jpg" id="cat"> <br>
 <input name="q1" value="right" type="radio">Right</input> <input type="radio" name="q1" value="wrong" onclick="score();this.onclick=null;">Wrong</input>
 <br><br><hr>
 
 <h3>This is a Sunflower</h3>
 <img src="../../assets/img/English/Test/daffodil.jpg" id="daffodil"> <br>
 <input type="radio" name="q2" value="right">Right</input> <input type="radio" name="q2" value="wrong" onclick="score();this.onclick=null;">Wrong</input>
 <br><br><hr>
 
 <h3>This is a Pigeon</h3>
 <img src="../../assets/img/English/Test/pigeon.jpg" id="pigeon"> <br>
 <input type="radio" name="q3" value="right" onclick="score();this.onclick=null;">Right</input> <input type="radio" name="q3" value="wrong">Wrong</input>
 <br><br><hr>
 
 <h3>This is a Rat</h3>
 <img src="../../assets/img/English/Test/rat.jpg" id="rat"> <br>
 <input type="radio" name="q4" value="right" onclick="score();this.onclick=null;">Right</input> <input type="radio" name="q4" value="wrong">Wrong</input>
 <br><br><hr>
 
 <h3>This is a Goat</h3>
 <img src="../../assets/img/English/Test/sheep.jpg" id="sheep"> <br>
 <input type="radio" name="q5" value="right">Right</input> <input type="radio" name="q5" value="wrong" onclick="score();this.onclick=null;">Wrong</input>
 <br><br><hr>
 
 
 </div>
 </form>
<button onclick="score1();">Submit</button>
 <button onclick="location.href='../engTest.php'">Back</button>
<?php include_once '../../template/bottom.php'; ?>


