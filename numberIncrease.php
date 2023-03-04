<?php 

$n = 5;

$count = 0;

for ($row =1; $row <=$n; $row ++){

      for ($col =1; $col <=$row; $col++){

        $count++;

        if($col < $row){

            echo $count.'';
        }

        else{
            echo $count;
        }    
        
      }

      echo '<br/>';
    
}

