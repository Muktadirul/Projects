var imgAr = ["cat.jpg", "cow.jpg", "crow.jpg", "lotus.jpg", "mango.jpg", "apple.jpg", "horse.png"];
var s=0,count=2;
function getRandomImage() {
    document.write('hello');
    path = '../img/English/Test/'; // default path here
    var num = (Math.random()*100)%7 ;
    var img = imgAr[ num ];
    var imgStr = '<img src="'+path + img+'">';
    document.write(imgStr); //document.close();
}

function check(){
                if(document.getElementById('ans').value==$c){
                  document.getElementById('ans').innerHTML="Right!"
                }
                else{
                  document.getElementById('ans').innerHTML="Wrong!"  
                }
            }

function showDiv(){
    document.getElementById('showDiv').style.display="block";    
}
function right(){
    console.log("right "+s);
    document.getElementById('showDiv').innerHTML="<h1>Right</h1>";
}
function wrong(){
    console.log("wrong");
    document.getElementById('showDiv').innerHTML="<h1>Wrong</h1><h3>Correct answer is "+c+"</h3>";
}

function score(){
    s=s+1;
    console.log(s);
    //change_color();
}

function show_score(){
    document.cookie=escape(score)+"="+escape(s);
}

function add_Check(a,b){
    ans=document.getElementById('ans').value;
    console.log("a"+a);
    console.log("b"+b);
    c = parseInt(a) + parseInt(b);
    console.log("c"+c);
    console.log("ans"+ans);
    count--;
    
    if(c == ans){
        ++s;    
        console.log("score "+s);
        right();
    }    
    else{
        wrong();
    }
    
}

function countCheck(a){
    ans=document.getElementById('cans').value;
    console.log("a"+a);
    c = parseInt(a);
    console.log("c"+c);
    console.log("ans"+ans);
    count--;
    if(count==0){
        alert("score "+s);
    }
    if(c == ans){
        //sessionStorage.s=(sessionStorage.s)+1;
        console.log("score "+score);
        right();
        
    }
    else{
        wrong();
    }
    
}


function change_color(){
    document.getElementById('flag').style.border= "10 px solid red";
    console.log("color");
}

function addCheck(a,b){
    ans=document.getElementById('ans').value;
    console.log("a"+a);
    console.log("b"+b);
    c = parseInt(a) + parseInt(b) ;
    console.log("c"+c);
    console.log("ans"+ans);
    
    if(c == ans){
        right();
    }
    else{
        wrong();
    }
}

function subCheck(a,b){
    ans=document.getElementById('ans').value;
    console.log("a"+a);
    console.log("b"+b);
    c = parseInt(a) - parseInt(b) ;
    console.log("c"+c);
    console.log("ans"+ans);
    
    if(c == ans){
        right();
    }
    else{
        wrong();
    }
}

function guess_score(){
    var a = document.getElementById("q1").value;
    if(a=="Potato"){
        score();
    }
    else{
        console.log(a);
    }
    var b = document.getElementById("q2").value;
    if(b=="Milk"){
        score();
    }
    else{
        console.log(b);
    }
    var c = document.getElementById("q3").value;
    if(c=="Watermelon"){
       score();
    }
    else{
         console.log(c);
    }
    show_score();
}

function rw_score(){
    if(document.getElementById('q1').value=="wrong") score();
    if(document.getElementById('q2').value=="wrong") score();
    if(document.getElementById('q3').value=="right") score();
    if(document.getElementById('q4').value=="right") score();
    if(document.getElementById('q5').value=="wrong") score();
    localStorage.setItem(score,s);
}