<?php
function make_link($link_text, $div, $href, $url){
    echo"<a href='?$url' class='box_link' onclick='return false' onmousedown='swapContent(\"$href\", \"$url\", $div)'>$link_text</a>";
}
