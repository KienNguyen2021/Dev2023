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


        $keyword = 'kelly';
        $result = [];


   if(!empty($customerArr)){


         foreach($customerArr  as  $item){


           $customName  =   $item['name'];

    
           $customName  = mb_strtolower($customName, 'UTF-8');
           
           $chechSearch = mb_strpos($customName,$keyword, NULL, 'UTF-8');

            
           if ($chechSearch !== false){

                   $result []= $item;

                  }
                }      

        }

        echo '<pre>';
        
            print_r($result);
        
       echo '</pre>';

        
