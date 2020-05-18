<?php 
    echo "<h1>Continue & Break</h1>";
    echo "<br><hr>";
    for($i = 1; $i < 30; $i++) {
        if ($i === 13){
            echo "$i is My Favourite Number, ";
        }
        echo "$i, ";
    }
    echo "<br><hr>";
    for($i = 1; $i < 30; $i++) {
        if ($i === 13){
            echo "$i is My Favourite Number, ";
            continue;
        }
        echo "$i, ";
    }
    echo "<br><hr>";
    for($i = 1; $i < 30; $i++) {
        if ($i === 13){
            echo "$i is My Favourite Number, ";
            break;
        }
        echo "$i, ";
    }

?>