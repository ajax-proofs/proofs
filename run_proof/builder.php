<?php
if (isset($_GET['run']) && $_GET['run']=='pre'){
    $run=$_GET['run']."load";
}if (isset($_GET['run']) && $_GET['run']=='post'){
    $run=$_GET['run']."load";
}
else {
    $run='';
}
require_once"swapper.php";

echo"<table>
    <tr>
        <td>";
        make_link("Normal JavaScript Function Call", "proof_area", "main_swap.php", "problem=run_proof&run=pre");
    echo"</td>
        <td>";
        make_link("Post Load JavaScript Function Call", "proof_area", "main_swap.php", "problem=run_proof&run=post");
    echo"</td>
        <td>
        <a href='test' onclick='return false' onmousedown='call_accordion()'>Call Accordion Function</a>
</td>
    </tr>
    <tr>
        <td>Appearance: Accordion</td>
        <td colspan='2'>Load Type: $run</td>
    </tr>
</table>";

echo"<p></p>";

require_once"Accordion.php";

if($_GET['run']=='post'){
    echo "<script>";
        require_once "proof.js";
    echo"</script>";
}
