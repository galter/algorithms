<?php
    function linear_search($key, $n, $arr){
        $n--;
        $iLast = $arr[$n];

        $arr[$n] = $key;

        $i = 0;
        while ($arr[$i] != $key) {
            $i++;
        }

        $arr[$n] = $iLast;

        if ($arr[$i] == $key) {
            $return = $i;
        } else {
            $return = -1;
        }

        return $return;
    }    
?>

<html>    
    <head>
        <title>Linear Search</title>
    </head>
    <body>
        <?php 
            $arr = array(3, 1, 4, 7, 10, 20, 17, 19, 15, 16, 18, 2, 5, 6, 8, 9, 11, 13, 12, 14);
            $key = 19;

            echo "The Array is: ";
            foreach($arr as $item) {
                echo $item . " ";
            }
            
            echo "<br/>";

            echo "Key is " . $key;

            echo "<br/>";

            echo "Index is " . linear_search($key, count($arr), $arr);
        ?>    
    </body>
</html>
