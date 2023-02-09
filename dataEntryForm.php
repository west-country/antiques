<?php

//story2

require_once('src/db.php');
require_once('src/functions.php');
//require_once('index.php');

$db = connectToDb('collection');


if(isset($_GET['name']) && isset($_GET['origin']) && isset($_GET['description']) && isset($_GET['year']) && isset($_GET['image'])) {
    $inputArray = array($_GET['name'], $_GET['origin'], $_GET['description'], $_GET['year'], $_GET['image']);
    //return $inputArray;
    addToDB($db, $inputArray);
    echo "<p>'" . $_GET['name'] . "' successfully added to the collection.<div><a href='index.php'> Go to homepage</a></div>";
    }

?>


<html>
<h1>Add entry to collection</h1>
    <form action="dataEntryForm.php" method="get">
        <div>
<input type="text" name="name">
<label for="name">Name</label>
    </div>
    <div>
<input type="text" name="origin">
<label for="origin">Origin</label>
    </div>
    <div>
<input type="text" name="description">
<label for="description">Description</label>
    </div>
<input type="number" name="year">
<label for="year">Year</label>
    <div>
<input type="text" name="image">
<label for="image">Image (filename)</label>
    </div>
<input type="submit" value="Submit">
</form>


</html>