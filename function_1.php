<?php 


function buildMenu($customerArr, $isSub = false){

    if (!empty($customerArr)){

       echo ($isSub)?'<ul class ="sub-menu">' :'<ul class ="menu">';

       foreach ($customerArr as $item){

        echo '<li>';
        

        echo '<a href ="'.$item['link'].'">'.$item['title'].'</a>';

        
  // SUbmenu :
  
            if (!empty($item['sub'])){

                 BuildMenu($item['sub'], true);
            }
        
        echo '</li>';

       }

        echo '</ul>';

    }


}

