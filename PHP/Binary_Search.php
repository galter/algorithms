<?php
    function binary_search($key, $n, $arr){        
        // initialize result with -1...
        $bin_search = -1;

        // initialize first and last values...
        $vInit = $arr[0];
        $vFin = $n -1;

        // while first element is not minor or equal than last element...        
        while ($vInit <= $vFin) {
            // divide the sum of the first and last values for discover the middle value... 
            $vMid = floor(($vInit + $vFin) / 2);

            // if middle value is equal to $key then return the  index... 
            if ($Key == $arr[$vMid]) {
                $bin_search = $vMid;                
            }

            // if $key is higher than middle value then $vInit receive middle value plus one, else $vFin receive middle value less one...
            if ($key > $arr[$vMid]) {
                $vInit = $vMid + 1;
            } else {
                $vFin = $vMid - 1;
            }
        }

        return $bin_search;
    }    
?>

<html>    
    <head>
        <title>Linear Search</title>
    </head>
    <body>
        <?php 
            $arr = array(0, 2, 4, 6, 8, 10, 12, 14, 16, 18);
            $key = 16;

            echo "The Array is: [ " . implode(",", $arr) . " ]";

            echo "<br/>";

            echo "The index of number ". $key ." is:" . binary_search($key, count($arr), $arr);
        ?>    
    </body>
</html>
