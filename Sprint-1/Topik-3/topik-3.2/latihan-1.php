<?php

for ($r=1; $r <= 9; $r++) { 
    for ($i=1; $i <= 9; $i++) { 
        if ($r == $i || $r > $i) {
            echo "&nbsp+&nbsp";
        } else {
            echo "&nbsp&nbsp-&nbsp";
        }
    }
    echo "<br>";
}