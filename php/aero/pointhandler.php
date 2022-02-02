<?php

    include "../../../assets/php/aero_params.php";

    echo "<p class='label'>Населенный пункт:</p>";
    foreach ($domens["cfo"] as $key) {
        $checked = ($key == $domens["cfo"][0]) ? ' checked="checked"' : '';
        echo "<label><input type='radio' name='pointSel' value='".$key."' ".$checked." onClick='getModelList();'>".$aero_diagram[$key][0]."</label>";
    }
?>
