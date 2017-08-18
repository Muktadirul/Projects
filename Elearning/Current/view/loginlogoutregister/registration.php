<link rel="stylesheet" type="text/css" href="../../assets/css/style.css">
<style type="text/css">@import url("../../assets/css/login.css");</style>
<script type="text/javascript" src="../../assets/js/regValidation.js"></script>
<div class="form">
<h1>Registration</h1>
<form name="registration" action="../../controllers/regcon.php" method="post" name="login">
    <input type="text" name="username" id="username" placeholder="Username"  />
<input type="email" name="email" id="email" placeholder="Email"  />
<input type="password" name="password" id="password" placeholder="Password"  />
<br>
<input type="submit" name="submit" onclick="validate();" value="Register" />
</form>
</div>
<?php 
 include_once '../../template/bottom.php';?>



