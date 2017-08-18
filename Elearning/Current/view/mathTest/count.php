<?php 
	//include_once '../../controllers/addHandle.php';
	include_once '../../template/top.php';
?>

<link rel="stylesheet" type="text/css" href="../../assets/css/style.css">
<script type="text/javascript" src="../../assets/js/script.js"></script>
<script>
    
    function p(){
        ans=document.getElementById('cans').value;
        
        var add="cnt";
        var c3="1";
        if(a==ans){
            window.location.href="../score.php?sc="+1+"&option="+add+"&count="+c3;
        }
        else{
            window.location.href="../score.php?sc="+0+"&option="+add+"&count="+c3;
        }
    }
</script>
	<h1>Let's Count!!</h1>
        
	<?php 
		$a=rand(1,9);
		$str1 = (string) $a;
	?>
        <script type="text/javascript">
        a = "<?php echo $a; ?>";
        </script>
        <form method="post" >
            <?php for ($i=0; $i <$a ; $i++): ?> <img height="100" width="100" src="../../assets/img/Math/clip arts/tiger.png"><?php endfor ?>  
            <br>
            <textarea id="cans"></textarea>
            <div id="showDiv"></div>
            
            <br> 
       
        </form>
        <button onclick="countCheck(a);">Submit</button>
         <button onclick="p(a);">Next</button>
         <br>
        <button onclick="location.href='../mathTest.php';">Back</button>
        
       
<?php include_once '../../template/bottom.php'; ?>
		