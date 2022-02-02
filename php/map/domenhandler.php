<?php
    include "../../../assets/php/map_params.php";

    echo "<p class='label'>Домен:</p>";
    foreach ($domens["cfo"] as $key) {
        $checked = ($key == $domens["cfo"][1]) ? ' checked="checked"' : '';
        echo "<label><input type='radio' name='domenSel' value='".$key."' ".$checked." onClick='getModelList();'>".$maps[$key][0]."</label>";
    }
?>
