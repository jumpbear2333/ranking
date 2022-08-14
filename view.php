<?php

function print_ranking($data,$name=false){
    echo "\n";
    echo sprintf("%-8s %-12s %-10s","ranking","name", "score");
    foreach ($data as $value){
        if ($name&&$name==$value[USER_NAME]){
            echo sprintf("\n\e[0;31m%-8s %-12s %-10s\e[0m", $value[USER_RANKING], $value[USER_NAME], $value[USER_SCORE]);
        }else {
            echo sprintf("\n%-8s %-12s %-10s", $value[USER_RANKING], $value[USER_NAME], $value[USER_SCORE]);
        }
    }
    echo "\n";
}


