<?php 

$n = 5;

for ($row =1; $row <=$n; $row ++){

      for ($col =1; $col <=$row; $col++){

        if($col < $row){
             echo'* ';
        }
        else{
            echo '*';
        }
         
      }

     echo '<br/>';
    

}
