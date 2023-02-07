<?php
require_once('src/functions.php');
require_once('src/db.php');

$db = connectToDb('collection');
$antiques = getAllAntiques($db);

//echo '<pre>';
//print_r($antiques);
//echo '<pre>';
?>

<html>
<head>
    <title>Mr Client's Antique Collection</title>
    <!--<link rel="stylesheet" type="text/css" href="style.css">-->
    <!--<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css">-->
</head>
<body>
    <header class="header">
            <h1>Mr Client's Antique Collection</h1>
            <p>Hello, welcome to my antique collection.<p>
    </header>
    <div>
    <?php foreach($antiques as $antique) {
    echo detailsString($antique);
    }?>
</div>
   </body>
</html>