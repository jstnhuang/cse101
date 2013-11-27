<?php

function makeGolfScoreboard ($id, $par) {
    $output = '';
    $output .=
    '<div class="cssGolfScore" id="'.$id.'-golfScore">
        <p>Par is <span class="par">'.$par.'</span> non-whitespace characters.
        You\'ve typed <span class="typed">0</span> non-whitespace characters so
        far.</p>
    </div>
    <script><!--
        initScoreCount(\''.$id.'\');
    --></script>';
    return $output;
}

?>