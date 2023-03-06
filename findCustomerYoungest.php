<?php 

$customerArr = [
    [
    'name' => 'Kelly',
    'age' => 30
   ],
   [
    'name' => 'Tom',
    'age' => 33
   ],
   [
    'name' => 'Jack',
    'age' => 35
   ],
   [
    'name' => 'Pau',
    'age' => 21
   ],
   [
    'name' => 'Meng',
    'age' => 10
   ]
   ];

   echo '<pre>';

     print_r($customerArr);
   
   '</pre>';

   if(!empty($customerArr)){

    $minCustAge  = $customerArr[0];

    
    $maxCustAge  = $customerArr[0];

    foreach($customerArr as $item){

        if($minCustAge['age'] >= $item['age']){

            $minCustAge  = $item;
        }


    
            if($maxCustAge['age'] <= $item['age']){
    
                $maxCustAge  = $item;
            }

    }
        echo '<pre>';
        
          print_r($minCustAge);
        
        '</pre>';

        
        echo '<pre>';
        
          print_r($maxCustAge);
        
        '</pre>';

   }