<?php
    function sum($n) {
        $res = 0;

        for($i = 1; $i < $n; $i++) {
            if($i % 3 == 0) {
                $res += $i;
            } else if($i % 5 == 0) {
                $res += $i;
            }
        }

        return $res;
    }

    var_dump(sum(1000));