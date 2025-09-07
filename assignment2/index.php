<?php

include("functions/header.php");
include("functions/functions.php");
$data = array();
?>

<table class="personalInfo">
    <tr>
        <th>Name </th>
        <td>Doan The Nam</td>
    </tr>
    <tr>
        <th>Student ID </th>
        <td>103582323</td>
    </tr>
    <tr>
        <th>Email </th>
        <td>103582323@student.swin.edu.au</td>
    </tr>
</table>
<p>
    I declare that this assignment is my individual work.
    I have not worked collaboratively nor have I copied from
    any other student’s work or from any other source.
</p>
<?php
    require_once("functions/settings.php");
    if ($conn) {
        require_once("functions/settings.php");
        createTables($conn);
        echo checkIfTableHasValue($conn);
    } else {
        $state = "error";
        array_push($data, "No Connection to Database", "Please check that you have valid credential");
        echo displayMessage($data, $state);
    }

    mysqli_close($conn);
    include("functions/footer.php");
?>