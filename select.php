<?php 

$selectHTML = '<select name ="category">';

for ($i =2000; $i<=2023; $i++){

    $selectHTML.='<option value="'.$i.'"> Year    '.$i.'  </option>';
}

$selectHTML.='</select>';

echo' which year you were born :'. $selectHTML;