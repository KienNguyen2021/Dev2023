<?php 
for($i = 0; $i <=30; $i+=3)
{
     echo $i .''.  'today I learn PHP'.'<br />';
}
     echo '<br />';


     $n = 10;
     $s = 0;

     for ($i = 0; $i <= $n; $i++){
        
        $s += $i;
        echo 'Tong S tu 0 toi 10 = '.$s.'<br />'.'<hr />';
     }

    echo '<hr />';

    $starIndex =1;
    $endIndext = 10;

    $resultEven = null;  // so chan
    $resultOdd = null ;  // se le

    $countEven = 0;
    $countOdd = 0;

    for ($index = $starIndex; $index <= $endIndext; $index ++)
    {
        // Kiem tra so chan
        if ($index % 2 == 0){
            $resultEven.=$index.' ';   // noi bien
            $countEven ++;
        }
        else{
            $resultOdd.=$index.' ';   // noi bien
            $countOdd ++;
        }

    }   


    if ($countEven > 0)
    {
        echo "Tong so chan : ".$countEven.'  So chan la :'.$resultEven.'<br />';
       
    }
    else{
        echo "khong tim thay so chan. ".'<br />';

    }

    if($countOdd > 0){

        echo 'tong se le :   '.$countOdd. '  so le la : '.$resultOdd;
    }
   else{
    echo 'Khong tim thay so le ';
   }
