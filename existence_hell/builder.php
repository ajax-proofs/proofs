<?php
require_once"swapper.php";

echo"
this one currently works fine somehow, but I've ran into it before.
<table>
    <tr>
        <td colspan='2'>
            <form method='post' action='?problem=existence_hell'>
            <input type='text' name='insert' id='insert' placeholder='enter text here' onkeyup='live_search()'>
            </form>
        </td>
    </tr>
    <tr>
        <td>";
        make_link("Pre-existing", "proof_area", "main_swap.php", "problem=existence_hell");
        echo"</td>
        <td>
            <a href='?problem=existence_hell'>Hard Load</a>
        </td>
    </tr>
    <tr>
        <td id='content'>";
            require_once"server_vars.php";
    echo"</td>
    </tr>
</table>
";
