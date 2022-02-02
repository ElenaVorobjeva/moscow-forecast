<?php
    include "../../../assets/php/aero_params.php";

    echo "<ul class='l_aero_list'>";
    foreach ($aero_diagram as $key => $value) {
        if($key == 11 || $key == 14) {
            echo "<li onClick='l_show(".$key.");'><a href='#'>".$value[0]."</a></li>";
        }
    }
    echo "</ul>";
?>
