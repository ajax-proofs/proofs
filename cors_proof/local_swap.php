<?php
if(isset($_POST['scrape']) && $_POST['scrape']){
    $scrape=$_POST['scrape'];
} else {
    $scrape='';
}
$scrape="https://jqueryui.com/resources/demos/accordion/default.html";

if(isset($_POST['mode']) && $_POST['mode']){
    $mode=$_POST['mode'];
} else if(isset($_GET['mode']) && $_GET['mode']){
    $mode=$_GET['mode'];
} else {
    $mode='';
}

switch (TRUE) {
    case ($mode == "error"):
        require_once "error.php";
        break;
    case ($mode == "cURL"):
        echo"<button onmousedown='swapContent(\"cors_proof/cURL.php\", \"\", CORS)'><h1>ajax load</h1></button>";
        break;
}
