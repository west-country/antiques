<?php

function printString(array $elements): string {
    return "<h2>Name: " . $elements['name'] . "</h2><p>Origin: " . $elements['origin'] . "</p><p>Description: " . $elements['description'] . "</p><p>Year: " . $elements['year'] . "</p>";
}

//function printPlease(array $array) {
   // foreach($array as $elements) {
       // echo "<h2>Name: " . $elements['name'] . "</h2><p>Origin: " . $elements['origin'] . "<//////p><p>Description: " . $elements['description'] . "</p><p>Year: " . $elements['year'] . "</p>";
   // }
   // return;
//}
