<?php  
    session_start();
    include_once '../../template/top.php';
    
?>
<link rel="stylesheet" type="text/css" href="../../assets/css/style.css">
<script type="text/javascript" src="../../assets/js/script.js">
</script>
<script type="text/javascript">
    var s=0;
    function score(){
        s=s+1;
        console.log(s);
    }
    function score1(){
        var cp="cp";
        window.location.href="../score.php?sc="+s+"&option="+cp;
    }
</script>    
<?php
    $c= "<script>s</script>"
;?>
<style type="text/css">@import url("../../assets/css/chooseRightPic.css");</style>	
 <h1>Choose the Right Picture</h1>

 <h3>Which is the picture of a <strong>LION</strong> ?</h3>
 <div class="main">   
     <div class="sub_div"><img id="flag" onclick="change_color();" src="../../assets/img/English/Test/cat.jpg"></div>
     <div class="sub_div"><img id="flag" onclick="score(); this.onclick=null;" src="../../assets/img/English/Test/Lion.png"></div>
     <div class="sub_div"><img id="flag" onclick="change_color();" src="../../assets/img/English/Test/pig.jpg"></div>
     <div class="sub_div"><img id="flag" onclick="change_color();" src="../../assets/img/English/Test/horse.png"></div>    
 </div>
 
 <h3>Which is the picture of a <strong>Rose</strong> ?</h3>
 <div class="main">   
     <div class="sub_div"><img id="flag"onclick="score(); this.onclick=null;" src="../../assets/img/English/Test/rose.jpg"></div>
     <div class="sub_div"><img id="flag" src="../../assets/img/English/Test/lotus.jpg"></div>
     <div class="sub_div"><img id="flag"src="../../assets/img/English/Test/sunflower.jpg"></div>
     <div class="sub_div"><img id="flag"src="../../assets/img/English/Test/marigold.jpg"></div>    
 </div>

 <h3>Which is the picture of a <strong>Mango</strong> ?</h3>
 <div class="main">   
     <div class="sub_div"><img id="flag" onclick="change_color();" src="../../assets/img/English/Test/banana.jpg"></div>
     <div class="sub_div"><img id="flag" onclick="change_color();" src="../../assets/img/English/Test/apple.jpg"></div>
     <div class="sub_div"><img id="flag" onclick="score(); this.onclick=null;" src="../../assets/img/English/Test/mango.png"></div>
     <div class="sub_div"><img id="flag" onclick="change_color();" src="../../assets/img/English/Test/grape.jpg"></div>    
 </div>
 
 <h3>Which is the picture of a <strong>Parrot</strong> ?</h3>
 <div class="main">   
     <div class="sub_div"><img id="flag" onclick="change_color();" src="../../assets/img/English/Test/sparrow.jpg"></div>
     <div class="sub_div"><img id="flag" onclick="change_color();" src="../../assets/img/English/Test/crow.jpg"></div>
     <div class="sub_div"><img id="flag" onclick="score(); this.onclick=null;" src="../../assets/img/English/Test/parrot.jpg"></div>
     <div class="sub_div"><img id="flag" onclick="change_color();" src="../../assets/img/English/Test/pigeon.jpg"></div>    
 </div>
 
 <h3>Which is the picture of a <strong>Cauliflower</strong> ?</h3>
 <div class="main">   
     <div class="sub_div"><img id="flag" onclick="change_color();" src="../../assets/img/English/Test/beans.jpg"></div>
     <div class="sub_div"><img id="flag" onclick="change_color();" src="../../assets/img/English/Test/potato.jpg"></div>
     <div class="sub_div"><img id="flag" src="../../assets/img/English/Test/eggplant.jpg"></div>
     <div class="sub_div"><img id="flag"  onclick="score(); this.onclick=null;" src="../../assets/img/English/Test/cauliflower.jpg"></div>    
 </div>
 <button  type="submit" onclick="score1();">Submit</button>
 <button onclick="location.href='../engTest.php'">Back</button>
 

<?php
include_once '../../template/bottom.php';?>

