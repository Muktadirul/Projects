<?php 
    include_once '../../Connect.php';
    include_once '../../template/top.php';
    //array pic[27]={'A','A'};
?>
<link rel="stylesheet" type="text/css" href="../../assets/css/style.css">
<?php

$perpage = 1;

if(isset($_GET["page"])){
	$page = intval($_GET["page"]);
}
else {
$page = 1;
}
//echo $page;
$calc = $perpage * $page;
$start = $calc - $perpage;


$rows = 1;

if($rows){
	$i = 0;
	
?>
<h1 id='word'><center>Let's Learn Counting</center></h1>
<table>
    <tr>
        <td><img id="count" src="../../assets/img/Math/learn count/<?php echo $page.'.jpg'; ?>"></td>
        
    </tr>
    
</table>
<?php
}
//}
?>


<table width="800"  align="center">
<tbody>
<tr>
<td align="center">

<?php

if(isset($page)){
$totalPages = 10;
        if($page <=1 ){
            echo "<span id='page_links' style='font-weight: bold;'>Prev</span>";
        }
        else{
            $j = $page - 1;
            echo "<span><a id='page_a_link' href='count.php?page=$j'>< Prev</a></span>";
        }

       for($i=1; $i <= $totalPages; $i++){
            if($i<>$page){
                echo "<span><a id='page_a_link' href='count.php?page=$i'>&nbsp$i</a></span>";
            }
            else{
                echo "<span id='page_links' style='font-weight: bold;'>&nbsp$i</span>";

            }

        }

        if($page == $totalPages ){
            echo "<span id='page_links' style='font-weight: bold;'>Next ></span>";
        }
        else{
            $j = $page + 1;
            echo "<span><a id='page_a_link' href='count.php?page=$j'>&nbspNext</a></span>";
        }
    }

?></td>
<td></td>
</tr>
</tbody>
</table>

<button onclick="location.href='../mathLessons.php';">Back</button>
<?php include_once '../../template/bottom.php';?>