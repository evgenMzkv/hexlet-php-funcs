<?php

namespace App\Sum;

function sum1($start, $finish, $func) {
    if ($start > $finish) {
        return 0;
    }

    return $func($start) + sum1($start + 1, $finish, $func);
}

/**
 * Задача реализовать функцию sum1, используя итеративный процесс.
 *
 * @param $start
 * @param $finish
 * @param $func
 * @return mixed
 */
function sum($start, $finish, $func)
{
    // BEGIN (write your solution here)
    $iter = function($start, $acc) use (&$iter, &$func, $finish) {
        if ($start > $finish) {
            return $acc;
        }

        $acc += $func($start);
        return $iter(++$start, $acc);
    };

    return $iter($start, 0);
    // END
}
