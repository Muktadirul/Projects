<?php 
	include_once '../../controllers/number_controller.php';
	include_once '../../template/top.php';
        
        ?>
<link rel="stylesheet" type="text/css" href="../../assets/css/style.css">

	<h1>Let's Learn Subtraction!!</h1>
	<?php 
		$a=rand(0,9);
		$str1 = (string) $a;
		$b=rand(0,9);
		$str2 = (string) $b;
                if($a>$b){
		$c=$a-$b;
                }
                else{                   
                    $temp=$a;
                    $a=$b;
                    $str1 = (string) $a;
                    $b=$temp;
                    $str2 = (string) $b;
                    $c=$a-$b;
                }
                $str3 = (string) $c;
		
	?>
	<?php //foreach ($numbers as $number): ?>

        <table width="100%">
            <tr class="add">
                <td><img height="90" width="70" src="../../assets/img/Math/Numbers/Numbers/<?php echo $str1.'.png'; ?>"></td>
                
                <td><img height="70" width="70" src="../../assets/img/Math/Numbers/Numbers/minus.png"></td>
            	<td><img height="90" width="70" src="../../assets/img/Math/Numbers/Numbers/<?php echo $str2.'.png'; ?>"></td>
            	
            	<td><img height="60" width="80" src="../../assets/img/Math/Numbers/Numbers/eq.png"></td>
                <?php if($c<10): ?>
            	<td><img height="90" width="70" src="../../assets/img/Math/Numbers/Numbers/<?php echo $str3.'.png'; ?>"></td> <?php endif; ?>
                <?php if($c>=10){
                    $d=$c/10;
                    $str4 = (string) $d;
                    $e=$c%10;
                    $str5 = (string) $e;
                ?>
                <td><img height="90" width="70" src="../../assets/img/Math/Numbers/Numbers/<?php echo $str4.'.png'; ?>"></td>
                <td><img height="90" width="70" src="../../assets/img/Math/Numbers/Numbers/<?php echo $str5.'.png'; ?>"></td>
                <?php } ?>
            </tr>
            <tr rowspan="5">
            	<td><?php for ($i=0; $i <$a ; $i++): ?> <img height="60" width="80" src="../../assets/img/Math/clip arts/orange.png"><?php endfor ?> </td> 
            	<td></td>            	
            	<td><?php for ($i=0; $i <$b ; $i++): ?> <img height="60" width="80" src="../../assets/img/Math/clip arts/orange.png"><?php endfor ?></td> 
            	<td></td>
            	<td><?php for ($i=0; $i <$c ; $i++): ?> <img height="60" width="80" src="../../assets/img/Math/clip arts/orange.png"><?php endfor ?></td>
            </tr>
        </table>
        <button onclick="location.href='sub.php';">Next</button>
        <button onclick="location.href='../mathLessons.php';">Back</button>
</div>

<?php include_once '../../template/bottom.php'; ?>
		