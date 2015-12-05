<?php
require_once"swapper.php";
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


echo"
<table>

<tr><td colspan='2'><form method='post' action='?problem=cors&mode=$mode' id='form'>
    scrape:<input type='text' placeholder='scrape what content?' id='scrape' name='scrape' value='$scrape'>
    <input type='hidden' name='mode' value='$mode'>
    <input type='submit'>
</form>
</td></tr>

    <tr>
        <td>";
make_link("normal", "CORS", "cors_proof/local_swap.php", "problem=cors&mode=error");
//normal
echo"</td>
        <td>";
make_link("cURL", "CORS", "cors_proof/local_swap.php", "problem=cors&mode=cURL");
//cURLed
echo"</td>
    </tr>

    <tr>
        <td>Problem: CORS</td>
        <td>Test: $mode</td>
    </tr>
    <tr>
        <td id='CORS'>Add on ajax submitter<br>";

require_once"cors_proof/local_swap.php";

echo"</td>
    </tr>
</table>
";
