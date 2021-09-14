<?php
    echo("Some text<br><br>");

    for($i = 0; $i <= 10; $i++) {
        echo("$i Some more text<br>");
    }

    function writeNumbers($min, $max, $par) {
        for($variable = $min; $variable <= $max; $variable++) {
            if($par == true) {
                if($variable%2 == 0) {
                    echo($variable."<br>");
                }
            } else {
                if($variable%2 != 0) {
                    echo($variable."<br>");
                }
            }
        }
    }

    writeNumbers(12, 27, true);
    echo("<br>");
    writeNumbers(12, 27, false);
?>