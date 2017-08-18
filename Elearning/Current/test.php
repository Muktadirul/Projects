<?php 
	include_once 'controllers/number_controller.php';
	include_once 'template/top.php';
?>
	<link rel="stylesheet" type="text/css" href="./assets/css/style.css">

	<h1>Let's Learn Addition!!</h1>
	<?php 
		$a=rand(0,9);
		$str1 = (string) $a;
		$b=rand(0,9);
		$str2 = (string) $b;
		$c=$a+$b;
		
	?>
	<?php //foreach ($numbers as $number): ?>

        <table>
            <tr class="add">
                <td><img height="90" width="70" src="assets/img/Math/Numbers/Numbers/<?php echo $str1.'.png'; ?>"></td>
                <td></td>
            	<td><img height="70" width="70" src="assets/img/Math/Numbers/Numbers/plus.png"></td>
            	<td><img height="90" width="70" src="assets/img/Math/Numbers/Numbers/<?php echo $str2.'.png'; ?>"></td>
            	<td></td>
            	<td><img height="60" width="80" src="assets/img/Math/Numbers/Numbers/eq.png"></td>
            	<td><textarea rows="1" cols="2" id="txt"></textarea></td>
            </tr>
            <tr rowspan="5">
            	<td colspan="2"><?php for ($i=0; $i <$a ; $i++): ?> <img height="60" width="80" src="assets/img/Math/clip arts/orange.png"><?php endfor ?> </td> 
            	<td></td>            	
            	<td colspan="2"><?php for ($i=0; $i <$b ; $i++): ?> <img height="60" width="80" src="assets/img/Math/clip arts/orange.png"><?php endfor ?></td> 
            	<td></td>
            	<td></td>
            </tr>
        </table>
			 					
	
</div>

<?php include_once 'template/bottom.php'; ?>
		