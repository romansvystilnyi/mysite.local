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