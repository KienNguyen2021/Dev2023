<?php 

$customArr []['name'] = 'Kelly nguyen';
$customArr [3]['email'] = 'Kelly.nguyen@hotmail.com';
$customArr  [3]['phone'] = '111 11112222222';
$customArr [3]['address'] = '124 Q3, Saigon';


$customArr ['special']['positions'] =[
    'Technical',
    'CEO',
    'Manager',
    'Team leader'
];


if (!empty ($customArr) && is_array($customArr)){

    foreach ($customArr as $item){
         
        if (is_array($item)){
            if(!empty($item)){
                echo 'Thong tin khach hang : <br/>';

                foreach ($item as $subArr){
                     
                    if(is_array($subArr)){

                        echo "Cong viec : <br/>";
                        foreach ($subArr as $positions){
                            echo $positions.'<br/>';
                        }

                    }
                    else{

                        echo $subArr.'<br/>';
                    }
                }

                echo'<hr/>';
            }
        }
        else{
            echo $item.'<br/>';
        }
    }
}