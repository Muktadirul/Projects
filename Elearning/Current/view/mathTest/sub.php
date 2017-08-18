<?php 
	include_once '../../template/top.php';
?>
<link rel="stylesheet" type="text/css" href="../../assets/css/style.css">
<script type="text/javascript" src="../../assets/js/script.js"></script>     
<script type="text/javascript">
    function subcheck(a,b){
        
        ans=document.getElementById('ans').value;
        console.log("a"+a);
        console.log("b"+b);
        c = parseInt(a) - parseInt(b);
        console.log("c"+c);
        console.log("ans"+ans);
        var add="sub";
        var c3="1";
        
        if(c==ans){
            window.location.href="../score.php?sc="+1+"&option="+add+"&count="+c3;
        }
        else{
            window.location.href="../score.php?sc="+0+"&option="+add+"&count="+c3;
        }
    }
</script>

<h1>Let's Do Subtraction!!</h1>
        
	<?php 
		$a=rand(1,9);
		$str1 = (string) $a;
		$b=rand(0,9);
		$str2 = (string) $b;
		if($a<$b){
                    $temp=$a;
                    $a=$b;
                    $str1 = (string) $a;
                    $b=$temp;
                    $str2 = (string) $b;
                }                                
	?>
        <script>
                a = "<?php echo $a; ?>";    
                b = "<?php echo $b; ?>";                
        </script>
        <form method="post" action="" onchange="">
            <table>
            <tr class="add">
                <td><img height="90" width="70" src="../../assets/img/Math/Numbers/Numbers/<?php echo $str1.'.png'; ?>"></td>
                <td></td>
                <td><img height="70" width="70" src="../../assets/img/Math/Numbers/Numbers/minus.png"></td>
            	<td><img height="90" width="70" src="../../assets/img/Math/Numbers/Numbers/<?php echo $str2.'.png'; ?>"></td>
            	<td></td>
            	<td><img height="60" width="80" src="../../assets/img/Math/Numbers/Numbers/eq.png"></td>
            	<td><textarea rows="1" cols="2" id="ans" name="ans"></textarea></td>
            </tr>
            
            <tr rowspan="5">
            	<td colspan="2"><?php for ($i=0; $i <$a ; $i++): ?> <img height="60" width="80" src="../../assets/img/Math/clip arts/orange.png"><?php endfor ?> </td> 
            	<td></td>            	
            	<td colspan="2"><?php for ($i=0; $i <$b ; $i++): ?> <img height="60" width="80" src="../../assets/img/Math/clip arts/orange.png"><?php endfor ?></td> 
            	<td></td>
            	<td></td>
            </tr>
        </table>
            <div id="showDiv"></div>
            
            <br> 
        </form>
        <button onclick="subCheck(a,b);">Submit</button>
        <button onclick="subcheck(a,b);">Next</button>
        <br>
        <button onclick="location.href='../mathTest.php';">Back</button>
        
        
<?php include_once '../../template/bottom.php'; ?>
		