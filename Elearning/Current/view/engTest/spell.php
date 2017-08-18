<?php 
    include_once '../../template/top.php';
?>
<link rel="stylesheet" type="text/css" href="../../assets/css/style.css">
<style type="text/css">@import url("../../assets/css/spell.css");</style>
<script type="text/javascript" src="../../assets/js/script.js"></script>  
<script type="text/javascript">
    var spell=0;
    function score(){
        var A1="Sparrow";
        var A2="Marigold";
        var A3="Eggplant";
        var A4="Jasmine";
        var A5="Rabbit";
        
        var a1= document.getElementById("ans1").value;
        var a2= document.getElementById("ans2").value;
        var a3= document.getElementById("ans3").value;
        var a4= document.getElementById("ans4").value;
        var a5= document.getElementById("ans5").value;
        
        if(A1.localeCompare(a1)==0){
            spell++;
        }
        if(A2.localeCompare(a2)==0){
            spell++;
        }
        if(A3.localeCompare(a3)==0){
            spell++;
        }
        if(A4.localeCompare(a4)==0){
            spell++;
        }
        if(A5.localeCompare(a5)==0){
            spell++;
        }
        
        var sp="sp";
        window.location.href="../score.php?sc="+spell+"&option="+sp;
    }
</script>
<style type="text/css">@import url("../../assets/css/rightWrong.css");</style>

 <h1>Spell the Word</h1>
 
 <form method="post">
    <h3>Which bird do you see in the picture?</h3>
    <div><img id="sparrow" src="../../assets/img/English/Test/sparrow.jpg"></div> <input id="ans1" type="text" placeholder="Enter Here"><br><hr>
    <h3>Which flower do you see in the picture?</h3>
    <div><img id="marigold" src="../../assets/img/English/Test/marigold.jpg"></div> <input id="ans2" type="text" placeholder="Enter Here"><br><hr>
    <h3>Which vegetable do you see in the picture?</h3>
    <div><img id="eggplant" src="../../assets/img/English/Test/eggplant.jpg"></div> <input id="ans3" type="text" placeholder="Enter Here"><br><hr>
    <h3>Which flower do you see in the picture?</h3>
    <div><img id="jasmine" src="../../assets/img/English/Test/jasmine.jpg"></div> <input id="ans4" type="text" placeholder="Enter Here"><br><hr>
    <h3>Which animal do you see in the picture?</h3>
    <div><img id="rabbit" src="../../assets/img/English/Test/rabbit.jpg"></div> <input id="ans5" type="text" placeholder="Enter Here"><br><hr>
</form>
 
 <button type="submit" onclick="score()">Submit</button>
 <button onclick="location.href='../engTest.php'">Back</button>
 
<?php include_once '../../template/bottom.php'; ?>


