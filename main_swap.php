<?php
print_r($_GET);
if(isset($_GET['problem'])){
    $problem=$_GET['problem'];
} else {
    $problem='';
}

switch (TRUE) {
    case ($problem=="run_proof"):
        require_once"run_proof/builder.php";
        break;
    case ($problem=="existence_hell"):
        require_once"existence_hell/builder.php";
        break;
    case ($problem=="cors"):
        require_once"cors_proof/builder.php";
        break;
    case ($problem=="500"):
        require_once"500_proof/builder.php";
        break;
    default:
        echo "Please select a problem.";
}
