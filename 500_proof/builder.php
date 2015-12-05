<br>Press ctrl+shift+j to view error in action

<?php
if (isset($_GET['run']) && $_GET['run']!=''){
    $run=$_GET['run'];
} else {
    $run='Pick an error to simulate';
}
require_once"swapper.php";
echo"
    <table>
        <tr>
            <td>";
//500 error
            make_link("500 error", "proof_area", "main_swap.php", "problem=500&run=error");
            echo"</td>
            <td>";
//Work Around
            make_link("work around", "proof_area", "main_swap.php", "problem=500&run=work_around");
            echo"</td>
        </tr>
        <tr>
            <td>error: 500</td>
            <td>run mode: $run</td>
        </tr>
    </table>
";
switch (TRUE) {
    case ($run == "error"):
        require_once "server_fault.php";
        break;
    case ($run == "work_around"):
        require_once "working.php";
        break;
}
