<link rel="stylesheet" type="text/css" href="../../assets/css/style.css">
<style type="text/css">@import url("../../assets/css/login.css");</style>
<div class="form">
    <script type="text/javascript" src="../../assets/js/regValidation.js">
    function regValidation(){
    var name=document.forms["login"]["username"].value;
    var email=document.forms["login"]["email"].value;
    var pass=document.forms["login"]["password"].value;
     //name
    
    var npatt=/[a-zA-Z ]$/;
   
    if(name=="" ||  name==null || !npatt.test(name)){
        if(name=="" || name==null){alert('Please Fill up the form').focus();return false;}
        if(!npatt.test(name)){alert('Filled up the name with only charecter').focus();return false;}
    }
    
    //email
    
    var epatt=/[a-z.]+@[a-z]+\.[a-z]{3,}$/;
    if(email=="" || !epatt.test(email) || email==null){
        if(email=="" || email==null){alert('Please Filled up the email part').focus();return false;}
        if(!epatt.test(email)){alert('Email address not valied').focus();return false;}
    }
      
     
    //pass
    var passpatt=/(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]{8,}$/;
    if(pass=="" || pass.length<8 || pass==null||!passpatt.test(pass)){
        if(pass.length <8){alert('Password length shoud be more than or eqal 8').focus();return false;}
        if(pass="" || pass== null){alert('Password not filled up').focus();return  false;}
        Console.log(pass);
        if(!passpatt.test(pass)){alert('Password Must contain 1 capital 1 small and 1 digit').focus();return false;}        
    }
    window.location.href="../../controllers/logincon.php";
}

    
    </script>
<h1>Log In</h1>
<form action="../../controllers/logincon.php" method="post" onsubmit=" regValidation()()" name="login">
<input type="text" id="username" name="username" placeholder="Username"  />
<input type="password" id="password" name="password" placeholder="Password"  />
<br>
<input name="submit" type="submit" value="Login" />
</form>
<p>Not registered yet? <a href='registration.php'>Register Here</a></p>
</div>
<?php  
 include_once '../../template/bottom.php';?>
