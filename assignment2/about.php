<?php
include("functions/header.php");
echo "
    <h2>About This Assignment</h2>
    <nav class='display'>
        <p><strong>Task that are not attempted or completed?</strong></p>
        <ul>
            <li>Task 9 - Mutual Friend Count</li>
        </ul>
        <br/>
        <p><strong>Special Features?</strong></p>
        <ul>
            <li>Have a reuseable 'error handling' system.</li>
            <li>Split 'header.php' and 'footer.php'.</li>
            <li>'functions.php' handle most of the work.</li>
            <li>Changes navigation button depends on where the user are in the website, show it on top of the web page.</li>
        </ul>
        <br/>
        <p>Which parts did you have trouble with?</p>
        <ul>
            <li>Task 9, I couldn't figure out how to get mutual friend.</li>
        </ul>
        <br/>
        <p>What would you like to do better next time? </p>
        <ul>
            <li>i might try to complete task 9, and make the code clearer to see.
            </li>
        </ul>
        <p><strong>List of links:</strong></p>
        <ul>
            <li><a href='friendlist.php'>Friends List (required to be logged in)</a></li>
            <li><a href='friendadd.php'>Add Friends (required to be logged in)</a></li>
            <li><a href='index.php'>Home Page</a></li>
        </ul>
    </nav>
";
    include("functions/footer.php");
?>