<?php 

$demoArr = [
  10,
  4,
  6,
  12,
  3,
  66,
  34,
  1,
  33,
  8,
  29,
  40
];

echo '<pre>';
 
    print_r($demoArr);

echo '</pre>';

//find max number

if (!empty($demoArr)){

   $max = [
    'key'  => 0,
    'value'  => $demoArr[0]

   ];   // Suppose the max No is the first No of Array
   

   $min =[
    'key' => 0,
    'value' => $demoArr[0]

   ];   // Support the min No is the the first value of Array


    foreach ($demoArr as $key =>$item){

       if ($max['value'] <= $item){

          $max ['value'] = $item;
          $max['key'] =  $key;

     
        }

        if ($min['value'] >= $item){

            $min['value'] = $item;
            $min['key'] =  $key;
  
       
          }


    }
      echo '<hr />';

   echo ' The max value : ' .$max['value']. ' and its index : '. $max['key'] .'<br/>';

   echo '<hr />';

   echo ' The min value : ' .$min['value']. ' and its index : '. $min['key']. '<br/>';


};

