<?php
    include "../../../assets/php/map_params.php";


    foreach ($domens["cfo"] as $key) {
        $selected = ($key == $domens["cfo"][1]) ? ' selected="selected"' : '';
        echo "<option value='".$key."' ".$selected.">".$maps[$key][0]."</option>";
    }
?>
