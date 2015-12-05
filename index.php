<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
    <script src="//code.jquery.com/jquery-1.10.2.js"></script>
    <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
    <script src="http://rawgit.com/FREE-FROM-CMS/content_swaper/master/engine.js"></script>
    <script src="proof.js"></script>
    <title>AJAX proofs</title>
</head>
<body>
<?php
require_once"swapper.php";

echo"
<table border='1'>
    <tr>
        <td>";
make_link("Run Proof", "proof_area", "main_swap.php", "problem=run_proof");

echo"</td>
        <td>";
make_link("Existence Hell Proof", "proof_area", "main_swap.php", "problem=existence_hell");

echo"</td>
        <td>";
make_link("CORS Proof", "proof_area", "main_swap.php", "problem=cors");

echo"</td>
        <td>";
make_link("500 Proof", "proof_area", "main_swap.php", "problem=500");

echo"</td>
    </tr>
    <tr>
        <td id='proof_area' colspan='4'>";
require_once"main_swap.php";
echo"
        </td>
    </tr>
</table>
";
?>
</body>
</html>
