<?php 
            include_once '../view/mathTest/add.php';
            
            if(isset($_POST['ans'])){
            if($_POST['ans']==$c){
                echo 'Right';
                echo '<script type="text/javascript" src="../../assets/js/script.js">right();</script>';
            }
            else{
                echo 'Wrong';
                echo '<script type="text/javascript" src="../../assets/js/script.js">wrong();</script>';
            }
            }   
             ?>
