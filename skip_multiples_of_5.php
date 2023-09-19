<?php
//without multiple of 5.........

for ($i = 1; $i <= 50; $i++) {
    if ($i % 5 == 0)
        continue;
    echo $i . ",";
    if ($i == 49) {
        echo $i . ".";
    }
}
echo "\n";

//only multiple of 5
echo "only miltipuler of 5";
echo "\n";

for ($i = 1; $i <= 50; $i++) {
    if ($i % 5 == 0)
        echo $i . ",";
    if ($i == 50) {
        echo $i . ".";
    }
}

//break statement


