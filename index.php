<?php
require_once('src/functions.php');
require_once('src/db.php');

$db = connectToDb('collection');

$antiques = getAllAntiques($db);

?>

<html lang="en">
<head>
    <title>Mr Client's Antique Spoon Collection</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <header class="header">
        <h1>Mr Client's Antique Spoon Collection</h1>
        <p>Hello, welcome to my antique spoon portal.</p>
        <p>I hope you enjoy perusing my collection.</p>
    </header>
    <div>
        <?php foreach($antiques as $antique) {
            echo displaySpoonDetails($antique);
        }
        try {
            $malArray = [
                "kjaf" => "1", 
                "anfgaon" => "Antique", 
                "origin" => "Wales", 
                "description" => "A description of antique"
            ];
            echo displaySpoonDetails($malArray);
        }
        catch (Exception $exception) {
            error_log($exception->getMessage(), 3, 'serverLog.log');
        }?>
    </div>
   </body>
</html>