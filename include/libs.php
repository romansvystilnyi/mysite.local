<?php

function drawTable($cols = 10, $rows = 2)
{
    echo "<table border='2' cellspacing='2' cellpadding='10'>";
    for ($tr = 1; $tr <= $rows; $tr++) {
        echo "<tr>\n";
        for ($tr = 1; $tr <= 5; $tr++) {
            echo "<td>\n";
            for ($td = 1; $td <= $cols; $td++) {
                echo $tr . " x " . $td . " = " . $tr * $td . "<br>";
            }
            echo "</td>\n";
        }
        echo "</tr>\n";

        echo "<tr>\n";
        for ($tr = 6; $tr <= 10; $tr++) {
            echo "<td>\n";
            for ($td = 1; $td <= $cols; $td++) {
                echo $tr . " x " . $td . " = " . $tr * $td . "<br>";
            }
            echo "</td>\n";
        }
        echo "</tr>\n";
    }
    echo "</table>";
}

function decorateTable($cols = 10, $rows = 2)
{
    echo "<table border='2' cellspacing='2' cellpadding='10'>";
    for ($tr = 1; $tr <= $rows; $tr++) {
        echo "<tr>\n";
        for ($tr = 1; $tr <= 5; $tr++) {
            echo "<td>\n";
            for ($td = 1; $td <= $cols; $td++) {
                switch ($tr) {
                    case 0:
                        $num = "<span class='cyan-0'>" . $tr . "</span>";
                        break;
                    case 1:
                        $num = "<span class='red-1'>" . $tr . "</span>";
                        break;
                    case 2:
                        $num = "<span class='green-2'>" . $tr . "</span>";
                        break;
                    case 3:
                        $num = "<span class='yellow-3'>" . $tr . "</span>";
                        break;
                    case 4:
                        $num = "<span class='blue-4'>" . $tr . "</span>";
                        break;
                    case 5:
                        $num = "<span class='orange-5'>" . $tr . "</span>";
                        break;
                    case 6:
                        $num = "<span class='pink-6'>" . $tr . "</span>";
                        break;
                    case 7:
                        $num = "<span class='brown-7'>" . $tr . "</span>";
                        break;
                    case 8:
                        $num = "<span class='salmon-8'>" . $tr . "</span>";
                        break;
                    case 9:
                        $num = "<span class='blueviolet-9'>" . $tr . "</span>";
                        break;
                    case 10:
                        $snum = str_split($tr);
                        $snum1 = array_shift($snum);
                        $snum2 = array_pop($snum);
                        unset($snum);
                        $num = "<span class='red-1'>" . $snum1 . "</span>" . "<span class='cyan-0'>" . $snum2 . "</span>";
                        break;
                }
                switch ($td) {
                    case 0:
                        $num2 = "<span class='cyan-0'>" . $td . "</span>";
                        break;
                    case 1:
                        $num2 = "<span class='red-1'>" . $td . "</span>";
                        break;
                    case 2:
                        $num2 = "<span class='green-2'>" . $td . "</span>";
                        break;
                    case 3:
                        $num2 = "<span class='yellow-3'>" . $td . "</span>";
                        break;
                    case 4:
                        $num2 = "<span class='blue-4'>" . $td . "</span>";
                        break;
                    case 5:
                        $num2 = "<span class='orange-5'>" . $td . "</span>";
                        break;
                    case 6:
                        $num2 = "<span class='pink-6'>" . $td . "</span>";
                        break;
                    case 7:
                        $num2 = "<span class='brown-7'>" . $td . "</span>";
                        break;
                    case 8:
                        $num2 = "<span class='salmon-8'>" . $td . "</span>";
                        break;
                    case 9:
                        $num2 = "<span class='blueviolet-9'>" . $td . "</span>";
                        break;
                    case 10:
                        $snum = str_split($td);
                        $snum1 = array_shift($snum);
                        $snum2 = array_pop($snum);
                        unset($snum);
                        $num2 = "<span class='red-1'>" . $snum1 . "</span>" . "<span class='cyan-0'>" . $snum2 . "</span>";
                        break;
                }
                $resl3 = $tr * $td;
                $snum = str_split($resl3);
                $snum1 = array_shift($snum);
                $snum2 = array_pop($snum);
                unset($snum);
                switch ($snum1) {
                    case 0:
                        $snum1 = "<span class='cyan-0'>" . $snum1 . "</span>";
                        break;
                    case 1:
                        $snum1 = "<span class='red-1'>" . $snum1 . "</span>";
                        break;
                    case 2:
                        $snum1 = "<span class='green-2'>" . $snum1 . "</span>";
                        break;
                    case 3:
                        $snum1 = "<span class='yellow-3'>" . $snum1 . "</span>";
                        break;
                    case 4:
                        $snum1 = "<span class='blue-4'>" . $snum1 . "</span>";
                        break;
                    case 5:
                        $snum1 = "<span class='orange-5'>" . $snum1 . "</span>";
                        break;
                    case 6:
                        $snum1 = "<span class='pink-6'>" . $snum1 . "</span>";
                        break;
                    case 7:
                        $snum1 = "<span class='brown-7'>" . $snum1 . "</span>";
                        break;
                    case 8:
                        $snum1 = "<span class='salmon-8'>" . $snum1 . "</span>";
                        break;
                    case 9:
                        $snum1 = "<span class='blueviolet-9'>" . $snum1 . "</span>";
                        break;
                }
                switch ($snum2) {
                    case 0:
                        $snum2 = "<span class='cyan-0'>" . $snum2 . "</span>";
                        break;
                    case 1:
                        $snum2 = "<span class='red-1'>" . $snum2 . "</span>";
                        break;
                    case 2:
                        $snum2 = "<span class='green-2'>" . $snum2 . "</span>";
                        break;
                    case 3:
                        $snum2 = "<span class='yellow-3'>" . $snum2 . "</span>";
                        break;
                    case 4:
                        $snum2 = "<span class='blue-4'>" . $snum2 . "</span>";
                        break;
                    case 5:
                        $snum2 = "<span class='orange-5'>" . $snum2 . "</span>";
                        break;
                    case 6:
                        $snum2 = "<span class='pink-6'>" . $snum2 . "</span>";
                        break;
                    case 7:
                        $snum2 = "<span class='brown-7'>" . $snum2 . "</span>";
                        break;
                    case 8:
                        $snum2 = "<span class='salmon-8'>" . $snum2 . "</span>";
                        break;
                    case 9:
                        $snum2 = "<span class='blueviolet-9'>" . $snum2 . "</span>";
                        break;
                }
                $resl2 = $snum1 . $snum2;
                echo $num . " x " . $num2 . " = " . $resl2 . "<br>";
            }
            echo "</td>\n";
        }
        echo "</tr>\n";

        echo "<tr>\n";
        for ($tr = 6; $tr <= 10; $tr++) {
            echo "<td>\n";
            for ($td = 1; $td <= $cols; $td++) {
                switch ($tr) {
                    case 0:
                        $num = "<span class='cyan-0'>" . $tr . "</span>";
                        break;
                    case 1:
                        $num = "<span class='red-1'>" . $tr . "</span>";
                        break;
                    case 2:
                        $num = "<span class='green-2'>" . $tr . "</span>";
                        break;
                    case 3:
                        $num = "<span class='yellow-3'>" . $tr . "</span>";
                        break;
                    case 4:
                        $num = "<span class='blue-4'>" . $tr . "</span>";
                        break;
                    case 5:
                        $num = "<span class='orange-5'>" . $tr . "</span>";
                        break;
                    case 6:
                        $num = "<span class='pink-6'>" . $tr . "</span>";
                        break;
                    case 7:
                        $num = "<span class='brown-7'>" . $tr . "</span>";
                        break;
                    case 8:
                        $num = "<span class='salmon-8'>" . $tr . "</span>";
                        break;
                    case 9:
                        $num = "<span class='blueviolet-9'>" . $tr . "</span>";
                        break;
                    case 10:
                        $snum = str_split($tr);
                        $snum1 = array_shift($snum);
                        $snum2 = array_pop($snum);
                        unset($snum);
                        $num = "<span class='red-1'>" . $snum1 . "</span>" . "<span class='cyan-0'>" . $snum2 . "</span>";
                        break;
                }
                switch ($td) {
                    case 0:
                        $num2 = "<span class='cyan-0'>" . $td . "</span>";
                        break;
                    case 1:
                        $num2 = "<span class='red-1'>" . $td . "</span>";
                        break;
                    case 2:
                        $num2 = "<span class='green-2'>" . $td . "</span>";
                        break;
                    case 3:
                        $num2 = "<span class='yellow-3'>" . $td . "</span>";
                        break;
                    case 4:
                        $num2 = "<span class='blue-4'>" . $td . "</span>";
                        break;
                    case 5:
                        $num2 = "<span class='orange-5'>" . $td . "</span>";
                        break;
                    case 6:
                        $num2 = "<span class='pink-6'>" . $td . "</span>";
                        break;
                    case 7:
                        $num2 = "<span class='brown-7'>" . $td . "</span>";
                        break;
                    case 8:
                        $num2 = "<span class='salmon-8'>" . $td . "</span>";
                        break;
                    case 9:
                        $num2 = "<span class='blueviolet-9'>" . $td . "</span>";
                        break;
                    case 10:
                        $snum = str_split($td);
                        $snum1 = array_shift($snum);
                        $snum2 = array_pop($snum);
                        unset($snum);
                        $num2 = "<span class='red-1'>" . $snum1 . "</span>" . "<span class='cyan-0'>" . $snum2 . "</span>";
                        break;
                }
                $resl2 = $tr * $td;
                $snum = str_split($resl2);
                $snum1 = array_shift($snum);
                $snum2 = array_shift($snum);
                $snum3 = array_pop($snum);
                unset($snum);
                switch ($snum1) {
                    case 0:
                        $snum1 = "<span class='cyan-0'>" . $snum1 . "</span>";
                        break;
                    case 1:
                        $snum1 = "<span class='red-1'>" . $snum1 . "</span>";
                        break;
                    case 2:
                        $snum1 = "<span class='green-2'>" . $snum1 . "</span>";
                        break;
                    case 3:
                        $snum1 = "<span class='yellow-3'>" . $snum1 . "</span>";
                        break;
                    case 4:
                        $snum1 = "<span class='blue-4'>" . $snum1 . "</span>";
                        break;
                    case 5:
                        $snum1 = "<span class='orange-5'>" . $snum1 . "</span>";
                        break;
                    case 6:
                        $snum1 = "<span class='pink-6'>" . $snum1 . "</span>";
                        break;
                    case 7:
                        $snum1 = "<span class='brown-7'>" . $snum1 . "</span>";
                        break;
                    case 8:
                        $snum1 = "<span class='salmon-8'>" . $snum1 . "</span>";
                        break;
                    case 9:
                        $snum1 = "<span class='blueviolet-9'>" . $snum1 . "</span>";
                        break;
                }
                switch ($snum2) {
                    case 0:
                        $snum2 = "<span class='cyan-0'>" . $snum2 . "</span>";
                        $snum3 = "<span class='cyan-0'>" . $snum3 . "</span>";
                        break;
                    case 1:
                        $snum2 = "<span class='red-1'>" . $snum2 . "</span>";
                        break;
                    case 2:
                        $snum2 = "<span class='green-2'>" . $snum2 . "</span>";
                        break;
                    case 3:
                        $snum2 = "<span class='yellow-3'>" . $snum2 . "</span>";
                        break;
                    case 4:
                        $snum2 = "<span class='blue-4'>" . $snum2 . "</span>";
                        break;
                    case 5:
                        $snum2 = "<span class='orange-5'>" . $snum2 . "</span>";
                        break;
                    case 6:
                        $snum2 = "<span class='pink-6'>" . $snum2 . "</span>";
                        break;
                    case 7:
                        $snum2 = "<span class='brown-7'>" . $snum2 . "</span>";
                        break;
                    case 8:
                        $snum2 = "<span class='salmon-8'>" . $snum2 . "</span>";
                        break;
                    case 9:
                        $snum2 = "<span class='blueviolet-9'>" . $snum2 . "</span>";
                        break;
                }
                $resl2 = $snum1 . $snum2 . $snum3;
                echo $num . " x " . $num2 . " = " . $resl2 . "<br>";
            }
            echo "</td>\n";
        }
        echo "</tr>\n";
    }
    echo "</table>";
}