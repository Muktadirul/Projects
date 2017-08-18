<?php 
    include_once '../../template/top.php';
?>
<link rel="stylesheet" type="text/css" href="../../assets/css/style.css">
<script type="text/javascript" src="../../assets/js/script.js"></script>     
<style type="text/css">@import url("../../assets/css/guessWord.css");</style>
<script type="text/javascript">
    var s=0;
    function score(){
        s=s+1;
        console.log(s);
    }
    function score1(){
        var gw="gw";
        window.location.href="../score.php?sc="+s+"&option="+gw;
    }
</script>  
 <h1>Guess the Word!!</h1>
 
 <form method="post">
     
 <h3>Which vegetable do you see in the picture?</h3>
 <div><img src="../../assets/img/English/Test/potato.jpg"></div>
 <input type="radio" value="Eggplant" name="q1" id="q1">Eggplant<br>
 <input type="radio" value="Carrot" name="q1" id="q1">Carrot<br>
 <input type="radio" value="Potato" name="q1" id="q1" onclick="score(); this.onclick=null;">Potato<br>
 <input type="radio" value="Tomato" name="q1" id="q1">Tomato<br>
 
 <h3>Which drink do you see in the picture?</h3>
 <div><img src="../../assets/img/English/Test/milk.jpg" id="milk"></div>
 <input type="radio" value="Eggplant" name="q2" id="q2">Orange Juice<br>
 <input type="radio" value="Milk" name="q2" id="q2" onclick="score(); this.onclick=null;">Milk<br>
 <input type="radio" value="Potato" name="q2" id="q2">Water<br>
 <input type="radio" value="Tomato" name="q2" id="q2">Coffee<br>
 
 <h3>Which fruit do you see in the picture?</h3>
 <div><img src="../../assets/img/English/Test/watermelon.jpg"></div>
 <input type="radio" value="Eggplant" name="q3" id="q3">Banana<br>
 <input type="radio" value="Carrot" name="q3" id="q3">Jackfruit<br>
 <input type="radio" value="Potato" name="q3" id="q3">Papaya<br>
 <input type="radio" value="Watermelon" name="q3" id="q3" onclick="score(); this.onclick=null;">Watermelon<br>
 
 <h3>Which animal do you see in the picture?</h3>
 <div><img src="../../assets/img/English/Test/sheep.jpg" id="sheep"></div>
 <input type="radio" value="Sheep" name="q4" id="q4" onclick="score(); this.onclick=null;">Sheep<br>
 <input type="radio" value="Carrot" name="q4" id="q4">Goat<br>
 <input type="radio" value="Potato" name="q4" id="q4">Cow<br>
 <input type="radio" value="Watermelon" name="q4" id="q4">Bull<br>
 
 <h3>Which animal do you see in the picture?</h3>
 <div><img src="../../assets/img/English/Test/zebra.jpg" id="zebra"></div>
 <input type="radio" value="Sheep" name="q4" id="q4">Deer<br>
 <input type="radio" value="Carrot" name="q4" id="q4">Kangaroo<br>
 <input type="radio" value="Potato" name="q4" id="q4" onclick="score(); this.onclick=null;">Zebra<br>
 <input type="radio" value="Watermelon" name="q4" id="q4">Giraffe<br>
 
 </form>
 
 <button onclick="score1();">Submit</button>
 <button onclick="location.href='../engTest.php'">Back</button>
 
 
<?php include_once '../../template/bottom.php'; ?>


