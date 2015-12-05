$(function() {
    $( "#accordion" ).accordion();
});

function call_accordion(){
    $( "#accordion" ).accordion();
}

function live_search(){
    insert = document.getElementById('insert').value;
    swapContent("existence_hell/server_vars.php", "insert="+insert , content);
}
