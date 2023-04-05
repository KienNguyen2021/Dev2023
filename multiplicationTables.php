<table  border ="1" width ="100%">
    <tr>
            <?php 
            for( $i =1; $i <= 5; $i++){
                echo '<td>';

                for($j =1; $j <=10; $j++){
                    echo $i.' x '.$j.' = '.$i*$j. ' <br>';
                }
                echo '</td';
            }
            ?>

    </tr>


    <tr>
            <?php 
            for( $i = 6; $i <= 10; $i++){
                echo '<td>';

                for($j =1; $j <=10; $j++){
                    echo $i.' x '.$j.' = '.$i*$j. ' <br>';
                }
                echo '</td';
            }
            ?>

    </tr>

</table>
