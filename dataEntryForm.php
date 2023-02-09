<?php

//story2

require_once('src/db.php');
require_once('src/functions.php');
require_once('index.php');

$db = connectToDb('collection');


if(isset($_GET['name']) && isset($_GET['origin']) && isset($_GET['description']) && isset($_GET['year']) && isset($_GET['image'])) {
    $inputArray = array($_GET['name'], $_GET['origin'], $_GET['description'], $_GET['year'], $_GET['image']);
    //return $inputArray;
    addToDB($db, $inputArray);
    echo "<p>'" . $_GET['name'] . "' successfully added to the collection.<div><a href='index.php'> Go to homepage</a></div>";
    }

    foreach($antiques as $antique) {
        $nameArray = [];
        $nameArray[] = $antique["name"];
        }
    if(isset($_GET['removeName'])) {
        foreach($nameArray as $name) {
            removeFromDB($db, $name, $_GET['removeName'], );
            echo "<p>'" . $_GET['name'] . "' successfully removed from the collection.<div><a href='index.php'> Go to homepage</a></div>";
            return;
        }
        foreach($nameArray as $name)
    //throw new Exception("Name field must match existing entry\n");   
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


<html>
<h1>Remove entry from collection</h1>
    <form action="dataEntryForm.php" method="get">
        <div>
<input type="text" name="removeName">
<label for="name">Enter name of item</label>
<div>
<input type="submit" value="Submit">
</div>
</form>


</html>