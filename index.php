<?php
class Solution
{
    /**
     * @param String[] $ops
     * @return Integer
     */
    function calPoints($ops)
    {
        $score = [];
        $index = 0;
        foreach ($ops as $op) {
            if ($op == "D") {
                $score[] = $score[$index - 1] * 2;
                $index++;
            } elseif ($op == "C") {
                array_pop($score);
                $index--;
            } elseif ($op == "+") {
                $score[] = $score[$index - 1] + $score[$index - 2];
                $index++;
            } else {
                $score[] = $op;
                $index++;
            }
        }
        $result = 0;
        foreach ($score as $s) {
            $result += $s;
        }
        return $result;
    }
}
?>
