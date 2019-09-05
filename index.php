<?php
    function findMin($arr) {
        $min = $arr[0];
        foreach ($arr as $key => $value) {
            if ($arr[$key] < $min) {
                $min = $arr[$key];
            }
        }
        return $min;
    }
    $arr = [2,5,3,1,4,8,5];
    echo findMin($arr);
?>