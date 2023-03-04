<?php 
 
 $i = 0;

 while ($i <10){
    $i++;
    echo 'vong lap thu :'.$i.'<br />';

 }
 ?>

 <?php 
 echo'<hr/>';

 $i = 1;
 $n = 10;
 $totalAdd = 0;
 while ($i <=$n)
 {
  
    $totalAdd +=$i;
    $i++;
 }
 echo 'tong tu 0 toi 10 :'.$totalAdd.'<br />';

 ?>
 <?php 
  echo "<hr/>";

  $i = 1;

  do{
 
    echo $i.'<br/>';
    $i++;
   
  }
  while ($i <=10);