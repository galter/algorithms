<?php
    function linear_search($key, $n, $arr){        
        $n--;
        // catch last position and store...
        $iLast = $arr[$n];

        // put the $key value on last position...        
        $arr[$n] = $key;

        // initalize $i for while looping...
        $i = 0;
        // while element on $i index not equal to $key...        
        while ($arr[$i] != $key) {
            // increment $i...
            $i++;
        }

        // come back with the real last element...
        $arr[$n] = $iLast;

        // if element on $i index equal to $key return $i else return -1...
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
