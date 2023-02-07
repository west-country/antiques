<?php

require('src/functions.php');

use PHPUnit\Framework\TestCase;

class Functions extends Testcase
{
    public function testPrintPlease()
    {
        $elements = (
            [id] => 1, [name] => Antique, [origin] => Wales, [description] => A description of antique, [year] => 1200;
        )
       $expectedOutput = "<h2>Name: " . $elements['name'] . "</h2><p>Origin: " . $elements['origin'] . "</p><p>Description: " . $elements['description'] . "</p><p>Year: " . $elements['year'] . "</p>";
       $actualOutput = ""
    }
}