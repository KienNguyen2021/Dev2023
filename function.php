<?php 


function buildMenu($customerArr, $isSub = false){

    if (!empty($customerArr)){

        echo '<ul class = "menu">';

        foreach ($customerArr as $item){

            echo '<li>';
            
                echo '<a href = "'.$item['link'].'">'.$item['title'].'</a>';

            // Submenu
      //      if(!empty($item['sub'])){

       //         echo '<ul class ="sub-menu">';

      //
     //               echo '<li>';
                    
    //        echo '<a href = "'.$sub   ['link'].'">'.$sub['title'].'</a>';

     //              echo  '</li>';

      //                    }
       //         echo '</ul>';
      //      }    

      // Submenu Function here :

      buildMenu($item['sub']);
    
            echo '</li>';
  
           }

        echo '</ul>';

    }


}

