<div id="accordion">
    <h3>The Problem</h3>
    <div>
            You can get two views, one is JavaScript presentation to make the page look all "shinny", and the other is like what comes out of your rear (****).
    </div>
    <h3>How to solve it</h3>
    <div>
            When calling the ajax feed function you need to call the function that decides how to present the data to load the new content.
    </div>
    <h3>Why does it get caused?</h3>
    <div>
        JavaScript engines by default run JavaScript on load by scanning the HTML once, then says
        "I'm done scanning, I need to run this object while it still exists in the default load format".
    </div>
    <h3>Psudocode Views</h3>
    <div>
        <b>Normal:</b><br>
        Load All javascript<br>
        content change<br>
        <p></p>

        <b>Postload:</b><br>
        Load All javascript<br>
        content change<br>
        load a snip-it to transform<br>
        <p></p>

        <b>Call:</b><br>
        Load All javascript<br>
        content change<br>
        click function call, and transform
    </div>
</div>
