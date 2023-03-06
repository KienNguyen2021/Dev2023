<?php 


function buildMenu($menuArr, $isSub = false){

    if (!empty($menuArr)){

       echo ($isSub)?'<ul class ="sub-menu">' : '<ul class ="menu">';

       foreach ($menuArr as $item){

        echo '<li>';
        

          echo '<a href ="'.$item['link'].'">'.$item['title'].'</a>';
       
  // Take Submenu :
  
    if (!empty($item['sub'])){

                 buildMenu($item['sub'], true);
            }
        
        echo '</li>';

       }

      echo '</ul>';

    }
}

//function makeMenu($menuArr, $parentId = 0){
     
 //   if (!empty($menuArr)){

 //       echo '<ul  class = "menu">'; 

 //       foreach ($menuArr as $item ){
 //           if($item['parent'] == $parentId ){
               
  //              echo '<li>';
                
  //              echo '<a href ="'.$item['link'].' " >'.$item['title'].'</a>';

  //                 makeMenu($menuArr, $item['id']); // Show all Submenu
                
  //              echo '</li>';

   //         }
   //     }

  //     echo '</ul>';
 //   }
//}



function makeMenu($menuArr, $parentId = 0, $isSub = false){

    $childArr = [];
     
      if (!empty($menuArr)){
        foreach ($menuArr as $key => $item){

            if ($item['parent'] == $parentId){
                if($item['parent'] == $parentId){
                    $childArr [] = $item;
                    unset ($menuArr[$key]);
                }
            }
        }
   
    if (!empty($childArr)){

        echo ($isSub)? '<ul class = "sub-menu">' :  '<ul class = "menu">';
        
        foreach ($childArr as $key => $item){

            echo '<li>';
            
            echo '<a href = "'.$item['link'].'">'.$item['title'].'</a>';

            makeMenu($menuArr, $item['id'], true);
            
            echo '</li>';
        }
        
    }
     echo '</ul>';
    }
}

// This return function :

function getTreeMenu($menuArr, $parentId = 0, &$resultArr =[]){

    if(!empty($menuArr)){
        foreach ($menuArr as $key => $item){
            if ($item ['parent'] == $parentId){

                $resultArr [$key] = $item;

                getTreeMenu($menuArr, $item['id'], $resultArr[$key]['sub']);

                if (empty($resultArr[$key]['sub'])){
                    unset($resultArr[$key]['sub']);
                }

                unset($menuArr[$key]);

            }
        }
    }

    return $resultArr;
}

function GetChildCategories($catetoryArr, $parentId = 0, &$resultArr = []){

    if(!empty($catetoryArr)){
        foreach ($catetoryArr as $key =>$item){

            if($item['parent'] == $parentId){
                $resultArr[] = $item['id'];

                GetChildCategories($catetoryArr, $item['id'], $resultArr);

            }
        }
    }
    return $resultArr;
}
