<?php
require_once('src/functions.php');
require_once('src/db.php');
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
        <?=printPlease($antiques);?>
</div>
        <!--call function-->
   </body>
</html>